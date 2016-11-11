<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\CreditoH5;
use EstudioBundle\Form\CreditoH5Type;

/**
 * CreditoH5 controller.
 *
 */
class CreditoH5Controller extends Controller
{

    /**
     * Lists all CreditoH5 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:CreditoH5')->findAll();

        return $this->render('EstudioBundle:CreditoH5:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CreditoH5 entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CreditoH5();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('creditoh5_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:CreditoH5:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a CreditoH5 entity.
     *
     * @param CreditoH5 $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(CreditoH5 $entity)
    {
        $form = $this->createForm(new CreditoH5Type(), $entity, array(
            'action' => $this->generateUrl('creditoh5_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CreditoH5 entity.
     *
     */
    public function newAction()
    {
        $entity = new CreditoH5();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:CreditoH5:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CreditoH5 entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:CreditoH5')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CreditoH5 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:CreditoH5:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CreditoH5 entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:CreditoH5')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CreditoH5 entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:CreditoH5:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CreditoH5 entity.
    *
    * @param CreditoH5 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CreditoH5 $entity)
    {
        $form = $this->createForm(new CreditoH5Type(), $entity, array(
            'action' => $this->generateUrl('creditoh5_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing CreditoH5 entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:CreditoH5')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CreditoH5 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('creditoh5_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:CreditoH5:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CreditoH5 entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:CreditoH5')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CreditoH5 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('creditoh5'));
    }

    /**
     * Creates a form to delete a CreditoH5 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('creditoh5_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
