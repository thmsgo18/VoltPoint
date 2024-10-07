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

/* user/filtre.html.twig */
class __TwigTemplate_24c0fb27d2e147092758c089cf383cdd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/filtre.html.twig"));

        $this->parent = $this->loadTemplate("user/template-content.html.twig", "user/filtre.html.twig", 1);
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
        echo "    <main class=\"application\">
        <h2>Filtres</h2>
        <form method=\"post\">
            Type de prise:<br>
            <div>
                <select id=\"prix\" name=\"prix\">
                    <option value=\"option1\">€</option>
                    <option value=\"option2\">€€</option>
                    <option value=\"option3\">€€€</option>
                </select>
            </div>
            Type de prise:<br>
            <div>
                <select id=\"password\" name=\"password\">
                    <option value=\"option1\">Type 1</option>
                    <option value=\"option2\">Type 2</option>
                    <option value=\"option3\">Type 3</option>
                    <option value=\"option3\">Type 4</option>
                </select>
            </div>
            Type de prise:<br>
            <div>
                <select id=\"password\" name=\"password\">
                    <option value=\"option1\">Type 1</option>
                    <option value=\"option2\">Type 2</option>
                    <option value=\"option3\">Type 3</option>
                    <option value=\"option3\">Type 4</option>
                </select>
            </div>
            Type de prise:<br>
            <div>
                <select id=\"password\" name=\"password\">
                    <option value=\"option1\">Type 1</option>
                    <option value=\"option2\">Type 2</option>
                    <option value=\"option3\">Type 3</option>
                    <option value=\"option3\">Type 4</option>
                </select>
            </div>
            Type de prise:<br>
            <div>
                <select id=\"password\" name=\"password\">
                    <option value=\"option1\">Type 1</option>
                    <option value=\"option2\">Type 2</option>
                    <option value=\"option3\">Type 3</option>
                    <option value=\"option3\">Type 4</option>
                </select>
            </div>
            <button type=\"reset\">Réinitialisé</button>
            <button type=\"submit\">Appliquer</button>
        </form>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/filtre.html.twig";
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
        return array (  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/template-content.html.twig' %}
{% block title %}Session{% endblock %}
{% block main %}
    <main class=\"application\">
        <h2>Filtres</h2>
        <form method=\"post\">
            Type de prise:<br>
            <div>
                <select id=\"prix\" name=\"prix\">
                    <option value=\"option1\">€</option>
                    <option value=\"option2\">€€</option>
                    <option value=\"option3\">€€€</option>
                </select>
            </div>
            Type de prise:<br>
            <div>
                <select id=\"password\" name=\"password\">
                    <option value=\"option1\">Type 1</option>
                    <option value=\"option2\">Type 2</option>
                    <option value=\"option3\">Type 3</option>
                    <option value=\"option3\">Type 4</option>
                </select>
            </div>
            Type de prise:<br>
            <div>
                <select id=\"password\" name=\"password\">
                    <option value=\"option1\">Type 1</option>
                    <option value=\"option2\">Type 2</option>
                    <option value=\"option3\">Type 3</option>
                    <option value=\"option3\">Type 4</option>
                </select>
            </div>
            Type de prise:<br>
            <div>
                <select id=\"password\" name=\"password\">
                    <option value=\"option1\">Type 1</option>
                    <option value=\"option2\">Type 2</option>
                    <option value=\"option3\">Type 3</option>
                    <option value=\"option3\">Type 4</option>
                </select>
            </div>
            Type de prise:<br>
            <div>
                <select id=\"password\" name=\"password\">
                    <option value=\"option1\">Type 1</option>
                    <option value=\"option2\">Type 2</option>
                    <option value=\"option3\">Type 3</option>
                    <option value=\"option3\">Type 4</option>
                </select>
            </div>
            <button type=\"reset\">Réinitialisé</button>
            <button type=\"submit\">Appliquer</button>
        </form>
    </main>
{% endblock %}
", "user/filtre.html.twig", "/var/www/templates/user/filtre.html.twig");
    }
}
