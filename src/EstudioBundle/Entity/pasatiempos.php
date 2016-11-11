<?php

namespace EstudioBundle\Entity;

/**
 * pasatiempos
 */
class pasatiempos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $proyectos;

    /**
     * @var string
     */
    private $interesTrabajo;

    /**
     * @var string
     */
    private $trabajoSatisfactorio;

    /**
     * @var string
     */
    private $tiempoLibre;

    /**
     * @var string
     */
    private $musica;

    /**
     * @var string
     */
    private $lee;

    /**
     * @var string
     */
    private $generoLectura;

    /**
     * @var string
     */
    private $autorFavorito;

    /**
     * @var string
     */
    private $asistenciaEventos;

    /**
     * @var string
     */
    private $tipoEventos;

    /**
     * @var string
     */
    private $asistenciaReuniones;

    /**
     * @var string
     */
    private $tipoReuniones;


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
     * Set proyectos
     *
     * @param string $proyectos
     *
     * @return pasatiempos
     */
    public function setProyectos($proyectos)
    {
        $this->proyectos = $proyectos;

        return $this;
    }

    /**
     * Get proyectos
     *
     * @return string
     */
    public function getProyectos()
    {
        return $this->proyectos;
    }

    /**
     * Set interesTrabajo
     *
     * @param string $interesTrabajo
     *
     * @return pasatiempos
     */
    public function setInteresTrabajo($interesTrabajo)
    {
        $this->interesTrabajo = $interesTrabajo;

        return $this;
    }

    /**
     * Get interesTrabajo
     *
     * @return string
     */
    public function getInteresTrabajo()
    {
        return $this->interesTrabajo;
    }

    /**
     * Set trabajoSatisfactorio
     *
     * @param string $trabajoSatisfactorio
     *
     * @return pasatiempos
     */
    public function setTrabajoSatisfactorio($trabajoSatisfactorio)
    {
        $this->trabajoSatisfactorio = $trabajoSatisfactorio;

        return $this;
    }

    /**
     * Get trabajoSatisfactorio
     *
     * @return string
     */
    public function getTrabajoSatisfactorio()
    {
        return $this->trabajoSatisfactorio;
    }

    /**
     * Set tiempoLibre
     *
     * @param string $tiempoLibre
     *
     * @return pasatiempos
     */
    public function setTiempoLibre($tiempoLibre)
    {
        $this->tiempoLibre = $tiempoLibre;

        return $this;
    }

    /**
     * Get tiempoLibre
     *
     * @return string
     */
    public function getTiempoLibre()
    {
        return $this->tiempoLibre;
    }

    /**
     * Set musica
     *
     * @param string $musica
     *
     * @return pasatiempos
     */
    public function setMusica($musica)
    {
        $this->musica = $musica;

        return $this;
    }

    /**
     * Get musica
     *
     * @return string
     */
    public function getMusica()
    {
        return $this->musica;
    }

    /**
     * Set lee
     *
     * @param string $lee
     *
     * @return pasatiempos
     */
    public function setLee($lee)
    {
        $this->lee = $lee;

        return $this;
    }

    /**
     * Get lee
     *
     * @return string
     */
    public function getLee()
    {
        return $this->lee;
    }

    /**
     * Set generoLectura
     *
     * @param string $generoLectura
     *
     * @return pasatiempos
     */
    public function setGeneroLectura($generoLectura)
    {
        $this->generoLectura = $generoLectura;

        return $this;
    }

    /**
     * Get generoLectura
     *
     * @return string
     */
    public function getGeneroLectura()
    {
        return $this->generoLectura;
    }

    /**
     * Set autorFavorito
     *
     * @param string $autorFavorito
     *
     * @return pasatiempos
     */
    public function setAutorFavorito($autorFavorito)
    {
        $this->autorFavorito = $autorFavorito;

        return $this;
    }

    /**
     * Get autorFavorito
     *
     * @return string
     */
    public function getAutorFavorito()
    {
        return $this->autorFavorito;
    }

    /**
     * Set asistenciaEventos
     *
     * @param string $asistenciaEventos
     *
     * @return pasatiempos
     */
    public function setAsistenciaEventos($asistenciaEventos)
    {
        $this->asistenciaEventos = $asistenciaEventos;

        return $this;
    }

    /**
     * Get asistenciaEventos
     *
     * @return string
     */
    public function getAsistenciaEventos()
    {
        return $this->asistenciaEventos;
    }

    /**
     * Set tipoEventos
     *
     * @param string $tipoEventos
     *
     * @return pasatiempos
     */
    public function setTipoEventos($tipoEventos)
    {
        $this->tipoEventos = $tipoEventos;

        return $this;
    }

    /**
     * Get tipoEventos
     *
     * @return string
     */
    public function getTipoEventos()
    {
        return $this->tipoEventos;
    }

    /**
     * Set asistenciaReuniones
     *
     * @param string $asistenciaReuniones
     *
     * @return pasatiempos
     */
    public function setAsistenciaReuniones($asistenciaReuniones)
    {
        $this->asistenciaReuniones = $asistenciaReuniones;

        return $this;
    }

    /**
     * Get asistenciaReuniones
     *
     * @return string
     */
    public function getAsistenciaReuniones()
    {
        return $this->asistenciaReuniones;
    }

    /**
     * Set tipoReuniones
     *
     * @param string $tipoReuniones
     *
     * @return pasatiempos
     */
    public function setTipoReuniones($tipoReuniones)
    {
        $this->tipoReuniones = $tipoReuniones;

        return $this;
    }

    /**
     * Get tipoReuniones
     *
     * @return string
     */
    public function getTipoReuniones()
    {
        return $this->tipoReuniones;
    }
}
