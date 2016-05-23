<?php

namespace datosBundle\Entity;

/**
 * documentos
 */
class documentos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $noSeguridadSocial;

    /**
     * @var string
     */
    private $curp;

    /**
     * @var string
     */
    private $compDomiciliario;

    /**
     * @var string
     */
    private $credencialINE;

    /**
     * @var string
     */
    private $rfc;

    /**
     * @var string
     */
    private $aNonbreDe;

    /**
     * @var string
     */
    private $cartasLaborales;

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
     * Set noSeguridadSocial
     *
     * @param integer $noSeguridadSocial
     *
     * @return documentos
     */
    public function setNoSeguridadSocial($noSeguridadSocial)
    {
        $this->noSeguridadSocial = $noSeguridadSocial;

        return $this;
    }

    /**
     * Get noSeguridadSocial
     *
     * @return integer
     */
    public function getNoSeguridadSocial()
    {
        return $this->noSeguridadSocial;
    }

    /**
     * Set curp
     *
     * @param string $curp
     *
     * @return documentos
     */
    public function setCurp($curp)
    {
        $this->curp = $curp;

        return $this;
    }

    /**
     * Get curp
     *
     * @return string
     */
    public function getCurp()
    {
        return $this->curp;
    }

    /**
     * Set compDomiciliario
     *
     * @param string $compDomiciliario
     *
     * @return documentos
     */
    public function setCompDomiciliario($compDomiciliario)
    {
        $this->compDomiciliario = $compDomiciliario;

        return $this;
    }

    /**
     * Get compDomiciliario
     *
     * @return string
     */
    public function getCompDomiciliario()
    {
        return $this->compDomiciliario;
    }

    /**
     * Set credencialINE
     *
     * @param string $credencialINE
     *
     * @return documentos
     */
    public function setCredencialINE($credencialINE)
    {
        $this->credencialINE = $credencialINE;

        return $this;
    }

    /**
     * Get credencialINE
     *
     * @return string
     */
    public function getCredencialINE()
    {
        return $this->credencialINE;
    }

    /**
     * Set rfc
     *
     * @param string $rfc
     *
     * @return documentos
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * Get rfc
     *
     * @return string
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set aNonbreDe
     *
     * @param string $aNonbreDe
     *
     * @return documentos
     */
    public function setANonbreDe($aNonbreDe)
    {
        $this->aNonbreDe = $aNonbreDe;

        return $this;
    }

    /**
     * Get aNonbreDe
     *
     * @return string
     */
    public function getANonbreDe()
    {
        return $this->aNonbreDe;
    }

    /**
     * Set cartasLaborales
     *
     * @param string $cartasLaborales
     *
     * @return documentos
     */
    public function setCartasLaborales($cartasLaborales)
    {
        $this->cartasLaborales = $cartasLaborales;

        return $this;
    }

    /**
     * Get cartasLaborales
     *
     * @return string
     */
    public function getCartasLaborales()
    {
        return $this->cartasLaborales;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return documentos
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
}
