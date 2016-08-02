<?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use EstudioBundle\Entity\Hoja3_1Type;
use EstudioBundle\Entity\Hoja3_2Type;
use EstudioBundle\Entity\Hoja3_3Type;
use EstudioBundle\Entity\Hoja3_4Type;

class Hoja3Type extends AbstractType
{

     public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('hoja3_1', new \EstudioBundle\Form\Hoja3_1Type())
            ->add('hoja3_2', new \EstudioBundle\Form\Hoja3_2Type())
            ->add('hoja3_3', new \EstudioBundle\Form\Hoja3_3Type())
            ->add('hoja3_4', new \EstudioBundle\Form\Hoja3_4Type())
            
        ;
    }


    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HojaBundle\Entity\Hoja3'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_hoja3';
    }
}
