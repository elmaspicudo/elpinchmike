<?php

namespace HojaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HojaBundle\Entity\Imagenes;
use HojaBundle\Form\ImagenesType;

/**
 * Imagenes controller.
 *
 */
class ImagenesController extends Controller
{

    /**
     * Lists all Imagenes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HojaBundle:Imagenes')->findAll();

        return $this->render('HojaBundle:Imagenes:index.html.twig', array(
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

        $entity = $em->getRepository('HojaBundle:Imagenes')->findOneBy(array('solicitud'=>$solicitud));

        if (!$entity) {
            $EntSolicitud=$em->getRepository('ConfiguracionBundle:Solicitud')->find($solicitud);
            $entity = new Imagenes();
            $entity->setSolicitud($EntSolicitud);
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Imagenes_edit',array('id'=>$entity->getId())));
    }
    /**
     * Creates a new Imagenes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Imagenes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('Imagenes_show', array('id' => $entity->getId())));
        }

        return $this->render('HojaBundle:Imagenes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Imagenes entity.
     *
     * @param Imagenes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Imagenes $entity)
    {
        $form = $this->createForm(new ImagenesType(), $entity, array(
            'action' => $this->generateUrl('Imagenes_create'),
            'method' => 'POST',
        ));

        ////$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Imagenes entity.
     *
     */
    public function newAction()
    {
        $entity = new Imagenes();
        $form   = $this->createCreateForm($entity);

        return $this->render('HojaBundle:Imagenes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Imagenes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Imagenes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Imagenes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Imagenes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Imagenes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Imagenes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Imagenes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('HojaBundle:Imagenes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Imagenes entity.
    *
    * @param Imagenes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Imagenes $entity)
    {
        $form = $this->createForm(new ImagenesType(), $entity, array(
            'action' => $this->generateUrl('Imagenes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing Imagenes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HojaBundle:Imagenes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Imagenes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            if ($editForm->get('Siguiente')->isClicked()) {
                 return $this->redirect($this->generateUrl('hoja9_solicitud', array('solicitud' => $entity->getSolicitud())));
            }
            return $this->redirect($this->generateUrl('Referencia_Personal_solicitud', array('solicitud' => $entity->getSolicitud())));
        }

        return $this->render('HojaBundle:Imagenes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Imagenes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HojaBundle:Imagenes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Imagenes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('Imagenes'));
    }

    /**
     * Creates a form to delete a Imagenes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('Imagenes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
