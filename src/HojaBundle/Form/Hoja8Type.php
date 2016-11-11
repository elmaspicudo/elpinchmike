<?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hoja8Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hoja8_1', 'collection',array(
                    'type' =>  new \EstudioBundle\Form\imagen(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'hoja8_1')
                )))
            ->add('Hoja8_2', 'collection',array(
                    'type' =>  new \EstudioBundle\Form\Hoja8_2Type(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'Hoja8_2')
                )))
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
            'data_class' => 'HojaBundle\Entity\Hoja8'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_hoja8';
    }
}
