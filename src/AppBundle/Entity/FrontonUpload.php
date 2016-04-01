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
 * @ORM\Table(name="Catalogo_FrontonUpload")
 */
class FrontonUpload
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nombre;

    /**
     * @ORM\Column(type="integer")
     */
    protected $largo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $ancho;

    /**
     * @ORM\ManyToOne(targetEntity="Estado")
     */
    protected $estado;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    protected $url;

    /**
     * @ORM\ManyToOne(targetEntity="Tipo")
     */
    protected $tipo;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $iluminado;

    /**
     * @ORM\Column(type="float", scale=2)
     */
    protected $tarifa;

    /**
     * @ORM\ManyToOne(targetEntity="Ciudad")
     */
    protected $ciudad;

    /**
     * @ORM\Column(type="string", length=150)
     */
    protected $direccion;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    protected $ubicacion;

    /**
     * @ORM\Column(type="string", length=150)
     */
    protected $imagenes;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario")
     */
    protected $user;

    /**
     * @ORM\Column(type="integer", options={"default":0})
     */
    protected $calif;

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Fronton
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
     * Set largo
     *
     * @param integer $largo
     *
     * @return Fronton
     */
    public function setLargo($largo)
    {
        $this->largo = $largo;
    
        return $this;
    }

    /**
     * Get largo
     *
     * @return integer
     */
    public function getLargo()
    {
        return $this->largo;
    }

    /**
     * Set ancho
     *
     * @param integer $ancho
     *
     * @return Fronton
     */
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    
        return $this;
    }

    /**
     * Get ancho
     *
     * @return integer
     */
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Fronton
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set iluminado
     *
     * @param boolean $iluminado
     *
     * @return Fronton
     */
    public function setIluminado($iluminado)
    {
        $this->iluminado = $iluminado;
    
        return $this;
    }

    /**
     * Get iluminado
     *
     * @return boolean
     */
    public function getIluminado()
    {
        return $this->iluminado;
    }

    /**
     * Set tarifa
     *
     * @param float $tarifa
     *
     * @return Fronton
     */
    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;
    
        return $this;
    }

    /**
     * Get tarifa
     *
     * @return float
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }

    /**
     * Set estado
     *
     * @param Estado $estado
     *
     * @return Fronton
     */
    public function setEstado(Estado $estado = null)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return Estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set tipo
     *
     * @param Tipo $tipo
     *
     * @return Fronton
     */
    public function setTipo(Tipo $tipo = null)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return Tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set ciudad
     *
     * @param Ciudad $ciudad
     *
     * @return Fronton
     */
    public function setCiudad(Ciudad $ciudad = null)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return Ciudad
     */
    public function getCiudad()
    {
        return $this->ciudad;
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
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * @param mixed $ubicacion
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }

    /**
     * @return string
     */
    public function getImagenes()
    {
        return $this->imagenes;
    }

    /**
     * @param string $imagenes
     */
    public function setImagenes($imagenes)
    {
        $this->imagenes = $imagenes;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


    /**
     * Set calif
     *
     * @param integer $calif
     *
     * @return FrontonUpload
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
     * @return string
     */
    public function __toString()
    {
        return $this->getNombre();
    }
}
