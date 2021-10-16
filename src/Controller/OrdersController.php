<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{
    /**
     * @Route("/orders", name="orders")
     */
    /** 
    * public function index(): Response
    *{
    *    return $this -> render('views/orders.html.twig');
    *}
    */
    public function getOrders(){
        $o = $this->getDoctrine()->getManager();

        $query = $o->createQuery('SELECT o.ordernumber, o.orderdate , o.requireddate, o.shippeddate, o.status,
        o.comments, IDENTITY(o.customernumber) customernumber FROM App:Orders o ORDER BY o.orderdate ASC');
        $listOrders = $query->getResult();

        return $this->render('views/orders.html.twig', [
            'lista' => $listOrders ]);
    }
}
