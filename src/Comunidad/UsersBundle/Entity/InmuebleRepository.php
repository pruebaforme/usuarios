<?php

namespace Comunidad\UsersBundle\Entity;

use Doctrine\ORM\EntityRepository;

class InmuebleRepository extends EntityRepository
{

  public function findListaInmuebles()
  {
      $em = $this->getEntityManager();

      $consulta = $em->createQuery('SELECT i FROM UsersBundle:Inmueble i');
                
      return $consulta->getArrayResult();

  }
  
  public function findListaUsuariosInmuebles()
  {
      $em = $this->getEntityManager();

      $consulta = $em->createQuery('SELECT i,u FROM UsersBundle:Inmueble i
				      JOIN i.usuarios u ');
                
      return $consulta->getArrayResult();

  }
 
}
 
