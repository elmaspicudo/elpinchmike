<?php

namespace EstudioBundle\Entity;

/**
 * Hoja5_3
 */
class Hoja5_3
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
     * @return Hoja5_3
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
     * @return Hoja5_3
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
     * @return Hoja5_3
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
     * @return Hoja5_3
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
