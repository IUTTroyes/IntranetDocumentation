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

/* _default/page.json.twig */
class __TwigTemplate_de2bd6d33fdd2bf00198c4555bcc085c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'links' => [$this, 'block_links'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_default/page.json.twig"));

        // line 1
        echo "{
";
        // line 3
        echo "  \"data\": [
";
        // line 4
        if (array_key_exists("items", $context)) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 5, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                $this->loadTemplate("partials/data.json.twig", "_default/page.json.twig", 6)->display(twig_to_array(["item" => $context["item"]]));
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 6)) {
                    echo ",";
                }
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 9
            $this->loadTemplate("partials/data.json.twig", "_default/page.json.twig", 9)->display(twig_to_array(["item" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })())]));
        }
        // line 11
        echo "  ]";
        // line 13
        $this->displayBlock('meta', $context, $blocks);
        // line 26
        $this->displayBlock('links', $context, $blocks);
        // line 53
        echo "
}";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 13
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta"));

        // line 14
        if (( !array_key_exists("meta", $context) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 14), "pages", [], "any", true, true, false, 14))) {
            // line 15
            $context["meta"] = ["totalPages" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 15, $this->source); })()), "paginator", [], "any", false, false, false, 15), "totalpages", [], "any", false, false, false, 15)];
        }
        // line 17
        if (array_key_exists("meta", $context)) {
            echo ",
  \"meta\": {
";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["meta"]) || array_key_exists("meta", $context) ? $context["meta"] : (function () { throw new RuntimeError('Variable "meta" does not exist.', 19, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 20
                echo "    \"";
                echo $context["key"];
                echo "\": ";
                echo json_encode($context["value"]);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 20)) {
                    echo ",";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "
  }";
        }
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 26
    public function block_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "links"));

        // line 27
        if (( !array_key_exists("links", $context) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 27), "pages", [], "any", true, true, false, 27))) {
            // line 28
            $context["links"] = ["self" => $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 29
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 29, $this->source); })()), "paginator", [], "any", false, false, false, 29), "links", [], "any", false, false, false, 29), "self", [], "any", false, false, false, 29), ["canonical" => true, "format" => "json"]), "first" => $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 30
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 30, $this->source); })()), "paginator", [], "any", false, false, false, 30), "links", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30), ["canonical" => true, "format" => "json"]), "last" => $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 31
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 31, $this->source); })()), "paginator", [], "any", false, false, false, 31), "links", [], "any", false, false, false, 31), "last", [], "any", false, false, false, 31), ["canonical" => true, "format" => "json"])];
            // line 33
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 33), "links", [], "any", false, true, false, 33), "prev", [], "any", true, true, false, 33)) {
                // line 34
                $context["links"] = twig_array_merge((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 34, $this->source); })()), ["prev" => $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 34, $this->source); })()), "paginator", [], "any", false, false, false, 34), "links", [], "any", false, false, false, 34), "prev", [], "any", false, false, false, 34), ["canonical" => true, "format" => "json"])]);
            }
            // line 36
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 36), "links", [], "any", false, true, false, 36), "next", [], "any", true, true, false, 36)) {
                // line 37
                $context["links"] = twig_array_merge((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 37, $this->source); })()), ["next" => $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 37, $this->source); })()), "paginator", [], "any", false, false, false, 37), "links", [], "any", false, false, false, 37), "next", [], "any", false, false, false, 37), ["canonical" => true, "format" => "json"])]);
            }
        }
        // line 40
        if (array_key_exists("links", $context)) {
            echo ",
  \"links\": {
    \"self\": \"";
            // line 42
            echo twig_get_attribute($this->env, $this->source, (isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 42, $this->source); })()), "self", [], "any", false, false, false, 42);
            echo "\",
    \"first\": \"";
            // line 43
            echo twig_get_attribute($this->env, $this->source, (isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 43, $this->source); })()), "first", [], "any", false, false, false, 43);
            echo "\",
";
            // line 44
            if (twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "prev", [], "any", true, true, false, 44)) {
                // line 45
                echo "    \"prev\": \"";
                echo twig_get_attribute($this->env, $this->source, (isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 45, $this->source); })()), "prev", [], "any", false, false, false, 45);
                echo "\",
";
            }
            // line 47
            if (twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "next", [], "any", true, true, false, 47)) {
                // line 48
                echo "    \"next\": \"";
                echo twig_get_attribute($this->env, $this->source, (isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 48, $this->source); })()), "next", [], "any", false, false, false, 48);
                echo "\",
";
            }
            // line 50
            echo "    \"last\": \"";
            echo twig_get_attribute($this->env, $this->source, (isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 50, $this->source); })()), "last", [], "any", false, false, false, 50);
            echo "\"
  }";
        }
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "_default/page.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 50,  215 => 48,  213 => 47,  207 => 45,  205 => 44,  201 => 43,  197 => 42,  192 => 40,  188 => 37,  186 => 36,  183 => 34,  181 => 33,  179 => 31,  178 => 30,  177 => 29,  176 => 28,  174 => 27,  167 => 26,  158 => 21,  138 => 20,  121 => 19,  116 => 17,  113 => 15,  111 => 14,  104 => 13,  96 => 53,  94 => 26,  92 => 13,  90 => 11,  87 => 9,  67 => 6,  50 => 5,  48 => 4,  45 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
{# data #}
  \"data\": [
{% if items is defined %}
{% for item in items %}
{% include 'partials/data.json.twig' with {'item': item} only %}{% if not loop.last %},{% endif ~%}
{% endfor %}
{% else %}
{% include 'partials/data.json.twig' with {'item': page} only -%}
{% endif %}
  ]
{#- meta #}
{% block meta %}
{% if meta is not defined and page.paginator.pages is defined %}
{% set meta = {'totalPages': page.paginator.totalpages} %}
{% endif %}
{% if meta is defined %},
  \"meta\": {
{% for key, value in meta %}
    \"{{ key }}\": {{ value|json_encode() }}{% if not loop.last %},{% endif %}
{% endfor ~%}
  }
{%- endif %}
{% endblock meta %}
{# links #}
{% block links %}
{% if links is not defined and page.paginator.pages is defined %}
{% set links = {
  'self': url(page.paginator.links.self, {canonical: true, format: 'json'}),
  'first': url(page.paginator.links.first, {canonical: true, format: 'json'}),
  'last': url(page.paginator.links.last, {canonical: true, format: 'json'})
} %}
{% if page.paginator.links.prev is defined %}
{% set links = links|merge({'prev': url(page.paginator.links.prev, {canonical: true, format: 'json'})}) %}
{% endif %}
{% if page.paginator.links.next is defined %}
{% set links = links|merge({'next': url(page.paginator.links.next, {canonical: true, format: 'json'})}) %}
{% endif %}
{% endif %}
{% if links is defined %},
  \"links\": {
    \"self\": \"{{ links.self }}\",
    \"first\": \"{{ links.first }}\",
{% if links.prev is defined %}
    \"prev\": \"{{ links.prev }}\",
{% endif %}
{% if links.next is defined %}
    \"next\": \"{{ links.next }}\",
{% endif %}
    \"last\": \"{{ links.last }}\"
  }
{%- endif %}
{% endblock links ~%}
}", "_default/page.json.twig", "/var/www/html/IntranetDocumentation/layouts/_default/page.json.twig");
    }
}
