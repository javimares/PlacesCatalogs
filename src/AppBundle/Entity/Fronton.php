<?php
/**
 * Created by PhpStorm.
 * User: javier.mares
 * Date: 28/03/2016
 * Time: 17:27
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Catalogo_Fronton")
 */
class Fronton
{
    /** @ORM\Id */
    /** @ORM\Column(type="integer") */
    /** @ORM\GeneratedValue */
    protected $id;


    protected $nombre;
    protected $largo;
    protected $ancho;
    protected $estado;
    protected $url;
    protected $tipo;
    protected $iluminado;
    protected $tarifa;
}