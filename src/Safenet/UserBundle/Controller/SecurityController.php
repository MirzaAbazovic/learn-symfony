<?php
namespace Safenet\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class SecurityController extends Controller {
    /**
    * @Route("/login", name="login")
    * @Template
    */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            );
    }
    /**
    * @Route("/login_check", name="login_check")
    */
    public function loginCheckAction() {
        
    }
    /**
    * @Route("/logout", name="logout")
    */
    public function logoutAction() {
        
    }
}
