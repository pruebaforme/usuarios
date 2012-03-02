<?php

namespace Comunidad\UsersBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Comunidad\UsersBundle\Entity\Inmueble;
use Comunidad\UsersBundle\Entity\Usuario;
use Doctrine\Common\Persistence\ObjectManager;


/**
 * Fixtures de la entidad Inmueble.
 * Crea 10 inmuebles para poder probar la aplicación.
 */
class inmuebles extends AbstractFixture implements OrderedFixtureInterface
{
    
    public function getOrder()
    {
	return 2;
    }



    public function load(ObjectManager $manager)
    {
        
	

// 	    $usuario1 = new Usuario();
//          $usuario1->setNombre('nombre');
// 	    $usuario1->setApellidos('apellidos');
// 	    $usuario1->setEmail('email');
// 	    $usuario1->setPassword('password');
// 	    $usuario1->setDireccion('direccion');
// 	    $usuario1->setPermiteEmail(true);
// 	    $usuario1->setDni('dni');
// 	    $usuario1->setCiudad('ciudad');
// 	    $entidad->setInmuebles($usuario['inmuebles']);

	
	$usuarios = $manager->getRepository('UsersBundle:Usuario')->findAll();



// 	print_r ($usuarios);

	

// 	//array de objetos
// 	$obj = array();
// 
// 	foreach ($uno as $cada) {
//             $usuario1 = new Usuario();
//             $usuario1->setNombre($cada['nombre']);
// 	    $usuario1->setApellidos($cada['apellidos']);/*
// 	    $usuario1->setEmail('email');
// 	    $usuario1->setPassword('password');
// 	    $usuario1->setDireccion('direccion');
// 	    $usuario1->setPermiteEmail(true);
// 	    $usuario1->setDni('dni');
// 	    $usuario1->setCiudad('ciudad');*/
//             
//             $obj[]=$usuario1;
//         }
// 
// 	print_r ($obj);

	$inmuebles = array(
	  array('num_personas' => '4', 'ocupado' => '1', 'via' => 'calle', 'numero' => '2', 'bloque' => '5',
 'puerta' => 'D', 'planta' => '1', 'nombre_calle' => 'Eduardo', 'nombre_propietario' => 'Antonio', 'habitaciones' => '3', 'usuarios' => array($usuarios[0], $usuarios[3], $usuarios[4])),
	  array('num_personas' => '3', 'ocupado' => '1', 'via' => 'calle', 'numero' => '4', 'bloque' => '2',
 'puerta' => 'A', 'planta' => '2', 'nombre_calle' => 'Pelayo', 'nombre_propietario' => 'Juan', 'habitaciones' => '4', 'usuarios' => array($usuarios[1], $usuarios[5], $usuarios[6])),
	  array('num_personas' => '5', 'ocupado' => '0', 'via' => 'calle', 'numero' => '3', 'bloque' => '6',
 'puerta' => 'D', 'planta' => '4', 'nombre_calle' => 'Eduardo', 'nombre_propietario' => 'Maria', 'habitaciones' => '3', 'usuarios' => array($usuarios[2], $usuarios[7], $usuarios[8]))
		);
	
        foreach ($inmuebles as $inmueble) {
	    $entidad = new Inmueble();
            $entidad->setNumPersonas($inmueble['num_personas']);
	    $entidad->setOcupado($inmueble['ocupado']);
	    $entidad->setVia($inmueble['via']);
	    $entidad->setNumero($inmueble['numero']);
	    $entidad->setBloque($inmueble['bloque']);
	    $entidad->setPuerta($inmueble['puerta']);
	    $entidad->setPlanta($inmueble['planta']);
	    $entidad->setNombreCalle($inmueble['nombre_calle']);
	    $entidad->setNombrePropietario($inmueble['nombre_propietario']);
	    $entidad->setHabitaciones($inmueble['habitaciones']);
	    $entidad->setUsuarios($inmueble['usuarios']);  

            $manager->persist($entidad);
        }
        
        $manager->flush();
    }
}