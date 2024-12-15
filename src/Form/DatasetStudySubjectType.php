<?php

namespace App\Form;

use App\Entity\DatasetStudySubject;
use App\Entity\StudySubject;
use App\Entity\Dataset;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DatasetStudySubjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datasetId',EntityType::class,['class'=>Dataset::class])
          
            ->add('studySubject',EntityType::class,['class'=>StudySubject::class])
            ->add('description')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DatasetStudySubject::class,
        ]);
    }
}
