<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomersController extends AbstractController
{
    /**
     * @Route("/", name="customers")
     */
    /*public function index(){
        return $this -> render('views/customers.html.twig');
    }*/

    public function getCustomers(){
        $c = $this->getDoctrine()->getManager();
        //forma1
        //$listCustomers = $cus->getRepository("App:Customers")->findAll(array(), array('customerName' => 'ASC'));
        
        //forma2
        $query = $c->createQuery('SELECT c.customernumber, c.customername , c.contactlastname, c.contactfirstname, c.phone,
        c.addressline1, c.addressline2, c.city, c.state, c.postalcode, c.country, IDENTITY(c.salesrepemployeenumber) salesrepemployeenumber, c.creditlimit FROM App:Customers c ORDER BY c.customername ASC');
        $listCustomers = $query->getResult();

        return $this->render('views/customers.html.twig', [
            'lista' => $listCustomers ]);
    }
}
