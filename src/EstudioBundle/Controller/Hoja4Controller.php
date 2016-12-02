<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\Bienes;
use EstudioBundle\Form\BienesType;

/**
 * Bienes controller.
 *
 */
class BienesController extends Controller
{

    /**
     * Lists all Bienes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:Bienes')->findAll();
        $entitiesReferencia = $em->getRepository('EstudioBundle:ReferenciaPatrimonial')->findAll();
        $entitiesAutos = $em->getRepository('EstudioBundle:ReferenciaPatroimonialAutos')->findAll();

        return $this->render('EstudioBundle:Bienes:index.html.twig', array(
            'entities' => $entities,
            'entitiesReferencia' => $entitiesReferencia,
            'entitiesAutos' => $entitiesAutos,
        ));
    }
    /**
     * Creates a new Bienes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Bienes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Bienes_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:Bienes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Bienes entity.
     *
     * @param Bienes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Bienes $entity)
    {
        $form = $this->createForm(new BienesType(), $entity, array(
            'action' => $this->generateUrl('Bienes_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Bienes entity.
     *
     */
    public function newAction()
    {
        $entity = new Bienes();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:Bienes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Bienes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Bienes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bienes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:Bienes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Bienes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Bienes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bienes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:Bienes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Bienes entity.
    *
    * @param Bienes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Bienes $entity)
    {
        $form = $this->createForm(new BienesType(), $entity, array(
            'action' => $this->generateUrl('Bienes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing Bienes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Bienes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bienes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('Bienes_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:Bienes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Bienes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:Bienes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Bienes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Bienes'));
    }

    /**
     * Creates a form to delete a Bienes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Bienes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
