<?php

namespace HojaBundle\Entity;

/**
 * Bienes
 */
class Bienes
{
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    private $urbana;

    /**
     * @var string
     */
    private $centrica;

    /**
     * @var string
     */
    private $periferia;

    /**
     * @var string
     */
    private $telefonoPublico;

    /**
     * @var string
     */
    private $viasDeAcceso;

    /**
     * @var string
     */
    private $agua;

    /**
     * @var string
     */
    private $alumbrado;

    /**
     * @var string
     */
    private $centrosComerciales;

    /**
     * @var string
     */
    private $drenaje;

    /**
     * @var string
     */
    private $mercados;

    /**
     * @var string
     */
    private $pavimentacion;

    /**
     * @var string
     */
    private $escuelas;

    /**
     * @var string
     */
    private $banqueta;

    /**
     * @var string
     */
    private $areasVerdes;

    /**
     * @var string
     */
    private $transporte;

    /**
     * @var string
     */
    private $deportivos;

    /**
     * @var string
     */
    private $casa;

    /**
     * @var string
     */
    private $departamento;

    /**
     * @var string
     */
    private $condominio;

    /**
     * @var string
     */
    private $unidadHabitacional;

    /**
     * @var string
     */
    private $viviendaPopular;

    /**
     * @var string
     */
    private $propia;

    /**
     * @var string
     */
    private $familiares;

    /**
     * @var string
     */
    private $hipotecada;

    /**
     * @var string
     */
    private $prestada;

    /**
     * @var string
     */
    private $rentada;

    /**
     * @var string
     */
    private $compartida;

    /**
     * @var string
     */
    private $buena;

    /**
     * @var string
     */
    private $regular;

    /**
     * @var string
     */
    private $mala;

    /**
     * @var integer
     */
    private $valorDeCasa;

    /**
     * @var string
     */
    private $sala;

    /**
     * @var string
     */
    private $comedor;

    /**
     * @var string
     */
    private $cocina;

    /**
     * @var string
     */
    private $recamaras;

    /**
     * @var string
     */
    private $banos;

    /**
     * @var string
     */
    private $cuartoServicio;

    /**
     * @var string
     */
    private $estudio;

    /**
     * @var string
     */
    private $biblioteca;

    /**
     * @var string
     */
    private $garaje;

    /**
     * @var string
     */
    private $jardin;

    /**
     * @var string
     */
    private $mobiliario;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var string
     */
    private $aspecto;

    /**
     * @var string
     */
    private $orden;

    /**
     * @var string
     */
    private $teatroEnCasa;

    /**
     * @var string
     */
    private $televisionColor;

    /**
     * @var string
     */
    private $dvd;

    /**
     * @var string
     */
    private $estereo;

    /**
     * @var string
     */
    private $radio;

    /**
     * @var string
     */
    private $computadora;

    /**
     * @var string
     */
    private $impresora;

    /**
     * @var string
     */
    private $otros;

    /**
     * @var string
     */
    private $refrigerador;

    /**
     * @var string
     */
    private $lavaVajilla;

    /**
     * @var string
     */
    private $lavadora;

    /**
     * @var string
     */
    private $secadora;

    /**
     * @var string
     */
    private $licuadora;

    /**
     * @var string
     */
    private $freidora;

    /**
     * @var string
     */
    private $horneador;

    /**
     * @var string
     */
    private $hornoMicroondas;

    /**
     * @var string
     */
    private $aspiradora;

    /**
     * @var string
     */
    private $estufa;

    /**
     * @var string
     */
    private $pulidora;

    /**
     * @var string
     */
    private $batidora;

    /**
     * @var string
     */
    private $waflera;

    /**
     * @var string
     */
    private $tostador;

    /**
     * @var string
     */
    private $sandwichera;

    /**
     * @var string
     */
    private $extractorJugo;

    /**
     * @var string
     */
    private $observaciones;


    /**
     * Set urbana
     *
     * @param string $urbana
     *
     * @return Bienes
     */
    public function setUrbana($urbana)
    {
        $this->urbana = $urbana;

        return $this;
    }

    /**
     * Get urbana
     *
     * @return string
     */
    public function getUrbana()
    {
        return $this->urbana;
    }

    /**
     * Set centrica
     *
     * @param string $centrica
     *
     * @return Bienes
     */
    public function setCentrica($centrica)
    {
        $this->centrica = $centrica;

        return $this;
    }

    /**
     * Get centrica
     *
     * @return string
     */
    public function getCentrica()
    {
        return $this->centrica;
    }

    /**
     * Set periferia
     *
     * @param string $periferia
     *
     * @return Bienes
     */
    public function setPeriferia($periferia)
    {
        $this->periferia = $periferia;

        return $this;
    }

    /**
     * Get periferia
     *
     * @return string
     */
    public function getPeriferia()
    {
        return $this->periferia;
    }

    /**
     * Set telefonoPublico
     *
     * @param string $telefonoPublico
     *
     * @return Bienes
     */
    public function setTelefonoPublico($telefonoPublico)
    {
        $this->telefonoPublico = $telefonoPublico;

        return $this;
    }

    /**
     * Get telefonoPublico
     *
     * @return string
     */
    public function getTelefonoPublico()
    {
        return $this->telefonoPublico;
    }

    /**
     * Set viasDeAcceso
     *
     * @param string $viasDeAcceso
     *
     * @return Bienes
     */
    public function setViasDeAcceso($viasDeAcceso)
    {
        $this->viasDeAcceso = $viasDeAcceso;

        return $this;
    }

    /**
     * Get viasDeAcceso
     *
     * @return string
     */
    public function getViasDeAcceso()
    {
        return $this->viasDeAcceso;
    }

    /**
     * Set agua
     *
     * @param string $agua
     *
     * @return Bienes
     */
    public function setAgua($agua)
    {
        $this->agua = $agua;

        return $this;
    }

    /**
     * Get agua
     *
     * @return string
     */
    public function getAgua()
    {
        return $this->agua;
    }

    /**
     * Set alumbrado
     *
     * @param string $alumbrado
     *
     * @return Bienes
     */
    public function setAlumbrado($alumbrado)
    {
        $this->alumbrado = $alumbrado;

        return $this;
    }

    /**
     * Get alumbrado
     *
     * @return string
     */
    public function getAlumbrado()
    {
        return $this->alumbrado;
    }

    /**
     * Set centrosComerciales
     *
     * @param string $centrosComerciales
     *
     * @return Bienes
     */
    public function setCentrosComerciales($centrosComerciales)
    {
        $this->centrosComerciales = $centrosComerciales;

        return $this;
    }

    /**
     * Get centrosComerciales
     *
     * @return string
     */
    public function getCentrosComerciales()
    {
        return $this->centrosComerciales;
    }

    /**
     * Set drenaje
     *
     * @param string $drenaje
     *
     * @return Bienes
     */
    public function setDrenaje($drenaje)
    {
        $this->drenaje = $drenaje;

        return $this;
    }

    /**
     * Get drenaje
     *
     * @return string
     */
    public function getDrenaje()
    {
        return $this->drenaje;
    }

    /**
     * Set mercados
     *
     * @param string $mercados
     *
     * @return Bienes
     */
    public function setMercados($mercados)
    {
        $this->mercados = $mercados;

        return $this;
    }

    /**
     * Get mercados
     *
     * @return string
     */
    public function getMercados()
    {
        return $this->mercados;
    }

    /**
     * Set pavimentacion
     *
     * @param string $pavimentacion
     *
     * @return Bienes
     */
    public function setPavimentacion($pavimentacion)
    {
        $this->pavimentacion = $pavimentacion;

        return $this;
    }

    /**
     * Get pavimentacion
     *
     * @return string
     */
    public function getPavimentacion()
    {
        return $this->pavimentacion;
    }

    /**
     * Set escuelas
     *
     * @param string $escuelas
     *
     * @return Bienes
     */
    public function setEscuelas($escuelas)
    {
        $this->escuelas = $escuelas;

        return $this;
    }

    /**
     * Get escuelas
     *
     * @return string
     */
    public function getEscuelas()
    {
        return $this->escuelas;
    }

    /**
     * Set banqueta
     *
     * @param string $banqueta
     *
     * @return Bienes
     */
    public function setBanqueta($banqueta)
    {
        $this->banqueta = $banqueta;

        return $this;
    }

    /**
     * Get banqueta
     *
     * @return string
     */
    public function getBanqueta()
    {
        return $this->banqueta;
    }

    /**
     * Set areasVerdes
     *
     * @param string $areasVerdes
     *
     * @return Bienes
     */
    public function setAreasVerdes($areasVerdes)
    {
        $this->areasVerdes = $areasVerdes;

        return $this;
    }

    /**
     * Get areasVerdes
     *
     * @return string
     */
    public function getAreasVerdes()
    {
        return $this->areasVerdes;
    }

    /**
     * Set transporte
     *
     * @param string $transporte
     *
     * @return Bienes
     */
    public function setTransporte($transporte)
    {
        $this->transporte = $transporte;

        return $this;
    }

    /**
     * Get transporte
     *
     * @return string
     */
    public function getTransporte()
    {
        return $this->transporte;
    }

    /**
     * Set deportivos
     *
     * @param string $deportivos
     *
     * @return Bienes
     */
    public function setDeportivos($deportivos)
    {
        $this->deportivos = $deportivos;

        return $this;
    }

    /**
     * Get deportivos
     *
     * @return string
     */
    public function getDeportivos()
    {
        return $this->deportivos;
    }

    /**
     * Set casa
     *
     * @param string $casa
     *
     * @return Bienes
     */
    public function setCasa($casa)
    {
        $this->casa = $casa;

        return $this;
    }

    /**
     * Get casa
     *
     * @return string
     */
    public function getCasa()
    {
        return $this->casa;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     *
     * @return Bienes
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set condominio
     *
     * @param string $condominio
     *
     * @return Bienes
     */
    public function setCondominio($condominio)
    {
        $this->condominio = $condominio;

        return $this;
    }

    /**
     * Get condominio
     *
     * @return string
     */
    public function getCondominio()
    {
        return $this->condominio;
    }

    /**
     * Set unidadHabitacional
     *
     * @param string $unidadHabitacional
     *
     * @return Bienes
     */
    public function setUnidadHabitacional($unidadHabitacional)
    {
        $this->unidadHabitacional = $unidadHabitacional;

        return $this;
    }

    /**
     * Get unidadHabitacional
     *
     * @return string
     */
    public function getUnidadHabitacional()
    {
        return $this->unidadHabitacional;
    }

    /**
     * Set viviendaPopular
     *
     * @param string $viviendaPopular
     *
     * @return Bienes
     */
    public function setViviendaPopular($viviendaPopular)
    {
        $this->viviendaPopular = $viviendaPopular;

        return $this;
    }

    /**
     * Get viviendaPopular
     *
     * @return string
     */
    public function getViviendaPopular()
    {
        return $this->viviendaPopular;
    }

    /**
     * Set propia
     *
     * @param string $propia
     *
     * @return Bienes
     */
    public function setPropia($propia)
    {
        $this->propia = $propia;

        return $this;
    }

    /**
     * Get propia
     *
     * @return string
     */
    public function getPropia()
    {
        return $this->propia;
    }

    /**
     * Set familiares
     *
     * @param string $familiares
     *
     * @return Bienes
     */
    public function setFamiliares($familiares)
    {
        $this->familiares = $familiares;

        return $this;
    }

    /**
     * Get familiares
     *
     * @return string
     */
    public function getFamiliares()
    {
        return $this->familiares;
    }

    /**
     * Set hipotecada
     *
     * @param string $hipotecada
     *
     * @return Bienes
     */
    public function setHipotecada($hipotecada)
    {
        $this->hipotecada = $hipotecada;

        return $this;
    }

    /**
     * Get hipotecada
     *
     * @return string
     */
    public function getHipotecada()
    {
        return $this->hipotecada;
    }

    /**
     * Set prestada
     *
     * @param string $prestada
     *
     * @return Bienes
     */
    public function setPrestada($prestada)
    {
        $this->prestada = $prestada;

        return $this;
    }

    /**
     * Get prestada
     *
     * @return string
     */
    public function getPrestada()
    {
        return $this->prestada;
    }

    /**
     * Set rentada
     *
     * @param string $rentada
     *
     * @return Bienes
     */
    public function setRentada($rentada)
    {
        $this->rentada = $rentada;

        return $this;
    }

    /**
     * Get rentada
     *
     * @return string
     */
    public function getRentada()
    {
        return $this->rentada;
    }

    /**
     * Set compartida
     *
     * @param string $compartida
     *
     * @return Bienes
     */
    public function setCompartida($compartida)
    {
        $this->compartida = $compartida;

        return $this;
    }

    /**
     * Get compartida
     *
     * @return string
     */
    public function getCompartida()
    {
        return $this->compartida;
    }

    /**
     * Set buena
     *
     * @param string $buena
     *
     * @return Bienes
     */
    public function setBuena($buena)
    {
        $this->buena = $buena;

        return $this;
    }

    /**
     * Get buena
     *
     * @return string
     */
    public function getBuena()
    {
        return $this->buena;
    }

    /**
     * Set regular
     *
     * @param string $regular
     *
     * @return Bienes
     */
    public function setRegular($regular)
    {
        $this->regular = $regular;

        return $this;
    }

    /**
     * Get regular
     *
     * @return string
     */
    public function getRegular()
    {
        return $this->regular;
    }

    /**
     * Set mala
     *
     * @param string $mala
     *
     * @return Bienes
     */
    public function setMala($mala)
    {
        $this->mala = $mala;

        return $this;
    }

    /**
     * Get mala
     *
     * @return string
     */
    public function getMala()
    {
        return $this->mala;
    }

    /**
     * Set valorDeCasa
     *
     * @param integer $valorDeCasa
     *
     * @return Bienes
     */
    public function setValorDeCasa($valorDeCasa)
    {
        $this->valorDeCasa = $valorDeCasa;

        return $this;
    }

    /**
     * Get valorDeCasa
     *
     * @return integer
     */
    public function getValorDeCasa()
    {
        return $this->valorDeCasa;
    }

    /**
     * Set sala
     *
     * @param string $sala
     *
     * @return Bienes
     */
    public function setSala($sala)
    {
        $this->sala = $sala;

        return $this;
    }

    /**
     * Get sala
     *
     * @return string
     */
    public function getSala()
    {
        return $this->sala;
    }

    /**
     * Set comedor
     *
     * @param string $comedor
     *
     * @return Bienes
     */
    public function setComedor($comedor)
    {
        $this->comedor = $comedor;

        return $this;
    }

    /**
     * Get comedor
     *
     * @return string
     */
    public function getComedor()
    {
        return $this->comedor;
    }

    /**
     * Set cocina
     *
     * @param string $cocina
     *
     * @return Bienes
     */
    public function setCocina($cocina)
    {
        $this->cocina = $cocina;

        return $this;
    }

    /**
     * Get cocina
     *
     * @return string
     */
    public function getCocina()
    {
        return $this->cocina;
    }

    /**
     * Set recamaras
     *
     * @param string $recamaras
     *
     * @return Bienes
     */
    public function setRecamaras($recamaras)
    {
        $this->recamaras = $recamaras;

        return $this;
    }

    /**
     * Get recamaras
     *
     * @return string
     */
    public function getRecamaras()
    {
        return $this->recamaras;
    }

    /**
     * Set banos
     *
     * @param string $banos
     *
     * @return Bienes
     */
    public function setBanos($banos)
    {
        $this->banos = $banos;

        return $this;
    }

    /**
     * Get banos
     *
     * @return string
     */
    public function getBanos()
    {
        return $this->banos;
    }

    /**
     * Set cuartoServicio
     *
     * @param string $cuartoServicio
     *
     * @return Bienes
     */
    public function setCuartoServicio($cuartoServicio)
    {
        $this->cuartoServicio = $cuartoServicio;

        return $this;
    }

    /**
     * Get cuartoServicio
     *
     * @return string
     */
    public function getCuartoServicio()
    {
        return $this->cuartoServicio;
    }

    /**
     * Set estudio
     *
     * @param string $estudio
     *
     * @return Bienes
     */
    public function setEstudio($estudio)
    {
        $this->estudio = $estudio;

        return $this;
    }

    /**
     * Get estudio
     *
     * @return string
     */
    public function getEstudio()
    {
        return $this->estudio;
    }

    /**
     * Set biblioteca
     *
     * @param string $biblioteca
     *
     * @return Bienes
     */
    public function setBiblioteca($biblioteca)
    {
        $this->biblioteca = $biblioteca;

        return $this;
    }

    /**
     * Get biblioteca
     *
     * @return string
     */
    public function getBiblioteca()
    {
        return $this->biblioteca;
    }

    /**
     * Set garaje
     *
     * @param string $garaje
     *
     * @return Bienes
     */
    public function setGaraje($garaje)
    {
        $this->garaje = $garaje;

        return $this;
    }

    /**
     * Get garaje
     *
     * @return string
     */
    public function getGaraje()
    {
        return $this->garaje;
    }

    /**
     * Set jardin
     *
     * @param string $jardin
     *
     * @return Bienes
     */
    public function setJardin($jardin)
    {
        $this->jardin = $jardin;

        return $this;
    }

    /**
     * Get jardin
     *
     * @return string
     */
    public function getJardin()
    {
        return $this->jardin;
    }

    /**
     * Set mobiliario
     *
     * @param string $mobiliario
     *
     * @return Bienes
     */
    public function setMobiliario($mobiliario)
    {
        $this->mobiliario = $mobiliario;

        return $this;
    }

    /**
     * Get mobiliario
     *
     * @return string
     */
    public function getMobiliario()
    {
        return $this->mobiliario;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Bienes
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set aspecto
     *
     * @param string $aspecto
     *
     * @return Bienes
     */
    public function setAspecto($aspecto)
    {
        $this->aspecto = $aspecto;

        return $this;
    }

    /**
     * Get aspecto
     *
     * @return string
     */
    public function getAspecto()
    {
        return $this->aspecto;
    }

    /**
     * Set orden
     *
     * @param string $orden
     *
     * @return Bienes
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return string
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set teatroEnCasa
     *
     * @param string $teatroEnCasa
     *
     * @return Bienes
     */
    public function setTeatroEnCasa($teatroEnCasa)
    {
        $this->teatroEnCasa = $teatroEnCasa;

        return $this;
    }

    /**
     * Get teatroEnCasa
     *
     * @return string
     */
    public function getTeatroEnCasa()
    {
        return $this->teatroEnCasa;
    }

    /**
     * Set televisionColor
     *
     * @param string $televisionColor
     *
     * @return Bienes
     */
    public function setTelevisionColor($televisionColor)
    {
        $this->televisionColor = $televisionColor;

        return $this;
    }

    /**
     * Get televisionColor
     *
     * @return string
     */
    public function getTelevisionColor()
    {
        return $this->televisionColor;
    }

    /**
     * Set dvd
     *
     * @param string $dvd
     *
     * @return Bienes
     */
    public function setDvd($dvd)
    {
        $this->dvd = $dvd;

        return $this;
    }

    /**
     * Get dvd
     *
     * @return string
     */
    public function getDvd()
    {
        return $this->dvd;
    }

    /**
     * Set estereo
     *
     * @param string $estereo
     *
     * @return Bienes
     */
    public function setEstereo($estereo)
    {
        $this->estereo = $estereo;

        return $this;
    }

    /**
     * Get estereo
     *
     * @return string
     */
    public function getEstereo()
    {
        return $this->estereo;
    }

    /**
     * Set radio
     *
     * @param string $radio
     *
     * @return Bienes
     */
    public function setRadio($radio)
    {
        $this->radio = $radio;

        return $this;
    }

    /**
     * Get radio
     *
     * @return string
     */
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * Set computadora
     *
     * @param string $computadora
     *
     * @return Bienes
     */
    public function setComputadora($computadora)
    {
        $this->computadora = $computadora;

        return $this;
    }

    /**
     * Get computadora
     *
     * @return string
     */
    public function getComputadora()
    {
        return $this->computadora;
    }

    /**
     * Set impresora
     *
     * @param string $impresora
     *
     * @return Bienes
     */
    public function setImpresora($impresora)
    {
        $this->impresora = $impresora;

        return $this;
    }

    /**
     * Get impresora
     *
     * @return string
     */
    public function getImpresora()
    {
        return $this->impresora;
    }

    /**
     * Set otros
     *
     * @param string $otros
     *
     * @return Bienes
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return string
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set refrigerador
     *
     * @param string $refrigerador
     *
     * @return Bienes
     */
    public function setRefrigerador($refrigerador)
    {
        $this->refrigerador = $refrigerador;

        return $this;
    }

    /**
     * Get refrigerador
     *
     * @return string
     */
    public function getRefrigerador()
    {
        return $this->refrigerador;
    }

    /**
     * Set lavaVajilla
     *
     * @param string $lavaVajilla
     *
     * @return Bienes
     */
    public function setLavaVajilla($lavaVajilla)
    {
        $this->lavaVajilla = $lavaVajilla;

        return $this;
    }

    /**
     * Get lavaVajilla
     *
     * @return string
     */
    public function getLavaVajilla()
    {
        return $this->lavaVajilla;
    }

    /**
     * Set lavadora
     *
     * @param string $lavadora
     *
     * @return Bienes
     */
    public function setLavadora($lavadora)
    {
        $this->lavadora = $lavadora;

        return $this;
    }

    /**
     * Get lavadora
     *
     * @return string
     */
    public function getLavadora()
    {
        return $this->lavadora;
    }

    /**
     * Set secadora
     *
     * @param string $secadora
     *
     * @return Bienes
     */
    public function setSecadora($secadora)
    {
        $this->secadora = $secadora;

        return $this;
    }

    /**
     * Get secadora
     *
     * @return string
     */
    public function getSecadora()
    {
        return $this->secadora;
    }

    /**
     * Set licuadora
     *
     * @param string $licuadora
     *
     * @return Bienes
     */
    public function setLicuadora($licuadora)
    {
        $this->licuadora = $licuadora;

        return $this;
    }

    /**
     * Get licuadora
     *
     * @return string
     */
    public function getLicuadora()
    {
        return $this->licuadora;
    }

    /**
     * Set freidora
     *
     * @param string $freidora
     *
     * @return Bienes
     */
    public function setFreidora($freidora)
    {
        $this->freidora = $freidora;

        return $this;
    }

    /**
     * Get freidora
     *
     * @return string
     */
    public function getFreidora()
    {
        return $this->freidora;
    }

    /**
     * Set horneador
     *
     * @param string $horneador
     *
     * @return Bienes
     */
    public function setHorneador($horneador)
    {
        $this->horneador = $horneador;

        return $this;
    }

    /**
     * Get horneador
     *
     * @return string
     */
    public function getHorneador()
    {
        return $this->horneador;
    }

    /**
     * Set hornoMicroondas
     *
     * @param string $hornoMicroondas
     *
     * @return Bienes
     */
    public function setHornoMicroondas($hornoMicroondas)
    {
        $this->hornoMicroondas = $hornoMicroondas;

        return $this;
    }

    /**
     * Get hornoMicroondas
     *
     * @return string
     */
    public function getHornoMicroondas()
    {
        return $this->hornoMicroondas;
    }

    /**
     * Set aspiradora
     *
     * @param string $aspiradora
     *
     * @return Bienes
     */
    public function setAspiradora($aspiradora)
    {
        $this->aspiradora = $aspiradora;

        return $this;
    }

    /**
     * Get aspiradora
     *
     * @return string
     */
    public function getAspiradora()
    {
        return $this->aspiradora;
    }

    /**
     * Set estufa
     *
     * @param string $estufa
     *
     * @return Bienes
     */
    public function setEstufa($estufa)
    {
        $this->estufa = $estufa;

        return $this;
    }

    /**
     * Get estufa
     *
     * @return string
     */
    public function getEstufa()
    {
        return $this->estufa;
    }

    /**
     * Set pulidora
     *
     * @param string $pulidora
     *
     * @return Bienes
     */
    public function setPulidora($pulidora)
    {
        $this->pulidora = $pulidora;

        return $this;
    }

    /**
     * Get pulidora
     *
     * @return string
     */
    public function getPulidora()
    {
        return $this->pulidora;
    }

    /**
     * Set batidora
     *
     * @param string $batidora
     *
     * @return Bienes
     */
    public function setBatidora($batidora)
    {
        $this->batidora = $batidora;

        return $this;
    }

    /**
     * Get batidora
     *
     * @return string
     */
    public function getBatidora()
    {
        return $this->batidora;
    }

    /**
     * Set waflera
     *
     * @param string $waflera
     *
     * @return Bienes
     */
    public function setWaflera($waflera)
    {
        $this->waflera = $waflera;

        return $this;
    }

    /**
     * Get waflera
     *
     * @return string
     */
    public function getWaflera()
    {
        return $this->waflera;
    }

    /**
     * Set tostador
     *
     * @param string $tostador
     *
     * @return Bienes
     */
    public function setTostador($tostador)
    {
        $this->tostador = $tostador;

        return $this;
    }

    /**
     * Get tostador
     *
     * @return string
     */
    public function getTostador()
    {
        return $this->tostador;
    }

    /**
     * Set sandwichera
     *
     * @param string $sandwichera
     *
     * @return Bienes
     */
    public function setSandwichera($sandwichera)
    {
        $this->sandwichera = $sandwichera;

        return $this;
    }

    /**
     * Get sandwichera
     *
     * @return string
     */
    public function getSandwichera()
    {
        return $this->sandwichera;
    }

    /**
     * Set extractorJugo
     *
     * @param string $extractorJugo
     *
     * @return Bienes
     */
    public function setExtractorJugo($extractorJugo)
    {
        $this->extractorJugo = $extractorJugo;

        return $this;
    }

    /**
     * Get extractorJugo
     *
     * @return string
     */
    public function getExtractorJugo()
    {
        return $this->extractorJugo;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Bienes
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
    private $Bienes_raices;
    private $Bienes_autos;

   
    /**
     * Set Bienes_raices
     *
     * @param string $Bienes_raices
     *
     * @return Bienes
     */
    public function setBienes1($Bienes_raices)
    {
        $this->Bienes_raices = $Bienes_raices;

        return $this;
    }

    /**
     * Get Bienes_raices
     *
     * @return string
     */
    public function getBienes2()
    {
        return $this->Bienes_autos;
    }

     /**
     * Set Bienes_autos
     *
     * @param string $Bienes_autos
     *
     * @return Bienes
     */
    public function setBienes2($Bienes_autos)
    {
        $this->Bienes_autos = $Bienes_autos;

        return $this;
    }

    /**
     * Get Bienes_autos
     *
     * @return string
     */
    public function getBienes1()
    {
        return $this->Bienes_autos;
    }

    /**
     * @var string
     */
    private $conservacionCasa;


    /**
     * Set conservacionCasa
     *
     * @param string $conservacionCasa
     *
     * @return Bienes
     */
    public function setConservacionCasa($conservacionCasa)
    {
        $this->conservacionCasa = $conservacionCasa;

        return $this;
    }

    /**
     * Get conservacionCasa
     *
     * @return string
     */
    public function getConservacionCasa()
    {
        return $this->conservacionCasa;
    }
    /**
     * @var \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud
     */
    private $solicitud;


    /**
     * Set solicitud
     *
     * @param \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud $solicitud
     *
     * @return Bienes
     */
    public function setSolicitud(\fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud $solicitud = null)
    {
        $this->solicitud = $solicitud;

        return $this;
    }

    /**
     * Get solicitud
     *
     * @return \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud
     */
    public function getSolicitud()
    {
        return $this->solicitud;
    }
    /**
     * @var string
     */
    private $propiedadVivienda;


    /**
     * Set propiedadVivienda
     *
     * @param string $propiedadVivienda
     *
     * @return Bienes
     */
    public function setPropiedadVivienda($propiedadVivienda)
    {
        $this->propiedadVivienda = $propiedadVivienda;

        return $this;
    }

    /**
     * Get propiedadVivienda
     *
     * @return string
     */
    public function getPropiedadVivienda()
    {
        return $this->propiedadVivienda;
    }

    /**
     * Set bienesRaices
     *
     * @param \EstudioBundle\Entity\Bienes_raices $bienesRaices
     *
     * @return Bienes
     */
    public function setBienesRaices(\EstudioBundle\Entity\Bienes_raices $bienesRaices = null)
    {
        $this->Bienes_raices = $bienesRaices;

        return $this;
    }

    /**
     * Get bienesRaices
     *
     * @return \EstudioBundle\Entity\Bienes_raices
     */
    public function getBienesRaices()
    {
        return $this->Bienes_raices;
    }

    /**
     * Set bienesAutos
     *
     * @param \EstudioBundle\Entity\Bienes_autos $bienesAutos
     *
     * @return Bienes
     */
    public function setBienesAutos(\EstudioBundle\Entity\Bienes_autos $bienesAutos = null)
    {
        $this->Bienes_autos = $bienesAutos;

        return $this;
    }

    /**
     * Get bienesAutos
     *
     * @return \EstudioBundle\Entity\Bienes_autos
     */
    public function getBienesAutos()
    {
        return $this->Bienes_autos;
    }
}
