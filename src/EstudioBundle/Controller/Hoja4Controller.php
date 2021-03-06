<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\Hoja4;
use EstudioBundle\Form\Hoja4Type;

/**
 * Hoja4 controller.
 *
 */
class Hoja4Controller extends Controller
{

    /**
     * Lists all Hoja4 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:Hoja4')->findAll();
        $entitiesReferencia = $em->getRepository('EstudioBundle:ReferenciaPatrimonial')->findAll();
        $entitiesAutos = $em->getRepository('EstudioBundle:ReferenciaPatroimonialAutos')->findAll();

        return $this->render('EstudioBundle:Hoja4:index.html.twig', array(
            'entities' => $entities,
            'entitiesReferencia' => $entitiesReferencia,
            'entitiesAutos' => $entitiesAutos,
        ));
    }
    /**
     * Creates a new Hoja4 entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Hoja4();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hoja4_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:Hoja4:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Hoja4 entity.
     *
     * @param Hoja4 $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hoja4 $entity)
    {
        $form = $this->createForm(new Hoja4Type(), $entity, array(
            'action' => $this->generateUrl('hoja4_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hoja4 entity.
     *
     */
    public function newAction()
    {
        $entity = new Hoja4();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:Hoja4:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hoja4 entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Hoja4')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja4 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:Hoja4:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hoja4 entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Hoja4')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja4 entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:Hoja4:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Hoja4 entity.
    *
    * @param Hoja4 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hoja4 $entity)
    {
        $form = $this->createForm(new Hoja4Type(), $entity, array(
            'action' => $this->generateUrl('hoja4_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hoja4 entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Hoja4')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja4 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hoja4_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:Hoja4:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hoja4 entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:Hoja4')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hoja4 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hoja4'));
    }

    /**
     * Creates a form to delete a Hoja4 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hoja4_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
