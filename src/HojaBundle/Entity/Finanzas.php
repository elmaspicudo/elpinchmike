<?php

namespace HojaBundle\Entity;

/**
 * Finanzas
 */
class Finanzas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud
     */
    private $solicitud;

    /**
     * @var \EstudioBundle\Entity\ingresos
     */
    private $ingresos;

    /**
     * @var \EstudioBundle\Entity\egresos
     */
    private $egresos;

    /**
     * @var \EstudioBundle\Entity\tarjetaCredito
     */
    private $tarjetaCredito;

    /**
     * @var \EstudioBundle\Entity\creditosPersonales
     */
    private $creditosPersonales;

    /**
     * @var \EstudioBundle\Entity\creditoAutomotriz
     */
    private $creditoAutomotriz;

    /**
     * @var \EstudioBundle\Entity\seguros
     */
    private $seguros;

    /**
     * @var \EstudioBundle\Entity\otrosServicios
     */
    private $otrosServicios;


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
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Finanzas
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
     * Set solicitud
     *
     * @param \fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud $solicitud
     *
     * @return Finanzas
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
     * Set ingresos
     *
     * @param \EstudioBundle\Entity\ingresos $ingresos
     *
     * @return Finanzas
     */
    public function setIngresos(\EstudioBundle\Entity\ingresos $ingresos = null)
    {
        $this->ingresos = $ingresos;

        return $this;
    }

    /**
     * Get ingresos
     *
     * @return \EstudioBundle\Entity\ingresos
     */
    public function getIngresos()
    {
        return $this->ingresos;
    }

    /**
     * Set egresos
     *
     * @param \EstudioBundle\Entity\egresos $egresos
     *
     * @return Finanzas
     */
    public function setEgresos(\EstudioBundle\Entity\egresos $egresos = null)
    {
        $this->egresos = $egresos;

        return $this;
    }

    /**
     * Get egresos
     *
     * @return \EstudioBundle\Entity\egresos
     */
    public function getEgresos()
    {
        return $this->egresos;
    }

    /**
     * Set tarjetaCredito
     *
     * @param \EstudioBundle\Entity\tarjetaCredito $tarjetaCredito
     *
     * @return Finanzas
     */
    public function setTarjetaCredito(\EstudioBundle\Entity\tarjetaCredito $tarjetaCredito = null)
    {
        $this->tarjetaCredito = $tarjetaCredito;

        return $this;
    }

    /**
     * Get tarjetaCredito
     *
     * @return \EstudioBundle\Entity\tarjetaCredito
     */
    public function getTarjetaCredito()
    {
        return $this->tarjetaCredito;
    }

    /**
     * Set creditosPersonales
     *
     * @param \EstudioBundle\Entity\creditosPersonales $creditosPersonales
     *
     * @return Finanzas
     */
    public function setCreditosPersonales(\EstudioBundle\Entity\creditosPersonales $creditosPersonales = null)
    {
        $this->creditosPersonales = $creditosPersonales;

        return $this;
    }

    /**
     * Get creditosPersonales
     *
     * @return \EstudioBundle\Entity\creditosPersonales
     */
    public function getCreditosPersonales()
    {
        return $this->creditosPersonales;
    }

    /**
     * Set creditoAutomotriz
     *
     * @param \EstudioBundle\Entity\creditoAutomotriz $creditoAutomotriz
     *
     * @return Finanzas
     */
    public function setCreditoAutomotriz(\EstudioBundle\Entity\creditoAutomotriz $creditoAutomotriz = null)
    {
        $this->creditoAutomotriz = $creditoAutomotriz;

        return $this;
    }

    /**
     * Get creditoAutomotriz
     *
     * @return \EstudioBundle\Entity\creditoAutomotriz
     */
    public function getCreditoAutomotriz()
    {
        return $this->creditoAutomotriz;
    }

    /**
     * Set seguros
     *
     * @param \EstudioBundle\Entity\seguros $seguros
     *
     * @return Finanzas
     */
    public function setSeguros(\EstudioBundle\Entity\seguros $seguros = null)
    {
        $this->seguros = $seguros;

        return $this;
    }

    /**
     * Get seguros
     *
     * @return \EstudioBundle\Entity\seguros
     */
    public function getSeguros()
    {
        return $this->seguros;
    }

    /**
     * Set otrosServicios
     *
     * @param \EstudioBundle\Entity\otrosServicios $otrosServicios
     *
     * @return Finanzas
     */
    public function setOtrosServicios(\EstudioBundle\Entity\otrosServicios $otrosServicios = null)
    {
        $this->otrosServicios = $otrosServicios;

        return $this;
    }

    /**
     * Get otrosServicios
     *
     * @return \EstudioBundle\Entity\otrosServicios
     */
    public function getOtrosServicios()
    {
        return $this->otrosServicios;
    }
}
