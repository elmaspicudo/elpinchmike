<?php

namespace fourMinds\Bundle\ConfiguracionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ConfiguracionBundle:Default:index.html.twig', array('name' => $name));
    }
}
