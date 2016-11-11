<?php

namespace EstudioBundle\Entity;

/**
 * creditosPersonales
 */
class creditosPersonales
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $institucion;

    /**
     * @var float
     */
    private $montoCredito;

    /**
     * @var float
     */
    private $pagoMensual;

    /**
     * @var string
     */
    private $fonacot;

    /**
     * @var float
     */
    private $montoFonacot;

    /**
     * @var float
     */
    private $pagoFonacot;

    /**
     * @var string
     */
    private $infonavit;

    /**
     * @var float
     */
    private $montoInfonavit;

    /**
     * @var float
     */
    private $pagoInfonavit;

    /**
     * @var string
     */
    private $otros;

    /**
     * @var float
     */
    private $montoOotros;

    /**
     * @var float
     */
    private $pagoOtros;


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
     * Set institucion
     *
     * @param string $institucion
     *
     * @return creditosPersonales
     */
    public function setInstitucion($institucion)
    {
        $this->institucion = $institucion;

        return $this;
    }

    /**
     * Get institucion
     *
     * @return string
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * Set montoCredito
     *
     * @param float $montoCredito
     *
     * @return creditosPersonales
     */
    public function setMontoCredito($montoCredito)
    {
        $this->montoCredito = $montoCredito;

        return $this;
    }

    /**
     * Get montoCredito
     *
     * @return float
     */
    public function getMontoCredito()
    {
        return $this->montoCredito;
    }

    /**
     * Set pagoMensual
     *
     * @param float $pagoMensual
     *
     * @return creditosPersonales
     */
    public function setPagoMensual($pagoMensual)
    {
        $this->pagoMensual = $pagoMensual;

        return $this;
    }

    /**
     * Get pagoMensual
     *
     * @return float
     */
    public function getPagoMensual()
    {
        return $this->pagoMensual;
    }

    /**
     * Set fonacot
     *
     * @param string $fonacot
     *
     * @return creditosPersonales
     */
    public function setFonacot($fonacot)
    {
        $this->fonacot = $fonacot;

        return $this;
    }

    /**
     * Get fonacot
     *
     * @return string
     */
    public function getFonacot()
    {
        return $this->fonacot;
    }

    /**
     * Set montoFonacot
     *
     * @param float $montoFonacot
     *
     * @return creditosPersonales
     */
    public function setMontoFonacot($montoFonacot)
    {
        $this->montoFonacot = $montoFonacot;

        return $this;
    }

    /**
     * Get montoFonacot
     *
     * @return float
     */
    public function getMontoFonacot()
    {
        return $this->montoFonacot;
    }

    /**
     * Set pagoFonacot
     *
     * @param float $pagoFonacot
     *
     * @return creditosPersonales
     */
    public function setPagoFonacot($pagoFonacot)
    {
        $this->pagoFonacot = $pagoFonacot;

        return $this;
    }

    /**
     * Get pagoFonacot
     *
     * @return float
     */
    public function getPagoFonacot()
    {
        return $this->pagoFonacot;
    }

    /**
     * Set infonavit
     *
     * @param string $infonavit
     *
     * @return creditosPersonales
     */
    public function setInfonavit($infonavit)
    {
        $this->infonavit = $infonavit;

        return $this;
    }

    /**
     * Get infonavit
     *
     * @return string
     */
    public function getInfonavit()
    {
        return $this->infonavit;
    }

    /**
     * Set montoInfonavit
     *
     * @param float $montoInfonavit
     *
     * @return creditosPersonales
     */
    public function setMontoInfonavit($montoInfonavit)
    {
        $this->montoInfonavit = $montoInfonavit;

        return $this;
    }

    /**
     * Get montoInfonavit
     *
     * @return float
     */
    public function getMontoInfonavit()
    {
        return $this->montoInfonavit;
    }

    /**
     * Set pagoInfonavit
     *
     * @param float $pagoInfonavit
     *
     * @return creditosPersonales
     */
    public function setPagoInfonavit($pagoInfonavit)
    {
        $this->pagoInfonavit = $pagoInfonavit;

        return $this;
    }

    /**
     * Get pagoInfonavit
     *
     * @return float
     */
    public function getPagoInfonavit()
    {
        return $this->pagoInfonavit;
    }

    /**
     * Set otros
     *
     * @param string $otros
     *
     * @return creditosPersonales
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
     * Set montoOotros
     *
     * @param float $montoOotros
     *
     * @return creditosPersonales
     */
    public function setMontoOotros($montoOotros)
    {
        $this->montoOotros = $montoOotros;

        return $this;
    }

    /**
     * Get montoOotros
     *
     * @return float
     */
    public function getMontoOotros()
    {
        return $this->montoOotros;
    }

    /**
     * Set pagoOtros
     *
     * @param float $pagoOtros
     *
     * @return creditosPersonales
     */
    public function setPagoOtros($pagoOtros)
    {
        $this->pagoOtros = $pagoOtros;

        return $this;
    }

    /**
     * Get pagoOtros
     *
     * @return float
     */
    public function getPagoOtros()
    {
        return $this->pagoOtros;
    }
}
