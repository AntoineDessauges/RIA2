<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Abraham\TwitterOAuth\TwitterOAuth;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(){

       
        $like_count = $this->get_fb_likes();
        $follow_count = $this->get_twitter_follows();

        return $this->render('default/index.html.twig', [
            'like_count' => $like_count,
            'follow_count' => $follow_count
        ]);

    }

    function get_twitter_follows(){

        $consumer_key = $this->container->getParameter('twitter')['consumer_key'];
        $consumer_secret = $this->container->getParameter('twitter')['consumer_secret'];

        $oauth = new TwitterOAuth($consumer_key, $consumer_secret);
        $accessToken = $oauth->oauth2("oauth2/token", ["grant_type" => "client_credentials"]);

        $twitter = new TwitterOAuth($consumer_key, $consumer_secret, null, $accessToken->access_token);
        $cpnv = $twitter->get("users/show", ["screen_name" => "cpnv_ch"]);

        return $cpnv->followers_count;

    }

    function get_fb_likes(){

        $app_id = $this->container->getParameter('facebook')['app_id'];
        $app_secret = $this->container->getParameter('facebook')['app_secret'];
        $access_token = $this->container->getParameter('facebook')['access_token'];

        $fb = new \Facebook\Facebook([
            'app_id' => $app_id,
            'app_secret' => $app_secret,
            'default_graph_version' => 'v2.12',
        ]);

        $response = $fb->get('/cpnv.ch?fields=fan_count', $access_token);
        return $response->getGraphNode()['fan_count'];
    }
}
