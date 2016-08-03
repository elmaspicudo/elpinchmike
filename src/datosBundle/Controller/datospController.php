<?php

namespace datosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use datosBundle\Entity\datosp;
use datosBundle\Form\datospType;

/**
 * datosp controller.
 *
 */
class datospController extends Controller
{

    /**
     * Lists all datosp entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('datosBundle:datosp')->findAll();

        return $this->render('datosBundle:datosp:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new datosp entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new datosp();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('datosp_show', array('id' => $entity->getId())));
        }

        return $this->render('datosBundle:datosp:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a datosp entity.
     *
     * @param datosp $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(datosp $entity)
    {
        $form = $this->createForm(new datospType(), $entity, array(
            'action' => $this->generateUrl('datosp_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new datosp entity.
     *
     */
    public function newAction()
    {
        $entity = new datosp();
        $form   = $this->createCreateForm($entity);

        return $this->render('datosBundle:datosp:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a datosp entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:datosp')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find datosp entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('datosBundle:datosp:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }


   /**
     * Finds and displays a datosp entity.
     *
     */
    public function showbysolicitudAction($solicitud)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:datosp')->findOneBy(array('solicitud'=>$solicitud));

        if (!$entity) {
            $EntSolicitud=$em->getRepository('ConfiguracionBundle:Solicitud')->find($solicitud);
            $entity = new datosp();
            $entity->setSolicitud($EntSolicitud);
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('datosp_edit',array('id'=>$entity->getId())));
    }
    /**
     * Displays a form to edit an existing datosp entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:datosp')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find datosp entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('datosBundle:datosp:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a datosp entity.
    *
    * @param datosp $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(datosp $entity)
    {
        $form = $this->createForm(new datospType(), $entity, array(
            'action' => $this->generateUrl('datosp_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing datosp entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:datosp')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find datosp entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('datosp_edit', array('id' => $id)));
        }

        return $this->render('datosBundle:datosp:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a datosp entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('datosBundle:datosp')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find datosp entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('datosp'));
    }

    /**
     * Creates a form to delete a datosp entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('datosp_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
