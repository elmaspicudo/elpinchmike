<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\egresos;
use EstudioBundle\Form\egresosType;

/**
 * egresos controller.
 *
 */
class egresosController extends Controller
{

    /**
     * Lists all egresos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:egresos')->findAll();

        return $this->render('EstudioBundle:egresos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new egresos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new egresos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('egresos_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:egresos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a egresos entity.
     *
     * @param egresos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(egresos $entity)
    {
        $form = $this->createForm(new egresosType(), $entity, array(
            'action' => $this->generateUrl('egresos_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new egresos entity.
     *
     */
    public function newAction()
    {
        $entity = new egresos();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:egresos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a egresos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:egresos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find egresos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:egresos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing egresos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:egresos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find egresos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:egresos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a egresos entity.
    *
    * @param egresos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(egresos $entity)
    {
        $form = $this->createForm(new egresosType(), $entity, array(
            'action' => $this->generateUrl('egresos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing egresos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:egresos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find egresos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('egresos_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:egresos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a egresos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:egresos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find egresos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('egresos'));
    }

    /**
     * Creates a form to delete a egresos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('egresos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
