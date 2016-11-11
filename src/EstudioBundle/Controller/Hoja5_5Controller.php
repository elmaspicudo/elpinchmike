<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\creditoAutomotriz;
use EstudioBundle\Form\creditoAutomotrizType;

/**
 * creditoAutomotriz controller.
 *
 */
class creditoAutomotrizController extends Controller
{

    /**
     * Lists all creditoAutomotriz entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:creditoAutomotriz')->findAll();

        return $this->render('EstudioBundle:creditoAutomotriz:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new creditoAutomotriz entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new creditoAutomotriz();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('creditoAutomotriz_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:creditoAutomotriz:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a creditoAutomotriz entity.
     *
     * @param creditoAutomotriz $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(creditoAutomotriz $entity)
    {
        $form = $this->createForm(new creditoAutomotrizType(), $entity, array(
            'action' => $this->generateUrl('creditoAutomotriz_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new creditoAutomotriz entity.
     *
     */
    public function newAction()
    {
        $entity = new creditoAutomotriz();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:creditoAutomotriz:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a creditoAutomotriz entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:creditoAutomotriz')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find creditoAutomotriz entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:creditoAutomotriz:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing creditoAutomotriz entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:creditoAutomotriz')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find creditoAutomotriz entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:creditoAutomotriz:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a creditoAutomotriz entity.
    *
    * @param creditoAutomotriz $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(creditoAutomotriz $entity)
    {
        $form = $this->createForm(new creditoAutomotrizType(), $entity, array(
            'action' => $this->generateUrl('creditoAutomotriz_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing creditoAutomotriz entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:creditoAutomotriz')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find creditoAutomotriz entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('creditoAutomotriz_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:creditoAutomotriz:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a creditoAutomotriz entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:creditoAutomotriz')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find creditoAutomotriz entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('creditoAutomotriz'));
    }

    /**
     * Creates a form to delete a creditoAutomotriz entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('creditoAutomotriz_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
