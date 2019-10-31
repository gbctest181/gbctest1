<?php

namespace App\Form;

use App\Entity\ProcesVerbal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProcesVerbalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('devis')
            ->add('date_devis')
            ->add('commande_client')
            ->add('date_commande')
            ->add('cctp')
            ->add('date_cctp')
            ->add('siganture_client')
            ->add('signature_gbc')
            ->add('clientIntervention')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ProcesVerbal::class,
        ]);
    }
}
