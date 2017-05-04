<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function indexAction()
    {
		$hello="hello world";
        return $this->render('FrontBundle:Front:index.html.twig');
    }
}
