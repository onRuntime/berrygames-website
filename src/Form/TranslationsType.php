<?php

namespace App\Form;

use App\Entity\Berrygames\Translations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TranslationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('i18n', null, [
                'label' => 'Key'
            ])
            ->add('en', null, [
                'label' => 'English'
            ])
            ->add('fr', null, [
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
