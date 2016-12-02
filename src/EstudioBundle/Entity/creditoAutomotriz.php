<?php

namespace EstudioBundle\Entity;

/**
 * creditoAutomotriz
 */
class creditoAutomotriz
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
    private $monto;

    /**
     * @var float
     */
    private $pagoMensual;

    /**
     * @var float
     */
    private $saldoActual;


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
     * @return creditoAutomotriz
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
     * Set monto
     *
     * @param float $monto
     *
     * @return creditoAutomotriz
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return float
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set pagoMensual
     *
     * @param float $pagoMensual
     *
     * @return creditoAutomotriz
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
     * Set saldoActual
     *
     * @param float $saldoActual
     *
     * @return creditoAutomotriz
     */
    public function setSaldoActual($saldoActual)
    {
        $this->saldoActual = $saldoActual;

        return $this;
    }

    /**
     * Get saldoActual
     *
     * @return float
     */
    public function getSaldoActual()
    {
        return $this->saldoActual;
    }
}
