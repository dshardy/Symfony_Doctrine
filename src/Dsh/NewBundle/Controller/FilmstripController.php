<?php

namespace Dsh\NewBundle\Controller;

use Dsh\NewBundle\Entity\Filmstrip\Photos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class FilmstripController extends Controller
{

    public function showAction($photos)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    
    
    
    }


}

