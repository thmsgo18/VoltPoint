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

/* station/map.html.twig */
class __TwigTemplate_637387b3ff678c9c73212ea09339e7ac extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "station/map.html.twig"));

        $this->parent = $this->loadTemplate("user/template-content.html.twig", "station/map.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "map";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\" integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\" crossorigin=\"\" />
    <style type=\"text/css\">
        #map { /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
            height:100%;
            border-radius: 5px;
        }
    </style>
    <title>Carte</title>
    </head>
    <body>
    <div id=\"map\">
        <!-- Ici s'affichera la carte -->
    </div>

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stations"]) || array_key_exists("stations", $context) ? $context["stations"] : (function () { throw new RuntimeError('Variable "stations" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
            // line 20
            echo "        <div class=\"station\" data-info-station-path=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("info_station", ["stationId" => twig_get_attribute($this->env, $this->source, $context["station"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">
            <p style=\"display: none;\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "latitude", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
            <p style=\"display: none;\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "longitude", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
            <p class=\"street\" style=\"display: none;\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "street", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
            <p class=\"city\" style=\"display: none;\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "city", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
            <p class=\"dispo\" style=\"display: none;\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "hasDispo", [], "method", false, false, false, 25), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['station'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    <!-- Fichiers Javascript -->
    <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\" integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\" crossorigin=\"\"></script>
    <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', function() {
            var stations = document.querySelectorAll('.station');
            var lat = 48.852969;
            var lon = 2.349903;
            var macarte = L.map('map').setView([lat, lon], 11);
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
                minZoom: 1,
                maxZoom: 20
            }).addTo(macarte);

            stations.forEach(function(station) {
                var latitude = parseFloat(station.querySelector('p:nth-child(1)').textContent);
                var longitude = parseFloat(station.querySelector('p:nth-child(2)').textContent);

                var myIcon = L.icon({
                    iconUrl: \"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgWkt6k-eM8y4tFZ7tqUIvDBlhq2jjRUF3b4YIMU6dk0jQmT6Tmt7IYyFcawvvFxyeEUuR4Q_OShUN_ZBDmNNwr1XSuij5c2CKJRJ92dYwz1j8DYTkb4a1RiOxd48c-Y3ZF_93RGciZhPt0xc1ca1pndmv24Ly9vjB6xXBGUZfflUK6ytlyhyphenhyphenvTNIckyBrM/w945-h600-p-k-no-nu/marqueur.png\",
                    iconSize: [50, 50],
                    iconAnchor: [25, 50],
                    popupAnchor: [0, -48],
                });

                var marker = L.marker([latitude, longitude], { icon: myIcon }).addTo(macarte);

                var infoStationPath = station.dataset.infoStationPath;

                var popupContent = `
                     <p>\${station.querySelector('.street').textContent} - \${station.querySelector('.city').textContent}</p>
                     <p>Bornes disponibles: \${station.querySelector('.dispo').textContent}</p>
                     <p><a href=\"\${infoStationPath}\">Détails</a></p>
                `;


                marker.bindPopup(popupContent);
            });
        });
    </script>
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "station/map.html.twig";
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
        return array (  124 => 28,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  94 => 20,  90 => 19,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/template-content.html.twig' %}
{% block title %}map{% endblock %}
{% block main %}
    <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\" integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\" crossorigin=\"\" />
    <style type=\"text/css\">
        #map { /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
            height:100%;
            border-radius: 5px;
        }
    </style>
    <title>Carte</title>
    </head>
    <body>
    <div id=\"map\">
        <!-- Ici s'affichera la carte -->
    </div>

    {% for station in stations %}
        <div class=\"station\" data-info-station-path=\"{{ path('info_station', { 'stationId': station.id }) }}\">
            <p style=\"display: none;\">{{ station.latitude }}</p>
            <p style=\"display: none;\">{{ station.longitude }}</p>
            <p class=\"street\" style=\"display: none;\">{{ station.street }}</p>
            <p class=\"city\" style=\"display: none;\">{{ station.city }}</p>
            <p class=\"dispo\" style=\"display: none;\">{{ station.hasDispo() }}</p>
        </div>
    {% endfor %}

    <!-- Fichiers Javascript -->
    <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\" integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\" crossorigin=\"\"></script>
    <script type=\"text/javascript\">
        document.addEventListener('DOMContentLoaded', function() {
            var stations = document.querySelectorAll('.station');
            var lat = 48.852969;
            var lon = 2.349903;
            var macarte = L.map('map').setView([lat, lon], 11);
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                attribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
                minZoom: 1,
                maxZoom: 20
            }).addTo(macarte);

            stations.forEach(function(station) {
                var latitude = parseFloat(station.querySelector('p:nth-child(1)').textContent);
                var longitude = parseFloat(station.querySelector('p:nth-child(2)').textContent);

                var myIcon = L.icon({
                    iconUrl: \"https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgWkt6k-eM8y4tFZ7tqUIvDBlhq2jjRUF3b4YIMU6dk0jQmT6Tmt7IYyFcawvvFxyeEUuR4Q_OShUN_ZBDmNNwr1XSuij5c2CKJRJ92dYwz1j8DYTkb4a1RiOxd48c-Y3ZF_93RGciZhPt0xc1ca1pndmv24Ly9vjB6xXBGUZfflUK6ytlyhyphenhyphenvTNIckyBrM/w945-h600-p-k-no-nu/marqueur.png\",
                    iconSize: [50, 50],
                    iconAnchor: [25, 50],
                    popupAnchor: [0, -48],
                });

                var marker = L.marker([latitude, longitude], { icon: myIcon }).addTo(macarte);

                var infoStationPath = station.dataset.infoStationPath;

                var popupContent = `
                     <p>\${station.querySelector('.street').textContent} - \${station.querySelector('.city').textContent}</p>
                     <p>Bornes disponibles: \${station.querySelector('.dispo').textContent}</p>
                     <p><a href=\"\${infoStationPath}\">Détails</a></p>
                `;


                marker.bindPopup(popupContent);
            });
        });
    </script>
    </body>
{% endblock %}
", "station/map.html.twig", "/var/www/templates/station/map.html.twig");
    }
}
