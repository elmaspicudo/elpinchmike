<?php

namespace HojaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HojaBundle\Entity\MarcoFamiliar;
use HojaBundle\Form\MarcoFamiliarType;

/**
 * MarcoFamiliar controller.
 *
 */
class MarcoFamiliarController extends Controller
{

    /**
     * Lists all MarcoFamiliar entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HojaBundle:MarcoFamiliar')->findAll();

        return $this->render('HojaBundle:MarcoFamiliar:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new MarcoFamiliar entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new MarcoFamiliar();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('marcofamiliar_show', array('id' => $entity->getId())));
        }

        return $this->render('HojaBundle:MarcoFamiliar:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a MarcoFamiliar entity.
     *
     * @param MarcoFamiliar $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(MarcoFamiliar $entity)
    {
        $form = $this->createForm(new MarcoFamiliarType(), $entity, array(
            'action' => $this->generateUrl('marcofamiliar_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new MarcoFamiliar entity.
     *
     */
    public function newAction()
    {
        $entity = new MarcoFamiliar();
        $form   = $this->createCreateForm($entity);

        return $this->render('HojaBundle:MarcoFamiliar:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a MarcoFamiliar entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:MarcoFamiliar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MarcoFamiliar entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:MarcoFamiliar:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing MarcoFamiliar entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:MarcoFamiliar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MarcoFamiliar entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:MarcoFamiliar:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a MarcoFamiliar entity.
    *
    * @param MarcoFamiliar $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(MarcoFamiliar $entity)
    {
        $form = $this->createForm(new MarcoFamiliarType(), $entity, array(
            'action' => $this->generateUrl('marcofamiliar_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing MarcoFamiliar entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:MarcoFamiliar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MarcoFamiliar entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('marcofamiliar_edit', array('id' => $id)));
        }

        return $this->render('HojaBundle:MarcoFamiliar:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a MarcoFamiliar entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HojaBundle:MarcoFamiliar')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MarcoFamiliar entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('marcofamiliar'));
    }

    /**
     * Creates a form to delete a MarcoFamiliar entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('marcofamiliar_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
