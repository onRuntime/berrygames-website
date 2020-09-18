<?php

namespace App\Form;

use App\Entity\Berrygames\Games;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GamesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codename')
            ->add('tag')
            ->add('arcade')
            ->add('location')
            ->add('description')
            ->add('texture')
            ->add('state', ChoiceType::class, [
                'choices' => $this->getGamesChoices()
            ]);
    }

    private function getGamesChoices()
    {
        $choices = Games::STATE;
        foreach ($choices as $k => $v) {
            $output[$v] = $k;
        }
        return $output;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Games::class,
        ]);
    }
    
}
