<?php

namespace Dsh\NewBundle\Controller;

use Dsh\NewBundle\Entity\Filmstrip\Photos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    
    $photos = new photos();
    
    $photos->set_photoprice(20);
    $photos->set_photofile(1);
    $photos->set_photolocation('Southampton');
    $photos->set_photoevent('thebigbang');
    $photos->set_photographer('Bogan');
    
           
    
    
   /*  exit(\Doctrine\Common\Util\Debug::dump($photos)); */
   
   $em = $this->getDoctrine()->getManager();
   $em->persist($photos);
   $em->flush();    
        
        
        return $this->render('NewBundle:Default:index.html.twig');
    }
















}

// src/Dsh/NewBundle/Controller/DefaultController.php

// ...



/*
use Dsh\NewBundle\Entity\Filmstrip;
use Symfony\Component\HttpFoundation\Response;

public function createAction()
{
    $product = new Photos();
    $product->setname('change this to store photo');
    $product->setprice('19.99');
    $product->setlocation('Worthing');
    $product->setevent('really exciting event');
    $product->setphotographer('Bogan');
    $product->setdatetimetaken('25/12/2014');
    

    $em = $this->getDoctrine()->getManager();
    $em->persist($product);
    $em->flush();

    return new Response('Created product id '.$product->getId());
    
}    
*/