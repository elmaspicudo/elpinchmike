<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\ReferenciaPatroimonialAutos;
use EstudioBundle\Form\ReferenciaPatroimonialAutosType;

/**
 * ReferenciaPatroimonialAutos controller.
 *
 */
class ReferenciaPatroimonialAutosController extends Controller
{

    /**
     * Lists all ReferenciaPatroimonialAutos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:ReferenciaPatroimonialAutos')->findAll();

        return $this->render('EstudioBundle:ReferenciaPatroimonialAutos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ReferenciaPatroimonialAutos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ReferenciaPatroimonialAutos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('referenciapatroimonialautos_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:ReferenciaPatroimonialAutos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ReferenciaPatroimonialAutos entity.
     *
     * @param ReferenciaPatroimonialAutos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ReferenciaPatroimonialAutos $entity)
    {
        $form = $this->createForm(new ReferenciaPatroimonialAutosType(), $entity, array(
            'action' => $this->generateUrl('referenciapatroimonialautos_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ReferenciaPatroimonialAutos entity.
     *
     */
    public function newAction()
    {
        $entity = new ReferenciaPatroimonialAutos();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:ReferenciaPatroimonialAutos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ReferenciaPatroimonialAutos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:ReferenciaPatroimonialAutos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ReferenciaPatroimonialAutos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:ReferenciaPatroimonialAutos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ReferenciaPatroimonialAutos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:ReferenciaPatroimonialAutos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ReferenciaPatroimonialAutos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:ReferenciaPatroimonialAutos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ReferenciaPatroimonialAutos entity.
    *
    * @param ReferenciaPatroimonialAutos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ReferenciaPatroimonialAutos $entity)
    {
        $form = $this->createForm(new ReferenciaPatroimonialAutosType(), $entity, array(
            'action' => $this->generateUrl('referenciapatroimonialautos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing ReferenciaPatroimonialAutos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:ReferenciaPatroimonialAutos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ReferenciaPatroimonialAutos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('referenciapatroimonialautos_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:ReferenciaPatroimonialAutos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ReferenciaPatroimonialAutos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:ReferenciaPatroimonialAutos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ReferenciaPatroimonialAutos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('referenciapatroimonialautos'));
    }

    /**
     * Creates a form to delete a ReferenciaPatroimonialAutos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('referenciapatroimonialautos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
