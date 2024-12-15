<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Form;
use Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType;
use Captcha\Bundle\CaptchaBundle\Validator\Constraints\ValidCaptcha;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\FosUser;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\File;

class RegistrationFormType extends AbstractType
{
  
   

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      
        $builder
        ->add('FirstName', TextType::class, array('label' => 'Full Name', 'translation_domain' => 'FOSUserBundle'))
        ->add('MiddleName', TextType::class, array('required' => false, 'label' => 'Full Name', 'translation_domain' => 'FOSUserBundle'))
        ->add('LastName', TextType::class, array('label' => 'Full Name', 'translation_domain' => 'FOSUserBundle'))
        ->add('phone',TelType::class,['required' => false,'attr' => ['pattern'=>'[+]{1}\d{10}[\d{10}]*','title'=>'eg: +2519XXXXXXXX','maxlength'=>'15'] ])
        ->add('Address', TextType::class, array('label' => 'Full Name', 'translation_domain' => 'FOSUserBundle'))
        ->add('Affiliation', TextareaType::class,array('required' => false, 'label' => 'Affiliation', 'translation_domain' => 'FOSUserBundle'))
        ->add('Sex', ChoiceType::class, [
            'choices' => [
                'Male' => "male",
                'Female' => "female",
            ],])
        ->add('email', EmailType::class, array('label' => 'email', 'translation_domain' => 'FOSUserBundle'))
        ->add('username', null, array('label' => 'username', 'translation_domain' => 'FOSUserBundle'))
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
            ))->add('captchaCode', CaptchaType::class, array(
                'captchaConfig' => 'ExampleCaptchaUserRegistration',
                'constraints' => [
                    new ValidCaptcha([
                        'message' => 'Invalid captcha, please try again',
                    ]),
                ],
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => FosUser::class,
            'csrf_token_id' => 'registration',
        ));
    }

    // BC for SF < 3.0

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fos_user_registration';
    }
}
