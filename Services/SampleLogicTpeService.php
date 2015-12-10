<?php
namespace RC\PaiementCMCICBundle\Services;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

/**
 * Permet de gérer la logique métier après retour des serveurs CMCIC ex ajout / maj database etc
 * Il est important de ne pas effectuer le traitement métier dans la phase aller car c'est le
 * retour qui nous certifie que le paiement est passé ou non
 * Class LogicTpeService
 */
class SampleLogicTpeService
{
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function handlePaiementLogic($parameters) {
        switch($parameters['code-retour']) {
            case "Annulation" :
                // Payment has been refused
                // put your code here (email sending / Database update)
                // Attention : an autorization may still be delivered for this payment
                break;

            case "payetest":
                // Payment has been accepeted on the test server
                // put your code here (email sending / Database update)
                break;

            case "paiement":
                // Payment has been accepted on the productive server
                // put your code here (email sending / Database update)
                break;

            /*** ONLY FOR MULTIPART PAYMENT ***/
            case "paiement_pf2":
            case "paiement_pf3":
            case "paiement_pf4":
                // Payment has been accepted on the productive server for the part #N
                // return code is like paiement_pf[#N]
                // put your code here (email sending / Database update)
                // You have the amount of the payment part in $CMCIC_bruteVars['montantech']
                break;

            case "Annulation_pf2":
            case "Annulation_pf3":
            case "Annulation_pf4":
                // Payment has been refused on the productive server for the part #N
                // return code is like Annulation_pf[#N]
                // put your code here (email sending / Database update)
                // You have the amount of the payment part in $CMCIC_bruteVars['montantech']
                break;
        }
    }
}