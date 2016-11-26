<?php

namespace fourMinds\Bundle\ConfiguracionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud;
use fourMinds\Bundle\ConfiguracionBundle\Form\SolicitudType;
use fourMinds\Bundle\UserBundle\Entity\alerts;
use fourMinds\Bundle\UserBundle\Entity\mensaje;


/**
 * Solicitud controller.
 *
 */
class SolicitudController extends Controller
{

    /**
     * Lists all Solicitud entities.
     *
     */
    public function indexAction()
    {
        if ($this->get('security.context')->isGranted('ROLE_USER')) {
            return $this->redirect($this->generateUrl('solicitud_inv'));
        }
        if ($this->get('security.context')->isGranted('ROLE_TEL')) {
            return $this->redirect($this->generateUrl('solicitud_recepcion'));
        }
        $em = $this->getDoctrine()->getManager();
        $date=new \DateTime();
        $entities = $em->getRepository('ConfiguracionBundle:Solicitud')->findSolBy(array('fecha_visitador' =>array("'".$date->format('Y-m-d')."'",'','>'),'fecha_refencias'=>array('NULL','and','IS')));
        $encaptura = $em->getRepository('ConfiguracionBundle:Solicitud')->findSolBy(array('fecha_visitador' =>array("'".$date->format('Y-m-d H:i:s')."'",'','<='),'fecha_termino'=>array('NULL','and','IS')));
        $enreferencias = $em->getRepository('ConfiguracionBundle:Solicitud')->findSolBy(array('fecha_refencias' =>array('NULL','','IS NOT'),'fecha_refencias_termino'=>array('NULL','and','IS')));
        
        return $this->render('ConfiguracionBundle:Solicitud:index.html.twig', array(
            'entities' => $entities,
            'encaptura' => $encaptura,
            'entities' => $entities,
        ));
    }
    public function invAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user=='anon.'){
                 $user=0;          
        }
        $date=new \DateTime();
        $encaptura = $em->getRepository('ConfiguracionBundle:Solicitud')->findSolBy(array('fecha_termino'=>array('NULL','','IS'),'visitador_id'=>array($user->getId(),'and','=')));
        return $this->render('ConfiguracionBundle:Solicitud:index_inv.html.twig', array(
            'entities' => $encaptura,
        ));
    }

    public function recepcionAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user=='anon.'){
                 $user=0;          
        }
        $date=new \DateTime();
        $enreferencias = $em->getRepository('ConfiguracionBundle:Solicitud')->findSolBy(array('fecha_refencias' =>array('NULL','','IS NOT'),'fecha_refencias_termino'=>array('NULL','and','IS'),'capturista_id'=>array($user->getId(),'and','=')),array('fecha','ASC'),1);

        return $this->render('ConfiguracionBundle:Solicitud:index_cap.html.twig', array(
            'entities' => $enreferencias,
        ));
    }

    public function historialrecepcionAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user=='anon.'){
                 $user=0;          
        }
        $date=new \DateTime();
        $enreferencias = $em->getRepository('ConfiguracionBundle:Solicitud')->findSolBy(array('fecha_refencias' =>array('NULL','','IS NOT'),'fecha_refencias_termino'=>array('NULL','and','IS NOT'),'capturista_id'=>array($user->getId(),'and','=')));

        return $this->render('ConfiguracionBundle:Solicitud:index_his.html.twig', array(
            'entities' => $enreferencias,
        ));
    }

    public function historialinvAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user=='anon.'){
                 $user=0;          
        }
        $date=new \DateTime();
        $encaptura = $em->getRepository('ConfiguracionBundle:Solicitud')->findSolBy(array('fecha_visitador' =>array("'".$date->format('Y-m-d H:i:s')."'",'','<='),'fecha_termino'=>array('NULL','and','IS NOT'),'visitador_id'=>array($user->getId(),'and','=')));

        return $this->render('ConfiguracionBundle:Solicitud:index_his.html.twig', array(
            'entities' => $encaptura,
        ));
    }
    /**
     * Creates a new Solicitud entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Solicitud();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setEstatus(1);
            $em = $this->getDoctrine()->getManager();
            $entity->setFecha(new \DateTime());
            $fecha=$entity->getFechaVisitador();
            $hora=$entity->getVisitador()->getTiemposEntrega()->getTiempoVerde()*60*60;
            $hora+=$entity->getVisitador()->getTiemposEntrega()->getTiempoAmarillo()*60*60;
            $hora+=$entity->getVisitador()->getTiemposEntrega()->getTiempoRojo()*60*60;
            $fechaEntrada=$entity->getVisitador()->getHorario()->getInicio();
            $fechaSalida=$entity->getVisitador()->getHorario()->getFin();
            $horaSolicitud=(($fecha->format('H')*60*60)+($fecha->format('i')*60)+($fecha->format('s')));   
            $horaEntrada=(($fechaEntrada->format('H')*60*60)+($fechaEntrada->format('i')*60)+($fechaEntrada->format('s')));
            $horaSalida=(($fechaSalida->format('H')*60*60)+($fechaSalida->format('i')*60)+($fechaSalida->format('s'))); 


            $date = $em->getRepository('ConfiguracionBundle:Solicitud')->tiempoFinal($horaSolicitud,$hora,$horaEntrada,$horaSalida);
            $cad=$fecha->format('Y-m-d H:i:s');
            $fechatmp=new \DateTime($cad);
            $user = $this->container->get('security.context')->getToken()->getUser();            
            if($user=='anon.'){
                 $user=0;          
            }else{
                 $user= $em->getRepository('UserBundle:User')->find($user->getId());                   
            }
            $entity->setUsuarioCreo($user);
            //echo $hora.'|resultsdfgsd<br>'; 
            //echo $fecha->format('Y-m-d H:i:s').'|resultsdfgsd<br>';               
            $fechatmp->add(new \DateInterval('PT'.$_SESSION['date'].'S'));
            //echo $_SESSION['date'];
            //echo $fecha->format('Y-m-d H:i:s').'|result<br>';
            $entity->setFechaFinal($fechatmp);

            $em->persist($entity);
            $em->flush();
            $this->sendNotifyAction($entity);

            return $this->redirect($this->generateUrl('solicitud_show', array('id' => $entity->getId())));
            //return $this->render('UserBundle:User:error.html.twig');
        }

        return $this->render('ConfiguracionBundle:Solicitud:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Solicitud entity.
     *
     * @param Solicitud $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Solicitud $entity)
    {
        $form = $this->createForm(new SolicitudType(), $entity, array(
            'action' => $this->generateUrl('solicitud_create'),
            'method' => 'POST',
        ));

        //////$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Solicitud entity.
     *
     */
    public function newAction()
    {
        $entity = new Solicitud();
        $form   = $this->createCreateForm($entity);
        $fecha = new \DateTime();
        $entity->setFecha($fecha);
        return $this->render('ConfiguracionBundle:Solicitud:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Solicitud entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConfiguracionBundle:Solicitud')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Solicitud entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConfiguracionBundle:Solicitud:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Solicitud entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConfiguracionBundle:Solicitud')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Solicitud entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConfiguracionBundle:Solicitud:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Solicitud entity.
    *
    * @param Solicitud $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Solicitud $entity)
    {
        $form = $this->createForm(new SolicitudType(), $entity, array(
            'action' => $this->generateUrl('solicitud_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        ////

        return $form;
    }
    /**
     * Edits an existing Solicitud entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConfiguracionBundle:Solicitud')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Solicitud entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('solicitud_edit', array('id' => $id)));
        }

        return $this->render('ConfiguracionBundle:Solicitud:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Solicitud entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConfiguracionBundle:Solicitud')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Solicitud entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('solicitud'));
    }

  /**
     * Deletes a User entity.
     *
     */
    public function sendNotifyAction($solicitud)
    {
       // print_r($request);
        $em = $this->getDoctrine()->getManager();
        //$entity = $em->getRepository('UserBundle:User')->findOneBy( array('salt' =>$form['salt']));
        

        //$fecha->add(new DateInterval('PT10H30S'));       
        $body=$this->renderView('UserBundle:User:nuevaSolicitud.html.twig',
                    array('solicitud' => $solicitud));

        /*
        $message = \Swift_Message::newInstance()
                    ->setContentType('text/html')
                    ->setSubject('Te asignaron una nueva investigacion')
                    ->setFrom('soporte@mmh.mx')
                    ->setTo($solicitud->getVisitador()->getCorreo() )
                    ->setBody( $body);
                $this->get('mailer')->send($message);
        $alert = new alerts();
        $alert->setUser($solicitud->getVisitador());
        $alert->setContenido($body);
        $alert->setClase('label-success');
        $alert->setDateCreate(new \DateTime());
        $alert->setEstatus(0);
        $em->persist($alert);
        $em->flush();
        $mensaje = new mensaje();
        $mensaje->setAsunto('Nueva Investigacion');
        $mensaje->setContenido($body);
        $mensaje->setFrom($solicitud->getUsuarioCreo());
        $mensaje->addMensajeUser($solicitud->getVisitador());
        $mensaje->setDateCreate(new \DateTime());
        $em->persist($mensaje);
        $em->flush();*/
    }


    /**
     * Creates a form to delete a Solicitud entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('solicitud_delete', array('id' => $id)))
            ->setMethod('DELETE')
            //->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }

    
    public function createcronAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConfiguracionBundle:Solicitud')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Solicitud entity.');
        }

        $fechaSol=$entity->getFechaVisitador();
        $fechaActual=new \DateTime();
        $horaSolicitud=(($fechaSol->format('H')*60*60)+($fechaSol->format('i')*60)+($fechaSol->format('s')));
        $horaFinal=(($fechaActual->format('H')*60*60)+($fechaActual->format('i')*60)+($fechaActual->format('s'))); 
        $fechaEntrada=$entity->getVisitador()->getHorario()->getInicio();
        $fechaSalida=$entity->getVisitador()->getHorario()->getFin();
        $horaEntrada=(($fechaEntrada->format('H')*60*60)+($fechaEntrada->format('i')*60)+($fechaEntrada->format('s')));
        $horaSalida=(($fechaSalida->format('H')*60*60)+($fechaSalida->format('i')*60)+($fechaSalida->format('s')));         
        $date = $em->getRepository('ConfiguracionBundle:Solicitud')->tiempoActual($horaSolicitud,$horaFinal,$horaEntrada,$horaSalida,intval($fechaActual->getTimestamp()),intval($fechaSol->getTimestamp()),0);    
        $cron=$this->conversorSegundosHoras($_SESSION['cron']['tiempo']);    
       
        return $this->render('ConfiguracionBundle:Solicitud:cronometro.html.twig', array(
            'cron'      => $cron,
            'action'   => $_SESSION['cron']['action'],
            'timer' => $_SESSION['cron']['timer'],
        ));

    }

    public function conversorSegundosHoras($tiempo_en_segundos) {       
        if($tiempo_en_segundos > 0){
            $horas = floor($tiempo_en_segundos / 3600);
            $minutos = floor(($tiempo_en_segundos - ($horas * 3600)) / 60);
            $segundos = $tiempo_en_segundos - ($horas * 3600) - ($minutos * 60);           
        }else{
            $horas = 00;
            $minutos = 00;
            $segundos =00;
        }
        
        return array('horas'=>$horas ,'minutos'=>$minutos ,'segundos'=>$segundos);
    }
}
