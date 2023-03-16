<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/', name: 'app_first')]
    public function index(): Response
    {
        //die('Je suis la requète first ! '); 
        //    return new Response(
            //         "<head>
            //             <title>Ma première page </title>
            //             <body>
            //             <h1>Hello Daouda ! </h1>
            //             </body>
            //         </head>"
            //     );
            return $this->render('first/index.html.twig', [
                'controller_name' => 'FirstController',
            ]);
    }
}
