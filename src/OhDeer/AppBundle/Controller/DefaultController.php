<?php

namespace OhDeer\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        echo "hola";
        echo "hola";        
        return $this->render('OhDeerAppBundle:Default:index.html.twig');
    }

    public function inventarioAction()
    {
	//Mostrara la vista con una tabla de los ultimos productos actualiazados/vendidos/creados
	//Hay que hacer un select del stockXproducto
	
        return $this->render('OhDeerAppBundle:Default:inventario.html.twig');
    }

    public function ventasAction()
    {
	//Mostrara la vista con una tabla de las ultimas ventas actualiazados/vendidos/creados
	//Hay que hacer un select del ventaXproducto
	
        return $this->render('OhDeerAppBundle:Default:ventas.html.twig');
    }

    public function helloAction($name)
    {
        return $this->render('OhDeerAppBundle:Default:index.html.twig', array('name' => $name));
    }
}
