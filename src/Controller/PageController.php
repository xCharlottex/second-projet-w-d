<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController {

    /**
     * @Route("/", name="hello")
     */
    public function hello(){

        $category = [
            'title' => 'Politique',
            'color' => 'pink',
            'published' => true,
            'description' => "Décrypter l'actualité politique avec le prisme de David Robert"
        ];

       return $this->render('category.html.twig', [
           'category' => $category
       ]);
    }
}