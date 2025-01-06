<?php
// src/Controller/HelloWorldController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloWorldController extends AbstractController{

    #[Route('/helloworld', name: 'hello_world')]
    public function hello(): Response {

        return $this->render('helloworld.html.twig');

    }
}