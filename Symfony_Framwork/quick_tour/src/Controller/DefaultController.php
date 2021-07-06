<?php
// src/Controller/DefaultController.php
namespace App\Controller;

//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
    * @Route("/hello/{name}")
    */
    public function index($name)
    {
        //return new Response("Hello $name!");
        return $this->render('default/index.html.twig', ['name'=>$name]);
    }

    /**
     * @Route("/simple")
     */
    /*public function simple()
    {
        return new Response('Easy and Simple');
    }*/
    /**
+      * @Route("/lucky/number")
+      */
     /*public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }*/
}
