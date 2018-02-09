<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class HelloController extends Controller{

    /**
     * [helloAction description]
     * @Route("/hello/{slug}", name="hello")
     * facultatif, accès que en get ici
     * @Method("get")
     * @param  [type] $slug [description]
     * @return [type]       [description]
     */
    public function helloAction($slug) {
        return $this->render('hello.html.twig', [
            'name' => $slug
        ]);
    }

}