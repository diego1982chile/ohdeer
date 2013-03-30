<?php

/* OhDeerAppBundle:Default:index.html.twig */
class __TwigTemplate_15ffccab4c394fcca120debc4cb1ec31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OhDeerAppBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OhDeerAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    <h1>Sistema de control de inventario</h1>
    <br />
    <p>Bienvenido al sistema de control de inventario Oh Deer!. Seleccione alguna de las opciones del menú principal</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/images/productos.gif"), "html", null, true);
        echo "\" alt=\"Inventario\" />
            </div>
            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oh_deer_app_inventario"), "html", null, true);
        echo "\">Inventario</a>
        </div>        
        <div class=\"block-configure\">
            <div class=\"illustration\">
                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/images/ventas.gif"), "html", null, true);
        echo "\" alt=\"ventas\" />
            </div>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_home"), "html", null, true);
        echo "\">Ventas</a>
        </div>        
        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/images/pedidos.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oh_deer_app_ventas"), "html", null, true);
        echo "\">Reposiciones</a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "OhDeerAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  79 => 28,  72 => 24,  67 => 22,  60 => 18,  55 => 16,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
