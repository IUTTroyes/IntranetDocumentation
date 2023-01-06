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

/* partials/navigation.html.twig */
class __TwigTemplate_ec46f0f871c48b27096721bb450eac25 extends Template
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
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navigation.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 1, $this->source); })())) > 1)) {
            echo "
      <nav>
        <ul>";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->extensions['Cecil\Renderer\Extension\Core']->sortByWeight(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 4, $this->source); })()), "menus", [], "any", false, false, false, 4), (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 4, $this->source); })()), [], "any", false, false, false, 4)), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "
          <li><a href=\"";
                // line 5
                echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 5));
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 5);
                echo "</a></li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "
        </ul>
      </nav>";
        }
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  51 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("      {%- if menu|length > 1 ~%}
      <nav>
        <ul>
          {%- for item in attribute(site.menus, menu)|sort_by_weight|slice(0,5) ~%}
          <li><a href=\"{{ url(item.url) }}\">{{ item.name }}</a></li>
          {%- endfor ~%}
        </ul>
      </nav>
      {%- endif ~%}", "partials/navigation.html.twig", "/var/www/html/IntranetDocumentation/layouts/partials/navigation.html.twig");
    }
}
