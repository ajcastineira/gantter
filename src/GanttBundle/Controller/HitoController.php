<?php

namespace GanttBundle\Controller;

use GanttBundle\Entity\Hito;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Hito controller.
 *
 * @Route("hito")
 */
class HitoController extends Controller
{
    /**
     * Lists all hito entities.
     *
     * @Route("/", name="hito_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hitos = $em->getRepository('GanttBundle:Hito')->findAll();

        return $this->render('hito/index.html.twig', array(
            'hitos' => $hitos,
        ));
    }

    /**
     * Creates a new hito entity.
     *
     * @Route("/new", name="hito_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $hito = new Hito();
        $form = $this->createForm('GanttBundle\Form\HitoType', $hito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($hito);
            $em->flush($hito);

            return $this->redirectToRoute('hito_show', array('id' => $hito->getId()));
        }

        return $this->render('hito/new.html.twig', array(
            'hito' => $hito,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a hito entity.
     *
     * @Route("/{id}", name="hito_show")
     * @Method("GET")
     */
    public function showAction(Hito $hito)
    {
        $deleteForm = $this->createDeleteForm($hito);

        return $this->render('hito/show.html.twig', array(
            'hito' => $hito,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing hito entity.
     *
     * @Route("/{id}/edit", name="hito_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Hito $hito)
    {
        $deleteForm = $this->createDeleteForm($hito);
        $editForm = $this->createForm('GanttBundle\Form\HitoType', $hito);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('hito_edit', array('id' => $hito->getId()));
        }

        return $this->render('hito/edit.html.twig', array(
            'hito' => $hito,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a hito entity.
     *
     * @Route("/{id}", name="hito_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Hito $hito)
    {
        $form = $this->createDeleteForm($hito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($hito);
            $em->flush($hito);
        }

        return $this->redirectToRoute('hito_index');
    }

    /**
     * Creates a form to delete a hito entity.
     *
     * @param Hito $hito The hito entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Hito $hito)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('hito_delete', array('id' => $hito->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
