<?php

namespace App\Form;

use App\Entity\Confidentiality;
use App\Entity\CoverageType;
use App\Entity\Dataset;
use App\Entity\DatasetCategory;
use App\Entity\DatasetFormat;
use App\Entity\DataType;
use App\Entity\Geospatial;
use App\Entity\MicrodataTabulationStatus;
use App\Entity\Publisher;
use App\Entity\RecordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\StudyDesign;
use App\Entity\WorkUnit;
use DateTime;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class DatasetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $now=new DateTime('now');
        $builder
            ->add('name')
            ->add('format')
            ->add('coverageLocation', ChoiceType::class, [
                'choices' => [
                    '----Select---- ' => "",
                    'National' =>  "National",
                    'Subnational' =>  "Subnational",
                    'Zonal' => "Zonal",
                      'Woreda' => "Zonal",
                ]
            ])
           // ->add('coverageAge')
            ->add('coverageSex', ChoiceType::class, [
                'choices' => [
                    '----Select---- ' => "",
                    'Both' =>  "Both",
                    'Female' =>  "Female",
                    'Male' => "Male",
                      'Not applicable' => "Not applicable",
                ]
            ])
            ->add('codeBook')

            ->add('codeBookFileName',FileType::class,[
                'label' => 'CodeBook',

                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                'required' => false,

              ])
              ->add('protocol',FileType::class,[
                  'label' => 'CodeBook',

                  // unmapped means that this field is not associated to any entity property
                  'mapped' => false,

                  'required' => false,

                ])
                ->add('otherfile',FileType::class,[

                    // unmapped means that this field is not associated to any entity property
                    'mapped' => false,

                    'required' => false,

                  ])
                  ->add('ethicalclearance',FileType::class,[

                      // unmapped means that this field is not associated to any entity property
                      'mapped' => false,

                      'required' => false,

                    ])
                    ->add('generating',FileType::class,[

                        // unmapped means that this field is not associated to any entity property
                        'mapped' => false,

                        'required' => false,

                      ])

            ->add('keywords',null,[
                'mapped'=>false,
            ])
            ->add('recommended')

            ->add('cleaned')
            ->add('cleanedFormat',EntityType::class,['class'=>DatasetFormat::class])
            ->add('rawFormat',EntityType::class,['class'=>DatasetFormat::class])



            ->add('timePeriodCoverageStart'
           , DateType::class,[ 'widget' => 'single_text',
            'attr'   => ['max' => $now->format('Y-m-d'), 'required' => false],
            'html5' => true,


            ])
            ->add('timePeriodCoverageEnd', DateType::class,[ 'widget' => 'single_text',
            'attr'   => ['max' => $now->format('Y-m-d')],
            'html5' => true,
            ])
            ->add('title')
            ->add('published')
            ->add('publicationYear', DateType::class,[ 'widget' => 'single_text',
            'attr'   => ['max' => $now->format('Y-m-d')],
            'empty_data' => '2000-01-01',
            'html5' => true,
            ])

            ->add('dataType', EntityType::class,['class'=>DataType::class])
            ->add('sugestedCitation',TextareaType::class,['required' => false])

            ->add('description')
            ->add('recievedDate', DateType::class,[ 'widget' => 'single_text',
            'html5' => true,
            'attr'   => ['max' => $now->format('Y-m-d')]
            ])
            ->add('catalogCompletedDate', DateType::class,[ 'widget' => 'single_text',
            'attr'   => ['max' => $now->format('Y-m-d')],
            'html5' => true,
            ])
            ->add('abstract')

            ->add('confidentiality',EntityType::class,['class'=>Confidentiality::class])
            ->add('studyDesign',EntityType::class,['class'=>StudyDesign::class])
            ->add('coverageType',EntityType::class,['class'=>CoverageType::class])
           // ->add('datasetCategory',EntityType::class,['class'=>DatasetCategory::class,'required' => false])

            ->add('geospatial',EntityType::class,['class'=>Geospatial::class])
            ->add('microdataTabulationStatus',EntityType::class,['class'=>MicrodataTabulationStatus::class])
            ->add('publisher',EntityType::class,['class'=>Publisher::class])
            ->add('recordType',EntityType::class,['class'=>RecordType::class])
            ->add('workunit',EntityType::class,['class'=>WorkUnit::class])
            ->add('PIName',TextType::class,['required' => false])
            ->add('PIPhone',TelType::class,['required' => false,'attr' => ['pattern'=>'[+]{1}\d{10}[\d{10}]*','title'=>'eg: +2519XXXXXXXX','maxlength'=>'15'] ])
            ->add('PIEmail',EmailType::class,['required' => false])
                ->add('Funding',TextType::class,['required' => false])
                  ->add('qualityassessment')
                ->add('quality', ChoiceType::class, [
                    'choices' => [
                      
                        '1' =>  "1",
                        '2' =>  "2",
                        '3' => "4",
                          '4' => "4",
                            '5' => "5",
                    ]
                ],['required' => true])


            ->add('isRestricted')
            ->add('DescriptionOfRestriction'
            ,TextareaType::class,['required' => false,])
            ->add('isExternal')
            ->add('ExternalLink'
            ,TextareaType::class,['required' => false,])
      ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Dataset::class,
        ]);
    }
    public function buildYearChoices() {
        $distance = 1;
        $yearsBefore = date('Y', mktime(0, 0, 0, date("m"), date("d"), date("Y") + $distance))-100;
        $yearsAfter = date('Y', mktime(0, 0, 0, date("m"), date("d"), date("Y") ));
        return array_combine(range($yearsBefore, $yearsAfter), range($yearsBefore, $yearsAfter));
    }
}?>
