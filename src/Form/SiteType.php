<?php

namespace App\Form;

use App\Entity\Site;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('SiteName')
        ->add('Moto')
            ->add('Mission')
            ->add('Vision')
            ->add('Objective')
            ->add('AboutUs')
            ->add('ContactUs')
          
            ->add('Help')
            ->add('CopyrightNotice')
            ->add('termsOfReference')
            ->add('emailMessage')
            ->add('Save',SubmitType::class)
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Site::class,
        ]);
    }
}
