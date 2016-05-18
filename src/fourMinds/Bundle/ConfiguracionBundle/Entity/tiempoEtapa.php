<?php

namespace fourMinds\Bundle\ConfiguracionBundle\Entity;

/**
 * tiempoEtapa
 */
class tiempoEtapa
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $etapa;

    /**
     * @var integer
     */
    private $tiempo;


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
     * Set etapa
     *
     * @param string $etapa
     *
     * @return tiempoEtapa
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * Get etapa
     *
     * @return string
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * Set tiempo
     *
     * @param integer $tiempo
     *
     * @return tiempoEtapa
     */
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;

        return $this;
    }

    /**
     * Get tiempo
     *
     * @return integer
     */
    public function getTiempo()
    {
        return $this->tiempo;
    }
}
