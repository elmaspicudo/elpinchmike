<?php

namespace fourMinds\Bundle\UserBundle\Entity;

/**
 * perfil
 */
class perfil
{
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var \fourMinds\Bundle\UserBundle\Entity\file
     */
    private $file;


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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return perfil
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set file
     *
     * @param \fourMinds\Bundle\UserBundle\Entity\file $file
     *
     * @return perfil
     */
    public function setFile(\fourMinds\Bundle\UserBundle\Entity\file $file = null)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return \fourMinds\Bundle\UserBundle\Entity\file
     */
    public function getFile()
    {
        return $this->file;
    }
}
