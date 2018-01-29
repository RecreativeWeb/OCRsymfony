<?php

namespace TestBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class WithouttemplateController
{
	public function indexAction()
	{
		return new Response('Ici, pas d\'utilisation de template, instanciation de la classe Response');
	}

	public function viewSlugAction($slug, $year, $_format)
	{
		return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$_format."."
        );
	}
}