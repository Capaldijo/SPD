<?php

namespace Descartes\EvenementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Descartes\EvenementBundle\Entity\Evenement;
use Descartes\EvenementBundle\Form\EvenementType;
use Descartes\EvenementBundle\Entity\Theme;
use Descartes\EvenementBundle\Entity\Filtre;

class EvenementController extends Controller
{
    public function indexAction() //action qui affiche toutes les sorties existentes dans la bd (écran d'accueil)
    {
		$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$EvenementEntity = new Evenement($service_Recupbd->getBd());
		
		$listeEvenements = $EvenementEntity->getListeEvenements();
		
        return $this->render('DescartesEvenementBundle:Evenement:index.html.twig',array('events' => $listeEvenements));
    }
	
	public function creerevenementAction() //action qui génère form pour la création d'une sortie
	{
		$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$bd = $service_Recupbd->getBd();
		
		if($this->getUser()==null)return $this->render('DescartesEvenementBundle:Evenement:permissionrefuse.html.twig');
		
		$idCreateur = $this->getUser()->getId();
		$evenement = new Evenement($bd,$idCreateur);
		
		$theme = new Theme($bd);
		$themes = $theme->getThemes();

		$form = $this->createForm(new EvenementType($themes), $evenement);

		$request = $this->get('request');
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);

			if ($form->isValid()) {
				$evenement->insertBd();

				return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
			}
		}

		// On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire
		return $this->render('DescartesEvenementBundle:Evenement:creerevenement.html.twig', array('form' => $form->createView(),));
	}
	
    public function voirevenementAction($id) //action qui affichera l'évènement sur lequel le user à cliqué
    {
    	if($this->getUser() == null)
	    {
	    	return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

		$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$EvenementEntity = new Evenement($service_Recupbd->getBd());
		
		$event = $EvenementEntity->getEvenement($id);
		$comments = $EvenementEntity->getCommEvent($id);
		$noteEvent = $EvenementEntity->getNote($id);

		$listeNoteur = $EvenementEntity->getNoteur($id);

		$hasNoter = FALSE;
		foreach ($listeNoteur as $noteur) {
			if($this->getUser()->getId() == $noteur[0])
				$hasNoter = TRUE;
		}

		$listeParticipant = $EvenementEntity->getParticipant($id); //recuperation liste participant pour verif si user courant en fait parti

		$isParticipant = FALSE;
		foreach ($listeParticipant as $participant) {
			if($this->getUser()->getId() == $participant[0])
				$isParticipant = TRUE;
		}


        return $this->render('DescartesEvenementBundle:Evenement:voirevenement.html.twig',
        						array('event' => $event, 'comments' => $comments, 'id_user' => $this->getUser()->getId(),
        						'isParticipant' => $isParticipant, 'noteEvent' => $noteEvent, 'hasNoter' => $hasNoter));
    }
	
    public function filtreAction() //action qui affiche la partie filtre
    {		
        return $this->render('DescartesEvenementBundle:Filtre:index.html.twig');
    }
	
    public function apercuAction() //action qui affiche la partie aperçu des events populaires et récents
    {
    	$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$EvenementEntity = new Evenement($service_Recupbd->getBd());

		$listeEvenementsPop = $EvenementEntity->getPopularEvent();
		$listeEvenementsRec = $EvenementEntity->getRecentEvent();
        return $this->render('DescartesEvenementBundle:Apercu:apercu.html.twig', 
        						array('eventsPop' => $listeEvenementsPop, 'eventsRec' => $listeEvenementsRec));
    }
	
    public function calendrierAction() //action qui affiche la partie calendrier
    {	
		return $this->render('DescartesEvenementBundle:Calendrier:index.html.twig');
    }
	
	public function filtrerparAction($filtre) //action qui retourner les events en fonction du filtre selectionné
	{
		$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$EvenementEntity = new Evenement($service_Recupbd->getBd());

		$listeEvenements = $EvenementEntity->getFiltreEvent($filtre);

		return $this->render('DescartesEvenementBundle:Evenement:index.html.twig', array('events' => $listeEvenements));
	}

	public function myEventsAction() //action qui retournera les events sur lesquels le user courant participe
	{
		if($this->getUser() == null)
	    {
	    	return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

		$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$EvenementEntity = new Evenement($service_Recupbd->getBd());

		$listeEvenements = $EvenementEntity->getMyEvent($this->getUser()->getId());

		return $this->render('DescartesEvenementBundle:Evenement:index.html.twig',array('events' => $listeEvenements));
	}

	public function postCommentAction($id) //action qui permettra de poster un commentaire sur une sortie
	{
		if($this->getUser() == null)
	    {
	    	return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

	    $service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$EvenementEntity = new Evenement($service_Recupbd->getBd());

	    $request = $this->get('request');
		if ($request->getMethod() == 'POST')
		{
			$commentaire = $this->getRequest()->request->get('comment');

			$EvenementEntity->postComment($commentaire, $id, $this->getUser()->getId());

			return $this->redirect($this->generateUrl('descartes_evenement_voir', array('id' => $id)));
		}
	}

	public function listeParticipantAction($id) //action qui génère la liste des participants d'une sortie donnée
	{
		if($this->getUser() == null)
	    {
	    	return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

	    $service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$EvenementEntity = new Evenement($service_Recupbd->getBd());

		$listeParticipant = $EvenementEntity->getParticipant($id);

		return $this->render('DescartesEvenementBundle:Evenement:participants.html.twig',
								array('participants' => $listeParticipant, 'id_event' => $id));
	}

	public function participeAction($id)
	{
		if($this->getUser() == null)
	    {
	    	return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

	    $service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$EvenementEntity = new Evenement($service_Recupbd->getBd());

		$EvenementEntity->addParticipe($id, $this->getUser()->getId());

		return $this->redirect($this->generateUrl('descartes_evenement_voir', array('id' => $id)));
	}

	public function settingAction($id)
	{
		$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$EvenementEntity = new Evenement($service_Recupbd->getBd());

		$EvenementEntity->getEvent($id);

		$theme = new Theme($service_Recupbd->getBd());
		$themes = $theme->getThemes();

		$form = $this->createForm(new EvenementType($themes), $EvenementEntity);

		$request = $this->get('request');
		if ($request->getMethod() == 'POST')
		{
			$form->bind($request);

			if ($form->isValid())
			{
				$EvenementEntity->updateEvent($id);	

				return $this->redirect($this->generateUrl('descartes_evenement_voir', array('id' => $id)));
			}
		}

		return $this->render('DescartesEvenementBundle:Evenement:setting.html.twig', 
								array('form' => $form->createView(), 'id_event' => $id));
	}

	public function cancelPartAction($id)
	{
		if($this->getUser() == null)
	    {
	    	return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

	    $service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$EvenementEntity = new Evenement($service_Recupbd->getBd());

		$EvenementEntity->delParticipe($id, $this->getUser()->getId());

		return $this->redirect($this->generateUrl('descartes_evenement_voir', array('id' => $id)));
	}

	public function addNoteAction($id)
	{
		if($this->getUser() == null)
	    {
	    	return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

	    $service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$EvenementEntity = new Evenement($service_Recupbd->getBd());

		$request = $this->get('request');
		if ($request->getMethod() == 'POST')
		{
			$note = $this->getRequest()->request->get('note');

			$EvenementEntity->addNote($this->getUser()->getId(),$id, $note);

			return $this->redirect($this->generateUrl('descartes_evenement_voir', array('id' => $id)));
		}
	}
}
