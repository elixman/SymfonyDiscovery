<?php

namespace SB\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SBPlatformBundle:Default:index.html.twig');
    }
}
