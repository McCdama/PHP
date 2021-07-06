<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/plain", name="plain")
     */
    public function helloPlain(): Response
    {
        return new Response("Hello there", Response::HTTP_OK,
            ['content-type' => 'text/plain']);
    }
    /**
     * @Route("/twig", name="twig")
     */
    public function helloTwig(): Response
    {
        $message = "Hello from Twig";
        return $this->render('hello/index.html.twig', ["message" => $message]);
    }
}