<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\Date;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $image = 'killbill.jpg';
        //Todo : Call Api
        for ($i = 0; $i < 10; $i++) {
            $article = new Article();
            $article->setTitle('Kill Bill');
            $article->setBody('loremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm');
            $article->setCreation(new \DateTime());
            $article->setCategoryName($this->getReference('action'));
            $article->setImage($image);
        }
        $manager->persist($article);
        $manager->flush();
    }

    public function getDependencies()
    {

        return [CategoryFixtures::class];
    }
}