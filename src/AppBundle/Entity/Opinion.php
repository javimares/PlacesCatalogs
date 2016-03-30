<?php

namespace AppBundle\Entity;

/**
 * Opinion
 */
class Opinion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $body;

    /**
     * @var integer
     */
    private $calif;

    /**
     * @var \AppBundle\Entity\Fronton
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
    public function setFronton(\AppBundle\Entity\Fronton $fronton = null)
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
}

