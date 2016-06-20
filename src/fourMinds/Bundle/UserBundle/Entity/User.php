<?php

namespace fourMinds\Bundle\UserBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * User
 */
class User implements UserInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var \DateTime
     */
    private $dateCreate;

    /**
     * @var \DateTime
     */
    private $dateUpdate;

    /**
     * @var integer
     */
    private $userCreate;

    /**
     * @var integer
     */
    private $userUpdate;

     /**
     * @var \fourMinds\Bundle\UserBundle\Entity\perfil
     */
    private $perfil;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rol_user;

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
     * Set userName
     *
     * @param string $userName
     *
     * @return User
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return User
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
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     *
     * @return User
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

    /**
     * Set userCreate
     *
     * @param integer $userCreate
     *
     * @return User
     */
    public function setUserCreate($userCreate)
    {
        $this->userCreate = $userCreate;

        return $this;
    }

    /**
     * Get userCreate
     *
     * @return integer
     */
    public function getUserCreate()
    {
        return $this->userCreate;
    }

    /**
     * Set userUpdate
     *
     * @param integer $userUpdate
     *
     * @return User
     */
    public function setUserUpdate($userUpdate)
    {
        $this->userUpdate = $userUpdate;

        return $this;
    }

    /**
     * Get userUpdate
     *
     * @return integer
     */
    public function getUserUpdate()
    {
        return $this->userUpdate;
    }
    

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        $losroles=array();
        $losroles[]=$this->role;
        
        return $losroles;
        //return $this->roles;
    }

  
    function eraseCredentials(){}
   
    /**
     * Set perfil
     *
     * @param \fourMinds\Bundle\UserBundle\Entity\perfil $perfil
     *
     * @return User
     */
    public function setPerfil(\fourMinds\Bundle\UserBundle\Entity\perfil $perfil = null)
    {
        $this->perfil = $perfil;

        return $this;
    }

    /**
     * Get perfil
     *
     * @return \fourMinds\Bundle\UserBundle\Entity\perfil
     */
    public function getPerfil()
    {
        return $this->perfil;
    }
    
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $aPaterno;

    /**
     * @var string
     */
    private $aMaterno;

    /**
     * @var string
     */
    private $correo;

    /**
     * @var string
     */
    private $role;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return User
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
     * Set aPaterno
     *
     * @param string $aPaterno
     *
     * @return User
     */
    public function setAPaterno($aPaterno)
    {
        $this->aPaterno = $aPaterno;

        return $this;
    }

    /**
     * Get aPaterno
     *
     * @return string
     */
    public function getAPaterno()
    {
        return $this->aPaterno;
    }

    /**
     * Set aMaterno
     *
     * @param string $aMaterno
     *
     * @return User
     */
    public function setAMaterno($aMaterno)
    {
        $this->aMaterno = $aMaterno;

        return $this;
    }

    /**
     * Get aMaterno
     *
     * @return string
     */
    public function getAMaterno()
    {
        return $this->aMaterno;
    }

    /**
     * Set correo
     *
     * @param string $correo
     *
     * @return User
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    public function __toString()
    {
        return $this->getUserName();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rol_user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add rolUser
     *
     * @param \fourMinds\Bundle\UserBundle\Entity\role $rolUser
     *
     * @return User
     */
    public function addRolUser(\fourMinds\Bundle\UserBundle\Entity\role $rolUser)
    {
        $this->rol_user[] = $rolUser;

        return $this;
    }

    /**
     * Remove rolUser
     *
     * @param \fourMinds\Bundle\UserBundle\Entity\role $rolUser
     */
    public function removeRolUser(\fourMinds\Bundle\UserBundle\Entity\role $rolUser)
    {
        $this->rol_user->removeElement($rolUser);
    }

    /**
     * Get rolUser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRolUser()
    {
        return $this->rol_user;
    }
}
