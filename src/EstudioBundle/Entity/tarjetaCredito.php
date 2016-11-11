<?php

namespace EstudioBundle\Entity;

/**
 * tarjetaCredito
 */
class tarjetaCredito
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
     * @var \DateTime
     */
    private $antiguedad;

    /**
     * @var \DateTime
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
     * @return tarjetaCredito
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
     * @return tarjetaCredito
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
     * @param \DateTime $antiguedad
     *
     * @return tarjetaCredito
     */
    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }

    /**
     * Get antiguedad
     *
     * @return \DateTime
     */
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    /**
     * Set pagoMensual
     *
     * @param \DateTime $pagoMensual
     *
     * @return tarjetaCredito
     */
    public function setPagoMensual($pagoMensual)
    {
        $this->pagoMensual = $pagoMensual;

        return $this;
    }

    /**
     * Get pagoMensual
     *
     * @return \DateTime
     */
    public function getPagoMensual()
    {
        return $this->pagoMensual;
    }
}

