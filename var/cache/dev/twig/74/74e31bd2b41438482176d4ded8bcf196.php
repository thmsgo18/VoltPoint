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

/* recharge_session/session.html.twig */
class __TwigTemplate_e89afc5d9f3475e57133ad4c0d09d21e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recharge_session/session.html.twig"));

        $this->parent = $this->loadTemplate("user/template-content.html.twig", "recharge_session/session.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Session";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <main>
        <h2>Session de charge</h2>
        <p>
            ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 7, $this->source); })()), "evse", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        echo " || ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 7, $this->source); })()), "evse", [], "any", false, false, false, 7), "station", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "
        </p>
        <div class=\"session\">
            <progress class=\"bar_item\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["battery_level"]) || array_key_exists("battery_level", $context) ? $context["battery_level"] : (function () { throw new RuntimeError('Variable "battery_level" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\" max=\"100\"></progress>
            <p>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["battery_level"]) || array_key_exists("battery_level", $context) ? $context["battery_level"] : (function () { throw new RuntimeError('Variable "battery_level" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "%</p>

            <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 13, $this->source); })()), "status", [], "any", false, false, false, 13)), "html", null, true);
        echo "</p>

            ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 15, $this->source); })()), "isInProgress", [], "any", false, false, false, 15)) {
            // line 16
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pause_session", ["sessionId" => twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 16, $this->source); })()), "getId", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\"><button>Pause</button></a>
            ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 17, $this->source); })()), "IsPaused", [], "any", false, false, false, 17)) {
            // line 18
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resume_session", ["sessionId" => twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 18, $this->source); })()), "getId", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\"><button>Resume</button></a>
            ";
        }
        // line 20
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stop_session", ["sessionId" => twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 20, $this->source); })()), "getId", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\"><button>Stop</button></a>
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
        return "recharge_session/session.html.twig";
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
        return array (  115 => 20,  109 => 18,  107 => 17,  102 => 16,  100 => 15,  95 => 13,  90 => 11,  86 => 10,  78 => 7,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/template-content.html.twig' %}
{% block title %}Session{% endblock %}
{% block main %}
    <main>
        <h2>Session de charge</h2>
        <p>
            {{ session.evse.name }} || {{ session.evse.station.name }}
        </p>
        <div class=\"session\">
            <progress class=\"bar_item\" value=\"{{ battery_level }}\" max=\"100\"></progress>
            <p>{{ battery_level }}%</p>

            <p>{{ session.status | trans }}</p>

            {% if session.isInProgress %}
                <a href=\"{{ path('pause_session', {'sessionId': session.getId}) }}\"><button>Pause</button></a>
            {% elseif session.IsPaused %}
                <a href=\"{{ path('resume_session', {'sessionId': session.getId}) }}\"><button>Resume</button></a>
            {% endif %}
            <a href=\"{{ path('stop_session', {'sessionId': session.getId}) }}\"><button>Stop</button></a>
        </div>

    </main>
{% endblock %}
", "recharge_session/session.html.twig", "/var/www/templates/recharge_session/session.html.twig");
    }
}
