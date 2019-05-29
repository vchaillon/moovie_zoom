<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        $category = new Category();

        $manager->persist($category);
        $this->addReference('action', $category);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [ArticleFixtures::class];
    }
}
