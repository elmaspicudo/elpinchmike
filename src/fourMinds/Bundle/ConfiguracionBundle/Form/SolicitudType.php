<?php

namespace fourMinds\Bundle\ConfiguracionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityRepository;

class SolicitudType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('direccion')
            ->add('telefonos')
            ->add('puesto')
            ->add('formato','choice', array(
                'choices' => array(
                    '1' => 'Largo',
                    '2' => 'WIPRO'                   
                ),
                'data' => 1
            ))
            ->add('fecha','date', array(
                        'widget' => 'single_text'
                    ))
            ->add('cliente')
            ->add('visitador', 'entity', array(
                'class' => 'fourMinds\Bundle\UserBundle\Entity\User',
                'property' => 'line',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.role = :id')
                        ->setParameter('id', 'ROLE_USER')
                        ->orderBy('u.userName', 'ASC');
                },
                'choice_label' => 'username',
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fourminds_bundle_configuracionbundle_solicitud';
    }
}
