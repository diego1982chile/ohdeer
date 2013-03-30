<?php

/* OhDeerAppBundle:Producto:index.html.twig */
class __TwigTemplate_8e41f508c2323714e218c6d86c534850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OhDeerAppBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<table id='productos' class=\"records_list display tablas\" width=\"100%\">
    <thead>
        <tr>
            <th width=\"5%\">Id</th>
            <th width=\"10%\">Codigo</th>
            <th width=\"15%\">Categoría</th>
            <th width=\"45%\">Descripcion</th>            
            <th width=\"5%\">Stock</th>            
            <th width=\"5%\">Costo</th>
            <th width=\"10%\">Acciones</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "        <tr>
            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "</a></td>           
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "codigo"), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "categoria"), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descripcion"), "html", null, true);
            echo "</td>            
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cantidad"), "html", null, true);
            echo "</td>            
            <td class='moneda'>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "costopesos"), "html", null, true);
            echo "</td>    
            <td>
                <table width=\"100%\">
                <tr>
                    <td width=\"50%\">
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/images/search_16.png"), "html", null, true);
            echo "\" />
                        </a>
                    </td>
                    <td width=\"50%\">
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OhDeer/images/pencil_16.png"), "html", null, true);
            echo "\" />
                        </a>
                    </td>                    
                </tr>
                </table>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "    </tbody>
</table>
<ul>
    <li>
        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_new"), "html", null, true);
        echo "\">
            Nuevo producto
        </a>
    </li>    
</ul>
<script>
\$(document).ready(function(){  
    \$('#productos').dataTable({
        \"bJQueryUI\": true,
        \"bPaginate\": false,
        \"bLengthChange\": false,
        \"bFilter\": true,
        \"bSort\": true,
        \"bInfo\": true,
        \"bAutoWidth\": false,
        \"sScrollY\": \"270px\"
    });\t

    var html=\"<label style='font-size:20px;font-weight:bolder;text-transform:uppercase;color:grey'>Listado Productos</h1>\";
    \$(html).appendTo('#productos_wrapper .fg-toolbar:first');

    \$('.moneda').each(function(){
        \$(this).text('\$'+\$(this).text());
    });

    \$('#productos tbody tr').live('hover',function(){
            \$(this).addClass('row_selected');
    });

    \$('#productos tbody tr').live('mouseleave',function(){
            \$(this).removeClass('row_selected');
    });

});
</script>

";
    }

    public function getTemplateName()
    {
        return "OhDeerAppBundle:Producto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 49,  119 => 45,  105 => 37,  101 => 36,  94 => 32,  90 => 31,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  66 => 22,  60 => 21,  57 => 20,  53 => 19,  38 => 6,  35 => 5,  29 => 3,);
    }
}
