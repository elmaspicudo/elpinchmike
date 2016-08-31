<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\ReferenciaPatrimonial;
use EstudioBundle\Form\ReferenciaPatrimonialType;

/**
 * ReferenciaPatrimonial controller.
 *
 */
class ReferenciaPatrimonialController extends Controller
{

    /**
     * Lists all ReferenciaPatrimonial entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:ReferenciaPatrimonial')->findAll();

        return $this->render('EstudioBundle:ReferenciaPatrimonial:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ReferenciaPatrimonial entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ReferenciaPatrimonial();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('referenciapatrimonial_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:ReferenciaPatrimonial:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ReferenciaPatrimonial entity.
     *
     * @param ReferenciaPatrimonial $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ReferenciaPatrimonial $entity)
    {
        $form = $this->createForm(new ReferenciaPatrimonialType(), $entity, array(
            'action' => $this->generateUrl('referenciapatrimonial_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ReferenciaPatrimonial entity.
     *
     */
    public function newAction()
    {
        $entity = new ReferenciaPatrimonial();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:ReferenciaPatrimonial:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ReferenciaPatrimonial entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:ReferenciaPatrimonial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ReferenciaPatrimonial entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:ReferenciaPatrimonial:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ReferenciaPatrimonial entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:ReferenciaPatrimonial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ReferenciaPatrimonial entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:ReferenciaPatrimonial:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ReferenciaPatrimonial entity.
    *
    * @param ReferenciaPatrimonial $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ReferenciaPatrimonial $entity)
    {
        $form = $this->createForm(new ReferenciaPatrimonialType(), $entity, array(
            'action' => $this->generateUrl('referenciapatrimonial_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ReferenciaPatrimonial entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:ReferenciaPatrimonial')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ReferenciaPatrimonial entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('referenciapatrimonial_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:ReferenciaPatrimonial:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ReferenciaPatrimonial entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:ReferenciaPatrimonial')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ReferenciaPatrimonial entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('referenciapatrimonial'));
    }

    /**
     * Creates a form to delete a ReferenciaPatrimonial entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('referenciapatrimonial_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
