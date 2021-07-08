<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(Request $request): Response
    {
        /* return $this->render('conference/index.html.twig', [
            'controller_name' => 'ConferenceController',
        ]); */
        /*  return new Response(<<<EOF
<html>
        <body>
            <img src="/images/under-construction.gif" />
        </body>
</html>
EOF); */

        $greet = '';
        if ($name = $request->query->get('hello')) {
            $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }
        // try both:
        /* http://127.0.0.1:8001/ */
        /* http://127.0.0.1:8001/?hello=Mohed */


        return new Response(<<<EOF
<html>
        <body>
        $greet
            <img src="/images/under-construction.gif" />
        </body>
</html>
EOF);
    }
}
