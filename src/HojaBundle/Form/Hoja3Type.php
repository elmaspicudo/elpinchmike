 <?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use EstudioBundle\Form\DependientesEconomicosType;
use EstudioBundle\Form\personasDomicilioType;
use EstudioBundle\Form\marcoFamiliarType;
class MarcoFamiliarType extends AbstractType
{

     public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('DependientesEconomicos', 'collection',array(
                    'type' =>new \EstudioBundle\Form\DependientesEconomicosType(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'DependientesEconomicos')
                )))
             ->add('personasDomicilio', 'collection',array(
                    'type' =>new \EstudioBundle\Form\personasDomicilioType(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'personasDomicilio')
                )))
             ->add('personasDomicilio', 'collection',array(
                    'type' =>new \EstudioBundle\Form\marcoFamiliarType(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'marcoFamiliar')
                )))
             ->add('DependientesEconomicos', 'collection',array(
                    'type' =>new \EstudioBundle\Form\marcoFamiliarType(),
                    'allow_add' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'options'  => array(
                        'required'  => false,
                        'attr'      => array('class' => 'MarcoFamiliar_4')
                )))
            ->add('observaciones')
            ->add('Anterior', 'submit', array('label' => 'Anterior','attr'=>array('class'=>'btn btn-warning')))
            ->add('Siguiente', 'submit', array('label' => 'Siguiente','attr'=>array('class'=>'btn btn-success pull-right')))  
            
        ;
    }


    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HojaBundle\Entity\MarcoFamiliar'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_MarcoFamiliar';
    }
}
