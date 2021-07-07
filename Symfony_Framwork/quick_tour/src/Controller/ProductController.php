<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;

class ProductController extends AbstractController
{

    /**
     * @Route("/product/view")
     */
    public function viewAbove()
    {
        $minPrice = 50;
        $products = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findAllGreaterThanPrice($minPrice);
        return $this->render('product/show.html.twig', ['product' => $products]);
    }


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
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', ['product' => $product->getName()]);
    }



    /**
     * @Route("/product/edit/{id}")
     */
    public function update(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        //1- fetching the object from Doctrine;
        $product = $entityManager->getRepository(Product::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException('No Product found for id' . $id);
        }
        //2- modifying the object
        $product->setName('New Product Name');
        //3- calling flush() on the entity manager
        $entityManager->flush();

        return $this->redirectToRoute('product_show', ['id' => $product->getId()]);
    }



    /**
     * @Route("/product/remove/{id}")
     */
    public function remove(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        //1- fetching the object from Doctrine;
        $product = $entityManager->getRepository(Product::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException('Product deleted on the ID: ' . $id);
        }
        //2- modifying the object
        $entityManager->remove($product); // requires here a call to the remove() method of the entity manager:
        //3- calling flush() on the entity manager
        $beforeDelete = $product->getId();
        //echo $beforeDelete;
        $entityManager->flush();

        return new Response('Deleted Product with Id: ' . $beforeDelete);
        //return $this->redirectToRoute('product_show', ['id' => $product->getId()]);
    }
}
