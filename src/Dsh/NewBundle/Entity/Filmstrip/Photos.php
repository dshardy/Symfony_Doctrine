<?php

namespace Dsh\NewBundle\Entity\Filmstrip;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="photos")
 */

class photos
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="blob")
     */
    protected $photofile;

    /**
     * @ORM\Column(type="decimal")
     */
    protected $photoprice;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $photolocation;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $photoevent;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $photographer;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $datetimetaken;


public function get_id(){
    return $id;
}
public function get_photofile(){
    return $photofile;
}
public function get_photoprice(){
    return $photoprice;
}
public function get_photolocation(){
    return $photolocation;
}
public function get_photoevent(){
    return $photoevent;
}
public function get_photographer(){
    return $photographer;
}
public function get_datetimetaken(){
    return $datetimetaken;
}


public function set_id($value){
    $this->id = $value;
}
public function set_photofile($value){
    $this->photofile = $value;
}
public function set_photoprice($value){
    $this->photoprice = $value;
}
public function set_photolocation($value){
    $this->photolocation = $value;
}
public function set_photoevent($value){
    $this->photoevent = $value;
}
public function set_photographer($value){
    $this->photographer = $value;
}
public function set_datetimetaken($value){
    $this->datetimetaken = $value;
}

}

