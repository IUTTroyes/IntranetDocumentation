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

/* _default/list.html.twig */
class __TwigTemplate_f15022e4a1ebaeaf94b157f07b3ceda7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "_default/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_default/list.html.twig"));

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
        $this->parent = $this->loadTemplate("_default/page.html.twig", "_default/list.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "
          <section>
              <nav aria-label=\"breadcrumb\">
                  <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\"><a href=\"/\">Accueil</a></li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 19
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19);
        echo "</li>
                  </ol>
              </nav>
              <h2>Espace ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22);
        echo "</h2>
              <div class=\"container\">";
        // line 24
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 24, $this->source); })()), "content", [], "any", false, false, false, 24);
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 25, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo "
                      <article>
                          <h3>";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["p"], "title", [], "any", false, false, false, 27);
            echo "</h3>
                          <ul>
                              ";
            // line 29
            $this->loadTemplate("partials/subtitles-list.html.twig", "_default/list.html.twig", 29)->display(twig_to_array(["page" => $context["p"], "vocabulary" => "subtitles"]));
            // line 30
            echo "                          </ul>
                      </article>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
              </div>

              ";
        // line 36
        echo "              <footer>";
        // line 37
        ob_start();
        // line 38
        echo "<a href=\"";
        echo twig_get_attribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 38, $this->source); })()), "url", [], "any", false, false, false, 38);
        echo "\">Cecil</a> &amp; <a href=\"https://newcss.net\">new.css</a>";
        $context["powered_by"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 39
        echo "
                  <small>";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Powered by %powered_by%", ["%powered_by%" => (isset($context["powered_by"]) || array_key_exists("powered_by", $context) ? $context["powered_by"] : (function () { throw new RuntimeError('Variable "powered_by" does not exist.', 40, $this->source); })())], "messages");
        echo "</small>
              </footer>
          </section>";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "_default/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 40,  125 => 39,  120 => 38,  118 => 37,  116 => 36,  111 => 32,  104 => 30,  102 => 29,  97 => 27,  90 => 25,  88 => 24,  84 => 22,  78 => 19,  65 => 14,  57 => 12,  54 => 9,  52 => 8,  49 => 5,  47 => 4,  45 => 2,  35 => 12,);
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

{% extends '_default/page.html.twig' %}

      {%- block content ~%}
          <section>
              <nav aria-label=\"breadcrumb\">
                  <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\"><a href=\"/\">Accueil</a></li>
                      <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ page.title }}</li>
                  </ol>
              </nav>
              <h2>Espace {{ page.title }}</h2>
              <div class=\"container\">
                  {{- page.content ~}}
                  {%- for p in pages|sort_by_weight ~%}
                      <article>
                          <h3>{{ p.title }}</h3>
                          <ul>
                              {% include 'partials/subtitles-list.html.twig' with {'page': p, 'vocabulary': 'subtitles'} only %}
                          </ul>
                      </article>
                  {%- endfor ~%}
              </div>

              {#              {%- include 'partials/paginator.html.twig' with {'page': page} only ~%} #}
              <footer>
                  {%- set powered_by -%}
                      <a href=\"{{ cecil.url }}\">Cecil</a> &amp; <a href=\"https://newcss.net\">new.css</a>
                  {%- endset ~%}
                  <small>{% trans %}Powered by %powered_by%{% endtrans %}</small>
              </footer>
          </section>
      {%- endblock content ~%}
", "_default/list.html.twig", "/var/www/html/IntranetDocumentation/layouts/_default/list.html.twig");
    }
}
