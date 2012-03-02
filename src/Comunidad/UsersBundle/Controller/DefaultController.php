<?php

namespace Comunidad\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
	
        return $this->render('UsersBundle:Default:index.html.twig');
    }

    public function inicioAction()
    {
	
        return $this->render('UsersBundle:Default:indice.html.twig');
    }

    public function listaInmueblesAction()
    {
	$em = $this->getDoctrine()->getEntityManager();
	$inmuebles = $em->getRepository('UsersBundle:Inmueble')->findListaInmuebles();

	
        return $this->render('UsersBundle:Default:listaInmuebles.html.twig', array('inmuebles' => $inmuebles));
    }

    public function listaUsuariosInmuebleAction()
    {
	$em = $this->getDoctrine()->getEntityManager();
	$inmuebles = $em->getRepository('UsersBundle:Inmueble')->findListaUsuariosInmuebles();

        return $this->render('UsersBundle:Default:listaUsuariosInmueble.html.twig', array('inmuebles' => $inmuebles));
    }
}
