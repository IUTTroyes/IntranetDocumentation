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

/* partials/metatags.html.twig */
class __TwigTemplate_5bf0896773bcb1b09a8cc3fbb5d11a23 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/metatags.html.twig"));

        // line 2
        if (( !array_key_exists("title", $context) || twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })())))) {
            // line 3
            $context["title_divider"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 3), "title", [], "any", false, true, false, 3), "divider", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 3), "title", [], "any", false, true, false, 3), "divider", [], "any", false, false, false, 3), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 3), "title", [], "any", false, true, false, 3), "divider", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 3), "title", [], "any", false, true, false, 3), "divider", [], "any", false, false, false, 3), " &middot; ")) : (" &middot; ")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 3), "title", [], "any", false, true, false, 3), "divider", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 3), "title", [], "any", false, true, false, 3), "divider", [], "any", false, false, false, 3), " &middot; ")) : (" &middot; "))));
            // line 4
            $context["title_only"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 4), "title", [], "any", false, true, false, 4), "only", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 4), "title", [], "any", false, true, false, 4), "only", [], "any", false, false, false, 4), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 4), "title", [], "any", false, true, false, 4), "only", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 4), "title", [], "any", false, true, false, 4), "only", [], "any", false, false, false, 4), false)) : (false)))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 4), "title", [], "any", false, true, false, 4), "only", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 4), "title", [], "any", false, true, false, 4), "only", [], "any", false, false, false, 4), false)) : (false))));
            // line 5
            $context["title_pagination_shownumber"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", false, false, false, 5), (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", true, true, false, 5) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", false, false, false, 5)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", false, false, false, 5)) : (true)))) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", true, true, false, 5) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", false, false, false, 5)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 5), "title", [], "any", false, true, false, 5), "pagination", [], "any", false, true, false, 5), "shownumber", [], "any", false, false, false, 5)) : (true))));
            // line 6
            $context["title_pagination_label"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "pagination", [], "any", false, true, false, 6), "label", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "pagination", [], "any", false, true, false, 6), "label", [], "any", false, false, false, 6), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "pagination", [], "any", false, true, false, 6), "label", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "pagination", [], "any", false, true, false, 6), "label", [], "any", false, false, false, 6), "Page %s")) : ("Page %s")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "pagination", [], "any", false, true, false, 6), "label", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 6), "title", [], "any", false, true, false, 6), "pagination", [], "any", false, true, false, 6), "label", [], "any", false, false, false, 6), "Page %s")) : ("Page %s"))));
            // line 7
            $context["title"] = ((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7)) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 7, $this->source); })())) . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7)));
            // line 8
            if ((isset($context["title_only"]) || array_key_exists("title_only", $context) ? $context["title_only"] : (function () { throw new RuntimeError('Variable "title_only" does not exist.', 8, $this->source); })())) {
                // line 9
                $context["title"] = twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9));
            }
            // line 11
            if ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 11, $this->source); })()), "type", [], "any", false, false, false, 11) == "homepage")) {
                // line 12
                $context["title"] = ((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12)) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 12, $this->source); })())) . twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "baseline", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "baseline", [], "any", false, false, false, 12), "")) : (""))));
                // line 13
                if (((isset($context["title_only"]) || array_key_exists("title_only", $context) ? $context["title_only"] : (function () { throw new RuntimeError('Variable "title_only" does not exist.', 13, $this->source); })()) || twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "baseline", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "baseline", [], "any", false, false, false, 13), "")) : (""))))) {
                    // line 14
                    $context["title"] = twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14));
                }
            }
            // line 17
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 17), "current", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 17), "current", [], "any", false, false, false, 17), 0)) : (0)) > 1)) {
                // line 18
                if ((isset($context["title_pagination_shownumber"]) || array_key_exists("title_pagination_shownumber", $context) ? $context["title_pagination_shownumber"] : (function () { throw new RuntimeError('Variable "title_pagination_shownumber" does not exist.', 18, $this->source); })())) {
                    // line 19
                    $context["title"] = ((((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19)) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 19, $this->source); })())) . twig_sprintf((isset($context["title_pagination_label"]) || array_key_exists("title_pagination_label", $context) ? $context["title_pagination_label"] : (function () { throw new RuntimeError('Variable "title_pagination_label" does not exist.', 19, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "paginator", [], "any", false, false, false, 19), "current", [], "any", false, false, false, 19))) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 19, $this->source); })())) . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19)));
                    // line 20
                    if ((isset($context["title_only"]) || array_key_exists("title_only", $context) ? $context["title_only"] : (function () { throw new RuntimeError('Variable "title_only" does not exist.', 20, $this->source); })())) {
                        // line 21
                        $context["title"] = ((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21)) . (isset($context["title_divider"]) || array_key_exists("title_divider", $context) ? $context["title_divider"] : (function () { throw new RuntimeError('Variable "title_divider" does not exist.', 21, $this->source); })())) . twig_sprintf((isset($context["title_pagination_label"]) || array_key_exists("title_pagination_label", $context) ? $context["title_pagination_label"] : (function () { throw new RuntimeError('Variable "title_pagination_label" does not exist.', 21, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 21, $this->source); })()), "paginator", [], "any", false, false, false, 21), "current", [], "any", false, false, false, 21)));
                    }
                }
            }
        }
        // line 27
        $context["description"] = twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "description", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27))) : (twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27))));
        // line 29
        $context["keywords"] = twig_escape_filter($this->env, twig_array_merge(((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tags", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "tags", [], "any", false, false, false, 29), [])) : ([])), ((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "keywords", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "keywords", [], "any", false, false, false, 29), [])) : ([]))));
        // line 31
        $context["author"] = twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "author", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "author", [], "any", false, false, false, 31), ((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, false, false, 31), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "author", [], "any", false, false, false, 31), "")) : ("")))));
        // line 32
        if ( !twig_test_empty((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 32, $this->source); })()))) {
            // line 33
            if ( !twig_test_iterable((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 33, $this->source); })()))) {
                // line 34
                $context["author"] = ["name" => (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 34, $this->source); })())];
            }
            // line 36
            if ((twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "firstname", [], "any", true, true, false, 36) && twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "lastname", [], "any", true, true, false, 36))) {
                // line 37
                $context["author"] = twig_array_merge((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 37, $this->source); })()), ["name" => ((twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 37, $this->source); })()), "firstname", [], "any", false, false, false, 37)) . " ") . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 37, $this->source); })()), "lastname", [], "any", false, false, false, 37)))]);
            }
        }
        // line 41
        $context["robots"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 41), "robots", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metatags", [], "any", false, true, false, 41), "robots", [], "any", false, false, false, 41), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 41), "robots", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 41), "robots", [], "any", false, false, false, 41), "index,follow")) : ("index,follow")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 41), "robots", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 41), "robots", [], "any", false, false, false, 41), "index,follow")) : ("index,follow"))));
        // line 42
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 42), "current", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 42), "current", [], "any", false, false, false, 42), 0)) : (0)) > 1)) {
            // line 43
            $context["robots"] = "noindex,follow";
        }
        // line 46
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 46), "favicon", [], "any", false, true, false, 46), "enabled", [], "any", true, true, false, 46) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 46), "favicon", [], "any", false, true, false, 46), "enabled", [], "any", false, false, false, 46)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 46), "favicon", [], "any", false, true, false, 46), "enabled", [], "any", false, false, false, 46)) : (true))) {
            // line 47
            $context["favicon_defaults"] = ["icon" => [0 => 32, 1 => 57, 2 => 76, 3 => 96, 4 => 128, 5 => 192, 6 => 228], "shortcut icon" => [0 => 196], "apple-touch-icon" => [0 => 120, 1 => 152, 2 => 180]];
        }
        // line 54
        if (( !array_key_exists("image", $context) || twig_test_empty((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 54, $this->source); })())))) {
            // line 55
            $context["image"] = ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "image", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "image", [], "any", false, false, false, 55), ((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "image", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "image", [], "any", false, false, false, 55))) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "image", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "image", [], "any", false, false, false, 55))) : (""))));
        }
        // line 58
        $context["opengraph"] = ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
(isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 59, $this->source); })()), "language", [], "any", false, false, false, 59), "locale", [], "any", false, false, false, 59), "site_name" => twig_get_attribute($this->env, $this->source,         // line 60
(isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 60, $this->source); })()), "title", [], "any", false, false, false, 60), "type" => "website", "title" =>         $this->renderBlock("title", $context, $blocks), "description" =>         $this->renderBlock("description", $context, $blocks), "url" => $this->extensions['Cecil\Renderer\Extension\Core']->url(        // line 64
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 64, $this->source); })()), ["canonical" => true])];
        // line 66
        if ((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 66, $this->source); })())) {
            // line 67
            if ( !$this->extensions['Cecil\Renderer\Extension\Core']->isAsset((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 67, $this->source); })()))) {
                // line 68
                $context["image_asset"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 68, $this->source); })()));
            } else {
                // line 70
                $context["image_asset"] = (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 70, $this->source); })());
            }
            // line 72
            $context["opengraph"] = twig_array_merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 72, $this->source); })()), ["image" => $this->extensions['Cecil\Renderer\Extension\Core']->resize((isset($context["image_asset"]) || array_key_exists("image_asset", $context) ? $context["image_asset"] : (function () { throw new RuntimeError('Variable "image_asset" does not exist.', 72, $this->source); })()), 1200)]);
        }
        // line 74
        if ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 74, $this->source); })()), "section", [], "any", false, false, false, 74) == ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 74), "articles", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 74), "articles", [], "any", false, false, false, 74), "Enseignants")) : ("Enseignants")))) {
            // line 75
            $context["opengraph"] = twig_array_merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 75, $this->source); })()), ["type" => "article"]);
        }
        // line 77
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "opengraph", [], "any", true, true, false, 77) || twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "opengraph", [], "any", true, true, false, 77))) {
            // line 78
            $context["opengraph"] = twig_array_merge((isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 78, $this->source); })()), ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "opengraph", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "opengraph", [], "any", false, false, false, 78), twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 78, $this->source); })()), "opengraph", [], "any", false, false, false, 78))) : (twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 78, $this->source); })()), "opengraph", [], "any", false, false, false, 78))));
        }
        // line 81
        $context["facebook"] = ["id" => "", "firstname" => ((twig_get_attribute($this->env, $this->source,         // line 83
($context["author"] ?? null), "firstname", [], "any", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "firstname", [], "any", false, false, false, 83), "")) : ("")), "lastname" => ((twig_get_attribute($this->env, $this->source,         // line 84
($context["author"] ?? null), "lastname", [], "any", true, true, false, 84)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["author"] ?? null), "lastname", [], "any", false, false, false, 84), "")) : ("")), "username" => ""];
        // line 87
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 87), "facebook", [], "any", true, true, false, 87) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, true, false, 87), "facebook", [], "any", true, true, false, 87))) {
            // line 88
            $context["facebook"] = twig_array_merge((isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 88, $this->source); })()), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 88), "facebook", [], "any", true, true, false, 88)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 88), "facebook", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 88, $this->source); })()), "social", [], "any", false, false, false, 88), "facebook", [], "any", false, false, false, 88))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 88, $this->source); })()), "social", [], "any", false, false, false, 88), "facebook", [], "any", false, false, false, 88))));
        }
        // line 91
        $context["twitter"] = ["site" => "", "creator" => ""];
        // line 95
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 95), "twitter", [], "any", true, true, false, 95) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "social", [], "any", false, true, false, 95), "twitter", [], "any", true, true, false, 95))) {
            // line 96
            if ( !twig_test_iterable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 96), "twitter", [], "any", true, true, false, 96)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 96), "twitter", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 96, $this->source); })()), "social", [], "any", false, false, false, 96), "twitter", [], "any", false, false, false, 96))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 96, $this->source); })()), "social", [], "any", false, false, false, 96), "twitter", [], "any", false, false, false, 96))))) {
                // line 97
                $context["twitter"] = twig_array_merge((isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 97, $this->source); })()), ["site" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 97), "twitter", [], "any", true, true, false, 97)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 97), "twitter", [], "any", false, false, false, 97), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 97, $this->source); })()), "social", [], "any", false, false, false, 97), "twitter", [], "any", false, false, false, 97))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 97, $this->source); })()), "social", [], "any", false, false, false, 97), "twitter", [], "any", false, false, false, 97)))]);
            } else {
                // line 99
                $context["twitter"] = twig_array_merge((isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 99, $this->source); })()), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 99), "twitter", [], "any", true, true, false, 99)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "social", [], "any", false, true, false, 99), "twitter", [], "any", false, false, false, 99), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 99, $this->source); })()), "social", [], "any", false, false, false, 99), "twitter", [], "any", false, false, false, 99))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 99, $this->source); })()), "social", [], "any", false, false, false, 99), "twitter", [], "any", false, false, false, 99))));
            }
        }
        // line 104
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 105
        $this->displayBlock('description', $context, $blocks);
        echo "\" />";
        // line 106
        if ((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 106, $this->source); })())) {
            echo "
    <meta name=\"keywords\" content=\"";
            // line 107
            echo twig_join_filter((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 107, $this->source); })()), ", ");
            echo "\" />";
        }
        // line 109
        if ((isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 109, $this->source); })())) {
            echo "
    <meta name=\"author\" content=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 110, $this->source); })()), "name", [], "any", false, false, false, 110));
            echo "\" />";
        }
        // line 111
        echo "
    <meta name=\"robots\" content=\"";
        // line 112
        echo (isset($context["robots"]) || array_key_exists("robots", $context) ? $context["robots"] : (function () { throw new RuntimeError('Variable "robots" does not exist.', 112, $this->source); })());
        echo "\" />";
        // line 114
        if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 114), "favicon", [], "any", false, true, false, 114), "enabled", [], "any", true, true, false, 114) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 114), "favicon", [], "any", false, true, false, 114), "enabled", [], "any", false, false, false, 114)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 114), "favicon", [], "any", false, true, false, 114), "enabled", [], "any", false, false, false, 114)) : (true)) &&  !twig_test_empty($this->extensions['Cecil\Renderer\Extension\Core']->asset(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 114), "favicon", [], "any", false, true, false, 114), "image", [], "any", true, true, false, 114)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 114), "favicon", [], "any", false, true, false, 114), "image", [], "any", false, false, false, 114), "favicon.png")) : ("favicon.png")), ["ignore_missing" => true])))) {
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 115), "favicon", [], "any", false, true, false, 115), "sizes", [], "any", true, true, false, 115)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 115), "favicon", [], "any", false, true, false, 115), "sizes", [], "any", false, false, false, 115), (isset($context["favicon_defaults"]) || array_key_exists("favicon_defaults", $context) ? $context["favicon_defaults"] : (function () { throw new RuntimeError('Variable "favicon_defaults" does not exist.', 115, $this->source); })()))) : ((isset($context["favicon_defaults"]) || array_key_exists("favicon_defaults", $context) ? $context["favicon_defaults"] : (function () { throw new RuntimeError('Variable "favicon_defaults" does not exist.', 115, $this->source); })()))));
            foreach ($context['_seq'] as $context["favicon_variant"] => $context["favicon_sizes"]) {
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["favicon_sizes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
                    // line 117
                    $context["favicon_asset"] = $this->extensions['Cecil\Renderer\Extension\Core']->asset(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 117), "favicon", [], "any", false, true, false, 117), "image", [], "any", true, true, false, 117)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "metatags", [], "any", false, true, false, 117), "favicon", [], "any", false, true, false, 117), "image", [], "any", false, false, false, 117), "favicon.png")) : ("favicon.png")), ["ignore_missing" => true]);
                    // line 118
                    if ( !twig_get_attribute($this->env, $this->source, (isset($context["favicon_asset"]) || array_key_exists("favicon_asset", $context) ? $context["favicon_asset"] : (function () { throw new RuntimeError('Variable "favicon_asset" does not exist.', 118, $this->source); })()), "missing", [], "any", false, false, false, 118)) {
                        echo "
    <link rel=\"";
                        // line 119
                        echo $context["favicon_variant"];
                        echo "\" sizes=\"";
                        echo $context["size"];
                        echo "x";
                        echo $context["size"];
                        echo "\" href=\"";
                        echo $this->extensions['Cecil\Renderer\Extension\Core']->url($this->extensions['Cecil\Renderer\Extension\Core']->resize((isset($context["favicon_asset"]) || array_key_exists("favicon_asset", $context) ? $context["favicon_asset"] : (function () { throw new RuntimeError('Variable "favicon_asset" does not exist.', 119, $this->source); })()), $context["size"]), ["canonical" => true]);
                        echo "\" type=\"";
                        echo twig_get_attribute($this->env, $this->source, (isset($context["favicon_asset"]) || array_key_exists("favicon_asset", $context) ? $context["favicon_asset"] : (function () { throw new RuntimeError('Variable "favicon_asset" does not exist.', 119, $this->source); })()), "subtype", [], "any", false, false, false, 119);
                        echo "\" />";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['favicon_variant'], $context['favicon_sizes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 125
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "prev", [], "any", false, true, false, 125), "path", [], "any", true, true, false, 125)) {
            echo "
    <link rel=\"prev\" href=\"";
            // line 126
            echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 126, $this->source); })()), "prev", [], "any", false, false, false, 126), ["canonical" => true]);
            echo "\" />";
        }
        // line 128
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "next", [], "any", false, true, false, 128), "path", [], "any", true, true, false, 128)) {
            echo "
    <link rel=\"next\" href=\"";
            // line 129
            echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 129, $this->source); })()), "next", [], "any", false, false, false, 129), ["canonical" => true]);
            echo "\" />";
        }
        // line 132
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 132), "pages", [], "any", true, true, false, 132)) {
            echo "
    <link rel=\"first\" href=\"";
            // line 133
            echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 133, $this->source); })()), "paginator", [], "any", false, false, false, 133), "links", [], "any", false, false, false, 133), "first", [], "any", false, false, false, 133), ["canonical" => true]);
            echo "\" />";
            // line 134
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 134), "links", [], "any", false, true, false, 134), "prev", [], "any", true, true, false, 134)) {
                echo "
    <link rel=\"prev\" href=\"";
                // line 135
                echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 135, $this->source); })()), "paginator", [], "any", false, false, false, 135), "links", [], "any", false, false, false, 135), "prev", [], "any", false, false, false, 135), ["canonical" => true]);
                echo "\" />";
            }
            // line 137
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "paginator", [], "any", false, true, false, 137), "links", [], "any", false, true, false, 137), "next", [], "any", true, true, false, 137)) {
                echo "
    <link rel=\"next\" href=\"";
                // line 138
                echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 138, $this->source); })()), "paginator", [], "any", false, false, false, 138), "links", [], "any", false, false, false, 138), "next", [], "any", false, false, false, 138), ["canonical" => true]);
                echo "\" />";
            }
            // line 139
            echo "
    <link rel=\"last\" href=\"";
            // line 140
            echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 140, $this->source); })()), "paginator", [], "any", false, false, false, 140), "links", [], "any", false, false, false, 140), "last", [], "any", false, false, false, 140), ["canonical" => true]);
            echo "\" />";
        }
        // line 143
        $this->loadTemplate("partials/alternates.html.twig", "partials/metatags.html.twig", 143)->display(twig_to_array(["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 143, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 143, $this->source); })())]));
        // line 144
        $this->loadTemplate("partials/feeds-from-section.html.twig", "partials/metatags.html.twig", 144)->display(twig_to_array(["title" => (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 144, $this->source); })()), "page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 144, $this->source); })())]));
        // line 146
        $this->loadTemplate("partials/alternates-languages.html.twig", "partials/metatags.html.twig", 146)->display(twig_to_array(["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 146, $this->source); })())]));
        // line 147
        echo "
    <meta property=\"og:locale\" content=\"";
        // line 148
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 148, $this->source); })()), "locale", [], "any", false, false, false, 148);
        echo "\" />
    <meta property=\"og:site_name\" content=\"";
        // line 149
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 149, $this->source); })()), "site_name", [], "any", false, false, false, 149);
        echo "\" />
    <meta property=\"og:type\" content=\"";
        // line 150
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 150, $this->source); })()), "type", [], "any", false, false, false, 150);
        echo "\" />
    <meta property=\"og:title\" content=\"";
        // line 151
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 151, $this->source); })()), "title", [], "any", false, false, false, 151);
        echo "\" />
    <meta property=\"og:description\" content=\"";
        // line 152
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 152, $this->source); })()), "description", [], "any", false, false, false, 152);
        echo "\" />
    <meta property=\"og:url\" content=\"";
        // line 153
        echo $this->extensions['Cecil\Renderer\Extension\Core']->url((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 153, $this->source); })()), ["canonical" => true]);
        echo "\" />";
        // line 154
        if (twig_get_attribute($this->env, $this->source, ($context["opengraph"] ?? null), "image", [], "any", true, true, false, 154)) {
            echo "
    <meta property=\"og:image\" content=\"";
            // line 155
            echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 155, $this->source); })()), "image", [], "any", false, false, false, 155), ["canonical" => true]);
            echo "\" />
    <meta property=\"og:image:type\" content=\"";
            // line 156
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 156, $this->source); })()), "image", [], "any", false, false, false, 156), "subtype", [], "any", false, false, false, 156);
            echo "\" />
    <meta property=\"og:image:width\" content=\"";
            // line 157
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 157, $this->source); })()), "image", [], "any", false, false, false, 157), "width", [], "any", false, false, false, 157);
            echo "\" />
    <meta property=\"og:image:height\" content=\"";
            // line 158
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 158, $this->source); })()), "image", [], "any", false, false, false, 158), "height", [], "any", false, false, false, 158);
            echo "\" />
    <meta property=\"og:image:alt\" content=\"";
            // line 159
            echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 159, $this->source); })()), "title", [], "any", false, false, false, 159);
            echo "\" />";
        }
        // line 162
        if (twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162)) {
            echo "
    <meta property=\"fb:profile_id\" content=\"";
            // line 163
            echo twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 163, $this->source); })()), "id", [], "any", false, false, false, 163);
            echo "\" />";
        }
        // line 165
        if (twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 165, $this->source); })()), "firstname", [], "any", false, false, false, 165)) {
            echo "
    <meta property=\"profile:first_name\" content=\"";
            // line 166
            echo twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 166, $this->source); })()), "firstname", [], "any", false, false, false, 166);
            echo "\" />";
        }
        // line 168
        if (twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 168, $this->source); })()), "lastname", [], "any", false, false, false, 168)) {
            echo "
    <meta property=\"profile:last_name\" content=\"";
            // line 169
            echo twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 169, $this->source); })()), "lastname", [], "any", false, false, false, 169);
            echo "\" />";
        }
        // line 171
        if (twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 171, $this->source); })()), "username", [], "any", false, false, false, 171)) {
            echo "
    <meta property=\"profile:username\" content=\"";
            // line 172
            echo twig_get_attribute($this->env, $this->source, (isset($context["facebook"]) || array_key_exists("facebook", $context) ? $context["facebook"] : (function () { throw new RuntimeError('Variable "facebook" does not exist.', 172, $this->source); })()), "username", [], "any", false, false, false, 172);
            echo "\" />";
        }
        // line 174
        echo "
    <meta name=\"twitter:title\" content=\"";
        // line 175
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 175, $this->source); })()), "title", [], "any", false, false, false, 175);
        echo "\" />
    <meta name=\"twitter:description\" content=\"";
        // line 176
        echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 176, $this->source); })()), "description", [], "any", false, false, false, 176);
        echo "\" />";
        // line 177
        if ((twig_get_attribute($this->env, $this->source, ($context["opengraph"] ?? null), "image", [], "any", true, true, false, 177) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 177, $this->source); })()), "image", [], "any", false, false, false, 177), "width", [], "any", false, false, false, 177) > 500))) {
            echo "
    <meta name=\"twitter:card\" content=\"summary_large_image\" />
    <meta name=\"twitter:image\" content=\"";
            // line 179
            echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 179, $this->source); })()), "image", [], "any", false, false, false, 179), ["canonical" => true]);
            echo "\" />
    <meta name=\"twitter:image:alt\" content=\"";
            // line 180
            echo twig_get_attribute($this->env, $this->source, (isset($context["opengraph"]) || array_key_exists("opengraph", $context) ? $context["opengraph"] : (function () { throw new RuntimeError('Variable "opengraph" does not exist.', 180, $this->source); })()), "title", [], "any", false, false, false, 180);
            echo "\" />";
        } else {
            // line 181
            echo "
    <meta name=\"twitter:card\" content=\"summary\" />";
        }
        // line 184
        if (twig_get_attribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 184, $this->source); })()), "site", [], "any", false, false, false, 184)) {
            echo "
    <meta name=\"twitter:site\" content=\"@";
            // line 185
            echo twig_get_attribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 185, $this->source); })()), "site", [], "any", false, false, false, 185);
            echo "\" />";
        }
        // line 187
        if (twig_get_attribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 187, $this->source); })()), "creator", [], "any", false, false, false, 187)) {
            echo "
    <meta name=\"twitter:creator\" content=\"@";
            // line 188
            echo twig_get_attribute($this->env, $this->source, (isset($context["twitter"]) || array_key_exists("twitter", $context) ? $context["twitter"] : (function () { throw new RuntimeError('Variable "twitter" does not exist.', 188, $this->source); })()), "creator", [], "any", false, false, false, 188);
            echo "\" />";
        }
        // line 190
        echo "
";
        // line 191
        $this->loadTemplate("partials/jsonld.js.twig", "partials/metatags.html.twig", 191)->display(twig_array_merge($context, ["author" => (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 191, $this->source); })()), "favicon_url" => ((array_key_exists("favicon_url", $context)) ? (_twig_default_filter((isset($context["favicon_url"]) || array_key_exists("favicon_url", $context) ? $context["favicon_url"] : (function () { throw new RuntimeError('Variable "favicon_url" does not exist.', 191, $this->source); })()), "")) : (""))]));
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 104
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 104, $this->source); })());
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 105
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 105, $this->source); })());
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "partials/metatags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 105,  423 => 104,  416 => 191,  413 => 190,  409 => 188,  405 => 187,  401 => 185,  397 => 184,  393 => 181,  389 => 180,  385 => 179,  380 => 177,  377 => 176,  373 => 175,  370 => 174,  366 => 172,  362 => 171,  358 => 169,  354 => 168,  350 => 166,  346 => 165,  342 => 163,  338 => 162,  334 => 159,  330 => 158,  326 => 157,  322 => 156,  318 => 155,  314 => 154,  311 => 153,  307 => 152,  303 => 151,  299 => 150,  295 => 149,  291 => 148,  288 => 147,  286 => 146,  284 => 144,  282 => 143,  278 => 140,  275 => 139,  271 => 138,  267 => 137,  263 => 135,  259 => 134,  256 => 133,  252 => 132,  248 => 129,  244 => 128,  240 => 126,  236 => 125,  215 => 119,  211 => 118,  209 => 117,  205 => 116,  201 => 115,  199 => 114,  196 => 112,  193 => 111,  189 => 110,  185 => 109,  181 => 107,  177 => 106,  174 => 105,  169 => 104,  165 => 99,  162 => 97,  160 => 96,  158 => 95,  156 => 91,  153 => 88,  151 => 87,  149 => 84,  148 => 83,  147 => 81,  144 => 78,  142 => 77,  139 => 75,  137 => 74,  134 => 72,  131 => 70,  128 => 68,  126 => 67,  124 => 66,  122 => 64,  121 => 60,  120 => 59,  119 => 58,  116 => 55,  114 => 54,  111 => 47,  109 => 46,  106 => 43,  104 => 42,  102 => 41,  98 => 37,  96 => 36,  93 => 34,  91 => 33,  89 => 32,  87 => 31,  85 => 29,  83 => 27,  77 => 21,  75 => 20,  73 => 19,  71 => 18,  69 => 17,  65 => 14,  63 => 13,  61 => 12,  59 => 11,  56 => 9,  54 => 8,  52 => 7,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# title #}
{% if title is not defined or title is empty %}
  {%- set title_divider = page.metatags.title.divider|default(site.metatags.title.divider|default(' &middot; ')) %}
  {%- set title_only = page.metatags.title.only|default(site.metatags.title.only|default(false)) %}
  {%- set title_pagination_shownumber = page.metatags.title.pagination.shownumber|default(site.metatags.title.pagination.shownumber ?? true) %}
  {%- set title_pagination_label = page.metatags.title.pagination.label|default(site.metatags.title.pagination.label|default('Page %s')) %}
  {%- set title = page.title|e ~ title_divider ~ site.title|e %}
  {%- if title_only %}
    {%- set title = page.title|e %}
  {%- endif %}
  {%- if page.type == 'homepage' %}
    {%- set title = site.title|e ~ title_divider ~ site.baseline|default('')|e %}
    {%- if title_only or site.baseline|default('') is empty %}
      {%- set title = site.title|e %}
    {%- endif %}
  {%- endif %}
  {%- if page.paginator.current|default(0) > 1 %}
    {%- if title_pagination_shownumber %}
      {%- set title = page.title|e ~ title_divider ~ title_pagination_label|format(page.paginator.current) ~ title_divider ~ site.title|e %}
      {%- if title_only %}
        {%- set title = page.title|e ~ title_divider ~ title_pagination_label|format(page.paginator.current) %}
      {%- endif %}
    {%- endif %}
  {%- endif %}
{% endif %}
{# description #}
{% set description = page.description|default(site.description)|e %}
{# keywords / tags #}
{% set keywords = page.tags|default([])|merge(site.keywords|default([]))|e %}
{# author #}
{% set author = page.author|default(site.author|default(''))|e %}
{% if author is not empty %}
  {%- if author is not iterable %}
    {%- set author = {'name': author} %}
  {%- endif %}
  {%- if author.firstname is defined and author.lastname is defined %}
    {%- set author = author|merge({'name': author.firstname|e ~ ' ' ~ author.lastname|e}) %}
  {%- endif %}
{% endif %}
{# robots #}
{% set robots = page.metatags.robots|default(site.metatags.robots|default('index,follow')) %}
{% if page.paginator.current|default(0) > 1 %}
  {%- set robots = 'noindex,follow' %}
{% endif %}
{# favicon #}
{% if site.metatags.favicon.enabled ?? true %}
  {%- set favicon_defaults = {
    'icon': [32, 57, 76, 96, 128, 192, 228],
    'shortcut icon': [196],
    'apple-touch-icon': [120, 152, 180],
  } -%}
{% endif %}
{# image #}
{% if image is not defined or image is empty %}
  {%- set image = page.image|default(site.image|default()) %}
{% endif %}
{# open graph #}
{% set opengraph = {
  'locale': site.language.locale,
  'site_name': site.title,
  'type': 'website',
  'title': block('title'),
  'description': block('description'),
  'url': url(page, {canonical: true}),
} %}
{% if image %}
  {%- if image is not asset %}
    {%- set image_asset = asset(image) %}
  {%- else %}
    {%- set image_asset = image %}
  {%- endif %}
  {%- set opengraph = opengraph|merge({'image': image_asset|resize(1200)}) %}
{% endif %}
{% if page.section == site.metatags.articles|default('Enseignants') %}
  {%- set opengraph = opengraph|merge({'type': 'article'}) %}
{% endif %}
{% if page.opengraph is defined or site.opengraph is defined %}
  {%- set opengraph = opengraph|merge(page.opengraph|default(site.opengraph)) %}
{% endif %}
{# Facebook #}
{% set facebook = {
  'id': '',
  'firstname': author.firstname|default(''),
  'lastname': author.lastname|default(''),
  'username': '',
} %}
{% if page.social.facebook is defined or site.social.facebook is defined %}
  {%- set facebook = facebook|merge(page.social.facebook|default(site.social.facebook)) %}
{% endif %}
{# Twitter #}
{% set twitter = {
  'site': '',
  'creator': '',
} %}
{% if page.social.twitter is defined or site.social.twitter is defined %}
  {%- if page.social.twitter|default(site.social.twitter) is not iterable %}
    {%- set twitter = twitter|merge({'site': page.social.twitter|default(site.social.twitter)}) %}
  {%- else %}
    {%- set twitter = twitter|merge(page.social.twitter|default(site.social.twitter)) %}
  {%- endif %}
{% endif %}

    {#- template #}
    <title>{% block title %}{{ title }}{% endblock %}</title>
    <meta name=\"description\" content=\"{% block description %}{{ description }}{% endblock %}\" />
{%- if keywords ~%}
    <meta name=\"keywords\" content=\"{{ keywords|join(', ') }}\" />
{%- endif ~%}
{%- if author ~%}
    <meta name=\"author\" content=\"{{ author.name|e }}\" />
{%- endif ~%}
    <meta name=\"robots\" content=\"{{ robots }}\" />
{#- template: favicon ~#}
{%- if site.metatags.favicon.enabled ?? true and asset(site.metatags.favicon.image|default('favicon.png'), {'ignore_missing': true}) is not empty ~%}
  {%- for favicon_variant, favicon_sizes in site.metatags.favicon.sizes|default(favicon_defaults) -%}
    {%- for size in favicon_sizes ~%}
      {%- set favicon_asset = asset(site.metatags.favicon.image|default('favicon.png'), {'ignore_missing': true}) -%}
      {%- if not favicon_asset.missing ~%}
    <link rel=\"{{ favicon_variant }}\" sizes=\"{{ size }}x{{ size }}\" href=\"{{ favicon_asset|resize(size)|url({canonical: true}) }}\" type=\"{{ favicon_asset.subtype }}\" />
      {%- endif -%}
    {%- endfor -%}
  {%- endfor -%}
{%- endif ~%}
{#- template: prev/next ~#}
{%- if page.prev.path is defined ~%}
    <link rel=\"prev\" href=\"{{ url(page.prev, {'canonical': true}) }}\" />
{%- endif -%}
{%- if page.next.path is defined ~%}
    <link rel=\"next\" href=\"{{ url(page.next, {'canonical': true}) }}\" />
{%- endif -%}
{#- template: paginator ~#}
{%- if page.paginator.pages is defined ~%}
    <link rel=\"first\" href=\"{{ url(page.paginator.links.first, {'canonical': true}) }}\" />
    {%- if page.paginator.links.prev is defined ~%}
    <link rel=\"prev\" href=\"{{ url(page.paginator.links.prev, {'canonical': true}) }}\" />
    {%- endif ~%}
    {%- if page.paginator.links.next is defined ~%}
    <link rel=\"next\" href=\"{{ url(page.paginator.links.next, {'canonical': true}) }}\" />
    {%- endif ~%}
    <link rel=\"last\" href=\"{{ url(page.paginator.links.last, {'canonical': true}) }}\" />
{%- endif -%}
{#- template: alternates ~#}
{%- include 'partials/alternates.html.twig' with {'title': title, 'page': page} only ~%}
{%- include 'partials/feeds-from-section.html.twig' with {'title': title, 'page': page} only ~%}
{#- template: alternates languages ~#}
{%- include 'partials/alternates-languages.html.twig' with {'page': page} only ~%}
{#- template: Open Graph ~#}
    <meta property=\"og:locale\" content=\"{{ opengraph.locale }}\" />
    <meta property=\"og:site_name\" content=\"{{ opengraph.site_name }}\" />
    <meta property=\"og:type\" content=\"{{ opengraph.type }}\" />
    <meta property=\"og:title\" content=\"{{ opengraph.title }}\" />
    <meta property=\"og:description\" content=\"{{ opengraph.description }}\" />
    <meta property=\"og:url\" content=\"{{ url(page, {canonical: true}) }}\" />
{%- if opengraph.image is defined ~%}
    <meta property=\"og:image\" content=\"{{ opengraph.image|url({canonical: true}) }}\" />
    <meta property=\"og:image:type\" content=\"{{ opengraph.image.subtype }}\" />
    <meta property=\"og:image:width\" content=\"{{ opengraph.image.width }}\" />
    <meta property=\"og:image:height\" content=\"{{ opengraph.image.height }}\" />
    <meta property=\"og:image:alt\" content=\"{{ opengraph.title }}\" />
{%- endif -%}
{#- template: Facebook ~#}
{%- if facebook.id ~%}
    <meta property=\"fb:profile_id\" content=\"{{ facebook.id }}\" />
{%- endif -%}
{%- if facebook.firstname ~%}
    <meta property=\"profile:first_name\" content=\"{{ facebook.firstname }}\" />
{%- endif -%}
{%- if facebook.lastname ~%}
    <meta property=\"profile:last_name\" content=\"{{ facebook.lastname }}\" />
{%- endif -%}
{%- if facebook.username ~%}
    <meta property=\"profile:username\" content=\"{{ facebook.username }}\" />
{%- endif ~%}
{#- template: Twitter ~#}
    <meta name=\"twitter:title\" content=\"{{ opengraph.title }}\" />
    <meta name=\"twitter:description\" content=\"{{ opengraph.description }}\" />
{%- if opengraph.image is defined and opengraph.image.width > 500 ~%}
    <meta name=\"twitter:card\" content=\"summary_large_image\" />
    <meta name=\"twitter:image\" content=\"{{ opengraph.image|url({canonical: true}) }}\" />
    <meta name=\"twitter:image:alt\" content=\"{{ opengraph.title }}\" />
{%- else ~%}
    <meta name=\"twitter:card\" content=\"summary\" />
{%- endif -%}
{%- if twitter.site ~%}
    <meta name=\"twitter:site\" content=\"@{{ twitter.site }}\" />
{%- endif -%}
{%- if twitter.creator ~%}
    <meta name=\"twitter:creator\" content=\"@{{ twitter.creator }}\" />
{%- endif ~%}
{#- template: json-ld ~#}
{%~ include 'partials/jsonld.js.twig' with {'author': author, 'favicon_url': favicon_url|default('')} %}", "partials/metatags.html.twig", "/var/www/html/IntranetDocumentation/layouts/partials/metatags.html.twig");
    }
}
