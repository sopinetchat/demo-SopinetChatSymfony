<?php

namespace AppBundle\Services;

use Symfony\Component\HttpFoundation\Request;

class LoginHelper
{
     public function __construct($container, $entityManager, $viewHandler, $userPasswordEncoder)
    {
        $this->em = $entityManager;
        $this->viewhandler = $viewHandler;
        $this->encoder = $userPasswordEncoder;
        $this->container = $container;
    }
    
    public function getUser(Request $request) {
        $userManager = $this->container->get('fos_user.user_manager');
        
        $user = $userManager->findUserBy(array('id' => 2));
        
        return $user;
    }
}