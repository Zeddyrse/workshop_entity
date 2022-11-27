<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\SquirrelRepository;
use App\Repository\NutRepository;
use App\Entity\Squirrel;



class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SquirrelRepository $squirrelRepository, NutRepository $nutRepository): Response
    {
      return $this->render('index.html.twig',
      ['squirrels' => $squirrelRepository->findAll(),
        'nuts' => $nutRepository->findAll()
      ]);
    }
}