<?php

namespace fourMinds\Bundle\UserBundle\Entity;

/**
 * mensaje
 */
class mensaje
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $asunto;

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
     * Set asunto
     *
     * @param string $asunto
     *
     * @return mensaje
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;

        return $this;
    }

    /**
     * Get asunto
     *
     * @return string
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     *
     * @return mensaje
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
    private $from;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $mensaje_user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mensaje_user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set from
     *
     * @param \fourMinds\Bundle\UserBundle\Entity\User $from
     *
     * @return mensaje
     */
    public function setFrom(\fourMinds\Bundle\UserBundle\Entity\User $from = null)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return \fourMinds\Bundle\UserBundle\Entity\User
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Add mensajeUser
     *
     * @param \fourMinds\Bundle\UserBundle\Entity\User $mensajeUser
     *
     * @return mensaje
     */
    public function addMensajeUser(\fourMinds\Bundle\UserBundle\Entity\User $mensajeUser)
    {
        $this->mensaje_user[] = $mensajeUser;

        return $this;
    }

    /**
     * Remove mensajeUser
     *
     * @param \fourMinds\Bundle\UserBundle\Entity\User $mensajeUser
     */
    public function removeMensajeUser(\fourMinds\Bundle\UserBundle\Entity\User $mensajeUser)
    {
        $this->mensaje_user->removeElement($mensajeUser);
    }

    /**
     * Get mensajeUser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMensajeUser()
    {
        return $this->mensaje_user;
    }
}
