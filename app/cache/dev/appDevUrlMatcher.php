<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // descartes_recupbd_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'descartes_recupbd_homepage')), array (  '_controller' => 'Descartes\\RecupbdBundle\\Controller\\DefaultController::indexAction',));
        }

        // descartes_recherche_homepage
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Descartes\\RechercheBundle\\Controller\\RechercheController::indexAction',  '_route' => 'descartes_recherche_homepage',);
        }

        // descartes_recherche_resultSearch
        if (0 === strpos($pathinfo, '/resultSearch') && preg_match('#^/resultSearch/(?P<search>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'descartes_recherche_resultSearch')), array (  '_controller' => 'Descartes\\RechercheBundle\\Controller\\RechercheController::searchAction',));
        }

        // descartes_evenement_homepage
        if ($pathinfo === '/evenement') {
            return array (  '_controller' => 'Descartes\\EvenementBundle\\Controller\\EvenementController::indexAction',  '_route' => 'descartes_evenement_homepage',);
        }

        // descartes_evenement_creerevenement
        if ($pathinfo === '/creerevenement') {
            return array (  '_controller' => 'Descartes\\EvenementBundle\\Controller\\EvenementController::creerevenementAction',  '_route' => 'descartes_evenement_creerevenement',);
        }

        if (0 === strpos($pathinfo, '/evenement')) {
            // descartes_evenement_voir
            if (preg_match('#^/evenement/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'descartes_evenement_voir')), array (  '_controller' => 'Descartes\\EvenementBundle\\Controller\\EvenementController::voirevenementAction',));
            }

            // descartes_evenement_setting
            if (0 === strpos($pathinfo, '/evenement/setting') && preg_match('#^/evenement/setting/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'descartes_evenement_setting')), array (  '_controller' => 'Descartes\\EvenementBundle\\Controller\\EvenementController::settingAction',));
            }

        }

        // descartes_evenement_calendrier
        if ($pathinfo === '/calendrier') {
            return array (  '_controller' => 'Descartes\\EvenementBundle\\Controller\\EvenementController::calendrierAction',  '_route' => 'descartes_evenement_calendrier',);
        }

        if (0 === strpos($pathinfo, '/evenement')) {
            // descartes_evenement_filtreEvent
            if (0 === strpos($pathinfo, '/evenement/filtrerpar') && preg_match('#^/evenement/filtrerpar/(?P<filtre>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'descartes_evenement_filtreEvent')), array (  '_controller' => 'Descartes\\EvenementBundle\\Controller\\EvenementController::filtrerparAction',));
            }

            // descartes_evenement_myEvents
            if (rtrim($pathinfo, '/') === '/evenement/myEvents') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'descartes_evenement_myEvents');
                }

                return array (  '_controller' => 'Descartes\\EvenementBundle\\Controller\\EvenementController::myEventsAction',  '_route' => 'descartes_evenement_myEvents',);
            }

            // descartes_evenement_comment
            if (0 === strpos($pathinfo, '/evenement/comment') && preg_match('#^/evenement/comment/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'descartes_evenement_comment')), array (  '_controller' => 'Descartes\\EvenementBundle\\Controller\\EvenementController::postCommentAction',));
            }

            if (0 === strpos($pathinfo, '/evenement/particip')) {
                // descartes_evenement_participe
                if (0 === strpos($pathinfo, '/evenement/participe') && preg_match('#^/evenement/participe/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'descartes_evenement_participe')), array (  '_controller' => 'Descartes\\EvenementBundle\\Controller\\EvenementController::participeAction',));
                }

                // descartes_evenement_participant
                if (0 === strpos($pathinfo, '/evenement/participant') && preg_match('#^/evenement/participant/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'descartes_evenement_participant')), array (  '_controller' => 'Descartes\\EvenementBundle\\Controller\\EvenementController::listeParticipantAction',));
                }

            }

            // descartes_evenement_cancelPart
            if (0 === strpos($pathinfo, '/evenement/cancelparticipation') && preg_match('#^/evenement/cancelparticipation/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'descartes_evenement_cancelPart')), array (  '_controller' => 'Descartes\\EvenementBundle\\Controller\\EvenementController::cancelPartAction',));
            }

            // descartes_evenement_addNote
            if (0 === strpos($pathinfo, '/evenement/addNote') && preg_match('#^/evenement/addNote/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'descartes_evenement_addNote')), array (  '_controller' => 'Descartes\\EvenementBundle\\Controller\\EvenementController::addNoteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // descartes_utilisateur_homepage
            if ($pathinfo === '/utilisateur') {
                return array (  '_controller' => 'Descartes\\UtilisateurBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'descartes_utilisateur_homepage',);
            }

            // descartes_utilisateur_inscription
            if ($pathinfo === '/utilisateur/inscription') {
                return array (  '_controller' => 'Descartes\\UtilisateurBundle\\Controller\\UtilisateurController::inscriptionAction',  '_route' => 'descartes_utilisateur_inscription',);
            }

            // descartes_utilisateur_profil
            if (0 === strpos($pathinfo, '/utilisateur/profil') && preg_match('#^/utilisateur/profil/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'descartes_utilisateur_profil')), array (  '_controller' => 'Descartes\\UtilisateurBundle\\Controller\\UtilisateurController::profilAction',));
            }

            // descartes_utilisateur_setting
            if ($pathinfo === '/utilisateur/setting') {
                return array (  '_controller' => 'Descartes\\UtilisateurBundle\\Controller\\UtilisateurController::settingAction',  '_route' => 'descartes_utilisateur_setting',);
            }

            // descartes_utilisateur_friends
            if ($pathinfo === '/utilisateur/friends') {
                return array (  '_controller' => 'Descartes\\UtilisateurBundle\\Controller\\UtilisateurController::friendsAction',  '_route' => 'descartes_utilisateur_friends',);
            }

            if (0 === strpos($pathinfo, '/utilisateur/sdMessage')) {
                // descartes_utilisateur_sendMessage
                if ($pathinfo === '/utilisateur/sdMessage') {
                    return array (  '_controller' => 'Descartes\\UtilisateurBundle\\Controller\\UtilisateurController::sendMessageAction',  '_route' => 'descartes_utilisateur_sendMessage',);
                }

                // descartes_utilisateur_sendMessageTo
                if (preg_match('#^/utilisateur/sdMessage/(?P<login>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'descartes_utilisateur_sendMessageTo')), array (  '_controller' => 'Descartes\\UtilisateurBundle\\Controller\\UtilisateurController::sendMessageToAction',));
                }

            }

            // descartes_utilisateur_readMessage
            if ($pathinfo === '/utilisateur/rdMessage') {
                return array (  '_controller' => 'Descartes\\UtilisateurBundle\\Controller\\UtilisateurController::readMessageAction',  '_route' => 'descartes_utilisateur_readMessage',);
            }

            // descartes_utilisateur_delMessage
            if (0 === strpos($pathinfo, '/utilisateur/delMessage') && preg_match('#^/utilisateur/delMessage/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'descartes_utilisateur_delMessage')), array (  '_controller' => 'Descartes\\UtilisateurBundle\\Controller\\UtilisateurController::delMessageAction',));
            }

        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Descartes\\UtilisateurBundle\\Controller\\UtilisateurController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            if (0 === strpos($pathinfo, '/loginfb')) {
                // _security_login
                if ($pathinfo === '/loginfb') {
                    return array('_route' => '_security_login');
                }

                // _security_check
                if ($pathinfo === '/loginfb_check') {
                    return array('_route' => '_security_check');
                }

            }

        }

        // fos_facebook_channel
        if ($pathinfo === '/channel.html') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_facebook_channel;
            }

            return array (  '_controller' => 'FOS\\FacebookBundle\\Controller\\FacebookController::channelAction',  '_route' => 'fos_facebook_channel',);
        }
        not_fos_facebook_channel:

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/utilisateur/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/utilisateur/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/utilisateur/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/utilisateur/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
