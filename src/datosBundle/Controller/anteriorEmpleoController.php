<?php

namespace datosBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use datosBundle\Entity\anteriorEmpleo;
use datosBundle\Form\anteriorEmpleoType;

/**
 * anteriorEmpleo controller.
 *
 */
class anteriorEmpleoController extends Controller
{

    /**
     * Lists all anteriorEmpleo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('datosBundle:anteriorEmpleo')->findAll();

        return $this->render('datosBundle:anteriorEmpleo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new anteriorEmpleo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new anteriorEmpleo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anteriorempleo_show', array('id' => $entity->getId())));
        }

        return $this->render('datosBundle:anteriorEmpleo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a anteriorEmpleo entity.
     *
     * @param anteriorEmpleo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(anteriorEmpleo $entity)
    {
        $form = $this->createForm(new anteriorEmpleoType(), $entity, array(
            'action' => $this->generateUrl('anteriorempleo_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new anteriorEmpleo entity.
     *
     */
    public function newAction()
    {
        $entity = new anteriorEmpleo();
        $form   = $this->createCreateForm($entity);

        return $this->render('datosBundle:anteriorEmpleo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a anteriorEmpleo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:anteriorEmpleo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anteriorEmpleo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('datosBundle:anteriorEmpleo:show.html.twig', array(
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

        $entity = $em->getRepository('datosBundle:anteriorEmpleo')->findOneBy(array('solicitud'=>$solicitud));

        if (!$entity) {
            $EntSolicitud=$em->getRepository('ConfiguracionBundle:Solicitud')->find($solicitud);
            $entity = new anteriorEmpleo();
            $entity->setSolicitud($EntSolicitud);
            $em->persist($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anteriorempleo_edit',array('id'=>$entity->getId())));
    }

    /**
     * Displays a form to edit an existing anteriorEmpleo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:anteriorEmpleo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anteriorEmpleo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('datosBundle:anteriorEmpleo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a anteriorEmpleo entity.
    *
    * @param anteriorEmpleo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(anteriorEmpleo $entity)
    {
        $form = $this->createForm(new anteriorEmpleoType(), $entity, array(
            'action' => $this->generateUrl('anteriorempleo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing anteriorEmpleo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('datosBundle:anteriorEmpleo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anteriorEmpleo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('anteriorempleo_edit', array('id' => $id)));
        }

        return $this->render('datosBundle:anteriorEmpleo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a anteriorEmpleo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('datosBundle:anteriorEmpleo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find anteriorEmpleo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anteriorempleo'));
    }

    /**
     * Creates a form to delete a anteriorEmpleo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anteriorempleo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
