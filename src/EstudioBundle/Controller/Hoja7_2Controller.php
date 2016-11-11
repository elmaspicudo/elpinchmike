<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\referenciaVecinal;
use EstudioBundle\Form\referenciaVecinalType;

/**
 * referenciaVecinal controller.
 *
 */
class referenciaVecinalController extends Controller
{

    /**
     * Lists all referenciaVecinal entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:referenciaVecinal')->findAll();

        return $this->render('EstudioBundle:referenciaVecinal:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new referenciaVecinal entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new referenciaVecinal();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('referenciaVecinal_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:referenciaVecinal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a referenciaVecinal entity.
     *
     * @param referenciaVecinal $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(referenciaVecinal $entity)
    {
        $form = $this->createForm(new referenciaVecinalType(), $entity, array(
            'action' => $this->generateUrl('referenciaVecinal_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new referenciaVecinal entity.
     *
     */
    public function newAction()
    {
        $entity = new referenciaVecinal();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:referenciaVecinal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a referenciaVecinal entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:referenciaVecinal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find referenciaVecinal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:referenciaVecinal:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing referenciaVecinal entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:referenciaVecinal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find referenciaVecinal entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:referenciaVecinal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a referenciaVecinal entity.
    *
    * @param referenciaVecinal $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(referenciaVecinal $entity)
    {
        $form = $this->createForm(new referenciaVecinalType(), $entity, array(
            'action' => $this->generateUrl('referenciaVecinal_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing referenciaVecinal entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:referenciaVecinal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find referenciaVecinal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('referenciaVecinal_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:referenciaVecinal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a referenciaVecinal entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:referenciaVecinal')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find referenciaVecinal entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('referenciaVecinal'));
    }

    /**
     * Creates a form to delete a referenciaVecinal entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('referenciaVecinal_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
