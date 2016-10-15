<?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hoja2Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('domicilio')
            ->add('colonia')
            ->add('municipio')
            ->add('cp')
            ->add('entrecalle1')
            ->add('entrecalle2')
            ->add('ciudad')
            ->add('estado')
            ->add('antiguedadVivienda')
            ->add('antiguedadCiudad')
            ->add('telefonoLocal')
            ->add('celular')
            ->add('lugarNacimiento')
            ->add('fechaNacimiento')

            ->add('nacionalidad')
            ->add('edad')
            ->add('estadoCivil')
            ->add('ocupacion')
            ->add('actaNacimiento')
            ->add('curp')
            ->add('actaMatrimonio')
            ->add('cartillaMilitar')
            ->add('comprobanteEstudios')
            ->add('licencia')
            ->add('comprobanteDomicilio')
            ->add('cartaRecomendacion1')
            ->add('cartaRecomendacion2')
            ->add('cartaRecomendacion3')
            ->add('credencialElector')
            ->add('seguroSocial')
            ->add('primaria')
            ->add('de')
            ->add('a')
            ->add('comprobante')
            ->add('entidadPrimaria')
            ->add('secundaria')
            ->add('deSecundaria')
            ->add('aSecundaria')
            ->add('comprobanteSecundaria')
            ->add('entidadSecundaria')
            ->add('preparatoria')
            ->add('dePreparatoria')
            ->add('aPreparatoria')
            ->add('comprobantePreparatoria')
            ->add('entidadPreparatoria')
            ->add('profesional')
            ->add('deProfesional')
            ->add('aProfesional')
            ->add('comprobanteProfesional')
            ->add('idiomas')
            ->add('porcentajeHabla')
            ->add('porcentajeEscribe')
            ->add('porcentajeLee')
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
            'data_class' => 'HojaBundle\Entity\Hoja2'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_hoja2';
    }
}
