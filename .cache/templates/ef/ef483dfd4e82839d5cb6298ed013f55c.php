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

/* _default/vocabulary.html.twig */
class __TwigTemplate_b6c9cbdd84fa7a37698d798a6ac330ba extends Template
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
        // line 1
        return "_default/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_default/vocabulary.html.twig"));

        $this->parent = $this->loadTemplate("_default/page.html.twig", "_default/vocabulary.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a = $this->extensions["Twig\\Extension\\ProfilerExtension"];
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
      <ul>";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "terms", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            echo "
        <li>
          <h2><a href=\"";
            // line 8
            echo $this->extensions['Cecil\Renderer\Extension\Core']->url(((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 8, $this->source); })()), "path", [], "any", false, false, false, 8) . "/") . twig_get_attribute($this->env, $this->source, $context["term"], "id", [], "any", false, false, false, 8)));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["term"], "name", [], "any", false, false, false, 8);
            echo "</a> (";
            echo twig_length_filter($this->env, $context["term"]);
            echo ")</h2>
        </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
      </ul>";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "_default/vocabulary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  70 => 8,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '_default/page.html.twig' %}

      {%- block content ~%}
      {{- parent() ~}}
      <ul>
        {%- for term in page.terms ~%}
        <li>
          <h2><a href=\"{{ url(page.path ~ '/' ~ term.id) }}\">{{ term.name }}</a> ({{ term|length }})</h2>
        </li>
        {%- endfor ~%}
      </ul>
      {%- endblock ~%}", "_default/vocabulary.html.twig", "/var/www/html/IntranetDocumentation/layouts/_default/vocabulary.html.twig");
    }
}
