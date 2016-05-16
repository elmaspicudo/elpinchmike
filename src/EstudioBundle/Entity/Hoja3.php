<?php

namespace EstudioBundle\Entity;

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
    private $dependiente;

    /**
     * @var string
     */
    private $esposa;

    /**
     * @var string
     */
    private $padres;

    /**
     * @var integer
     */
    private $habitantes;

   
    /**
     * Set dependiente
     *
     * @param string $dependiente
     *
     * @return Hoja3
     */
    public function setDependiente($dependiente)
    {
        $this->dependiente = $dependiente;

        return $this;
    }

    /**
     * Get dependiente
     *
     * @return string
     */
    public function getDependiente()
    {
        return $this->dependiente;
    }



    /**
     * Set esposa
     *
     * @param string $esposa
     *
     * @return Hoja3
     */
    public function setEsposa($esposa)
    {
        $this->esposa = $esposa;

        return $this;
    }

    /**
     * Get esposa
     *
     * @return string
     */
    public function getEsposa()
    {
        return $this->esposa;
    }

    /**
     * Set padres
     *
     * @param string $padres
     *
     * @return Hoja3
     */
    public function setPadres($padres)
    {
        $this->padres = $padres;

        return $this;
    }

    /**
     * Get padres
     *
     * @return string
     */
    public function getPadres()
    {
        return $this->padres;
    }

    /**
     * Set habitantes
     *
     * @param string $habitantes
     *
     * @return Hoja3
     */
    public function setHabitantes($habitantes)
    {
        $this->habitantes = $habitantes;

        return $this;
    }

    /**
     * Get habitantes
     *
     * @return string
     */
    public function getHabitantes()
    {
        return $this->habitantes;
    }

}

