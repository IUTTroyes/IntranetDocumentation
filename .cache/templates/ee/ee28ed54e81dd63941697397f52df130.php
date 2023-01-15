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

/* robots.txt.twig */
class __TwigTemplate_25e8a1dec891464db8dd4d0ab4f09262 extends Template
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
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "robots.txt.twig"));

        // line 1
        echo "User-agent: *
Allow: /
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 5, $this->source); })()), "allpages", [], "any", false, false, false, 5), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "redirect", [], "any", true, true, false, 5) && (twig_get_attribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 5, $this->source); })()), "type", [], "any", false, false, false, 5) == "page")); }));
        foreach ($context['_seq'] as $context["_key"] => $context["redirect"]) {
            // line 6
            echo "Disallow: ";
            echo $this->extensions['Cecil\Renderer\Extension\Core']->url($context["redirect"], ["canonical" => false]);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redirect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 9), 404, [], "any", true, true, false, 9)) {
            // line 10
            echo "Disallow: ";
            echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 10, $this->source); })()), "pages", [], "any", false, false, false, 10), 404, [], "any", false, false, false, 10), ["canonical" => false]);
            // line 11
            if ((twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 11), 404, [], "any", false, true, false, 11), "translations", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 11), 404, [], "any", false, true, false, 11), "translations", [], "any", false, false, false, 11), [])) : ([]))) > 0)) {
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "pages", [], "any", false, false, false, 12), 404, [], "any", false, false, false, 12), "translations", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                    echo "
Disallow: ";
                    // line 13
                    echo $this->extensions['Cecil\Renderer\Extension\Core']->url($context["translation"], ["canonical" => false]);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 15
            echo "
";
        }
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 18), "sitemap", [], "any", true, true, false, 18)) {
            // line 19
            echo "Sitemap: ";
            echo $this->extensions['Cecil\Renderer\Extension\Core']->url("sitemap", ["canonical" => true]);
        }
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "robots.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  81 => 18,  77 => 15,  70 => 13,  64 => 12,  62 => 11,  59 => 10,  57 => 9,  48 => 6,  44 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("User-agent: *
Allow: /
{# Disallow #}
{# redirects #}
{% for redirect in site.allpages|filter(p => p.redirect is defined and p.type == 'page') %}
Disallow: {{ url(redirect, {canonical: false}) }}
{% endfor %}
{# 404 #}
{% if site.pages.404 is defined %}
Disallow: {{ url(site.pages.404, {canonical: false}) }}
  {%- if site.pages.404.translations|default({})|length > 0 ~%}
    {%- for translation in site.pages.404.translations ~%}
Disallow: {{ url(translation, {canonical: false}) }}
    {%- endfor ~%}
  {%- endif ~%}
{% endif %}
{# Sitemap #}
{% if site.pages.sitemap is defined %}
Sitemap: {{ url('sitemap', {canonical: true}) }}
{%- endif -%}", "robots.txt.twig", "/var/www/html/IntranetDocumentation/layouts/robots.txt.twig");
    }
}
