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
            ->add('urbana','choice', array(
                'choices'=>array(
                        'alta' => 'Alta',
                        'media'  => 'Media',
                        'baja'     => 'Baja',
                        )))
            ->add('centrica','choice', array(
                'choices'=>array(
                        'industrial'  => 'Industrial',
                        'comercial' => 'Comercial',
                        'habitacional'     => 'Habitacional',
                        )))
            ->add('periferia','choice', array(
                'choices'=>array(
                        'barriada' => 'Barriada',
                        'rural'  => 'Rural',
                        'suburbio'     => 'Suburbio',
                        'campestre'     => 'Campestre',
                        'ejidal'     => 'Ejidal',
                        )))
            ->add('telefonoPublico','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('viasDeAcceso','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))

            ->add('agua','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))

            ->add('alumbrado','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))

            ->add('centrosComerciales','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))

            ->add('drenaje','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))

            ->add('mercados','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))

            ->add('pavimentacion','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))

            ->add('escuelas','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))

            ->add('banqueta','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))

            ->add('areasVerdes','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))

            ->add('transporte','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))

            ->add('deportivos','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))

            ->add('casa','choice', array(
                'choices'=>array(
                        'lujo' => 'Lujo',
                        'media'  => 'Media',
                        'media'  => 'Media',
                        'baja'  => 'Baja',
                        )))

            ->add('departamento','choice', array(
                'choices'=>array(
                        'lujo' => 'Lujo',
                        'media'  => 'Media',
                        'media'  => 'Media',
                        'baja'  => 'Baja',
                        )))

            ->add('condominio','choice', array(
                'choices'=>array(
                        'lujo' => 'Lujo',
                        'media'  => 'Media',
                        'media'  => 'Media',
                        'baja'  => 'Baja',
                        )))

            ->add('unidadHabitacional','choice', array(
                'choices'=>array(
                        'infonavit' => 'INFONAVIT',
                        'fovisste'  => 'FOVISSTE',
                        'otras'  => 'Otras',
                        )))
            ->add('viviendaPopular','choice', array(
                'choices'=>array(
                        'vecindad' => 'Vecindad',
                        'barranca'  => 'Barranca',
                        'jacal'  => 'Jacal',
                        )))
            ->add('propia')
            ->add('familiares')
            ->add('hipotecada')
            ->add('prestada')
            ->add('rentada')
            ->add('compartida')
            ->add('conservacionCasa','choice', array(
                'choices'=>array(
                        'buena' => 'Buena',
                        'regular'  => 'Regular',
                        'mala'  => 'Mala',
                        )))
            ->add('valorDeCasa')
            ->add('sala','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('comedor','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('cocina','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('recamaras','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('banos','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('cuartoServicio','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('estudio','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('biblioteca','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('garaje','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('jardin','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('mobiliario','choice', array(
                'choices'=>array(
                        'completo' => 'Completo',
                        'imcompleto'  => 'Imcompleto',
                        'escaso'  => 'Escaso',
                        )))
            ->add('imagen','choice', array(
                'choices'=>array(
                        'lujoso' => 'lujoso',
                        'normal'  => 'Normal',
                        'precario'  => 'Precario',
                        )))
            ->add('aspecto','choice', array(
                'choices'=>array(
                        'limpio' => 'Limpio',
                        'normal'  => 'Normal',
                        'sucio'  => 'Sucio',
                        )))
            ->add('orden','choice', array(
                'choices'=>array(
                        'acomodado' => 'Acomodado',
                        'desordenado'  => 'Desordenado',
                        'descuidado'  => 'Descuidado',
                        )))
            ->add('teatroEnCasa','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('televisionColor','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('dvd','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('estereo','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('radio','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('computadora','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('impresora','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('otros','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('refrigerador','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('lavaVajilla','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('lavadora','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('secadora','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('licuadora','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('freidora','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('horneador','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('hornoMicroondas','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('aspiradora','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('estufa','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('pulidora','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('batidora','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('waflera','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('tostador','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('sandwichera','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
                        )))
            ->add('extractorJugo','choice', array(
                'choices'=>array(
                        'si' => 'Si',
                        'no'  => 'No',
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
