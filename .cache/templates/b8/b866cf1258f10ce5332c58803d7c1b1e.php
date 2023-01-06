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

/* partials/jsonld.js.twig */
class __TwigTemplate_999125d661b8816d9632eb8820508ea3 extends Template
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
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/jsonld.js.twig"));

        // line 1
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 1), "jsonld", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 1), "jsonld", [], "any", false, false, false, 1), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 1), "jsonld", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 1), "jsonld", [], "any", false, false, false, 1), false)) : (false)))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 1), "jsonld", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 1), "jsonld", [], "any", false, false, false, 1), false)) : (false))))) {
            // line 2
            echo "    <script type=\"application/ld+json\">";
            ob_start();
            echo "
      [";
            // line 4
            echo "
        {
          \"@context\": \"https://schema.org\",
          \"@type\": \"WebSite\",
          \"name\": \"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8);
            echo "\",
          \"description\": \"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9);
            echo "\",
          \"url\": \"";
            // line 10
            echo $this->extensions['Cecil\Renderer\Extension\Core']->url("/", ["canonical" => true]);
            echo "\",";
            // line 11
            if (twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "image", [], "any", true, true, false, 11)) {
                echo "
          \"image\": [\"";
                // line 12
                echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "image", [], "any", false, false, false, 12), ["canonical" => true]);
                echo "\"]";
            }
            // line 14
            if (twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", true, true, false, 14)) {
                echo ",
          \"sameAs\": [";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 16, $this->source); })()), "social", [], "any", false, false, false, 16));
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
                foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, $context["social"], "url", [], "any", true, true, false, 17)) {
                        echo "
            \"";
                        // line 18
                        echo twig_get_attribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, false, 18);
                        echo "\"";
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 18)) {
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "
          ]";
            }
            // line 22
            echo "
        }";
            // line 25
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "menus", [], "any", false, true, false, 25), "main", [], "any", true, true, false, 25)) {
                // line 26
                echo ",{
          \"@context\":\"http://schema.org\",
          \"@type\":\"ItemList\",
          \"itemListElement\":[";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 30, $this->source); })()), "menus", [], "any", false, false, false, 30), "main", [], "any", false, false, false, 30), function ($__i__) use ($context, $macros) { $context["i"] = $__i__; return (twig_get_attribute($this->env, $this->source, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30) != twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 30, $this->source); })()), "home", [], "any", false, false, false, 30)); })));
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
                    echo "
            {
              \"@type\": \"SiteNavigationElement\",
              \"position\": ";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33);
                    echo ",
              \"name\": \"";
                    // line 34
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 34), twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 34), [], "array", false, true, false, 34), "title", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 34), twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 34), [], "array", false, true, false, 34), "title", [], "any", false, false, false, 34), twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 34))) : (twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 34)));
                    echo "\",
              \"description\": \"";
                    // line 35
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 35), twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 35), [], "array", false, true, false, 35), "description", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "pages", [], "any", false, true, false, 35), twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 35), [], "array", false, true, false, 35), "description", [], "any", false, false, false, 35), "")) : (""));
                    echo "\",
              \"url\":\"";
                    // line 36
                    echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 36), ["canonical" => true]);
                    echo "\"
            }";
                    // line 37
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 37)) {
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "
          ]
        }";
            }
            // line 43
            if (twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 43, $this->source); })()), "section", [], "any", false, false, false, 43)) {
                // line 44
                echo ",{
          \"@context\": \"https://schema.org\",
          \"@type\": \"BreadcrumbList\",
          \"itemListElement\": [{
            \"@type\": \"ListItem\",
            \"position\": 1,
            \"name\": \"";
                // line 50
                echo twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 50, $this->source); })()), "section", [], "any", false, false, false, 50));
                echo "\",
            \"item\": \"";
                // line 51
                echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 51, $this->source); })()), "section", [], "any", false, false, false, 51), ["canonical" => true]);
                echo "\"
          },{
            \"@type\": \"ListItem\",
            \"position\": 2,
            \"name\": \"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55));
                echo "\",
            \"item\": \"";
                // line 56
                echo $this->extensions['Cecil\Renderer\Extension\Core']->url((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 56, $this->source); })()), ["canonical" => true]);
                echo "\"
          }]
        }";
                // line 60
                if ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 60, $this->source); })()), "section", [], "any", false, false, false, 60) == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 60), "articles", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 60), "articles", [], "any", false, false, false, 60), "Enseignants")) : ("Enseignants")))) {
                    // line 61
                    echo ",{
          \"@context\": \"https://schema.org\",
          \"@type\": \"NewsArticle\",
          \"mainEntityOfPage\": {
            \"@type\": \"WebPage\",
            \"@id\": \"";
                    // line 66
                    echo $this->extensions['Cecil\Renderer\Extension\Core']->url((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 66, $this->source); })()), ["canonical" => true]);
                    echo "\"
          },
          \"headline\": \"";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 68, $this->source); })()), "title", [], "any", false, false, false, 68));
                    echo "\",";
                    // line 69
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "image", [], "any", true, true, false, 69)) {
                        echo "
          \"image\": [
            \"";
                        // line 71
                        echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 71, $this->source); })()), "image", [], "any", false, false, false, 71), ["canonical" => true]);
                        echo "\"
          ],";
                    }
                    // line 73
                    echo "
          \"datePublished\": \"";
                    // line 74
                    echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 74, $this->source); })()), "date", [], "any", false, false, false, 74), "Y-m-dTH:i:sP");
                    echo "\",
          \"dateModified\": \"";
                    // line 75
                    echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 75, $this->source); })()), "date", [], "any", false, false, false, 75), "Y-m-dTH:i:sP");
                    echo "\",";
                    // line 76
                    if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "name", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "name", [], "any", false, false, false, 76), "")) : ("")))) {
                        echo "
          \"author\": {
            \"@type\": \"Person\",
            \"name\": \"";
                        // line 79
                        echo twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, false, 79);
                        echo "\"";
                        // line 80
                        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "url", [], "any", true, true, false, 80)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "url", [], "any", false, false, false, 80), "")) : ("")))) {
                            echo ",
            \"url\": \"";
                            // line 81
                            echo twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 81, $this->source); })()), "url", [], "any", false, false, false, 81);
                            echo "\"";
                        }
                        // line 82
                        echo "
          },";
                    }
                    // line 84
                    echo "
          \"publisher\": {
            \"@type\": \"Organization\",
            \"name\": \"";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 87, $this->source); })()), "title", [], "any", false, false, false, 87);
                    echo "\"";
                    // line 88
                    if ( !twig_test_empty((isset($context["favicon_url"]) || array_key_exists("favicon_url", $context) ? $context["favicon_url"] : (function () { throw new RuntimeError('Variable "favicon_url" does not exist.', 88, $this->source); })()))) {
                        echo ",
            \"logo\": {
              \"@type\": \"ImageObject\",
              \"url\": \"";
                        // line 91
                        echo (isset($context["favicon_url"]) || array_key_exists("favicon_url", $context) ? $context["favicon_url"] : (function () { throw new RuntimeError('Variable "favicon_url" does not exist.', 91, $this->source); })());
                        echo "\"
            }";
                    }
                    // line 93
                    echo "
          }
        }";
                }
            }
            // line 97
            echo "
      ]
    ";
            $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 2
            echo $this->extensions['Cecil\Renderer\Extension\Core']->minifyJs($___internal_parse_1_);
            // line 99
            echo "</script>";
        }
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "partials/jsonld.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 99,  306 => 2,  301 => 97,  295 => 93,  290 => 91,  284 => 88,  281 => 87,  276 => 84,  272 => 82,  268 => 81,  264 => 80,  261 => 79,  255 => 76,  252 => 75,  248 => 74,  245 => 73,  240 => 71,  235 => 69,  232 => 68,  227 => 66,  220 => 61,  218 => 60,  213 => 56,  209 => 55,  202 => 51,  198 => 50,  190 => 44,  188 => 43,  183 => 38,  167 => 37,  163 => 36,  159 => 35,  155 => 34,  151 => 33,  130 => 30,  125 => 26,  123 => 25,  120 => 22,  116 => 20,  97 => 18,  93 => 17,  76 => 16,  72 => 14,  68 => 12,  64 => 11,  61 => 10,  57 => 9,  53 => 8,  47 => 4,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if page.metatags.jsonld|default(site.metatags.jsonld|default(false)) %}
    <script type=\"application/ld+json\">{%- apply minify_js ~%}
      [
        {#- WebSite ~#}
        {
          \"@context\": \"https://schema.org\",
          \"@type\": \"WebSite\",
          \"name\": \"{{ site.title }}\",
          \"description\": \"{{ site.description }}\",
          \"url\": \"{{ url('/', {canonical: true}) }}\",
          {%- if site.image is defined ~%}
          \"image\": [\"{{ url(site.image, {canonical: true}) }}\"]
          {%- endif ~%}
          {%- if site.social is defined ~%},
          \"sameAs\": [
            {%- for social in site.social ~%}
              {%- if social.url is defined ~%}
            \"{{ social.url }}\"{% if not loop.last %},{% endif %}
              {%- endif ~%}
            {%- endfor ~%}
          ]
          {%- endif ~%}
        }
        {#- SiteNavigationElement ~#}
        {%- if site.menus.main is defined -%}
        ,{
          \"@context\":\"http://schema.org\",
          \"@type\":\"ItemList\",
          \"itemListElement\":[
            {%- for item in site.menus.main|filter(i => i.id != site.home)|sort_by_weight ~%}
            {
              \"@type\": \"SiteNavigationElement\",
              \"position\": {{ loop.index }},
              \"name\": \"{{ site.pages[item.id].title|default(item.name) }}\",
              \"description\": \"{{ site.pages[item.id].description|default('') }}\",
              \"url\":\"{{ url(item.url, {canonical: true}) }}\"
            }{%- if not loop.last %},{% endif -%}
            {%~ endfor ~%}
          ]
        }
        {%- endif ~%}
        {#- BreadcrumbList ~#}
        {%- if page.section -%}
        ,{
          \"@context\": \"https://schema.org\",
          \"@type\": \"BreadcrumbList\",
          \"itemListElement\": [{
            \"@type\": \"ListItem\",
            \"position\": 1,
            \"name\": \"{{ page.section|capitalize }}\",
            \"item\": \"{{ url(page.section, {canonical: true}) }}\"
          },{
            \"@type\": \"ListItem\",
            \"position\": 2,
            \"name\": \"{{ page.title|e }}\",
            \"item\": \"{{ url(page, {canonical: true}) }}\"
          }]
        }
          {#- NewsArticle ~#}
          {%- if page.section == site.metatags.articles|default('Enseignants') -%}
        ,{
          \"@context\": \"https://schema.org\",
          \"@type\": \"NewsArticle\",
          \"mainEntityOfPage\": {
            \"@type\": \"WebPage\",
            \"@id\": \"{{ url(page, {canonical: true}) }}\"
          },
          \"headline\": \"{{ page.title|e }}\",
          {%- if page.image is defined ~%}
          \"image\": [
            \"{{ url(page.image, {canonical: true}) }}\"
          ],
          {%- endif ~%}
          \"datePublished\": \"{{ page.date|date('Y-m-dTH:i:sP') }}\",
          \"dateModified\": \"{{ page.date|date('Y-m-dTH:i:sP') }}\",
          {%- if author.name|default('') is not empty ~%}
          \"author\": {
            \"@type\": \"Person\",
            \"name\": \"{{ author.name }}\"
            {%- if author.url|default('') is not empty ~%},
            \"url\": \"{{ author.url }}\"
            {%- endif ~%}
          },
          {%- endif ~%}
          \"publisher\": {
            \"@type\": \"Organization\",
            \"name\": \"{{ site.title }}\"
            {%- if favicon_url is not empty ~%},
            \"logo\": {
              \"@type\": \"ImageObject\",
              \"url\": \"{{ favicon_url }}\"
            }
            {%- endif ~%}
          }
        }
          {%- endif ~%}
        {%- endif ~%}
      ]
    {% endapply %}</script>
{%- endif %}", "partials/jsonld.js.twig", "/var/www/html/IntranetDocumentation/layouts/partials/jsonld.js.twig");
    }
}
