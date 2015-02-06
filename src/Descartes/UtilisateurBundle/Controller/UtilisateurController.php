<?php

namespace Descartes\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Descartes\UtilisateurBundle\Entity\Image;
use Descartes\UtilisateurBundle\Form\ImageType;
use Descartes\UtilisateurBundle\Entity\Utilisateur;
use Descartes\UtilisateurBundle\Form\UtilisateurType;
use Descartes\UtilisateurBundle\Form\UtilisateurEditType;
use Descartes\UtilisateurBundle\Entity\Message;
use Descartes\UtilisateurBundle\Form\MessageType;
use Descartes\UtilisateurBundle\Form\MessageDelType;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Doctrine\DBAL\Types\Type;


class UtilisateurController extends Controller
{
    public function indexAction()
    {
    	$userManager = $this->get('fos_user.user_manager');
    	$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
    	$user = new Utilisateur($service_Recupbd->getBd());

    	$friendListS=$user->getUsersFriendListS($service_Recupbd->getBd(), $this->getUser()->getId());

        return $this->render('DescartesUtilisateurBundle:Utilisateur:index.html.twig', array('friends' => $friendListS));
    }

    public function inscriptionAction()
    {
    	$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
    	$bdd = $service_Recupbd->getBd();
    	$userManager = $this->get('fos_user.user_manager');
    	$user = new Utilisateur();
    	$form = $this->createForm(new UtilisateurType, $user); // Appel au formulaire par defaut d'utilisateur

		// On récupère la requête
    	$request = $this->get('request');

	    // On vérifie qu'elle est de type POST
	    if ($request->getMethod() == 'POST')
	    {
	      // On fait le lien Requête <-> Formulaire
	      // À partir de maintenant, la variable $utilisateur contient les valeurs entrées dans le formulaire par le visiteur
	      $form->bind($request);

	      // On vérifie que les valeurs entrées sont correctes
	      	if ($form->isValid())
		    {

		    	$user->setEnabled(true); // Sinon compte pas activé et connexion impossible
 		    	$userManager->updateUser($user);

		        // On redirige vers la page accueil
		        return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
		    }
	    }

		// On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
		return $this->render('DescartesUtilisateurBundle:Utilisateur:inscription.html.twig', array(
		  'form' => $form->createView(),));
    }

    public function profilAction($login)
    {

    	$userManager = $this->get('fos_user.user_manager');
    	// On recupère l'utilisateur en fonction du login
    	$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
    	$utilisateur = new Utilisateur();
    	//$user=$utilisateur->getUtilisateur($login);
    	$user =	$userManager->findUserByUsername($login);

    	if(!$user)
    		throw new \Exception('Quelque chose a mal tourné!');

    	if($this->getUser() == null)
	    	$ami = null;
    	else
    		$ami=$utilisateur->isFriendWith($service_Recupbd->getBd(),$this->getUser()->getId(), $user->getId());

    	$interestList = $utilisateur->getCentreInteretUser($service_Recupbd->getBd(),$user->getId());

		$formBuilder = $this->createFormBuilder($utilisateur);
		$formAddDelF = $formBuilder->getForm();

		// On récupère la requête
		$request = $this->get('request');

		// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST')
		{
			// On fait le lien Requête <-> Formulaire
			$formAddDelF->bind($request);

			// On vérifie que les valeurs entrées sont correctes
			if ($formAddDelF->isValid() AND $ami == null)
			{
				// On l'enregistre notre objet $evenement dans la base de données
				$utilisateur->addFriend($service_Recupbd->getBd(), $this->getUser()->getId(), $user->getId());

				// On redirige vers la page de visualisation du profil de l'utilisateur
				return $this->redirect($this->generateUrl('descartes_utilisateur_profil', array('login' => $user->getUsername())));
			}

			// On vérifie que les valeurs entrées sont correctes
			else if ($formAddDelF->isValid())
			{
				// On l'enregistre notre objet $evenement dans la base de données
				$utilisateur->delFriend($service_Recupbd->getBd(), $this->getUser()->getId(), $user->getId());

				// On redirige vers la page de visualisation du profil de l'utilisateur
				return $this->redirect($this->generateUrl('descartes_utilisateur_profil', array('login' => $user->getUsername())));
			}
		}
    	
    	return $this->render('DescartesUtilisateurBundle:Utilisateur:profil.html.twig', 
    						array('user' => $user, 'ami' => $ami, 'interestList' => $interestList, 'formAdd' => $formAddDelF->createView()));
    }

    public function loginAction()
    {
    	
    	// Si le visiteur est déjà identifié, on le redirige vers l'accueil
	    if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
	    	
	      return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

	    $request = $this->getRequest();
	    $session = $request->getSession();

	    // On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
	    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
	      $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
	    } else {
	      $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
	      $session->remove(SecurityContext::AUTHENTICATION_ERROR);
	    }

	    return $this->render('DescartesUtilisateurBundle:Utilisateur:login.html.twig', array(
	      // Valeur du précédent nom d'utilisateur entré par l'internaute
	      'last_username' => $session->get(SecurityContext::LAST_USERNAME),
	      'error'         => $error,));
    }

    public function settingAction()
    {
    	//Si l'utilsateur n'est pas authentifié, on redirige vers l'accueil
	    if($this->getUser() == null)
	    {
	    	return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

	    $userManager = $this->get('fos_user.user_manager');
    	$service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
    	$login = $this->getUser()->getUsername();

    	$user = $this->getUser();
    	$formProfil = $this->createForm(new UtilisateurEditType, $user); // Appel au formulaire par defaut d'utilisateur

    	$image = new Image();
    	$formImage = $this->createForm(new ImageType, $image); // Appel au formulaire par defaut d'image

    	// On récupère la requête
    	$request = $this->get('request');

	    // On vérifie qu'elle est de type POST
	    if ($request->getMethod() == 'POST')
	    {
	      // On fait le lien Requête <-> Formulaire
	      // À partir de maintenant, la variable $utilisateur et $image contiennent les valeurs entrées dans les formulaires par le visiteur
	      $formProfil->bind($request);
	      $formImage->bind($request);

	      // On vérifie que les valeurs entrées sont correctes
	      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
	      	if ($formProfil->isValid())
		    {
		        // On l'enregistre notre objet $utilisateur dans la base de données
		    	//$user->updateUtilisateur($service_Recupbd->getBd());
		    	$user->setCentreInteretUser($service_Recupbd->getBd(), $user->getId());
		    	$userManager->updateUser($this->getUser());

		        // On redirige vers la page profil
		        return $this->redirect($this->generateUrl('descartes_utilisateur_profil', array('login' => $this->getUser()->getUsername())));
		    }
		    else if($formImage->isValid())
		    {
		    	// On execute la fonction upload qui enregistre l'image dans les dossiers serveur.
		    	$image->upload($user->getId());	

		    	// On redirige vers la page profil
		        return $this->redirect($this->generateUrl('descartes_utilisateur_profil', array('login' => $this->getUser()->getUsername())));
		    }
	    }

	    return $this->render('DescartesUtilisateurBundle:Utilisateur:setting.html.twig', 
    							array('formProfil' => $formProfil->createView(), 'formImage' => $formImage->createView(), 'login' => $login));
    }

    public function friendsAction()
    {
    	//Si l'utilsateur n'est pas authentifié, on redirige vers l'accueil
	    if($this->getUser() == null)
	    {
	    	return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

	    $service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
    	$utilisateur = new Utilisateur();
	    $friendsList = $utilisateur->getUsersFriendListL($service_Recupbd->getBd(),$this->getUser()->getId());

	    return $this->render('DescartesUtilisateurBundle:Utilisateur:friends.html.twig', array('friendsList' => $friendsList));
    }

    public function sendMessageAction()
    {
    	//Si l'utilsateur n'est pas authentifié, on redirige vers l'accueil
	    if($this->getUser() == null)
	    {
	    	return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

	    $id_user = $this->getUser()->getId();

	    $service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$message = new Message($service_Recupbd->getBd());
		$formMessage = $this->createForm(new MessageType, $message); // Appel au formulaire par defaut de Message

		// On récupère la requête
    	$request = $this->get('request');

	    // On vérifie qu'elle est de type POST
	    if ($request->getMethod() == 'POST')
	    {
	      // On fait le lien Requête <-> Formulaire
	      // À partir de maintenant, la variable $utilisateur et $image contiennent les valeurs entrées dans les formulaires par le visiteur
	      $formMessage->bind($request);

	      // On vérifie que les valeurs entrées sont correctes
	      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
	      	if ($formMessage->isValid())
		    {
		        // On l'enregistre notre objet $utilisateur dans la base de données
		    	$message->sendMessage($id_user);

		        // On redirige vers la page profil
		        return $this->redirect($this->generateUrl('descartes_utilisateur_sendMessage'));
		    }
	    }

	    return $this->render('DescartesUtilisateurBundle:Utilisateur:sendMessage.html.twig', array('formMessage' => $formMessage->createView(),));
    }

    public function sendMessageToAction($login)
    {
    	//Si l'utilsateur n'est pas authentifié, on redirige vers l'accueil
	    if($this->getUser() == null)
	    {
	    	return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

	    $id_user = $this->getUser()->getId();

	    $service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$message = new Message($service_Recupbd->getBd());
		$message->setLoginDest($login);
		$formMessage = $this->createForm(new MessageType, $message); // Appel au formulaire par defaut de Message

		// On récupère la requête
    	$request = $this->get('request');

	    // On vérifie qu'elle est de type POST
	    if ($request->getMethod() == 'POST')
	    {
	      // On fait le lien Requête <-> Formulaire
	      // À partir de maintenant, la variable $utilisateur et $image contiennent les valeurs entrées dans les formulaires par le visiteur
	      $formMessage->bind($request);

	      // On vérifie que les valeurs entrées sont correctes
	      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
	      	if ($formMessage->isValid())
		    {
		        // On l'enregistre notre objet $utilisateur dans la base de données
		    	$message->sendMessage($id_user);

		        // On redirige vers la page profil
		        return $this->redirect($this->generateUrl('descartes_utilisateur_readMessage'));
		    }
	    }

	    return $this->render('DescartesUtilisateurBundle:Utilisateur:sendMessageTo.html.twig', 
	    						array('formMessage' => $formMessage->createView(), 'login' => $login));
    }

    public function readMessageAction()
    {
    	//Si l'utilsateur n'est pas authentifié, on redirige vers l'accueil
	    if($this->getUser() == null)
	    {
	    	return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

	    $service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
		$message = new Message($service_Recupbd->getBd());

		$id_user = $this->getUser()->getId();

		$messagesList = $message->getMyMessages($id_user);
		$formBuilder = $this->createFormBuilder($message);
		$formShowMessage = $formBuilder->getForm();
	

		// On récupère la requête
    	$request = $this->get('request');

	    // On vérifie qu'elle est de type POST
	    if ($request->getMethod() == 'POST')
	    {

	      // On vérifie que les valeurs entrées sont correctes
	      	/*if ($formShowMessage->isValid())
		    {*/
		    	$messagesList = $message->getMyMessages($id_user);

		        return $this->render('DescartesUtilisateurBundle:Utilisateur:readMessage.html.twig',
	    								array('formShowMessage' => $formShowMessage->createView(),'messagesList' => $messagesList,));
		    /*}
		    else
	    	print_r('plop');*/
	    }


	    return $this->render('DescartesUtilisateurBundle:Utilisateur:readMessage.html.twig',
	    						array('formShowMessage' => $formShowMessage->createView(),'messagesList' => $messagesList,));
    }

    public function delMessageAction($id)
    {
    	//Si l'utilsateur n'est pas authentifié, on redirige vers l'accueil
	    if($this->getUser() == null)
	    {
	    	return $this->redirect($this->generateUrl('descartes_evenement_homepage'));
	    }

	    $service_Recupbd = $this->container->get('descartes_recupbd.Recupbd');
	    $message = new Message($service_Recupbd->getBd());

	    $message->delMessage($id);

	    return $this->redirect($this->generateUrl('descartes_utilisateur_readMessage'));
    }
}
