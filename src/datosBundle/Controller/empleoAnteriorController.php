<?php

namespace datosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use datosBundle\Entity\empleoAnterior;
use datosBundle\Form\empleoAnteriorType;

/**
 * empleoAnterior controller.
 *
 */
class empleoAnteriorController extends Controller
{

    /**
     * Lists all empleoAnterior entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('datosBundle:empleoAnterior')->findAll();

        return $this->render('datosBundle:empleoAnterior:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new empleoAnterior entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new empleoAnterior();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('empleoanterior_show', array('id' => $entity->getId())));
        }

        return $this->render('datosBundle:empleoAnterior:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a empleoAnterior entity.
     *
     * @param empleoAnterior $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(empleoAnterior $entity)
    {
        $form = $this->createForm(new empleoAnteriorType(), $entity, array(
            'action' => $this->generateUrl('empleoanterior_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new empleoAnterior entity.
     *
     */
    public function newAction()
    {
        $entity = new empleoAnterior();
        $form   = $this->createCreateForm($entity);

        return $this->render('datosBundle:empleoAnterior:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a empleoAnterior entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:empleoAnterior')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find empleoAnterior entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('datosBundle:empleoAnterior:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }


      /**
     * Finds and displays a anteriorEmpleo entity.
     *
     */
    public function showbysolicitudAction($solicitud)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:empleoAnterior')->findOneBy(array('solicitud'=>$solicitud));

        if (!$entity) {
            $EntSolicitud=$em->getRepository('ConfiguracionBundle:Solicitud')->find($solicitud);
            $entity = new empleoAnterior();
            $entity->setSolicitud($EntSolicitud);
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('empleoanterior_edit',array('id'=>$entity->getId())));
    }
    /**
     * Displays a form to edit an existing empleoAnterior entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:empleoAnterior')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find empleoAnterior entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('datosBundle:empleoAnterior:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a empleoAnterior entity.
    *
    * @param empleoAnterior $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(empleoAnterior $entity)
    {
        $form = $this->createForm(new empleoAnteriorType(), $entity, array(
            'action' => $this->generateUrl('empleoanterior_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //

        return $form;
    }
    /**
     * Edits an existing empleoAnterior entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:empleoAnterior')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find empleoAnterior entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('empleoanterior_edit', array('id' => $id)));
        }

        return $this->render('datosBundle:empleoAnterior:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a empleoAnterior entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('datosBundle:empleoAnterior')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find empleoAnterior entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('empleoanterior'));
    }

    /**
     * Creates a form to delete a empleoAnterior entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('empleoanterior_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
