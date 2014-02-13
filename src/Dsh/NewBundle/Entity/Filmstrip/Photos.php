<?php

namespace Dsh\NewBundle\Entity\Filmstrip;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 */
class Photos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $photoName;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $event;

    /**
     * @var string
     */
    private $photographer;

    /**
     * @var \DateTime
     */
    private $datetimetaken;


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
     * Set photoName
     *
     * @param string $photoName
     * @return Photos
     */
    public function setPhotoName($photoName)
    {
        $this->photoName = $photoName;

        return $this;
    }

    /**
     * Get photoName
     *
     * @return string 
     */
    public function getPhotoName()
    {
        return $this->photoName;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Photos
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Photos
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set event
     *
     * @param string $event
     * @return Photos
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return string 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set photographer
     *
     * @param string $photographer
     * @return Photos
     */
    public function setPhotographer($photographer)
    {
        $this->photographer = $photographer;

        return $this;
    }

    /**
     * Get photographer
     *
     * @return string 
     */
    public function getPhotographer()
    {
        return $this->photographer;
    }

    /**
     * Set datetimetaken
     *
     * @param \DateTime $datetimetaken
     * @return Photos
     */
    public function setDatetimetaken($datetimetaken)
    {
        $this->datetimetaken = $datetimetaken;

        return $this;
    }

    /**
     * Get datetimetaken
     *
     * @return \DateTime 
     */
    public function getDatetimetaken()
    {
        return $this->datetimetaken;
    }
}
