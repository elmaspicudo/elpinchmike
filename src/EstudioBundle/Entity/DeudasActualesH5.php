<?php

namespace EstudioBundle\Entity;

/**
 * DeudasActualesH5
 */
class DeudasActualesH5
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $banco;

    /**
     * @var float
     */
    private $limiteCredito;

    /**
     * @var float
     */
    private $antiguedad;

    /**
     * @var float
     */
    private $pagoMensual;


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
     * Set banco
     *
     * @param string $banco
     *
     * @return DeudasActualesH5
     */
    public function setBanco($banco)
    {
        $this->banco = $banco;

        return $this;
    }

    /**
     * Get banco
     *
     * @return string
     */
    public function getBanco()
    {
        return $this->banco;
    }

    /**
     * Set limiteCredito
     *
     * @param float $limiteCredito
     *
     * @return DeudasActualesH5
     */
    public function setLimiteCredito($limiteCredito)
    {
        $this->limiteCredito = $limiteCredito;

        return $this;
    }

    /**
     * Get limiteCredito
     *
     * @return float
     */
    public function getLimiteCredito()
    {
        return $this->limiteCredito;
    }

    /**
     * Set antiguedad
     *
     * @param float $antiguedad
     *
     * @return DeudasActualesH5
     */
    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }

    /**
     * Get antiguedad
     *
     * @return float
     */
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    /**
     * Set pagoMensual
     *
     * @param float $pagoMensual
     *
     * @return DeudasActualesH5
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
}

