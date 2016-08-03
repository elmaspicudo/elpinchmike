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
            $em->persist($entity);
            $em->flush();

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

        ////$form->add('submit', 'submit', array('label' => 'Create'));

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
            //->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
