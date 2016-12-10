<?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Referencia_laboralType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('referenciasLaborales','collection',array(
                    'type' => new \EstudioBundle\Form\referenciasLaboralesType(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'referenciasLaborales')
                )))
            ->add('observaciones')
            ->add('Anterior', 'submit', array('label' => 'Anterior','attr'=>array('class'=>'btn btn-warning')))
            ->add('Siguiente', 'submit', array('label' => 'Siguiente','attr'=>array('class'=>'btn btn-success pull-right')))  
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HojaBundle\Entity\Referencia_laboral'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_Referencia_laboral';
    }
}
