<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // oh_deer_app_welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'oh_deer_app_welcome');
            }

            return array (  '_controller' => 'OhDeer\\AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'oh_deer_app_welcome',);
        }

        // oh_deer_app_inventario
        if ($pathinfo === '/producto') {
            return array (  '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::indexAction',  '_route' => 'oh_deer_app_inventario',);
        }

        // oh_deer_app_ventas
        if ($pathinfo === '/ventas') {
            return array (  '_controller' => 'OhDeer\\AppBundle\\Controller\\DefaultController::ventasAction',  '_route' => 'oh_deer_app_ventas',);
        }

        // oh_deer_app_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'OhDeer\\AppBundle\\Controller\\DefaultController::helloAction',)), array('_route' => 'oh_deer_app_homepage'));
        }

        if (0 === strpos($pathinfo, '/producto')) {
            // producto
            if (rtrim($pathinfo, '/') === '/producto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'producto');
                }

                return array (  '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::indexAction',  '_route' => 'producto',);
            }

            // producto_show
            if (preg_match('#^/producto/(?P<id>[^/]+)/show$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::showAction',)), array('_route' => 'producto_show'));
            }

            // producto_new
            if ($pathinfo === '/producto/new') {
                return array (  '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::newAction',  '_route' => 'producto_new',);
            }

            // producto_create
            if ($pathinfo === '/producto/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_producto_create;
                }

                return array (  '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::createAction',  '_route' => 'producto_create',);
            }
            not_producto_create:

            // producto_edit
            if (preg_match('#^/producto/(?P<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::editAction',)), array('_route' => 'producto_edit'));
            }

            // producto_update
            if (preg_match('#^/producto/(?P<id>[^/]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_producto_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::updateAction',)), array('_route' => 'producto_update'));
            }
            not_producto_update:

            // producto_delete
            if (preg_match('#^/producto/(?P<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_producto_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::deleteAction',)), array('_route' => 'producto_delete'));
            }
            not_producto_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
