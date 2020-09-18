<?php

namespace App\Form;

use App\Entity\Berrygames\Players;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlayersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('uuid')
            ->add('identity')
            ->add('ranks')
            ->add('currency')
            ->add('progression')
            ->add('taf')
            ->add('sanctions')
            ->add('relations');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Players::class,
        ]);
    }
}
