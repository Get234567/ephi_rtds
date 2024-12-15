<?php

namespace App\Form;

use App\Entity\Study;
use App\Entity\StudyDataType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudyDataTypeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dataType', EntityType::class,['class'=>DataType::class])
            ->add('study', EntityType::class,['class'=>Study::class])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => StudyDataType::class,
        ]);
    }
}
