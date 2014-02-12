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
     * @var \DateTime
     */
    private $datetime;


public function get_id(){
    return $id;
}



public function get_datetime(){
    return $datetime;
}



public function set_id($value){
    $this->id = $value;
}



public function set_datetime($value){
    $this->datetime = $value;
}


    /**
     * @var \DateTime
     */
    private $datetime,Array,;


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
     * Set datetime,Array,
     *
     * @param \DateTime $datetime,Array,
     * @return Photos
     */
    public function setDatetime,Array,($datetime,Array,)
    {
        $this->datetime,Array, = $datetime,Array,;

        return $this;
    }

    /**
     * Get datetime,Array,
     *
     * @return \DateTime 
     */
    public function getDatetime,Array,()
    {
        return $this->datetime,Array,;
    }
}
