<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_01d22ad0d36f16ce3de8948057924246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please e-mail us at [email] and let us know
            what you were doing when this error occurred. We will fix it as soon
            as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  25 => 5,  19 => 1,  208 => 49,  205 => 48,  198 => 40,  195 => 39,  188 => 42,  186 => 39,  183 => 38,  180 => 37,  174 => 15,  170 => 14,  166 => 13,  161 => 12,  155 => 5,  126 => 56,  121 => 54,  118 => 53,  116 => 52,  112 => 50,  110 => 48,  106 => 46,  104 => 37,  101 => 36,  92 => 33,  89 => 32,  85 => 31,  76 => 25,  70 => 22,  66 => 21,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  38 => 7,  34 => 6,  24 => 1,  84 => 30,  79 => 28,  72 => 24,  67 => 22,  60 => 17,  55 => 16,  45 => 8,  42 => 8,  36 => 5,  30 => 5,);
    }
}
