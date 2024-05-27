<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PurchaseController extends AbstractController
{
    #[Route('/purchase', name: 'app_purchase')]
    public function list(): Response
    {
        return $this->render('purchase/list.html.twig', [
            'controller_name' => 'PurchaseController',
        ]);
    }

    #[Route('/purchase_add', name: 'app_add_purchase')]
    public function add(): Response
    {
        return $this->render('purchase/add.html.twig', [
            'controller_name' => 'PurchaseController',
        ]);
    }

    #[Route('/purchase_return', name: 'app_purchase_return')]
    public function return(): Response
    {
        return $this->render('purchase/return.html.twig', [
            'controller_name' => 'PurchaseController',
        ]);
    }
}
