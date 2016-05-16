<?php

namespace EstudioBundle\Entity;

/**
 * CreditoH5
 */
class CreditoH5
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $institucionPersonales;

    /**
     * @var float
     */
    private $montoCreditoInstitucion;

    /**
     * @var float
     */
    private $pagoMensualInstitucion;

    /**
     * @var string
     */
    private $fonacot;

    /**
     * @var float
     */
    private $montoCreditoFonacot;

    /**
     * @var float
     */
    private $pagoMensualFonacot;

    /**
     * @var string
     */
    private $infonavit;

    /**
     * @var float
     */
    private $montoCreditoInfonavit;

    /**
     * @var float
     */
    private $pagoMensualInfonavit;

    /**
     * @var string
     */
    private $otros;

    /**
     * @var float
     */
    private $montoCreditoOtros;

    /**
     * @var float
     */
    private $pagoMensualOtros;

    /**
     * @var string
     */
    private $institucioAutomotriz;

    /**
     * @var float
     */
    private $montoCredito;

    /**
     * @var float
     */
    private $pagoMensual;

    /**
     * @var float
     */
    private $saldoActual;

    /**
     * @var string
     */
    private $aseguradora;

    /**
     * @var string
     */
    private $tipoSeguro;

    /**
     * @var float
     */
    private $mensualidad;

    /**
     * @var \DateTime
     */
    private $vigencia;

    /**
     * @var string
     */
    private $cablemas;

    /**
     * @var string
     */
    private $mastv;

    /**
     * @var string
     */
    private $atenaParabolica;

    /**
     * @var string
     */
    private $sky;

    /**
     * @var string
     */
    private $otrosTv;

    /**
     * @var string
     */
    private $domestico;

    /**
     * @var string
     */
    private $jardinero;

    /**
     * @var string
     */
    private $chofer;

    /**
     * @var string
     */
    private $vigilancia;

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
     * Set institucionPersonales
     *
     * @param string $institucionPersonales
     *
     * @return CreditoH5
     */
    public function setInstitucionPersonales($institucionPersonales)
    {
        $this->institucionPersonales = $institucionPersonales;

        return $this;
    }

    /**
     * Get institucionPersonales
     *
     * @return string
     */
    public function getInstitucionPersonales()
    {
        return $this->institucionPersonales;
    }

    /**
     * Set montoCreditoInstitucion
     *
     * @param float $montoCreditoInstitucion
     *
     * @return CreditoH5
     */
    public function setMontoCreditoInstitucion($montoCreditoInstitucion)
    {
        $this->montoCreditoInstitucion = $montoCreditoInstitucion;

        return $this;
    }

    /**
     * Get montoCreditoInstitucion
     *
     * @return float
     */
    public function getMontoCreditoInstitucion()
    {
        return $this->montoCreditoInstitucion;
    }

    /**
     * Set pagoMensualInstitucion
     *
     * @param float $pagoMensualInstitucion
     *
     * @return CreditoH5
     */
    public function setPagoMensualInstitucion($pagoMensualInstitucion)
    {
        $this->pagoMensualInstitucion = $pagoMensualInstitucion;

        return $this;
    }

    /**
     * Get pagoMensualInstitucion
     *
     * @return float
     */
    public function getPagoMensualInstitucion()
    {
        return $this->pagoMensualInstitucion;
    }

    /**
     * Set fonacot
     *
     * @param string $fonacot
     *
     * @return CreditoH5
     */
    public function setFonacot($fonacot)
    {
        $this->fonacot = $fonacot;

        return $this;
    }

    /**
     * Get fonacot
     *
     * @return string
     */
    public function getFonacot()
    {
        return $this->fonacot;
    }

    /**
     * Set montoCreditoFonacot
     *
     * @param float $montoCreditoFonacot
     *
     * @return CreditoH5
     */
    public function setMontoCreditoFonacot($montoCreditoFonacot)
    {
        $this->montoCreditoFonacot = $montoCreditoFonacot;

        return $this;
    }

    /**
     * Get montoCreditoFonacot
     *
     * @return float
     */
    public function getMontoCreditoFonacot()
    {
        return $this->montoCreditoFonacot;
    }

    /**
     * Set pagoMensualFonacot
     *
     * @param float $pagoMensualFonacot
     *
     * @return CreditoH5
     */
    public function setPagoMensualFonacot($pagoMensualFonacot)
    {
        $this->pagoMensualFonacot = $pagoMensualFonacot;

        return $this;
    }

    /**
     * Get pagoMensualFonacot
     *
     * @return float
     */
    public function getPagoMensualFonacot()
    {
        return $this->pagoMensualFonacot;
    }

    /**
     * Set infonavit
     *
     * @param string $infonavit
     *
     * @return CreditoH5
     */
    public function setInfonavit($infonavit)
    {
        $this->infonavit = $infonavit;

        return $this;
    }

    /**
     * Get infonavit
     *
     * @return string
     */
    public function getInfonavit()
    {
        return $this->infonavit;
    }

    /**
     * Set montoCreditoInfonavit
     *
     * @param float $montoCreditoInfonavit
     *
     * @return CreditoH5
     */
    public function setMontoCreditoInfonavit($montoCreditoInfonavit)
    {
        $this->montoCreditoInfonavit = $montoCreditoInfonavit;

        return $this;
    }

    /**
     * Get montoCreditoInfonavit
     *
     * @return float
     */
    public function getMontoCreditoInfonavit()
    {
        return $this->montoCreditoInfonavit;
    }

    /**
     * Set pagoMensualInfonavit
     *
     * @param float $pagoMensualInfonavit
     *
     * @return CreditoH5
     */
    public function setPagoMensualInfonavit($pagoMensualInfonavit)
    {
        $this->pagoMensualInfonavit = $pagoMensualInfonavit;

        return $this;
    }

    /**
     * Get pagoMensualInfonavit
     *
     * @return float
     */
    public function getPagoMensualInfonavit()
    {
        return $this->pagoMensualInfonavit;
    }

    /**
     * Set otros
     *
     * @param string $otros
     *
     * @return CreditoH5
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
     * Set montoCreditoOtros
     *
     * @param float $montoCreditoOtros
     *
     * @return CreditoH5
     */
    public function setMontoCreditoOtros($montoCreditoOtros)
    {
        $this->montoCreditoOtros = $montoCreditoOtros;

        return $this;
    }

    /**
     * Get montoCreditoOtros
     *
     * @return float
     */
    public function getMontoCreditoOtros()
    {
        return $this->montoCreditoOtros;
    }

    /**
     * Set pagoMensualOtros
     *
     * @param float $pagoMensualOtros
     *
     * @return CreditoH5
     */
    public function setPagoMensualOtros($pagoMensualOtros)
    {
        $this->pagoMensualOtros = $pagoMensualOtros;

        return $this;
    }

    /**
     * Get pagoMensualOtros
     *
     * @return float
     */
    public function getPagoMensualOtros()
    {
        return $this->pagoMensualOtros;
    }

    /**
     * Set institucioAutomotriz
     *
     * @param string $institucioAutomotriz
     *
     * @return CreditoH5
     */
    public function setInstitucioAutomotriz($institucioAutomotriz)
    {
        $this->institucioAutomotriz = $institucioAutomotriz;

        return $this;
    }

    /**
     * Get institucioAutomotriz
     *
     * @return string
     */
    public function getInstitucioAutomotriz()
    {
        return $this->institucioAutomotriz;
    }

    /**
     * Set montoCredito
     *
     * @param float $montoCredito
     *
     * @return CreditoH5
     */
    public function setMontoCredito($montoCredito)
    {
        $this->montoCredito = $montoCredito;

        return $this;
    }

    /**
     * Get montoCredito
     *
     * @return float
     */
    public function getMontoCredito()
    {
        return $this->montoCredito;
    }

    /**
     * Set pagoMensual
     *
     * @param float $pagoMensual
     *
     * @return CreditoH5
     */
    public function setPagoMensual($pagoMensual)
    {
        $this->pagoMensual = $pagoMensual;

        return $this;
    }

    /**
     * Get pagoMensual
     *
     * @return float
     */
    public function getPagoMensual()
    {
        return $this->pagoMensual;
    }

    /**
     * Set saldoActual
     *
     * @param float $saldoActual
     *
     * @return CreditoH5
     */
    public function setSaldoActual($saldoActual)
    {
        $this->saldoActual = $saldoActual;

        return $this;
    }

    /**
     * Get saldoActual
     *
     * @return float
     */
    public function getSaldoActual()
    {
        return $this->saldoActual;
    }

    /**
     * Set aseguradora
     *
     * @param string $aseguradora
     *
     * @return CreditoH5
     */
    public function setAseguradora($aseguradora)
    {
        $this->aseguradora = $aseguradora;

        return $this;
    }

    /**
     * Get aseguradora
     *
     * @return string
     */
    public function getAseguradora()
    {
        return $this->aseguradora;
    }

    /**
     * Set tipoSeguro
     *
     * @param string $tipoSeguro
     *
     * @return CreditoH5
     */
    public function setTipoSeguro($tipoSeguro)
    {
        $this->tipoSeguro = $tipoSeguro;

        return $this;
    }

    /**
     * Get tipoSeguro
     *
     * @return string
     */
    public function getTipoSeguro()
    {
        return $this->tipoSeguro;
    }

    /**
     * Set mensualidad
     *
     * @param float $mensualidad
     *
     * @return CreditoH5
     */
    public function setMensualidad($mensualidad)
    {
        $this->mensualidad = $mensualidad;

        return $this;
    }

    /**
     * Get mensualidad
     *
     * @return float
     */
    public function getMensualidad()
    {
        return $this->mensualidad;
    }

    /**
     * Set vigencia
     *
     * @param \DateTime $vigencia
     *
     * @return CreditoH5
     */
    public function setVigencia($vigencia)
    {
        $this->vigencia = $vigencia;

        return $this;
    }

    /**
     * Get vigencia
     *
     * @return \DateTime
     */
    public function getVigencia()
    {
        return $this->vigencia;
    }

    /**
     * Set cablemas
     *
     * @param string $cablemas
     *
     * @return CreditoH5
     */
    public function setCablemas($cablemas)
    {
        $this->cablemas = $cablemas;

        return $this;
    }

    /**
     * Get cablemas
     *
     * @return string
     */
    public function getCablemas()
    {
        return $this->cablemas;
    }

    /**
     * Set mastv
     *
     * @param string $mastv
     *
     * @return CreditoH5
     */
    public function setMastv($mastv)
    {
        $this->mastv = $mastv;

        return $this;
    }

    /**
     * Get mastv
     *
     * @return string
     */
    public function getMastv()
    {
        return $this->mastv;
    }

    /**
     * Set atenaParabolica
     *
     * @param string $atenaParabolica
     *
     * @return CreditoH5
     */
    public function setAtenaParabolica($atenaParabolica)
    {
        $this->atenaParabolica = $atenaParabolica;

        return $this;
    }

    /**
     * Get atenaParabolica
     *
     * @return string
     */
    public function getAtenaParabolica()
    {
        return $this->atenaParabolica;
    }

    /**
     * Set sky
     *
     * @param string $sky
     *
     * @return CreditoH5
     */
    public function setSky($sky)
    {
        $this->sky = $sky;

        return $this;
    }

    /**
     * Get sky
     *
     * @return string
     */
    public function getSky()
    {
        return $this->sky;
    }

    /**
     * Set otrosTv
     *
     * @param string $otrosTv
     *
     * @return CreditoH5
     */
    public function setOtrosTv($otrosTv)
    {
        $this->otrosTv = $otrosTv;

        return $this;
    }

    /**
     * Get otrosTv
     *
     * @return string
     */
    public function getOtrosTv()
    {
        return $this->otrosTv;
    }

    /**
     * Set domestico
     *
     * @param string $domestico
     *
     * @return CreditoH5
     */
    public function setDomestico($domestico)
    {
        $this->domestico = $domestico;

        return $this;
    }

    /**
     * Get domestico
     *
     * @return string
     */
    public function getDomestico()
    {
        return $this->domestico;
    }

    /**
     * Set jardinero
     *
     * @param string $jardinero
     *
     * @return CreditoH5
     */
    public function setJardinero($jardinero)
    {
        $this->jardinero = $jardinero;

        return $this;
    }

    /**
     * Get jardinero
     *
     * @return string
     */
    public function getJardinero()
    {
        return $this->jardinero;
    }

    /**
     * Set chofer
     *
     * @param string $chofer
     *
     * @return CreditoH5
     */
    public function setChofer($chofer)
    {
        $this->chofer = $chofer;

        return $this;
    }

    /**
     * Get chofer
     *
     * @return string
     */
    public function getChofer()
    {
        return $this->chofer;
    }

    /**
     * Set vigilancia
     *
     * @param string $vigilancia
     *
     * @return CreditoH5
     */
    public function setVigilancia($vigilancia)
    {
        $this->vigilancia = $vigilancia;

        return $this;
    }

    /**
     * Get vigilancia
     *
     * @return string
     */
    public function getVigilancia()
    {
        return $this->vigilancia;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return CreditoH5
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
}

