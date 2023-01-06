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

/* partials/feeds-from-section.html.twig */
class __TwigTemplate_77720b7d41e6e9436734f42f3bfe1c1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/feeds-from-section.html.twig"));

        // line 1
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "section", [], "any", false, false, false, 1))) : ("")) && (twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()), "type", [], "any", false, false, false, 1) == "page"))) {
            // line 2
            $context["section"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 2), "showable", [], "any", false, true, false, 2), twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "section", [], "any", false, false, false, 2), [], "array", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 2), "showable", [], "any", false, true, false, 2), twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "section", [], "any", false, false, false, 2), [], "array", false, false, false, 2))) : (""));
            // line 3
            if ((isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 3, $this->source); })())) {
                // line 4
                $this->loadTemplate("partials/alternates.html.twig", "partials/feeds-from-section.html.twig", 4)->display(twig_to_array(["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "page" => (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 4, $this->source); })()), "alternates" => twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["section"]) || array_key_exists("section", $context) ? $context["section"] : (function () { throw new RuntimeError('Variable "section" does not exist.', 4, $this->source); })()), "alternates", [], "any", false, false, false, 4), function ($__a__) use ($context, $macros) { $context["a"] = $__a__; return twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 4, $this->source); })()), "format", [], "any", false, false, false, 4), [0 => "atom", 1 => "rss", 2 => "jsonfeed"]); })]));
            }
        }
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "partials/feeds-from-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if page.section|default and page.type == 'page' -%}
  {%- set section = site.pages.showable[page.section]|default -%}
  {%- if section -%}
    {%- include 'partials/alternates.html.twig' with {'title': title, 'page': section, 'alternates': section.alternates|filter(a => a.format in ['atom', 'rss', 'jsonfeed'])} only ~%}
  {%- endif -%}
{%- endif -%}", "partials/feeds-from-section.html.twig", "/var/www/html/IntranetDocumentation/layouts/partials/feeds-from-section.html.twig");
    }
}
