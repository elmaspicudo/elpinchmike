<?php

namespace EstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class marcoFamiliar_hType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text')
            ->add('edad','text')
            ->add('parentesco','text')
            ->add('estadoCivil','text')
            ->add('escolaridad','text')
            ->add('ocupacion','text')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EstudioBundle\Entity\marcoFamiliar'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'estudiobundle_marcoFamiliar';
    }
}