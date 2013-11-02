<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

// this is imported to get @Template annotation working
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MyOwnController extends Controller
{
    public function firstAction()
    {
        return new Response('This text contains in new Response object.', 200, array(
            'Content-Type' => 'text/plain; charset=utf-8',
        ));
    }

    public function secondAction($slug = null)
    {
        return $this->render('AcmeDemoBundle:MyOwn:second.html.twig', array(
            'haveSlug' => ($slug !== null) ? true : false,
            'slug' => $slug,
        ));
    }

    /**
     * @Template
     */
    public function thirdAction()
    {
        return array();
    }
}
