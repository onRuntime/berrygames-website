<?php

namespace App\Form;

use App\Entity\Berrygames\Gifts;
use DateTime;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GiftsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('command')
            ->add('uses', HiddenType::class, [
                'data' => 0
            ])
            ->add('used')
            ->add('startDate', null, [
                'data' => new DateTime('now')
            ])
            ->add('endDate', null, [
                'data' => new DateTime(('+2 week'))
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Gifts::class,
        ]);
    }
}
