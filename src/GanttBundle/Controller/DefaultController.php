<?php

namespace GanttBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();

        $agencias = $em->getRepository('GanttBundle:Agencia')->findAll();

        return $this->render('GanttBundle:Default:index.html.twig', array(
            'agencias' => $agencias,
        ));
    }
}
