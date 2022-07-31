<?php

namespace App\Controller;

use App\Entity\Publications;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/publications')]

class PublicationsController extends AbstractController
{
    #[Route('/', name: 'app_publications')]
    public function index(): Response
    {
        return $this->render('publications/index.html.twig', [
            'controller_name' => 'PublicationsController',
        ]);
    }

    #[Route('/{slug}', name: 'app_publications_show')]
    public function show(Request $request, Publications $publications): Response
    {
        return $this->render('publications/show.html.twig', [
            'controller_name' => 'PublicationsController',
        ]);
    }
}