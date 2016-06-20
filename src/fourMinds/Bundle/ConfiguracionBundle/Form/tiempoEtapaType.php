<?php

namespace fourMinds\Bundle\ConfiguracionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class tiempoEtapaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('etapa', 'choice', array(
                'choices' => array(
                    1 => 'Investigador',
                    3 => 'Telofonista'                    
                ),
                'data' => 1
            ))
            ->add('tiempoVerde')
            ->add('tiempoAmarillo')
            ->add('tiempoRojo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'fourMinds\Bundle\ConfiguracionBundle\Entity\tiempoEtapa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fourminds_bundle_configuracionbundle_tiempoetapa';
    }
}
