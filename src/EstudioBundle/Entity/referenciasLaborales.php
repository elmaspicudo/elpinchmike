<?php

namespace EstudioBundle\Entity;

/**
 * referenciasLaborales
 */
class referenciasLaborales
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
    private $giro;

    /**
     * @var integer
     */
    private $telefono;

    /**
     * @var string
     */
    private $domicilio;

    /**
     * @var string
     */
    private $ciudad;

    /**
     * @var \DateTime
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     */
    private $fechasalida;

    /**
     * @var string
     */
    private $puestoInicial;

    /**
     * @var string
     */
    private $puestoFinal;

    /**
     * @var integer
     */
    private $sueldoInicial;

    /**
     * @var float
     */
    private $sueldoFinal;

    /**
     * @var string
     */
    private $jefeInmediato;

    /**
     * @var string
     */
    private $puesto;

    /**
     * @var string
     */
    private $asistencia;

    /**
     * @var string
     */
    private $responsabilidad;

    /**
     * @var string
     */
    private $colaboracion;

    /**
     * @var string
     */
    private $calidadTrabajo;

    /**
     * @var string
     */
    private $actitudGeneral;

    /**
     * @var string
     */
    private $tomaDesiciones;

    /**
     * @var string
     */
    private $iniciativa;

    /**
     * @var string
     */
    private $honestidad;

    /**
     * @var string
     */
    private $relacionJefes;

    /**
     * @var string
     */
    private $relacionCompaneros;

    /**
     * @var string
     */
    private $perteneceSindicato;

    /**
     * @var string
     */
    private $cual;

    /**
     * @var string
     */
    private $cargoSindical;

    /**
     * @var string
     */
    private $participacion;

    /**
     * @var string
     */
    private $problemaLaboral;

    /**
     * @var string
     */
    private $motivoSeparacion;

    /**
     * @var string
     */
    private $personaRecomendable;

    /**
     * @var string
     */
    private $porque;

    /**
     * @var string
     */
    private $datosProporcionados;

    /**
     * @var string
     */
    private $puestoEntrevistador;

    /**
     * @var \DateTime
     */
    private $fechaEntravista;


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
     * @return referenciasLaborales
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
     * Set giro
     *
     * @param string $giro
     *
     * @return referenciasLaborales
     */
    public function setGiro($giro)
    {
        $this->giro = $giro;

        return $this;
    }

    /**
     * Get giro
     *
     * @return string
     */
    public function getGiro()
    {
        return $this->giro;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return referenciasLaborales
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return referenciasLaborales
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
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return referenciasLaborales
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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     *
     * @return referenciasLaborales
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechasalida
     *
     * @param \DateTime $fechasalida
     *
     * @return referenciasLaborales
     */
    public function setFechasalida($fechasalida)
    {
        $this->fechasalida = $fechasalida;

        return $this;
    }

    /**
     * Get fechasalida
     *
     * @return \DateTime
     */
    public function getFechasalida()
    {
        return $this->fechasalida;
    }

    /**
     * Set puestoInicial
     *
     * @param string $puestoInicial
     *
     * @return referenciasLaborales
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
     * @return referenciasLaborales
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
     * Set sueldoInicial
     *
     * @param integer $sueldoInicial
     *
     * @return referenciasLaborales
     */
    public function setSueldoInicial($sueldoInicial)
    {
        $this->sueldoInicial = $sueldoInicial;

        return $this;
    }

    /**
     * Get sueldoInicial
     *
     * @return integer
     */
    public function getSueldoInicial()
    {
        return $this->sueldoInicial;
    }

    /**
     * Set sueldoFinal
     *
     * @param float $sueldoFinal
     *
     * @return referenciasLaborales
     */
    public function setSueldoFinal($sueldoFinal)
    {
        $this->sueldoFinal = $sueldoFinal;

        return $this;
    }

    /**
     * Get sueldoFinal
     *
     * @return float
     */
    public function getSueldoFinal()
    {
        return $this->sueldoFinal;
    }

    /**
     * Set jefeInmediato
     *
     * @param string $jefeInmediato
     *
     * @return referenciasLaborales
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
     * Set puesto
     *
     * @param string $puesto
     *
     * @return referenciasLaborales
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
     * Set asistencia
     *
     * @param string $asistencia
     *
     * @return referenciasLaborales
     */
    public function setAsistencia($asistencia)
    {
        $this->asistencia = $asistencia;

        return $this;
    }

    /**
     * Get asistencia
     *
     * @return string
     */
    public function getAsistencia()
    {
        return $this->asistencia;
    }

    /**
     * Set responsabilidad
     *
     * @param string $responsabilidad
     *
     * @return referenciasLaborales
     */
    public function setResponsabilidad($responsabilidad)
    {
        $this->responsabilidad = $responsabilidad;

        return $this;
    }

    /**
     * Get responsabilidad
     *
     * @return string
     */
    public function getResponsabilidad()
    {
        return $this->responsabilidad;
    }

    /**
     * Set colaboracion
     *
     * @param string $colaboracion
     *
     * @return referenciasLaborales
     */
    public function setColaboracion($colaboracion)
    {
        $this->colaboracion = $colaboracion;

        return $this;
    }

    /**
     * Get colaboracion
     *
     * @return string
     */
    public function getColaboracion()
    {
        return $this->colaboracion;
    }

    /**
     * Set calidadTrabajo
     *
     * @param string $calidadTrabajo
     *
     * @return referenciasLaborales
     */
    public function setCalidadTrabajo($calidadTrabajo)
    {
        $this->calidadTrabajo = $calidadTrabajo;

        return $this;
    }

    /**
     * Get calidadTrabajo
     *
     * @return string
     */
    public function getCalidadTrabajo()
    {
        return $this->calidadTrabajo;
    }

    /**
     * Set actitudGeneral
     *
     * @param string $actitudGeneral
     *
     * @return referenciasLaborales
     */
    public function setActitudGeneral($actitudGeneral)
    {
        $this->actitudGeneral = $actitudGeneral;

        return $this;
    }

    /**
     * Get actitudGeneral
     *
     * @return string
     */
    public function getActitudGeneral()
    {
        return $this->actitudGeneral;
    }

    /**
     * Set tomaDesiciones
     *
     * @param string $tomaDesiciones
     *
     * @return referenciasLaborales
     */
    public function setTomaDesiciones($tomaDesiciones)
    {
        $this->tomaDesiciones = $tomaDesiciones;

        return $this;
    }

    /**
     * Get tomaDesiciones
     *
     * @return string
     */
    public function getTomaDesiciones()
    {
        return $this->tomaDesiciones;
    }

    /**
     * Set iniciativa
     *
     * @param string $iniciativa
     *
     * @return referenciasLaborales
     */
    public function setIniciativa($iniciativa)
    {
        $this->iniciativa = $iniciativa;

        return $this;
    }

    /**
     * Get iniciativa
     *
     * @return string
     */
    public function getIniciativa()
    {
        return $this->iniciativa;
    }

    /**
     * Set honestidad
     *
     * @param string $honestidad
     *
     * @return referenciasLaborales
     */
    public function setHonestidad($honestidad)
    {
        $this->honestidad = $honestidad;

        return $this;
    }

    /**
     * Get honestidad
     *
     * @return string
     */
    public function getHonestidad()
    {
        return $this->honestidad;
    }

    /**
     * Set relacionJefes
     *
     * @param string $relacionJefes
     *
     * @return referenciasLaborales
     */
    public function setRelacionJefes($relacionJefes)
    {
        $this->relacionJefes = $relacionJefes;

        return $this;
    }

    /**
     * Get relacionJefes
     *
     * @return string
     */
    public function getRelacionJefes()
    {
        return $this->relacionJefes;
    }

    /**
     * Set relacionCompaneros
     *
     * @param string $relacionCompaneros
     *
     * @return referenciasLaborales
     */
    public function setRelacionCompaneros($relacionCompaneros)
    {
        $this->relacionCompaneros = $relacionCompaneros;

        return $this;
    }

    /**
     * Get relacionCompaneros
     *
     * @return string
     */
    public function getRelacionCompaneros()
    {
        return $this->relacionCompaneros;
    }

    /**
     * Set perteneceSindicato
     *
     * @param string $perteneceSindicato
     *
     * @return referenciasLaborales
     */
    public function setPerteneceSindicato($perteneceSindicato)
    {
        $this->perteneceSindicato = $perteneceSindicato;

        return $this;
    }

    /**
     * Get perteneceSindicato
     *
     * @return string
     */
    public function getPerteneceSindicato()
    {
        return $this->perteneceSindicato;
    }

    /**
     * Set cual
     *
     * @param string $cual
     *
     * @return referenciasLaborales
     */
    public function setCual($cual)
    {
        $this->cual = $cual;

        return $this;
    }

    /**
     * Get cual
     *
     * @return string
     */
    public function getCual()
    {
        return $this->cual;
    }

    /**
     * Set cargoSindical
     *
     * @param string $cargoSindical
     *
     * @return referenciasLaborales
     */
    public function setCargoSindical($cargoSindical)
    {
        $this->cargoSindical = $cargoSindical;

        return $this;
    }

    /**
     * Get cargoSindical
     *
     * @return string
     */
    public function getCargoSindical()
    {
        return $this->cargoSindical;
    }

    /**
     * Set participacion
     *
     * @param string $participacion
     *
     * @return referenciasLaborales
     */
    public function setParticipacion($participacion)
    {
        $this->participacion = $participacion;

        return $this;
    }

    /**
     * Get participacion
     *
     * @return string
     */
    public function getParticipacion()
    {
        return $this->participacion;
    }

    /**
     * Set problemaLaboral
     *
     * @param string $problemaLaboral
     *
     * @return referenciasLaborales
     */
    public function setProblemaLaboral($problemaLaboral)
    {
        $this->problemaLaboral = $problemaLaboral;

        return $this;
    }

    /**
     * Get problemaLaboral
     *
     * @return string
     */
    public function getProblemaLaboral()
    {
        return $this->problemaLaboral;
    }

    /**
     * Set motivoSeparacion
     *
     * @param string $motivoSeparacion
     *
     * @return referenciasLaborales
     */
    public function setMotivoSeparacion($motivoSeparacion)
    {
        $this->motivoSeparacion = $motivoSeparacion;

        return $this;
    }

    /**
     * Get motivoSeparacion
     *
     * @return string
     */
    public function getMotivoSeparacion()
    {
        return $this->motivoSeparacion;
    }

    /**
     * Set personaRecomendable
     *
     * @param string $personaRecomendable
     *
     * @return referenciasLaborales
     */
    public function setPersonaRecomendable($personaRecomendable)
    {
        $this->personaRecomendable = $personaRecomendable;

        return $this;
    }

    /**
     * Get personaRecomendable
     *
     * @return string
     */
    public function getPersonaRecomendable()
    {
        return $this->personaRecomendable;
    }

    /**
     * Set porque
     *
     * @param string $porque
     *
     * @return referenciasLaborales
     */
    public function setPorque($porque)
    {
        $this->porque = $porque;

        return $this;
    }

    /**
     * Get porque
     *
     * @return string
     */
    public function getPorque()
    {
        return $this->porque;
    }

    /**
     * Set datosProporcionados
     *
     * @param string $datosProporcionados
     *
     * @return referenciasLaborales
     */
    public function setDatosProporcionados($datosProporcionados)
    {
        $this->datosProporcionados = $datosProporcionados;

        return $this;
    }

    /**
     * Get datosProporcionados
     *
     * @return string
     */
    public function getDatosProporcionados()
    {
        return $this->datosProporcionados;
    }

    /**
     * Set puestoEntrevistador
     *
     * @param string $puestoEntrevistador
     *
     * @return referenciasLaborales
     */
    public function setPuestoEntrevistador($puestoEntrevistador)
    {
        $this->puestoEntrevistador = $puestoEntrevistador;

        return $this;
    }

    /**
     * Get puestoEntrevistador
     *
     * @return string
     */
    public function getPuestoEntrevistador()
    {
        return $this->puestoEntrevistador;
    }

    /**
     * Set fechaEntravista
     *
     * @param \DateTime $fechaEntravista
     *
     * @return referenciasLaborales
     */
    public function setFechaEntravista($fechaEntravista)
    {
        $this->fechaEntravista = $fechaEntravista;

        return $this;
    }

    /**
     * Get fechaEntravista
     *
     * @return \DateTime
     */
    public function getFechaEntravista()
    {
        return $this->fechaEntravista;
    }
}
