<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloWordController extends AbstractController
{
    /**
     * @Route("/", name="hello_word")
     */
    public function index()
    {
        return $this->render('hello_word/index.html.twig', [
            'controller_name' => 'HelloWordController',
        ]);
    }
}
