<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="create_product")
     */
    public function createProduct(ValidatorInterface $vali): Response
    {
        //fetch the entity manager via $this.->getManager();
        $entityManager = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setName(false);
        $product->setPrice('2000');
        $product->setDescription('Desc');

        // tell Doctrine you want to save the Product.
        $entityManager->persist($product);

        // execute the queries

        $entityManager->flush();

        $err = $vali->validate($product);
        if (count($err) > 0) {
            # code...
            return new Response((string)$err, 400);
        }

        
        return new Response('saved new Product with id' . $product->getId());
    }

    /**
     * @Route("/product/{id}", name="product_show")
     */
    public function show(int $id): Response

    {
        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($id);

        if (!$product) {
            return $this->render('product/notFound.html.twig',['product'=>$product]);
        
            /*     throw $this->createNotFoundException(
                'No Product found for id' . $id
            ); */
        }

        return $this->render('product/show.html.twig',['product'=>$product]);
        //return new Response('checkout this great Product: ' . $product->getName());
    }
}
