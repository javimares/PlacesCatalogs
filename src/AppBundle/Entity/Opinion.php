<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Catalogo_Opiniones")
 */
class Opinion
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
     * @ORM\Column(type="integer")
     */
    private $calif;

    /**
     * @ORM\ManyToOne(targetEntity="Fronton")
     */
    private $fronton;


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
     * @return Opinion
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
     * Set calif
     *
     * @param integer $calif
     *
     * @return Opinion
     */
    public function setCalif($calif)
    {
        $this->calif = $calif;
    
        return $this;
    }

    /**
     * Get calif
     *
     * @return integer
     */
    public function getCalif()
    {
        return $this->calif;
    }

    /**
     * Set fronton
     *
     * @param \AppBundle\Entity\Fronton $fronton
     *
     * @return Opinion
     */
    public function setFronton($fronton = null)
    {
        $this->fronton = $fronton;
    
        return $this;
    }

    /**
     * Get fronton
     *
     * @return \AppBundle\Entity\Fronton
     */
    public function getFronton()
    {
        return $this->fronton;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getBody();
    }
}
