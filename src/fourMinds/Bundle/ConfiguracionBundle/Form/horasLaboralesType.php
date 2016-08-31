<?php

namespace fourMinds\Bundle\ConfiguracionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class horasLaboralesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripcion')
            ->add('inicio')
            ->add('fin')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'fourMinds\Bundle\ConfiguracionBundle\Entity\horasLaborales'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fourminds_bundle_configuracionbundle_horaslaborales';
    }
}
