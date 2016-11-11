<?php

namespace fourMinds\Bundle\ConfiguracionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use fourMinds\Bundle\ConfiguracionBundle\Entity\horasLaborales;
use fourMinds\Bundle\ConfiguracionBundle\Form\horasLaboralesType;

/**
 * horasLaborales controller.
 *
 */
class horasLaboralesController extends Controller
{

    /**
     * Lists all horasLaborales entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ConfiguracionBundle:horasLaborales')->findAll();

        return $this->render('ConfiguracionBundle:horasLaborales:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new horasLaborales entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new horasLaborales();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('horaslaborales_show', array('id' => $entity->getId())));
        }

        return $this->render('ConfiguracionBundle:horasLaborales:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a horasLaborales entity.
     *
     * @param horasLaborales $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(horasLaborales $entity)
    {
        $form = $this->createForm(new horasLaboralesType(), $entity, array(
            'action' => $this->generateUrl('horaslaborales_create'),
            'method' => 'POST',
        ));

        ////$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new horasLaborales entity.
     *
     */
    public function newAction()
    {
        $entity = new horasLaborales();
        $form   = $this->createCreateForm($entity);

        return $this->render('ConfiguracionBundle:horasLaborales:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a horasLaborales entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConfiguracionBundle:horasLaborales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find horasLaborales entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConfiguracionBundle:horasLaborales:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing horasLaborales entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConfiguracionBundle:horasLaborales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find horasLaborales entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConfiguracionBundle:horasLaborales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a horasLaborales entity.
    *
    * @param horasLaborales $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(horasLaborales $entity)
    {
        $form = $this->createForm(new horasLaboralesType(), $entity, array(
            'action' => $this->generateUrl('horaslaborales_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //

        return $form;
    }
    /**
     * Edits an existing horasLaborales entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConfiguracionBundle:horasLaborales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find horasLaborales entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('horaslaborales_edit', array('id' => $id)));
        }

        return $this->render('ConfiguracionBundle:horasLaborales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a horasLaborales entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConfiguracionBundle:horasLaborales')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find horasLaborales entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('horaslaborales'));
    }

    /**
     * Creates a form to delete a horasLaborales entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('horaslaborales_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
