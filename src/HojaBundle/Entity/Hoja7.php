<?php

namespace HojaBundle\Entity;

/**
 * Hoja7
 */
class Hoja7
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $observaciones;
    private $referenciaFamiliar;
    private $referenciaVecinal;
    private $saludHigiene;
    private $pasatiempos;


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
     * @return Hoja7
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
     * Set referenciaFamiliar
     *
     * @param string $referenciaFamiliar
     *
     * @return Hoja71     */
    public function setHoja71($referenciaFamiliar)
    {
        $this->referenciaFamiliar = $referenciaFamiliar;

        return $this;
    }

    /**
     * Get referenciaFamiliar
     *
     * @return string
     */
    public function getHoja71()
    {
        return $this->referenciaFamiliar;
    }
    /**
     * Set referenciaVecinal
     *
     * @param string $referenciaVecinal
     *
     * @return Hoja72     */
    public function setHoja72($referenciaVecinal)
    {
        $this->referenciaVecinal = $referenciaVecinal;

        return $this;
    }

    /**
     * Get referenciaVecinal
     *
     * @return string
     */
    public function getHoja72()
    {
        return $this->referenciaVecinal;
    }

    /**
     * Set saludHigiene
     *
     * @param string $saludHigiene
     *
     * @return Hoja73     */
    public function setHoja73($saludHigiene)
    {
        $this->saludHigiene = $saludHigiene;

        return $this;
    }

    /**
     * Get saludHigiene
     *
     * @return string
     */
    public function getHoja73()
    {
        return $this->saludHigiene;
    }

    /**
     * Set pasatiempos
     *
     * @param string $pasatiempos
     *
     * @return Hoja74     */
    public function setHoja74($pasatiempos)
    {
        $this->pasatiempos = $pasatiempos;

        return $this;
    }

    /**
     * Get pasatiempos
     *
     * @return string
     */
    public function getHoja74()
    {
        return $this->pasatiempos;
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
     * @return Hoja7
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
