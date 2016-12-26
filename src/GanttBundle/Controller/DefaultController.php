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

        // calculamos el deadline mas tarde para ver el ancho de la tabla
        $latestDeadline = new \DateTime();

        foreach ($agencias as $agencia) 
        {
            foreach ($agencia->getProgramas() as $programa) 
            {
                foreach ($programa->getFondosLineas() as $fondoLinea) 
                {
                    foreach ($fondoLinea->getConcursos() as $concurso) {
                        if($concurso->getFechaFinal() > $latestDeadline)
                        {
                            $latestDeadline = $concurso->getFechaFinal();
                        }
                    }
                }
            }
        }

        $d2 = new \DateTime($latestDeadline->format('Y').'-'.$latestDeadline->format('m').'-1');
        $hoy = new \DateTime();
        $d1 = new \DateTime($hoy->format('Y').'-'.$hoy->format('m').'-1');



        $monthsInterval = intval($d1->diff($d2)->format('%m')) + 1;

        return $this->render('GanttBundle:Default:index.html.twig', array(
            'agencias' => $agencias,
            'latestDeadline' => $latestDeadline,
            'monthsInterval' => $monthsInterval,
            'hoy' => $hoy,
        ));
    }
}
