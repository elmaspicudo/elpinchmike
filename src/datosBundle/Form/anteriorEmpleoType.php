<?php

namespace datosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class anteriorEmpleoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('empresa')
            ->add('sucursal')
            ->add('domicilio')
            ->add('jefeInmediato')
            ->add('fechaDeInicio')
            ->add('fechaDeTermino')
            ->add('puestoInicial')
            ->add('puestoFinal')
            ->add('motivoDeSalida')
            ->add('datosProporcionadosPor')
            ->add('puesto')
            ->add('telefono')
            ->add('estado')
            ->add('puestoo')
            ->add('sueldoInicial')
            ->add('sueldoFinal')
            ->add('exelente')
            ->add('muyBueno')
            ->add('bueno')
            ->add('regular')
            ->add('deficiente')
            ->add('asistencia')
            ->add('respensabilidad')
            ->add('desempenio')
            ->add('relacionJefesCompa')
            ->add('trabajoVajoPrecion')
            ->add('apegoAPoliticas')
            ->add('desempenioProporcionado')
            ->add('observaciones')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'datosBundle\Entity\anteriorEmpleo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'datosbundle_anteriorempleo';
    }
}
