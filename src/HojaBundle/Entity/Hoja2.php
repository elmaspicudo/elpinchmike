<?php

namespace HojaBundle\Entity;

/**
 * Hoja2
 */
class Hoja2
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $domicilio;

    /**
     * @var string
     */
    private $colonia;

    /**
     * @var string
     */
    private $municipio;

    /**
     * @var integer
     */
    private $cp;

    /**
     * @var string
     */
    private $entrecalle1;

    /**
     * @var string
     */
    private $entrecalle2;

    /**
     * @var string
     */
    private $ciudad;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var integer
     */
    private $antiguedadVivienda;

    /**
     * @var integer
     */
    private $antiguedadCiudad;

    /**
     * @var integer
     */
    private $telefonoLocal;

    /**
     * @var integer
     */
    private $celular;

    /**
     * @var string
     */
    private $lugarNacimiento;

    /**
     * @var \DateTime
     */
    private $fechaNacimiento;

    /**
     * @var string
     */
    private $nacionalidad;

    /**
     * @var integer
     */
    private $edad;

    /**
     * @var string
     */
    private $estadoCivil;

    /**
     * @var string
     */
    private $ocupacion;

    /**
     * @var integer
     */
    private $actaNacimiento;

    /**
     * @var string
     */
    private $curp;

    /**
     * @var integer
     */
    private $actaMatrimonio;

    /**
     * @var integer
     */
    private $cartillaMilitar;

    /**
     * @var string
     */
    private $comprobanteEstudios;

    /**
     * @var integer
     */
    private $licencia;

    /**
     * @var string
     */
    private $comprobanteDomicilio;

    /**
     * @var string
     */
    private $cartaRecomendacion1;

    /**
     * @var string
     */
    private $cartaRecomendacion2;

    /**
     * @var string
     */
    private $cartaRecomendacion3;

    /**
     * @var integer
     */
    private $credencialElector;

    /**
     * @var integer
     */
    private $seguroSocial;

    /**
     * @var string
     */
    private $primaria;

    /**
     * @var \DateTime
     */
    private $de;

    /**
     * @var \DateTime
     */
    private $a;

    /**
     * @var string
     */
    private $comprobante;

    /**
     * @var string
     */
    private $entidadPrimaria;

    /**
     * @var string
     */
    private $secundaria;

    /**
     * @var \DateTime
     */
    private $deSecundaria;

    /**
     * @var \DateTime
     */
    private $aSecundaria;

    /**
     * @var string
     */
    private $comprobanteSecundaria;

    /**
     * @var string
     */
    private $entidadSecundaria;

    /**
     * @var string
     */
    private $preparatoria;

    /**
     * @var \DateTime
     */
    private $dePreparatoria;

    /**
     * @var \DateTime
     */
    private $aPreparatoria;

    /**
     * @var string
     */
    private $comprobantePreparatoria;

    /**
     * @var string
     */
    private $entidadPreparatoria;

    /**
     * @var string
     */
    private $profesional;

    /**
     * @var \DateTime
     */
    private $deProfesional;

    /**
     * @var \DateTime
     */
    private $aProfesional;

    /**
     * @var string
     */
    private $comprobanteProfesional;

    /**
     * @var string
     */
    private $idiomas;

    /**
     * @var integer
     */
    private $porcentajeHabla;

    /**
     * @var integer
     */
    private $porcentajeEscribe;

    /**
     * @var integer
     */
    private $porcentajeLee;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud
     */
    private $solicitud;


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
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return Hoja2
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     *
     * @return Hoja2
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     *
     * @return Hoja2
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return Hoja2
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set entrecalle1
     *
     * @param string $entrecalle1
     *
     * @return Hoja2
     */
    public function setEntrecalle1($entrecalle1)
    {
        $this->entrecalle1 = $entrecalle1;

        return $this;
    }

    /**
     * Get entrecalle1
     *
     * @return string
     */
    public function getEntrecalle1()
    {
        return $this->entrecalle1;
    }

    /**
     * Set entrecalle2
     *
     * @param string $entrecalle2
     *
     * @return Hoja2
     */
    public function setEntrecalle2($entrecalle2)
    {
        $this->entrecalle2 = $entrecalle2;

        return $this;
    }

    /**
     * Get entrecalle2
     *
     * @return string
     */
    public function getEntrecalle2()
    {
        return $this->entrecalle2;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Hoja2
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Hoja2
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set antiguedadVivienda
     *
     * @param integer $antiguedadVivienda
     *
     * @return Hoja2
     */
    public function setAntiguedadVivienda($antiguedadVivienda)
    {
        $this->antiguedadVivienda = $antiguedadVivienda;

        return $this;
    }

    /**
     * Get antiguedadVivienda
     *
     * @return integer
     */
    public function getAntiguedadVivienda()
    {
        return $this->antiguedadVivienda;
    }

    /**
     * Set antiguedadCiudad
     *
     * @param integer $antiguedadCiudad
     *
     * @return Hoja2
     */
    public function setAntiguedadCiudad($antiguedadCiudad)
    {
        $this->antiguedadCiudad = $antiguedadCiudad;

        return $this;
    }

    /**
     * Get antiguedadCiudad
     *
     * @return integer
     */
    public function getAntiguedadCiudad()
    {
        return $this->antiguedadCiudad;
    }

    /**
     * Set telefonoLocal
     *
     * @param integer $telefonoLocal
     *
     * @return Hoja2
     */
    public function setTelefonoLocal($telefonoLocal)
    {
        $this->telefonoLocal = $telefonoLocal;

        return $this;
    }

    /**
     * Get telefonoLocal
     *
     * @return integer
     */
    public function getTelefonoLocal()
    {
        return $this->telefonoLocal;
    }

    /**
     * Set celular
     *
     * @param integer $celular
     *
     * @return Hoja2
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return integer
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set lugarNacimiento
     *
     * @param string $lugarNacimiento
     *
     * @return Hoja2
     */
    public function setLugarNacimiento($lugarNacimiento)
    {
        $this->lugarNacimiento = $lugarNacimiento;

        return $this;
    }

    /**
     * Get lugarNacimiento
     *
     * @return string
     */
    public function getLugarNacimiento()
    {
        return $this->lugarNacimiento;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Hoja2
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     *
     * @return Hoja2
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return string
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return Hoja2
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set estadoCivil
     *
     * @param string $estadoCivil
     *
     * @return Hoja2
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return string
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set ocupacion
     *
     * @param string $ocupacion
     *
     * @return Hoja2
     */
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;

        return $this;
    }

    /**
     * Get ocupacion
     *
     * @return string
     */
    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    /**
     * Set actaNacimiento
     *
     * @param integer $actaNacimiento
     *
     * @return Hoja2
     */
    public function setActaNacimiento($actaNacimiento)
    {
        $this->actaNacimiento = $actaNacimiento;

        return $this;
    }

    /**
     * Get actaNacimiento
     *
     * @return integer
     */
    public function getActaNacimiento()
    {
        return $this->actaNacimiento;
    }

    /**
     * Set curp
     *
     * @param string $curp
     *
     * @return Hoja2
     */
    public function setCurp($curp)
    {
        $this->curp = $curp;

        return $this;
    }

    /**
     * Get curp
     *
     * @return string
     */
    public function getCurp()
    {
        return $this->curp;
    }

    /**
     * Set actaMatrimonio
     *
     * @param integer $actaMatrimonio
     *
     * @return Hoja2
     */
    public function setActaMatrimonio($actaMatrimonio)
    {
        $this->actaMatrimonio = $actaMatrimonio;

        return $this;
    }

    /**
     * Get actaMatrimonio
     *
     * @return integer
     */
    public function getActaMatrimonio()
    {
        return $this->actaMatrimonio;
    }

    /**
     * Set cartillaMilitar
     *
     * @param integer $cartillaMilitar
     *
     * @return Hoja2
     */
    public function setCartillaMilitar($cartillaMilitar)
    {
        $this->cartillaMilitar = $cartillaMilitar;

        return $this;
    }

    /**
     * Get cartillaMilitar
     *
     * @return integer
     */
    public function getCartillaMilitar()
    {
        return $this->cartillaMilitar;
    }

    /**
     * Set comprobanteEstudios
     *
     * @param string $comprobanteEstudios
     *
     * @return Hoja2
     */
    public function setComprobanteEstudios($comprobanteEstudios)
    {
        $this->comprobanteEstudios = $comprobanteEstudios;

        return $this;
    }

    /**
     * Get comprobanteEstudios
     *
     * @return string
     */
    public function getComprobanteEstudios()
    {
        return $this->comprobanteEstudios;
    }

    /**
     * Set licencia
     *
     * @param integer $licencia
     *
     * @return Hoja2
     */
    public function setLicencia($licencia)
    {
        $this->licencia = $licencia;

        return $this;
    }

    /**
     * Get licencia
     *
     * @return integer
     */
    public function getLicencia()
    {
        return $this->licencia;
    }

    /**
     * Set comprobanteDomicilio
     *
     * @param string $comprobanteDomicilio
     *
     * @return Hoja2
     */
    public function setComprobanteDomicilio($comprobanteDomicilio)
    {
        $this->comprobanteDomicilio = $comprobanteDomicilio;

        return $this;
    }

    /**
     * Get comprobanteDomicilio
     *
     * @return string
     */
    public function getComprobanteDomicilio()
    {
        return $this->comprobanteDomicilio;
    }

    /**
     * Set cartaRecomendacion1
     *
     * @param string $cartaRecomendacion1
     *
     * @return Hoja2
     */
    public function setCartaRecomendacion1($cartaRecomendacion1)
    {
        $this->cartaRecomendacion1 = $cartaRecomendacion1;

        return $this;
    }

    /**
     * Get cartaRecomendacion1
     *
     * @return string
     */
    public function getCartaRecomendacion1()
    {
        return $this->cartaRecomendacion1;
    }

    /**
     * Set cartaRecomendacion2
     *
     * @param string $cartaRecomendacion2
     *
     * @return Hoja2
     */
    public function setCartaRecomendacion2($cartaRecomendacion2)
    {
        $this->cartaRecomendacion2 = $cartaRecomendacion2;

        return $this;
    }

    /**
     * Get cartaRecomendacion2
     *
     * @return string
     */
    public function getCartaRecomendacion2()
    {
        return $this->cartaRecomendacion2;
    }

    /**
     * Set cartaRecomendacion3
     *
     * @param string $cartaRecomendacion3
     *
     * @return Hoja2
     */
    public function setCartaRecomendacion3($cartaRecomendacion3)
    {
        $this->cartaRecomendacion3 = $cartaRecomendacion3;

        return $this;
    }

    /**
     * Get cartaRecomendacion3
     *
     * @return string
     */
    public function getCartaRecomendacion3()
    {
        return $this->cartaRecomendacion3;
    }

    /**
     * Set credencialElector
     *
     * @param integer $credencialElector
     *
     * @return Hoja2
     */
    public function setCredencialElector($credencialElector)
    {
        $this->credencialElector = $credencialElector;

        return $this;
    }

    /**
     * Get credencialElector
     *
     * @return integer
     */
    public function getCredencialElector()
    {
        return $this->credencialElector;
    }

    /**
     * Set seguroSocial
     *
     * @param integer $seguroSocial
     *
     * @return Hoja2
     */
    public function setSeguroSocial($seguroSocial)
    {
        $this->seguroSocial = $seguroSocial;

        return $this;
    }

    /**
     * Get seguroSocial
     *
     * @return integer
     */
    public function getSeguroSocial()
    {
        return $this->seguroSocial;
    }

    /**
     * Set primaria
     *
     * @param string $primaria
     *
     * @return Hoja2
     */
    public function setPrimaria($primaria)
    {
        $this->primaria = $primaria;

        return $this;
    }

    /**
     * Get primaria
     *
     * @return string
     */
    public function getPrimaria()
    {
        return $this->primaria;
    }

    /**
     * Set de
     *
     * @param \DateTime $de
     *
     * @return Hoja2
     */
    public function setDe($de)
    {
        $this->de = $de;

        return $this;
    }

    /**
     * Get de
     *
     * @return \DateTime
     */
    public function getDe()
    {
        return $this->de;
    }

    /**
     * Set a
     *
     * @param \DateTime $a
     *
     * @return Hoja2
     */
    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    /**
     * Get a
     *
     * @return \DateTime
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * Set comprobante
     *
     * @param string $comprobante
     *
     * @return Hoja2
     */
    public function setComprobante($comprobante)
    {
        $this->comprobante = $comprobante;

        return $this;
    }

    /**
     * Get comprobante
     *
     * @return string
     */
    public function getComprobante()
    {
        return $this->comprobante;
    }

    /**
     * Set entidadPrimaria
     *
     * @param string $entidadPrimaria
     *
     * @return Hoja2
     */
    public function setEntidadPrimaria($entidadPrimaria)
    {
        $this->entidadPrimaria = $entidadPrimaria;

        return $this;
    }

    /**
     * Get entidadPrimaria
     *
     * @return string
     */
    public function getEntidadPrimaria()
    {
        return $this->entidadPrimaria;
    }

    /**
     * Set secundaria
     *
     * @param string $secundaria
     *
     * @return Hoja2
     */
    public function setSecundaria($secundaria)
    {
        $this->secundaria = $secundaria;

        return $this;
    }

    /**
     * Get secundaria
     *
     * @return string
     */
    public function getSecundaria()
    {
        return $this->secundaria;
    }

    /**
     * Set deSecundaria
     *
     * @param \DateTime $deSecundaria
     *
     * @return Hoja2
     */
    public function setDeSecundaria($deSecundaria)
    {
        $this->deSecundaria = $deSecundaria;

        return $this;
    }

    /**
     * Get deSecundaria
     *
     * @return \DateTime
     */
    public function getDeSecundaria()
    {
        return $this->deSecundaria;
    }

    /**
     * Set aSecundaria
     *
     * @param \DateTime $aSecundaria
     *
     * @return Hoja2
     */
    public function setASecundaria($aSecundaria)
    {
        $this->aSecundaria = $aSecundaria;

        return $this;
    }

    /**
     * Get aSecundaria
     *
     * @return \DateTime
     */
    public function getASecundaria()
    {
        return $this->aSecundaria;
    }

    /**
     * Set comprobanteSecundaria
     *
     * @param string $comprobanteSecundaria
     *
     * @return Hoja2
     */
    public function setComprobanteSecundaria($comprobanteSecundaria)
    {
        $this->comprobanteSecundaria = $comprobanteSecundaria;

        return $this;
    }

    /**
     * Get comprobanteSecundaria
     *
     * @return string
     */
    public function getComprobanteSecundaria()
    {
        return $this->comprobanteSecundaria;
    }

    /**
     * Set entidadSecundaria
     *
     * @param string $entidadSecundaria
     *
     * @return Hoja2
     */
    public function setEntidadSecundaria($entidadSecundaria)
    {
        $this->entidadSecundaria = $entidadSecundaria;

        return $this;
    }

    /**
     * Get entidadSecundaria
     *
     * @return string
     */
    public function getEntidadSecundaria()
    {
        return $this->entidadSecundaria;
    }

    /**
     * Set preparatoria
     *
     * @param string $preparatoria
     *
     * @return Hoja2
     */
    public function setPreparatoria($preparatoria)
    {
        $this->preparatoria = $preparatoria;

        return $this;
    }

    /**
     * Get preparatoria
     *
     * @return string
     */
    public function getPreparatoria()
    {
        return $this->preparatoria;
    }

    /**
     * Set dePreparatoria
     *
     * @param \DateTime $dePreparatoria
     *
     * @return Hoja2
     */
    public function setDePreparatoria($dePreparatoria)
    {
        $this->dePreparatoria = $dePreparatoria;

        return $this;
    }

    /**
     * Get dePreparatoria
     *
     * @return \DateTime
     */
    public function getDePreparatoria()
    {
        return $this->dePreparatoria;
    }

    /**
     * Set aPreparatoria
     *
     * @param \DateTime $aPreparatoria
     *
     * @return Hoja2
     */
    public function setAPreparatoria($aPreparatoria)
    {
        $this->aPreparatoria = $aPreparatoria;

        return $this;
    }

    /**
     * Get aPreparatoria
     *
     * @return \DateTime
     */
    public function getAPreparatoria()
    {
        return $this->aPreparatoria;
    }

    /**
     * Set comprobantePreparatoria
     *
     * @param string $comprobantePreparatoria
     *
     * @return Hoja2
     */
    public function setComprobantePreparatoria($comprobantePreparatoria)
    {
        $this->comprobantePreparatoria = $comprobantePreparatoria;

        return $this;
    }

    /**
     * Get comprobantePreparatoria
     *
     * @return string
     */
    public function getComprobantePreparatoria()
    {
        return $this->comprobantePreparatoria;
    }

    /**
     * Set entidadPreparatoria
     *
     * @param string $entidadPreparatoria
     *
     * @return Hoja2
     */
    public function setEntidadPreparatoria($entidadPreparatoria)
    {
        $this->entidadPreparatoria = $entidadPreparatoria;

        return $this;
    }

    /**
     * Get entidadPreparatoria
     *
     * @return string
     */
    public function getEntidadPreparatoria()
    {
        return $this->entidadPreparatoria;
    }

    /**
     * Set profesional
     *
     * @param string $profesional
     *
     * @return Hoja2
     */
    public function setProfesional($profesional)
    {
        $this->profesional = $profesional;

        return $this;
    }

    /**
     * Get profesional
     *
     * @return string
     */
    public function getProfesional()
    {
        return $this->profesional;
    }

    /**
     * Set deProfesional
     *
     * @param \DateTime $deProfesional
     *
     * @return Hoja2
     */
    public function setDeProfesional($deProfesional)
    {
        $this->deProfesional = $deProfesional;

        return $this;
    }

    /**
     * Get deProfesional
     *
     * @return \DateTime
     */
    public function getDeProfesional()
    {
        return $this->deProfesional;
    }

    /**
     * Set aProfesional
     *
     * @param \DateTime $aProfesional
     *
     * @return Hoja2
     */
    public function setAProfesional($aProfesional)
    {
        $this->aProfesional = $aProfesional;

        return $this;
    }

    /**
     * Get aProfesional
     *
     * @return \DateTime
     */
    public function getAProfesional()
    {
        return $this->aProfesional;
    }

    /**
     * Set comprobanteProfesional
     *
     * @param string $comprobanteProfesional
     *
     * @return Hoja2
     */
    public function setComprobanteProfesional($comprobanteProfesional)
    {
        $this->comprobanteProfesional = $comprobanteProfesional;

        return $this;
    }

    /**
     * Get comprobanteProfesional
     *
     * @return string
     */
    public function getComprobanteProfesional()
    {
        return $this->comprobanteProfesional;
    }

    /**
     * Set idiomas
     *
     * @param string $idiomas
     *
     * @return Hoja2
     */
    public function setIdiomas($idiomas)
    {
        $this->idiomas = $idiomas;

        return $this;
    }

    /**
     * Get idiomas
     *
     * @return string
     */
    public function getIdiomas()
    {
        return $this->idiomas;
    }

    /**
     * Set porcentajeHabla
     *
     * @param integer $porcentajeHabla
     *
     * @return Hoja2
     */
    public function setPorcentajeHabla($porcentajeHabla)
    {
        $this->porcentajeHabla = $porcentajeHabla;

        return $this;
    }

    /**
     * Get porcentajeHabla
     *
     * @return integer
     */
    public function getPorcentajeHabla()
    {
        return $this->porcentajeHabla;
    }

    /**
     * Set porcentajeEscribe
     *
     * @param integer $porcentajeEscribe
     *
     * @return Hoja2
     */
    public function setPorcentajeEscribe($porcentajeEscribe)
    {
        $this->porcentajeEscribe = $porcentajeEscribe;

        return $this;
    }

    /**
     * Get porcentajeEscribe
     *
     * @return integer
     */
    public function getPorcentajeEscribe()
    {
        return $this->porcentajeEscribe;
    }

    /**
     * Set porcentajeLee
     *
     * @param integer $porcentajeLee
     *
     * @return Hoja2
     */
    public function setPorcentajeLee($porcentajeLee)
    {
        $this->porcentajeLee = $porcentajeLee;

        return $this;
    }

    /**
     * Get porcentajeLee
     *
     * @return integer
     */
    public function getPorcentajeLee()
    {
        return $this->porcentajeLee;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Hoja2
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

    /**
     * Set solicitud
     *
     * @param \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud $solicitud
     *
     * @return Hoja2
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
}
