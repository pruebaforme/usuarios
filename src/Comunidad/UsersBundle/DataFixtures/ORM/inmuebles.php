<?php

namespace Comunidad\UsersBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Comunidad\UsersBundle\Entity\Inmueble;
use Comunidad\UsersBundle\Entity\Usuario;
use Doctrine\Common\Persistence\ObjectManager;


/**
 * Fixtures de la entidad Inmueble.
 * Crea 10 inmuebles para poder probar la aplicación.
 */
class inmuebles implements FixtureInterface
{
    
    public function load(ObjectManager $manager)
    {
        
	

	    $usuario1 = new Usuario();
            $usuario1->setNombre('nombre');
	    $usuario1->setApellidos('apellidos');
	    $usuario1->setEmail('email');
	    $usuario1->setPassword('password');
	    $usuario1->setDireccion('direccion');
	    $usuario1->setPermiteEmail(true);
	    $usuario1->setDni('dni');
	    $usuario1->setCiudad('ciudad');
// 	    $entidad->setInmuebles($usuario['inmuebles']);

	
	$uno = $manager->getRepository('UsersBundle:Usuario')->find('id');

	//print_r ($uno);

	echo $uno;

	

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
	  array('num_persona' => '4', 'ocupado' => 'false', 'via' => 'calle', 'numero' => '2', 'bloque' => '5',
 'puerta' => 'D', 'planta' => '1', 'nombre_calle' => 'Eduardo', 'nombre_propietario' => 'Juan', 'habitaciones' => '3', 'usuarios' => $uno[0]),
	  array('num_persona' => '4', 'ocupado' => 'false', 'via' => 'calle', 'numero' => '2', 'bloque' => '5',
 'puerta' => 'D', 'planta' => '1', 'nombre_calle' => 'Eduardo', 'nombre_propietario' => 'Juan', 'habitaciones' => '3', 'usuarios' => $uno[1]),
	  array('num_persona' => '4', 'ocupado' => 'false', 'via' => 'calle', 'numero' => '2', 'bloque' => '5',
 'puerta' => 'D', 'planta' => '1', 'nombre_calle' => 'Eduardo', 'nombre_propietario' => 'Juan', 'habitaciones' => '3', 'usuarios' => $uno[2])
		);
	
        foreach ($inmuebles as $inmueble) {
            $entidad = new Inmueble();
            $entidad->setNumPersonas($inmueble['num_persona']);
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