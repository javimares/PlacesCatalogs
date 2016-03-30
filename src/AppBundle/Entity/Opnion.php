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
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    protected $body;

    /**
     * @ORM\Column(type="integer")
     */
    protected $calif;

    /**
     * @ORM\ManyToOne(targetEntity="Fronton")
     */
    protected $fronton;
}
