<?php

namespace EstudioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use EstudioBundle\Entity\DependientesEconomicos;
use EstudioBundle\Form\DependientesEconomicosType;

/**
 * DependientesEconomicos controller.
 *
 */
class DependientesEconomicosController extends Controller
{

    /**
     * Lists all DependientesEconomicos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EstudioBundle:DependientesEconomicos')->findAll();

        return $this->render('EstudioBundle:DependientesEconomicos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new DependientesEconomicos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new DependientesEconomicos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('DependientesEconomicos_show', array('id' => $entity->getId())));
        }

        return $this->render('EstudioBundle:DependientesEconomicos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a DependientesEconomicos entity.
     *
     * @param DependientesEconomicos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DependientesEconomicos $entity)
    {
        $form = $this->createForm(new DependientesEconomicosType(), $entity, array(
            'action' => $this->generateUrl('DependientesEconomicos_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new DependientesEconomicos entity.
     *
     */
    public function newAction()
    {
        $entity = new DependientesEconomicos();
        $form   = $this->createCreateForm($entity);

        return $this->render('EstudioBundle:DependientesEconomicos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DependientesEconomicos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:DependientesEconomicos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DependientesEconomicos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:DependientesEconomicos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DependientesEconomicos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:DependientesEconomicos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DependientesEconomicos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EstudioBundle:DependientesEconomicos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a DependientesEconomicos entity.
    *
    * @param DependientesEconomicos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DependientesEconomicos $entity)
    {
        $form = $this->createForm(new DependientesEconomicosType(), $entity, array(
            'action' => $this->generateUrl('DependientesEconomicos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing DependientesEconomicos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EstudioBundle:DependientesEconomicos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DependientesEconomicos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('DependientesEconomicos_edit', array('id' => $id)));
        }

        return $this->render('EstudioBundle:DependientesEconomicos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a DependientesEconomicos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EstudioBundle:DependientesEconomicos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DependientesEconomicos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('DependientesEconomicos'));
    }

    /**
     * Creates a form to delete a DependientesEconomicos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('DependientesEconomicos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar','attr'=>array('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
