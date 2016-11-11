<?php

namespace EstudioBundle\Entity;

/**
 * referenciaVecinal
 */
class referenciaVecinal
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
    private $tiempoConocer;

    /**
     * @var string
     */
    private $domicilio;

    /**
     * @var integer
     */
    private $telefono;

    /**
     * @var string
     */
    private $comentarios;


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
     * @return referenciaVecinal
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
     * Set tiempoConocer
     *
     * @param string $tiempoConocer
     *
     * @return referenciaVecinal
     */
    public function setTiempoConocer($tiempoConocer)
    {
        $this->tiempoConocer = $tiempoConocer;

        return $this;
    }

    /**
     * Get tiempoConocer
     *
     * @return string
     */
    public function getTiempoConocer()
    {
        return $this->tiempoConocer;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return referenciaVecinal
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
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return referenciaVecinal
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     *
     * @return referenciaVecinal
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }
}

