<?php

namespace datosBundle\Entity;

/**
 * anteriorEmpleo
 */
class anteriorEmpleo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $empresa;

    /**
     * @var string
     */
    private $sucursal;

    /**
     * @var string
     */
    private $domicilio;

    /**
     * @var string
     */
    private $jefeInmediato;

    /**
     * @var \DateTime
     */
    private $fechaDeInicio;

    /**
     * @var \DateTime
     */
    private $fechaDeTermino;

    /**
     * @var string
     */
    private $puestoInicial;

    /**
     * @var string
     */
    private $puestoFinal;

    /**
     * @var string
     */
    private $motivoDeSalida;

    /**
     * @var string
     */
    private $datosProporcionadosPor;

    /**
     * @var string
     */
    private $puesto;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $puestoo;

    /**
     * @var string
     */
    private $sueldoInicial;

    /**
     * @var string
     */
    private $sueldoFinal;

    /**
     * @var boolean
     */
    private $exelente;

    /**
     * @var boolean
     */
    private $muyBueno;

    /**
     * @var boolean
     */
    private $bueno;

    /**
     * @var boolean
     */
    private $regular;

    /**
     * @var boolean
     */
    private $deficiente;

    /**
     * @var boolean
     */
    private $asistencia;

    /**
     * @var boolean
     */
    private $respensabilidad;

    /**
     * @var boolean
     */
    private $desempenio;

    /**
     * @var boolean
     */
    private $relacionJefesCompa;

    /**
     * @var boolean
     */
    private $trabajoVajoPrecion;

    /**
     * @var boolean
     */
    private $apegoAPoliticas;

    /**
     * @var string
     */
    private $desempenioProporcionado;

    /**
     * @var string
     */
    private $observaciones;


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
     * Set empresa
     *
     * @param string $empresa
     *
     * @return anteriorEmpleo
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set sucursal
     *
     * @param string $sucursal
     *
     * @return anteriorEmpleo
     */
    public function setSucursal($sucursal)
    {
        $this->sucursal = $sucursal;

        return $this;
    }

    /**
     * Get sucursal
     *
     * @return string
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return anteriorEmpleo
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
     * Set jefeInmediato
     *
     * @param string $jefeInmediato
     *
     * @return anteriorEmpleo
     */
    public function setJefeInmediato($jefeInmediato)
    {
        $this->jefeInmediato = $jefeInmediato;

        return $this;
    }

    /**
     * Get jefeInmediato
     *
     * @return string
     */
    public function getJefeInmediato()
    {
        return $this->jefeInmediato;
    }

    /**
     * Set fechaDeInicio
     *
     * @param \DateTime $fechaDeInicio
     *
     * @return anteriorEmpleo
     */
    public function setFechaDeInicio($fechaDeInicio)
    {
        $this->fechaDeInicio = $fechaDeInicio;

        return $this;
    }

    /**
     * Get fechaDeInicio
     *
     * @return \DateTime
     */
    public function getFechaDeInicio()
    {
        return $this->fechaDeInicio;
    }

    /**
     * Set fechaDeTermino
     *
     * @param \DateTime $fechaDeTermino
     *
     * @return anteriorEmpleo
     */
    public function setFechaDeTermino($fechaDeTermino)
    {
        $this->fechaDeTermino = $fechaDeTermino;

        return $this;
    }

    /**
     * Get fechaDeTermino
     *
     * @return \DateTime
     */
    public function getFechaDeTermino()
    {
        return $this->fechaDeTermino;
    }

    /**
     * Set puestoInicial
     *
     * @param string $puestoInicial
     *
     * @return anteriorEmpleo
     */
    public function setPuestoInicial($puestoInicial)
    {
        $this->puestoInicial = $puestoInicial;

        return $this;
    }

    /**
     * Get puestoInicial
     *
     * @return string
     */
    public function getPuestoInicial()
    {
        return $this->puestoInicial;
    }

    /**
     * Set puestoFinal
     *
     * @param string $puestoFinal
     *
     * @return anteriorEmpleo
     */
    public function setPuestoFinal($puestoFinal)
    {
        $this->puestoFinal = $puestoFinal;

        return $this;
    }

    /**
     * Get puestoFinal
     *
     * @return string
     */
    public function getPuestoFinal()
    {
        return $this->puestoFinal;
    }

    /**
     * Set motivoDeSalida
     *
     * @param string $motivoDeSalida
     *
     * @return anteriorEmpleo
     */
    public function setMotivoDeSalida($motivoDeSalida)
    {
        $this->motivoDeSalida = $motivoDeSalida;

        return $this;
    }

    /**
     * Get motivoDeSalida
     *
     * @return string
     */
    public function getMotivoDeSalida()
    {
        return $this->motivoDeSalida;
    }

    /**
     * Set datosProporcionadosPor
     *
     * @param string $datosProporcionadosPor
     *
     * @return anteriorEmpleo
     */
    public function setDatosProporcionadosPor($datosProporcionadosPor)
    {
        $this->datosProporcionadosPor = $datosProporcionadosPor;

        return $this;
    }

    /**
     * Get datosProporcionadosPor
     *
     * @return string
     */
    public function getDatosProporcionadosPor()
    {
        return $this->datosProporcionadosPor;
    }

    /**
     * Set puesto
     *
     * @param string $puesto
     *
     * @return anteriorEmpleo
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;

        return $this;
    }

    /**
     * Get puesto
     *
     * @return string
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return anteriorEmpleo
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return anteriorEmpleo
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
     * Set puestoo
     *
     * @param string $puestoo
     *
     * @return anteriorEmpleo
     */
    public function setPuestoo($puestoo)
    {
        $this->puestoo = $puestoo;

        return $this;
    }

    /**
     * Get puestoo
     *
     * @return string
     */
    public function getPuestoo()
    {
        return $this->puestoo;
    }

    /**
     * Set sueldoInicial
     *
     * @param string $sueldoInicial
     *
     * @return anteriorEmpleo
     */
    public function setSueldoInicial($sueldoInicial)
    {
        $this->sueldoInicial = $sueldoInicial;

        return $this;
    }

    /**
     * Get sueldoInicial
     *
     * @return string
     */
    public function getSueldoInicial()
    {
        return $this->sueldoInicial;
    }

    /**
     * Set sueldoFinal
     *
     * @param string $sueldoFinal
     *
     * @return anteriorEmpleo
     */
    public function setSueldoFinal($sueldoFinal)
    {
        $this->sueldoFinal = $sueldoFinal;

        return $this;
    }

    /**
     * Get sueldoFinal
     *
     * @return string
     */
    public function getSueldoFinal()
    {
        return $this->sueldoFinal;
    }

    /**
     * Set exelente
     *
     * @param boolean $exelente
     *
     * @return anteriorEmpleo
     */
    public function setExelente($exelente)
    {
        $this->exelente = $exelente;

        return $this;
    }

    /**
     * Get exelente
     *
     * @return boolean
     */
    public function getExelente()
    {
        return $this->exelente;
    }

    /**
     * Set muyBueno
     *
     * @param boolean $muyBueno
     *
     * @return anteriorEmpleo
     */
    public function setMuyBueno($muyBueno)
    {
        $this->muyBueno = $muyBueno;

        return $this;
    }

    /**
     * Get muyBueno
     *
     * @return boolean
     */
    public function getMuyBueno()
    {
        return $this->muyBueno;
    }

    /**
     * Set bueno
     *
     * @param boolean $bueno
     *
     * @return anteriorEmpleo
     */
    public function setBueno($bueno)
    {
        $this->bueno = $bueno;

        return $this;
    }

    /**
     * Get bueno
     *
     * @return boolean
     */
    public function getBueno()
    {
        return $this->bueno;
    }

    /**
     * Set regular
     *
     * @param boolean $regular
     *
     * @return anteriorEmpleo
     */
    public function setRegular($regular)
    {
        $this->regular = $regular;

        return $this;
    }

    /**
     * Get regular
     *
     * @return boolean
     */
    public function getRegular()
    {
        return $this->regular;
    }

    /**
     * Set deficiente
     *
     * @param boolean $deficiente
     *
     * @return anteriorEmpleo
     */
    public function setDeficiente($deficiente)
    {
        $this->deficiente = $deficiente;

        return $this;
    }

    /**
     * Get deficiente
     *
     * @return boolean
     */
    public function getDeficiente()
    {
        return $this->deficiente;
    }

    /**
     * Set asistencia
     *
     * @param boolean $asistencia
     *
     * @return anteriorEmpleo
     */
    public function setAsistencia($asistencia)
    {
        $this->asistencia = $asistencia;

        return $this;
    }

    /**
     * Get asistencia
     *
     * @return boolean
     */
    public function getAsistencia()
    {
        return $this->asistencia;
    }

    /**
     * Set respensabilidad
     *
     * @param boolean $respensabilidad
     *
     * @return anteriorEmpleo
     */
    public function setRespensabilidad($respensabilidad)
    {
        $this->respensabilidad = $respensabilidad;

        return $this;
    }

    /**
     * Get respensabilidad
     *
     * @return boolean
     */
    public function getRespensabilidad()
    {
        return $this->respensabilidad;
    }

    /**
     * Set desempenio
     *
     * @param boolean $desempenio
     *
     * @return anteriorEmpleo
     */
    public function setDesempenio($desempenio)
    {
        $this->desempenio = $desempenio;

        return $this;
    }

    /**
     * Get desempenio
     *
     * @return boolean
     */
    public function getDesempenio()
    {
        return $this->desempenio;
    }

    /**
     * Set relacionJefesCompa
     *
     * @param boolean $relacionJefesCompa
     *
     * @return anteriorEmpleo
     */
    public function setRelacionJefesCompa($relacionJefesCompa)
    {
        $this->relacionJefesCompa = $relacionJefesCompa;

        return $this;
    }

    /**
     * Get relacionJefesCompa
     *
     * @return boolean
     */
    public function getRelacionJefesCompa()
    {
        return $this->relacionJefesCompa;
    }

    /**
     * Set trabajoVajoPrecion
     *
     * @param boolean $trabajoVajoPrecion
     *
     * @return anteriorEmpleo
     */
    public function setTrabajoVajoPrecion($trabajoVajoPrecion)
    {
        $this->trabajoVajoPrecion = $trabajoVajoPrecion;

        return $this;
    }

    /**
     * Get trabajoVajoPrecion
     *
     * @return boolean
     */
    public function getTrabajoVajoPrecion()
    {
        return $this->trabajoVajoPrecion;
    }

    /**
     * Set apegoAPoliticas
     *
     * @param boolean $apegoAPoliticas
     *
     * @return anteriorEmpleo
     */
    public function setApegoAPoliticas($apegoAPoliticas)
    {
        $this->apegoAPoliticas = $apegoAPoliticas;

        return $this;
    }

    /**
     * Get apegoAPoliticas
     *
     * @return boolean
     */
    public function getApegoAPoliticas()
    {
        return $this->apegoAPoliticas;
    }

    /**
     * Set desempenioProporcionado
     *
     * @param string $desempenioProporcionado
     *
     * @return anteriorEmpleo
     */
    public function setDesempenioProporcionado($desempenioProporcionado)
    {
        $this->desempenioProporcionado = $desempenioProporcionado;

        return $this;
    }

    /**
     * Get desempenioProporcionado
     *
     * @return string
     */
    public function getDesempenioProporcionado()
    {
        return $this->desempenioProporcionado;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return anteriorEmpleo
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
}
