<?php

namespace GanttBundle\Controller;

use GanttBundle\Entity\Agencia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Agencia controller.
 *
 * @Route("agencia")
 */
class AgenciaController extends Controller
{
    /**
     * Lists all agencia entities.
     *
     * @Route("/", name="agencia_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agencias = $em->getRepository('GanttBundle:Agencia')->findAll();

        return $this->render('agencia/index.html.twig', array(
            'agencias' => $agencias,
        ));
    }

    /**
     * Creates a new agencia entity.
     *
     * @Route("/new", name="agencia_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $agencia = new Agencia();
        $form = $this->createForm('GanttBundle\Form\AgenciaType', $agencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agencia);
            $em->flush($agencia);

            return $this->redirectToRoute('agencia_show', array('id' => $agencia->getId()));
        }

        return $this->render('agencia/new.html.twig', array(
            'agencia' => $agencia,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a agencia entity.
     *
     * @Route("/{id}", name="agencia_show")
     * @Method("GET")
     */
    public function showAction(Agencia $agencia)
    {
        $deleteForm = $this->createDeleteForm($agencia);

        return $this->render('agencia/show.html.twig', array(
            'agencia' => $agencia,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing agencia entity.
     *
     * @Route("/{id}/edit", name="agencia_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Agencia $agencia)
    {
        $deleteForm = $this->createDeleteForm($agencia);
        $editForm = $this->createForm('GanttBundle\Form\AgenciaType', $agencia);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('agencia_edit', array('id' => $agencia->getId()));
        }

        return $this->render('agencia/edit.html.twig', array(
            'agencia' => $agencia,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a agencia entity.
     *
     * @Route("/{id}", name="agencia_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Agencia $agencia)
    {
        $form = $this->createDeleteForm($agencia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($agencia);
            $em->flush($agencia);
        }

        return $this->redirectToRoute('agencia_index');
    }

    /**
     * Creates a form to delete a agencia entity.
     *
     * @param Agencia $agencia The agencia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Agencia $agencia)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agencia_delete', array('id' => $agencia->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
