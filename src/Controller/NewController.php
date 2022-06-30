<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewController extends AbstractController {

    /**
     * @Route("/", name="hello")
     */
    public function hello(){

        $name = 'Cha';

       return $this->render('hello.html.twig', [
           'name' => $name
       ]);
    }
}