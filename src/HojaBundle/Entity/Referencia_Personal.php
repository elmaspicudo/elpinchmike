<?php

namespace HojaBundle\Entity;

/**
 * Referencia_Personal
 */
class Referencia_Personal
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
    private $referenciaFamiliar;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $referenciaVecinal;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $saludHigiene;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pasatiempos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->referenciaFamiliar = new \Doctrine\Common\Collections\ArrayCollection();
        $this->referenciaVecinal = new \Doctrine\Common\Collections\ArrayCollection();
        $this->saludHigiene = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pasatiempos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Referencia_Personal
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
     * @return Referencia_Personal
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
     * Add referenciaFamiliar
     *
     * @param \EstudioBundle\Entity\referenciaFamiliar $referenciaFamiliar
     *
     * @return Referencia_Personal
     */
    public function addReferenciaFamiliar(\EstudioBundle\Entity\referenciaFamiliar $referenciaFamiliar)
    {
        $this->referenciaFamiliar[] = $referenciaFamiliar;

        return $this;
    }

    /**
     * Remove referenciaFamiliar
     *
     * @param \EstudioBundle\Entity\referenciaFamiliar $referenciaFamiliar
     */
    public function removeReferenciaFamiliar(\EstudioBundle\Entity\referenciaFamiliar $referenciaFamiliar)
    {
        $this->referenciaFamiliar->removeElement($referenciaFamiliar);
    }

    /**
     * Get referenciaFamiliar
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReferenciaFamiliar()
    {
        return $this->referenciaFamiliar;
    }

    /**
     * Add referenciaVecinal
     *
     * @param \EstudioBundle\Entity\referenciaVecinal $referenciaVecinal
     *
     * @return Referencia_Personal
     */
    public function addReferenciaVecinal(\EstudioBundle\Entity\referenciaVecinal $referenciaVecinal)
    {
        $this->referenciaVecinal[] = $referenciaVecinal;

        return $this;
    }

    /**
     * Remove referenciaVecinal
     *
     * @param \EstudioBundle\Entity\referenciaVecinal $referenciaVecinal
     */
    public function removeReferenciaVecinal(\EstudioBundle\Entity\referenciaVecinal $referenciaVecinal)
    {
        $this->referenciaVecinal->removeElement($referenciaVecinal);
    }

    /**
     * Get referenciaVecinal
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReferenciaVecinal()
    {
        return $this->referenciaVecinal;
    }

    /**
     * Add saludHigiene
     *
     * @param \EstudioBundle\Entity\saludHigiene $saludHigiene
     *
     * @return Referencia_Personal
     */
    public function addSaludHigiene(\EstudioBundle\Entity\saludHigiene $saludHigiene)
    {
        $this->saludHigiene[] = $saludHigiene;

        return $this;
    }

    /**
     * Remove saludHigiene
     *
     * @param \EstudioBundle\Entity\saludHigiene $saludHigiene
     */
    public function removeSaludHigiene(\EstudioBundle\Entity\saludHigiene $saludHigiene)
    {
        $this->saludHigiene->removeElement($saludHigiene);
    }

    /**
     * Get saludHigiene
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSaludHigiene()
    {
        return $this->saludHigiene;
    }

    /**
     * Add pasatiempo
     *
     * @param \EstudioBundle\Entity\pasatiempos $pasatiempo
     *
     * @return Referencia_Personal
     */
    public function addPasatiempo(\EstudioBundle\Entity\pasatiempos $pasatiempo)
    {
        $this->pasatiempos[] = $pasatiempo;

        return $this;
    }

    /**
     * Remove pasatiempo
     *
     * @param \EstudioBundle\Entity\pasatiempos $pasatiempo
     */
    public function removePasatiempo(\EstudioBundle\Entity\pasatiempos $pasatiempo)
    {
        $this->pasatiempos->removeElement($pasatiempo);
    }

    /**
     * Get pasatiempos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPasatiempos()
    {
        return $this->pasatiempos;
    }
}
