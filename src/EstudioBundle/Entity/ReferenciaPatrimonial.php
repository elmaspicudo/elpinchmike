<?php

namespace EstudioBundle\Entity;

/**
 * ReferenciaPatrimonial
 */
class ReferenciaPatrimonial
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
     * @return ReferenciaPatrimonial
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
     * @return ReferenciaPatrimonial
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
     * @return ReferenciaPatrimonial
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
     * @return ReferenciaPatrimonial
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

