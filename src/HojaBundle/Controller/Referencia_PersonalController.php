<?php

namespace HojaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HojaBundle\Entity\Referencia_Personal;
use HojaBundle\Form\Referencia_PersonalType;

/**
 * Referencia_Personal controller.
 *
 */
class Referencia_PersonalController extends Controller
{

    /**
     * Lists all Referencia_Personal entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HojaBundle:Referencia_Personal')->findAll();

        return $this->render('HojaBundle:Referencia_Personal:index.html.twig', array(
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

        $entity = $em->getRepository('HojaBundle:Referencia_Personal')->findOneBy(array('solicitud'=>$solicitud));

        if (!$entity) {
            $EntSolicitud=$em->getRepository('ConfiguracionBundle:Solicitud')->find($solicitud);
            $entity = new Referencia_Personal();
            $entity->setSolicitud($EntSolicitud);
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Referencia_Personal_edit',array('id'=>$entity->getId())));
    }
    /**
     * Creates a new Referencia_Personal entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Referencia_Personal();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Referencia_Personal_show', array('id' => $entity->getId())));
        }

        return $this->render('HojaBundle:Referencia_Personal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Referencia_Personal entity.
     *
     * @param Referencia_Personal $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Referencia_Personal $entity)
    {
        $form = $this->createForm(new Referencia_PersonalType(), $entity, array(
            'action' => $this->generateUrl('Referencia_Personal_create'),
            'method' => 'POST',
        ));

        ////$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Referencia_Personal entity.
     *
     */
    public function newAction()
    {
        $entity = new Referencia_Personal();
        $form   = $this->createCreateForm($entity);

        return $this->render('HojaBundle:Referencia_Personal:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Referencia_Personal entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Referencia_Personal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Referencia_Personal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Referencia_Personal:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Referencia_Personal entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Referencia_Personal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Referencia_Personal entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Referencia_Personal:new.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Referencia_Personal entity.
    *
    * @param Referencia_Personal $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Referencia_Personal $entity)
    {
        $form = $this->createForm(new Referencia_PersonalType(), $entity, array(
            'action' => $this->generateUrl('Referencia_Personal_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing Referencia_Personal entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Referencia_Personal')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Referencia_Personal entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            if ($editForm->get('Siguiente')->isClicked()) {
                 return $this->redirect($this->generateUrl('Imagenes_solicitud', array('solicitud' => $entity->getSolicitud())));
            }
            return $this->redirect($this->generateUrl('Referencia_laboral_solicitud', array('solicitud' => $entity->getSolicitud())));
        }

        return $this->render('HojaBundle:Referencia_Personal:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Referencia_Personal entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HojaBundle:Referencia_Personal')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Referencia_Personal entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Referencia_Personal'));
    }

    /**
     * Creates a form to delete a Referencia_Personal entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Referencia_Personal_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
