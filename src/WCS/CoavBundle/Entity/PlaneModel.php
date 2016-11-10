<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlaneModel
 */
class PlaneModel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $manufacturer;

    /**
     * @var int
     */
    private $cruiseSpeed;

    /**
     * @var int
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $status;


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
     * Set model
     *
     * @param string $model
     * @return PlaneModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return PlaneModel
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set cruiseSpeed
     *
     * @param integer $cruiseSpeed
     * @return PlaneModel
     */
    public function setCruiseSpeed($cruiseSpeed)
    {
        $this->cruiseSpeed = $cruiseSpeed;

        return $this;
    }

    /**
     * Get cruiseSpeed
     *
     * @return integer 
     */
    public function getCruiseSpeed()
    {
        return $this->cruiseSpeed;
    }

    /**
     * Set nbSeats
     *
     * @param integer $nbSeats
     * @return PlaneModel
     */
    public function setNbSeats($nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    /**
     * Get nbSeats
     *
     * @return integer 
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return PlaneModel
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $plane;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->plane = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add plane
     *
     * @param \WCS\CoavBundle\Entity\Flight $plane
     *
     * @return PlaneModel
     */
    public function addPlane(\WCS\CoavBundle\Entity\Flight $plane)
    {
        $this->plane[] = $plane;

        return $this;
    }

    /**
     * Remove plane
     *
     * @param \WCS\CoavBundle\Entity\Flight $plane
     */
    public function removePlane(\WCS\CoavBundle\Entity\Flight $plane)
    {
        $this->plane->removeElement($plane);
    }

    /**
     * Get plane
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlane()
    {
        return $this->plane;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $planes;


    /**
     * Get planes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlanes()
    {
        return $this->planes;
    }
}
