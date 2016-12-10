<?php

namespace HojaBundle\Entity;

/**
 * Imagenes
 */
class Imagenes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud
     */
    private $solicitud;


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
     * Set solicitud
     *
     * @param \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud $solicitud
     *
     * @return Imagenes
     */
    public function setSolicitud(\fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud $solicitud = null)
    {
        $this->solicitud = $solicitud;

        return $this;
    }

    /**
     * Get solicitud
     *
     * @return \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud
     */
    public function getSolicitud()
    {
        return $this->solicitud;
    }
    /**
     * @var \EstudioBundle\Entity\imagen
     */
    private $fotografia_interior;

    /**
     * @var \EstudioBundle\Entity\imagen
     */
    private $fotografia_exterior;

    /**
     * @var \EstudioBundle\Entity\imagen
     */
    private $fotografia_ubicacion;


    /**
     * Set fotografiaInterior
     *
     * @param \EstudioBundle\Entity\imagen $fotografiaInterior
     *
     * @return Imagenes
     */
    public function setFotografiaInterior(\EstudioBundle\Entity\imagen $fotografiaInterior = null)
    {
        $this->fotografia_interior = $fotografiaInterior;

        return $this;
    }

    /**
     * Get fotografiaInterior
     *
     * @return \EstudioBundle\Entity\imagen
     */
    public function getFotografiaInterior()
    {
        return $this->fotografia_interior;
    }

    /**
     * Set fotografiaExterior
     *
     * @param \EstudioBundle\Entity\imagen $fotografiaExterior
     *
     * @return Imagenes
     */
    public function setFotografiaExterior(\EstudioBundle\Entity\imagen $fotografiaExterior = null)
    {
        $this->fotografia_exterior = $fotografiaExterior;

        return $this;
    }

    /**
     * Get fotografiaExterior
     *
     * @return \EstudioBundle\Entity\imagen
     */
    public function getFotografiaExterior()
    {
        return $this->fotografia_exterior;
    }

    /**
     * Set fotografiaUbicacion
     *
     * @param \EstudioBundle\Entity\imagen $fotografiaUbicacion
     *
     * @return Imagenes
     */
    public function setFotografiaUbicacion(\EstudioBundle\Entity\imagen $fotografiaUbicacion = null)
    {
        $this->fotografia_ubicacion = $fotografiaUbicacion;

        return $this;
    }

    /**
     * Get fotografiaUbicacion
     *
     * @return \EstudioBundle\Entity\imagen
     */
    public function getFotografiaUbicacion()
    {
        return $this->fotografia_ubicacion;
    }
}
