<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'oh_deer_app_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OhDeer\\AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'oh_deer_app_inventario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/producto',    ),  ),),
        'oh_deer_app_ventas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OhDeer\\AppBundle\\Controller\\DefaultController::ventasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ventas',    ),  ),),
        'oh_deer_app_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'OhDeer\\AppBundle\\Controller\\DefaultController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),),
        'producto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/producto/',    ),  ),),
        'producto_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/producto',    ),  ),),
        'producto_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/producto/new',    ),  ),),
        'producto_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/producto/create',    ),  ),),
        'producto_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/producto',    ),  ),),
        'producto_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::updateAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/producto',    ),  ),),
        'producto_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'OhDeer\\AppBundle\\Controller\\ProductoController::deleteAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/producto',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
