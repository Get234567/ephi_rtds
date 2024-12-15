<?php

namespace App\Form;

use App\Entity\FosUser;
use App\Entity\Researcher;
use App\Entity\ResearchTeam;
use App\Entity\ResearcherResearchTeam;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResearcherResearchTeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('researcher', EntityType::class,['class'=>Researcher::class])
            ->add('researchTeam', EntityType::class,['class'=>ResearchTeam::class])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ResearcherResearchTeam::class,
        ]);
    }
}
