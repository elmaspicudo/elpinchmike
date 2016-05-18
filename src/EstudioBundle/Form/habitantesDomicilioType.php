<?php

namespace EstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class habitantesDomicilioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('edad')
            ->add('parentesco')
            ->add('estadoCivil')
            ->add('escolaridad')
            ->add('ocupacion')
            ->add('salario')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EstudioBundle\Entity\habitantesDomicilio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'estudiobundle_habitantesdomicilio';
    }
}
