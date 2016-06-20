<?php

namespace fourMinds\Bundle\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userName')
            ->add('nombre')
            ->add('aPaterno')
            ->add('aMaterno')
            ->add('correo')
            ->add('password', 'repeated', array(
                    'type' => 'password',
                    'invalid_message' => 'Los paswords no coinciden.',
                    'options' => array('attr' => array('class' => 'input-xlarge','minlength'=>8)),
                    'required' => true,
                    'first_options'  => array('label' => 'Password'),
                    'second_options' => array('label' => 'Repite password')))
            ->add('role', 'choice', array(
                'choices' => array(
                    'ROLE_ADMIN' => 'Administrador',
                    'ROLE_USER' => 'Investigador',
                    'ROLE_TEL' => 'Telofonista',
                    'ROLE_INV' => 'Invitado'
                ),
                'data' => 1
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'fourMinds\Bundle\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fourMinds_bundle_userbundle_user';
    }
}
