<?php

namespace EstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hoja1Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('empresa')
            ->add('puesto')
            ->add('nombre')
            ->add('apPaterno')
            ->add('apMaterno')
            ->add('personal')
            ->add('escolares')
            ->add('entornoFamiliar')
            ->add('entornoEconomico')
            ->add('documentacion')
            ->add('laboral')
            ->add('desempeno')
            ->add('estabilidadLaboral')
            ->add('observaciones')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EstudioBundle\Entity\Hoja1'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'estudiobundle_hoja1';
    }
}
