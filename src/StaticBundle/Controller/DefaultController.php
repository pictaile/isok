<?php

namespace StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Put;

class DefaultController extends Controller
{
    /**
     * GET Route annotation.
     * @Get("/")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
}
