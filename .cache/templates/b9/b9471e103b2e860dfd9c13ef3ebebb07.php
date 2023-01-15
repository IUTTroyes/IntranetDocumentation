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

/* partials/alternates-languages.html.twig */
class __TwigTemplate_ea0a7aec80d785447f6ee83f293b0f58 extends Template
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
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/alternates-languages.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "translations", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "translations", [], "any", false, false, false, 1), [])) : ([]))) >= 1)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 2, $this->source); })()), "translations", [], "any", false, false, false, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["alternate"]) {
                echo "
    <link rel=\"alternate\" hreflang=\"";
                // line 3
                echo twig_get_attribute($this->env, $this->source, $context["alternate"], "language", [], "any", false, false, false, 3);
                echo "\" href=\"";
                echo $this->extensions['Cecil\Renderer\Extension\Core']->url($context["alternate"], ["canonical" => true]);
                echo "\">";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alternate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 4
            echo "
    <link rel=\"alternate\" hreflang=\"x-default\" href=\"";
            // line 5
            echo $this->extensions['Cecil\Renderer\Extension\Core']->url((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })()), ["canonical" => true]);
            echo "\">";
        }
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "partials/alternates-languages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 5,  57 => 4,  48 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if page.translations|default({})|length >= 1 -%}
  {%- for alternate in page.translations ~%}
    <link rel=\"alternate\" hreflang=\"{{ alternate.language }}\" href=\"{{ url(alternate, {canonical: true}) }}\">
  {%- endfor ~%}
    <link rel=\"alternate\" hreflang=\"x-default\" href=\"{{ url(page, {canonical: true}) }}\">
{%- endif -%}", "partials/alternates-languages.html.twig", "/var/www/html/IntranetDocumentation/layouts/partials/alternates-languages.html.twig");
    }
}
