<?php

namespace GanttBundle\Controller;

use GanttBundle\Entity\Concurso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Concurso controller.
 *
 * @Route("concurso")
 */
class ConcursoController extends Controller
{
    /**
     * Lists all concurso entities.
     *
     * @Route("/", name="concurso_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $concursos = $em->getRepository('GanttBundle:Concurso')->findAll();

        return $this->render('concurso/index.html.twig', array(
            'concursos' => $concursos,
        ));
    }

    /**
     * Creates a new concurso entity.
     *
     * @Route("/new", name="concurso_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $concurso = new Concurso();
        $form = $this->createForm('GanttBundle\Form\ConcursoType', $concurso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($concurso);
            $em->flush($concurso);

            return $this->redirectToRoute('concurso_show', array('id' => $concurso->getId()));
        }

        return $this->render('concurso/new.html.twig', array(
            'concurso' => $concurso,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a concurso entity.
     *
     * @Route("/{id}", name="concurso_show")
     * @Method("GET")
     */
    public function showAction(Concurso $concurso)
    {
        $deleteForm = $this->createDeleteForm($concurso);

        return $this->render('concurso/show.html.twig', array(
            'concurso' => $concurso,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing concurso entity.
     *
     * @Route("/{id}/edit", name="concurso_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Concurso $concurso)
    {
        $deleteForm = $this->createDeleteForm($concurso);
        $editForm = $this->createForm('GanttBundle\Form\ConcursoType', $concurso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('concurso_edit', array('id' => $concurso->getId()));
        }

        return $this->render('concurso/edit.html.twig', array(
            'concurso' => $concurso,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a concurso entity.
     *
     * @Route("/{id}", name="concurso_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Concurso $concurso)
    {
        $form = $this->createDeleteForm($concurso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($concurso);
            $em->flush($concurso);
        }

        return $this->redirectToRoute('concurso_index');
    }

    /**
     * Creates a form to delete a concurso entity.
     *
     * @param Concurso $concurso The concurso entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Concurso $concurso)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('concurso_delete', array('id' => $concurso->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
