<?php
//  src/Controller/TodaysDateController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TodaysDateController extends AbstractController{
   
    #[Route('/today', name: 'todays_date')]
    public function today(): Response {

        $todaysDate = date("Y/m/d");

        return $this->render('dnesni_datum.html.twig', ['today' => $todaysDate,]);

    }
}