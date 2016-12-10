<?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Referencia_PersonalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('referenciaFamiliar','collection',array(
                    'type' =>  new \EstudioBundle\Form\referenciaFamiliarType(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'referenciaFamiliar')
                )))

            ->add('referenciaVecinal','collection',array(
                    'type' =>  new \EstudioBundle\Form\referenciaVecinalType(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'referenciaVecinal')
                )))

            ->add('saludHigiene','collection',array(
                    'type' =>  new \EstudioBundle\Form\saludHigieneType(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'saludHigiene')
                )))

            ->add('pasatiempos','collection',array(
                    'type' =>  new \EstudioBundle\Form\pasatiemposType(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'pasatiempos')
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
            'data_class' => 'HojaBundle\Entity\Referencia_Personal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_Referencia_Personal';
    }
}
