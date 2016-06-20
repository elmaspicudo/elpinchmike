<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
    	 if ($this->get('security.context')->isGranted('ROLE_ADMIN')) {
		        return $this->redirect($this->generateUrl('solicitud'));
		    }
		if ($this->get('security.context')->isGranted('ROLE_USER')) {
		        return $this->redirect($this->generateUrl('solicitud_inv'));
		    }

		if ($this->get('security.context')->isGranted('ROLE_TEL')) {
		        return $this->redirect($this->generateUrl('solicitud_recep'));
		    }
		    return $this->redirect($this->generateUrl('login'));
    }
}
