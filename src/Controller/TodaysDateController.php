<?php
//  src/Controller/TodaysDateController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class TodaysDateController {
    
    public function today(): Response {

        $todaysDate = date("Y/m/d");

        return new Response(
            "<html><body>{$todaysDate}</body></html>"
        );
    }
}