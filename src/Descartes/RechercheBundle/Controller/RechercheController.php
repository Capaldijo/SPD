<?php

namespace Descartes\RechercheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Descartes\UtilisateurBundle\Entity\Utilisateur;

class RechercheController extends Controller
{
    public function indexAction()
    {

    	$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
    	$user = new Utilisateur();

    	$form = $this->createFormBuilder($user)
    					 ->add('search', 'text')
    					 ->getForm();


    	// On récupère la requête
    	$request = $this->get('request');

	    // On vérifie qu'elle est de type POST
	    if ($request->getMethod() == 'POST')
	    {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $utilisateur et $image contiennent les valeurs entrées dans les formulaires par le visiteur
            $form->bind($request);

            return $this->redirect($this->generateUrl('descartes_recherche_resultSearch', array('search' => $user->getSearch())));
	    }

        return $this->render('DescartesRechercheBundle:Recherche:index.html.twig', array('form' => $form->createView(),));
    }

    public function searchAction($search)
    {
        $service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
        $user = new Utilisateur();

    	$users=$user->rechercheUser($service_Recupbd->getBd(), $search);
        $events=$user->rechercheEvent($service_Recupbd->getBd(), $search);
    	return $this->render('DescartesRechercheBundle:Recherche:search.html.twig', array('utilisateurs' => $users, 'events' => $events));
    }
}
