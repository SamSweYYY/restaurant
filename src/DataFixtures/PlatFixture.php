<?php

namespace App\DataFixtures;

use App\Entity\Plat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PlatFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $plat = new Plat();
        $plat->setNom('Salade César');
        $plat->setDescription('Salade verte, poulet grillé, croûtons, parmesan, sauce César');
        $plat->setPrix(12.99);
        $manager->persist($plat);
        $plat = new Plat();
        $plat->setNom('Spaghetti Bolognese');
        $plat->setDescription('Spaghetti, sauce bolognaise maison, parmesan');
        $plat->setPrix(14.99);
        $manager->persist($plat);
        $plat = new Plat();
        $plat->setNom('Tiramisu');
        $plat->setDescription('Café, mascarpone, biscuits à la cuillère, cacao');
        $plat->setPrix(6.99);
        $manager->persist($plat);
        $plat = new Plat();
        $plat->setNom('Soupe à l\'oignon');
        $plat->setDescription('Soupe à l\'oignon gratinée au fromage');
        $plat->setPrix(7.99);
        $manager->persist($plat);
        $plat = new Plat();
        $plat->setNom('Steak frites');
        $plat->setDescription('Steak grillé, frites maison, sauce au choix');
        $plat->setPrix(19.99);
        $manager->persist($plat);
        $plat = new Plat();
        $plat->setNom('Crème brûlée');
        $plat->setDescription('Crème vanille, caramel croquant');
        $plat->setPrix(5.99);
        $manager->persist($plat);

        $manager->flush();
    }
}


