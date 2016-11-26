<?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MarcoFamiliarType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('observaciones')           
            ->add('DependientesEconomicos', 'collection',array(
                    'type' =>new \EstudioBundle\Form\DependientesEconomicosType(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'DependientesEconomicos oculto')
                )))
            ->add('FamiliaresCercanos', 'collection',array(
                    'type' =>new \EstudioBundle\Form\FamiliaresCercanosType(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'FamiliaresCercanos oculto')
                )))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HojaBundle\Entity\MarcoFamiliar'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_marcofamiliar';
    }
}
