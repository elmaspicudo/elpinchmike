<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\pasatiempos;
use EstudioBundle\Form\pasatiemposType;

/**
 * pasatiempos controller.
 *
 */
class pasatiemposController extends Controller
{

    /**
     * Lists all pasatiempos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:pasatiempos')->findAll();

        return $this->render('EstudioBundle:pasatiempos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new pasatiempos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new pasatiempos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pasatiempos_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:pasatiempos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a pasatiempos entity.
     *
     * @param pasatiempos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(pasatiempos $entity)
    {
        $form = $this->createForm(new pasatiemposType(), $entity, array(
            'action' => $this->generateUrl('pasatiempos_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new pasatiempos entity.
     *
     */
    public function newAction()
    {
        $entity = new pasatiempos();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:pasatiempos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pasatiempos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:pasatiempos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find pasatiempos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:pasatiempos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pasatiempos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:pasatiempos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find pasatiempos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:pasatiempos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a pasatiempos entity.
    *
    * @param pasatiempos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(pasatiempos $entity)
    {
        $form = $this->createForm(new pasatiemposType(), $entity, array(
            'action' => $this->generateUrl('pasatiempos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing pasatiempos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:pasatiempos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find pasatiempos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('pasatiempos_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:pasatiempos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a pasatiempos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:pasatiempos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find pasatiempos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pasatiempos'));
    }

    /**
     * Creates a form to delete a pasatiempos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pasatiempos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
