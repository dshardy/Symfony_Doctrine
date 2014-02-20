<?php

namespace Dsh\NewBundle\Controller;

use Dsh\NewBundle\Entity\Filmstrip\Photos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GetphotoController extends Controller


{
      public function showAction()
     {

     $em = $this->getDoctrine()->getManager();

     $query = $em->createQuery(
    'SELECT gc, g
     FROM DshNewBundle:Filmstrip Photos
     LEFT JOIN gc.galleries g
     WHERE gc.id = :categoryId'
     )->setParameter('FilmstripId', $FilmstripId);

     $category = $query->getResult();

     return $this->render('NewBundle:Default:index.html.twig');     
    
     }


}