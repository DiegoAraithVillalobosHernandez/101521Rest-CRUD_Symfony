<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
   
    public function getProducts(){
        $p = $this->getDoctrine()->getManager();

        $query = $p->createQuery('SELECT p.productcode, p.productname , IDENTITY(p.productline) productline, p.productscale,
        p.productvendor,p.productdescription,p.quantityinstock,p.buyprice,p.msrp
        FROM App:Products p ORDER BY p.productname ASC');
        $listProducts = $query->getResult();

        return $this->render('views/products.html.twig', [
            'lista' => $listProducts ]);
    }
}
