<?php

/* OhDeerAppBundle::layout.html.twig */
class __TwigTemplate_e800adc6cd20666c77f29f4c9087cd93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>        
        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/css/jquery-ui-1.9.2.custom.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/css/demo_table.css"), "html", null, true);
        echo "\" />       
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/css/demo_table_jui.css"), "html", null, true);
        echo "\" />       
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/css/demo_page.css"), "html", null, true);
        echo "\" />         
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oh_deer_app_welcome"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Symfony logo\" />
                </a>
                <form id=\"symfony-search\">
                    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oh_deer_app_welcome"), "html", null, true);
        echo "\">
                        Volver al menú principal
                    </a>
                </form>
            </div>

            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "
            ";
        // line 37
        $this->displayBlock('content_header', $context, $blocks);
        // line 46
        echo "
            <div class=\"symfony-content\">
                ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "            </div>

            ";
        // line 52
        if (array_key_exists("code", $context)) {
            // line 53
            echo "                <h2>Code behind this page</h2>
                <div class=\"symfony-content\">";
            // line 54
            echo (isset($context["code"]) ? $context["code"] : null);
            echo "</div>
            ";
        }
        // line 56
        echo "        </div>
    </body>
</html>
<script>
/**
 * Very simple way to check if a file exists on this domain.
 * Use with the jQuery library.
 *
 * Important: \tWorks only on the same domain. 
 * \t\tCross-domain-requests have to be done in another way (see JSONP)!
 *
 * Use: console.log(   \"/data/list.json\".fileExists()  );
 */
String.prototype.fileExists = function() {
\tfilename = this.trim();
\t
\tvar response = jQuery.ajax({
\t\turl: filename,
\t\ttype: 'HEAD',
\t\tasync: false
\t}).status;\t
\t
\treturn (response != \"200\") ? false : true;
}
</script>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Oh Deer";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        echo "              
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>        
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/js/jquery-ui-1.9.2.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/js/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\" ></script>        
        ";
    }

    // line 37
    public function block_content_header($context, array $blocks = array())
    {
        // line 38
        echo "                <ul id=\"menu\">
                    ";
        // line 39
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 42
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 39
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 40
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Demo Home</a></li>
                    ";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "                ";
    }

    public function getTemplateName()
    {
        return "OhDeerAppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 49,  205 => 48,  198 => 40,  195 => 39,  188 => 42,  186 => 39,  183 => 38,  180 => 37,  174 => 15,  170 => 14,  166 => 13,  161 => 12,  155 => 5,  126 => 56,  121 => 54,  118 => 53,  116 => 52,  112 => 50,  110 => 48,  106 => 46,  104 => 37,  101 => 36,  92 => 33,  89 => 32,  85 => 31,  76 => 25,  70 => 22,  66 => 21,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  38 => 7,  34 => 6,  24 => 1,  84 => 30,  79 => 28,  72 => 24,  67 => 22,  60 => 17,  55 => 16,  45 => 8,  42 => 8,  36 => 5,  30 => 5,);
    }
}
