<?php

namespace Safenet\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SafenetCMSBundle:Default:index.html.twig');
    }
}
