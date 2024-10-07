<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* station/not_found.html.twig */
class __TwigTemplate_f14de9a7693d06cdbdb83e3ba6e404f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "station/not_found.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Not Found</title>
    </head>
    <body>

    ";
        // line 8
        if ( !(null === (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "        <p> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
        <p> ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 12
            echo "        <p> la station n'existe pas </p>
    ";
        }
        // line 14
        echo "
    </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "station/not_found.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  65 => 14,  61 => 12,  56 => 10,  51 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>Not Found</title>
    </head>
    <body>

    {% if station is not null %}
        <p> {{ station.id }}</p>
        <p> {{ station.name }}</p>
    {% else %}
        <p> la station n'existe pas </p>
    {% endif %}

    </body>
</html>", "station/not_found.html.twig", "/var/www/templates/station/not_found.html.twig");
    }
}
