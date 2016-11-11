<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\personasDomicilio;
use EstudioBundle\Form\personasDomicilioType;

/**
 * personasDomicilio controller.
 *
 */
class personasDomicilioController extends Controller
{

    /**
     * Lists all personasDomicilio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:personasDomicilio')->findAll();

        return $this->render('EstudioBundle:personasDomicilio:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new personasDomicilio entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new personasDomicilio();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('personasDomicilio_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:personasDomicilio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a personasDomicilio entity.
     *
     * @param personasDomicilio $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(personasDomicilio $entity)
    {
        $form = $this->createForm(new personasDomicilioType(), $entity, array(
            'action' => $this->generateUrl('personasDomicilio_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new personasDomicilio entity.
     *
     */
    public function newAction()
    {
        $entity = new personasDomicilio();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:personasDomicilio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a personasDomicilio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:personasDomicilio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find personasDomicilio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:personasDomicilio:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing personasDomicilio entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:personasDomicilio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find personasDomicilio entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:personasDomicilio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a personasDomicilio entity.
    *
    * @param personasDomicilio $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(personasDomicilio $entity)
    {
        $form = $this->createForm(new personasDomicilioType(), $entity, array(
            'action' => $this->generateUrl('personasDomicilio_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing personasDomicilio entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:personasDomicilio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find personasDomicilio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('personasDomicilio_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:personasDomicilio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a personasDomicilio entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:personasDomicilio')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find personasDomicilio entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('personasDomicilio'));
    }

    /**
     * Creates a form to delete a personasDomicilio entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('personasDomicilio_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
