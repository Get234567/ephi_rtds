<?php

namespace App\Form;

use App\Entity\Dataset;
use App\Entity\DatasetCauseOfDeath;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DatasetCauseOfDeathType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add('causeOfDeath')
            ->add('dataset', EntityType::class,['class'=>Dataset::class])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DatasetCauseOfDeath::class,
        ]);
    }
}
