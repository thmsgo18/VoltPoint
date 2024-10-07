<?php

namespace App\Form;

use App\Data\UserFilter;
use App\Entity\Connector;
use App\Entity\Station;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilterForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('city', TextType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'City'
                ],
                'label' => false,
            ])
            ->add('dispo', CheckboxType::class, [
                'label' => 'Only disponible EVSE ',
                'required' => false,
            ])
            ->add('connector', EntityType::class, [
                'required' => false,
                'label' => 'Connector type ',
                'class' => Connector::class,
                'choice_label' => 'name',
            ])
            ->add('favPrise', CheckboxType::class, [
                'label' => 'Only matching my fav connector ',
                'required' => false,
            ])
            ->add('submit', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => UserFilter::class,
            'method' => 'GET',
        ]);
    }
}