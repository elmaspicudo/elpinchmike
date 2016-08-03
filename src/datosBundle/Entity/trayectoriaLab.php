<?php

namespace datosBundle\Entity;

/**
 * trayectoriaLab
 */
class trayectoriaLab
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
    private $datosProporCionadosPor;

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
    private $asistenciaYpuntualidad;

    /**
     * @var boolean
     */
    private $responsabilidad;

    /**
     * @var boolean
     */
    private $desempenio;

    /**
     * @var boolean
     */
    private $relacionConJefesYcom;

    /**
     * @var boolean
     */
    private $trabajoVajoPresion;

    /**
     * @var boolean
     */
    private $apegoApoliticas;

    /**
     * @var string
     */
    private $desempenoProporcionado;

    /**
     * @var string
     */
    private $observacionn;

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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * Set datosProporCionadosPor
     *
     * @param string $datosProporCionadosPor
     *
     * @return trayectoriaLab
     */
    public function setDatosProporCionadosPor($datosProporCionadosPor)
    {
        $this->datosProporCionadosPor = $datosProporCionadosPor;

        return $this;
    }

    /**
     * Get datosProporCionadosPor
     *
     * @return string
     */
    public function getDatosProporCionadosPor()
    {
        return $this->datosProporCionadosPor;
    }

    /**
     * Set puesto
     *
     * @param string $puesto
     *
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * @return trayectoriaLab
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
     * Set asistenciaYpuntualidad
     *
     * @param boolean $asistenciaYpuntualidad
     *
     * @return trayectoriaLab
     */
    public function setAsistenciaYpuntualidad($asistenciaYpuntualidad)
    {
        $this->asistenciaYpuntualidad = $asistenciaYpuntualidad;

        return $this;
    }

    /**
     * Get asistenciaYpuntualidad
     *
     * @return boolean
     */
    public function getAsistenciaYpuntualidad()
    {
        return $this->asistenciaYpuntualidad;
    }

    /**
     * Set responsabilidad
     *
     * @param boolean $responsabilidad
     *
     * @return trayectoriaLab
     */
    public function setResponsabilidad($responsabilidad)
    {
        $this->responsabilidad = $responsabilidad;

        return $this;
    }

    /**
     * Get responsabilidad
     *
     * @return boolean
     */
    public function getResponsabilidad()
    {
        return $this->responsabilidad;
    }

    /**
     * Set desempenio
     *
     * @param boolean $desempenio
     *
     * @return trayectoriaLab
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
     * Set relacionConJefesYcom
     *
     * @param boolean $relacionConJefesYcom
     *
     * @return trayectoriaLab
     */
    public function setRelacionConJefesYcom($relacionConJefesYcom)
    {
        $this->relacionConJefesYcom = $relacionConJefesYcom;

        return $this;
    }

    /**
     * Get relacionConJefesYcom
     *
     * @return boolean
     */
    public function getRelacionConJefesYcom()
    {
        return $this->relacionConJefesYcom;
    }

    /**
     * Set trabajoVajoPresion
     *
     * @param boolean $trabajoVajoPresion
     *
     * @return trayectoriaLab
     */
    public function setTrabajoVajoPresion($trabajoVajoPresion)
    {
        $this->trabajoVajoPresion = $trabajoVajoPresion;

        return $this;
    }

    /**
     * Get trabajoVajoPresion
     *
     * @return boolean
     */
    public function getTrabajoVajoPresion()
    {
        return $this->trabajoVajoPresion;
    }

    /**
     * Set apegoApoliticas
     *
     * @param boolean $apegoApoliticas
     *
     * @return trayectoriaLab
     */
    public function setApegoApoliticas($apegoApoliticas)
    {
        $this->apegoApoliticas = $apegoApoliticas;

        return $this;
    }

    /**
     * Get apegoApoliticas
     *
     * @return boolean
     */
    public function getApegoApoliticas()
    {
        return $this->apegoApoliticas;
    }

    
    /**
     * Get desempenoProporcionado
     *
     * @return string
     */
    public function getDesempenoProporcionado()
    {
        return $this->desempenoProporcionado;
    }

    /**
     * Set desempenoProporcionado
     *
     * @param string $desempenoProporcionado
     *
     * @return trayectoriaLab
     */
    public function seteDsempenoProporcionado($desempenoProporcionado)
    {
        $this->desempenoProporcionado = $desempenoProporcionado;

        return $this;
    }

    /**
     * Get observacionn
     *
     * @return string
     */
    public function getObservacionn()
    {
        return $this->observacionn;
    }

    /**
     * Set observacionn
     *
     * @param string $observacionn
     *
     * @return trayectoriaLab
     */
    public function setObservacionn($observacionn)
    {
        $this->observacionn = $observacionn;

        return $this;
    }


    /**
     * Set desempenoProporcionado
     *
     * @param string $desempenoProporcionado
     *
     * @return trayectoriaLab
     */
    public function setDesempenoProporcionado($desempenoProporcionado)
    {
        $this->desempenoProporcionado = $desempenoProporcionado;

        return $this;
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
     * @return trayectoriaLab
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
