<?php

namespace EstudioBundle\Entity;

/**
 * Hoja5_2
 */
class Hoja5_2
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $renta;

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
    private $telefono;

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
    private $otros;


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
     * Set renta
     *
     * @param float $renta
     *
     * @return Hoja5_2
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
     * Set agua
     *
     * @param float $agua
     *
     * @return Hoja5_2
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
     * @return Hoja5_2
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
     * Set telefono
     *
     * @param float $telefono
     *
     * @return Hoja5_2
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return float
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set gas
     *
     * @param float $gas
     *
     * @return Hoja5_2
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
     * @return Hoja5_2
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
     * @return Hoja5_2
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
     * @return Hoja5_2
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
     * @return Hoja5_2
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
     * @return Hoja5_2
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
     * @return Hoja5_2
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
     * @return Hoja5_2
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
     * Set otros
     *
     * @param float $otros
     *
     * @return Hoja5_2
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
}