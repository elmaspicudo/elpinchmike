<?php

namespace HojaBundle\Entity;

/**
 * Hoja3
 */
class Hoja3
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $hoja3_1;

    /**
     * @var string
     */
    private $hoja3_2;

    /**
     * @var string
     */
    private $hoja3_3;

    /**
     * @var integer
     */
    private $hoja3_4;

   
    /**
     * Set hoja3_1
     *
     * @param string $hoja3_1
     *
     * @return Hoja3
     */
    public function setHoja31($hoja3_1)
    {
        $this->hoja3_1 = $hoja3_1;

        return $this;
    }

    /**
     * Get hoja3_1
     *
     * @return string
     */
    public function getHoja31()
    {
        return $this->hoja3_1;
    }



    /**
     * Set hoja3_2
     *
     * @param string $hoja3_2
     *
     * @return Hoja3
     */
    public function setHoja32($hoja3_2)
    {
        $this->hoja3_2 = $hoja3_2;

        return $this;
    }

    /**
     * Get hoja3_2
     *
     * @return string
     */
    public function getHoja32()
    {
        return $this->hoja3_2;
    }

    /**
     * Set hoja3_3
     *
     * @param string $hoja3_3
     *
     * @return Hoja3
     */
    public function setHoja33($hoja3_3)
    {
        $this->hoja3_3 = $hoja3_3;

        return $this;
    }

    /**
     * Get hoja3_3
     *
     * @return string
     */
    public function getHoja33()
    {
        return $this->hoja3_3;
    }

    /**
     * Set hoja3_4
     *
     * @param string $hoja3_4
     *
     * @return Hoja3
     */
    public function setHoja34($hoja3_4)
    {
        $this->hoja3_4 = $hoja3_4;

        return $this;
    }

    /**
     * Get hoja3_4
     *
     * @return string
     */
    public function getHoja34()
    {
        return $this->hoja3_4;
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}