<?php

namespace StaticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use StaticBundle\Entity\Messages;

class ChatController extends Controller
{
    public function postMessageAction()
    {
        $content = $this->getRequest()->getContent();

    } // "post_users"    [POST] /users
}
