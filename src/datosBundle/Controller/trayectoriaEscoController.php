<?php

namespace datosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use datosBundle\Entity\trayectoriaEsco;
use datosBundle\Form\trayectoriaEscoType;

/**
 * trayectoriaEsco controller.
 *
 */
class trayectoriaEscoController extends Controller
{

    /**
     * Lists all trayectoriaEsco entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('datosBundle:trayectoriaEsco')->findAll();

        return $this->render('datosBundle:trayectoriaEsco:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new trayectoriaEsco entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new trayectoriaEsco();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('trayectoriaesco_show', array('id' => $entity->getId())));
        }

        return $this->render('datosBundle:trayectoriaEsco:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a trayectoriaEsco entity.
     *
     * @param trayectoriaEsco $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(trayectoriaEsco $entity)
    {
        $form = $this->createForm(new trayectoriaEscoType(), $entity, array(
            'action' => $this->generateUrl('trayectoriaesco_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new trayectoriaEsco entity.
     *
     */
    public function newAction()
    {
        $entity = new trayectoriaEsco();
        $form   = $this->createCreateForm($entity);

        return $this->render('datosBundle:trayectoriaEsco:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a trayectoriaEsco entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:trayectoriaEsco')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find trayectoriaEsco entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('datosBundle:trayectoriaEsco:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a trayectoriaEsco entity.
     *
     */
    public function showbysolicitudAction($solicitud)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:trayectoriaEsco')->findOneBy(array('solicitud'=>$solicitud));

        if (!$entity) {
            $EntSolicitud=$em->getRepository('ConfiguracionBundle:Solicitud')->find($solicitud);
            $entity = new trayectoriaEsco();
            $entity->setSolicitud($EntSolicitud);
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('trayectoriaesco_edit',array('id'=>$entity->getId())));
    }

    /**
     * Displays a form to edit an existing trayectoriaEsco entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:trayectoriaEsco')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find trayectoriaEsco entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('datosBundle:trayectoriaEsco:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a trayectoriaEsco entity.
    *
    * @param trayectoriaEsco $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(trayectoriaEsco $entity)
    {
        $form = $this->createForm(new trayectoriaEscoType(), $entity, array(
            'action' => $this->generateUrl('trayectoriaesco_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing trayectoriaEsco entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:trayectoriaEsco')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find trayectoriaEsco entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('trayectoriaesco_edit', array('id' => $id)));
        }

        return $this->render('datosBundle:trayectoriaEsco:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a trayectoriaEsco entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('datosBundle:trayectoriaEsco')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find trayectoriaEsco entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('trayectoriaesco'));
    }

    /**
     * Creates a form to delete a trayectoriaEsco entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('trayectoriaesco_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
