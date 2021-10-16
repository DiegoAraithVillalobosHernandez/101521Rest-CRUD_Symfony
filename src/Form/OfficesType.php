<?php

namespace App\Form;

use App\Entity\Offices;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class OfficesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('city', TextType::class, [
                'label' => 'Ciudad',
                'attr' => [
                    'placeholder' => 'Ciudad',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'Teléfono',
                'attr' => [
                    'placeholder' => 'Teléfono',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('addressline1', TextType::class, [
                'label' => 'Dirección1',
                'attr' => [
                    'placeholder' => 'Dirección1',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('addressline2', TextType::class, [
                'label' => 'Dirección2',
                'attr' => [
                    'placeholder' => 'Dirección2',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => false
                ]
            ])
            ->add('state', TextType::class, [
                'label' => 'Estado',
                'attr' => [
                    'placeholder' => 'Estado',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => false
                ]
            ])
            ->add('country', TextType::class, [
                'label' => 'País',
                'attr' => [
                    'placeholder' => 'País',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('postalcode', TextType::class, [
                'label' => 'Código postal',
                'attr' => [
                    'placeholder' => 'Código postal',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('territory', TextType::class, [
                'label' => 'Territorio',
                'attr' => [
                    'placeholder' => 'Territorio',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offices::class,
        ]);
    }
}
