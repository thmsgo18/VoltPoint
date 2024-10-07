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

/* recharge_session/history.html.twig */
class __TwigTemplate_50025d620a543bdced2636a42861b3ae extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recharge_session/history.html.twig"));

        $this->parent = $this->loadTemplate("user/template-content.html.twig", "recharge_session/history.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Historique";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("CSS/historique.css"), "html", null, true);
        echo "\">

        <h2>Historique</h2>
        <div id=\"cadree\">
            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Ville</th>

                    <th scope=\"col\">Date début</th>
                    <th scope=\"col\">Durée</th>
                    <th scope=\"col\">Prix</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 20
            echo "                    <tr>
                        ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["session"], "isStopped", [], "any", false, false, false, 21)) {
                // line 22
                echo "                            <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("info_station", ["stationId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "evse", [], "any", false, false, false, 22), "station", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "evse", [], "any", false, false, false, 22), "station", [], "any", false, false, false, 22), "city", [], "any", false, false, false, 22), "html", null, true);
                echo "</a></td>

                            <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "createdAt", [], "any", false, false, false, 24), "d-m-y H:i", "Europe/Paris"), "html", null, true);
                echo "</td>
                            <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "getStopedAt", [], "any", false, false, false, 25), "diff", [twig_get_attribute($this->env, $this->source, $context["session"], "getCreatedAt", [], "any", false, false, false, 25)], "method", false, false, false, 25), "format", ["%H:%I:%S"], "method", false, false, false, 25), "html", null, true);
                echo "</td>
                            <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "getPrice", [], "method", false, false, false, 26), "html", null, true);
                echo "</td>
                        ";
            }
            // line 28
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </tbody>
            </table>
        </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "recharge_session/history.html.twig";
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
        return array (  129 => 30,  122 => 28,  117 => 26,  113 => 25,  109 => 24,  101 => 22,  99 => 21,  96 => 20,  92 => 19,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/template-content.html.twig' %}
{% block title %}Historique{% endblock %}
{% block main %}
    <link rel=\"stylesheet\" href=\"{{ asset('CSS/historique.css') }}\">

        <h2>Historique</h2>
        <div id=\"cadree\">
            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Ville</th>

                    <th scope=\"col\">Date début</th>
                    <th scope=\"col\">Durée</th>
                    <th scope=\"col\">Prix</th>
                </tr>
                </thead>
                <tbody>
                {% for session in sessions %}
                    <tr>
                        {% if session.isStopped %}
                            <td><a href=\"{{ path('info_station', {'stationId': session.evse.station.id}) }}\">{{ session.evse.station.city }}</a></td>

                            <td>{{ session.createdAt |date('d-m-y H:i', 'Europe/Paris')}}</td>
                            <td>{{ (session.getStopedAt.diff(session.getCreatedAt)).format(\"%H:%I:%S\") }}</td>
                            <td>{{ session.getPrice() }}</td>
                        {% endif %}
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>

{% endblock %}
", "recharge_session/history.html.twig", "/var/www/templates/recharge_session/history.html.twig");
    }
}
