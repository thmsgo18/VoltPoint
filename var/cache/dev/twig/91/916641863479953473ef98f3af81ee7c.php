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

/* station/list.html.twig */
class __TwigTemplate_1f32c2cfda447bf66f199400ece84782 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "station/list.html.twig"));

        $this->parent = $this->loadTemplate("user/template-content.html.twig", "station/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Stations de charge";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"application\" >
        <div style=\"
    flex: 1;
    overflow: auto;

\">
            <table>
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Dispo</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stations"]) || array_key_exists("stations", $context) ? $context["stations"] : (function () { throw new RuntimeError('Variable "stations" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
            // line 21
            echo "                    <tr>
                        <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("info_station", ["stationId" => twig_get_attribute($this->env, $this->source, $context["station"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "street", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "city", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "hasDispo", [], "method", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['station'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </tbody>
            </table>
        </div>
        <div style=\"
    height: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 10px;
    border-top: 2px solid black;
\">
            <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_map");
        echo "\">
                <button>Map</button>
            </a>

            <button onclick=\"openPopup()\">Filtre</button>
        </div>

    </div>
    <div id=\"filtre_popup\" class=\"popup\" style=\"display: none\">
        <div class=\"popup-header\">
            <p>Filtre</p>
            <span onclick=\"closePopup()\">X</span>
        </div>
        <div class=\"popup-content\">
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form');
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "station/list.html.twig";
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
        return array (  151 => 53,  134 => 39,  121 => 28,  112 => 25,  108 => 24,  104 => 23,  98 => 22,  95 => 21,  91 => 20,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/template-content.html.twig' %}
{% block title %}Stations de charge{% endblock %}
{% block main %}
    <div class=\"application\" >
        <div style=\"
    flex: 1;
    overflow: auto;

\">
            <table>
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Dispo</th>
                </tr>
                </thead>
                <tbody>
                {% for station in stations %}
                    <tr>
                        <td><a href=\"{{ path('info_station', { 'stationId': station.id }) }}\">{{ station.name }}</a></td>
                        <td>{{ station.street }}</td>
                        <td>{{ station.city }}</td>
                        <td>{{ station.hasDispo() }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <div style=\"
    height: 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 10px;
    border-top: 2px solid black;
\">
            <a href=\"{{ path('view_map') }}\">
                <button>Map</button>
            </a>

            <button onclick=\"openPopup()\">Filtre</button>
        </div>

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
{% endblock %}", "station/list.html.twig", "/var/www/templates/station/list.html.twig");
    }
}
