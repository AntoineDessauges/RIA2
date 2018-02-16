<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(){

        $app_id = $this->container->getParameter('facebook')['app_id'];
        $app_secret = $this->container->getParameter('facebook')['app_secret'];
        $access_token = $this->container->getParameter('facebook')['access_token'];

        $fb = new \Facebook\Facebook([
          'app_id' => $app_id,
          'app_secret' => $app_secret,
          'default_graph_version' => 'v2.12',
        ]);

        $response = $fb->get('/cpnv.ch?fields=fan_count', $access_token);
        $like_count = $response->getGraphNode()['fan_count'];

        return $this->render('default/index.html.twig', [
            'like_count' => $like_count
        ]);

    }
}
