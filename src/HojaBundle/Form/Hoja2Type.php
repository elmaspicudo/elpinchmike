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
            ->add('cp','text')
            ->add('entrecalle1')
            ->add('entrecalle2')
            ->add('ciudad')
            ->add('estado')
            ->add('antiguedadVivienda','text')
            ->add('antiguedadCiudad','text')
            ->add('telefonoLocal','text')
            ->add('celular','text')
            ->add('lugarNacimiento')
            ->add('fechaNacimiento', 'text')

            ->add('nacionalidad')
            ->add('edad','text')
            ->add('estadoCivil')
            ->add('ocupacion')
            ->add('actaNacimiento','text')
            ->add('curp','text')
            ->add('actaMatrimonio','text')
            ->add('cartillaMilitar','text')
            ->add('comprobanteEstudios')
            ->add('licencia','text')
            ->add('comprobanteDomicilio')
            ->add('cartaRecomendacion1')
            ->add('cartaRecomendacion2')
            ->add('cartaRecomendacion3')
            ->add('credencialElector','text')
            ->add('seguroSocial','text')
            ->add('primaria')
            ->add('de', 'text')
            ->add('a', 'text')
            ->add('comprobante')
            ->add('entidadPrimaria')
            ->add('secundaria')
            ->add('deSecundaria', 'text')
            ->add('aSecundaria', 'text')
            ->add('comprobanteSecundaria')
            ->add('entidadSecundaria')
            ->add('preparatoria')
            ->add('dePreparatoria', 'text')
            ->add('aPreparatoria', 'text')
            ->add('comprobantePreparatoria')
            ->add('entidadPreparatoria')
            ->add('profesional')
            ->add('deProfesional', 'text')
            ->add('aProfesional', 'text')
            ->add('comprobanteProfesional')
            ->add('idiomas')
            ->add('porcentajeHabla','text')
            ->add('porcentajeEscribe','text')
            ->add('porcentajeLee','text')
            ->add('observaciones')
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
