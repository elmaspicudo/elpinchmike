<?php

namespace HojaBundle\Entity;

/**
 * Hoja6
 */
class Hoja6
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $observaciones;
    private $hoja6_1;



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
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Hoja6
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
     * Set hoja6_1
     *
     * @param string $hoja6_1
     *
     * @return Hoja61     */
    public function setHoja61($hoja6_1)
    {
        $this->hoja6_1 = $hoja6_1;

        return $this;
    }

    /**
     * Get hoja6_1
     *
     * @return string
     */
    public function getHoja61()
    {
        return $this->hoja6_1;
    }
}
