<?php

namespace Dsh\NewBundle\Controller;

use Dsh\NewBundle\Entity\Filmstrip\Photos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}

/*
{


    public function CreateAction()
    {
    
    $photos = new photos();
    
    $photos->set_photoprice(20);
    $photos->set_photofile(1);
    $photos->set_photolocation('Southampton');
    $photos->set_photoevent('thebigbang');
    $photos->set_photographer('Bogan');
    
           
    
    
   /*  exit(\Doctrine\Common\Util\Debug::dump($photos)); */
   
/*
   $em = $this->getDoctrine()->getManager();
   $em->persist($photos);
   $em->flush();    
        
        
        return $this->render('NewBundle:Default:index.html.twig');
    }
}
*/


/*
{

    public function showAction($id)

    {

    $id=4;     

    $photos = $this->getDoctrine()
        ->getRepository('DshNewBundle:Photos')
        ->find($id);

    if (!$photos) {
        throw $this->createNotFoundException(
            'No photos found for id '.$id
        );
    }
    
    $em = $this->getDoctrine()->getManager();
    
    $photos->set_photoprice(200);
    
    $em->persist($photos);
    $em->flush();
*/
    
  /*
  exit(\Doctrine\Common\Util\Debug::dump($photos));
    
   
    return $this->render('NewBundle:Default:index.html.twig');
*/  
     
    // ... do something, like pass the $product object into a template
/*
}

}
*/

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
}
