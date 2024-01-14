<?php

namespace App\DataFixtures;

use App\Factory\WorkflowBlueprintFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        WorkflowBlueprintFactory::createMany(10);
        $manager->flush();
    }
}
