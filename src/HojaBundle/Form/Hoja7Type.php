<?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hoja7Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hoja7_1', new \EstudioBundle\Form\Hoja7_1Type())
            ->add('hoja7_2', new \EstudioBundle\Form\Hoja7_2Type())
            ->add('hoja7_3', new \EstudioBundle\Form\Hoja7_3Type())
            ->add('hoja7_4', new \EstudioBundle\Form\Hoja7_4Type())
            ->add('observaciones')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HojaBundle\Entity\Hoja7'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_hoja7';
    }
}
