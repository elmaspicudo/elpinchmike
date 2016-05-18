<?php

namespace fourMinds\Bundle\ConfiguracionBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use fourMinds\Bundle\ConfiguracionBundle\Entity\tiempoEtapa;
use fourMinds\Bundle\ConfiguracionBundle\Form\tiempoEtapaType;

/**
 * tiempoEtapa controller.
 *
 */
class tiempoEtapaController extends Controller
{

    /**
     * Lists all tiempoEtapa entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ConfiguracionBundle:tiempoEtapa')->findAll();

        return $this->render('ConfiguracionBundle:tiempoEtapa:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new tiempoEtapa entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new tiempoEtapa();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tiempoetapa_show', array('id' => $entity->getId())));
        }

        return $this->render('ConfiguracionBundle:tiempoEtapa:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a tiempoEtapa entity.
     *
     * @param tiempoEtapa $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(tiempoEtapa $entity)
    {
        $form = $this->createForm(new tiempoEtapaType(), $entity, array(
            'action' => $this->generateUrl('tiempoetapa_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new tiempoEtapa entity.
     *
     */
    public function newAction()
    {
        $entity = new tiempoEtapa();
        $form   = $this->createCreateForm($entity);

        return $this->render('ConfiguracionBundle:tiempoEtapa:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tiempoEtapa entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConfiguracionBundle:tiempoEtapa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiempoEtapa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConfiguracionBundle:tiempoEtapa:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tiempoEtapa entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConfiguracionBundle:tiempoEtapa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiempoEtapa entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConfiguracionBundle:tiempoEtapa:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a tiempoEtapa entity.
    *
    * @param tiempoEtapa $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(tiempoEtapa $entity)
    {
        $form = $this->createForm(new tiempoEtapaType(), $entity, array(
            'action' => $this->generateUrl('tiempoetapa_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing tiempoEtapa entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConfiguracionBundle:tiempoEtapa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiempoEtapa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tiempoetapa_edit', array('id' => $id)));
        }

        return $this->render('ConfiguracionBundle:tiempoEtapa:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a tiempoEtapa entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConfiguracionBundle:tiempoEtapa')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find tiempoEtapa entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tiempoetapa'));
    }

    /**
     * Creates a form to delete a tiempoEtapa entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tiempoetapa_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
