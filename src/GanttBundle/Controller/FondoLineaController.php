<?php

namespace GanttBundle\Controller;

use GanttBundle\Entity\FondoLinea;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Fondolinea controller.
 *
 * @Route("fondolinea")
 */
class FondoLineaController extends Controller
{
    /**
     * Lists all fondoLinea entities.
     *
     * @Route("/", name="fondolinea_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fondoLineas = $em->getRepository('GanttBundle:FondoLinea')->findAll();

        return $this->render('fondolinea/index.html.twig', array(
            'fondoLineas' => $fondoLineas,
        ));
    }

    /**
     * Creates a new fondoLinea entity.
     *
     * @Route("/new", name="fondolinea_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fondoLinea = new Fondolinea();
        $form = $this->createForm('GanttBundle\Form\FondoLineaType', $fondoLinea);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fondoLinea);
            $em->flush($fondoLinea);

            return $this->redirectToRoute('fondolinea_show', array('id' => $fondoLinea->getId()));
        }

        return $this->render('fondolinea/new.html.twig', array(
            'fondoLinea' => $fondoLinea,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fondoLinea entity.
     *
     * @Route("/{id}", name="fondolinea_show")
     * @Method("GET")
     */
    public function showAction(FondoLinea $fondoLinea)
    {
        $deleteForm = $this->createDeleteForm($fondoLinea);

        return $this->render('fondolinea/show.html.twig', array(
            'fondoLinea' => $fondoLinea,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fondoLinea entity.
     *
     * @Route("/{id}/edit", name="fondolinea_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FondoLinea $fondoLinea)
    {
        $deleteForm = $this->createDeleteForm($fondoLinea);
        $editForm = $this->createForm('GanttBundle\Form\FondoLineaType', $fondoLinea);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fondolinea_edit', array('id' => $fondoLinea->getId()));
        }

        return $this->render('fondolinea/edit.html.twig', array(
            'fondoLinea' => $fondoLinea,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fondoLinea entity.
     *
     * @Route("/{id}", name="fondolinea_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FondoLinea $fondoLinea)
    {
        $form = $this->createDeleteForm($fondoLinea);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fondoLinea);
            $em->flush($fondoLinea);
        }

        return $this->redirectToRoute('fondolinea_index');
    }

    /**
     * Creates a form to delete a fondoLinea entity.
     *
     * @param FondoLinea $fondoLinea The fondoLinea entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FondoLinea $fondoLinea)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fondolinea_delete', array('id' => $fondoLinea->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
