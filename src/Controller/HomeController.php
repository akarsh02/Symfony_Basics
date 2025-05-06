<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;//to load twig file
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
 #[Route('/')]
  public function index():Response{
   $content = $this->renderView('home/index.html.twig');
   return new Response($content);
  }
}