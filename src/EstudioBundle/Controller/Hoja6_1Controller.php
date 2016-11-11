<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\referenciasLaborales;
use EstudioBundle\Form\referenciasLaboralesType;

/**
 * referenciasLaborales controller.
 *
 */
class referenciasLaboralesController extends Controller
{

    /**
     * Lists all referenciasLaborales entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:referenciasLaborales')->findAll();

        return $this->render('EstudioBundle:referenciasLaborales:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new referenciasLaborales entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new referenciasLaborales();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('referenciasLaborales_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:referenciasLaborales:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a referenciasLaborales entity.
     *
     * @param referenciasLaborales $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(referenciasLaborales $entity)
    {
        $form = $this->createForm(new referenciasLaboralesType(), $entity, array(
            'action' => $this->generateUrl('referenciasLaborales_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new referenciasLaborales entity.
     *
     */
    public function newAction()
    {
        $entity = new referenciasLaborales();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:referenciasLaborales:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a referenciasLaborales entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:referenciasLaborales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find referenciasLaborales entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:referenciasLaborales:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing referenciasLaborales entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:referenciasLaborales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find referenciasLaborales entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:referenciasLaborales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a referenciasLaborales entity.
    *
    * @param referenciasLaborales $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(referenciasLaborales $entity)
    {
        $form = $this->createForm(new referenciasLaboralesType(), $entity, array(
            'action' => $this->generateUrl('referenciasLaborales_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing referenciasLaborales entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:referenciasLaborales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find referenciasLaborales entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('referenciasLaborales_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:referenciasLaborales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a referenciasLaborales entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:referenciasLaborales')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find referenciasLaborales entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('referenciasLaborales'));
    }

    /**
     * Creates a form to delete a referenciasLaborales entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('referenciasLaborales_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
