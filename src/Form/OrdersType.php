<?php

namespace App\Form;

use App\Entity\Orders;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
class OrdersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('orderdate', DateType::class, [
                'label' => 'Fecha de orden',
                'attr' => [
                    'placeholder' => 'Fecha de orden',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('requireddate', DateType::class, [
                'label' => 'Fecha establecida',
                'attr' => [
                    'placeholder' => 'Fecha establecida',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('shippeddate', DateType::class, [
                'label' => 'Fecha de envio',
                'attr' => [
                    'placeholder' => 'Fecha de envio',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('status', TextType::class, [
                'label' => 'Estatus',
                'attr' => [
                    'placeholder' => 'Estatus',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('comments', TextType::class, [
                'label' => 'Comentarios',
                'attr' => [
                    'placeholder' => 'Comentarios',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('customernumber', NumberType::class, [
                'label' => 'Número de cliente',
                'attr' => [
                    'placeholder' => 'Número de cliente',
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
            'data_class' => Orders::class,
        ]);
    }
}
