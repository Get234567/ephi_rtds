<?php

namespace App\Form;

use App\Entity\DownloadRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DownloadRequest1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name')
            ->add('MiddleName')
            ->add('LastName')
            ->add('Email')
            ->add('Phone')
            ->add('Reason')
            ->add('Attachment')
            ->add('RequestedDate')
            ->add('ApprovedDate')
            ->add('Token')
            ->add('count')
            ->add('Status')
            ->add('File')
            ->add('Dataset')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DownloadRequest::class,
        ]);
    }
}
