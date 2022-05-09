<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class QuestionController extends AbstractController{
    #[Route('/', name:'symfony_page')]
    public function homepage():Response {
// exit(" test without new Response");
        return new Response (
            '<html><body><div> That is page for Symfony task</div><div>What a bewitching controller we have conjured!</div> 
            <body><html>'
        );
    }
 
    #[Route('/about', name:'questions_page')]
    public function questionpage(){
    exit(" test from about without new Response");
    // return new Response (
    //     '<html><body><div> That is page for Symfony task</div><div>What a bewitching controller we have conjured!</div> 
    //     <body><html>');

    

}

}



