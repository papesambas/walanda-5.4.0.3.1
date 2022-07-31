<?php

namespace App\Controller;

use App\Entity\Pages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/pages')]

class PagesController extends AbstractController
{
    #[Route('/pages', name: 'app_pages')]
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    #[Route('/{slug}', name: 'app_pages_show')]
    public function show(Request $request, Pages $pages): Response
    {
        return $this->render('pages/show.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
}