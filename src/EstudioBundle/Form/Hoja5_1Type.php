<?php

namespace EstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hoja5_1Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('investigado')
            ->add('conyuge')
            ->add('padres')
            ->add('hermanos')
            ->add('otros')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EstudioBundle\Entity\Hoja5_1'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'estudiobundle_hoja5_1';
    }
}
