<?php

namespace App\Form;

use App\Entity\Customers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CustomersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('customername', TextType::class, [
                'label' => 'Nombre Cliente',
                'attr' => [
                    'placeholder' => 'Nombre Cliente',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('contactlastname', TextType::class, [
                'label' => 'Apellido Contacto',
                'attr' => [
                    'placeholder' => 'Apellido Contacto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('contactfirstname', TextType::class, [
                'label' => 'Nombre Contacto',
                'attr' => [
                    'placeholder' => 'Nombre Contacto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'Telefono',
                'attr' => [
                    'placeholder' => 'Telefono',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('addressline1', TextType::class, [
                'label' => 'Direccion1',
                'attr' => [
                    'placeholder' => 'Direccion1',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('addressline2', TextType::class, [
                'label' => 'Direccion2',
                'attr' => [
                    'placeholder' => 'Direccion2',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => false
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Ciudad',
                'attr' => [
                    'placeholder' => 'Ciudad',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
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
            ->add('postalcode', TextType::class, [
                'label' => 'Código postal',
                'attr' => [
                    'placeholder' => 'Código postal',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => false
                ]
            ])
            ->add('country', TextType::class, [
                'label' => 'Pais',
                'attr' => [
                    'placeholder' => 'Pais',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('creditlimit', NumberType::class, [
                'label' => 'Limite de credito',
                'attr' => [
                    'placeholder' => 'Limite de credito',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('salesrepemployeenumber', NumberType::class, [
                'label' => 'Representante ventas',
                'attr' => [
                    'placeholder' => 'Representante ventas',
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
            'data_class' => Customers::class,
        ]);
    }
}
