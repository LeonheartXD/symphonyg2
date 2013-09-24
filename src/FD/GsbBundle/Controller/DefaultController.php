<?php

namespace FD\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FDGsbBundle:Default:index.html.twig');
    }
}
