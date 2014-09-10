<?php
namespace MaxProject\ProjectManagmentBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use MaxProject\ProjectManagmentBundle\Entity\Project;

use DateTime;

class LoadProjectData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $project = new Project();
        $project->setName('Test Project');
        $project->setDescription('This is a description for the test project !');
        $project->setDateStart(new DateTime("now"));
        $project->setDateEnd(new DateTime());
        //$project->setMembers(null);
        //$project->setBacklog(null);
        $project->setAvaibleLabel(array('System', 'Server', 'Client', 'BDD'));
        //$project->setAxe(array('Features', 'Bugs'));

        $manager->persist($project);
        $manager->flush();
    }
}
