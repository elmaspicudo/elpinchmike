<?php

namespace HojaBundle\Entity;

/**
 * Hoja6
 */
class Hoja6
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $observaciones;
    private $referenciasLaborales;



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
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Hoja6
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
     * Set referenciasLaborales
     *
     * @param string $referenciasLaborales
     *
     * @return Hoja61     */
    public function setHoja61($referenciasLaborales)
    {
        $this->referenciasLaborales = $referenciasLaborales;

        return $this;
    }

    /**
     * Get referenciasLaborales
     *
     * @return string
     */
    public function getHoja61()
    {
        return $this->referenciasLaborales;
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
     * @return Hoja6
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
