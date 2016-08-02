<?php

namespace HojaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Hoja4Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('hoja4_1', new \EstudioBundle\Form\Hoja4_1Type())
            ->add('hoja4_2', new \EstudioBundle\Form\Hoja4_2Type())
            ->add('urbana')
            ->add('centrica')
            ->add('periferia')
            ->add('telefonoPublico')
            ->add('viasDeAcceso')
            ->add('agua')
            ->add('alumbrado')
            ->add('centrosComerciales')
            ->add('drenaje')
            ->add('mercados')
            ->add('pavimentacion')
            ->add('escuelas')
            ->add('banqueta')
            ->add('areasVerdes')
            ->add('transporte')
            ->add('deportivos')
            ->add('casa')
            ->add('departamento')
            ->add('condominio')
            ->add('unidadHabitacional')
            ->add('viviendaPopular')
            ->add('propia')
            ->add('familiares')
            ->add('hipotecada')
            ->add('prestada')
            ->add('rentada')
            ->add('compartida')
            ->add('buena')
            ->add('regular')
            ->add('mala')
            ->add('valorDeCasa')
            ->add('sala')
            ->add('comedor')
            ->add('cocina')
            ->add('recamaras')
            ->add('banos')
            ->add('cuartoServicio')
            ->add('estudio')
            ->add('biblioteca')
            ->add('garaje')
            ->add('jardin')
            ->add('mobiliario')
            ->add('imagen')
            ->add('aspecto')
            ->add('orden')
            ->add('teatroEnCasa')
            ->add('televisionColor')
            ->add('dvd')
            ->add('estereo')
            ->add('radio')
            ->add('computadora')
            ->add('impresora')
            ->add('otros')
            ->add('refrigerador')
            ->add('lavaVajilla')
            ->add('lavadora')
            ->add('secadora')
            ->add('licuadora')
            ->add('freidora')
            ->add('horneador')
            ->add('hornoMicroondas')
            ->add('aspiradora')
            ->add('estufa')
            ->add('pulidora')
            ->add('batidora')
            ->add('waflera')
            ->add('tostador')
            ->add('sandwichera')
            ->add('extractorJugo')
            ->add('observaciones')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HojaBundle\Entity\Hoja4'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hojabundle_hoja4';
    }
}
