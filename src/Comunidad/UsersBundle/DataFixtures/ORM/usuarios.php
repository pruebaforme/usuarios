<?php

namespace Comunidad\UsersBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Comunidad\UsersBundle\Entity\Usuario;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Fixtures de la entidad Usuarios.
 * Crea 10 usuarios para poder probar la aplicación.
 */
class usuarios extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder()
    {
	return 1;
    }


    public function load(ObjectManager $manager)
    {
         

		
	$usuarios = array(
	  array('nombre' => 'Antonio', 'apellidos' => 'Rodriguez', 'email' => 'uno@uno.es', 'password' => 'pass1', 'direccion' => 'dir1',
 'permite_email' => '1', 'dni' => 'dni1', 'ciudad' => 'ciudad1'),
	  array('nombre' => 'Juan', 'apellidos' => 'Garcia', 'email' => 'dos@dos.es', 'password' => 'pass2', 'direccion' => 'dir2',
 'permite_email' => '1', 'dni' => 'dni2', 'ciudad' => 'ciudad2'),
	  array('nombre' => 'Maria', 'apellidos' => 'Ramirez', 'email' => 'tres@tres.com', 'password' => 'pass3', 'direccion' => 'dir3',
 'permite_email' => '1', 'dni' => 'dni3', 'ciudad' => 'ciudad3'),
	  array('nombre' => 'Dani', 'apellidos' => 'Rodriguez', 'email' => 'cuatro@uno.es', 'password' => 'pass4', 'direccion' => 'dir4',
 'permite_email' => '0', 'dni' => 'dni4', 'ciudad' => 'ciudad1'),
	  array('nombre' => 'Juan', 'apellidos' => 'Menendez', 'email' => 'cinco@dos.es', 'password' => 'pass5', 'direccion' => 'dir3',
 'permite_email' => '0', 'dni' => 'dni2', 'ciudad' => 'ciudad2'),
	  array('nombre' => 'Mario', 'apellidos' => 'Smith', 'email' => 'seis@tres.com', 'password' => 'pass3', 'direccion' => 'dir6',
 'permite_email' => '1', 'dni' => 'dni3', 'ciudad' => 'ciudad3'),
	  array('nombre' => 'Antonio', 'apellidos' => 'Rodriguez', 'email' => 'siete@uno.es', 'password' => 'pass7', 'direccion' => 'dir1',
 'permite_email' => '1', 'dni' => 'dni7', 'ciudad' => 'ciudad7'),
	  array('nombre' => 'Sergio', 'apellidos' => 'Lopez', 'email' => 'ocho@dos.es', 'password' => 'pass2', 'direccion' => 'dir2',
 'permite_email' => '1', 'dni' => 'dni8', 'ciudad' => 'ciudad2'),
	  array('nombre' => 'Sonia', 'apellidos' => 'Ramirez', 'email' => 'nueve@tres.com', 'password' => 'pass9', 'direccion' => 'dir3',
 'permite_email' => '1', 'dni' => 'dni9', 'ciudad' => 'ciudad9')
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
// 	    $entidad->setInmuebles($usuario['inmuebles']);
            
            $manager->persist($entidad);
        }
        
        $manager->flush();
    }
}