<?php

namespace EstudioBundle\Entity;

/**
 * Hoja1
 */
class Hoja1
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
    private $puesto;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apPaterno;

    /**
     * @var string
     */
    private $apMaterno;

    /**
     * @var string
     */
    private $personal;

    /**
     * @var string
     */
    private $escolares;

    /**
     * @var string
     */
    private $entornoFamiliar;

    /**
     * @var string
     */
    private $entornoEconomico;

    /**
     * @var string
     */
    private $documentacion;

    /**
     * @var string
     */
    private $laboral;

    /**
     * @var string
     */
    private $desempeno;

    /**
     * @var string
     */
    private $estabilidadLaboral;

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
     * @return Hoja1
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
     * Set puesto
     *
     * @param string $puesto
     *
     * @return Hoja1
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Hoja1
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apPaterno
     *
     * @param string $apPaterno
     *
     * @return Hoja1
     */
    public function setApPaterno($apPaterno)
    {
        $this->apPaterno = $apPaterno;

        return $this;
    }

    /**
     * Get apPaterno
     *
     * @return string
     */
    public function getApPaterno()
    {
        return $this->apPaterno;
    }

    /**
     * Set apMaterno
     *
     * @param string $apMaterno
     *
     * @return Hoja1
     */
    public function setApMaterno($apMaterno)
    {
        $this->apMaterno = $apMaterno;

        return $this;
    }

    /**
     * Get apMaterno
     *
     * @return string
     */
    public function getApMaterno()
    {
        return $this->apMaterno;
    }

    /**
     * Set personal
     *
     * @param string $personal
     *
     * @return Hoja1
     */
    public function setPersonal($personal)
    {
        $this->personal = $personal;

        return $this;
    }

    /**
     * Get personal
     *
     * @return string
     */
    public function getPersonal()
    {
        return $this->personal;
    }

    /**
     * Set escolares
     *
     * @param string $escolares
     *
     * @return Hoja1
     */
    public function setEscolares($escolares)
    {
        $this->escolares = $escolares;

        return $this;
    }

    /**
     * Get escolares
     *
     * @return string
     */
    public function getEscolares()
    {
        return $this->escolares;
    }

    /**
     * Set entornoFamiliar
     *
     * @param string $entornoFamiliar
     *
     * @return Hoja1
     */
    public function setEntornoFamiliar($entornoFamiliar)
    {
        $this->entornoFamiliar = $entornoFamiliar;

        return $this;
    }

    /**
     * Get entornoFamiliar
     *
     * @return string
     */
    public function getEntornoFamiliar()
    {
        return $this->entornoFamiliar;
    }

    /**
     * Set entornoEconomico
     *
     * @param string $entornoEconomico
     *
     * @return Hoja1
     */
    public function setEntornoEconomico($entornoEconomico)
    {
        $this->entornoEconomico = $entornoEconomico;

        return $this;
    }

    /**
     * Get entornoEconomico
     *
     * @return string
     */
    public function getEntornoEconomico()
    {
        return $this->entornoEconomico;
    }

    /**
     * Set documentacion
     *
     * @param string $documentacion
     *
     * @return Hoja1
     */
    public function setDocumentacion($documentacion)
    {
        $this->documentacion = $documentacion;

        return $this;
    }

    /**
     * Get documentacion
     *
     * @return string
     */
    public function getDocumentacion()
    {
        return $this->documentacion;
    }

    /**
     * Set laboral
     *
     * @param string $laboral
     *
     * @return Hoja1
     */
    public function setLaboral($laboral)
    {
        $this->laboral = $laboral;

        return $this;
    }

    /**
     * Get laboral
     *
     * @return string
     */
    public function getLaboral()
    {
        return $this->laboral;
    }

    /**
     * Set desempeno
     *
     * @param string $desempeno
     *
     * @return Hoja1
     */
    public function setDesempeno($desempeno)
    {
        $this->desempeno = $desempeno;

        return $this;
    }

    /**
     * Get desempeno
     *
     * @return string
     */
    public function getDesempeno()
    {
        return $this->desempeno;
    }

    /**
     * Set estabilidadLaboral
     *
     * @param string $estabilidadLaboral
     *
     * @return Hoja1
     */
    public function setEstabilidadLaboral($estabilidadLaboral)
    {
        $this->estabilidadLaboral = $estabilidadLaboral;

        return $this;
    }

    /**
     * Get estabilidadLaboral
     *
     * @return string
     */
    public function getEstabilidadLaboral()
    {
        return $this->estabilidadLaboral;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Hoja1
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
        if ($this->observaciones != '')
            return stream_get_contents($this->observaciones);
        return $this->observaciones;    }
}

