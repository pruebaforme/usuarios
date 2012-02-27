<?php

namespace Comunidad\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function listaInmueblesAction()
    {
	$em = $this->getDoctrine()->getEntityManager();
	$inmuebles = $em->getRepository('UsersBundle:Inmuebles')->findListaInmuebles();

	
        return $this->render('UsersBundle:Default:listaInmuebles.html.twig', array('inmuebles' => $inmuebles));
    }
}
