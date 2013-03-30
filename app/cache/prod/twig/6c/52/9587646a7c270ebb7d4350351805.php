<?php

/* OhDeerAppBundle:Producto:edit.html.twig */
class __TwigTemplate_6c529587646a7c270ebb7d4350351805 extends Twig_Template
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
            '_ohdeer_appbundle_productotype_attachment_widget' => array($this, 'block__ohdeer_appbundle_productotype_attachment_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OhDeerAppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : null), array(0 => $this));
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
                Edición Producto
            </label>
        </td>
    </tr>
    <tr>
    <td class='ui-widget-content' width=\"50%\">
    <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
        echo ">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'widget');
        echo "         
    ";
        // line 17
        $this->displayBlock('text_widget', $context, $blocks);
        // line 23
        echo "    ";
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 28
        echo "                 
    ";
        // line 34
        echo "  
    ";
        // line 35
        $this->displayBlock('_ohdeer_appbundle_productotype_attachment_widget', $context, $blocks);
        // line 40
        echo "              
    </td>
    <td class=\"ui-widget-content\" align=\"center\">    
        <img id='imagen' src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "imagen"), "html", null, true);
        echo "\" style='height:250px;width:300px' />
    </td>
    </tr>
    <tr>                    
        <td colspan='2' class='ui-widget-header'>
            <table>
                <tr>
                    <td style=\"padding: 0em\">
                        <a id=\"ver\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\">
                            ver
                        </a>                            
                    </td>
                    <td style=\"padding: 0em\">
                        <button type=\"submit\">
                            guardar
                        </button>                          
                    </td>
                </tr>                                                       
            </table>
        </td>
    </tr>
    </table>                
    <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto"), "html", null, true);
        echo "\">
        Volver al listado
    </a>    
<script>
\$(document).ready(function(){  
    \$('form div').children(':eq(4)').children().children().children(':eq(0)').val(new Date().getFullYear());
    \$('form div').children(':eq(4)').children().children().children(':eq(1)').val(new Date().getMonth());\t\t
    \$('form div').children(':eq(4)').children().children().children(':eq(2)').val(new Date().getDate());\t\t    
    \$('form div').children(':eq(6)').children().children().val(' ');
    \$('button').button();    
});\t\t

\$('form div').children(':eq(3)').hide();
\$('form div').children(':eq(6)').hide();

\$(document).ready(function(){      
    \$('#imagen').ready(function(){        
        if(!\$('#imagen').attr('src').fileExists())                                    
        {            
            \$('#imagen').attr('src','/bundles/OhDeer/images/not_found.gif');            
            \$('#imagen').trigger('load');
        }
    });
    \$('#boton_editar, a#ver').button();    
    
    \$('input:file').change(function(event){        
        preview(this);
    });    
});

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
        echo "    <div class=\"text_widget\">
        ";
        // line 19
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "string")) : ("string"));
        // line 20
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
    ";
    }

    // line 23
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"integer_widget\">
        ";
        // line 25
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "number")) : ("number"));
        // line 26
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
    ";
    }

    // line 35
    public function block__ohdeer_appbundle_productotype_attachment_widget($context, array $blocks = array())
    {
        // line 36
        echo "    <div class=\"file_widget\">
        ";
        // line 37
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "file")) : ("file"));
        // line 38
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "        
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "OhDeerAppBundle:Producto:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 38,  198 => 37,  195 => 36,  192 => 35,  184 => 26,  182 => 25,  179 => 24,  176 => 23,  168 => 20,  166 => 19,  163 => 18,  160 => 17,  111 => 65,  94 => 51,  83 => 43,  78 => 40,  76 => 35,  73 => 34,  70 => 28,  67 => 23,  65 => 17,  61 => 16,  55 => 15,  43 => 5,  40 => 4,  34 => 3,  29 => 2,);
    }
}
