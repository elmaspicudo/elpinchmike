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
            ->add('fechaIngreso')
            ->add('fechasalida')
            ->add('puestoInicial')
            ->add('puestoFinal')
            ->add('sueldoInicial')
            ->add('sueldoFinal')
            ->add('jefeInmediato')
            ->add('puesto')
            ->add('asistencia')
            ->add('responsabilidad')
            ->add('colaboracion')
            ->add('calidadTrabajo')
            ->add('actitudGeneral')
            ->add('tomaDesiciones')
            ->add('iniciativa')
            ->add('honestidad')
            ->add('relacionJefes')
            ->add('relacionCompaneros')
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
            ->add('fechaEntravista')
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
