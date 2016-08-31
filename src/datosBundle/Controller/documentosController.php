<?php

namespace datosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use datosBundle\Entity\documentos;
use datosBundle\Form\documentosType;

/**
 * documentos controller.
 *
 */
class documentosController extends Controller
{

    /**
     * Lists all documentos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('datosBundle:documentos')->findAll();

        return $this->render('datosBundle:documentos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new documentos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new documentos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('documentos_show', array('id' => $entity->getId())));
        }

        return $this->render('datosBundle:documentos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a documentos entity.
     *
     * @param documentos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(documentos $entity)
    {
        $form = $this->createForm(new documentosType(), $entity, array(
            'action' => $this->generateUrl('documentos_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new documentos entity.
     *
     */
    public function newAction()
    {
        $entity = new documentos();
        $form   = $this->createCreateForm($entity);

        return $this->render('datosBundle:documentos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a documentos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:documentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find documentos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('datosBundle:documentos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }


      /**
     * Finds and displays a documentos entity.
     *
     */
    public function showbysolicitudAction($solicitud)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:documentos')->findOneBy(array('solicitud'=>$solicitud));

        if (!$entity) {
            $EntSolicitud=$em->getRepository('ConfiguracionBundle:Solicitud')->find($solicitud);
            $entity = new documentos();
            $entity->setSolicitud($EntSolicitud);
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('documentos_edit',array('id'=>$entity->getId())));
    }
    /**
     * Displays a form to edit an existing documentos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:documentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find documentos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('datosBundle:documentos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a documentos entity.
    *
    * @param documentos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(documentos $entity)
    {
        $form = $this->createForm(new documentosType(), $entity, array(
            'action' => $this->generateUrl('documentos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing documentos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:documentos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find documentos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('documentos_edit', array('id' => $id)));
        }

        return $this->render('datosBundle:documentos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a documentos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('datosBundle:documentos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find documentos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('documentos'));
    }

    /**
     * Creates a form to delete a documentos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('documentos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
