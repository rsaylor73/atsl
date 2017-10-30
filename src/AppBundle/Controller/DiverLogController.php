<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DiverLogController extends Controller
{

    /**
     * @Route("/diverlog", name="diverlog")
     */
    public function diverlogAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();

    	return $this->render('diverlog/index.html.twig');
    }

    /**
     * @Route("/addlog", name="addlog")
     */
    public function adddiverlogAction(Request $request)
    {

    	return $this->render('diverlog/add.html.twig');
    }



}   