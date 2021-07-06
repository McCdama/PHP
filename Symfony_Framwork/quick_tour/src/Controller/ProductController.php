<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="create_product")
     */
    public function createProduct(): Response
    {
        //fetch the entity manager via $this.->getManager();
        $entityManager = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(2000);
        $product->setDescription('Desc');

        // tell Doctrine you want to save the Product.
        $entityManager->persist($product);

        // execute the queries

        $entityManager->flush();


        return new Response ('saved new Product with id' .$product->getId()) ;
    }
}
