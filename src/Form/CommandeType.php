<?php

namespace App\Form;

use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('adresse')
            
            ->add('date_livraison',DateType::Class, array(
                'widget' => 'choice',
                'years' => range(date('Y'), date('Y')),
                'months' => range(date('m'), 12),
                'days' => range(date('d')+1, 31),
              ))
            ->add('temps_livraison',TimeType::Class, array(
                'widget' => 'choice',
                'hours' => range(8, 22),
                'minutes' => range(0, 59),
              ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
