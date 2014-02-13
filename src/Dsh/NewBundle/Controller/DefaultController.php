<?php

namespace Dsh\NewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NewBundle:Default:index.html.twig', array('name' => $name));
    }
}

// src/Acme/StoreBundle/Controller/DefaultController.php

// ...
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