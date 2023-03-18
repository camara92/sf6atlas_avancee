<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FirstController extends AbstractController
{
    #[Route('/todo', name: 'app_first')]
    public function index(): Response
    {
        //die('Je suis la requète first ! '); 
       
            return $this->render('first/index.html.twig', [
                'controller_name' => 'FirstController',
            ]);
    }

    #[Route('/sayHello/{name}/{prenom} ', name: 'app_sayHello')]
    public function sayHEllo( Request $request,  $name, $prenom ): Response
    {
        //die('Je suis la requète first ! '); 
       //dd($request);
            return $this->render('first/hello.html.twig', [
                'controller_name' => 'FirstController',
                'name'=> $name, 
                'prenom'=>$prenom
            ]);
    }
}
