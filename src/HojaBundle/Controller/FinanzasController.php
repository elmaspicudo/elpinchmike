<?php

namespace HojaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HojaBundle\Entity\Finanzas;
use HojaBundle\Form\FinanzasType;

/**
 * Finanzas controller.
 *
 */
class FinanzasController extends Controller
{

    /**
     * Lists all Finanzas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HojaBundle:Finanzas')->findAll();

        return $this->render('HojaBundle:Finanzas:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a datosp entity.
     *
     */
    public function showbysolicitudAction($solicitud)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Finanzas')->findOneBy(array('solicitud'=>$solicitud));

        if (!$entity) {
            $EntSolicitud=$em->getRepository('ConfiguracionBundle:Solicitud')->find($solicitud);
            $entity = new Finanzas();
            $entity->setSolicitud($EntSolicitud);
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Finanzas_edit',array('id'=>$entity->getId())));
    }
    /**
     * Creates a new Finanzas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Finanzas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Finanzas_show', array('id' => $entity->getId())));
        }

        return $this->render('HojaBundle:Finanzas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Finanzas entity.
     *
     * @param Finanzas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Finanzas $entity)
    {
        $form = $this->createForm(new FinanzasType(), $entity, array(
            'action' => $this->generateUrl('Finanzas_create'),
            'method' => 'POST',
        ));

        ////$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Finanzas entity.
     *
     */
    public function newAction()
    {
        $entity = new Finanzas();
        $form   = $this->createCreateForm($entity);

        return $this->render('HojaBundle:Finanzas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Finanzas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Finanzas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Finanzas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Finanzas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Finanzas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Finanzas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Finanzas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Finanzas:new.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),            
        ));
    }

    /**
    * Creates a form to edit a Finanzas entity.
    *
    * @param Finanzas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Finanzas $entity)
    {
        $form = $this->createForm(new FinanzasType(), $entity, array(
            'action' => $this->generateUrl('Finanzas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing Finanzas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Finanzas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Finanzas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            if ($editForm->get('Siguiente')->isClicked()) {
                 return $this->redirect($this->generateUrl('Referencia_laboral_solicitud', array('solicitud' => $entity->getSolicitud())));
            }
            return $this->redirect($this->generateUrl('Bienes_solicitud', array('solicitud' => $entity->getSolicitud())));
        }

        return $this->render('HojaBundle:Finanzas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Finanzas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HojaBundle:Finanzas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Finanzas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Finanzas'));
    }

    /**
     * Creates a form to delete a Finanzas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Finanzas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
