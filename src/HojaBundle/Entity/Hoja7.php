<?php

namespace HojaBundle\Entity;

/**
 * Hoja7
 */
class Hoja7
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $observaciones;
    private $hoja7_1;
    private $hoja7_2;
    private $hoja7_3;
    private $hoja7_4;


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
     * @return Hoja7
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
     * Set hoja7_1
     *
     * @param string $hoja7_1
     *
     * @return Hoja71     */
    public function setHoja71($hoja7_1)
    {
        $this->hoja7_1 = $hoja7_1;

        return $this;
    }

    /**
     * Get hoja7_1
     *
     * @return string
     */
    public function getHoja71()
    {
        return $this->hoja7_1;
    }
    /**
     * Set hoja7_2
     *
     * @param string $hoja7_2
     *
     * @return Hoja72     */
    public function setHoja72($hoja7_2)
    {
        $this->hoja7_2 = $hoja7_2;

        return $this;
    }

    /**
     * Get hoja7_2
     *
     * @return string
     */
    public function getHoja72()
    {
        return $this->hoja7_2;
    }

    /**
     * Set hoja7_3
     *
     * @param string $hoja7_3
     *
     * @return Hoja73     */
    public function setHoja73($hoja7_3)
    {
        $this->hoja7_3 = $hoja7_3;

        return $this;
    }

    /**
     * Get hoja7_3
     *
     * @return string
     */
    public function getHoja73()
    {
        return $this->hoja7_3;
    }

    /**
     * Set hoja7_4
     *
     * @param string $hoja7_4
     *
     * @return Hoja74     */
    public function setHoja74($hoja7_4)
    {
        $this->hoja7_4 = $hoja7_4;

        return $this;
    }

    /**
     * Get hoja7_4
     *
     * @return string
     */
    public function getHoja74()
    {
        return $this->hoja7_4;
    }
}
