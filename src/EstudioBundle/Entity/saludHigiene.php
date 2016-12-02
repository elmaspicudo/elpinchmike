<?php

namespace EstudioBundle\Entity;

/**
 * saludHigiene
 */
class saludHigiene
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $estadoSalud;

    /**
     * @var string
     */
    private $hospitalizaciones;

    /**
     * @var string
     */
    private $razon;

    /**
     * @var string
     */
    private $incapazidadesUltimoEmpleo;

    /**
     * @var string
     */
    private $razonIncapacidad;

    /**
     * @var string
     */
    private $enfermedadContagiosa;

    /**
     * @var string
     */
    private $cual;

    /**
     * @var string
     */
    private $enfermedadesUltimoAno;

    /**
     * @var string
     */
    private $problemasVision;

    /**
     * @var string
     */
    private $cualProblemaVision;

    /**
     * @var string
     */
    private $hipertension;

    /**
     * @var string
     */
    private $servicioMedico;

    /**
     * @var string
     */
    private $estadoSaludFamilia;

    /**
     * @var string
     */
    private $consumeDroga;

    /**
     * @var string
     */
    private $frecuenciaDroga;

    /**
     * @var string
     */
    private $consumeCigarros;

    /**
     * @var string
     */
    private $frecuenciaCigarros;

    /**
     * @var string
     */
    private $ejercicio;

    /**
     * @var string
     */
    private $cualEjercicio;

    /**
     * @var string
     */
    private $frecuenciaEjercicio;


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
     * Set estadoSalud
     *
     * @param string $estadoSalud
     *
     * @return saludHigiene
     */
    public function setEstadoSalud($estadoSalud)
    {
        $this->estadoSalud = $estadoSalud;

        return $this;
    }

    /**
     * Get estadoSalud
     *
     * @return string
     */
    public function getEstadoSalud()
    {
        return $this->estadoSalud;
    }

    /**
     * Set hospitalizaciones
     *
     * @param string $hospitalizaciones
     *
     * @return saludHigiene
     */
    public function setHospitalizaciones($hospitalizaciones)
    {
        $this->hospitalizaciones = $hospitalizaciones;

        return $this;
    }

    /**
     * Get hospitalizaciones
     *
     * @return string
     */
    public function getHospitalizaciones()
    {
        return $this->hospitalizaciones;
    }

    /**
     * Set razon
     *
     * @param string $razon
     *
     * @return saludHigiene
     */
    public function setRazon($razon)
    {
        $this->razon = $razon;

        return $this;
    }

    /**
     * Get razon
     *
     * @return string
     */
    public function getRazon()
    {
        return $this->razon;
    }

    /**
     * Set incapazidadesUltimoEmpleo
     *
     * @param string $incapazidadesUltimoEmpleo
     *
     * @return saludHigiene
     */
    public function setIncapazidadesUltimoEmpleo($incapazidadesUltimoEmpleo)
    {
        $this->incapazidadesUltimoEmpleo = $incapazidadesUltimoEmpleo;

        return $this;
    }

    /**
     * Get incapazidadesUltimoEmpleo
     *
     * @return string
     */
    public function getIncapazidadesUltimoEmpleo()
    {
        return $this->incapazidadesUltimoEmpleo;
    }

    /**
     * Set razonIncapacidad
     *
     * @param string $razonIncapacidad
     *
     * @return saludHigiene
     */
    public function setRazonIncapacidad($razonIncapacidad)
    {
        $this->razonIncapacidad = $razonIncapacidad;

        return $this;
    }

    /**
     * Get razonIncapacidad
     *
     * @return string
     */
    public function getRazonIncapacidad()
    {
        return $this->razonIncapacidad;
    }

    /**
     * Set enfermedadContagiosa
     *
     * @param string $enfermedadContagiosa
     *
     * @return saludHigiene
     */
    public function setEnfermedadContagiosa($enfermedadContagiosa)
    {
        $this->enfermedadContagiosa = $enfermedadContagiosa;

        return $this;
    }

    /**
     * Get enfermedadContagiosa
     *
     * @return string
     */
    public function getEnfermedadContagiosa()
    {
        return $this->enfermedadContagiosa;
    }

    /**
     * Set cual
     *
     * @param string $cual
     *
     * @return saludHigiene
     */
    public function setCual($cual)
    {
        $this->cual = $cual;

        return $this;
    }

    /**
     * Get cual
     *
     * @return string
     */
    public function getCual()
    {
        return $this->cual;
    }

    /**
     * Set enfermedadesUltimoAno
     *
     * @param string $enfermedadesUltimoAno
     *
     * @return saludHigiene
     */
    public function setEnfermedadesUltimoAno($enfermedadesUltimoAno)
    {
        $this->enfermedadesUltimoAno = $enfermedadesUltimoAno;

        return $this;
    }

    /**
     * Get enfermedadesUltimoAno
     *
     * @return string
     */
    public function getEnfermedadesUltimoAno()
    {
        return $this->enfermedadesUltimoAno;
    }

    /**
     * Set problemasVision
     *
     * @param string $problemasVision
     *
     * @return saludHigiene
     */
    public function setProblemasVision($problemasVision)
    {
        $this->problemasVision = $problemasVision;

        return $this;
    }

    /**
     * Get problemasVision
     *
     * @return string
     */
    public function getProblemasVision()
    {
        return $this->problemasVision;
    }

    /**
     * Set cualProblemaVision
     *
     * @param string $cualProblemaVision
     *
     * @return saludHigiene
     */
    public function setCualProblemaVision($cualProblemaVision)
    {
        $this->cualProblemaVision = $cualProblemaVision;

        return $this;
    }

    /**
     * Get cualProblemaVision
     *
     * @return string
     */
    public function getCualProblemaVision()
    {
        return $this->cualProblemaVision;
    }

    /**
     * Set hipertension
     *
     * @param string $hipertension
     *
     * @return saludHigiene
     */
    public function setHipertension($hipertension)
    {
        $this->hipertension = $hipertension;

        return $this;
    }

    /**
     * Get hipertension
     *
     * @return string
     */
    public function getHipertension()
    {
        return $this->hipertension;
    }

    /**
     * Set servicioMedico
     *
     * @param string $servicioMedico
     *
     * @return saludHigiene
     */
    public function setServicioMedico($servicioMedico)
    {
        $this->servicioMedico = $servicioMedico;

        return $this;
    }

    /**
     * Get servicioMedico
     *
     * @return string
     */
    public function getServicioMedico()
    {
        return $this->servicioMedico;
    }

    /**
     * Set estadoSaludFamilia
     *
     * @param string $estadoSaludFamilia
     *
     * @return saludHigiene
     */
    public function setEstadoSaludFamilia($estadoSaludFamilia)
    {
        $this->estadoSaludFamilia = $estadoSaludFamilia;

        return $this;
    }

    /**
     * Get estadoSaludFamilia
     *
     * @return string
     */
    public function getEstadoSaludFamilia()
    {
        return $this->estadoSaludFamilia;
    }

    /**
     * Set consumeDroga
     *
     * @param string $consumeDroga
     *
     * @return saludHigiene
     */
    public function setConsumeDroga($consumeDroga)
    {
        $this->consumeDroga = $consumeDroga;

        return $this;
    }

    /**
     * Get consumeDroga
     *
     * @return string
     */
    public function getConsumeDroga()
    {
        return $this->consumeDroga;
    }

    /**
     * Set frecuenciaDroga
     *
     * @param string $frecuenciaDroga
     *
     * @return saludHigiene
     */
    public function setFrecuenciaDroga($frecuenciaDroga)
    {
        $this->frecuenciaDroga = $frecuenciaDroga;

        return $this;
    }

    /**
     * Get frecuenciaDroga
     *
     * @return string
     */
    public function getFrecuenciaDroga()
    {
        return $this->frecuenciaDroga;
    }

    /**
     * Set consumeCigarros
     *
     * @param string $consumeCigarros
     *
     * @return saludHigiene
     */
    public function setConsumeCigarros($consumeCigarros)
    {
        $this->consumeCigarros = $consumeCigarros;

        return $this;
    }

    /**
     * Get consumeCigarros
     *
     * @return string
     */
    public function getConsumeCigarros()
    {
        return $this->consumeCigarros;
    }

    /**
     * Set frecuenciaCigarros
     *
     * @param string $frecuenciaCigarros
     *
     * @return saludHigiene
     */
    public function setFrecuenciaCigarros($frecuenciaCigarros)
    {
        $this->frecuenciaCigarros = $frecuenciaCigarros;

        return $this;
    }

    /**
     * Get frecuenciaCigarros
     *
     * @return string
     */
    public function getFrecuenciaCigarros()
    {
        return $this->frecuenciaCigarros;
    }

    /**
     * Set ejercicio
     *
     * @param string $ejercicio
     *
     * @return saludHigiene
     */
    public function setEjercicio($ejercicio)
    {
        $this->ejercicio = $ejercicio;

        return $this;
    }

    /**
     * Get ejercicio
     *
     * @return string
     */
    public function getEjercicio()
    {
        return $this->ejercicio;
    }

    /**
     * Set cualEjercicio
     *
     * @param string $cualEjercicio
     *
     * @return saludHigiene
     */
    public function setCualEjercicio($cualEjercicio)
    {
        $this->cualEjercicio = $cualEjercicio;

        return $this;
    }

    /**
     * Get cualEjercicio
     *
     * @return string
     */
    public function getCualEjercicio()
    {
        return $this->cualEjercicio;
    }

    /**
     * Set frecuenciaEjercicio
     *
     * @param string $frecuenciaEjercicio
     *
     * @return saludHigiene
     */
    public function setFrecuenciaEjercicio($frecuenciaEjercicio)
    {
        $this->frecuenciaEjercicio = $frecuenciaEjercicio;

        return $this;
    }

    /**
     * Get frecuenciaEjercicio
     *
     * @return string
     */
    public function getFrecuenciaEjercicio()
    {
        return $this->frecuenciaEjercicio;
    }
}
