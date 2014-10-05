<?php
namespace MaxProject\ProjectManagmentBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use MaxProject\ProjectManagmentBundle\Entity\Project;

use DateTime;

class LoadProjectData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {

        $project = new Project();
        $project->setName('Test Project');
        $project->setDescription('This is a description for the test project !');
        $project->setDateStart(new DateTime("now"));
        $project->setDateEnd(new DateTime());
        //$project->setMembers(null);
        //$project->setBacklog(null);
        $project->setAvaibleLabel(array('System', 'Server', 'Client', 'BDD'));
        $project->setAxes(array('Feature', 'Bugs'));
        $this->addReference('prj1', $project);
        $manager->persist($project);

        $project = new Project();
        $project->setName('Project 2');
        $project->setDescription('This is another project');
        $project->setDateStart(new DateTime("now"));
        $project->setDateEnd(new DateTime());
        //$project->setMembers(null);
        //$project->setBacklog(null);
        $project->setAvaibleLabel(array('System', 'Server', 'Client', 'BDD'));
        $this->addReference('prj2', $project);
        $manager->persist($project);

        $project = new Project();
        $project->setName('Awesome project');
        $project->setDescription('This is the biggest project with a so loooooooong description because i won\'t test the template');
        $project->setDateStart(new DateTime("now"));
        $project->setDateEnd(new DateTime());
        //$project->setMembers(null);
        //$project->setBacklog(null);
        $project->setAvaibleLabel(array('System', 'Server', 'Client', 'BDD'));
        $this->addReference('prj3', $project);
        $manager->persist($project);

        $project = new Project();
        $project->setName('Legacy Project');
        $project->setDescription('The legacy project<br />
                                 With multiline description');
        $project->setDateStart(new DateTime("now"));
        $project->setDateEnd(new DateTime());
        //$project->setMembers(null);
        //$project->setBacklog(null);
        $project->setAvaibleLabel(array('System', 'Server', 'Client', 'BDD'));
        $this->addReference('prj4', $project);
        $manager->persist($project);
        $manager->flush();
    }

    public function getOrder() {
        return 1;
    }
}
