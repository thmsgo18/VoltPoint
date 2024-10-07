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

/* admin/session.html.twig */
class __TwigTemplate_41610e688d86d3e91cf92aa3ca64a3e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/template-content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/session.html.twig"));

        $this->parent = $this->loadTemplate("admin/template-content.html.twig", "admin/session.html.twig", 1);
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
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div>
        <div class=\"header-mid\">
            <h2 class=\"titre-station\">Session</h2>
            <button onclick=\"openPopup()\">Filtre</button>
        </div>
        <div class=\"center\">
            <table>
                <thead>
                <tr>
                    <th>Session ID</th>
                    <th>Name user</th>
                    <th>Evse</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Date Start</th>
                    <th>State</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) || array_key_exists("sessions", $context) ? $context["sessions"] : (function () { throw new RuntimeError('Variable "sessions" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 28
            echo "                    <tr>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "user", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "user", [], "any", false, false, false, 30), "lastname", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "evse", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "evse", [], "any", false, false, false, 32), "station", [], "any", false, false, false, 32), "street", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "evse", [], "any", false, false, false, 33), "station", [], "any", false, false, false, 33), "city", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "evse", [], "any", false, false, false, 34), "station", [], "any", false, false, false, 34), "longitude", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "evse", [], "any", false, false, false, 35), "station", [], "any", false, false, false, 35), "latitude", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["session"], "createdAt", [], "any", false, false, false, 36), "d-m-y H:i", "Europe/Paris"), "html", null, true);
            echo "</td>
                        ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["session"], "isInProgress", [], "any", false, false, false, 37)) {
                // line 38
                echo "                            <td> In Progress </td>
                            <td> In Progress </td>
                            <td><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stop_session", ["sessionId" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">Stop</a></td>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 41
$context["session"], "isStopped", [], "any", false, false, false, 41)) {
                // line 42
                echo "                            <td> Finished </td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["session"], "getStopedAt", [], "any", false, false, false, 43), "diff", [twig_get_attribute($this->env, $this->source, $context["session"], "getCreatedAt", [], "any", false, false, false, 43)], "method", false, false, false, 43), "format", ["%H:%I:%S"], "method", false, false, false, 43), "html", null, true);
                echo "</td>
                        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 44
$context["session"], "isPaused", [], "any", false, false, false, 44)) {
                // line 45
                echo "                            <td> Paused </td>
                            <td> In Progress </td>
                            <td><a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_stop_session", ["sessionId" => twig_get_attribute($this->env, $this->source, $context["session"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">Stop</a></td>
                        ";
            }
            // line 49
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </tbody>
            </table>
        </div>
    </div>
    <div class=\"footer-mid\">
    </div>
    <div id=\"filtre_popup\" class=\"popup\" style=\"display: none\">
        <div class=\"popup-header\">
            <p>Filtre</p>
            <span onclick=\"closePopup()\">X</span>
        </div>
        <div class=\"popup-content\">
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form');
        echo "
        </div>
    </div>
    <script>
        function openPopup() {
            document.getElementById('filtre_popup').style.display = 'block';
        }
        function closePopup() {
            document.getElementById('filtre_popup').style.display = 'none';
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 75
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 76
        echo "    <p>&copy; 2024 - Voltpoint</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/session.html.twig";
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
        return array (  217 => 76,  210 => 75,  191 => 63,  177 => 51,  170 => 49,  165 => 47,  161 => 45,  159 => 44,  155 => 43,  152 => 42,  150 => 41,  146 => 40,  142 => 38,  140 => 37,  136 => 36,  132 => 35,  128 => 34,  124 => 33,  120 => 32,  116 => 31,  110 => 30,  106 => 29,  103 => 28,  99 => 27,  74 => 4,  67 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/template-content.html.twig' %}
{% block title %}Session{% endblock%}
{% block content %}
    <div>
        <div class=\"header-mid\">
            <h2 class=\"titre-station\">Session</h2>
            <button onclick=\"openPopup()\">Filtre</button>
        </div>
        <div class=\"center\">
            <table>
                <thead>
                <tr>
                    <th>Session ID</th>
                    <th>Name user</th>
                    <th>Evse</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Date Start</th>
                    <th>State</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                {% for session in sessions %}
                    <tr>
                        <td>{{ session.id }}</td>
                        <td>{{ session.user.name }} {{ session.user.lastname }}</td>
                        <td>{{ session.evse.name }}</td>
                        <td>{{ session.evse.station.street }}</td>
                        <td>{{ session.evse.station.city }}</td>
                        <td>{{ session.evse.station.longitude }}</td>
                        <td>{{ session.evse.station.latitude }}</td>
                        <td>{{ session.createdAt |date('d-m-y H:i', 'Europe/Paris')}}</td>
                        {% if session.isInProgress %}
                            <td> In Progress </td>
                            <td> In Progress </td>
                            <td><a href=\"{{ path('admin_stop_session', { 'sessionId': session.id }) }}\">Stop</a></td>
                        {% elseif session.isStopped %}
                            <td> Finished </td>
                            <td>{{ (session.getStopedAt.diff(session.getCreatedAt)).format(\"%H:%I:%S\") }}</td>
                        {% elseif session.isPaused %}
                            <td> Paused </td>
                            <td> In Progress </td>
                            <td><a href=\"{{ path('admin_stop_session', { 'sessionId': session.id }) }}\">Stop</a></td>
                        {% endif %}
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"footer-mid\">
    </div>
    <div id=\"filtre_popup\" class=\"popup\" style=\"display: none\">
        <div class=\"popup-header\">
            <p>Filtre</p>
            <span onclick=\"closePopup()\">X</span>
        </div>
        <div class=\"popup-content\">
            {{ form(form) }}
        </div>
    </div>
    <script>
        function openPopup() {
            document.getElementById('filtre_popup').style.display = 'block';
        }
        function closePopup() {
            document.getElementById('filtre_popup').style.display = 'none';
        }
    </script>
{% endblock %}
{% block footer %}
    <p>&copy; 2024 - Voltpoint</p>
{% endblock %}
", "admin/session.html.twig", "/var/www/templates/admin/session.html.twig");
    }
}
