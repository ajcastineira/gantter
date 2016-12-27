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

        if (0 === strpos($pathinfo, '/agencia')) {
            // agencia_index
            if (rtrim($pathinfo, '/') === '/agencia') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agencia_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'agencia_index');
                }

                return array (  '_controller' => 'GanttBundle\\Controller\\AgenciaController::indexAction',  '_route' => 'agencia_index',);
            }
            not_agencia_index:

            // agencia_new
            if ($pathinfo === '/agencia/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_agencia_new;
                }

                return array (  '_controller' => 'GanttBundle\\Controller\\AgenciaController::newAction',  '_route' => 'agencia_new',);
            }
            not_agencia_new:

            // agencia_show
            if (preg_match('#^/agencia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_agencia_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agencia_show')), array (  '_controller' => 'GanttBundle\\Controller\\AgenciaController::showAction',));
            }
            not_agencia_show:

            // agencia_edit
            if (preg_match('#^/agencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_agencia_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agencia_edit')), array (  '_controller' => 'GanttBundle\\Controller\\AgenciaController::editAction',));
            }
            not_agencia_edit:

            // agencia_delete
            if (preg_match('#^/agencia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_agencia_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'agencia_delete')), array (  '_controller' => 'GanttBundle\\Controller\\AgenciaController::deleteAction',));
            }
            not_agencia_delete:

        }

        if (0 === strpos($pathinfo, '/concurso')) {
            // concurso_index
            if (rtrim($pathinfo, '/') === '/concurso') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_concurso_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'concurso_index');
                }

                return array (  '_controller' => 'GanttBundle\\Controller\\ConcursoController::indexAction',  '_route' => 'concurso_index',);
            }
            not_concurso_index:

            // concurso_new
            if ($pathinfo === '/concurso/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_concurso_new;
                }

                return array (  '_controller' => 'GanttBundle\\Controller\\ConcursoController::newAction',  '_route' => 'concurso_new',);
            }
            not_concurso_new:

            // concurso_show
            if (preg_match('#^/concurso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_concurso_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'concurso_show')), array (  '_controller' => 'GanttBundle\\Controller\\ConcursoController::showAction',));
            }
            not_concurso_show:

            // concurso_edit
            if (preg_match('#^/concurso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_concurso_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'concurso_edit')), array (  '_controller' => 'GanttBundle\\Controller\\ConcursoController::editAction',));
            }
            not_concurso_edit:

            // concurso_delete
            if (preg_match('#^/concurso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_concurso_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'concurso_delete')), array (  '_controller' => 'GanttBundle\\Controller\\ConcursoController::deleteAction',));
            }
            not_concurso_delete:

        }

        // gantt_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gantt_default_index');
            }

            return array (  '_controller' => 'GanttBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gantt_default_index',);
        }

        if (0 === strpos($pathinfo, '/fondolinea')) {
            // fondolinea_index
            if (rtrim($pathinfo, '/') === '/fondolinea') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fondolinea_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fondolinea_index');
                }

                return array (  '_controller' => 'GanttBundle\\Controller\\FondoLineaController::indexAction',  '_route' => 'fondolinea_index',);
            }
            not_fondolinea_index:

            // fondolinea_new
            if ($pathinfo === '/fondolinea/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fondolinea_new;
                }

                return array (  '_controller' => 'GanttBundle\\Controller\\FondoLineaController::newAction',  '_route' => 'fondolinea_new',);
            }
            not_fondolinea_new:

            // fondolinea_show
            if (preg_match('#^/fondolinea/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fondolinea_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fondolinea_show')), array (  '_controller' => 'GanttBundle\\Controller\\FondoLineaController::showAction',));
            }
            not_fondolinea_show:

            // fondolinea_edit
            if (preg_match('#^/fondolinea/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fondolinea_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fondolinea_edit')), array (  '_controller' => 'GanttBundle\\Controller\\FondoLineaController::editAction',));
            }
            not_fondolinea_edit:

            // fondolinea_delete
            if (preg_match('#^/fondolinea/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_fondolinea_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fondolinea_delete')), array (  '_controller' => 'GanttBundle\\Controller\\FondoLineaController::deleteAction',));
            }
            not_fondolinea_delete:

        }

        if (0 === strpos($pathinfo, '/programa')) {
            // programa_index
            if (rtrim($pathinfo, '/') === '/programa') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_programa_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'programa_index');
                }

                return array (  '_controller' => 'GanttBundle\\Controller\\ProgramaController::indexAction',  '_route' => 'programa_index',);
            }
            not_programa_index:

            // programa_new
            if ($pathinfo === '/programa/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_programa_new;
                }

                return array (  '_controller' => 'GanttBundle\\Controller\\ProgramaController::newAction',  '_route' => 'programa_new',);
            }
            not_programa_new:

            // programa_show
            if (preg_match('#^/programa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_programa_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_show')), array (  '_controller' => 'GanttBundle\\Controller\\ProgramaController::showAction',));
            }
            not_programa_show:

            // programa_edit
            if (preg_match('#^/programa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_programa_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_edit')), array (  '_controller' => 'GanttBundle\\Controller\\ProgramaController::editAction',));
            }
            not_programa_edit:

            // programa_delete
            if (preg_match('#^/programa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_programa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'programa_delete')), array (  '_controller' => 'GanttBundle\\Controller\\ProgramaController::deleteAction',));
            }
            not_programa_delete:

        }

        // login_route
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'GanttBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_route',);
        }

        // sign_done
        if ($pathinfo === '/signed') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_sign_done;
            }

            return array (  '_controller' => 'GanttBundle\\Controller\\SecurityController::signedAction',  '_route' => 'sign_done',);
        }
        not_sign_done:

        // login_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'GanttBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
