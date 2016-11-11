<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\tarjetaCredito;
use EstudioBundle\Form\tarjetaCreditoType;

/**
 * tarjetaCredito controller.
 *
 */
class tarjetaCreditoController extends Controller
{

    /**
     * Lists all tarjetaCredito entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:tarjetaCredito')->findAll();

        return $this->render('EstudioBundle:tarjetaCredito:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new tarjetaCredito entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new tarjetaCredito();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tarjetaCredito_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:tarjetaCredito:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a tarjetaCredito entity.
     *
     * @param tarjetaCredito $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(tarjetaCredito $entity)
    {
        $form = $this->createForm(new tarjetaCreditoType(), $entity, array(
            'action' => $this->generateUrl('tarjetaCredito_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new tarjetaCredito entity.
     *
     */
    public function newAction()
    {
        $entity = new tarjetaCredito();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:tarjetaCredito:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tarjetaCredito entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:tarjetaCredito')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tarjetaCredito entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:tarjetaCredito:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tarjetaCredito entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:tarjetaCredito')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tarjetaCredito entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:tarjetaCredito:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a tarjetaCredito entity.
    *
    * @param tarjetaCredito $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(tarjetaCredito $entity)
    {
        $form = $this->createForm(new tarjetaCreditoType(), $entity, array(
            'action' => $this->generateUrl('tarjetaCredito_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing tarjetaCredito entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:tarjetaCredito')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tarjetaCredito entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tarjetaCredito_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:tarjetaCredito:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a tarjetaCredito entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:tarjetaCredito')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find tarjetaCredito entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tarjetaCredito'));
    }

    /**
     * Creates a form to delete a tarjetaCredito entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tarjetaCredito_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
