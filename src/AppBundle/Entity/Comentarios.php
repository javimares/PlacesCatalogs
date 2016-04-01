<?php
/**
 * Created by PhpStorm.
 * User: javier.mares
 * Date: 31/03/2016
 * Time: 10:40
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Catalogo_Comentarios")
 */
class Comentarios
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $body;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Temas")
     */
    private $tema;

    /**
     * @ORM\Column(type="boolean")
     */
    private $borrado;


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
     * Set body
     *
     * @param string $body
     *
     * @return Comentarios
     */
    public function setBody($body)
    {
        $this->body = $body;
    
        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set borrado
     *
     * @param boolean $borrado
     *
     * @return Comentarios
     */
    public function setBorrado($borrado)
    {
        $this->borrado = $borrado;
    
        return $this;
    }

    /**
     * Get borrado
     *
     * @return boolean
     */
    public function getBorrado()
    {
        return $this->borrado;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\Usuario $user
     *
     * @return Comentarios
     */
    public function setUser($user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set tema
     *
     * @param \AppBundle\Entity\Temas $tema
     *
     * @return Comentarios
     */
    public function setTema($tema = null)
    {
        $this->tema = $tema;
    
        return $this;
    }

    /**
     * Get tema
     *
     * @return \AppBundle\Entity\Temas
     */
    public function getTema()
    {
        return $this->tema;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getBody();
    }
}
