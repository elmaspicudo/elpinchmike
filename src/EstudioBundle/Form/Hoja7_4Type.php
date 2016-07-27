<?php

namespace EstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hoja7_4Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('proyectos')
            ->add('interesTrabajo')
            ->add('trabajoSatisfactorio')
            ->add('tiempoLibre')
            ->add('musica')
            ->add('lee')
            ->add('generoLectura')
            ->add('autorFavorito')
            ->add('asistenciaEventos')
            ->add('tipoEventos')
            ->add('asistenciaReuniones')
            ->add('tipoReuniones')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EstudioBundle\Entity\Hoja7_4'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'estudiobundle_hoja7_4';
    }
}
