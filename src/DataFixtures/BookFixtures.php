<?php

namespace App\DataFixtures;

use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BookFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $book1 = new Book();
         $book1->setTitle("Asterix et Cleopatre");
         $book1->setImage("aec.jpg");
         $manager->persist($book1);

        $book2 = new Book();
        $book2->setTitle("Harry Potter et la coupe du feu");
        $book2->setImage("hpelcdf.jpg");
        $manager->persist($book2);

        $book3 = new Book();
        $book3->setTitle("Madame Bovary");
        $book3->setImage("mb.jpg");
        $manager->persist($book3);

        $book4 = new Book();
        $book4->setTitle("Ving mille lieux sous les mers");
        $book4->setImage("vmlslm.jpg");
        $manager->persist($book4);

        $manager->flush();
    }
}
