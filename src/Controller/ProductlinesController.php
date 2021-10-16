<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductlinesController extends AbstractController
{
    /**
     * @Route("/productlines", name="productlines")
     */
    /** 
    *public function index(): Response
    *{
    *    return $this -> render('views/productlines.html.twig');
    *}
    */
    public function getProductLines(){
        $pl = $this->getDoctrine()->getManager();

        $query = $pl->createQuery('SELECT p.productline, p.textdescription , p.htmldescription, p.image
        FROM App:ProductLines p ORDER BY p.productline ASC');
        $listProductlines = $query->getResult();

        return $this->render('views/productlines.html.twig', [
            'lista' => $listProductlines ]);
    }
}
