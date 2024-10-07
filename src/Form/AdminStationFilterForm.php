<?php

namespace App\Form;

use App\Data\AdminStationFilter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminStationFilterForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', TextType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'ID'
                ],
                'label' => false,
            ])
            ->add('name', TextType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'Name'
                ],
                'label' => false,
            ])
            ->add('street', TextType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'Street'
                ],
                'label' => false,
            ])
            ->add('city', TextType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'City'
                ],
                'label' => false,
            ])
            ->add('postal', IntegerType::class, [
                'required' => false,
                'empty_data' => 0,
                'attr' => [
                    'placeholder' => 'Code postal'
                ],
                'label' => false,
            ])
            ->add('submit', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AdminStationFilter::class,
            'method' => 'GET',
        ]);
    }
}