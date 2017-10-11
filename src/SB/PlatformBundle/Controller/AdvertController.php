<?php

// src/SB/PlatformBundle/Controller/AdvertController.php

namespace SB\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $content = $this
            ->get('templating')
            ->render('SBPlatformBundle:Advert:index.html.twig', array('nom' => 'Sylvain'))
        ;

        return new Response($content);
    }
}

