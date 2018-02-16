<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        $fb = new \Facebook\Facebook([
          'app_id' => '429198470842377',
          'app_secret' => 'eee2d604f622263e2c5b3fb91ead0738',
          'default_graph_version' => 'v2.12',
        ]);

        $response = $fb->get('/cpnv.ch?fields=fan_count', '429198470842377|sCWL3enKAwhPTB4bhf-8rtyhG-4');
        $like_count = $response->getGraphNode()['fan_count'];

        return $this->render('default/index.html.twig', [
            'like_count' => $like_count
        ]);
    }
}
