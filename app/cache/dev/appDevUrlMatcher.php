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

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/6672758')) {
                // _assetic_6672758
                if ($pathinfo === '/js/6672758.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 6672758,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_6672758',);
                }

                // _assetic_6672758_0
                if ($pathinfo === '/js/6672758_jquery-1.9.1.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 6672758,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_6672758_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/27199a2')) {
                // _assetic_27199a2
                if ($pathinfo === '/js/27199a2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '27199a2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_27199a2',);
                }

                // _assetic_27199a2_0
                if ($pathinfo === '/js/27199a2_jquery.nivo.slider_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '27199a2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_27199a2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/b2123a1')) {
                // _assetic_b2123a1
                if ($pathinfo === '/js/b2123a1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2123a1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b2123a1',);
                }

                // _assetic_b2123a1_0
                if ($pathinfo === '/js/b2123a1_voting_timer_rpg_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b2123a1',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b2123a1_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/1505c13')) {
                // _assetic_1505c13
                if ($pathinfo === '/js/1505c13.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1505c13',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1505c13',);
                }

                // _assetic_1505c13_0
                if ($pathinfo === '/js/1505c13_voting_timer_gowonda_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1505c13',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1505c13_0',);
                }

            }

        }

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

        if (0 === strpos($pathinfo, '/shop')) {
            // shop
            if ($pathinfo === '/shop/accueil') {
                return array (  '_controller' => 'SiteRising\\AionServerBundle\\Controller\\PlayersController::personnageAction',  '_route' => 'shop',);
            }

            // site_rising_shop
            if ($pathinfo === '/shop') {
                return array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::shopAction',  '_route' => 'site_rising_shop',);
            }

            // arme
            if (0 === strpos($pathinfo, '/shop/Arme-PvP') && preg_match('#^/shop/Arme\\-PvP/(?P<arme>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'arme')), array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::armeAction',));
            }

            // site_rising_page
            if (0 === strpos($pathinfo, '/shop/page') && preg_match('#^/shop/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_rising_page')), array (  '_controller' => 'AionShopBundle:Page:page',));
            }

            if (0 === strpos($pathinfo, '/shop/Cuir')) {
                // emplacementStuffCuir
                if (preg_match('#^/shop/Cuir/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'emplacementStuffCuir')), array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::cuirEmplaAction',));
                }

                // emplacementStuffCuirMagique
                if (0 === strpos($pathinfo, '/shop/Cuir-Magique') && preg_match('#^/shop/Cuir\\-Magique/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'emplacementStuffCuirMagique')), array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::cuirMagiqueEmplaAction',));
                }

            }

            // emplacementStuffTissu
            if (0 === strpos($pathinfo, '/shop/Tissu') && preg_match('#^/shop/Tissu/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emplacementStuffTissu')), array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::tissuEmplaAction',));
            }

            if (0 === strpos($pathinfo, '/shop/Maille')) {
                // emplacementStuffMaille
                if (preg_match('#^/shop/Maille/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'emplacementStuffMaille')), array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::mailleEmplaAction',));
                }

                // emplacementStuffMaillePhysique
                if (0 === strpos($pathinfo, '/shop/Maille-Physique') && preg_match('#^/shop/Maille\\-Physique/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'emplacementStuffMaillePhysique')), array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::maillePhysiqueEmplaAction',));
                }

            }

            // emplacementStuffPlate
            if (0 === strpos($pathinfo, '/shop/Plate') && preg_match('#^/shop/Plate/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emplacementStuffPlate')), array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::plateEmplaAction',));
            }

            // emplacementBijoux
            if (0 === strpos($pathinfo, '/shop/Bijoux') && preg_match('#^/shop/Bijoux/(?P<bijoux>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emplacementBijoux')), array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::bijouxAction',));
            }

            // emplacementEnchant
            if (0 === strpos($pathinfo, '/shop/Pierre-De-Mana') && preg_match('#^/shop/Pierre\\-De\\-Mana/(?P<enchant>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'emplacementEnchant')), array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::enchantAction',));
            }

            // nourriture
            if ($pathinfo === '/shop/Nourriture') {
                return array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::nourritureAction',  '_route' => 'nourriture',);
            }

            // familier
            if ($pathinfo === '/shop/Familiers') {
                return array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::familiersAction',  '_route' => 'familier',);
            }

            // monture
            if ($pathinfo === '/shop/Montures') {
                return array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::monturesAction',  '_route' => 'monture',);
            }

            if (0 === strpos($pathinfo, '/shop/A')) {
                // emplacementAutre
                if (0 === strpos($pathinfo, '/shop/Autres') && preg_match('#^/shop/Autres/(?P<autre>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'emplacementAutre')), array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::autresAction',));
                }

                // ailes
                if ($pathinfo === '/shop/Ailes') {
                    return array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::ailesAction',  '_route' => 'ailes',);
                }

                // armePvE
                if (0 === strpos($pathinfo, '/shop/Armes-PvE') && preg_match('#^/shop/Armes\\-PvE/(?P<arme>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'armePvE')), array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\ItemController::armePvEAction',));
                }

            }

            // acheter
            if (0 === strpos($pathinfo, '/shop/acheter') && preg_match('#^/shop/acheter/(?P<item>[^/]++)/(?P<perso>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acheter')), array (  '_controller' => 'SiteRising\\AionShopBundle\\Controller\\AchatController::acheterAction',));
            }

        }

        // site_rising_accueil
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'site_rising_accueil');
            }

            return array (  '_controller' => 'SiteRising\\AionBundle\\Controller\\IndexController::indexAction',  '_route' => 'site_rising_accueil',);
        }

        // site_rising_joinUs
        if ($pathinfo === '/joinUs') {
            return array (  '_controller' => 'SiteRising\\AionBundle\\Controller\\IndexController::joinUsAction',  '_route' => 'site_rising_joinUs',);
        }

        // site_rising_userProfile
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'SiteRising\\AionBundle\\Controller\\IndexController::userProfileAction',  '_route' => 'site_rising_userProfile',);
        }

        // gregwar_captcha.generate_captcha
        if (0 === strpos($pathinfo, '/generate-captcha') && preg_match('#^/generate\\-captcha/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gregwar_captcha.generate_captcha')), array (  '_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction',));
        }

        if (0 === strpos($pathinfo, '/siteAionRising')) {
            if (0 === strpos($pathinfo, '/siteAionRising/log')) {
                if (0 === strpos($pathinfo, '/siteAionRising/login')) {
                    // fos_user_security_login
                    if ($pathinfo === '/siteAionRising/login') {
                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                    }

                    // fos_user_security_check
                    if ($pathinfo === '/siteAionRising/login_check') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_security_check;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                    }
                    not_fos_user_security_check:

                }

                // fos_user_security_logout
                if ($pathinfo === '/siteAionRising/logout') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/siteAionRising/profile')) {
                // fos_user_profile_show
                if (rtrim($pathinfo, '/') === '/siteAionRising/profile') {
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
                if ($pathinfo === '/siteAionRising/profile/edit') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            if (0 === strpos($pathinfo, '/siteAionRising/re')) {
                if (0 === strpos($pathinfo, '/siteAionRising/register')) {
                    // fos_user_registration_register
                    if (rtrim($pathinfo, '/') === '/siteAionRising/register') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                    }

                    if (0 === strpos($pathinfo, '/siteAionRising/register/c')) {
                        // fos_user_registration_check_email
                        if ($pathinfo === '/siteAionRising/register/check-email') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_check_email;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                        }
                        not_fos_user_registration_check_email:

                        if (0 === strpos($pathinfo, '/siteAionRising/register/confirm')) {
                            // fos_user_registration_confirm
                            if (preg_match('#^/siteAionRising/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_fos_user_registration_confirm;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                            }
                            not_fos_user_registration_confirm:

                            // fos_user_registration_confirmed
                            if ($pathinfo === '/siteAionRising/register/confirmed') {
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

                if (0 === strpos($pathinfo, '/siteAionRising/resetting')) {
                    // fos_user_resetting_request
                    if ($pathinfo === '/siteAionRising/resetting/request') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_request;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                    }
                    not_fos_user_resetting_request:

                    // fos_user_resetting_send_email
                    if ($pathinfo === '/siteAionRising/resetting/send-email') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fos_user_resetting_send_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    }
                    not_fos_user_resetting_send_email:

                    // fos_user_resetting_check_email
                    if ($pathinfo === '/siteAionRising/resetting/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_resetting_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    }
                    not_fos_user_resetting_check_email:

                    // fos_user_resetting_reset
                    if (0 === strpos($pathinfo, '/siteAionRising/resetting/reset') && preg_match('#^/siteAionRising/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
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
            if ($pathinfo === '/siteAionRising/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
