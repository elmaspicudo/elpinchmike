<?php

namespace datosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class trayectoriaEscoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('secundaria')
            ->add('preparatoriaOequivalente')
            ->add('licenciatura')
            ->add('diplomado')
            ->add('maestria')
            ->add('otros')
            ->add('aniosCursado')
            ->add('comprobante')
            ->add('observacion')
            ->add('nombre')
            ->add('ocupacion')
            ->add('telefono')
            ->add('tiempoDeConocerlo')
            ->add('comentarios')
            ->add('observaciones')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'datosBundle\Entity\trayectoriaEsco'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'datosbundle_trayectoriaesco';
    }
}
