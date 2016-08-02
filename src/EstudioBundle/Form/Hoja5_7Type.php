<?php

namespace EstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hoja5_7Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cablemas')
            ->add('mastv')
            ->add('antenaParabolica')
            ->add('sky')
            ->add('otros')
            ->add('domestico')
            ->add('jardinero')
            ->add('chofer')
            ->add('vigilancia')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EstudioBundle\Entity\Hoja5_7'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'estudiobundle_hoja5_7';
    }
}
