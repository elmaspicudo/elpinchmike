<?php

namespace EstudioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CreditoH5Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('institucionPersonales')
            ->add('montoCreditoInstitucion')
            ->add('pagoMensualInstitucion')
            ->add('fonacot')
            ->add('montoCreditoFonacot')
            ->add('pagoMensualFonacot')
            ->add('infonavit')
            ->add('montoCreditoInfonavit')
            ->add('pagoMensualInfonavit')
            ->add('otros')
            ->add('montoCreditoOtros')
            ->add('pagoMensualOtros')
            ->add('institucioAutomotriz')
            ->add('montoCredito')
            ->add('pagoMensual')
            ->add('saldoActual')
            ->add('aseguradora')
            ->add('tipoSeguro')
            ->add('mensualidad')
            ->add('vigencia')
            ->add('cablemas')
            ->add('mastv')
            ->add('atenaParabolica')
            ->add('sky')
            ->add('otrosTv')
            ->add('domestico')
            ->add('jardinero')
            ->add('chofer')
            ->add('vigilancia')
            ->add('observaciones')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EstudioBundle\Entity\CreditoH5'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'estudiobundle_creditoh5';
    }
}
