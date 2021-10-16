<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfficesController extends AbstractController
{
    /**
     * @Route("/offices", name="offices")
     */

    /** 
    *public function index(): Response
    *{
    *    return $this -> render('views/offices.html.twig');
    *}
    */
    public function getOffices(){
        $o = $this->getDoctrine()->getManager();

        $query = $o->createQuery('SELECT o.officecode, o.city , o.phone, o.addressline1, o.addressline2, o.state,
        o.country, o.postalcode , o.territory FROM App:Offices o ORDER BY o.city ASC');
        $listOffices = $query->getResult();

        return $this->render('views/offices.html.twig', [
            'lista' => $listOffices ]);
    }
}
