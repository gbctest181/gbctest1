<?php

namespace App\Form;

use App\Entity\ClientIntervention;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientInterventionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('code_postal')
            ->add('ville')
            ->add('date')
            ->add('telephone')
            ->add('fax')
            ->add('mobile')
            ->add('mail')
            ->add('representant')
            ->add('fonction')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ClientIntervention::class,
        ]);
    }
}
