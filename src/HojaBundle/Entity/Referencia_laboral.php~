<?php

namespace HojaBundle\Entity;

/**
 * Referencia_laboral
 */
class Referencia_laboral
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud
     */
    private $solicitud;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $referenciasLaborales;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->referenciasLaborales = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Referencia_laboral
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
     * @return Referencia_laboral
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
     * Add referenciasLaborale
     *
     * @param \EstudioBundle\Entity\referenciasLaborales $referenciasLaborale
     *
     * @return Referencia_laboral
     */
    public function addReferenciasLaborale(\EstudioBundle\Entity\referenciasLaborales $referenciasLaborale)
    {
        $this->referenciasLaborales[] = $referenciasLaborale;

        return $this;
    }

    /**
     * Remove referenciasLaborale
     *
     * @param \EstudioBundle\Entity\referenciasLaborales $referenciasLaborale
     */
    public function removeReferenciasLaborale(\EstudioBundle\Entity\referenciasLaborales $referenciasLaborale)
    {
        $this->referenciasLaborales->removeElement($referenciasLaborale);
    }

    /**
     * Get referenciasLaborales
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReferenciasLaborales()
    {
        return $this->referenciasLaborales;
    }
}
