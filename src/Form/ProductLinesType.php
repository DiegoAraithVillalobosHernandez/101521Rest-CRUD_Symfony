<?php

namespace App\Form;

use App\Entity\Productlines;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class ProductLinesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('textdescription', TextType::class, [
                'label' => 'Descripción texto',
                'attr' => [
                    'placeholder' => 'Descripción texton',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('htmldescription', TextType::class, [
                'label' => 'Descripción html',
                'attr' => [
                    'placeholder' => 'Descripción html',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => true
                ]
            ])
            ->add('image', TextType::class, [
                'label' => 'Imagen',
                'attr' => [
                    'placeholder' => 'Imagen',
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
            'data_class' => ProductLines::class,
        ]);
    }
}
