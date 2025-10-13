<?php

namespace App\DataFixtures;

use App\Entity\CategoriePlat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Categorie extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categorie = new CategoriePlat();
        $categorie->setNom('Entrée');
        $categorie->setDescription('Les entrées sont des plats légers servis avant le plat principal pour stimuler l\'appétit.');
        $manager->persist($categorie);
        $categorie = new CategoriePlat();
        $categorie->setNom('Plat');
        $categorie->setDescription('Les plats principaux sont les plats principaux d\'un repas, souvent plus copieux et riches en protéines.');
        $manager->persist($categorie);
        $categorie = new CategoriePlat();
        $categorie->setNom('Dessert');
        $categorie->setDescription('Les desserts sont des plats sucrés servis à la fin d\'un repas pour conclure le repas sur une note sucrée.');
        $manager->persist($categorie);
        // $product = new Product();
        // $manager->persist($product);


        $manager->flush();
    }
}
