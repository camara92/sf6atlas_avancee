<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SessionController extends AbstractController
{
    #[Route('/session', name: 'app_session')]
    public function index(Request $request): Response
    {
        //session_start : 
        $session = $request->getSession(); 
        if($session->has('nbVisite')){
            $nombreVisite = $session->get('nbVisite') +1; 
            $session->set('nbVisite', $nombreVisite); 

        }else{
            $nombreVisite= 1;
        }
        $session->set('nbVisite', $nombreVisite); 
        // $nombreVisite = 0; 


        return $this->render('session/index.html.twig', [
            'controller_name' => 'SessionController',
            'session'=>$session
        ]);
    }
}
