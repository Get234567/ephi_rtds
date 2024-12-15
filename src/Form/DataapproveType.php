<?php

namespace App\Form;

use App\Entity\Dataapprove;
use App\Entity\FosUser;
use App\Entity\WorkUnit;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DataapproveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('user_id',EntityType::class,[
            'required'=>false,
            'class'=>FosUser::class])
            ->add('work_unit_id',EntityType::class,[
                'required'=>false,
                'class'=>WorkUnit::class])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Dataapprove::class,

             ]);
    }
  }
