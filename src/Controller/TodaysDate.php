<?php
//  src/Controller/TodaysDate.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class TodaysDate {
    
    public function today(): Response {

        $todaysDate = date("Y/m/d");

        return new Response(
            "<html><body>{$todaysDate}</body></html>"
        );
    }
}