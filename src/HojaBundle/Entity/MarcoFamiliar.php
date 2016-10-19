<?php

namespace HojaBundle\Entity;

/**
 * MarcoFamiliar
 */
class MarcoFamiliar
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
    private $Familiares;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $DependientesEconomicos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $FamiliaresCercanos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Familiares = new \Doctrine\Common\Collections\ArrayCollection();
        $this->DependientesEconomicos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->FamiliaresCercanos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return MarcoFamiliar
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
     * @return MarcoFamiliar
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
     * Add familiare
     *
     * @param \EstudioBundle\Entity\Familiares $familiare
     *
     * @return MarcoFamiliar
     */
    public function addFamiliare(\EstudioBundle\Entity\Familiares $familiare)
    {
        $this->Familiares[] = $familiare;

        return $this;
    }

    /**
     * Remove familiare
     *
     * @param \EstudioBundle\Entity\Familiares $familiare
     */
    public function removeFamiliare(\EstudioBundle\Entity\Familiares $familiare)
    {
        $this->Familiares->removeElement($familiare);
    }

    /**
     * Get familiares
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFamiliares()
    {
        return $this->Familiares;
    }

    /**
     * Add dependientesEconomico
     *
     * @param \EstudioBundle\Entity\DependientesEconomicos $dependientesEconomico
     *
     * @return MarcoFamiliar
     */
    public function addDependientesEconomico(\EstudioBundle\Entity\DependientesEconomicos $dependientesEconomico)
    {
        $this->DependientesEconomicos[] = $dependientesEconomico;

        return $this;
    }

    /**
     * Remove dependientesEconomico
     *
     * @param \EstudioBundle\Entity\DependientesEconomicos $dependientesEconomico
     */
    public function removeDependientesEconomico(\EstudioBundle\Entity\DependientesEconomicos $dependientesEconomico)
    {
        $this->DependientesEconomicos->removeElement($dependientesEconomico);
    }

    /**
     * Get dependientesEconomicos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDependientesEconomicos()
    {
        return $this->DependientesEconomicos;
    }

    /**
     * Add familiaresCercano
     *
     * @param \EstudioBundle\Entity\FCercanos $familiaresCercano
     *
     * @return MarcoFamiliar
     */
    public function addFamiliaresCercano(\EstudioBundle\Entity\FCercanos $familiaresCercano)
    {
        $this->FamiliaresCercanos[] = $familiaresCercano;

        return $this;
    }

    /**
     * Remove familiaresCercano
     *
     * @param \EstudioBundle\Entity\FCercanos $familiaresCercano
     */
    public function removeFamiliaresCercano(\EstudioBundle\Entity\FCercanos $familiaresCercano)
    {
        $this->FamiliaresCercanos->removeElement($familiaresCercano);
    }

    /**
     * Get familiaresCercanos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFamiliaresCercanos()
    {
        return $this->FamiliaresCercanos;
    }
}