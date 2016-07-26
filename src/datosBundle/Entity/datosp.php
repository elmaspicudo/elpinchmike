<?php

namespace datosBundle\Entity;

/**
 * datosp
 */
class datosp
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $empresa;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $puesto;

    /**
     * @var \DateTime
     */
    private $fechaDeNacimiento;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $nacionalidad;

    /**
     * @var string
     */
    private $domicilio;

    /**
     * @var string
     */
    private $ciudad;

    /**
     * @var integer
     */
    private $telefonoCasa;

    /**
     * @var integer
     */
    private $celular;

    /**
     * @var integer
     */
    private $telTrabajo;

    /**
     * @var integer
     */
    private $edad;

    /**
     * @var boolean
     */
    private $sexo;

    /**
     * @var string
     */
    private $lugarDeNacimiento;

    /**
     * @var boolean
     */
    private $eCivil;

    /**
     * @var string
     */
    private $colonia;

    /**
     * @var string
     */
    private $pais;

    /**
     * @var string
     */
    private $concluciones;

    /**
     * @var boolean
     */
    private $resultadoDeLaEntrevista;


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
     * Set empresa
     *
     * @param string $empresa
     *
     * @return datosp
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return datosp
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
     * Set puesto
     *
     * @param string $puesto
     *
     * @return datosp
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
     * Set fechaDeNacimiento
     *
     * @param \DateTime $fechaDeNacimiento
     *
     * @return datosp
     */
    public function setFechaDeNacimiento($fechaDeNacimiento)
    {
        $this->fechaDeNacimiento = $fechaDeNacimiento;

        return $this;
    }

    /**
     * Get fechaDeNacimiento
     *
     * @return \DateTime
     */
    public function getFechaDeNacimiento()
    {
        return $this->fechaDeNacimiento;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return datosp
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
     * Set nacionalidad
     *
     * @param string $nacionalidad
     *
     * @return datosp
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return string
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return datosp
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
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return datosp
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set telefonoCasa
     *
     * @param integer $telefonoCasa
     *
     * @return datosp
     */
    public function setTelefonoCasa($telefonoCasa)
    {
        $this->telefonoCasa = $telefonoCasa;

        return $this;
    }

    /**
     * Get telefonoCasa
     *
     * @return integer
     */
    public function getTelefonoCasa()
    {
        return $this->telefonoCasa;
    }

    /**
     * Set celular
     *
     * @param integer $celular
     *
     * @return datosp
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return integer
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set telTrabajo
     *
     * @param integer $telTrabajo
     *
     * @return datosp
     */
    public function setTelTrabajo($telTrabajo)
    {
        $this->telTrabajo = $telTrabajo;

        return $this;
    }

    /**
     * Get telTrabajo
     *
     * @return integer
     */
    public function getTelTrabajo()
    {
        return $this->telTrabajo;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return datosp
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set sexo
     *
     * @param boolean $sexo
     *
     * @return datosp
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return boolean
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set lugarDeNacimiento
     *
     * @param string $lugarDeNacimiento
     *
     * @return datosp
     */
    public function setLugarDeNacimiento($lugarDeNacimiento)
    {
        $this->lugarDeNacimiento = $lugarDeNacimiento;

        return $this;
    }

    /**
     * Get lugarDeNacimiento
     *
     * @return string
     */
    public function getLugarDeNacimiento()
    {
        return $this->lugarDeNacimiento;
    }

    /**
     * Set eCivil
     *
     * @param boolean $eCivil
     *
     * @return datosp
     */
    public function setECivil($eCivil)
    {
        $this->eCivil = $eCivil;

        return $this;
    }

    /**
     * Get eCivil
     *
     * @return boolean
     */
    public function getECivil()
    {
        return $this->eCivil;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     *
     * @return datosp
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return datosp
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set concluciones
     *
     * @param string $concluciones
     *
     * @return datosp
     */
    public function setConcluciones($concluciones)
    {
        $this->concluciones = $concluciones;

        return $this;
    }

    /**
     * Get concluciones
     *
     * @return string
     */
    public function getConcluciones()
    {
        return $this->concluciones;
    }

    /**
     * Set resultadoDeLaEntrevista
     *
     * @param boolean $resultadoDeLaEntrevista
     *
     * @return datosp
     */
    public function setResultadoDeLaEntrevista($resultadoDeLaEntrevista)
    {
        $this->resultadoDeLaEntrevista = $resultadoDeLaEntrevista;

        return $this;
    }

    /**
     * Get resultadoDeLaEntrevista
     *
     * @return boolean
     */
    public function getResultadoDeLaEntrevista()
    {
        return $this->resultadoDeLaEntrevista;
    }
    
}
