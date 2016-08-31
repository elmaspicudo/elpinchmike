<?php

namespace fourMinds\Bundle\ConfiguracionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use fourMinds\Bundle\ConfiguracionBundle\Entity\Solicitud;
use fourMinds\Bundle\ConfiguracionBundle\Form\SolicitudType;

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
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ConfiguracionBundle:Solicitud')->findAll();
        if ($this->get('security.context')->isGranted('ROLE_USER')) {
            return $this->redirect($this->generateUrl('solicitud_inv'));
        }
        return $this->render('ConfiguracionBundle:Solicitud:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function invAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user=='anon.'){
                 $user=0;          
        }else{
                              
        }
        $entities = $em->getRepository('ConfiguracionBundle:Solicitud')->findBy(array('visitador'=>$user->getId(),'estatus'=>1));

        return $this->render('ConfiguracionBundle:Solicitud:index_inv.html.twig', array(
            'entities' => $entities,
        ));
    }

    public function recepcionAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ConfiguracionBundle:Solicitud')->findBy(array('estatus'=>3));

        return $this->render('ConfiguracionBundle:Solicitud:index.html.twig', array(
            'entities' => $entities,
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
            $fecha=$entity->getFecha();
            $hora=$entity->getVisitador()->getTiemposEntrega()->getTiempoVerde();
            $hora+=$entity->getVisitador()->getTiemposEntrega()->getTiempoAmarillo();
            $hora+=$entity->getVisitador()->getTiemposEntrega()->getTiempoRojo();
            $fechaEntrada=$entity->getVisitador()->getHorario()->getInicio();
            $fechaSalida=$entity->getVisitador()->getHorario()->getFin();
            $horaSolicitud=(($fecha->format('H')*60*60)+($fecha->format('i')*60)+($fecha->format('s')));   
            $horaEntrada=(($fechaEntrada->format('H')*60*60)+($fechaEntrada->format('i')*60)+($fechaEntrada->format('s')));
            $horaSalida=(($fechaSalida->format('H')*60*60)+($fechaSalida->format('i')*60)+($fechaSalida->format('s')));      
            $date = $em->getRepository('ConfiguracionBundle:Solicitud')->tiempoFinal($horaSolicitud,$hora,$horaEntrada,$horaSalida);
            $cad=$fecha->format('Y-m-d H:i:s');
            $fechatmp=new \DateTime($cad);
            //echo $hora.'|resultsdfgsd<br>'; 
            //echo $fecha->format('Y-m-d H:i:s').'|resultsdfgsd<br>';               
            $fechatmp->add(new \DateInterval('PT'.$_SESSION['date'].'S'));
            //echo $_SESSION['date'];
            //echo $fecha->format('Y-m-d H:i:s').'|result<br>';
            $entity->setFechaVisitador($fechatmp);

            $em->persist($entity);
            $em->flush();
            $this->sendNotifyAction($entity);

            return $this->redirect($this->generateUrl('solicitud_show', array('id' => $entity->getId())));
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

        ////$form->add('submit', 'submit', array('label' => 'Update'));

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
        //$em = $this->getDoctrine()->getManager();
        //$entity = $em->getRepository('UserBundle:User')->findOneBy( array('salt' =>$form['salt']));
        

        //$fecha->add(new DateInterval('PT10H30S'));
        $body=$this->renderView('UserBundle:User:nuevaSolicitud.html.twig',
                    array('solicitud' => $solicitud));
        $message = \Swift_Message::newInstance()
                    ->setContentType('text/html')
                    ->setSubject('Te asignaron una nueva investigacion')
                    ->setFrom('soporte@mmh.mx')
                    ->setTo($solicitud->getVisitador()->getCorreo() )
                    ->setBody( $body);
                $this->get('mailer')->send($message);
       
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
}
