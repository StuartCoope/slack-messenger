<?php

namespace StuIo\SlackMessengerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('StuIoSlackMessengerBundle:Default:index.html.twig', array('name' => $name));
    }
}
