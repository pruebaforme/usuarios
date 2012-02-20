<?php

namespace Comunidad\UsersBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Comunidad\UsersBundle\Entity\Usuario;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Fixtures de la entidad Usuarios.
 * Crea 10 usuarios para poder probar la aplicación.
 */
class usuarios implements FixtureInterface
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

	$inmuebles = $manager->getRepository('UsersBundle:Inmueble')->findAll();

	$usuarios = array(
	  array('nombre' => 'Antonio', 'apellidos' => 'Rodriguez', 'email' => 'ajfñlakjflñaks', 'password' => 'asfasfasd', 'direccion' => 'lajfñaksj',
 'permite_email' => 'true', 'dni' => 'asfasf', 'ciudad' => 'asfasdf', 'inmuebles' => $inmuebles),
	  array('nombre' => 'Antonio', 'apellidos' => 'Rodriguez', 'email' => 'ajfñlakjflñaks', 'password' => 'asfasfasd', 'direccion' => 'lajfñaksj',
 'permite_email' => 'true', 'dni' => 'asfasf', 'ciudad' => 'asfasdf', 'inmuebles' => $inmuebles),
	  array('nombre' => 'Antonio', 'apellidos' => 'Rodriguez', 'email' => 'ajfñlakjflñaks', 'password' => 'asfasfasd', 'direccion' => 'lajfñaksj',
 'permite_email' => 'true', 'dni' => 'asfasf', 'ciudad' => 'asfasdf', 'inmuebles' => $inmuebles)
		     );
	
        foreach ($usuarios as $usuario) {
            $entidad = new Usuario();
            $entidad->setNombre($usuario['nombre']);
	    $entidad->setApellidos($usuario['apellidos']);
	    $entidad->setEmail($usuario['email']);
	    $entidad->setPassword($usuario['password']);
	    $entidad->setDireccion($usuario['direccion']);
	    $entidad->setPermiteEmail($usuario['permite_email']);
	    $entidad->setDni($usuario['dni']);
	    $entidad->setCiudad($usuario['ciudad']);
	    $entidad->setInmuebles($usuario['inmuebles']);
            
            $manager->persist($entidad);
        }
        
        $manager->flush();
    }
}