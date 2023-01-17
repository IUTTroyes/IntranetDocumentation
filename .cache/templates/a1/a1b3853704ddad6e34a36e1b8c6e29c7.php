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
        list($context["section"], $context["balise"]) =         ["pages", "h3"];
        // line 14
        echo "[";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 15, $this->source); })()), "pages", [], "any", false, false, false, 15)));
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
            // line 16
            $context["count"] = 0;
            // line 17
            $context["sections"] = $this->extensions['Cecil\Renderer\Extension\Core']->pregSplit(twig_get_attribute($this->env, $this->source, $context["p"], "content", [], "any", false, false, false, 17), (("/<" . (isset($context["balise"]) || array_key_exists("balise", $context) ? $context["balise"] : (function () { throw new RuntimeError('Variable "balise" does not exist.', 17, $this->source); })())) . "[^>]*>/"));
            // line 18
            if ((twig_length_filter($this->env, (isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 18, $this->source); })())) > 0)) {
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 19, $this->source); })()));
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
                    // line 20
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20) > 0)) {
                        // line 21
                        $context["section_content"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 21, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 21), [], "array", false, false, false, 21), (("</" . (isset($context["balise"]) || array_key_exists("balise", $context) ? $context["balise"] : (function () { throw new RuntimeError('Variable "balise" does not exist.', 21, $this->source); })())) . ">"));
                        // line 22
                        $context["title"] = twig_trim_filter(twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["section_content"]) || array_key_exists("section_content", $context) ? $context["section_content"] : (function () { throw new RuntimeError('Variable "section_content" does not exist.', 22, $this->source); })()), 0, [], "array", false, false, false, 22)));
                        // line 23
                        $context["anchor"] = twig_replace_filter(twig_lower_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 23, $this->source); })())), [" " => "-", ":" => "", "_" => "-"]);
                        // line 24
                        $context["content"] = twig_trim_filter(twig_striptags(twig_get_attribute($this->env, $this->source, (isset($context["section_content"]) || array_key_exists("section_content", $context) ? $context["section_content"] : (function () { throw new RuntimeError('Variable "section_content" does not exist.', 24, $this->source); })()), 1, [], "array", false, false, false, 24)));
                        // line 25
                        $context["description"] = "";
                        // line 26
                        if ((is_string($__internal_compile_0 = twig_trim_filter(twig_get_attribute($this->env, $this->source, (isset($context["section_content"]) || array_key_exists("section_content", $context) ? $context["section_content"] : (function () { throw new RuntimeError('Variable "section_content" does not exist.', 26, $this->source); })()), 1, [], "array", false, false, false, 26))) && is_string($__internal_compile_1 = "<p>") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) {
                            // line 27
                            $context["description"] = twig_trim_filter(twig_striptags(twig_first($this->env, twig_split_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, (isset($context["section_content"]) || array_key_exists("section_content", $context) ? $context["section_content"] : (function () { throw new RuntimeError('Variable "section_content" does not exist.', 27, $this->source); })()), 1, [], "array", false, false, false, 27)), "</p>"))));
                        }
                        // line 29
                        $context["experimental"] = 0;
                        // line 30
                        if (twig_in_filter("Experimental", (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 30, $this->source); })()))) {
                            // line 31
                            $context["experimental"] = 1;
                        }
                        // line 33
                        echo twig_call_macro($macros["_self"], "macro_dataset", [((twig_get_attribute($this->env, $this->source,                         // line 34
$context["p"], "id", [], "any", false, false, false, 34) . "#") . (isset($context["anchor"]) || array_key_exists("anchor", $context) ? $context["anchor"] : (function () { throw new RuntimeError('Variable "anchor" does not exist.', 34, $this->source); })())), twig_get_attribute($this->env, $this->source,                         // line 35
$context["p"], "title", [], "any", false, false, false, 35),                         // line 36
(isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 36, $this->source); })())], 33, $context, $this->getSourceContext());
                        // line 38
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 38)) {
                            echo ",";
                        }
                        // line 39
                        $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 39, $this->source); })()) + 1);
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
                // line 42
                if (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 42) && ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 42, $this->source); })()) > 0))) {
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
        // line 44
        echo "
]
";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 2
    public function macro_dataset($__objectID__ = null, $__page__ = null, $__title__ = null, $__description__ = "", $__content__ = null, $__date__ = null, $__href__ = null, $__experimental__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "objectID" => $__objectID__,
            "page" => $__page__,
            "title" => $__title__,
            "description" => $__description__,
            "content" => $__content__,
            "date" => $__date__,
            "href" => $__href__,
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
            echo "\"
    ";
            // line 8
            echo "    ";
            // line 9
            echo "    ";
            // line 10
            echo "    ";
            // line 11
            echo "    ";
            // line 12
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
        return array (  205 => 12,  203 => 11,  201 => 10,  199 => 9,  197 => 8,  193 => 6,  189 => 5,  185 => 4,  159 => 2,  150 => 44,  133 => 42,  118 => 39,  114 => 38,  112 => 36,  111 => 35,  110 => 34,  109 => 33,  106 => 31,  104 => 30,  102 => 29,  99 => 27,  97 => 26,  95 => 25,  93 => 24,  91 => 23,  89 => 22,  87 => 21,  85 => 20,  68 => 19,  66 => 18,  64 => 17,  62 => 16,  45 => 15,  43 => 14,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- set section, balise = 'pages', 'h3' -%}
{%- macro dataset(objectID, page, title, description = '', content, date, href, experimental) ~%}
    {
    \"objectID\": \"{{ objectID }}\",
    \"page\": \"{{ page }}\",
    \"title\": \"{{ title }}\"
    {#    \"description\": {{ description }},#}
    {#    \"content\": {{ content }},#}
    {#    \"date\": \"{{ date }}\",#}
    {#    \"href\": \"{{ href }}\",#}
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
                {%- set content = section_content[1]|striptags|trim ~%}
                {%- set description = '' -%}
                {%- if section_content[1]|trim starts with '<p>' -%}
                    {%- set description = section_content[1]|trim|split('</p>')|first|striptags|trim -%}
                {%- endif -%}
                {%- set experimental = 0 -%}
                {% if 'Experimental' in content %}
                    {%- set experimental = 1 -%}
                {% endif %}
                {{- _self.dataset(
                    p.id ~ '#' ~ anchor,
                    p.title,
                    title
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
