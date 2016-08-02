<?php

namespace HojaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HojaBundle\Entity\Hoja2;
use HojaBundle\Form\Hoja2Type;

/**
 * Hoja2 controller.
 *
 */
class Hoja2Controller extends Controller
{

    /**
     * Lists all Hoja2 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HojaBundle:Hoja2')->findAll();

        return $this->render('HojaBundle:Hoja2:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Hoja2 entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Hoja2();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hoja2_show', array('id' => $entity->getId())));
        }

        return $this->render('HojaBundle:Hoja2:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Hoja2 entity.
     *
     * @param Hoja2 $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hoja2 $entity)
    {
        $form = $this->createForm(new Hoja2Type(), $entity, array(
            'action' => $this->generateUrl('hoja2_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hoja2 entity.
     *
     */
    public function newAction()
    {
        $entity = new Hoja2();
        $form   = $this->createCreateForm($entity);

        return $this->render('HojaBundle:Hoja2:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hoja2 entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Hoja2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja2 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Hoja2:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hoja2 entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Hoja2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja2 entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Hoja2:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Hoja2 entity.
    *
    * @param Hoja2 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hoja2 $entity)
    {
        $form = $this->createForm(new Hoja2Type(), $entity, array(
            'action' => $this->generateUrl('hoja2_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Hoja2 entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Hoja2')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja2 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('hoja2_edit', array('id' => $id)));
        }

        return $this->render('HojaBundle:Hoja2:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hoja2 entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HojaBundle:Hoja2')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hoja2 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hoja2'));
    }

    /**
     * Creates a form to delete a Hoja2 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hoja2_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
