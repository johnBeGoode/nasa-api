<?php

namespace App\Controller;

use App\Services\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CallApiService $api): Response
    {
        $data = $api->fetchData();

        return $this->render('home/index.html.twig', [
            'data' => $data,
        ]);
    }
}
