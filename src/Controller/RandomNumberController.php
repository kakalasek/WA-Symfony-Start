<?php
// src/Controller/RandomNumberController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RandomNumberController extends AbstractController{

    #[Route('/random', name: 'random_number')]
    public function random(): Response {

        $randomNumber = rand();

        return $this->render('nahodne_cislo.html.twig', ['randomNumber' => $randomNumber,]);
    }
}