<?php

namespace App\Form;

use App\Data\AdminSessionFilter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminSessionFilterForm extends AbstractType
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
            ->add('username', TextType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'User name'
                ],
                'label' => false,
            ])
            ->add('userlastname', TextType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'User lastname'
                ],
                'label' => false,
            ])
            ->add('station', TextType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'Station name'
                ],
                'label' => false,
            ])
            /*->add('date', DateTimeType::class, [
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'Date'
                ],
                'label' => false,
            ])*/
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
            ->add('submit', SubmitType::class)
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AdminSessionFilter::class,
            'method' => 'GET',
        ]);
    }
}