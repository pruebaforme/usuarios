<?php

namespace Comunidad\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
  
    public function inicioAction()
    {
// 	$formulario = $this->createFormBuilder()
// 		      ->add('eleccion', 'choice', array(
// 			    'choices' => array('uno' => 'Mostrar inmuebles de un usuario', 'dos' => 'Mostrar ususarios de un inmueble'))
// 			    )
// 	->getForm();
// 
// 	return $this->render(
// 	    'UsuarioBundle:Default:indice.html.twig',
// 	    array('formulario' => $formulario->createView())
// 	);

	
        return $this->render('UsersBundle:Default:indice.html.twig');
    }

    public function listaInmueblesAction()
    {
	$em = $this->getDoctrine()->getEntityManager();
	$inmuebles = $em->getRepository('UsersBundle:Inmueble')->findListaInmuebles();


// 	$formulario = $this->createFormBuilder($inmuebles)
// 	   ->add($inmuebles[1])
//  	   ->add($inmuebles[2])
//  	   ->add($inmuebles[3])
// 	->getForm();
// 	return $this->render(
// 	    'UsuarioBundle:Default:listaInmuebles.html.twig',
// 	    array('formulario' => $formulario->createView())
// 	);


	
        return $this->render('UsersBundle:Default:listaInmuebles.html.twig', array('inmuebles' => $inmuebles));
    }

    public function listaUsuariosInmuebleAction($inmueble_id)
    {
	$em = $this->getDoctrine()->getEntityManager();
	$inmuebles = $em->getRepository('UsersBundle:Inmueble')->findListaUsuariosInmuebles($inmueble_id);

        return $this->render('UsersBundle:Default:listaUsuariosInmueble.html.twig', array('inmuebles' => $inmuebles));
    }
}
