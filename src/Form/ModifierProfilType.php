<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class ModifierProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('username')
            ->add('password')
            ->add('sexe', ChoiceType::class, array(
                'label'=>'',
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme'
                ]
            ))
            ->add('age')
            ->add('height')
            ->add('weight')
            ->add('goal', ChoiceType::class, array(
                'label'=>'',
                'choices' => [
                    'Prendre du poids' => 'Prendre du poids',
                    'Perdre du poids' => 'Perdre du poids',
                    'Maintenir le poids' => 'Maintenir le poids',
                ]
            ))
            ->add('activity_level', ChoiceType::class, array(
                'label'=>'',
                'choices'  => [
                    'Pas Actif' => 'Pas Actif',
                    'Un Peu Actif' => 'Un Peu Actif',
                    'Actif' => 'Actif',
                    'Super Actif' => 'Super Actif',
                ]
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
