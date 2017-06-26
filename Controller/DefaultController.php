<?php

namespace Boson\Bundle\EditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BosonEditorBundle:Default:index.html.twig');
    }
}
