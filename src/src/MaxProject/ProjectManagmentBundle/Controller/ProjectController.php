<?php

namespace MaxProject\ProjectManagmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use MaxProject\ProjectManagmentBundle\Entity\Project;


class ProjectController extends Controller
{
    public function indexAction() {
        return $this->render('MaxProjectProjectManagmentBundle:Default:default.html.twig');
    }

    public function phpinfoAction() {
        phpinfo();
        return $this->render('');
    }

    public function projectsAction() {
        $projects = $this->getDoctrine()->getRepository('MaxProjectProjectManagmentBundle:Project')->findAll();
        return $this->render('json.twig', array('data' => $projects));
    }

    /**
     * @ParamConverter("project", class="MaxProjectProjectManagmentBundle:Project")
     */
    public function projectAction(Project $project) {
        return $this->render('json.twig', array('data' => $project));
    }
}
