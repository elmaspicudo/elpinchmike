<?php

namespace HojaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HojaBundle\Entity\Hoja5;
use HojaBundle\Form\Hoja5Type;

/**
 * Hoja5 controller.
 *
 */
class Hoja5Controller extends Controller
{

    /**
     * Lists all Hoja5 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HojaBundle:Hoja5')->findAll();

        return $this->render('HojaBundle:Hoja5:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a datosp entity.
     *
     */
    public function showbysolicitudAction($solicitud)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Hoja5')->findOneBy(array('solicitud'=>$solicitud));

        if (!$entity) {
            $EntSolicitud=$em->getRepository('ConfiguracionBundle:Solicitud')->find($solicitud);
            $entity = new Hoja5();
            $entity->setSolicitud($EntSolicitud);
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hoja5_edit',array('id'=>$entity->getId())));
    }
    /**
     * Creates a new Hoja5 entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Hoja5();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('hoja5_show', array('id' => $entity->getId())));
        }

        return $this->render('HojaBundle:Hoja5:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Hoja5 entity.
     *
     * @param Hoja5 $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Hoja5 $entity)
    {
        $form = $this->createForm(new Hoja5Type(), $entity, array(
            'action' => $this->generateUrl('hoja5_create'),
            'method' => 'POST',
        ));

        ////$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Hoja5 entity.
     *
     */
    public function newAction()
    {
        $entity = new Hoja5();
        $form   = $this->createCreateForm($entity);

        return $this->render('HojaBundle:Hoja5:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Hoja5 entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Hoja5')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja5 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Hoja5:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Hoja5 entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Hoja5')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja5 entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Hoja5:new.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),            
        ));
    }

    /**
    * Creates a form to edit a Hoja5 entity.
    *
    * @param Hoja5 $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Hoja5 $entity)
    {
        $form = $this->createForm(new Hoja5Type(), $entity, array(
            'action' => $this->generateUrl('hoja5_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing Hoja5 entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Hoja5')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Hoja5 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            if ($editForm->get('Siguiente')->isClicked()) {
                 return $this->redirect($this->generateUrl('hoja6_solicitud', array('solicitud' => $entity->getSolicitud())));
            }
            return $this->redirect($this->generateUrl('Bienes_solicitud', array('solicitud' => $entity->getSolicitud())));
        }

        return $this->render('HojaBundle:Hoja5:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Hoja5 entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HojaBundle:Hoja5')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Hoja5 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('hoja5'));
    }

    /**
     * Creates a form to delete a Hoja5 entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hoja5_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
