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

/* partials/doc-content.html.twig */
class __TwigTemplate_741bfd832b51596fa808a3fd0d2b26fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_default/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/doc-content.html.twig"));

        $this->parent = $this->loadTemplate("_default/page.html.twig", "partials/doc-content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "
    <div class=\"main_content\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"/\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"/";
        // line 7
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 7, $this->source); })()), "section", [], "any", false, false, false, 7);
        echo "\">";
        echo twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 7, $this->source); })()), "section", [], "any", false, false, false, 7));
        echo "</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 8
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8);
        echo "</li>
            </ol>
        </nav>
        <main>
            <div class=\"toast align-items-center show\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                <div class=\"d-flex\">
                    <div class=\"toast-body\">
                        <i class=\"fa-solid fa-circle-info\"></i> Vous êtes sur la documentation de l'intranet
                        pour
                        ";
        // line 17
        $this->loadTemplate("partials/categories-list.html.twig", "partials/doc-content.html.twig", 17)->display(twig_to_array(["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 17, $this->source); })()), "vocabulary" => "categories"]));
        // line 18
        echo "                    </div>
                    <button type=\"button\" class=\"btn-close me-2 m-auto\" data-bs-dismiss=\"toast\"
                            aria-label=\"Close\"></button>
                </div>
            </div>

";
        // line 25
        echo "
            <h1>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26));
        echo "</h1>

            ";
        // line 28
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 28, $this->source); })()), "content", [], "any", false, false, false, 28);
        // line 29
        $this->displayBlock('content_footer', $context, $blocks);
        // line 42
        echo "
        </main>
        <footer>";
        // line 45
        ob_start();
        // line 46
        echo "<a href=\"";
        echo twig_get_attribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 46, $this->source); })()), "url", [], "any", false, false, false, 46);
        echo "\">Cecil</a> &amp; <a href=\"https://newcss.net\">new.css</a>";
        $context["powered_by"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        echo "
            <small>";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Powered by %powered_by%", ["%powered_by%" => (isset($context["powered_by"]) || array_key_exists("powered_by", $context) ? $context["powered_by"] : (function () { throw new RuntimeError('Variable "powered_by" does not exist.', 48, $this->source); })())], "messages");
        echo "</small>
        </footer>
    </div>";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 29
    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "prev", [], "any", true, true, false, 30) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "next", [], "any", true, true, false, 30))) {
            echo "
                    <nav>
                        <ul>";
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "prev", [], "any", true, true, false, 33)) {
                echo "
                                <li><a href=\"";
                // line 34
                echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 34, $this->source); })()), "prev", [], "any", false, false, false, 34));
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 34, $this->source); })()), "prev", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34);
                echo "</a></li>";
            }
            // line 36
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "next", [], "any", true, true, false, 36)) {
                echo "
                                <li><a href=\"";
                // line 37
                echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 37, $this->source); })()), "next", [], "any", false, false, false, 37));
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 37, $this->source); })()), "next", [], "any", false, false, false, 37), "title", [], "any", false, false, false, 37);
                echo "</a></li>";
            }
            // line 38
            echo "
                        </ul>
                    </nav>";
        }
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "partials/doc-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 38,  156 => 37,  152 => 36,  146 => 34,  142 => 33,  137 => 30,  130 => 29,  120 => 48,  117 => 47,  112 => 46,  110 => 45,  106 => 42,  104 => 29,  102 => 28,  97 => 26,  94 => 25,  86 => 18,  84 => 17,  72 => 8,  66 => 7,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '_default/page.html.twig' %}
{%- block content ~%}
    <div class=\"main_content\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"/\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"/{{ page.section }}\">{{ page.section|capitalize }}</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ page.title }}</li>
            </ol>
        </nav>
        <main>
            <div class=\"toast align-items-center show\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                <div class=\"d-flex\">
                    <div class=\"toast-body\">
                        <i class=\"fa-solid fa-circle-info\"></i> Vous êtes sur la documentation de l'intranet
                        pour
                        {% include 'partials/categories-list.html.twig' with {'page': page, 'vocabulary': 'categories'} only %}
                    </div>
                    <button type=\"button\" class=\"btn-close me-2 m-auto\" data-bs-dismiss=\"toast\"
                            aria-label=\"Close\"></button>
                </div>
            </div>

{#            todo: diviser en deux colonnes ? une colonne txt et une colonne screen d'illustration #}

            <h1>{{ page.title|e }}</h1>

            {{ page.content }}
            {%- block content_footer ~%}
                {%- if page.prev is defined or page.next is defined ~%}
                    <nav>
                        <ul>
                            {%- if page.prev is defined ~%}
                                <li><a href=\"{{ url(page.prev) }}\">{{ page.prev.title }}</a></li>
                            {%- endif ~%}
                            {%- if page.next is defined ~%}
                                <li><a href=\"{{ url(page.next) }}\">{{ page.next.title }}</a></li>
                            {%- endif ~%}
                        </ul>
                    </nav>
                {%- endif ~%}
            {%- endblock content_footer ~%}
        </main>
        <footer>
            {%- set powered_by -%}
                <a href=\"{{ cecil.url }}\">Cecil</a> &amp; <a href=\"https://newcss.net\">new.css</a>
            {%- endset ~%}
            <small>{% trans %}Powered by %powered_by%{% endtrans %}</small>
        </footer>
    </div>
{%- endblock content ~%}
", "partials/doc-content.html.twig", "/var/www/html/IntranetDocumentation/layouts/partials/doc-content.html.twig");
    }
}
