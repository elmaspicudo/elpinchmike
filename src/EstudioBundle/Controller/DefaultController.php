<?php

namespace EstudioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EstudioBundle:Default:index.html.twig', array('name' => $name));
    }
}
