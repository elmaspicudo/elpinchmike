<?php

namespace fourMinds\Bundle\ConfiguracionBundle\Entity;

/**
 * horasLaborales
 */
class horasLaborales
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $inicio;

    /**
     * @var \DateTime
     */
    private $fin;


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
     * Set inicio
     *
     * @param \DateTime $inicio
     *
     * @return horasLaborales
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return horasLaborales
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }
}
