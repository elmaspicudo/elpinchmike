<?php

namespace HojaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HojaBundle\Entity\Referencia_laboral;
use HojaBundle\Form\Referencia_laboralType;

/**
 * Referencia_laboral controller.
 *
 */
class Referencia_laboralController extends Controller
{

    /**
     * Lists all Referencia_laboral entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HojaBundle:Referencia_laboral')->findAll();

        return $this->render('HojaBundle:Referencia_laboral:index.html.twig', array(
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

        $entity = $em->getRepository('HojaBundle:Referencia_laboral')->findOneBy(array('solicitud'=>$solicitud));

        if (!$entity) {
            $EntSolicitud=$em->getRepository('ConfiguracionBundle:Solicitud')->find($solicitud);
            $entity = new Referencia_laboral();
            $entity->setSolicitud($EntSolicitud);
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Referencia_laboral_edit',array('id'=>$entity->getId())));
    }
    /**
     * Creates a new Referencia_laboral entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Referencia_laboral();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Referencia_laboral_show', array('id' => $entity->getId())));
        }

        return $this->render('HojaBundle:Referencia_laboral:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Referencia_laboral entity.
     *
     * @param Referencia_laboral $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Referencia_laboral $entity)
    {
        $form = $this->createForm(new Referencia_laboralType(), $entity, array(
            'action' => $this->generateUrl('Referencia_laboral_create'),
            'method' => 'POST',
        ));

        ////$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Referencia_laboral entity.
     *
     */
    public function newAction()
    {
        $entity = new Referencia_laboral();
        $form   = $this->createCreateForm($entity);

        return $this->render('HojaBundle:Referencia_laboral:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Referencia_laboral entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Referencia_laboral')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Referencia_laboral entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Referencia_laboral:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Referencia_laboral entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Referencia_laboral')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Referencia_laboral entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Referencia_laboral:new.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Referencia_laboral entity.
    *
    * @param Referencia_laboral $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Referencia_laboral $entity)
    {
        $form = $this->createForm(new Referencia_laboralType(), $entity, array(
            'action' => $this->generateUrl('Referencia_laboral_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing Referencia_laboral entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Referencia_laboral')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Referencia_laboral entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            if ($editForm->get('Siguiente')->isClicked()) {
                 return $this->redirect($this->generateUrl('Referencia_Personal_solicitud', array('solicitud' => $entity->getSolicitud())));
            }
            return $this->redirect($this->generateUrl('Finanzas_solicitud', array('solicitud' => $entity->getSolicitud())));
        }

        return $this->render('HojaBundle:Referencia_laboral:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Referencia_laboral entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HojaBundle:Referencia_laboral')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Referencia_laboral entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Referencia_laboral'));
    }

    /**
     * Creates a form to delete a Referencia_laboral entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Referencia_laboral_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
