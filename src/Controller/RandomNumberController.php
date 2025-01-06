<?php
// src/Controller/RandomNumberController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class RandomNumberController {
    public function random(): Response {

        $randomNumber = rand();

        return new Response(
            "<html><body>$randomNumber</body></html>"
        );
    }
}