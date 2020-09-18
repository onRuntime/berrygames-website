<?php

namespace App\Form;

use App\Entity\Berrygames\Ranks;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RanksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rankid')
            ->add('tab')
            ->add('tag')
            ->add('prefix')
            ->add('suffix')
            ->add('permission');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ranks::class,
        ]);
    }
}
