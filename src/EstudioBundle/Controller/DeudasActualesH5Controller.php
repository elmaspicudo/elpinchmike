<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\DeudasActualesH5;
use EstudioBundle\Form\DeudasActualesH5Type;

/**
 * DeudasActualesH5 controller.
 *
 */
class DeudasActualesH5Controller extends Controller
{

    /**
     * Lists all DeudasActualesH5 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:DeudasActualesH5')->findAll();

        return $this->render('EstudioBundle:DeudasActualesH5:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new DeudasActualesH5 entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new DeudasActualesH5();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('deudasactualesh5_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:DeudasActualesH5:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a DeudasActualesH5 entity.
     *
     * @param DeudasActualesH5 $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DeudasActualesH5 $entity)
    {
        $form = $this->createForm(new DeudasActualesH5Type(), $entity, array(
            'action' => $this->generateUrl('deudasactualesh5_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new DeudasActualesH5 entity.
     *
     */
    public function newAction()
    {
        $entity = new DeudasActualesH5();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:DeudasActualesH5:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DeudasActualesH5 entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:DeudasActualesH5')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DeudasActualesH5 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:DeudasActualesH5:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DeudasActualesH5 entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:DeudasActualesH5')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DeudasActualesH5 entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:DeudasActualesH5:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a DeudasActualesH5 entity.
    *
    * @param DeudasActualesH5 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DeudasActualesH5 $entity)
    {
        $form = $this->createForm(new DeudasActualesH5Type(), $entity, array(
            'action' => $this->generateUrl('deudasactualesh5_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing DeudasActualesH5 entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:DeudasActualesH5')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DeudasActualesH5 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('deudasactualesh5_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:DeudasActualesH5:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a DeudasActualesH5 entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:DeudasActualesH5')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DeudasActualesH5 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('deudasactualesh5'));
    }

    /**
     * Creates a form to delete a DeudasActualesH5 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deudasactualesh5_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
