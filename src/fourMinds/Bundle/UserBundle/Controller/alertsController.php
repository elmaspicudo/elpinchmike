<?php

namespace fourMinds\Bundle\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use fourMinds\Bundle\UserBundle\Entity\alerts;
use fourMinds\Bundle\UserBundle\Form\alertsType;

/**
 * alerts controller.
 *
 */
class alertsController extends Controller
{

    /**
     * Lists all alerts entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user=='anon.'){
            $user=0;          
        }else{
            $user= $em->getRepository('UserBundle:User')->find($user->getId());                   
        }  
        $entities = $em->getRepository('UserBundle:alerts')->findBy(array('user'=>$user->getId())); 

        return $this->render('UserBundle:alerts:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new alerts entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new alerts();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('alerts_show', array('id' => $entity->getId())));
        }

        return $this->render('UserBundle:alerts:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a alerts entity.
     *
     * @param alerts $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(alerts $entity)
    {
        $form = $this->createForm(new alertsType(), $entity, array(
            'action' => $this->generateUrl('alerts_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new alerts entity.
     *
     */
    public function newAction()
    {
        $entity = new alerts();
        $form   = $this->createCreateForm($entity);

        return $this->render('UserBundle:alerts:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a alerts entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserBundle:alerts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find alerts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UserBundle:alerts:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing alerts entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserBundle:alerts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find alerts entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UserBundle:alerts:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a alerts entity.
    *
    * @param alerts $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(alerts $entity)
    {
        $form = $this->createForm(new alertsType(), $entity, array(
            'action' => $this->generateUrl('alerts_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        

        return $form;
    }
    /**
     * Edits an existing alerts entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserBundle:alerts')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find alerts entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('alerts_edit', array('id' => $id)));
        }

        return $this->render('UserBundle:alerts:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a alerts entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UserBundle:alerts')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find alerts entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('alerts'));
    }

    /**
     * Creates a form to delete a alerts entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('alerts_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
