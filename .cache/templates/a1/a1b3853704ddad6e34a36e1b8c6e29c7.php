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

/* _default/list.algolia.twig */
class __TwigTemplate_84730ad8337df748a32958d1fb750d6b extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_default/list.algolia.twig"));

        // line 1
        list($context["section"], $context["balise"]) =         ["pages", "h2"];
        // line 15
        echo "[";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 16, $this->source); })()), "pages", [], "any", false, false, false, 16)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 17
            $context["count"] = 0;
            // line 18
            $context["sections"] = $this->extensions['Cecil\Renderer\Extension\Core']->pregSplit(twig_get_attribute($this->env, $this->source, $context["p"], "content", [], "any", false, false, false, 18), (("/<" . (isset($context["balise"]) || array_key_exists("balise", $context) ? $context["balise"] : (function () { throw new RuntimeError('Variable "balise" does not exist.', 18, $this->source); })())) . "[^>]*>/"));
            // line 19
            if ((twig_length_filter($this->env, (isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 19, $this->source); })())) > 0)) {
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 20, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                    // line 21
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 21) > 0)) {
                        // line 22
                        $context["section_content"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 22, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 22), [], "array", false, false, false, 22), (("</" . (isset($context["balise"]) || array_key_exists("balise", $context) ? $context["balise"] : (function () { throw new RuntimeError('Variable "balise" does not exist.', 22, $this->source); })())) . ">"));
                        // line 23
                        $context["title"] = twig_trim_filter(twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["section_content"]) || array_key_exists("section_content", $context) ? $context["section_content"] : (function () { throw new RuntimeError('Variable "section_content" does not exist.', 23, $this->source); })()), 0, [], "array", false, false, false, 23)));
                        // line 24
                        $context["anchor"] = twig_replace_filter(twig_lower_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 24, $this->source); })())), [" " => "-", ":" => "", "_" => "-"]);
                        // line 26
                        echo "                ";
                        // line 27
                        echo "                ";
                        // line 28
                        echo "                ";
                        // line 29
                        echo "                ";
                        // line 30
                        echo "                ";
                        // line 31
                        echo "                ";
                        // line 32
                        echo "                ";
                        // line 33
                        echo "                ";
                        // line 34
                        echo twig_call_macro($macros["_self"], "macro_dataset", [((twig_get_attribute($this->env, $this->source,                         // line 35
$context["p"], "id", [], "any", false, false, false, 35) . "#") . (isset($context["anchor"]) || array_key_exists("anchor", $context) ? $context["anchor"] : (function () { throw new RuntimeError('Variable "anchor" does not exist.', 35, $this->source); })())), twig_get_attribute($this->env, $this->source,                         // line 36
$context["p"], "title", [], "any", false, false, false, 36),                         // line 37
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 37, $this->source); })()), twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source,                         // line 38
$context["p"], "section", [], "any", false, false, false, 38)), (($this->extensions['Cecil\Renderer\Extension\Core']->url(                        // line 39
$context["p"]) . "#") . (isset($context["anchor"]) || array_key_exists("anchor", $context) ? $context["anchor"] : (function () { throw new RuntimeError('Variable "anchor" does not exist.', 39, $this->source); })()))], 34, $context, $this->getSourceContext());
                        // line 41
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 41)) {
                            echo ",";
                        }
                        // line 42
                        $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 42, $this->source); })()) + 1);
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 45) && ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 45, $this->source); })()) > 0))) {
                    echo ",";
                }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
]
";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 2
    public function macro_dataset($__objectID__ = null, $__page__ = null, $__title__ = null, $__dossier__ = null, $__href__ = null, $__description__ = "", $__content__ = null, $__date__ = null, $__experimental__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "objectID" => $__objectID__,
            "page" => $__page__,
            "title" => $__title__,
            "dossier" => $__dossier__,
            "href" => $__href__,
            "description" => $__description__,
            "content" => $__content__,
            "date" => $__date__,
            "experimental" => $__experimental__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
            $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dataset"));

            echo "
    {
    \"objectID\": \"";
            // line 4
            echo (isset($context["objectID"]) || array_key_exists("objectID", $context) ? $context["objectID"] : (function () { throw new RuntimeError('Variable "objectID" does not exist.', 4, $this->source); })());
            echo "\",
    \"page\": \"";
            // line 5
            echo (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })());
            echo "\",
    \"title\": \"";
            // line 6
            echo (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })());
            echo "\",
    \"dossier\": \"";
            // line 7
            echo (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 7, $this->source); })());
            echo "\",
    \"href\": \"";
            // line 8
            echo (isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 8, $this->source); })());
            echo "\"
    ";
            // line 10
            echo "    ";
            // line 11
            echo "    ";
            // line 12
            echo "    ";
            // line 13
            echo "    }";
            
            $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_default/list.algolia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 13,  212 => 12,  210 => 11,  208 => 10,  204 => 8,  200 => 7,  196 => 6,  192 => 5,  188 => 4,  161 => 2,  152 => 47,  135 => 45,  120 => 42,  116 => 41,  114 => 39,  113 => 38,  112 => 37,  111 => 36,  110 => 35,  109 => 34,  107 => 33,  105 => 32,  103 => 31,  101 => 30,  99 => 29,  97 => 28,  95 => 27,  93 => 26,  91 => 24,  89 => 23,  87 => 22,  85 => 21,  68 => 20,  66 => 19,  64 => 18,  62 => 17,  45 => 16,  43 => 15,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set section, balise = 'pages', 'h2' -%}
{%- macro dataset(objectID, page, title, dossier, href,description = '', content, date, experimental) ~%}
    {
    \"objectID\": \"{{ objectID }}\",
    \"page\": \"{{ page }}\",
    \"title\": \"{{ title }}\",
    \"dossier\": \"{{ dossier }}\",
    \"href\": \"{{ href }}\"
    {#    \"description\": {{ description }},#}
    {#    \"content\": {{ content }},#}
    {#    \"date\": \"{{ date }}\",#}
    {#    \"experimental\": \"{{ experimental }}\"#}
    }
{%- endmacro -%}
[
{%- for p in site.pages|sort_by_weight -%}
    {%- set count = 0 -%}
    {%- set sections = p.content|preg_split('/<' ~ balise ~ '[^>]*>/') -%}
    {%- if sections|length > 0 -%}
        {%- for section in sections -%}
            {%- if loop.index0 > 0 -%}
                {%- set section_content = sections[loop.index0]|split('</' ~ balise ~ '>') -%}
                {%- set title = section_content[0]|striptags|trim -%}
                {%- set anchor = title|lower|replace({' ': '-', ':': '', '_': '-'}) -%}
                {#                {%- set content = section_content[1]|striptags|trim ~%}#}
                {#                {%- set description = '' -%}#}
                {#                {%- if section_content[1]|trim starts with '<p>' -%}#}
                {#                    {%- set description = section_content[1]|trim|split('</p>')|first|striptags|trim -%}#}
                {#                {%- endif -%}#}
                {#                {%- set experimental = 0 -%}#}
                {#                {% if 'Experimental' in content %}#}
                {#                    {%- set experimental = 1 -%}#}
                {#                {% endif %}#}
                {{- _self.dataset(
                    p.id ~ '#' ~ anchor,
                    p.title,
                    title,
                    p.section|capitalize,
                    url(p) ~ '#' ~ anchor
                ) -}}
                {%- if not loop.last %},{% endif ~%}
                {%- set count = count + 1 -%}
            {%- endif -%}
        {%- endfor -%}
                {%- if not loop.last and count > 0 %},{% endif ~%}
    {%- endif -%}
{%- endfor ~%}
]
", "_default/list.algolia.twig", "/var/www/html/IntranetDocumentation/layouts/_default/list.algolia.twig");
    }
}
