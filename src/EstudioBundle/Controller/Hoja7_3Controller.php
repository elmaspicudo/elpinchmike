<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\saludHigiene;
use EstudioBundle\Form\saludHigieneType;

/**
 * saludHigiene controller.
 *
 */
class saludHigieneController extends Controller
{

    /**
     * Lists all saludHigiene entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:saludHigiene')->findAll();

        return $this->render('EstudioBundle:saludHigiene:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new saludHigiene entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new saludHigiene();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('saludHigiene_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:saludHigiene:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a saludHigiene entity.
     *
     * @param saludHigiene $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(saludHigiene $entity)
    {
        $form = $this->createForm(new saludHigieneType(), $entity, array(
            'action' => $this->generateUrl('saludHigiene_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new saludHigiene entity.
     *
     */
    public function newAction()
    {
        $entity = new saludHigiene();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:saludHigiene:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a saludHigiene entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:saludHigiene')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find saludHigiene entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:saludHigiene:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing saludHigiene entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:saludHigiene')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find saludHigiene entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:saludHigiene:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a saludHigiene entity.
    *
    * @param saludHigiene $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(saludHigiene $entity)
    {
        $form = $this->createForm(new saludHigieneType(), $entity, array(
            'action' => $this->generateUrl('saludHigiene_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing saludHigiene entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:saludHigiene')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find saludHigiene entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('saludHigiene_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:saludHigiene:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a saludHigiene entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:saludHigiene')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find saludHigiene entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('saludHigiene'));
    }

    /**
     * Creates a form to delete a saludHigiene entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('saludHigiene_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
