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

/* index.html.twig */
class __TwigTemplate_997289f9a18ea5e108003f4028ab30a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'content_header' => [$this, 'block_content_header'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_default/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("_default/page.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "
        <div class=\"main_content\">
            <main>";
        // line 6
        $this->displayBlock('content_header', $context, $blocks);
        // line 19
        echo "

                <hr>

                <div class=\"summary\">
                    <div>
                        <i class=\"fa-solid fa-graduation-cap fa-xl\"></i>
                        <h5>Etudiants</h5>
                        <ul>";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight($this->extensions['Cecil\Renderer\Extension\Core']->filterBy(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 27, $this->source); })()), "pages", [], "any", false, false, false, 27), "section", "etudiants")));
        foreach ($context['_seq'] as $context["_key"] => $context["themes"]) {
            echo "
                                <li><a href=\"\">";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "title", [], "any", false, false, false, 28);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['themes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        </ul>
                    </div>
                    <div>
                        <i class=\"fa-solid fa-chalkboard-user fa-xl\"></i>
                        <h5>Enseignants</h5>
                        <ul>";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight($this->extensions['Cecil\Renderer\Extension\Core']->filterBy(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 35, $this->source); })()), "pages", [], "any", false, false, false, 35), "section", "enseignants")));
        foreach ($context['_seq'] as $context["_key"] => $context["themes"]) {
            echo "
                                <li><a href=\"\">";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "title", [], "any", false, false, false, 36);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['themes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        </ul>
                    </div>
                    <div>
                        <i class=\"fa-solid fa-users fa-xl\"></i>
                        <h5>Administration</h5>
                        <ul>";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight($this->extensions['Cecil\Renderer\Extension\Core']->filterBy(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 43, $this->source); })()), "pages", [], "any", false, false, false, 43), "section", "administration")));
        foreach ($context['_seq'] as $context["_key"] => $context["themes"]) {
            echo "
                                <li><a href=\"\">";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "title", [], "any", false, false, false, 44);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['themes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </ul>
                    </div>
                    <div>
                        <i class=\"fa-solid fa-gears fa-xl\"></i>
                        <h5>Direction de Dept.</h5>
                        <ul>";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight($this->extensions['Cecil\Renderer\Extension\Core']->filterBy(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 51, $this->source); })()), "pages", [], "any", false, false, false, 51), "section", "direction")));
        foreach ($context['_seq'] as $context["_key"] => $context["themes"]) {
            echo "
                                <li><a href=\"\">";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["themes"], "title", [], "any", false, false, false, 52);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['themes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                        </ul>
                    </div>
                </div>

                <hr>

                ";
        // line 60
        echo twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 60, $this->source); })()), "content", [], "any", false, false, false, 60);
        echo "

                <h2>Fonctionnalités</h2>
                <div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight($this->extensions['Cecil\Renderer\Extension\Core']->filterBy(twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 64, $this->source); })()), "pages", [], "any", false, false, false, 64), "section", "fonctionnalites")));
        foreach ($context['_seq'] as $context["_key"] => $context["profil"]) {
            echo "
                        <div class=\"accordion-item\">
                            <div class=\"accordion-header\" id=\"flush-heading";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["profil"], "weight", [], "any", false, false, false, 66);
            echo "\">
                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#flush-collapse";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["profil"], "weight", [], "any", false, false, false, 68);
            echo "\" aria-expanded=\"false\"
                                        aria-controls=\"flush-collapse";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["profil"], "weight", [], "any", false, false, false, 69);
            echo "\">Pour ";
            echo twig_get_attribute($this->env, $this->source, $context["profil"], "title", [], "any", false, false, false, 69);
            echo "
                                </button>
                            </div>
                            <div id=\"flush-collapse";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["profil"], "weight", [], "any", false, false, false, 72);
            echo "\" class=\"accordion-collapse collapse\"
                                 aria-labelledby=\"flush-heading";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["profil"], "weight", [], "any", false, false, false, 73);
            echo "\"
                                 data-bs-parent=\"#accordionFlushExample\">
                                <div class=\"accordion-body\">
                                    ";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["profil"], "content", [], "any", false, false, false, 76);
            echo "
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
                </div>

                <footer>";
        // line 85
        ob_start();
        // line 86
        echo "<a href=\"";
        echo twig_get_attribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 86, $this->source); })()), "url", [], "any", false, false, false, 86);
        echo "\">Cecil</a> &amp; <a href=\"https://newcss.net\">new.css</a>";
        $context["powered_by"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 87
        echo "
                    <small>";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Powered by %powered_by%", ["%powered_by%" => (isset($context["powered_by"]) || array_key_exists("powered_by", $context) ? $context["powered_by"] : (function () { throw new RuntimeError('Variable "powered_by" does not exist.', 88, $this->source); })())], "messages");
        echo "</small>
                </footer>
            </main>

        </div>";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 6
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        echo "
                    <section class=\"news\">
                        <article>
                            <h2>Nouveautés</h2>
                            ";
        // line 11
        echo "                            <ul>
                                <li>Nouv. 1</li>
                                <li>Nouv. 2</li>
                                <li>Nouv. 3</li>
                                <li>Nouv. 4</li>
                            </ul>
                        </article>
                    </section>";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 11,  238 => 6,  226 => 88,  223 => 87,  218 => 86,  216 => 85,  211 => 81,  200 => 76,  194 => 73,  190 => 72,  182 => 69,  178 => 68,  173 => 66,  166 => 64,  160 => 60,  152 => 54,  144 => 52,  138 => 51,  131 => 46,  123 => 44,  117 => 43,  110 => 38,  102 => 36,  96 => 35,  89 => 30,  81 => 28,  75 => 27,  65 => 19,  63 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '_default/page.html.twig' %}

    {%- block content ~%}
        <div class=\"main_content\">
            <main>
                {%- block content_header ~%}
                    <section class=\"news\">
                        <article>
                            <h2>Nouveautés</h2>
                            {#                            todo: liste de nouveautés = 4 derniers ajouts de la page fonctionnalités #}
                            <ul>
                                <li>Nouv. 1</li>
                                <li>Nouv. 2</li>
                                <li>Nouv. 3</li>
                                <li>Nouv. 4</li>
                            </ul>
                        </article>
                    </section>
                {%- endblock content_header ~%}

                <hr>

                <div class=\"summary\">
                    <div>
                        <i class=\"fa-solid fa-graduation-cap fa-xl\"></i>
                        <h5>Etudiants</h5>
                        <ul>{%- for themes in site.pages|filter_by('section', 'etudiants')|sort_by_weight ~%}
                                <li><a href=\"\">{{ themes.title }}</a></li>
                            {% endfor %}
                        </ul>
                    </div>
                    <div>
                        <i class=\"fa-solid fa-chalkboard-user fa-xl\"></i>
                        <h5>Enseignants</h5>
                        <ul>{%- for themes in site.pages|filter_by('section', 'enseignants')|sort_by_weight ~%}
                                <li><a href=\"\">{{ themes.title }}</a></li>
                            {% endfor %}
                        </ul>
                    </div>
                    <div>
                        <i class=\"fa-solid fa-users fa-xl\"></i>
                        <h5>Administration</h5>
                        <ul>{%- for themes in site.pages|filter_by('section', 'administration')|sort_by_weight ~%}
                                <li><a href=\"\">{{ themes.title }}</a></li>
                            {% endfor %}
                        </ul>
                    </div>
                    <div>
                        <i class=\"fa-solid fa-gears fa-xl\"></i>
                        <h5>Direction de Dept.</h5>
                        <ul>{%- for themes in site.pages|filter_by('section', 'direction')|sort_by_weight ~%}
                                <li><a href=\"\">{{ themes.title }}</a></li>
                            {% endfor %}
                        </ul>
                    </div>
                </div>

                <hr>

                {{ page.content }}

                <h2>Fonctionnalités</h2>
                <div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">
                    {%- for profil in site.pages|filter_by('section', 'fonctionnalites')|sort_by_weight ~%}
                        <div class=\"accordion-item\">
                            <div class=\"accordion-header\" id=\"flush-heading{{ profil.weight }}\">
                                <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                        data-bs-target=\"#flush-collapse{{ profil.weight }}\" aria-expanded=\"false\"
                                        aria-controls=\"flush-collapse{{ profil.weight }}\">Pour {{ profil.title }}
                                </button>
                            </div>
                            <div id=\"flush-collapse{{ profil.weight }}\" class=\"accordion-collapse collapse\"
                                 aria-labelledby=\"flush-heading{{ profil.weight }}\"
                                 data-bs-parent=\"#accordionFlushExample\">
                                <div class=\"accordion-body\">
                                    {{ profil.content }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}

                </div>

                <footer>
                    {%- set powered_by -%}
                        <a href=\"{{ cecil.url }}\">Cecil</a> &amp; <a href=\"https://newcss.net\">new.css</a>
                    {%- endset ~%}
                    <small>{% trans %}Powered by %powered_by%{% endtrans %}</small>
                </footer>
            </main>

        </div>
    {%- endblock content ~%}
", "index.html.twig", "/var/www/html/IntranetDocumentation/layouts/index.html.twig");
    }
}
