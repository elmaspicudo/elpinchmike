<?php

namespace EstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hoja5_4Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('institucion','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('montoCredito')
            ->add('pagoMensual')
            ->add('fonacot','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('montoFonacot')
            ->add('pagoFonacot')
            ->add('infonavit','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('montoInfonavit')
            ->add('pagoInfonavit')
            ->add('otros','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('montoOotros')
            ->add('pagoOtros')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EstudioBundle\Entity\Hoja5_4'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'estudiobundle_hoja5_4';
    }
}
