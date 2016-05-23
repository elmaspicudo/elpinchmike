<?php

namespace datosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class datospType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('empresa')
            ->add('nombre')
            ->add('puesto')
            ->add('fechaDeNacimiento')
            ->add('fecha')
            ->add('nacionalidad')
            ->add('domicilio')
            ->add('ciudad')
            ->add('telefonoCasa')
            ->add('celular')
            ->add('telTrabajo')
            ->add('edad')
            ->add('sexo')
            ->add('lugarDeNacimiento')
            ->add('eCivil')
            ->add('colonia')
            ->add('pais')
            ->add('concluciones')
            ->add('resultadoDeLaEntrevista')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'datosBundle\Entity\datosp'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'datosbundle_datosp';
    }
}
