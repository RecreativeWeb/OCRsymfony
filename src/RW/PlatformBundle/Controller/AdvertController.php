<?php

namespace RW\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{

  public function indexAction()
  {
    $content = $this->get('templating')->render('RWPlatformBundle:Advert:index.html.twig');
    
    return new Response($content);
  }


  // La route fait appel à RWPlatformBundle:Advert:view
  
  // on doit donc définir la méthode viewAction
  
  // On donne à cette méthode l'argument $id, pour correspondre au paramètre {id} de la route
  // 
  public function viewAction($id)
  {
    // $id vaut 5 si l'on a appelé l'URL /platform/advert/5

    // on récupèrera depuis la base de données l'annonce correspondant à l'id $id
    
    // Puis on passera l'annonce à la vue pour qu'elle puisse l'afficher

    return new Response("Affichage de l'annonce d'id : ".$id);
  }
    

}