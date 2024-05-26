<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategoryController extends AbstractController
{
    #[Route('/categories', name: 'app_categories')]
    public function index(): Response
    {
        return $this->render('category/list.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('/add_category', name: 'app_add_category')]
    public function add(): Response
    {
        return $this->render('category/add.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
}
