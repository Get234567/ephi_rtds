<?php

namespace App\Form;

use App\Entity\FosUser;
use Proxies\__CG__\App\Entity\UserGroup;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FosUser1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('FirstName', TextType::class, array('label' => 'First Name', 'translation_domain' => 'FOSUserBundle'))
        ->add('MiddleName', TextType::class, array('required' => false, 'label' => 'Middle Name', 'translation_domain' => 'FOSUserBundle'))
        ->add('LastName', TextType::class, array('label' => 'Last Name', 'translation_domain' => 'FOSUserBundle'))
        ->add('phone',TelType::class,['required' => false,'attr' => ['pattern'=>'[+]{1}\d{10}[\d{10}]*','title'=>'eg: +2519XXXXXXXX','maxlength'=>'15'] ])
        ->add('Address', TextType::class, array('label' => 'Address', 'translation_domain' => 'FOSUserBundle'))
        ->add('Affiliation', TextareaType::class,array('required' => false, 'label' => 'Affiliation', 'translation_domain' => 'FOSUserBundle'))
        ->add('Sex', ChoiceType::class, [
            'choices' => [
                'Male' => "male",
                'Female' => "female",
            ],])
        ->add('enabled',CheckboxType::class)    
        ->add('email', EmailType::class, array('label' => 'email', 'translation_domain' => 'FOSUserBundle'))
        ->add('username', null, array('label' => 'username', 'translation_domain' => 'FOSUserBundle'))
        ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'options' => array(
                    'translation_domain' => 'FOSUserBundle',
                    'attr' => array(
                        'autocomplete' => 'new-password',
                    ),
                ),
                'first_options' => array('label' => 'password'),
                'second_options' => array('label' => 'confirm password'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
            ->add('UserGroup',  EntityType::class,['required' => false,'class'=>UserGroup::class] )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FosUser::class,
        ]);
    }
}
