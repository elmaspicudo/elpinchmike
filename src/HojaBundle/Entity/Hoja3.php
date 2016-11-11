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
    private $DependientesEconomicos;

    /**
     * @var string
     */
    private $personasDomicilio;

    /**
     * @var string
     */
    private $marcoFamiliar;

    /**
     * @var integer
     */
    private $MarcoFamiliar_4;

   
    /**
     * Set DependientesEconomicos
     *
     * @param string $DependientesEconomicos
     *
     * @return MarcoFamiliar
     */
    public function setMarcoFamiliar1($DependientesEconomicos)
    {
        $this->DependientesEconomicos = $DependientesEconomicos;

        return $this;
    }

    /**
     * Get DependientesEconomicos
     *
     * @return string
     */
    public function getMarcoFamiliar1()
    {
        return $this->DependientesEconomicos;
    }



    /**
     * Set personasDomicilio
     *
     * @param string $personasDomicilio
     *
     * @return MarcoFamiliar
     */
    public function setMarcoFamiliar2($personasDomicilio)
    {
        $this->personasDomicilio = $personasDomicilio;

        return $this;
    }

    /**
     * Get personasDomicilio
     *
     * @return string
     */
    public function getMarcoFamiliar2()
    {
        return $this->personasDomicilio;
    }

    /**
     * Set marcoFamiliar
     *
     * @param string $marcoFamiliar
     *
     * @return MarcoFamiliar
     */
    public function setMarcoFamiliar3($marcoFamiliar)
    {
        $this->marcoFamiliar = $marcoFamiliar;

        return $this;
    }

    /**
     * Get marcoFamiliar
     *
     * @return string
     */
    public function getMarcoFamiliar3()
    {
        return $this->marcoFamiliar;
    }

    /**
     * Set MarcoFamiliar_4
     *
     * @param string $MarcoFamiliar_4
     *
     * @return MarcoFamiliar
     */
    public function setMarcoFamiliar4($MarcoFamiliar_4)
    {
        $this->MarcoFamiliar_4 = $MarcoFamiliar_4;

        return $this;
    }

    /**
     * Get MarcoFamiliar_4
     *
     * @return string
     */
    public function getMarcoFamiliar4()
    {
        return $this->MarcoFamiliar_4;
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
     * @var string
     */
    private $observaciones;


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
     * @var \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud
     */
    private $solicitud;


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
     * @param \EstudioBundle\Entity\FamiliaresCercanos $familiaresCercano
     *
     * @return MarcoFamiliar
     */
    public function addFamiliaresCercano(\EstudioBundle\Entity\FamiliaresCercanos $familiaresCercano)
    {
        $this->FamiliaresCercanos[] = $familiaresCercano;

        return $this;
    }

    /**
     * Remove familiaresCercano
     *
     * @param \EstudioBundle\Entity\FamiliaresCercanos $familiaresCercano
     */
    public function removeFamiliaresCercano(\EstudioBundle\Entity\FamiliaresCercanos $familiaresCercano)
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
