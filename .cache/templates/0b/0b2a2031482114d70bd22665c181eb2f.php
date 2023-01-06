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

/* partials/alternates.html.twig */
class __TwigTemplate_71a0b35db35d3b603f64b37c5de39396 extends Template
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
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/alternates.html.twig"));

        // line 1
        if ( !array_key_exists("alternates", $context)) {
            $context["alternates"] = twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()), "alternates", [], "any", false, false, false, 1);
        }
        // line 2
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "alternates", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "alternates", [], "any", false, false, false, 2))) : (""))) {
            // line 3
            if ( !array_key_exists("title", $context)) {
                $context["title"] = twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3);
            }
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alternates"]) || array_key_exists("alternates", $context) ? $context["alternates"] : (function () { throw new RuntimeError('Variable "alternates" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["alternate"]) {
                // line 5
                if (((twig_get_attribute($this->env, $this->source, $context["alternate"], "rel", [], "any", false, false, false, 5) == "canonical") && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "canonical", [], "any", false, true, false, 5), "url", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "canonical", [], "any", false, true, false, 5), "url", [], "any", false, false, false, 5))) : ("")))) {
                    echo "
    <link rel=\"canonical\" type=\"text/html\" title=\"";
                    // line 6
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "canonical", [], "any", false, true, false, 6), "title", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "canonical", [], "any", false, true, false, 6), "title", [], "any", false, false, false, 6), twig_trim_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })())))) : (twig_trim_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()))));
                    echo "\" href=\"";
                    echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "canonical", [], "any", false, false, false, 6), "url", [], "any", false, false, false, 6));
                    echo "\" />";
                } else {
                    // line 7
                    echo "
    <link rel=\"";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["alternate"], "rel", [], "any", false, false, false, 8);
                    echo "\" type=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["alternate"], "type", [], "any", false, false, false, 8);
                    echo "\" title=\"";
                    echo twig_trim_filter((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()));
                    if ((twig_get_attribute($this->env, $this->source, $context["alternate"], "format", [], "any", false, false, false, 8) != "html")) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["alternate"], "title", [], "any", false, false, false, 8);
                        echo ")";
                    }
                    echo "\" href=\"";
                    echo $this->extensions['Cecil\Renderer\Extension\Core']->url((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), ["canonical" => true, "format" => twig_get_attribute($this->env, $this->source, $context["alternate"], "format", [], "any", false, false, false, 8)]);
                    echo "\" />";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alternate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "partials/alternates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  64 => 7,  58 => 6,  54 => 5,  50 => 4,  46 => 3,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- if alternates is not defined %}{% set alternates = page.alternates %}{% endif -%}
{%- if page.alternates|default -%}
  {%- if title is not defined %}{% set title = page.title %}{% endif -%}
  {%- for alternate in alternates ~%}
    {%- if alternate.rel == 'canonical' and page.canonical.url|default %}{# custom canonical URL  ~#}
    <link rel=\"canonical\" type=\"text/html\" title=\"{{ page.canonical.title|default(title|trim) }}\" href=\"{{ url(page.canonical.url) }}\" />
    {%- else ~%}
    <link rel=\"{{ alternate.rel }}\" type=\"{{ alternate.type }}\" title=\"{{ title|trim }}{% if alternate.format != 'html' %} ({{ alternate.title }}){% endif %}\" href=\"{{ url(page, {canonical: true, format: alternate.format}) }}\" />
    {%- endif ~%}
  {%- endfor -%}
{%- endif -%}", "partials/alternates.html.twig", "/var/www/html/IntranetDocumentation/layouts/partials/alternates.html.twig");
    }
}
