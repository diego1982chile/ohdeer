<?php

/* OhDeerAppBundle:Producto:new.html.twig */
class __TwigTemplate_5e8ca78783f3acd4b8c5242ad52a2840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OhDeerAppBundle::layout.html.twig");

        $this->blocks = array(
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'text_widget' => array($this, 'block_text_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OhDeerAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<table width=\"100%\" class=\"display\">
    <tr>
        <td colspan='2' class='ui-widget-header'>
            <label style='font-size:20px;font-weight:bolder;text-transform:uppercase;color:grey'>
                Nuevo Producto
            </label>
        </td>
    </tr>
    <tr>
        <td width=\"50%\" class='ui-widget-content'>
            <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " >
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "         
            ";
        // line 17
        $this->displayBlock('text_widget', $context, $blocks);
        // line 23
        echo "            ";
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 28
        echo "                         
            </form>
        </td>
        <td class=\"ui-widget-content\" align=\"center\">    
            <img id='imagen' src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/images/not_found.png"), "html", null, true);
        echo "\" style='height:250px;width:300px' />
        </td>
    </tr>
    <tr>
        <td colspan='2' class='ui-widget-header'>        
            <button type=\"submit\">
                guardar
            </button>        
        </td>
    </tr>
</table>    
<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto"), "html", null, true);
        echo "\">
            Volver al listado
        </a>
    </li>    
</ul>

<script>

\$(document).ready(function(){  
    \$('form div').children(':eq(3)').children().children().children(':eq(0)').val(new Date().getFullYear());
    \$('form div').children(':eq(3)').children().children().children(':eq(1)').val(new Date().getMonth());\t\t
    \$('form div').children(':eq(3)').children().children().children(':eq(2)').val(new Date().getDate());\t\t    
    \$('form div').children(':eq(6)').children().children().val(' ');
    \$('button').button();    
    
    \$('form div').children(':eq(3)').hide();
    \$('form div').children(':eq(6)').hide();    
    
    \$('input:file').change(function(event){        
        preview(this);
    });    
    
});\t\t

function preview(input) {    
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            \$('#imagen')
                .attr('src', e.target.result)
                .width(300)
                .height(250);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

</script>
";
    }

    // line 17
    public function block_text_widget($context, array $blocks = array())
    {
        // line 18
        echo "            <div class=\"text_widget\">
                ";
        // line 19
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "string")) : ("string"));
        // line 20
        echo "                ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
            ";
    }

    // line 23
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 24
        echo "            <div class=\"integer_widget\">
                ";
        // line 25
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "number")) : ("number"));
        // line 26
        echo "                ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            </div>
            ";
    }

    public function getTemplateName()
    {
        return "OhDeerAppBundle:Producto:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 26,  157 => 25,  154 => 24,  151 => 23,  143 => 20,  141 => 19,  138 => 18,  135 => 17,  91 => 45,  75 => 32,  69 => 28,  66 => 23,  64 => 17,  60 => 16,  54 => 15,  42 => 5,  39 => 4,  33 => 3,  28 => 2,);
    }
}
