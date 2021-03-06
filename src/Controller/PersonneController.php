<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonneController extends AbstractController
{
    /**
     * @Route("/personne", name="personne")
     */
    public function index(): Response
    {
        return new Response(
            json_encode([['nom'=>'Baye Niass', 'religion'=>'muslim'],['nom'=>'Mouhamed Niass', 'religion'=>'muslim']])
        );
    }
}
