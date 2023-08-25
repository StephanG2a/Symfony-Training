<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog/{page<\d+>}', name: 'blog_list')]
    public function list(int $page): Response
    {
        // ...
    }

    #[Route('/blog/{slug}', name: 'blog_show')]
    public function show($slug): Response
    {
        // ...
    }
}
