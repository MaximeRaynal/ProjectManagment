<?php

namespace MaxProject\WebAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaxProjectWebAppBundle:Globals:index.html.twig');
    }
}
