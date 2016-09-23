<?php

namespace fourMinds\Bundle\UserBundle\Entity;

/**
 * alerts
 */
class alerts
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $clase;

    /**
     * @var string
     */
    private $contenido;


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
     * Set clase
     *
     * @param string $clase
     *
     * @return alerts
     */
    public function setClase($clase)
    {
        $this->clase = $clase;

        return $this;
    }

    /**
     * Get clase
     *
     * @return string
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     *
     * @return alerts
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string
     */
    public function getContenido()
    {
        return $this->contenido;
    }
    /**
     * @var \fourMinds\Bundle\UserBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \fourMinds\Bundle\UserBundle\Entity\User $user
     *
     * @return alerts
     */
    public function setUser(\fourMinds\Bundle\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \fourMinds\Bundle\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var \DateTime
     */
    private $dateCreate;


    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return alerts
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }
    /**
     * @var \DateTime
     */
    private $dateRevision;

    /**
     * @var integer
     */
    private $estatus;


    /**
     * Set dateRevision
     *
     * @param \DateTime $dateRevision
     *
     * @return alerts
     */
    public function setDateRevision($dateRevision)
    {
        $this->dateRevision = $dateRevision;

        return $this;
    }

    /**
     * Get dateRevision
     *
     * @return \DateTime
     */
    public function getDateRevision()
    {
        return $this->dateRevision;
    }

    /**
     * Set estatus
     *
     * @param integer $estatus
     *
     * @return alerts
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return integer
     */
    public function getEstatus()
    {
        return $this->estatus;
    }
}
