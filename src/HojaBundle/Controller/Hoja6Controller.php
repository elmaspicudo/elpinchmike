<?php

namespace HojaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HojaBundle\Entity\Hoja6;
use HojaBundle\Form\Hoja6Type;

/**
 * Hoja6 controller.
 *
 */
class Hoja6Controller extends Controller
{

    /**
     * Lists all Hoja6 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HojaBundle:Hoja6')->findAll();

        return $this->render('HojaBundle:Hoja6:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Hoja6 entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Hoja6();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hoja6_show', array('id' => $entity->getId())));
        }

        return $this->render('HojaBundle:Hoja6:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Hoja6 entity.
     *
     * @param Hoja6 $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hoja6 $entity)
    {
        $form = $this->createForm(new Hoja6Type(), $entity, array(
            'action' => $this->generateUrl('hoja6_create'),
            'method' => 'POST',
        ));

        ////$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hoja6 entity.
     *
     */
    public function newAction()
    {
        $entity = new Hoja6();
        $form   = $this->createCreateForm($entity);

        return $this->render('HojaBundle:Hoja6:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hoja6 entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Hoja6')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja6 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Hoja6:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hoja6 entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Hoja6')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja6 entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Hoja6:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Hoja6 entity.
    *
    * @param Hoja6 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hoja6 $entity)
    {
        $form = $this->createForm(new Hoja6Type(), $entity, array(
            'action' => $this->generateUrl('hoja6_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hoja6 entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Hoja6')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja6 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hoja6_edit', array('id' => $id)));
        }

        return $this->render('HojaBundle:Hoja6:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hoja6 entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HojaBundle:Hoja6')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hoja6 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hoja6'));
    }

    /**
     * Creates a form to delete a Hoja6 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hoja6_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
