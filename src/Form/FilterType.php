<?php

namespace App\Form;
use App\Entity\Dataset;
use App\Entity\DataType;
use App\Entity\DemographicGroup;
use App\Entity\Keyword;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $years = range(intval(date('Y')),intval(date('Y'))-100);
        $builder

  
        
            ->add('coverageLocation'
            ,ChoiceType::class,[
               
                'choices'=>[
                    'All'=>'All',
                    'Afar'=>'Afar',
                    'Benishangul Gumuz'=>'Benishangul Gumuz',
                    'Amahara'=>'Amahara',
                    'Oromia'=>'Oromia',
                    'Tigrai'=>'Tigrai',
                    'SNNPR'=>'SNNPR',
                    'Somalia'=>'Somalia',
                    'Gambella'=>'Gambella',
                    'Harar'=>'Harar',
                    'Addis Ababa'=>'Addis Ababa',
                    'Ethiopia'=>'Ethiopia',
                    'Foreign'=>'Foreign',
                   
                ]
            ])
            ->add('coverageAge',IntegerType::class,[
                'mapped' => false,
                'required'=>false,
              
          
           
            ])
            ->add('coverageSex',ChoiceType::class,[
                'mapped'=>false,
              
                'choices'=>[
                    'Both'=>'Both',
                    'Male'=>'Male',
                    'Female'=>'Female',
                   
                ]
            ])
            ->add('datatype',EntityType::class,[
                'required'=>false,
                'placeholder'=>'All',
                'class'=>DataType::class])
            ->add('demographicGroup',EntityType::class,[
                'required'=>false,
                'class'=>DemographicGroup::class])
     
          
            ->add('publicationYear',ChoiceType::class,
            [
                'mapped'=>false,
                'required'=>false,
               'placeholder'=>'All',
     'choices' => array_combine($years, $years)
  
            ]
            )
            
            ->add('Filter',SubmitType::class,[
              
                'attr'=>['class'=>'btn btn-primary btn-submit ']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Dataset::class,
            
             ]);
    }
}
