<?php

namespace Descartes\EvenementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Descartes\EvenementBundle\Entity\Evenement;
use Descartes\EvenementBundle\Form\EvenementType;
use Descartes\EvenementBundle\Entity\Theme;

class EvenementController extends Controller
{
    public function indexAction()
    {
		$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$EvenementEntity = new Evenement($service_Recupbd->getBd());
		
		$listeEvenements = $EvenementEntity->getListeEvenements();
		
        return $this->render('DescartesEvenementBundle:Evenement:index.html.twig',array('events' => $listeEvenements));
    }
	
	public function creerevenementAction()
	{
		$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$bd = $service_Recupbd->getBd();
		
		$idCreateur = 1;
		$evenement = new Evenement($bd,$idCreateur);
		
		$theme = new Theme($bd);
		$themes = $theme->getThemes();

		$form = $this->createForm(new EvenementType($themes), $evenement);

		$request = $this->get('request');
		if ($request->getMethod() == 'POST') {
			$form->bind($request);

			if ($form->isValid()) {
				$evenement->insertBd();

				//return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
			}
		}

		// On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
		return $this->render('DescartesEvenementBundle:Evenement:creerevenement.html.twig', array('form' => $form->createView(),));
	}
	
    public function filtreAction()
    {		
        return $this->render('DescartesEvenementBundle:Filtre:index.html.twig');
    }
	
    public function apercuAction()
    {		
        return $this->render('DescartesEvenementBundle:Apercu:index.html.twig');
    }
	
    public function calendrierAction()
    {		
        return $this->render('DescartesEvenementBundle:Calendrier:index.html.twig');
    }
}
