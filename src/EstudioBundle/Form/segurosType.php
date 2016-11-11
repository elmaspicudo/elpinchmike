<?php

namespace EstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class segurosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('aseguradora','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('tipoSeguro')
            ->add('mensualidad')
            ->add('vigencia','text')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EstudioBundle\Entity\seguros'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'estudiobundle_seguros';
    }
}
