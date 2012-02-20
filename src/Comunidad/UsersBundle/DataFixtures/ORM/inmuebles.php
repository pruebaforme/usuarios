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
        /*$inmuebles = array(
	    array('num_persona' => '4', 'ocupado' => 'false', 'via' => 'calle', 'numero' => '2', 'bloque' => '5',
 'puerta' => 'D', 'planta' => '1', 'nombre_calle' => 'Eduardo', 'nombre_propietario' => 'Juan', 'habitaciones' => '3', 'usuarios' => array('Juan', 'Pepa', 'Manolo')),
	    array('num_persona' => '4', 'ocupado' => 'false', 'via' => 'calle', 'numero' => '2', 'bloque' => '5',
 'puerta' => 'D', 'planta' => '1', 'nombre_calle' => 'Eduardo', 'nombre_propietario' => 'Juan', 'habitaciones' => '3', 'usuarios' => array('Juan', 'Pepa', 'Manolo')),
	    array('num_persona' => '4', 'ocupado' => 'false', 'via' => 'calle', 'numero' => '2', 'bloque' => '5',
 'puerta' => 'D', 'planta' => '1', 'nombre_calle' => 'Eduardo', 'nombre_propietario' => 'Juan', 'habitaciones' => '3', 'usuarios' => array('Juan', 'Pepa', 'Manolo')),
	    array('num_persona' => '4', 'ocupado' => 'false', 'via' => 'calle', 'numero' => '2', 'bloque' => '5',
 'puerta' => 'D', 'planta' => '1', 'nombre_calle' => 'Eduardo', 'nombre_propietario' => 'Juan', 'habitaciones' => '3', 'usuarios' => array('Juan', 'Pepa', 'Manolo')),
	    array('num_persona' => '4', 'ocupado' => 'false', 'via' => 'calle', 'numero' => '2', 'bloque' => '5',
 'puerta' => 'D', 'planta' => '1', 'nombre_calle' => 'Eduardo', 'nombre_propietario' => 'Juan', 'habitaciones' => '3', 'usuarios' => array('Juan', 'Pepa', 'Manolo'))
	    );*/    
	
	$usuarios = $manager->getRepository('UsersBundle:Usuario')->findAll();  

	$inmuebles = array(
	  array('num_persona' => '4', 'ocupado' => 'false', 'via' => 'calle', 'numero' => '2', 'bloque' => '5',
 'puerta' => 'D', 'planta' => '1', 'nombre_calle' => 'Eduardo', 'nombre_propietario' => 'Juan', 'habitaciones' => '3', 'usuarios' => $usuarios),
	  array('num_persona' => '4', 'ocupado' => 'false', 'via' => 'calle', 'numero' => '2', 'bloque' => '5',
 'puerta' => 'D', 'planta' => '1', 'nombre_calle' => 'Eduardo', 'nombre_propietario' => 'Juan', 'habitaciones' => '3', 'usuarios' => $usuarios),
	  array('num_persona' => '4', 'ocupado' => 'false', 'via' => 'calle', 'numero' => '2', 'bloque' => '5',
 'puerta' => 'D', 'planta' => '1', 'nombre_calle' => 'Eduardo', 'nombre_propietario' => 'Juan', 'habitaciones' => '3', 'usuarios' => $usuarios)
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