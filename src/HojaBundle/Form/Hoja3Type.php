<?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use EstudioBundle\Form\Hoja3_1Type;
use EstudioBundle\Form\Hoja3_2Type;
use EstudioBundle\Form\Hoja3_3Type;
use EstudioBundle\Form\Hoja3_4Type;
class Hoja3Type extends AbstractType
{

     public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('hoja3_1', 'collection',array(
                    'type' =>new \EstudioBundle\Form\Hoja3_1Type(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'hoja3_1')
                )))
             ->add('hoja3_2', 'collection',array(
                    'type' =>new \EstudioBundle\Form\Hoja3_2Type(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'hoja3_2')
                )))
             ->add('hoja3_3', 'collection',array(
                    'type' =>new \EstudioBundle\Form\Hoja3_3Type(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'hoja3_3')
                )))
             ->add('hoja3_4', 'collection',array(
                    'type' =>new \EstudioBundle\Form\Hoja3_4Type(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'hoja3_4')
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
            'data_class' => 'HojaBundle\Entity\Hoja3'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_hoja3';
    }
}
