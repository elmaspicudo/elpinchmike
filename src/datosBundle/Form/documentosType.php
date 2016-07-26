<?php

namespace datosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class documentosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('noSeguridadSocial')
            ->add('curp')
            ->add('compDomiciliario')
            ->add('credencialINE')
            ->add('rfc')
            ->add('aNonbreDe')
            ->add('cartasLaborales')
            ->add('observaciones')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'datosBundle\Entity\documentos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'datosbundle_documentos';
    }
}
