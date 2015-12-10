<?php
namespace RC\PaiementCMCICBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use RC\PaiementCMCICBundle\Form\Type\PaiementType;
use Symfony\Component\HttpFoundation\Response;

class SamplePaiementController extends Controller
{
    /**
     * Genere le formulaire
     * @param $tarif
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function paiementAllerAction($tarif)
    {
        $servicePaiement = $this->container->get('rc.paiementcmcic_tpe');

        // On retourne un objet Paiement initialisé par défaut avec les données de la config
        $paiement = $servicePaiement->getPaiementObjet($tarif, $this->getUser()->getEmail());

        /*
         * Ici on peut appeller d'autres setters sur notre objet paiement initialisé ex echeance ou tout autre infos non obligatoire
         * Il faut bien appeller la méthode handleMac a la fin car elle va générer une chaine de caractère unique grâce à la clé commercant
         * afin de protéger les données et éviter qu'ils soient modifiés par une personne mal intentionnée
         */

        $servicePaiement->handleHmac($paiement);

        $form = $this->createForm(
            new PaiementType(),
            $paiement,
            array(
                'method' => 'POST',
                'action' => $servicePaiement->getUrlPaiement(),
            )
        );

        return $this->render(
            'RCPaiementCMCICBundle:Paiement:paiement_form.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

    /**
     *
     * @Route(path="/paiement/retour/{status}", name="paiement-retour", requirements={
     * "status" : "success|error"
     * })
     * @param $status
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function paiementRetourAction($status = null)
    {
        return $this->render('RCPaiementCMCICBundle:Paiement:retour.html.twig', array(
            'status' => $status
        ));
    }

    /**
     * Controlleur qui intercepte la réponse des serveur CMCIC
     * @Route(path="/paiement/verification", methods={"GET", "POST"})
     * @param Request $request
     * @return Response
     */
    public function retourServeurAction(Request $request) {
        $servicePaiement = $this->container->get('rc.paiementcmcic_tpe');
        $serviceLogicPaiement = $this->container->get('rc.paiementcmcic_logic_tpe');

        if ($request->isMethod('POST')) {
            $parameters = $request->request->all();
        } else {
            $parameters = $request->query->all();
        }

        $verified = $servicePaiement->verifieSignature($parameters);

        if ($verified) {
            $serviceLogicPaiement->handlePaiementLogic($parameters);
        }

        $receipt = $servicePaiement->getFinalReceipt();

        $response = new Response();
        $response->setContent(printf($servicePaiement::$receipt, $receipt));
        $response->setStatusCode(Response::HTTP_OK);
        $response->headers->set('Content-Type', 'text/plain');
        $response->headers->set('Pragma', 'no-cache');

        return $response;
    }
}