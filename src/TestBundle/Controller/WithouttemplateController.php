<?php

namespace TestBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class WithouttemplateController
{
	public function indexAction()
	{
		return new Response('Ici, pas d\'utilisation de template, instanciation de la classe Response');
	}
}