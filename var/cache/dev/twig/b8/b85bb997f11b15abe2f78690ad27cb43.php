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

/* admin/stations.html.twig */
class __TwigTemplate_0b3e9f954b954b7960e9cb5b6e17a731 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stations.html.twig"));

        $this->parent = $this->loadTemplate("admin/template-content.html.twig", "admin/stations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Station";
        
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
            <h2 class=\"titre-station\">Station</h2>
            <button class=\"btn-filtre\" onclick=\"openPopup()\">Filtre</button>
        </div>
        <div class=\"center\">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Prix</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>EVSE</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stations"]) || array_key_exists("stations", $context) ? $context["stations"] : (function () { throw new RuntimeError('Variable "stations" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
            // line 25
            echo "                    <tr>
                        <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_info_station", ["stationId" => twig_get_attribute($this->env, $this->source, $context["station"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "street", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "city", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "prix", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "longitude", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "latitude", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["station"], "evses", [], "any", false, false, false, 33), "count", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['station'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>
            </table>
        </div>
    </div>
    <div class=\"footer-mid\">
        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_station");
        echo "\">
        <button class=\"btn-ajouter\">New Stations</button>
        </a>
    </div>
    <div id=\"filtre_popup\" class=\"popup\" style=\"display: none\">
        <div class=\"popup-header\">
            <p>Filtre</p>
            <span onclick=\"closePopup()\">X</span>
        </div>
        <div class=\"popup-content\">
            ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form');
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

    // line 64
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 65
        echo "<p>&copy; 2024 - Voltpoint</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/stations.html.twig";
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
        return array (  189 => 65,  182 => 64,  163 => 52,  150 => 42,  142 => 36,  133 => 33,  129 => 32,  125 => 31,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  103 => 26,  100 => 25,  96 => 24,  74 => 4,  67 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/template-content.html.twig' %}
{% block title %}Station{% endblock%}
{% block content %}
    <div>
        <div class=\"header-mid\">
            <h2 class=\"titre-station\">Station</h2>
            <button class=\"btn-filtre\" onclick=\"openPopup()\">Filtre</button>
        </div>
        <div class=\"center\">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Prix</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>EVSE</th>
                </tr>
                </thead>
                <tbody>
                {% for station in stations %}
                    <tr>
                        <td><a href=\"{{ path('admin_info_station', { 'stationId': station.id }) }}\">{{ station.id }}</a></td>
                        <td>{{ station.name }}</td>
                        <td>{{ station.street }}</td>
                        <td>{{ station.city }}</td>
                        <td>{{ station.prix }}</td>
                        <td>{{ station.longitude }}</td>
                        <td>{{ station.latitude }}</td>
                        <td>{{ station.evses.count }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            </table>
        </div>
    </div>
    <div class=\"footer-mid\">
        <a href=\"{{ path('create_station') }}\">
        <button class=\"btn-ajouter\">New Stations</button>
        </a>
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
", "admin/stations.html.twig", "/var/www/templates/admin/stations.html.twig");
    }
}
