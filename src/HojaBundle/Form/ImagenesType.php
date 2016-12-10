<?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ImagenesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fotografia_interior')
            ->add('fotografia_exterior')
            ->add('fotografia_ubicacion')
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
            'data_class' => 'HojaBundle\Entity\Imagenes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_Imagenes';
    }
}
