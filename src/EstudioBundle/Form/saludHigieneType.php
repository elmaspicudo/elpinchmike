<?php

namespace EstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class saludHigieneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('estadoSalud')
            ->add('hospitalizaciones')
            ->add('razon')
            ->add('incapazidadesUltimoEmpleo')
            ->add('razonIncapacidad')
            ->add('enfermedadContagiosa')
            ->add('cual')
            ->add('enfermedadesUltimoAno')
            ->add('problemasVision')
            ->add('cualProblemaVision')
            ->add('hipertension')
            ->add('servicioMedico')
            ->add('estadoSaludFamilia')
            ->add('consumeDroga')
            ->add('frecuenciaDroga')
            ->add('consumeCigarros')
            ->add('frecuenciaCigarros')
            ->add('ejercicio')
            ->add('cualEjercicio')
            ->add('frecuenciaEjercicio')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EstudioBundle\Entity\saludHigiene'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'estudiobundle_saludHigiene';
    }
}
