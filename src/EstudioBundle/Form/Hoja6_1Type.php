<?php

namespace EstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hoja6_1Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('empresa')
            ->add('giro')
            ->add('telefono')
            ->add('domicilio')
            ->add('ciudad')
            ->add('fechaIngreso','text')
            ->add('fechasalida','text')
            ->add('puestoInicial')
            ->add('puestoFinal')
            ->add('sueldoInicial')
            ->add('sueldoFinal')
            ->add('jefeInmediato')
            ->add('puesto')
            ->add('asistencia','choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybuena'  => 'Muy Buena',
                        'buena'  => 'Buena',
                        'regular'  => 'Regular',
                        'mala'  => 'Mala',
                        )))
            ->add('responsabilidad','choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybuena'  => 'Muy Buena',
                        'buena'  => 'Buena',
                        'regular'  => 'Regular',
                        'mala'  => 'Mala',
                        )))
            ->add('colaboracion','choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybuena'  => 'Muy Buena',
                        'buena'  => 'Buena',
                        'regular'  => 'Regular',
                        'mala'  => 'Mala',
                        )))
            ->add('calidadTrabajo','choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybuena'  => 'Muy Buena',
                        'buena'  => 'Buena',
                        'regular'  => 'Regular',
                        'mala'  => 'Mala',
                        )))
            ->add('actitudGeneral','choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybuena'  => 'Muy Buena',
                        'buena'  => 'Buena',
                        'regular'  => 'Regular',
                        'mala'  => 'Mala',
                        )))
            ->add('tomaDesiciones','choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybuena'  => 'Muy Buena',
                        'buena'  => 'Buena',
                        'regular'  => 'Regular',
                        'mala'  => 'Mala',
                        )))
            ->add('iniciativa','choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybuena'  => 'Muy Buena',
                        'buena'  => 'Buena',
                        'regular'  => 'Regular',
                        'mala'  => 'Mala',
                        )))
            ->add('honestidad','choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybuena'  => 'Muy Buena',
                        'buena'  => 'Buena',
                        'regular'  => 'Regular',
                        'mala'  => 'Mala',
                        )))
            ->add('relacionJefes','choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybuena'  => 'Muy Buena',
                        'buena'  => 'Buena',
                        'regular'  => 'Regular',
                        'mala'  => 'Mala',
                        )))
            ->add('relacionCompaneros','choice', array(
                'choices'=>array(
                        'excelente' => 'Excelente',
                        'muybuena'  => 'Muy Buena',
                        'buena'  => 'Buena',
                        'regular'  => 'Regular',
                        'mala'  => 'Mala',
                        )))
            ->add('perteneceSindicato')
            ->add('cual')
            ->add('cargoSindical')
            ->add('participacion')
            ->add('problemaLaboral')
            ->add('motivoSeparacion')
            ->add('personaRecomendable')
            ->add('porque')
            ->add('datosProporcionados')
            ->add('puestoEntrevistador')
            ->add('fechaEntravista','text')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EstudioBundle\Entity\Hoja6_1'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'estudiobundle_hoja6_1';
    }
}
