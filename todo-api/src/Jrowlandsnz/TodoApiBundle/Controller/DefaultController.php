<?php

namespace Jrowlandsnz\TodoApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //return $this->render('JrowlandsnzTodoApiBundle:Default:index.html.twig', array('name' => $name));
        return $this->render('JrowlandsnzTodoApiBundle:Default:index.html.twig');
    }
}
