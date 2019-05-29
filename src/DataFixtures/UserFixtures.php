<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        $val = new User();
        $val->setRoles(['ROLE_ADMIN']);
        $val->setEmail('val@val.com');
        $val->setPassword(('val'));
        $manager->persist($val);

        $manager->flush();
    }
}
