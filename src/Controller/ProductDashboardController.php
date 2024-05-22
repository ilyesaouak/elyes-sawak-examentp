<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductDashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="product_dashboard")
     */
    public function index(): Response
    {
        return $this->render('product_dashboard/index.html.twig', [
            'controller_name' => 'ProductDashboardController',
        ]);
    }
}
