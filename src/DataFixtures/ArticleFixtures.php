<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

for($i = 1; $i <= 10; $i++  ){
    $article = new Article();
    $article->setTitle("Titre de l'article n'$i")
            ->setContent("<p>Contenue de l'article n'$i</p>")
            ->setImage("https://dummyimage.com/400x250/ccc/000")
            ->setCreatedAt(new \DateTime());

    $manager->persist($article);
}

        $manager->flush();
    }
}
