<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ProducType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

 /**
     * @Route("/index/", name="index")
     */
    public function index(Request $request)
    {
        return $this->render('index.html.twig');
    }
 /**
     * @Route("/iniciosesion/", name="iniciosesion")
     */
    public function iniciosesion(Request $request)
    {
        return $this->render('iniciosesion.html.twig');
    }

}