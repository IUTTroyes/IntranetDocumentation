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

/* _default/page.html.twig */
class __TwigTemplate_359b5eb75a708cef744da799385c094c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
            'content_header' => [$this, 'block_content_header'],
            'content_footer' => [$this, 'block_content_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_default/page.html.twig"));

        // line 1
        echo "        ";
        // line 2
        $context["pages"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 2, $this->source); })()), "pages", [], "any", false, false, false, 2), "showable", [], "any", false, false, false, 2);
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pages", [], "any", true, true, false, 4)) {
            // line 5
            $context["pages"] = twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 5, $this->source); })()), "pages", [], "any", false, false, false, 5);
        }
        // line 11
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 13
        echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 13, $this->source); })()), "language", [], "any", false, false, false, 13);
        echo "\">
<head>";
        // line 15
        $this->displayBlock('head', $context, $blocks);
        // line 67
        echo "
</head>
<body>
<header>
    <div class=\"title\">
        <img src=\"";
        // line 72
        echo $this->extensions['Cecil\Renderer\Extension\Core']->asset("logo.svg");
        echo "\" alt=\"\">
        <h1>";
        // line 73
        echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 73, $this->source); })()), "title", [], "any", false, false, false, 73);
        echo "</h1>
    </div>

    ";
        // line 80
        echo "
    ";
        // line 81
        echo twig_include($this->env, $context, "partials/algolia.html.twig");
        // line 83
        $this->loadTemplate("partials/navigation.html.twig", "_default/page.html.twig", 83)->display(twig_to_array(["menu" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 83, $this->source); })()), "menus", [], "any", false, false, false, 83), "main", [], "any", false, false, false, 83)]));
        echo "
</header>
<div class=\"body_content\">
    <aside>
        <h4>Enseignants</h4>
        <ul>";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight($this->extensions['Cecil\Renderer\Extension\Core']->filterBy(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 88, $this->source); })()), "pages", [], "any", false, false, false, 88), "section", "enseignants")));
        foreach ($context['_seq'] as $context["_key"] => $context["themes"]) {
            echo "
                <li><a href=\"/";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "path", [], "any", false, false, false, 89);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "title", [], "any", false, false, false, 89);
            echo "</a></li>
                ";
            // line 90
            $this->loadTemplate("partials/subtitles-list.html.twig", "_default/page.html.twig", 90)->display(twig_to_array(["page" => $context["themes"], "vocabulary" => "subtitles"]));
            // line 91
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['themes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </ul>
        <hr>
        <h4>Etudiants</h4>
        <ul>";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight($this->extensions['Cecil\Renderer\Extension\Core']->filterBy(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 95, $this->source); })()), "pages", [], "any", false, false, false, 95), "section", "etudiants")));
        foreach ($context['_seq'] as $context["_key"] => $context["themes"]) {
            echo "
                <li><a href=\"/";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "path", [], "any", false, false, false, 96);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "title", [], "any", false, false, false, 96);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['themes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        </ul>
        <hr>
        <h4>Administration</h4>
        <ul>";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight($this->extensions['Cecil\Renderer\Extension\Core']->filterBy(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 101, $this->source); })()), "pages", [], "any", false, false, false, 101), "section", "administration")));
        foreach ($context['_seq'] as $context["_key"] => $context["themes"]) {
            echo "
                <li><a href=\"/";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "path", [], "any", false, false, false, 102);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "title", [], "any", false, false, false, 102);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['themes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        </ul>
        <hr>
        <h4>Direction de Dépt.</h4>
        <ul>";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight($this->extensions['Cecil\Renderer\Extension\Core']->filterBy(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 107, $this->source); })()), "pages", [], "any", false, false, false, 107), "section", "direction")));
        foreach ($context['_seq'] as $context["_key"] => $context["themes"]) {
            echo "
                <li><a href=\"/";
            // line 108
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "path", [], "any", false, false, false, 108);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "title", [], "any", false, false, false, 108);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['themes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        </ul>
    </aside>";
        // line 112
        $this->displayBlock('content', $context, $blocks);
        // line 116
        echo "
</div>";
        // line 118
        $this->loadTemplate("partials/googleanalytics.js.twig", "_default/page.html.twig", 118)->display(twig_to_array(["site" => (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 118, $this->source); })())]));
        echo "
</body>
</html>
";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 15
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        echo "
        <meta charset=\"UTF-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"theme-color\" media=\"(prefers-color-scheme: light)\" content=\"white\"/>
        <meta name=\"theme-color\" media=\"(prefers-color-scheme: dark)\" content=\"black\"/>
";
        // line 20
        $this->loadTemplate("partials/metatags.html.twig", "_default/page.html.twig", 20)->display(twig_to_array(["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 20, $this->source); })()), "site" => (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 20, $this->source); })())]));
        echo "

    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
        <style>";
        // line 27
        ob_start();
        // line 28
        $this->loadTemplate("partials/new.css.twig", "_default/page.html.twig", 28)->display($context);
        echo "
            /* nav */
            nav ul {
                padding: 0;
                margin: 0;
            }

            nav li {
                display: inline-block;
                margin: 0 .5rem 0 0;
            }

            nav a {
                text-decoration: none;
            }

            nav a:hover {
                text-decoration: underline;
            }

            /* footer */
            footer {
                border-top: 1px solid var(--nc-bg-3);
                padding-top: 1rem;
                margin-top: 2rem;
            }

            /* image */
            img {
                height: auto;
            }
            ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo $this->extensions['Cecil\Renderer\Extension\Core']->minifyCss($___internal_parse_0_);
        // line 59
        echo "</style>

    ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "    <link rel=\"stylesheet\" href=\"";
        echo $this->extensions['Cecil\Renderer\Extension\Core']->asset("bootstrap.min.css");
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cecil\Renderer\Extension\Core']->asset("styles/css/style.css");
        echo "\" type=\"text/css\"/>
    ";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "        <script src=\"";
        echo $this->extensions['Cecil\Renderer\Extension\Core']->asset("bootstrap.min.js");
        echo "\"></script>
        <script type=\"module\" src=\"";
        // line 63
        echo $this->extensions['Cecil\Renderer\Extension\Core']->asset("script.js");
        echo "\"></script>
        <script src=\"https://kit.fontawesome.com/c610cfb1f1.js\" crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 112
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 113
        $this->displayBlock('content_header', $context, $blocks);
        echo "
            ";
        // line 114
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 114, $this->source); })()), "content", [], "any", false, false, false, 114);
        // line 115
        $this->displayBlock('content_footer', $context, $blocks);
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 113
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 115
    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "_default/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 115,  333 => 113,  326 => 115,  324 => 114,  320 => 113,  313 => 112,  303 => 63,  298 => 62,  291 => 61,  282 => 24,  277 => 23,  270 => 22,  263 => 61,  259 => 59,  257 => 27,  222 => 28,  220 => 27,  217 => 26,  215 => 22,  210 => 20,  197 => 15,  186 => 118,  183 => 116,  181 => 112,  178 => 110,  168 => 108,  162 => 107,  157 => 104,  147 => 102,  141 => 101,  136 => 98,  126 => 96,  120 => 95,  115 => 92,  109 => 91,  107 => 90,  101 => 89,  95 => 88,  87 => 83,  85 => 81,  82 => 80,  76 => 73,  72 => 72,  65 => 67,  63 => 15,  59 => 13,  55 => 11,  52 => 5,  50 => 4,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        {# all \"showable pages by default #}
{% set pages = site.pages.showable %}
{# in case of a list page, take its sub pages #}
{% if page.pages is defined %}
    {%- set pages = page.pages -%}
{% endif %}
{# in case of a paginated list page, take the paginator list pages #}
{# {% if page.paginator.pages is defined %} #}
{#    {%- set pages = page.paginator.pages -%} #}
{# {% endif %} #}

<!DOCTYPE html>
<html lang=\"{{ site.language }}\">
<head>
    {%- block head ~%}
        <meta charset=\"UTF-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"theme-color\" media=\"(prefers-color-scheme: light)\" content=\"white\"/>
        <meta name=\"theme-color\" media=\"(prefers-color-scheme: dark)\" content=\"black\"/>
        {%~ include 'partials/metatags.html.twig' with {page, site} only ~%}

    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('bootstrap.min.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('styles/css/style.css') }}\" type=\"text/css\"/>
    {% endblock %}

        <style>{% apply minify_css %}
            {%- include 'partials/new.css.twig' ~%}
            /* nav */
            nav ul {
                padding: 0;
                margin: 0;
            }

            nav li {
                display: inline-block;
                margin: 0 .5rem 0 0;
            }

            nav a {
                text-decoration: none;
            }

            nav a:hover {
                text-decoration: underline;
            }

            /* footer */
            footer {
                border-top: 1px solid var(--nc-bg-3);
                padding-top: 1rem;
                margin-top: 2rem;
            }

            /* image */
            img {
                height: auto;
            }
            {% endapply %}</style>

    {% block javascripts %}
        <script src=\"{{ asset('bootstrap.min.js') }}\"></script>
        <script type=\"module\" src=\"{{ asset('script.js') }}\"></script>
        <script src=\"https://kit.fontawesome.com/c610cfb1f1.js\" crossorigin=\"anonymous\"></script>
    {% endblock %}

    {%- endblock head ~%}
</head>
<body>
<header>
    <div class=\"title\">
        <img src=\"{{ asset(\"logo.svg\") }}\" alt=\"\">
        <h1>{{ site.title }}</h1>
    </div>

    {# <form id=\"autocomplete\" class=\"d-flex\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Recherche dans la documentation\" aria-label=\"Search\">
        <button class=\"btn btn-outline-primary\" type=\"submit\">Rechercher</button>
    </form> #}

    {{ include('partials/algolia.html.twig') }}

    {%- include 'partials/navigation.html.twig' with {'menu': site.menus.main} only ~%}
</header>
<div class=\"body_content\">
    <aside>
        <h4>Enseignants</h4>
        <ul>{%- for themes in site.pages|filter_by('section', 'enseignants')|sort_by_weight ~%}
                <li><a href=\"/{{ themes.path }}\">{{ themes.title }}</a></li>
                {% include 'partials/subtitles-list.html.twig' with {'page': themes, 'vocabulary': 'subtitles'} only %}
            {% endfor %}
        </ul>
        <hr>
        <h4>Etudiants</h4>
        <ul>{%- for themes in site.pages|filter_by('section', 'etudiants')|sort_by_weight ~%}
                <li><a href=\"/{{ themes.path }}\">{{ themes.title }}</a></li>
            {% endfor %}
        </ul>
        <hr>
        <h4>Administration</h4>
        <ul>{%- for themes in site.pages|filter_by('section', 'administration')|sort_by_weight ~%}
                <li><a href=\"/{{ themes.path }}\">{{ themes.title }}</a></li>
            {% endfor %}
        </ul>
        <hr>
        <h4>Direction de Dépt.</h4>
        <ul>{%- for themes in site.pages|filter_by('section', 'direction')|sort_by_weight ~%}
                <li><a href=\"/{{ themes.path }}\">{{ themes.title }}</a></li>
            {% endfor %}
        </ul>
    </aside>
        {%- block content ~%}
            {%- block content_header %}{% endblock content_header ~%}
            {{ page.content }}
            {%- block content_footer %}{% endblock content_footer ~%}
        {%- endblock content ~%}
</div>
{%- include 'partials/googleanalytics.js.twig' with {site} only ~%}
</body>
</html>
", "_default/page.html.twig", "/var/www/html/IntranetDocumentation/layouts/_default/page.html.twig");
    }
}
