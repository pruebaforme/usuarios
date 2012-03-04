<?php

namespace Comunidad\UsersBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comunidad\UsersBundle\Entity\Usuario
 *
 * @ORM\Table(name="Comunidad_Usuarios")
 * @ORM\Entity(repositoryClass="Comunidad\UsersBundle\Entity\UsuarioRepository")
 */
class Usuario
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string $apellidos
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var text $direccion
     *
     * @ORM\Column(name="direccion", type="text")
     */
    private $direccion;

    /**
     * @var boolean $permite_email
     *
     * @ORM\Column(name="permite_email", type="boolean")
     */
    private $permite_email;

    /**
     * @var string $dni
     *
     * @ORM\Column(name="dni", type="string", length=9)
     */
    private $dni;

    /**
     * @var string $ciudad
     *
     * @ORM\Column(name="ciudad", type="string", length=255)
     */
    private $ciudad;

    /**
     * 
     *
     * @ORM\ManyToMany(targetEntity="Inmueble", mappedBy="usuarios", cascade={"persist"})
     */
    private $inmuebles;

    public function __construct()
    {
        $this->usuarios = new ArrayCollection();
    }
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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
     * Set apellidos
     *
     * @param string $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
     * Set direccion
     *
     * @param text $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get direccion
     *
     * @return text 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set permite_email
     *
     * @param boolean $permiteEmail
     */
    public function setPermiteEmail($permiteEmail)
    {
        $this->permite_email = $permiteEmail;
    }

    /**
     * Get permite_email
     *
     * @return boolean 
     */
    public function getPermiteEmail()
    {
        return $this->permite_email;
    }

    /**
     * Set dni
     *
     * @param string $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set inmuebles
     *
     * @param Comunidad\UsersBundle\Entity\Inmueble $inmuebles
     */

    public function setInmuebles($inmuebles)
    {
        $this->inmuebles = $inmuebles;
    }

    /**
     * Get inmuebles
     *
     * @return Doctrine\Common\Collections\Collection $inmuebles
     */
    public function getInmuebles()
    {
        return $this->inmuebles;
    }

    public function __toString()
    {
	return $this->getNombre();
    }

    
}