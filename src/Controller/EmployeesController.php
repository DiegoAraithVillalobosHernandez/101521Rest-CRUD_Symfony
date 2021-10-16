<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeesController extends AbstractController
{
    /**
     * @Route("/employees", name="employees")
     */
    /*public function index(){
    *   return $this -> render('views/employees.html.twig');
    }*/

    public function getEmployees(){
        $e = $this->getDoctrine()->getManager();

        $query = $e->createQuery('SELECT e.employeenumber, e.firstname , e.lastname, e.extension, e.email,
        IDENTITY(e.officecode) officecode, IDENTITY(e.reportsto) reportsto, e.jobtitle FROM App:Employees e ORDER BY e.firstname ASC');
        $listEmployees = $query->getResult();

        return $this->render('views/employees.html.twig', [
            'lista' => $listEmployees ]);
    }
}
