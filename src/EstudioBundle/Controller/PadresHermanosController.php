<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\PadresHermanos;
use EstudioBundle\Form\PadresHermanosType;

/**
 * PadresHermanos controller.
 *
 */
class PadresHermanosController extends Controller
{

    /**
     * Lists all PadresHermanos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:PadresHermanos')->findAll();

        return $this->render('EstudioBundle:PadresHermanos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new PadresHermanos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PadresHermanos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('padreshermanos_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:PadresHermanos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a PadresHermanos entity.
     *
     * @param PadresHermanos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PadresHermanos $entity)
    {
        $form = $this->createForm(new PadresHermanosType(), $entity, array(
            'action' => $this->generateUrl('padreshermanos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PadresHermanos entity.
     *
     */
    public function newAction()
    {
        $entity = new PadresHermanos();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:PadresHermanos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PadresHermanos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:PadresHermanos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PadresHermanos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:PadresHermanos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PadresHermanos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:PadresHermanos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PadresHermanos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:PadresHermanos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PadresHermanos entity.
    *
    * @param PadresHermanos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PadresHermanos $entity)
    {
        $form = $this->createForm(new PadresHermanosType(), $entity, array(
            'action' => $this->generateUrl('padreshermanos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PadresHermanos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:PadresHermanos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PadresHermanos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('padreshermanos_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:PadresHermanos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PadresHermanos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:PadresHermanos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PadresHermanos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('padreshermanos'));
    }

    /**
     * Creates a form to delete a PadresHermanos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('padreshermanos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
