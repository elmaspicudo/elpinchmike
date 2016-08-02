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
            ->add('institucion')
            ->add('montoCredito')
            ->add('pagoMensual')
            ->add('fonacot')
            ->add('montoFonacot')
            ->add('pagoFonacot')
            ->add('infonavit')
            ->add('montoInfonavit')
            ->add('pagoInfonavit')
            ->add('otros')
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
