<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WithtemplateController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestBundle:Withtemplate:index.html.twig', array(
        	'prenom' => "Audrey"
        ));
    }
}
