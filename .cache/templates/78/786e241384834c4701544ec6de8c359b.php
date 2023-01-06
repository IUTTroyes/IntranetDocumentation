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

/* sitemap.xml.twig */
class __TwigTemplate_5a8e9fbcdf60032d35a80bb6fa487c63 extends Template
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
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\" ?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
  xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByDate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 4, $this->source); })()), "pages", [], "any", false, false, false, 4), "showable", [], "any", false, false, false, 4)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            echo "
  <url>
    <loc>";
            // line 6
            echo $this->extensions['Cecil\Renderer\Extension\Core']->url($context["page"], ["canonical" => true]);
            echo "</loc>
    <lastmod>";
            // line 7
            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "date", [], "any", false, false, false, 7), "Y-m-d");
            echo "</lastmod>
    <changefreq>";
            // line 8
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, true, false, 8), "changefreq", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, true, false, 8), "changefreq", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "defaultpages", [], "any", false, false, false, 8), "sitemap", [], "any", false, false, false, 8), "changefreq", [], "any", false, false, false, 8))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "defaultpages", [], "any", false, false, false, 8), "sitemap", [], "any", false, false, false, 8), "changefreq", [], "any", false, false, false, 8)));
            echo "</changefreq>
    <priority>";
            // line 9
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, true, false, 9), "priority", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["page"], "sitemap", [], "any", false, true, false, 9), "priority", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "defaultpages", [], "any", false, false, false, 9), "sitemap", [], "any", false, false, false, 9), "priority", [], "any", false, false, false, 9))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "defaultpages", [], "any", false, false, false, 9), "sitemap", [], "any", false, false, false, 9), "priority", [], "any", false, false, false, 9)));
            echo "</priority>";
            // line 10
            if (((twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["page"], "translations", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["page"], "translations", [], "any", false, false, false, 10), [])) : ([]))) >= 1) && twig_get_attribute($this->env, $this->source, $context["page"], "language", [], "any", true, true, false, 10))) {
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["page"], "translations", [], "any", false, false, false, 11));
                foreach ($context['_seq'] as $context["_key"] => $context["alternate"]) {
                    echo "
    <xhtml:link rel=\"alternate\" hreflang=\"";
                    // line 12
                    echo twig_get_attribute($this->env, $this->source, $context["alternate"], "language", [], "any", false, false, false, 12);
                    echo "\" href=\"";
                    echo $this->extensions['Cecil\Renderer\Extension\Core']->url($context["alternate"], ["canonical" => true]);
                    echo "\" />";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alternate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "
    <xhtml:link rel=\"alternate\" hreflang=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["page"], "language", [], "any", false, false, false, 14);
                echo "\" href=\"";
                echo $this->extensions['Cecil\Renderer\Extension\Core']->url($context["page"], ["canonical" => true]);
                echo "\" />";
            }
            // line 15
            echo "
  </url>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
</urlset>";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "sitemap.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  92 => 15,  86 => 14,  83 => 13,  74 => 12,  68 => 11,  66 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  44 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\" standalone=\"yes\" ?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
  xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">
  {%- for page in site.pages.showable|sort_by_date ~%}
  <url>
    <loc>{{ url(page, {canonical: true}) }}</loc>
    <lastmod>{{ page.date|date('Y-m-d') }}</lastmod>
    <changefreq>{{ page.sitemap.changefreq|default(site.defaultpages.sitemap.changefreq) }}</changefreq>
    <priority>{{ page.sitemap.priority|default(site.defaultpages.sitemap.priority) }}</priority>
    {%- if page.translations|default({})|length >= 1 and page.language is defined -%}
    {%- for alternate in page.translations ~%}
    <xhtml:link rel=\"alternate\" hreflang=\"{{ alternate.language }}\" href=\"{{ url(alternate, {canonical: true}) }}\" />
    {%- endfor ~%}
    <xhtml:link rel=\"alternate\" hreflang=\"{{ page.language }}\" href=\"{{ url(page, {canonical: true}) }}\" />
    {%- endif ~%}
  </url>
  {%- endfor ~%}
</urlset>", "sitemap.xml.twig", "/var/www/html/IntranetDocumentation/layouts/sitemap.xml.twig");
    }
}
