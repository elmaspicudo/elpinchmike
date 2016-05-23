<?php

namespace datosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class trayectoriaLabType extends AbstractType
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
            ->add('datosProporCionadosPor')
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
            ->add('asistenciaYpuntualidad')
            ->add('responsabilidad')
            ->add('desempenio')
            ->add('relacionConJefesYcom')
            ->add('trabajoVajoPresion')
            ->add('apegoApoliticas')
            ->add('desempenoProporcionado')
            ->add('observacionn')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'datosBundle\Entity\trayectoriaLab'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'datosbundle_trayectorialab';
    }
}
