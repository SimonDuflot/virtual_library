<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/')]
    public function homepage()
    {
        return new Response('<strong>Virtual Library</strong>: Keep track of the books you read and wish to read.');
    }
}
