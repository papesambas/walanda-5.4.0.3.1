<?php

namespace App\Controller;

use App\Entity\Categories;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categories')]

class CategoriesController extends AbstractController
{
    #[Route('/', name: 'app_categories')]
    public function index(): Response
    {
        return $this->render('categories/index.html.twig', [
            'controller_name' => 'CategoriesController',
        ]);
    }

    #[Route('/{slug}', name: 'app_categories_show')]
    public function show(Request $request, Categories $categories): Response
    {
        return $this->render('categories/show.html.twig', [
            'controller_name' => 'CategoriesController',
        ]);
    }
}
