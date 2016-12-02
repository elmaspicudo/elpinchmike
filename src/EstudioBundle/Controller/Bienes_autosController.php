<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\Bienes_autos;
use EstudioBundle\Form\Bienes_autosType;

/**
 * Bienes_autos controller.
 *
 */
class Bienes_autosController extends Controller
{

    /**
     * Lists all Bienes_autos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:Bienes_autos')->findAll();

        return $this->render('EstudioBundle:Bienes_autos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Bienes_autos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Bienes_autos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Bienes_autos_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:Bienes_autos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Bienes_autos entity.
     *
     * @param Bienes_autos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Bienes_autos $entity)
    {
        $form = $this->createForm(new Bienes_autosType(), $entity, array(
            'action' => $this->generateUrl('Bienes_autos_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Bienes_autos entity.
     *
     */
    public function newAction()
    {
        $entity = new Bienes_autos();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:Bienes_autos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Bienes_autos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Bienes_autos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bienes_autos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:Bienes_autos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Bienes_autos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Bienes_autos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bienes_autos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:Bienes_autos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Bienes_autos entity.
    *
    * @param Bienes_autos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Bienes_autos $entity)
    {
        $form = $this->createForm(new Bienes_autosType(), $entity, array(
            'action' => $this->generateUrl('Bienes_autos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing Bienes_autos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Bienes_autos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bienes_autos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('Bienes_autos_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:Bienes_autos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Bienes_autos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:Bienes_autos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Bienes_autos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Bienes_autos'));
    }

    /**
     * Creates a form to delete a Bienes_autos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Bienes_autos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
