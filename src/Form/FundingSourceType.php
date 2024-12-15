<?php

namespace App\Form;

use App\Entity\FundingSource;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class FundingSourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('fundtype',ChoiceType::class,[
                'choices'=>[
                    'In Type'=>'In Type',
                    'In Cash'=>'In Cash',
                    'Others'=>'Others'
                ]
            ])
            ->add('description')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FundingSource::class,
        ]);
    }
}
