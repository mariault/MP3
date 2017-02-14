<?php

namespace BundleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BundleBundle:Default:index.html.twig');
    }
}
