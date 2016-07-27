<?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hoja1Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('empresa')
            ->add('puesto')
            ->add('nombre')
            ->add('apPaterno','text',array('label' => 'Apellido Paterno'))
            ->add('apMaterno','text',array('label' => 'Apellido Materno'))
            ->add('personal' ,'choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybueno'  => 'Muy Bueno',
                        'bueno'     => 'Bueno',
                        'regular'   => 'Regular',
                        'malo'      => 'Malo'))
            )
            ->add('escolares' ,'choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybueno'  => 'Muy Bueno',
                        'bueno'     => 'Bueno',
                        'regular'   => 'Regular',
                        'malo'      => 'Malo')))
            ->add('entornoFamiliar' ,'choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybueno'  => 'Muy Bueno',
                        'bueno'     => 'Bueno',
                        'regular'   => 'Regular',
                        'malo'      => 'Malo')))
            ->add('entornoEconomico' ,'choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybueno'  => 'Muy Bueno',
                        'bueno'     => 'Bueno',
                        'regular'   => 'Regular',
                        'malo'      => 'Malo')))
            ->add('documentacion' ,'choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybueno'  => 'Muy Bueno',
                        'bueno'     => 'Bueno',
                        'regular'   => 'Regular',
                        'malo'      => 'Malo')))
            ->add('laboral' ,'choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybueno'  => 'Muy Bueno',
                        'bueno'     => 'Bueno',
                        'regular'   => 'Regular',
                        'malo'      => 'Malo')))
            ->add('desempeno' ,'choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybueno'  => 'Muy Bueno',
                        'bueno'     => 'Bueno',
                        'regular'   => 'Regular',
                        'malo'      => 'Malo')))
            ->add('estabilidadLaboral' ,'choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybueno'  => 'Muy Bueno',
                        'bueno'     => 'Bueno',
                        'regular'   => 'Regular',
                        'malo'      => 'Malo')))
            ->add('observaciones','text')
            
            //->add('anterior', 'submit', array(
            //  'attr' => array('class' => 'btn btn-primary pull-left')
            //))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HojaBundle\Entity\Hoja1'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_hoja1';
    }
}
