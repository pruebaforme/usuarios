<?php

namespace Comunidad\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
     public function indexAction()
    {
	
        return $this->render('UsersBundle:Default:index.html.twig');
    }


    public function listaInmueblesAction()
    {
	$em = $this->getDoctrine()->getEntityManager();
	$inmuebles = $em->getRepository('UsersBundle:Inmueble')->findListaInmuebles();

	
        return $this->render('UsersBundle:Default:listaInmuebles.html.twig', array('inmuebles' => $inmuebles));
    }
}
