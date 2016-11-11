<?php

namespace HojaBundle\Entity;

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
     * @var string
     */
    private $observaciones;
    private $ingresos;
    private $egresos;
    private $tarjetaCredito;
    private $creditosPersonales;
    private $creditoAutomotriz;
    private $seguros;
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
     * @return Hoja5
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
     * Set ingresos
     *
     * @param string $ingresos
     *
     * @return Hoja5
     */
    public function setHoja51($ingresos)
    {
        $this->ingresos = $ingresos;

        return $this;
    }

    /**
     * Get ingresos
     *
     * @return string
     */
    public function getHoja51()
    {
        return $this->ingresos;
    }
      /**
     * Set egresos
     *
     * @param string $egresos
     *
     * @return Hoja5
     */
    public function setHoja52($egresos)
    {
        $this->egresos = $egresos;

        return $this;
    }

    /**
     * Get egresos
     *
     * @return string
     */
    public function getHoja52()
    {
        return $this->egresos;
    }



      /**
     * Set tarjetaCredito
     *
     * @param string $tarjetaCredito
     *
     * @return Hoja5
     */
    public function setHoja53($tarjetaCredito)
    {
        $this->tarjetaCredito = $tarjetaCredito;

        return $this;
    }

    /**
     * Get tarjetaCredito
     *
     * @return string
     */
    public function getHoja53()
    {
        return $this->tarjetaCredito;
    }

     /**
     * Set creditosPersonales
     *
     * @param string $creditosPersonales
     *
     * @return Hoja5
     */
    public function setHoja54($creditosPersonales)
    {
        $this->creditosPersonales = $creditosPersonales;

        return $this;
    }

    /**
     * Get creditosPersonales
     *
     * @return string
     */
    public function getHoja54()
    {
        return $this->creditosPersonales;
    }



     /**
     * Set creditoAutomotriz
     *
     * @param string $creditoAutomotriz
     *
     * @return Hoja5
     */
    public function setHoja55($creditoAutomotriz)
    {
        $this->creditoAutomotriz = $creditoAutomotriz;

        return $this;
    }

    /**
     * Get creditoAutomotriz
     *
     * @return string
     */
    public function getHoja55()
    {
        return $this->creditoAutomotriz;
    }

     /**
     * Set seguros
     *
     * @param string $seguros
     *
     * @return Hoja5
     */
    public function setHoja56($seguros)
    {
        $this->seguros = $seguros;

        return $this;
    }

    /**
     * Get seguros
     *
     * @return string
     */
    public function getHoja56()
    {
        return $this->seguros;
    }
    /**
     * Set otrosServicios
     *
     * @param string $otrosServicios
     *
     * @return Hoja5
     */
    public function setHoja57($otrosServicios)
    {
        $this->otrosServicios = $otrosServicios;

        return $this;
    }

    /**
     * Get otrosServicios
     *
     * @return string
     */
    public function getHoja57()
    {
        return $this->otrosServicios;
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
     * @return Hoja5
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
