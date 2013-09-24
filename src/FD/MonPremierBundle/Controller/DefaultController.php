<?php

namespace FD\MonPremierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$message1='Symphony';
		return $this->container->get('templating')->renderResponse('FDMonPremierBundle:Default:index.html.twig', 
		array('message' =>$message1));
		
    }
	
}
