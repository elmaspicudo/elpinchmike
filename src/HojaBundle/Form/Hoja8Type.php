<?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hoja8Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hoja8_1', new \EstudioBundle\Form\Hoja8_1Type())
            ->add('hoja8_2', new \EstudioBundle\Form\Hoja8_2Type())
        ;
    }



    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HojaBundle\Entity\Hoja8'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_hoja8';
    }
}
