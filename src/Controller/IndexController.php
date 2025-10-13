<?php

namespace App\Controller;


use App\Entity\Plat;
use App\Entity\CategoriePlat;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

final class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(EntityManagerInterface $em): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'plats' => $em->getRepository(Plat::class)->findAll(),
            'categories' => $em->getRepository(CategoriePlat::class)->findAll(), 
        ]);
    }

}
