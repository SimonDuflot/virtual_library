<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $booksReadCount = 10;

        $myBook = [
            'title' => 'La Forêt Sombre',
            'author' => 'Liu Cixin',
            'status' => 'To read',
            'chronology' => '2 of 3',
        ];

        return $this->render('main/homepage.html.twig', [
            'numberOfBooksRead' => $booksReadCount,
            'myBook' => $myBook,
        ]);
    }
}
