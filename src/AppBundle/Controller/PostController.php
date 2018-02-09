<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class PostController extends Controller{

    /**
     * @Route("/posts", name="posts.index")
     * @Method("GET")
     * @return [type] [description]
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Post');
        $posts = $repository->findAll();
        return $this->render('posts/index.html.twig',[
            'posts' => $posts
        ]);
    }

}