<?php

namespace EstudioBundle\Entity;

/**
 * otrosServicios
 */
class otrosServicios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $cablemas;

    /**
     * @var string
     */
    private $mastv;

    /**
     * @var string
     */
    private $antenaParabolica;

    /**
     * @var string
     */
    private $sky;

    /**
     * @var string
     */
    private $otros;

    /**
     * @var string
     */
    private $domestico;

    /**
     * @var string
     */
    private $jardinero;

    /**
     * @var string
     */
    private $chofer;

    /**
     * @var string
     */
    private $vigilancia;


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
     * Set cablemas
     *
     * @param string $cablemas
     *
     * @return otrosServicios
     */
    public function setCablemas($cablemas)
    {
        $this->cablemas = $cablemas;

        return $this;
    }

    /**
     * Get cablemas
     *
     * @return string
     */
    public function getCablemas()
    {
        return $this->cablemas;
    }

    /**
     * Set mastv
     *
     * @param string $mastv
     *
     * @return otrosServicios
     */
    public function setMastv($mastv)
    {
        $this->mastv = $mastv;

        return $this;
    }

    /**
     * Get mastv
     *
     * @return string
     */
    public function getMastv()
    {
        return $this->mastv;
    }

    /**
     * Set antenaParabolica
     *
     * @param string $antenaParabolica
     *
     * @return otrosServicios
     */
    public function setAntenaParabolica($antenaParabolica)
    {
        $this->antenaParabolica = $antenaParabolica;

        return $this;
    }

    /**
     * Get antenaParabolica
     *
     * @return string
     */
    public function getAntenaParabolica()
    {
        return $this->antenaParabolica;
    }

    /**
     * Set sky
     *
     * @param string $sky
     *
     * @return otrosServicios
     */
    public function setSky($sky)
    {
        $this->sky = $sky;

        return $this;
    }

    /**
     * Get sky
     *
     * @return string
     */
    public function getSky()
    {
        return $this->sky;
    }

    /**
     * Set otros
     *
     * @param string $otros
     *
     * @return otrosServicios
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return string
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set domestico
     *
     * @param string $domestico
     *
     * @return otrosServicios
     */
    public function setDomestico($domestico)
    {
        $this->domestico = $domestico;

        return $this;
    }

    /**
     * Get domestico
     *
     * @return string
     */
    public function getDomestico()
    {
        return $this->domestico;
    }

    /**
     * Set jardinero
     *
     * @param string $jardinero
     *
     * @return otrosServicios
     */
    public function setJardinero($jardinero)
    {
        $this->jardinero = $jardinero;

        return $this;
    }

    /**
     * Get jardinero
     *
     * @return string
     */
    public function getJardinero()
    {
        return $this->jardinero;
    }

    /**
     * Set chofer
     *
     * @param string $chofer
     *
     * @return otrosServicios
     */
    public function setChofer($chofer)
    {
        $this->chofer = $chofer;

        return $this;
    }

    /**
     * Get chofer
     *
     * @return string
     */
    public function getChofer()
    {
        return $this->chofer;
    }

    /**
     * Set vigilancia
     *
     * @param string $vigilancia
     *
     * @return otrosServicios
     */
    public function setVigilancia($vigilancia)
    {
        $this->vigilancia = $vigilancia;

        return $this;
    }

    /**
     * Get vigilancia
     *
     * @return string
     */
    public function getVigilancia()
    {
        return $this->vigilancia;
    }
}
