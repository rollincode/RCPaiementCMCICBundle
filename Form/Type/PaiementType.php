<?php
namespace RC\PaiementCMCICBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaiementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('version', 'hidden')
            ->add('TPE', 'hidden')
            ->add('date', 'hidden')
            ->add('montant', 'hidden')
            ->add('reference', 'hidden')
            ->add('MAC', 'hidden')
            ->add('url_retour', 'hidden')
            ->add('url_retour_ok', 'hidden')
            ->add('url_retour_err', 'hidden')
            ->add('lgue', 'hidden')
            ->add('societe', 'hidden')
            ->add('mail', 'hidden')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RC\PaiementCMCICBundle\Paiement',
        ));
    }

    public function getName()
    {
        return '';
    }
}