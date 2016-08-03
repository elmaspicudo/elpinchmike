<?php

namespace datosBundle\Entity;

/**
 * trayectoriaEsco
 */
class trayectoriaEsco
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $secundaria;

    /**
     * @var string
     */
    private $preparatoriaOequivalente;

    /**
     * @var string
     */
    private $licenciatura;

    /**
     * @var string
     */
    private $diplomado;

    /**
     * @var string
     */
    private $maestria;

    /**
     * @var string
     */
    private $otros;

    /**
     * @var string
     */
    private $aniosCursado;

    /**
     * @var string
     */
    private $comprobante;

    /**
     * @var string
     */
    private $observacion;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $ocupacion;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $tiempoDeConocerlo;

    /**
     * @var string
     */
    private $comentarios;

    /**
     * @var string
     */
    private $observaciones;


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
     * Set secundaria
     *
     * @param string $secundaria
     *
     * @return trayectoriaEsco
     */
    public function setSecundaria($secundaria)
    {
        $this->secundaria = $secundaria;

        return $this;
    }

    /**
     * Get secundaria
     *
     * @return string
     */
    public function getSecundaria()
    {
        return $this->secundaria;
    }

    /**
     * Set preparatoriaOequivalente
     *
     * @param string $preparatoriaOequivalente
     *
     * @return trayectoriaEsco
     */
    public function setPreparatoriaOequivalente($preparatoriaOequivalente)
    {
        $this->preparatoriaOequivalente = $preparatoriaOequivalente;

        return $this;
    }

    /**
     * Get preparatoriaOequivalente
     *
     * @return string
     */
    public function getPreparatoriaOequivalente()
    {
        return $this->preparatoriaOequivalente;
    }

    /**
     * Set licenciatura
     *
     * @param string $licenciatura
     *
     * @return trayectoriaEsco
     */
    public function setLicenciatura($licenciatura)
    {
        $this->licenciatura = $licenciatura;

        return $this;
    }

    /**
     * Get licenciatura
     *
     * @return string
     */
    public function getLicenciatura()
    {
        return $this->licenciatura;
    }

    /**
     * Set diplomado
     *
     * @param string $diplomado
     *
     * @return trayectoriaEsco
     */
    public function setDiplomado($diplomado)
    {
        $this->diplomado = $diplomado;

        return $this;
    }

    /**
     * Get diplomado
     *
     * @return string
     */
    public function getDiplomado()
    {
        return $this->diplomado;
    }

    /**
     * Set maestria
     *
     * @param string $maestria
     *
     * @return trayectoriaEsco
     */
    public function setMaestria($maestria)
    {
        $this->maestria = $maestria;

        return $this;
    }

    /**
     * Get maestria
     *
     * @return string
     */
    public function getMaestria()
    {
        return $this->maestria;
    }

    /**
     * Set otros
     *
     * @param string $otros
     *
     * @return trayectoriaEsco
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return string
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set aniosCursado
     *
     * @param string $aniosCursado
     *
     * @return trayectoriaEsco
     */
    public function setAniosCursado($aniosCursado)
    {
        $this->aniosCursado = $aniosCursado;

        return $this;
    }

    /**
     * Get aniosCursado
     *
     * @return string
     */
    public function getAniosCursado()
    {
        return $this->aniosCursado;
    }

    /**
     * Set comprobante
     *
     * @param string $comprobante
     *
     * @return trayectoriaEsco
     */
    public function setComprobante($comprobante)
    {
        $this->comprobante = $comprobante;

        return $this;
    }

    /**
     * Get comprobante
     *
     * @return string
     */
    public function getComprobante()
    {
        return $this->comprobante;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return trayectoriaEsco
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return trayectoriaEsco
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
     * Set ocupacion
     *
     * @param string $ocupacion
     *
     * @return trayectoriaEsco
     */
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;

        return $this;
    }

    /**
     * Get ocupacion
     *
     * @return string
     */
    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return trayectoriaEsco
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set tiempoDeConocerlo
     *
     * @param string $tiempoDeConocerlo
     *
     * @return trayectoriaEsco
     */
    public function setTiempoDeConocerlo($tiempoDeConocerlo)
    {
        $this->tiempoDeConocerlo = $tiempoDeConocerlo;

        return $this;
    }

    /**
     * Get tiempoDeConocerlo
     *
     * @return string
     */
    public function getTiempoDeConocerlo()
    {
        return $this->tiempoDeConocerlo;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     *
     * @return trayectoriaEsco
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

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return trayectoriaEsco
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
     * @var \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud
     */
    private $solicitud;


    /**
     * Set solicitud
     *
     * @param \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud $solicitud
     *
     * @return trayectoriaEsco
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
}
