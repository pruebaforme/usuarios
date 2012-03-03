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
  
  public function findListaUsuariosInmuebles($inmueble_id)
  {
      $em = $this->getEntityManager();

//       $consulta = $em->createQuery('SELECT i,u FROM UsersBundle:Inmueble i
// 				      JOIN i.usuarios u ');
      $consulta = $em->createQuery('SELECT i FROM UsersBundle:Inmueble i
				      WHERE i.id = :id ');
      $consulta->setParameter('id', $inmueble_id);
                
      return $consulta->getResult();

  }
 
}
 
