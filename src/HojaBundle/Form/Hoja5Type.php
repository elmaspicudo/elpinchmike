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
            ->add('hoja5_1', new \EstudioBundle\Form\Hoja5_1Type())
            ->add('hoja5_2', new \EstudioBundle\Form\Hoja5_2Type())
            ->add('hoja5_3', new \EstudioBundle\Form\Hoja5_3Type())
            ->add('hoja5_4', new \EstudioBundle\Form\Hoja5_4Type())
            ->add('hoja5_5', new \EstudioBundle\Form\Hoja5_5Type())
            ->add('hoja5_6', new \EstudioBundle\Form\Hoja5_6Type())
            ->add('hoja5_7', new \EstudioBundle\Form\Hoja5_7Type())
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
