<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ProducType;
use AppBundle\Entity\ropa;

class ropaController extends Controller
{
        /**
     * @Route("/ropa/", name="ropa")
     */
    public function ropaAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(ropa::class);
        $ropa = $repository->findAll();
        return $this->render('ropa.html.twig', array('ropa' => $ropa));
    }
       /**
     * @Route("/buscarid/{id}", name="buscarid_id")
     */
    public function buscaridAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(buscarid::class);
        $ropa = $repository->findOneByid($id);
        return $this->render('buscarid.html.twig', array('buscarid' => $buscarid));
    }
}