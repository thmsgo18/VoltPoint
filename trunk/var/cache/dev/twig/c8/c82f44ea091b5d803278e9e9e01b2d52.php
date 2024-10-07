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

/* evse/index.html.twig */
class __TwigTemplate_02f0ac30bbe203af05681d42d49cd5cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "user/template-content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evse/index.html.twig"));

        $this->parent = $this->loadTemplate("user/template-content.html.twig", "evse/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bornes de charge";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <main class=\"application\">
        <div style=\"
    flex: 1;
    overflow: auto;\">
            <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo " || ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 8, $this->source); })()), "street", [], "any", false, false, false, 8), "html", null, true);
        echo " || Prix :";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 8, $this->source); })()), "prix", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Disponibilité</th>
                    <th scope=\"col\">Start</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evses"]) || array_key_exists("evses", $context) ? $context["evses"] : (function () { throw new RuntimeError('Variable "evses" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evse"]) {
            // line 19
            echo "                    <tr>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evse"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evse"], "disponibility", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                        ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["evse"], "isDisponibility", [], "any", false, false, false, 22)) {
                // line 23
                echo "                            <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("run_session", ["evseId" => twig_get_attribute($this->env, $this->source, $context["evse"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\"><button>Démarrer</button></a></td>
                        ";
            } else {
                // line 25
                echo "                            <td> No </td>
                        ";
            }
            // line 27
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                </tbody>
            </table>
        </div>
        <div style=\"
    height: 50px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 0 10px;
    border-top: 2px solid black;
\">
            <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_stations");
        echo "\">
                <button>Retour à la liste</button>
            </a>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "evse/index.html.twig";
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
        return array (  143 => 40,  130 => 29,  123 => 27,  119 => 25,  113 => 23,  111 => 22,  107 => 21,  103 => 20,  100 => 19,  96 => 18,  79 => 8,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/template-content.html.twig' %}
{% block title %}Bornes de charge{% endblock %}
{% block main %}
    <main class=\"application\">
        <div style=\"
    flex: 1;
    overflow: auto;\">
            <h1>{{ station.name }} || {{ station.street }} || Prix :{{ station.prix }}</h1>
            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Disponibilité</th>
                    <th scope=\"col\">Start</th>
                </tr>
                </thead>
                <tbody>
                {% for evse in evses %}
                    <tr>
                        <td>{{ evse.name }}</td>
                        <td>{{ evse.disponibility }}</td>
                        {% if evse.isDisponibility %}
                            <td><a href=\"{{ path('run_session', {'evseId': evse.id}) }}\"><button>Démarrer</button></a></td>
                        {% else %}
                            <td> No </td>
                        {% endif %}
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <div style=\"
    height: 50px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding: 0 10px;
    border-top: 2px solid black;
\">
            <a href=\"{{ path('view_stations') }}\">
                <button>Retour à la liste</button>
            </a>
        </div>
    </main>
{% endblock %}", "evse/index.html.twig", "/var/www/templates/evse/index.html.twig");
    }
}
