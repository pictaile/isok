<?php

namespace StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcherInterface;
use StaticBundle\Entity\Messages;

class ChatController extends Controller
{

    public function getUsersAction()
    {
        $request = Request::createFromGlobals();
        $content = $request->getContent();


        return new JsonResponse(['status' => 'susasssdasdasdccess']);
    } // "post_users"    [GET] /users

    public function postChatAction()
    {
        $request = Request::createFromGlobals();
        $content = $request->getContent();
        var_dump($content);

        return new JsonResponse(['status' => 'success']);
    } // "post_users"    [POST] /users


}
