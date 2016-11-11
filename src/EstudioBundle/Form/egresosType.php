<?php

namespace EstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class egresosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('renta')
            ->add('agua')
            ->add('luz')
            ->add('telefono')
            ->add('gas')
            ->add('transporte')
            ->add('mantenimientoAuto')
            ->add('alimentacion')
            ->add('educacion')
            ->add('medicos')
            ->add('diversiones')
            ->add('vestido')
            ->add('otros')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EstudioBundle\Entity\egresos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'estudiobundle_egresos';
    }
}