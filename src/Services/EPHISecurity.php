<?php
namespace App\Services;

use App\Entity\FosUser;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

// Correct use statements here ...

class EPHISecurity {
    private $entityManager;
  
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager=$entityManager;
    }
    public function isAllowed(FosUser $user=null,$action) {
        if($user==null) throw new AccessDeniedException();
        if($user->hasRole('ROLE_ADMIN'))return true;
        if($user->getUserGroup())
        {
        foreach ($user->getUserGroup()->getPermission() as $key => $perm) 
        {

            if($action==$perm->getName()) return true;
        }
        $exceptions=["approver1","approver2","approver3"];
        if (in_array($action, $exceptions)) return false;//access denay not wanted 

          throw new AccessDeniedException();
        }
        else
            throw new AccessDeniedException();
        // Do what you need, $this->entityManager holds a reference to your entity manager
    }
    public function isAllowedTwig(FosUser $user,$action) {
        if(!$user)return false;
       if($user->hasRole('ROLE_ADMIN'))return true;
       if(!$user->getUserGroup())return false;
        foreach ($user->getUserGroup()->getPermission() as $key => $perm) 
        {

            if($action==$perm->getName()) return true;
        }

          return false;
    
        // Do what you need, $this->entityManager holds a reference to your entity manager
    }
}
