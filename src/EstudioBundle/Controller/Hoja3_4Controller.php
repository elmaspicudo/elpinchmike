<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\MarcoFamiliar_4;
use EstudioBundle\Form\MarcoFamiliarType;

/**
 * MarcoFamiliar_4 controller.
 *
 */
class MarcoFamiliar_4Controller extends Controller
{

    /**
     * Lists all MarcoFamiliar_4 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:MarcoFamiliar_4')->findAll();

        return $this->render('EstudioBundle:MarcoFamiliar_4:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new MarcoFamiliar_4 entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new MarcoFamiliar_4();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('MarcoFamiliar_4_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:MarcoFamiliar_4:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a MarcoFamiliar_4 entity.
     *
     * @param MarcoFamiliar_4 $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(MarcoFamiliar_4 $entity)
    {
        $form = $this->createForm(new MarcoFamiliarType(), $entity, array(
            'action' => $this->generateUrl('MarcoFamiliar_4_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new MarcoFamiliar_4 entity.
     *
     */
    public function newAction()
    {
        $entity = new MarcoFamiliar_4();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:MarcoFamiliar_4:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a MarcoFamiliar_4 entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:MarcoFamiliar_4')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MarcoFamiliar_4 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:MarcoFamiliar_4:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing MarcoFamiliar_4 entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:MarcoFamiliar_4')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MarcoFamiliar_4 entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:MarcoFamiliar_4:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a MarcoFamiliar_4 entity.
    *
    * @param MarcoFamiliar_4 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(MarcoFamiliar_4 $entity)
    {
        $form = $this->createForm(new MarcoFamiliarType(), $entity, array(
            'action' => $this->generateUrl('MarcoFamiliar_4_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing MarcoFamiliar_4 entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:MarcoFamiliar_4')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MarcoFamiliar_4 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('MarcoFamiliar_4_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:MarcoFamiliar_4:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a MarcoFamiliar_4 entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:MarcoFamiliar_4')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MarcoFamiliar_4 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('MarcoFamiliar_4'));
    }

    /**
     * Creates a form to delete a MarcoFamiliar_4 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('MarcoFamiliar_4_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
