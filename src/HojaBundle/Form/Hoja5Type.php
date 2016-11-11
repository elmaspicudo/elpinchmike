<?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hoja5Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ingresos', new \EstudioBundle\Form\ingresosType())
            ->add('egresos', new \EstudioBundle\Form\egresosType())
            ->add('tarjetaCredito', new \EstudioBundle\Form\tarjetaCreditoType())
            ->add('creditosPersonales', new \EstudioBundle\Form\creditosPersonalesType())
            ->add('creditoAutomotriz', new \EstudioBundle\Form\creditoAutomotrizType())
            ->add('seguros', new \EstudioBundle\Form\segurosType())
            ->add('otrosServicios', new \EstudioBundle\Form\otrosServiciosType())
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
            'data_class' => 'HojaBundle\Entity\Hoja5'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_hoja5';
    }
}
