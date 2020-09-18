<?php

namespace App\Form;

use App\Entity\Website\News;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('link')
            ->add('title')
            ->add('category', ChoiceType::class, [
                'choices' => $this->getChoices(News::CATEGORY)
            ])
            ->add('thumbnails')
            ->add('postId')
            ->add('readTime')
            ->add('display');
    }

    private function getChoices($choices)
    {
        foreach ($choices as $k => $v) {
            $output[$v] = $k;
        }
        return $output;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => News::class,
        ]);
    }
}
