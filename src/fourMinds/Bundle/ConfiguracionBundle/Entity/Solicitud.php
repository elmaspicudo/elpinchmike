<?php

namespace fourMinds\Bundle\ConfiguracionBundle\Entity;

/**
 * Solicitud
 */
class Solicitud
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $telefonos;

    /**
     * @var string
     */
    private $puesto;

    /**
     * @var integer
     */
    private $formato;

    /**
     * @var \DateTime
     */
    private $fecha;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Solicitud
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Solicitud
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefonos
     *
     * @param string $telefonos
     *
     * @return Solicitud
     */
    public function setTelefonos($telefonos)
    {
        $this->telefonos = $telefonos;

        return $this;
    }

    /**
     * Get telefonos
     *
     * @return string
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * Set puesto
     *
     * @param string $puesto
     *
     * @return Solicitud
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;

        return $this;
    }

    /**
     * Get puesto
     *
     * @return string
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Set formato
     *
     * @param integer $formato
     *
     * @return Solicitud
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;

        return $this;
    }

    /**
     * Get formato
     *
     * @return integer
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Solicitud
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    /**
     * @var \fourMinds\Bundle\ConfiguracionBundle\Entity\Cliente
     */
    private $cliente;

    /**
     * @var \fourMinds\Bundle\UserBundle\Entity\User
     */
    private $visitador;


    /**
     * Set cliente
     *
     * @param \fourMinds\Bundle\ConfiguracionBundle\Entity\Cliente $cliente
     *
     * @return Solicitud
     */
    public function setCliente(\fourMinds\Bundle\ConfiguracionBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \fourMinds\Bundle\ConfiguracionBundle\Entity\Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set visitador
     *
     * @param \fourMinds\Bundle\UserBundle\Entity\User $visitador
     *
     * @return Solicitud
     */
    public function setVisitador(\fourMinds\Bundle\UserBundle\Entity\User $visitador = null)
    {
        $this->visitador = $visitador;

        return $this;
    }

    /**
     * Get visitador
     *
     * @return \fourMinds\Bundle\UserBundle\Entity\User
     */
    public function getVisitador()
    {
        return $this->visitador;
    }
    /**
     * @var integer
     */
    private $estatus;


    /**
     * Set estatus
     *
     * @param integer $estatus
     *
     * @return Solicitud
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return integer
     */
    public function getEstatus()
    {
        return $this->estatus;
    }
}
