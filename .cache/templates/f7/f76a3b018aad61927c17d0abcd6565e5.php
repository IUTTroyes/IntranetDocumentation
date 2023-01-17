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

/* _default/list.json.twig */
class __TwigTemplate_d585f7634be9e5c8219069930429c9ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 14
        return "_default/page.json.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_default/list.json.twig"));

        // line 2
        $context["pages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "pages", [], "any", false, false, false, 2), "showable", [], "any", false, false, false, 2);
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pages", [], "any", true, true, false, 4)) {
            // line 5
            $context["pages"] = twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })()), "pages", [], "any", false, false, false, 5);
        }
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 8), "pages", [], "any", true, true, false, 8)) {
            // line 9
            $context["pages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "paginator", [], "any", false, false, false, 9), "pages", [], "any", false, false, false, 9);
        }
        // line 12
        $context["items"] = (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 12, $this->source); })());
        // line 14
        $this->parent = $this->loadTemplate("_default/page.json.twig", "_default/list.json.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "_default/list.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  56 => 12,  53 => 9,  51 => 8,  48 => 5,  46 => 4,  44 => 2,  34 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{# all \"showable pages by default #}
{% set pages = site.pages.showable %}
{# in case of a list page, take its sub pages #}
{% if page.pages is defined %}
  {%- set pages = page.pages -%}
{% endif %}
{# in case of a paginated list page, take the paginator list pages #}
{% if page.paginator.pages is defined %}
  {%- set pages = page.paginator.pages -%}
{% endif %}

{%- set items = pages -%}

{% extends '_default/page.json.twig' %}", "_default/list.json.twig", "/var/www/html/IntranetDocumentation/layouts/_default/list.json.twig");
    }
}
