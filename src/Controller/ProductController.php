<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'app_products')]
    public function index(): Response
    {
        return $this->render('product/list.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route('/add_product', name: 'app_add_product')]
    public function add(): Response
    {
        return $this->render('product/add.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
