<?php

namespace App\Form;

use App\Entity\DataType;
use App\Entity\Location;
use App\Entity\StudyDesign;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdvancedSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $syears=range(Date('Y') - 20, date('Y'));
        $eyears=range(Date('Y') - 20, date('Y'));

        foreach ($syears as $key => $value) {
            $startyear[$value] = $value;
          }
          foreach ($eyears as $key => $value) {
            $endyear[$value] = $value;
          }


        $builder
            ->add('keywords',TextType::class,[
                'required'=>false,
            ])
            ->add('datatype',EntityType::class,[
                'placeholder'=>'-Any-',
                'required'=>false,
                  'class'=>DataType::class,

            ])
            ->add('studydesign',EntityType::class,[
                'placeholder'=>'-Any-',
                'required'=>false,
                  'class'=>StudyDesign::class,

            ])
            ->add('coveragesex',ChoiceType::class,[
                'placeholder'=>'-Any-',
                'required'=>false,
              'choices'=>[
                  'Both'=>'Both',
                  'Male'=>'Male',
                  'Female'=>'Female',
              ]

            ])


            ->add('yearstart',ChoiceType::class, array(
                'label'=>'Year of study started' ,
                'placeholder'=>'-Any-',
                'required'=>false,
                'choices' =>$startyear,


            ))
            ->add('yearend',ChoiceType::class,[
             'label'=>'Year of study ended' ,
             'placeholder'=>'-Any-',
             'required'=>false,
             'choices' =>$endyear,

            ])
            ->add('apply',SubmitType::class,[
             'label'=>'Apply',
             'attr'=>[
                 'class'=>'btn btn-success pull-right'
             ]
            ])
            ->add('clear',ResetType::class,[
             'label'=>'Reset',
             'attr'=>[
                 'class'=>'btn btn-info'
             ]
            ])
            ->setMethod('GET')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
