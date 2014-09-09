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
        $em = $this->getDoctrine()->getManager();

        $projectRepository = $em->getRepository('MaxProjectProjectManagmentBundle:Project');

        foreach ($projectRepository->findAll() as $p) {
            $em->remove($p);
        }

        $project = new Project();
        $project->setName('Test Project');
        $project->setDescription('This is a description for the test project !');
        $project->setDateStart(new DateTime("now"));
        $project->setDateStart(new DateTime());
        $project->setMember(null);
        $project->setBacklog(null);
        $project->setAvaibleLabel(array('System', 'Server', 'Client', 'BDD'));
        $project->setAxe(array('Features', 'Bugs'));

        $em->persist($project);
        $em->flush();

        return $this->render('::json.twig', array('data' => $project));
    }

    public function phpinfoAction() {
        phpinfo();
        return $this->render('');
    }
}
