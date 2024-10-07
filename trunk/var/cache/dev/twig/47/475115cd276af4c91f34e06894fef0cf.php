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

/* user/template-content.html.twig */
class __TwigTemplate_57a6339e26a5e37d45f858fd7f89cd07 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "user/template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/template-content.html.twig"));

        $this->parent = $this->loadTemplate("user/template.html.twig", "user/template-content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 3
        echo "    <footer>
        <nav>
            <ul>
                <li><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sessions_history");
        echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 16 16\"><path fill=\"currentColor\" d=\"m.427 1.927l1.215 1.215a8.002 8.002 0 1 1-1.6 5.685a.75.75 0 1 1 1.493-.154a6.5 6.5 0 1 0 1.18-4.458l1.358 1.358A.25.25 0 0 1 3.896 6H.25A.25.25 0 0 1 0 5.75V2.104a.25.25 0 0 1 .427-.177M7.75 4a.75.75 0 0 1 .75.75v2.992l2.028.812a.75.75 0 0 1-.557 1.392l-2.5-1A.751.751 0 0 1 7 8.25v-3.5A.75.75 0 0 1 7.75 4\"/></svg></a></li>
                <li><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recharge_session");
        echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" d=\"M19.745 10.5a1.41 1.41 0 0 1-.26.66l-7.94 10.73a.94.94 0 0 1-.53.35a.827.827 0 0 1-.22 0a1.099 1.099 0 0 1-.4-.08a1 1 0 0 1-.55-1l.8-6.21h-5.13a1.41 1.41 0 0 1-.7-.22a1.33 1.33 0 0 1-.46-.56a1.45 1.45 0 0 1-.1-.69c.03-.236.12-.46.26-.65l7.94-10.71a.93.93 0 0 1 .51-.34a1 1 0 0 1 .63.06a.94.94 0 0 1 .44.42a1 1 0 0 1 .11.55l-.8 6.21h5.14a1.16 1.16 0 0 1 .7.22c.194.141.35.33.45.55c.096.223.134.467.11.71\"/></svg></a></li>
                <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_stations");
        echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 256 256\"><path fill=\"currentColor\" d=\"M108 80a20 20 0 1 1 20 20a20 20 0 0 1-20-20m-48 0a68 68 0 0 1 136 0c0 62.25-59.51 97-62.05 98.42a12 12 0 0 1-11.9 0C119.51 177 60 142.25 60 80m24 0c0 38.2 30.71 64.2 44 73.64c13.21-9.49 44-35.64 44-73.64a44 44 0 0 0-88 0m124.57 65.6a12 12 0 1 0-9.14 22.19C213.56 173.61 220 180.27 220 184c0 4-7.13 11.07-22.77 17.08c-18.3 7-42.89 10.92-69.23 10.92s-50.93-3.88-69.23-10.92C43.12 195.07 36 188 36 184c0-3.73 6.44-10.39 20.57-16.21a12 12 0 1 0-9.14-22.19C31.27 152.25 12 164.31 12 184c0 34.14 58.36 52 116 52c29.22 0 56.86-4.44 77.85-12.52C220.1 218 244 205.59 244 184c0-19.69-19.27-31.75-35.43-38.4\"/></svg></a></li>
                <li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_profile");
        echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" d=\"M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4m0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4\"/></svg></a></li>
            </ul>
        </nav>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/template-content.html.twig";
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
        return array (  76 => 9,  72 => 8,  68 => 7,  64 => 6,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/template.html.twig' %}
{% block footer %}
    <footer>
        <nav>
            <ul>
                <li><a href=\"{{ path('app_sessions_history') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 16 16\"><path fill=\"currentColor\" d=\"m.427 1.927l1.215 1.215a8.002 8.002 0 1 1-1.6 5.685a.75.75 0 1 1 1.493-.154a6.5 6.5 0 1 0 1.18-4.458l1.358 1.358A.25.25 0 0 1 3.896 6H.25A.25.25 0 0 1 0 5.75V2.104a.25.25 0 0 1 .427-.177M7.75 4a.75.75 0 0 1 .75.75v2.992l2.028.812a.75.75 0 0 1-.557 1.392l-2.5-1A.751.751 0 0 1 7 8.25v-3.5A.75.75 0 0 1 7.75 4\"/></svg></a></li>
                <li><a href=\"{{ path('app_recharge_session') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" d=\"M19.745 10.5a1.41 1.41 0 0 1-.26.66l-7.94 10.73a.94.94 0 0 1-.53.35a.827.827 0 0 1-.22 0a1.099 1.099 0 0 1-.4-.08a1 1 0 0 1-.55-1l.8-6.21h-5.13a1.41 1.41 0 0 1-.7-.22a1.33 1.33 0 0 1-.46-.56a1.45 1.45 0 0 1-.1-.69c.03-.236.12-.46.26-.65l7.94-10.71a.93.93 0 0 1 .51-.34a1 1 0 0 1 .63.06a.94.94 0 0 1 .44.42a1 1 0 0 1 .11.55l-.8 6.21h5.14a1.16 1.16 0 0 1 .7.22c.194.141.35.33.45.55c.096.223.134.467.11.71\"/></svg></a></li>
                <li><a href=\"{{ path('view_stations') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 256 256\"><path fill=\"currentColor\" d=\"M108 80a20 20 0 1 1 20 20a20 20 0 0 1-20-20m-48 0a68 68 0 0 1 136 0c0 62.25-59.51 97-62.05 98.42a12 12 0 0 1-11.9 0C119.51 177 60 142.25 60 80m24 0c0 38.2 30.71 64.2 44 73.64c13.21-9.49 44-35.64 44-73.64a44 44 0 0 0-88 0m124.57 65.6a12 12 0 1 0-9.14 22.19C213.56 173.61 220 180.27 220 184c0 4-7.13 11.07-22.77 17.08c-18.3 7-42.89 10.92-69.23 10.92s-50.93-3.88-69.23-10.92C43.12 195.07 36 188 36 184c0-3.73 6.44-10.39 20.57-16.21a12 12 0 1 0-9.14-22.19C31.27 152.25 12 164.31 12 184c0 34.14 58.36 52 116 52c29.22 0 56.86-4.44 77.85-12.52C220.1 218 244 205.59 244 184c0-19.69-19.27-31.75-35.43-38.4\"/></svg></a></li>
                <li><a href=\"{{ path('user_profile') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32\" height=\"32\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" d=\"M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4m0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4\"/></svg></a></li>
            </ul>
        </nav>
    </footer>
{% endblock %}

", "user/template-content.html.twig", "/var/www/templates/user/template-content.html.twig");
    }
}
