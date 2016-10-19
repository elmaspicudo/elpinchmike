<?php

namespace HojaBundle\Entity;

/**
 * Hoja3
 */
class Hoja3
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $hoja3_1;

    /**
     * @var string
     */
    private $hoja3_2;

    /**
     * @var string
     */
    private $hoja3_3;

    /**
     * @var integer
     */
    private $hoja3_4;

   
    /**
     * Set hoja3_1
     *
     * @param string $hoja3_1
     *
     * @return Hoja3
     */
    public function setHoja31($hoja3_1)
    {
        $this->hoja3_1 = $hoja3_1;

        return $this;
    }

    /**
     * Get hoja3_1
     *
     * @return string
     */
    public function getHoja31()
    {
        return $this->hoja3_1;
    }



    /**
     * Set hoja3_2
     *
     * @param string $hoja3_2
     *
     * @return Hoja3
     */
    public function setHoja32($hoja3_2)
    {
        $this->hoja3_2 = $hoja3_2;

        return $this;
    }

    /**
     * Get hoja3_2
     *
     * @return string
     */
    public function getHoja32()
    {
        return $this->hoja3_2;
    }

    /**
     * Set hoja3_3
     *
     * @param string $hoja3_3
     *
     * @return Hoja3
     */
    public function setHoja33($hoja3_3)
    {
        $this->hoja3_3 = $hoja3_3;

        return $this;
    }

    /**
     * Get hoja3_3
     *
     * @return string
     */
    public function getHoja33()
    {
        return $this->hoja3_3;
    }

    /**
     * Set hoja3_4
     *
     * @param string $hoja3_4
     *
     * @return Hoja3
     */
    public function setHoja34($hoja3_4)
    {
        $this->hoja3_4 = $hoja3_4;

        return $this;
    }

    /**
     * Get hoja3_4
     *
     * @return string
     */
    public function getHoja34()
    {
        return $this->hoja3_4;
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
     * @return Hoja3
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
     * @return Hoja3
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
     * @return Hoja3
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
     * @return Hoja3
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
     * @return Hoja3
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
