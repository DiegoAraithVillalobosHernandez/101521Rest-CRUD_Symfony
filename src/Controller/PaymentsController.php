<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentsController extends AbstractController
{
    /**
     * @Route("/payments", name="payments")
     */
    /**   
    * public function index(): Response
    * {
    *    return $this -> render('views/payments.html.twig');
    *    }
    */

    public function getPayments(){
        $p = $this->getDoctrine()->getManager();

        $query = $p->createQuery('SELECT IDENTITY(p.customernumber) customernumber, p.checknumber , p.paymentdate, p.amount
        FROM App:Payments p ORDER BY p.customernumber ASC');
        $listPayments = $query->getResult();

        return $this->render('views/payments.html.twig', [
            'lista' => $listPayments ]);
    }
}
