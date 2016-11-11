<?php

namespace EstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class creditoAutomotrizType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('institucion','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('monto')
            ->add('pagoMensual')
            ->add('saldoActual')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EstudioBundle\Entity\creditoAutomotriz'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'estudiobundle_creditoAutomotriz';
    }
}