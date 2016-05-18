<?php

namespace EstudioBundle\Entity;

/**
 * Hoja5
 */
class Hoja5
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $investigado;

    /**
     * @var float
     */
    private $conyuge;

    /**
     * @var float
     */
    private $padres;

    /**
     * @var float
     */
    private $hermanos;

    /**
     * @var float
     */
    private $otros;

    /**
     * @var float
     */
    private $renta;

    /**
     * @var float
     */
    private $predial;

    /**
     * @var float
     */
    private $agua;

    /**
     * @var float
     */
    private $luz;

    /**
     * @var float
     */
    private $celular;

    /**
     * @var float
     */
    private $gas;

    /**
     * @var float
     */
    private $transporte;

    /**
     * @var float
     */
    private $mantenimientoAuto;

    /**
     * @var float
     */
    private $alimentacion;

    /**
     * @var float
     */
    private $educacion;

    /**
     * @var float
     */
    private $medicos;

    /**
     * @var float
     */
    private $diversiones;

    /**
     * @var float
     */
    private $vestido;

    /**
     * @var float
     */
    private $otrosEgresos;


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
     * Set investigado
     *
     * @param float $investigado
     *
     * @return Hoja5
     */
    public function setInvestigado($investigado)
    {
        $this->investigado = $investigado;

        return $this;
    }

    /**
     * Get investigado
     *
     * @return float
     */
    public function getInvestigado()
    {
        return $this->investigado;
    }

    /**
     * Set conyuge
     *
     * @param float $conyuge
     *
     * @return Hoja5
     */
    public function setConyuge($conyuge)
    {
        $this->conyuge = $conyuge;

        return $this;
    }

    /**
     * Get conyuge
     *
     * @return float
     */
    public function getConyuge()
    {
        return $this->conyuge;
    }

    /**
     * Set padres
     *
     * @param float $padres
     *
     * @return Hoja5
     */
    public function setPadres($padres)
    {
        $this->padres = $padres;

        return $this;
    }

    /**
     * Get padres
     *
     * @return float
     */
    public function getPadres()
    {
        return $this->padres;
    }

    /**
     * Set hermanos
     *
     * @param float $hermanos
     *
     * @return Hoja5
     */
    public function setHermanos($hermanos)
    {
        $this->hermanos = $hermanos;

        return $this;
    }

    /**
     * Get hermanos
     *
     * @return float
     */
    public function getHermanos()
    {
        return $this->hermanos;
    }

    /**
     * Set otros
     *
     * @param float $otros
     *
     * @return Hoja5
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return float
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set renta
     *
     * @param float $renta
     *
     * @return Hoja5
     */
    public function setRenta($renta)
    {
        $this->renta = $renta;

        return $this;
    }

    /**
     * Get renta
     *
     * @return float
     */
    public function getRenta()
    {
        return $this->renta;
    }

    /**
     * Set predial
     *
     * @param float $predial
     *
     * @return Hoja5
     */
    public function setPredial($predial)
    {
        $this->predial = $predial;

        return $this;
    }

    /**
     * Get predial
     *
     * @return float
     */
    public function getPredial()
    {
        return $this->predial;
    }

    /**
     * Set agua
     *
     * @param float $agua
     *
     * @return Hoja5
     */
    public function setAgua($agua)
    {
        $this->agua = $agua;

        return $this;
    }

    /**
     * Get agua
     *
     * @return float
     */
    public function getAgua()
    {
        return $this->agua;
    }

    /**
     * Set luz
     *
     * @param float $luz
     *
     * @return Hoja5
     */
    public function setLuz($luz)
    {
        $this->luz = $luz;

        return $this;
    }

    /**
     * Get luz
     *
     * @return float
     */
    public function getLuz()
    {
        return $this->luz;
    }

    /**
     * Set celular
     *
     * @param float $celular
     *
     * @return Hoja5
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return float
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set gas
     *
     * @param float $gas
     *
     * @return Hoja5
     */
    public function setGas($gas)
    {
        $this->gas = $gas;

        return $this;
    }

    /**
     * Get gas
     *
     * @return float
     */
    public function getGas()
    {
        return $this->gas;
    }

    /**
     * Set transporte
     *
     * @param float $transporte
     *
     * @return Hoja5
     */
    public function setTransporte($transporte)
    {
        $this->transporte = $transporte;

        return $this;
    }

    /**
     * Get transporte
     *
     * @return float
     */
    public function getTransporte()
    {
        return $this->transporte;
    }

    /**
     * Set mantenimientoAuto
     *
     * @param float $mantenimientoAuto
     *
     * @return Hoja5
     */
    public function setMantenimientoAuto($mantenimientoAuto)
    {
        $this->mantenimientoAuto = $mantenimientoAuto;

        return $this;
    }

    /**
     * Get mantenimientoAuto
     *
     * @return float
     */
    public function getMantenimientoAuto()
    {
        return $this->mantenimientoAuto;
    }

    /**
     * Set alimentacion
     *
     * @param float $alimentacion
     *
     * @return Hoja5
     */
    public function setAlimentacion($alimentacion)
    {
        $this->alimentacion = $alimentacion;

        return $this;
    }

    /**
     * Get alimentacion
     *
     * @return float
     */
    public function getAlimentacion()
    {
        return $this->alimentacion;
    }

    /**
     * Set educacion
     *
     * @param float $educacion
     *
     * @return Hoja5
     */
    public function setEducacion($educacion)
    {
        $this->educacion = $educacion;

        return $this;
    }

    /**
     * Get educacion
     *
     * @return float
     */
    public function getEducacion()
    {
        return $this->educacion;
    }

    /**
     * Set medicos
     *
     * @param float $medicos
     *
     * @return Hoja5
     */
    public function setMedicos($medicos)
    {
        $this->medicos = $medicos;

        return $this;
    }

    /**
     * Get medicos
     *
     * @return float
     */
    public function getMedicos()
    {
        return $this->medicos;
    }

    /**
     * Set diversiones
     *
     * @param float $diversiones
     *
     * @return Hoja5
     */
    public function setDiversiones($diversiones)
    {
        $this->diversiones = $diversiones;

        return $this;
    }

    /**
     * Get diversiones
     *
     * @return float
     */
    public function getDiversiones()
    {
        return $this->diversiones;
    }

    /**
     * Set vestido
     *
     * @param float $vestido
     *
     * @return Hoja5
     */
    public function setVestido($vestido)
    {
        $this->vestido = $vestido;

        return $this;
    }

    /**
     * Get vestido
     *
     * @return float
     */
    public function getVestido()
    {
        return $this->vestido;
    }

    /**
     * Set otrosEgresos
     *
     * @param float $otrosEgresos
     *
     * @return Hoja5
     */
    public function setOtrosEgresos($otrosEgresos)
    {
        $this->otrosEgresos = $otrosEgresos;

        return $this;
    }

    /**
     * Get otrosEgresos
     *
     * @return float
     */
    public function getOtrosEgresos()
    {
        return $this->otrosEgresos;
    }
}

