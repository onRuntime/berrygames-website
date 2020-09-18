<?php

namespace App\Form;

use App\Entity\Berrygames\Translations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class I18nType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('key')
            ->add('enEn', null, [
                'label' => 'English'
            ])
            ->add('frFr', null, [
                'label' => 'Français'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Translations::class,
        ]);
    }
}
