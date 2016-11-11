<?php

namespace datosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use datosBundle\Entity\trayectoriaLab;
use datosBundle\Form\trayectoriaLabType;

/**
 * trayectoriaLab controller.
 *
 */
class trayectoriaLabController extends Controller
{

    /**
     * Lists all trayectoriaLab entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('datosBundle:trayectoriaLab')->findAll();

        return $this->render('datosBundle:trayectoriaLab:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new trayectoriaLab entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new trayectoriaLab();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('trayectorialab_show', array('id' => $entity->getId())));
        }

        return $this->render('datosBundle:trayectoriaLab:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a trayectoriaLab entity.
     *
     * @param trayectoriaLab $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(trayectoriaLab $entity)
    {
        $form = $this->createForm(new trayectoriaLabType(), $entity, array(
            'action' => $this->generateUrl('trayectorialab_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new trayectoriaLab entity.
     *
     */
    public function newAction()
    {
        $entity = new trayectoriaLab();
        $form   = $this->createCreateForm($entity);

        return $this->render('datosBundle:trayectoriaLab:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trayectoriaLab entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:trayectoriaLab')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find trayectoriaLab entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('datosBundle:trayectoriaLab:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a trayectoriaLab entity.
     *
     */
    public function showbysolicitudAction($solicitud)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:trayectoriaLab')->findOneBy(array('solicitud'=>$solicitud));

        if (!$entity) {
            $EntSolicitud=$em->getRepository('ConfiguracionBundle:Solicitud')->find($solicitud);
            $entity = new trayectoriaLab();
            $entity->setSolicitud($EntSolicitud);
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('trayectorialab_edit',array('id'=>$entity->getId())));
    }

    /**
     * Displays a form to edit an existing trayectoriaLab entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:trayectoriaLab')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find trayectoriaLab entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('datosBundle:trayectoriaLab:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a trayectoriaLab entity.
    *
    * @param trayectoriaLab $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(trayectoriaLab $entity)
    {
        $form = $this->createForm(new trayectoriaLabType(), $entity, array(
            'action' => $this->generateUrl('trayectorialab_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //

        return $form;
    }
    /**
     * Edits an existing trayectoriaLab entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:trayectoriaLab')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find trayectoriaLab entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('trayectorialab_edit', array('id' => $id)));
        }

        return $this->render('datosBundle:trayectoriaLab:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a trayectoriaLab entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('datosBundle:trayectoriaLab')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find trayectoriaLab entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('trayectorialab'));
    }

    /**
     * Creates a form to delete a trayectoriaLab entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trayectorialab_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
