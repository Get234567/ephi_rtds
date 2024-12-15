<?php

namespace App\Form;

use App\Entity\StudyDatasetLinkRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudyDatasetLinkRequestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('requestedAt')
            ->add('Status')
            ->add('dataset')
            ->add('requester')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => StudyDatasetLinkRequest::class,
        ]);
    }
}
