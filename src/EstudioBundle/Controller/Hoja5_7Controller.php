<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\otrosServicios;
use EstudioBundle\Form\otrosServiciosType;

/**
 * otrosServicios controller.
 *
 */
class otrosServiciosController extends Controller
{

    /**
     * Lists all otrosServicios entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:otrosServicios')->findAll();

        return $this->render('EstudioBundle:otrosServicios:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new otrosServicios entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new otrosServicios();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('otrosServicios_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:otrosServicios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a otrosServicios entity.
     *
     * @param otrosServicios $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(otrosServicios $entity)
    {
        $form = $this->createForm(new otrosServiciosType(), $entity, array(
            'action' => $this->generateUrl('otrosServicios_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new otrosServicios entity.
     *
     */
    public function newAction()
    {
        $entity = new otrosServicios();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:otrosServicios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a otrosServicios entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:otrosServicios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find otrosServicios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:otrosServicios:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing otrosServicios entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:otrosServicios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find otrosServicios entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:otrosServicios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a otrosServicios entity.
    *
    * @param otrosServicios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(otrosServicios $entity)
    {
        $form = $this->createForm(new otrosServiciosType(), $entity, array(
            'action' => $this->generateUrl('otrosServicios_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing otrosServicios entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:otrosServicios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find otrosServicios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('otrosServicios_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:otrosServicios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a otrosServicios entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:otrosServicios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find otrosServicios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('otrosServicios'));
    }

    /**
     * Creates a form to delete a otrosServicios entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('otrosServicios_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
