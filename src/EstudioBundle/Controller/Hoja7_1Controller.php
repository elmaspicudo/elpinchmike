<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\referenciaFamiliar;
use EstudioBundle\Form\referenciaFamiliarType;

/**
 * referenciaFamiliar controller.
 *
 */
class referenciaFamiliarController extends Controller
{

    /**
     * Lists all referenciaFamiliar entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:referenciaFamiliar')->findAll();

        return $this->render('EstudioBundle:referenciaFamiliar:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new referenciaFamiliar entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new referenciaFamiliar();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('referenciaFamiliar_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:referenciaFamiliar:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a referenciaFamiliar entity.
     *
     * @param referenciaFamiliar $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(referenciaFamiliar $entity)
    {
        $form = $this->createForm(new referenciaFamiliarType(), $entity, array(
            'action' => $this->generateUrl('referenciaFamiliar_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new referenciaFamiliar entity.
     *
     */
    public function newAction()
    {
        $entity = new referenciaFamiliar();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:referenciaFamiliar:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a referenciaFamiliar entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:referenciaFamiliar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find referenciaFamiliar entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:referenciaFamiliar:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing referenciaFamiliar entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:referenciaFamiliar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find referenciaFamiliar entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:referenciaFamiliar:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a referenciaFamiliar entity.
    *
    * @param referenciaFamiliar $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(referenciaFamiliar $entity)
    {
        $form = $this->createForm(new referenciaFamiliarType(), $entity, array(
            'action' => $this->generateUrl('referenciaFamiliar_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing referenciaFamiliar entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:referenciaFamiliar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find referenciaFamiliar entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('referenciaFamiliar_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:referenciaFamiliar:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a referenciaFamiliar entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:referenciaFamiliar')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find referenciaFamiliar entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('referenciaFamiliar'));
    }

    /**
     * Creates a form to delete a referenciaFamiliar entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('referenciaFamiliar_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
