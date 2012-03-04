<?php

namespace Comunidad\UsersBundle\Entity;

use Doctrine\ORM\EntityRepository;

class UsuarioRepository extends EntityRepository
{

  public function findListaUsuarios()
  {
      $em = $this->getEntityManager();

      $consulta = $em->createQuery('SELECT u FROM UsersBundle:Usuario u');
                
      return $consulta->getArrayResult();

  }
  
  public function findListaInmueblesUsuarios($usuario_id)
  {
      $em = $this->getEntityManager();

//       $consulta = $em->createQuery('SELECT i,u FROM UsersBundle:Inmueble i
// 				      JOIN i.usuarios u ');
      $consulta = $em->createQuery('SELECT u FROM UsersBundle:Usuario u
				      WHERE u.id = :id ');
      $consulta->setParameter('id', $usuario_id);
                
      return $consulta->getResult();

  }
 
} 
