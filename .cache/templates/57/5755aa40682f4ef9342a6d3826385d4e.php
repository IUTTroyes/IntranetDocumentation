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

/* redirect.html.twig */
class __TwigTemplate_9687037a191a041dce474992605426d6 extends Template
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
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "redirect.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head lang=\"";
        // line 3
        echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 3, $this->source); })()), "language", [], "any", false, false, false, 3);
        echo "\">
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Redirecting…", [], "messages");
        echo "</title>
    <link rel=\"canonical\" href=\"";
        // line 6
        echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 6, $this->source); })()), "redirect", [], "any", false, false, false, 6), ["canonical" => true]);
        echo "\" />
    <meta name=\"robots\" content=\"noindex\" />
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta http-equiv=\"refresh\" content=\"0;url=";
        // line 9
        echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "redirect", [], "any", false, false, false, 9), ["canonical" => true]);
        echo "\" />
    <script>
      window.location.assign(\"";
        // line 11
        echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 11, $this->source); })()), "redirect", [], "any", false, false, false, 11), ["canonical" => true]);
        echo "\");
    </script>
  </head>
  <body>
    <h1>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Redirecting…", [], "messages");
        echo "</h1>
    <a href=\"";
        // line 16
        echo $this->extensions['Cecil\Renderer\Extension\Core']->url(twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 16, $this->source); })()), "redirect", [], "any", false, false, false, 16));
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Click here if you are not redirected.", [], "messages");
        echo "</a>";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["site"] ?? null), "googleanalytics", [], "any", true, true, false, 17)) {
            echo "
    <script async src=\"https://www.googletagmanager.com/gtag/js?id=";
            // line 18
            echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 18, $this->source); })()), "googleanalytics", [], "any", false, false, false, 18);
            echo "\"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '";
            // line 23
            echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 23, $this->source); })()), "googleanalytics", [], "any", false, false, false, 23);
            echo "');
    </script>";
        }
        // line 25
        echo "
  </body>
</html>";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  92 => 23,  84 => 18,  80 => 17,  75 => 16,  71 => 15,  64 => 11,  59 => 9,  53 => 6,  49 => 5,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head lang=\"{{ site.language }}\">
    <meta charset=\"utf-8\">
    <title>{% trans %}Redirecting…{% endtrans %}</title>
    <link rel=\"canonical\" href=\"{{ url(page.redirect, {canonical: true}) }}\" />
    <meta name=\"robots\" content=\"noindex\" />
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta http-equiv=\"refresh\" content=\"0;url={{ url(page.redirect, {canonical: true}) }}\" />
    <script>
      window.location.assign(\"{{ url(page.redirect, {canonical: true}) }}\");
    </script>
  </head>
  <body>
    <h1>{% trans %}Redirecting…{% endtrans %}</h1>
    <a href=\"{{ url(page.redirect) }}\">{% trans %}Click here if you are not redirected.{% endtrans %}</a>
    {%- if site.googleanalytics is defined ~%}
    <script async src=\"https://www.googletagmanager.com/gtag/js?id={{ site.googleanalytics }}\"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '{{ site.googleanalytics }}');
    </script>
    {%- endif ~%}
  </body>
</html>", "redirect.html.twig", "/var/www/html/IntranetDocumentation/layouts/redirect.html.twig");
    }
}
