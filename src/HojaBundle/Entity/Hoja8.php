<?php

namespace HojaBundle\Entity;

/**
 * Hoja8
 */
class Hoja8
{
    /**
     * @var integer
     */
    private $id;
    private $hoja8_1;
    private $hoja8_2;


    /**
     * Set hoja8_1
     *
     * @param string $hoja8_1
     *
     * @return Hoja81     */
    public function setHoja81($hoja8_1)
    {
        $this->hoja8_1 = $hoja8_1;

        return $this;
    }

    /**
     * Get hoja8_1
     *
     * @return string
     */
    public function getHoja81()
    {
        return $this->hoja8_1;
    }


    /**
     * Set hoja8_2
     *
     * @param string $hoja8_2
     *
     * @return Hoja82     */
    public function setHoja82($hoja8_2)
    {
        $this->hoja8_2 = $hoja8_2;

        return $this;
    }

    /**
     * Get hoja8_2
     *
     * @return string
     */
    public function getHoja82()
    {
        return $this->hoja8_2;
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
