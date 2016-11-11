<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\creditosPersonales;
use EstudioBundle\Form\creditosPersonalesType;

/**
 * creditosPersonales controller.
 *
 */
class creditosPersonalesController extends Controller
{

    /**
     * Lists all creditosPersonales entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:creditosPersonales')->findAll();

        return $this->render('EstudioBundle:creditosPersonales:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new creditosPersonales entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new creditosPersonales();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('creditosPersonales_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:creditosPersonales:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a creditosPersonales entity.
     *
     * @param creditosPersonales $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(creditosPersonales $entity)
    {
        $form = $this->createForm(new creditosPersonalesType(), $entity, array(
            'action' => $this->generateUrl('creditosPersonales_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new creditosPersonales entity.
     *
     */
    public function newAction()
    {
        $entity = new creditosPersonales();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:creditosPersonales:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a creditosPersonales entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:creditosPersonales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find creditosPersonales entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:creditosPersonales:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing creditosPersonales entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:creditosPersonales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find creditosPersonales entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:creditosPersonales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a creditosPersonales entity.
    *
    * @param creditosPersonales $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(creditosPersonales $entity)
    {
        $form = $this->createForm(new creditosPersonalesType(), $entity, array(
            'action' => $this->generateUrl('creditosPersonales_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing creditosPersonales entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:creditosPersonales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find creditosPersonales entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('creditosPersonales_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:creditosPersonales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a creditosPersonales entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:creditosPersonales')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find creditosPersonales entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('creditosPersonales'));
    }

    /**
     * Creates a form to delete a creditosPersonales entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('creditosPersonales_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
