<?php

namespace App\Form;

use App\Entity\Payments;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class PaymentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('checknumber', TextType::class, [
                'label' => 'Número revisión',
                'attr' => [
                    'placeholder' => 'Número revisión',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('paymentdate', DateType::class, [
                'label' => 'Fecha paga',
                'attr' => [
                    'placeholder' => 'Fecha paga',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('amount', NumberType::class, [
                'label' => 'Monto',
                'attr' => [
                    'placeholder' => 'Monto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('customernumber', NumberType::class, [
                'label' => 'Número cliente',
                'attr' => [
                    'placeholder' => 'Número cliente',
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
            'data_class' => Payments::class,
        ]);
    }
}
