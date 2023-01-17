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

/* partials/data.json.twig */
class __TwigTemplate_01892a5b4b033c4b377b0295c7bf7ab0 extends Template
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
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/data.json.twig"));

        // line 2
        $context["type"] = json_encode(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "section", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "section", [], "any", false, false, false, 2), "page")) : ("page")));
        // line 3
        $context["id"] = json_encode(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), twig_constant("JSON_UNESCAPED_SLASHES"));
        // line 4
        $context["attributes"] = ["title" => json_encode(twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), twig_constant("JSON_UNESCAPED_UNICODE")), "body" => json_encode(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "body", [], "any", false, false, false, 6), "html"), (twig_constant("JSON_UNESCAPED_UNICODE") | twig_constant("JSON_UNESCAPED_SLASHES"))), "date" => json_encode(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "date", [], "any", false, false, false, 7), "c")), "updated" => json_encode(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "updated", [], "any", false, false, false, 8), "c"))];
        // line 11
        $context["attributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "fmvariables", [], "any", false, false, false, 11), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 11, $this->source); })()));
        // line 13
        $context["attributes"] = twig_array_map($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 13, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return json_encode((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 13, $this->source); })()), (twig_constant("JSON_UNESCAPED_UNICODE") | twig_constant("JSON_UNESCAPED_SLASHES"))); });
        // line 14
        echo "    {
      \"type\": ";
        // line 15
        echo (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 15, $this->source); })());
        echo ",
      \"id\": ";
        // line 16
        echo (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })());
        // line 17
        if (array_key_exists("attributes", $context)) {
            echo ",
      \"attributes\": {";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 19, $this->source); })()));
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
                echo "
        \"";
                // line 20
                echo $context["key"];
                echo "\": ";
                echo $context["value"];
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
      }
";
        }
        // line 24
        echo "    }";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "partials/data.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 24,  105 => 21,  86 => 20,  67 => 19,  63 => 17,  61 => 16,  57 => 15,  54 => 14,  52 => 13,  50 => 11,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 4,  42 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#- data -#}
{% set type = item.section|default('page')|json_encode() %}
{% set id = item.id|json_encode(constant('JSON_UNESCAPED_SLASHES')) %}
{% set attributes = {
  'title': item.title|json_encode(constant('JSON_UNESCAPED_UNICODE')),
  'body': item.body|e('html')|json_encode(constant('JSON_UNESCAPED_UNICODE') b-or constant('JSON_UNESCAPED_SLASHES')),
  'date': item.date|date('c')|json_encode(),
  'updated': item.updated|date('c')|json_encode(),
} %}
{#- add front matter variables to attributes -#}
{% set attributes = item.fmvariables|merge(attributes) %}
{#- encode attributes values to JSON -#}
{% set attributes = attributes|map((v) => v|json_encode(constant('JSON_UNESCAPED_UNICODE') b-or constant('JSON_UNESCAPED_SLASHES'))) %}
    {
      \"type\": {{ type }},
      \"id\": {{ id }}
{%- if attributes is defined %},
      \"attributes\": {
{%- for key, value in attributes ~%}
        \"{{ key }}\": {{ value }}{% if not loop.last %},{% endif %}
{% endfor ~%}
      }
{% endif %}
    }
{#- /data -#}", "partials/data.json.twig", "/var/www/html/IntranetDocumentation/layouts/partials/data.json.twig");
    }
}
