<?php

namespace GanttBundle\Repository;

use Doctrine\ORM\EntityRepository;
use GanttBundle\Entity\User;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{
	public function createFromSidingData($data, $em)
    {
        $user = new User();

        $user->setRut($data['rut']);
        $user->setName($data['name']);
        $user->setLastName($data['lastname']);
        $user->setEmail($data['mail']);

        switch ($data['rol']) {
            case 'profesor':
                $user->setRole('ROLE_OTHER');
                break;
            case 'alumno':
                $user->setRole('ROLE_OTHER');
                break;
            default:
                $user->setRole('ROLE_OTHER');
                break;
        }

        if($user->getRut() == 16094040 || $user->getRut() == 16747236 || $user->getRut() == 6812781 || $user->getRut() == 12616747 || $user->getRut() == 13073911 || $user->getRut() == 17376289)
        {
            $user->setRole('ROLE_ADMIN');
        }

        $em->persist($user);
        $em->flush();

        return $user;
    }
}
