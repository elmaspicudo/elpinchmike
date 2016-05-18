<?php

namespace fourMinds\Bundle\ConfiguracionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SolicitudType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('direccion')
            ->add('telefonos')
            ->add('puesto')
            ->add('formato')
            ->add('fecha')
            ->add('cliente')
            ->add('visitador')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fourminds_bundle_configuracionbundle_solicitud';
    }
}
