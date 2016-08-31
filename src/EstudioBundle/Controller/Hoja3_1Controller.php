<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\Hoja3_1;
use EstudioBundle\Form\Hoja3_1Type;

/**
 * Hoja3_1 controller.
 *
 */
class Hoja3_1Controller extends Controller
{

    /**
     * Lists all Hoja3_1 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:Hoja3_1')->findAll();

        return $this->render('EstudioBundle:Hoja3_1:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Hoja3_1 entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Hoja3_1();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hoja3_1_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:Hoja3_1:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Hoja3_1 entity.
     *
     * @param Hoja3_1 $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hoja3_1 $entity)
    {
        $form = $this->createForm(new Hoja3_1Type(), $entity, array(
            'action' => $this->generateUrl('hoja3_1_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hoja3_1 entity.
     *
     */
    public function newAction()
    {
        $entity = new Hoja3_1();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:Hoja3_1:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hoja3_1 entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Hoja3_1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja3_1 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:Hoja3_1:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hoja3_1 entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Hoja3_1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja3_1 entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:Hoja3_1:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Hoja3_1 entity.
    *
    * @param Hoja3_1 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hoja3_1 $entity)
    {
        $form = $this->createForm(new Hoja3_1Type(), $entity, array(
            'action' => $this->generateUrl('hoja3_1_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hoja3_1 entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Hoja3_1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja3_1 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hoja3_1_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:Hoja3_1:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hoja3_1 entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:Hoja3_1')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hoja3_1 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hoja3_1'));
    }

    /**
     * Creates a form to delete a Hoja3_1 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hoja3_1_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
