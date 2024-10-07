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

/* user/profil.html.twig */
class __TwigTemplate_11e77abbefe610180b4cc54860f6511b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profil.html.twig"));

        $this->parent = $this->loadTemplate("user/template-content.html.twig", "user/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context["is_editing"] = false;
        echo " ";
        // line 7
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles.css"), "html", null, true);
        echo "\">
    <link href=\"https://fonts.googleapis.com/css2?family=Kavoon&display=swap\" rel=\"stylesheet\">

    <div>

            <div>
                <label for=\"lastname\">Last Name</label>
                <div class=\"rectangle\">
                    <input type=\"text\" id=\"lastname\" name=\"lastname\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "getLastname", [], "method", false, false, false, 16), "html", null, true);
        echo "\">
                </div>

                <label for=\"name\">Name</label>
                <div class=\"rectangle\">
                    <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "getName", [], "method", false, false, false, 21), "html", null, true);
        echo "\">
                </div>

                <label for=\"email\">Email</label>
                <div class=\"rectangle\">
                    <input type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "getEmail", [], "method", false, false, false, 26), "html", null, true);
        echo "\">
                </div>

                <label for=\"typePrise\">Type de prise</label>
                <div class=\"rectangle\">
                    <p>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "getFavPrise", [], "any", false, false, false, 31), "html", null, true);
        echo "</p>
                </div>


                <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_change_password");
        echo "\">
                    <button>Modifier mdp</button>
                </a>
            </div>

    </div>

    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
        <button>Déconnexion</button>
    </a>


    <script>
        function logout() {
            window.location.href = \"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\";
        }

        function startEditing() {
            is_editing = true;
            document.querySelector('form').classList.add('editing'); // Ajoute une classe pour montrer le formulaire
        }

        function cancelEditing() {
            is_editing = false;
            document.querySelector('form').classList.remove('editing'); // Retire la classe pour cacher le formulaire
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
        return "user/profil.html.twig";
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
        return array (  142 => 49,  132 => 42,  122 => 35,  115 => 31,  107 => 26,  99 => 21,  91 => 16,  80 => 8,  77 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/template-content.html.twig' %}

{% block title %}Profil{% endblock %}

{% block main %}
    {% set is_editing = false %} {# Déclaration de la variable is_editing #}

    <link rel=\"stylesheet\" href=\"{{ asset('styles.css') }}\">
    <link href=\"https://fonts.googleapis.com/css2?family=Kavoon&display=swap\" rel=\"stylesheet\">

    <div>

            <div>
                <label for=\"lastname\">Last Name</label>
                <div class=\"rectangle\">
                    <input type=\"text\" id=\"lastname\" name=\"lastname\" value=\"{{ user.getLastname() }}\">
                </div>

                <label for=\"name\">Name</label>
                <div class=\"rectangle\">
                    <input type=\"text\" id=\"name\" name=\"name\" value=\"{{ user.getName() }}\">
                </div>

                <label for=\"email\">Email</label>
                <div class=\"rectangle\">
                    <input type=\"email\" id=\"email\" name=\"email\" value=\"{{ user.getEmail() }}\">
                </div>

                <label for=\"typePrise\">Type de prise</label>
                <div class=\"rectangle\">
                    <p>{{ user.getFavPrise }}</p>
                </div>


                <a href=\"{{ path('user_change_password') }}\">
                    <button>Modifier mdp</button>
                </a>
            </div>

    </div>

    <a href=\"{{ path('app_logout') }}\">
        <button>Déconnexion</button>
    </a>


    <script>
        function logout() {
            window.location.href = \"{{ path('app_logout') }}\";
        }

        function startEditing() {
            is_editing = true;
            document.querySelector('form').classList.add('editing'); // Ajoute une classe pour montrer le formulaire
        }

        function cancelEditing() {
            is_editing = false;
            document.querySelector('form').classList.remove('editing'); // Retire la classe pour cacher le formulaire
        }
    </script>
{% endblock %}", "user/profil.html.twig", "/var/www/templates/user/profil.html.twig");
    }
}
