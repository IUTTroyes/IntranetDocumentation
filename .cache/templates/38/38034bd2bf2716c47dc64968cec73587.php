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
class __TwigTemplate_b4dd6cbfebe37a38f8cd6860b7c98b6f extends Template
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
    <div id=\"autocomplete\">
        ";
        // line 84
        echo "    </div>";
        // line 86
        $this->loadTemplate("partials/navigation.html.twig", "_default/page.html.twig", 86)->display(twig_to_array(["menu" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 86, $this->source); })()), "menus", [], "any", false, false, false, 86), "main", [], "any", false, false, false, 86)]));
        echo "
</header>
<div class=\"body_content\">
    <aside>
        <h4>Enseignants</h4>
        <ul>";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight($this->extensions['Cecil\Renderer\Extension\Core']->filterBy(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 91, $this->source); })()), "pages", [], "any", false, false, false, 91), "section", "enseignants")));
        foreach ($context['_seq'] as $context["_key"] => $context["themes"]) {
            echo "
                <li><a href=\"\">";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "title", [], "any", false, false, false, 92);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['themes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </ul>
        <hr>
        <h4>Etudiants</h4>
        <ul>";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight($this->extensions['Cecil\Renderer\Extension\Core']->filterBy(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 97, $this->source); })()), "pages", [], "any", false, false, false, 97), "section", "etudiants")));
        foreach ($context['_seq'] as $context["_key"] => $context["themes"]) {
            echo "
                <li><a href=\"\">";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "title", [], "any", false, false, false, 98);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['themes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        </ul>
        <hr>
        <h4>Administration</h4>
        <ul>";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight($this->extensions['Cecil\Renderer\Extension\Core']->filterBy(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 103, $this->source); })()), "pages", [], "any", false, false, false, 103), "section", "administration")));
        foreach ($context['_seq'] as $context["_key"] => $context["themes"]) {
            echo "
                <li><a href=\"\">";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "title", [], "any", false, false, false, 104);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['themes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </ul>
        <hr>
        <h4>Direction de Dépt.</h4>
        <ul>";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight($this->extensions['Cecil\Renderer\Extension\Core']->filterBy(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 109, $this->source); })()), "pages", [], "any", false, false, false, 109), "section", "direction")));
        foreach ($context['_seq'] as $context["_key"] => $context["themes"]) {
            echo "
                <li><a href=\"\">";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "title", [], "any", false, false, false, 110);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['themes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "        </ul>
    </aside>";
        // line 114
        $this->displayBlock('content', $context, $blocks);
        // line 118
        echo "
</div>";
        // line 120
        $this->loadTemplate("partials/googleanalytics.js.twig", "_default/page.html.twig", 120)->display(twig_to_array(["site" => (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 120, $this->source); })())]));
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

    // line 114
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 115
        $this->displayBlock('content_header', $context, $blocks);
        echo "
            ";
        // line 116
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 116, $this->source); })()), "content", [], "any", false, false, false, 116);
        // line 117
        $this->displayBlock('content_footer', $context, $blocks);
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 115
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 117
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
        return array (  334 => 117,  322 => 115,  315 => 117,  313 => 116,  309 => 115,  302 => 114,  292 => 63,  287 => 62,  280 => 61,  271 => 24,  266 => 23,  259 => 22,  252 => 61,  248 => 59,  246 => 27,  211 => 28,  209 => 27,  206 => 26,  204 => 22,  199 => 20,  186 => 15,  175 => 120,  172 => 118,  170 => 114,  167 => 112,  159 => 110,  153 => 109,  148 => 106,  140 => 104,  134 => 103,  129 => 100,  121 => 98,  115 => 97,  110 => 94,  102 => 92,  96 => 91,  88 => 86,  86 => 84,  82 => 80,  76 => 73,  72 => 72,  65 => 67,  63 => 15,  59 => 13,  55 => 11,  52 => 5,  50 => 4,  48 => 2,  46 => 1,);
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
    
    <div id=\"autocomplete\">
        {# <input type=\"search\">
        <button class=\"btn btn-outline-primary\" type=\"submit\">Rechercher</button> #}
    </div>

    {%- include 'partials/navigation.html.twig' with {'menu': site.menus.main} only ~%}
</header>
<div class=\"body_content\">
    <aside>
        <h4>Enseignants</h4>
        <ul>{%- for themes in site.pages|filter_by('section', 'enseignants')|sort_by_weight ~%}
                <li><a href=\"\">{{ themes.title }}</a></li>
            {% endfor %}
        </ul>
        <hr>
        <h4>Etudiants</h4>
        <ul>{%- for themes in site.pages|filter_by('section', 'etudiants')|sort_by_weight ~%}
                <li><a href=\"\">{{ themes.title }}</a></li>
            {% endfor %}
        </ul>
        <hr>
        <h4>Administration</h4>
        <ul>{%- for themes in site.pages|filter_by('section', 'administration')|sort_by_weight ~%}
                <li><a href=\"\">{{ themes.title }}</a></li>
            {% endfor %}
        </ul>
        <hr>
        <h4>Direction de Dépt.</h4>
        <ul>{%- for themes in site.pages|filter_by('section', 'direction')|sort_by_weight ~%}
                <li><a href=\"\">{{ themes.title }}</a></li>
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
