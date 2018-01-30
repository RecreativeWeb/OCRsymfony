<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class UrlController extends Controller
{

	// Génération d'url depuis un contrôleur qui étend du controleur de base

	// Méthode longue
	//$url = $this->get('router')->generate('oc_platform_home');

	// Méthode courte
	//$url = $this->generateUrl('oc_platform_home');
	
    public function UrlAction()
    {
        // On veut avoir l'URL de l'annonce d'id 5.
        $url = $this->get('router')->generate(
            'test_view', // 1er argument : le nom de la route
            array('id' => 5), // 2e argument : les valeurs des paramètres
            UrlGeneratorInterface::ABSOLUTE_URL
        );
        // $url vaut « /platform/advert/5 »
        
        return new Response("L'URL de l'annonce d'id 5 est : ".$url);
    }

}