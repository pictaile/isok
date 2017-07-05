<?php

namespace StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Put;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * DefaultController constructor.
     * @param \Twig_Environment $twig
     */
    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }


    /**
     * GET Route annotation.
     *  @Rest\View()
     * @Get("/")
     */
    public function indexAction()
    {
        $content = $this->twig->render(
            'StaticBundle:Default:person.html.twig', [
            ]
        );

        return new Response($content);

        //return $this->render('default/index.html.twig');
    }

    /**
     * @Rest\View()
     * @Get("/business")
     */
    public function businessAction() {
        $content = $this->twig->render(
            'StaticBundle:Default:business.html.twig', [
            ]
        );

        return new Response($content);

    }
}
