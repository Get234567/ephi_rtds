<?php

namespace App\Form;

use App\Entity\Dataset;
use App\Entity\Variable;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VariableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('labelDescription')
            ->add('valueCode')
            ->add('valueLevel')
            ->add('rangeOfValue')
            ->add('dataset', EntityType::class,['class'=>Dataset::class])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Variable::class,
        ]);
    }
}
