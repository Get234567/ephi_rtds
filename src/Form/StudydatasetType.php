<?php

namespace App\Form;

use App\Entity\Dataset;
use App\Entity\Study;
use App\Entity\Studydataset;
use App\Entity\StudyDatasetStatus;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudydatasetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add('dataset',EntityType::class,['class'=>Dataset::class])
            ->add('studyDatasetStatus', EntityType::class,['class'=>StudyDatasetStatus::class])
            ->add('study', EntityType::class,['class'=>Study::class])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Studydataset::class,
        ]);
    }
}
