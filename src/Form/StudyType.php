<?php

namespace App\Form;

use App\Entity\Publisher;
use App\Entity\GeographyType;
use App\Entity\Study;
use App\Entity\StudyType as AppStudyType;
use App\Entity\WorkUnit;
use DateTime;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\File;

class StudyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $now=new DateTime('now');
        $builder
            ->add('title')
            ->add('projectOwner')
            ->add('irbCode')
            ->add('yearConducted', DateType::class,[ 'widget' => 'single_text',
            'html5' => true,
            'attr'   => ['max' => $now->format('Y-m-d')]
            ])
            ->add('yearPublished', DateType::class,[ 'widget' => 'single_text',

            // prevents rendering it as type="date", to avoid HTML5 date pickers
            'html5' => true,
            'attr'   => ['max' => $now->format('Y-m-d')]


            // adds a class that can be selected in JavaScript
            ])
            ->add('budget')

            ->add('Proposal', FileType::class,[
                'attr'=>[
                    'accept' => 'application/pdf'
                ],
                'label' => 'Upload research proposal (in PDF format)',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                'required' => false,


                'constraints' => [
                    new File([
                        'maxSize' => '10024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
            ])
            ->add('clearance', FileType::class,[
                'label' => 'Upload ethical clearance (in PDF format)',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                'required' => false,
                'attr'=>[
                    'accept' => 'application/pdf'
                ],
                'constraints' => [

                    new File([
                        'maxSize' => '10024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF document',
                    ])
                ],
            ])
            ->add('budget',IntegerType::class,['attr'=>['pattern'=>'[0-9]+','onkeyup'=>'this.value=this.value.replace(/[^0-9]/g,"");']])
            ->add('objective')
            ->add('researchQuestion',TextareaType::class, ['attr'=>['class' =>'tinymce']])

            ->add('summary')
            ->add('description')
            ->add('geography')
            ->add('geography', ChoiceType::class, [
                'choices' => [
                    '----Select---- ' => "",
                    'National' =>  "National",
                    'All regional' =>  "All regional",
                    'Addis Ababa' =>  "Addis Ababa",
                    'Dire Dawa' => "Dire Dawa",
                    'Oromia' =>  "Oromia",
                    'Amhara' =>  "Amhara",
                    'Benshangul' => "Benshangul",
                    'Gambella' => "Gambella",
                    'Harari' =>  "Harari",
                    'Somali' =>  "Somali",
                    'Afar' => "Afar",
                    'Tigray' => "Tigray",
                    'SNNPR' => "SNNPR",
                    'Sidama' => "Sidama",

                ]
            ])
            ->add('timePeriodCoverageStart', DateType::class,[ 'widget' => 'single_text',
            'html5' => true,
            'attr'   => ['max' => $now->format('Y-m-d')]
            ])
            ->add('timePeriodCoverageEnd', DateType::class,[ 'widget' => 'single_text',
            'html5' => true,
            'attr'   => ['max' => $now->format('Y-m-d')]
            ])
            ->add('publisher', EntityType::class,['class'=>Publisher::class])
            ->add('studyType', EntityType::class,['class'=>AppStudyType::class])
            ->add('workUnit', EntityType::class,['class'=>WorkUnit::class])
            ->add('PIName',TextType::class)
            ->add('PIPhone',TelType::class,['required' => false,'attr' => ['pattern'=>'[+]{1}\d{10}[\d{10}]*','title'=>'eg: +2519XXXXXXXX','maxlength'=>'15'] ])
            ->add('PIEmail',EmailType::class)
            ->add('CO_PIName',TextType::class)
            ->add('CO_PIPhone',TelType::class,['required' => false,'attr' => ['pattern'=>'[+]{1}\d{10}[\d{10}]*','title'=>'eg: +2519XXXXXXXX','maxlength'=>'15'] ])
            ->add('CO_PIEmail',EmailType::class)
            ->add('cur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Study::class,
        ]);
    }
}
