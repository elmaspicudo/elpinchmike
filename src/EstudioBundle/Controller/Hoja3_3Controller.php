<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\marcoFamiliar;
use EstudioBundle\Form\marcoFamiliarType;

/**
 * marcoFamiliar controller.
 *
 */
class marcoFamiliarController extends Controller
{

    /**
     * Lists all marcoFamiliar entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:marcoFamiliar')->findAll();

        return $this->render('EstudioBundle:marcoFamiliar:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new marcoFamiliar entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new marcoFamiliar();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('marcoFamiliar_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:marcoFamiliar:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a marcoFamiliar entity.
     *
     * @param marcoFamiliar $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(marcoFamiliar $entity)
    {
        $form = $this->createForm(new marcoFamiliarType(), $entity, array(
            'action' => $this->generateUrl('marcoFamiliar_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new marcoFamiliar entity.
     *
     */
    public function newAction()
    {
        $entity = new marcoFamiliar();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:marcoFamiliar:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a marcoFamiliar entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:marcoFamiliar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find marcoFamiliar entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:marcoFamiliar:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing marcoFamiliar entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:marcoFamiliar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find marcoFamiliar entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:marcoFamiliar:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a marcoFamiliar entity.
    *
    * @param marcoFamiliar $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(marcoFamiliar $entity)
    {
        $form = $this->createForm(new marcoFamiliarType(), $entity, array(
            'action' => $this->generateUrl('marcoFamiliar_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing marcoFamiliar entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:marcoFamiliar')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find marcoFamiliar entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('marcoFamiliar_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:marcoFamiliar:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a marcoFamiliar entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:marcoFamiliar')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find marcoFamiliar entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('marcoFamiliar'));
    }

    /**
     * Creates a form to delete a marcoFamiliar entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('marcoFamiliar_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
