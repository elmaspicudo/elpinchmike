<?php

namespace EstudioBundle\Entity;

/**
 * Hoja4_1
 */
class Hoja4_1
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $domicilio;

    /**
     * @var float
     */
    private $valorEstimado;

    /**
     * @var boolean
     */
    private $liquidado;


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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Hoja4_1
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return Hoja4_1
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set valorEstimado
     *
     * @param float $valorEstimado
     *
     * @return Hoja4_1
     */
    public function setValorEstimado($valorEstimado)
    {
        $this->valorEstimado = $valorEstimado;

        return $this;
    }

    /**
     * Get valorEstimado
     *
     * @return float
     */
    public function getValorEstimado()
    {
        return $this->valorEstimado;
    }

    /**
     * Set liquidado
     *
     * @param boolean $liquidado
     *
     * @return Hoja4_1
     */
    public function setLiquidado($liquidado)
    {
        $this->liquidado = $liquidado;

        return $this;
    }

    /**
     * Get liquidado
     *
     * @return boolean
     */
    public function getLiquidado()
    {
        return $this->liquidado;
    }
}
