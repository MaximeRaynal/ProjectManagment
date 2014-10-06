<?php
namespace MaxProject\ProjectManagmentBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use MaxProject\ProjectManagmentBundle\Entity\Task;
use MaxProject\ProjectManagmentBundle\Entity\AvancmentState;

use DateTime;

class LoadTaskData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {
        $task = new Task();
        $task->setShortName('ta1');
        $task->setName('Ma première tache');
        $task->setDescription('C\'est une simple tache');
        $task->setAxe('Feature');
        $task->setDifficulty(1);
        $task->setLabels('Client', 'Server');
        $task->setDueDate(new DateTime("now"));
        $task->setState(AvancmentState::TODO);;

        /*$project = $this->getReference('prj1');

        $task->setProject($project);
        $project->addBacklog($task);*/

        $this->setReference('t1', $task);
        $manager->persist($task);


        $manager->flush();
    }

    public function getOrder() {
        return 1;
    }
}