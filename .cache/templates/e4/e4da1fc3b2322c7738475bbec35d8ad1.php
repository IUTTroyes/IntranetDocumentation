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

/* partials/googleanalytics.js.twig */
class __TwigTemplate_6789cb0bbcd9226dc840058e99e8f44c extends Template
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
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/googleanalytics.js.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "googleanalytics", [], "any", true, true, false, 1)) {
            // line 2
            echo "    <!-- Google Analytics -->
    <script>";
            // line 3
            ob_start();
            // line 4
            echo "      window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
      ga('create', '";
            // line 5
            echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 5, $this->source); })()), "googleanalytics", [], "any", false, false, false, 5);
            echo "', 'auto');
      ga('send', 'pageview');
    ";
            $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 3
            echo $this->extensions['Cecil\Renderer\Extension\Core']->minifyJs($___internal_parse_2_);
            // line 7
            echo "</script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
";
        }
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "partials/googleanalytics.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  56 => 3,  50 => 5,  47 => 4,  45 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if site.googleanalytics is defined %}
    <!-- Google Analytics -->
    <script>{% apply minify_js %}
      window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
      ga('create', '{{ site.googleanalytics }}', 'auto');
      ga('send', 'pageview');
    {% endapply %}</script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
{% endif %}", "partials/googleanalytics.js.twig", "/var/www/html/IntranetDocumentation/layouts/partials/googleanalytics.js.twig");
    }
}
