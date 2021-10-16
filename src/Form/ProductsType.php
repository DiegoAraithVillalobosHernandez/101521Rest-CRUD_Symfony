<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('productname', TextType::class, [
                'label' => 'Nombre producto',
                'attr' => [
                    'placeholder' => 'Nombre producto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productscale', TextType::class, [
                'label' => 'Escala',
                'attr' => [
                    'placeholder' => 'Escala',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productvendor', TextType::class, [
                'label' => 'Vendedor',
                'attr' => [
                    'placeholder' => 'Vendedor',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productdescription', TextType::class, [
                'label' => 'Descripción',
                'attr' => [
                    'placeholder' => 'Descripción',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('quantityinstock', NumberType::class, [
                'label' => 'Cantidad en stock',
                'attr' => [
                    'placeholder' => 'Cantidad en stock',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('buyprice', NumberType::class, [
                'label' => 'Precio compra',
                'attr' => [
                    'placeholder' => 'Precio compra',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('msrp', NumberType::class, [
                'label' => 'MSRP',
                'attr' => [
                    'placeholder' => 'MSRP',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('productline', TextType::class, [
                'label' => 'Línea producto',
                'attr' => [
                    'placeholder' => 'Línea producto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            /*->add('ordernumber', TextType::class, [
                'label' => 'Descripción texto',
                'attr' => [
                    'placeholder' => 'Número revisión',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
