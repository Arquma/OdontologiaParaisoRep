<?php

namespace EstudianteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EstudianteBundle:Default:index.html.twig', array('name' => $name));
    }
}
