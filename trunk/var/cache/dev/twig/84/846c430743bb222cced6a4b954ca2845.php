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

/* admin/evse.html.twig */
class __TwigTemplate_8223afeb10601b6021d34503961ecb22 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evse.html.twig"));

        $this->parent = $this->loadTemplate("admin/template-content.html.twig", "admin/evse.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "EVSE";
        
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
            <h2 class=\"titre-station\">Station : ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo " || located at : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 6, $this->source); })()), "street", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 6, $this->source); })()), "postal", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>
            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_view_stations");
        echo "\">
                <button class=\"btn-filtre\">Return to Stations</button>
            </a>
        </div>
        <div class=\"center\">
            <table>
                <thead>
                <tr>
                    <th>Name Station</th>
                    <th>city</th>
                    <th>Disponibility</th>
                    <th>Connector 1</th>
                    <th>Connector 2</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evses"]) || array_key_exists("evses", $context) ? $context["evses"] : (function () { throw new RuntimeError('Variable "evses" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evse"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evse"], "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 26, $this->source); })()), "city", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evse"], "disponibility", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, $context["evse"], "connector1", [], "any", false, false, false, 28) == null)) {
                // line 29
                echo "                            <td>No coonector</td>
                        ";
            } else {
                // line 31
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evse"], "connector1", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                        ";
            }
            // line 33
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["evse"], "connector2", [], "any", false, false, false, 33) == null)) {
                // line 34
                echo "                            <td>No connector</td>
                        ";
            } else {
                // line 36
                echo "                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evse"], "connector2", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                        ";
            }
            // line 38
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </tbody>
            </table>
            </table>
        </div>
    </div>
    <div class=\"footer-mid\">
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_evse", ["stationId" => twig_get_attribute($this->env, $this->source, (isset($context["station"]) || array_key_exists("station", $context) ? $context["station"] : (function () { throw new RuntimeError('Variable "station" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\">
            <button class=\"btn-ajouter\">New EVSE</button>
        </a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 51
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 52
        echo "    <p>&copy; 2024 - Voltpoint</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/evse.html.twig";
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
        return array (  183 => 52,  176 => 51,  164 => 46,  156 => 40,  149 => 38,  143 => 36,  139 => 34,  136 => 33,  130 => 31,  126 => 29,  124 => 28,  120 => 27,  116 => 26,  112 => 25,  109 => 24,  105 => 23,  86 => 7,  78 => 6,  74 => 4,  67 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/template-content.html.twig' %}
{% block title %}EVSE{% endblock%}
{% block content %}
    <div>
        <div class=\"header-mid\">
            <h2 class=\"titre-station\">Station : {{ station.name }} || located at : {{ station.street }} {{ station.postal }}</h2>
            <a href=\"{{ path('admin_view_stations') }}\">
                <button class=\"btn-filtre\">Return to Stations</button>
            </a>
        </div>
        <div class=\"center\">
            <table>
                <thead>
                <tr>
                    <th>Name Station</th>
                    <th>city</th>
                    <th>Disponibility</th>
                    <th>Connector 1</th>
                    <th>Connector 2</th>
                </tr>
                </thead>
                <tbody>
                {% for evse in evses %}
                    <tr>
                        <td>{{ evse.name }}</td>
                        <td>{{ station.city }}</td>
                        <td>{{ evse.disponibility }}</td>
                        {% if evse.connector1 == null %}
                            <td>No coonector</td>
                        {% else %}
                            <td>{{ evse.connector1 }}</td>
                        {% endif %}
                        {% if evse.connector2 == null %}
                            <td>No connector</td>
                        {% else %}
                            <td>{{ evse.connector2 }}</td>
                        {% endif %}
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            </table>
        </div>
    </div>
    <div class=\"footer-mid\">
        <a href=\"{{ path('create_evse', { 'stationId': station.id }) }}\">
            <button class=\"btn-ajouter\">New EVSE</button>
        </a>
    </div>
{% endblock %}
{% block footer %}
    <p>&copy; 2024 - Voltpoint</p>
{% endblock %}
", "admin/evse.html.twig", "/var/www/templates/admin/evse.html.twig");
    }
}
