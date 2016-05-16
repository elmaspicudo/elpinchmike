<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\EsposaHijos;
use EstudioBundle\Form\EsposaHijosType;

/**
 * EsposaHijos controller.
 *
 */
class EsposaHijosController extends Controller
{

    /**
     * Lists all EsposaHijos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:EsposaHijos')->findAll();

        return $this->render('EstudioBundle:EsposaHijos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new EsposaHijos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new EsposaHijos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('esposahijos_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:EsposaHijos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a EsposaHijos entity.
     *
     * @param EsposaHijos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(EsposaHijos $entity)
    {
        $form = $this->createForm(new EsposaHijosType(), $entity, array(
            'action' => $this->generateUrl('esposahijos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new EsposaHijos entity.
     *
     */
    public function newAction()
    {
        $entity = new EsposaHijos();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:EsposaHijos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EsposaHijos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:EsposaHijos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EsposaHijos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:EsposaHijos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EsposaHijos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:EsposaHijos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EsposaHijos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:EsposaHijos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a EsposaHijos entity.
    *
    * @param EsposaHijos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(EsposaHijos $entity)
    {
        $form = $this->createForm(new EsposaHijosType(), $entity, array(
            'action' => $this->generateUrl('esposahijos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing EsposaHijos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:EsposaHijos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EsposaHijos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('esposahijos_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:EsposaHijos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a EsposaHijos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:EsposaHijos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EsposaHijos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('esposahijos'));
    }

    /**
     * Creates a form to delete a EsposaHijos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('esposahijos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
