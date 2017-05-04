<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/js/f31abf5')) {
            // _assetic_f31abf5
            if ($pathinfo === '/js/f31abf5.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f31abf5',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f31abf5',);
            }

            if (0 === strpos($pathinfo, '/js/f31abf5_part_1_')) {
                if (0 === strpos($pathinfo, '/js/f31abf5_part_1_bootstrap')) {
                    // _assetic_f31abf5_0
                    if ($pathinfo === '/js/f31abf5_part_1_bootstrap_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f31abf5',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f31abf5_0',);
                    }

                    // _assetic_f31abf5_1
                    if ($pathinfo === '/js/f31abf5_part_1_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f31abf5',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_f31abf5_1',);
                    }

                }

                // _assetic_f31abf5_2
                if ($pathinfo === '/js/f31abf5_part_1_contact_me_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f31abf5',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_f31abf5_2',);
                }

                // _assetic_f31abf5_3
                if ($pathinfo === '/js/f31abf5_part_1_jqBootstrapValidation_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f31abf5',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_f31abf5_3',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images/181fc31')) {
            // _assetic_181fc31
            if ($pathinfo === '/images/181fc31') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '181fc31',  'pos' => NULL,  '_route' => '_assetic_181fc31',);
            }

            // _assetic_181fc31_0
            if ($pathinfo === '/images/181fc31_part_1_images_1') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '181fc31',  'pos' => 0,  '_route' => '_assetic_181fc31_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/6fee7ed')) {
            // _assetic_6fee7ed
            if ($pathinfo === '/css/6fee7ed.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6fee7ed',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6fee7ed',);
            }

            if (0 === strpos($pathinfo, '/css/6fee7ed_part_1_')) {
                if (0 === strpos($pathinfo, '/css/6fee7ed_part_1_bootstrap')) {
                    // _assetic_6fee7ed_0
                    if ($pathinfo === '/css/6fee7ed_part_1_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6fee7ed',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6fee7ed_0',);
                    }

                    // _assetic_6fee7ed_1
                    if ($pathinfo === '/css/6fee7ed_part_1_bootstrap.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6fee7ed',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_6fee7ed_1',);
                    }

                }

                // _assetic_6fee7ed_2
                if ($pathinfo === '/css/6fee7ed_part_1_carousel_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6fee7ed',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_6fee7ed_2',);
                }

                // _assetic_6fee7ed_3
                if ($pathinfo === '/css/6fee7ed_part_1_footer_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6fee7ed',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_6fee7ed_3',);
                }

                // _assetic_6fee7ed_4
                if ($pathinfo === '/css/6fee7ed_part_1_header_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6fee7ed',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_6fee7ed_4',);
                }

                // _assetic_6fee7ed_5
                if ($pathinfo === '/css/6fee7ed_part_1_modern-business_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6fee7ed',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_6fee7ed_5',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // back_end_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'back_end_homepage');
            }

            return array (  '_controller' => 'BackEndBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_end_homepage',);
        }

        // front_homepage
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'FrontBundle\\Controller\\FrontController::indexAction',  '_route' => 'front_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
