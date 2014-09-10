<?php

namespace MaxProject\ProjectManagmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MaxProject\ProjectManagmentBundle\Entity\Project;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaxProjectProjectManagmentBundle:Default:default.html.twig');
    }

    public function resetTestDataAction() {

    }

    public function phpinfoAction() {
        phpinfo();
        return $this->render('');
    }
}
