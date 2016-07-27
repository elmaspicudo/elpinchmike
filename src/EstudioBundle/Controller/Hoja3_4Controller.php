<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\Hoja3_4;
use EstudioBundle\Form\Hoja3_4Type;

/**
 * Hoja3_4 controller.
 *
 */
class Hoja3_4Controller extends Controller
{

    /**
     * Lists all Hoja3_4 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:Hoja3_4')->findAll();

        return $this->render('EstudioBundle:Hoja3_4:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Hoja3_4 entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Hoja3_4();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hoja3_4_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:Hoja3_4:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Hoja3_4 entity.
     *
     * @param Hoja3_4 $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hoja3_4 $entity)
    {
        $form = $this->createForm(new Hoja3_4Type(), $entity, array(
            'action' => $this->generateUrl('hoja3_4_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hoja3_4 entity.
     *
     */
    public function newAction()
    {
        $entity = new Hoja3_4();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:Hoja3_4:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hoja3_4 entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Hoja3_4')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja3_4 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:Hoja3_4:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hoja3_4 entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Hoja3_4')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja3_4 entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:Hoja3_4:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Hoja3_4 entity.
    *
    * @param Hoja3_4 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hoja3_4 $entity)
    {
        $form = $this->createForm(new Hoja3_4Type(), $entity, array(
            'action' => $this->generateUrl('hoja3_4_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hoja3_4 entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:Hoja3_4')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja3_4 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hoja3_4_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:Hoja3_4:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hoja3_4 entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:Hoja3_4')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hoja3_4 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hoja3_4'));
    }

    /**
     * Creates a form to delete a Hoja3_4 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hoja3_4_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
