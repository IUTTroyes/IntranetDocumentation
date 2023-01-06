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

/* feed.xsl.twig */
class __TwigTemplate_7224a9de8347c1b19534f82a3b056416 extends Template
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
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "feed.xsl.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<xsl:stylesheet xmlns:xsl=\"http://www.w3.org/1999/XSL/Transform\" xmlns:atom=\"http://www.w3.org/2005/Atom\" version=\"3.0\">
  <xsl:output method=\"html\" version=\"1.0\" encoding=\"utf-8\" indent=\"yes\" />
  <xsl:template match=\"/\">
    <html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 5
        echo twig_get_attribute($this->env, $this->source, (isset($context["site"]) || array_key_exists("site", $context) ? $context["site"] : (function () { throw new RuntimeError('Variable "site" does not exist.', 5, $this->source); })()), "language", [], "any", false, false, false, 5);
        echo "\">
      <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width\" />";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 9, $this->source); })()), "path", [], "any", false, false, false, 9) == "xsl/atom")) {
            echo "
        <title><xsl:value-of select=\"atom:feed/atom:title\" /> (feed)</title>";
        } else {
            // line 11
            echo "
        <title><xsl:value-of select=\"rss/channel/title\" /> (RSS)</title>";
        }
        // line 13
        echo "
        <style type=\"text/css\">
          html {
            margin: 0;
            padding: 0;
          }
          body {
            margin: 1rem auto;
            padding: 1rem;
            max-width: 40rem;
            background-color: #EFF0F4;
            color: #586069;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 1rem;
            line-height: 1.5rem;
          }
          input {
            min-width: 100%;
            margin-left: .2rem;
            padding-left: .2rem;
            padding-right: .2rem;
          }
          ol {
            list-style-type: none;
              margin-left: -2.5rem;
          }
          li {
            margin: 1rem 0;
          }
          h2, h3 {
            margin: 0;
            color: #24292E;
            font-weight: inherit;
          }
          a {
            color: #0366d6;
            text-decoration: none;
          }
          small {
            color: #586069;
          }
          #RSSicon {
            margin-right: .5rem;
          }
          header {
            margin-bottom: 1rem;
            border-bottom: 1px solid #c7c7c7;
          }
          @-moz-document url-prefix() {
            form {
              margin-bottom: 1rem;
            }
          }
          footer {
            border-top: 1px solid #c7c7c7;
          }
          @media (min-width: 768px) {
            input {
              min-width: 20rem;
            }
          }
        </style>
      </head>
      <body>
        <header>
          <h1>
            <!-- https://commons.wikimedia.org/wiki/File:Feed-icon.svg -->
            <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" style=\"vertical-align: text-bottom; width: 1.2em; height: 1.2em;\" class=\"pr-1\" id=\"RSSicon\" viewBox=\"0 0 256 256\">
              <defs>
                <linearGradient x1=\"0.085\" y1=\"0.085\" x2=\"0.915\" y2=\"0.915\" id=\"RSSg\">
                  <stop offset=\"0.0\" stop-color=\"#E3702D\"/><stop offset=\"0.1071\" stop-color=\"#EA7D31\"/>
                  <stop offset=\"0.3503\" stop-color=\"#F69537\"/><stop offset=\"0.5\" stop-color=\"#FB9E3A\"/>
                  <stop offset=\"0.7016\" stop-color=\"#EA7C31\"/><stop offset=\"0.8866\" stop-color=\"#DE642B\"/>
                  <stop offset=\"1.0\" stop-color=\"#D95B29\"/>
                </linearGradient>
              </defs>
              <rect width=\"256\" height=\"256\" rx=\"55\" ry=\"55\" x=\"0\"  y=\"0\"  fill=\"#CC5D15\"/>
              <rect width=\"246\" height=\"246\" rx=\"50\" ry=\"50\" x=\"5\"  y=\"5\"  fill=\"#F49C52\"/>
              <rect width=\"236\" height=\"236\" rx=\"47\" ry=\"47\" x=\"10\" y=\"10\" fill=\"url(#RSSg)\"/>
              <circle cx=\"68\" cy=\"189\" r=\"24\" fill=\"#FFF\"/>
              <path d=\"M160 213h-34a82 82 0 0 0 -82 -82v-34a116 116 0 0 1 116 116z\" fill=\"#FFF\"/>
              <path d=\"M184 213A140 140 0 0 0 44 73 V 38a175 175 0 0 1 175 175z\" fill=\"#FFF\"/>
            </svg>";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 96, $this->source); })()), "path", [], "any", false, false, false, 96) == "xsl/atom")) {
            echo "
            <a><xsl:attribute name=\"href\"><xsl:value-of select=\"atom:feed/atom:link[@rel='alternate']/@href\" /></xsl:attribute><xsl:value-of select=\"atom:feed/atom:title\" /></a>";
        } else {
            // line 98
            echo "
            <a><xsl:attribute name=\"href\"><xsl:value-of select=\"rss/channel/link[@rel='alternate']/@href\" /></xsl:attribute><xsl:value-of select=\"rss/channel/title\" /></a>";
        }
        // line 100
        echo "
          </h1>
          <p>";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To subscribe to this web feed, copy its URL to your feed reader.", [], "messages");
        echo "</p>
          <form>
            <label for=\"feed-url\">";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Feed URL:", [], "messages");
        echo "</label>
            <input id=\"feed-url\" onClick=\"this.select();\">
              <xsl:attribute name=\"type\">url</xsl:attribute>
              <xsl:attribute name=\"url\">URL</xsl:attribute>
              <xsl:attribute name=\"spellcheck\">false</xsl:attribute>";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 109, $this->source); })()), "path", [], "any", false, false, false, 109) == "xsl/atom")) {
            echo "
              <xsl:attribute name=\"value\"><xsl:value-of select=\"atom:feed/atom:link[@rel='self']/@href\" /></xsl:attribute>";
        } else {
            // line 111
            echo "
              <xsl:attribute name=\"value\"><xsl:value-of select=\"rss/channel/link[@rel='self']/@href\" /></xsl:attribute>";
        }
        // line 113
        echo "
            </input>
          </form>
        </header>
        <article>
          <h2>";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Feed’s entries", [], "messages");
        echo "</h2>
          <ol>";
        // line 120
        if ((twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 120, $this->source); })()), "path", [], "any", false, false, false, 120) == "xsl/atom")) {
            echo "
            <xsl:for-each select=\"atom:feed/atom:entry\">
            <li>
              <h3><a><xsl:attribute name=\"href\"><xsl:value-of select=\"atom:link/@href\" /></xsl:attribute><xsl:value-of select=\"atom:title\" /></a></h3>
              <small><xsl:value-of select=\"substring(atom:published, 1, 10)\" /></small>
            </li>
            </xsl:for-each>";
        } else {
            // line 127
            echo "
            <xsl:for-each select=\"rss/channel/item\">
            <li>
              <h3><a><xsl:attribute name=\"href\"><xsl:value-of select=\"link/@href\" /></xsl:attribute><xsl:value-of select=\"title\" /></a></h3>
              <small><xsl:value-of select=\"substring(pubDate, 1, 10)\" /></small>
            </li>
            </xsl:for-each>";
        }
        // line 134
        echo "
          </ol>
        </article>
        <footer>";
        // line 138
        ob_start();
        // line 139
        echo "<a href=\"";
        echo twig_get_attribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 139, $this->source); })()), "url", [], "any", false, false, false, 139);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, (isset($context["cecil"]) || array_key_exists("cecil", $context) ? $context["cecil"] : (function () { throw new RuntimeError('Variable "cecil" does not exist.', 139, $this->source); })()), "poweredby", [], "any", false, false, false, 139);
        echo "</a>";
        $context["generated_by"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 140
        echo "
          <p>";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Feed generated by %generated_by%", ["%generated_by%" => (isset($context["generated_by"]) || array_key_exists("generated_by", $context) ? $context["generated_by"] : (function () { throw new RuntimeError('Variable "generated_by" does not exist.', 141, $this->source); })())], "messages");
        echo "</p>
        </footer>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "feed.xsl.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  223 => 140,  216 => 139,  214 => 138,  209 => 134,  200 => 127,  190 => 120,  186 => 118,  179 => 113,  175 => 111,  170 => 109,  163 => 104,  158 => 102,  154 => 100,  150 => 98,  145 => 96,  61 => 13,  57 => 11,  52 => 9,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<xsl:stylesheet xmlns:xsl=\"http://www.w3.org/1999/XSL/Transform\" xmlns:atom=\"http://www.w3.org/2005/Atom\" version=\"3.0\">
  <xsl:output method=\"html\" version=\"1.0\" encoding=\"utf-8\" indent=\"yes\" />
  <xsl:template match=\"/\">
    <html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"{{ site.language }}\">
      <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width\" />
        {%- if page.path == 'xsl/atom' ~%}
        <title><xsl:value-of select=\"atom:feed/atom:title\" /> (feed)</title>
        {%- else ~%}
        <title><xsl:value-of select=\"rss/channel/title\" /> (RSS)</title>
        {%- endif ~%}
        <style type=\"text/css\">
          html {
            margin: 0;
            padding: 0;
          }
          body {
            margin: 1rem auto;
            padding: 1rem;
            max-width: 40rem;
            background-color: #EFF0F4;
            color: #586069;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 1rem;
            line-height: 1.5rem;
          }
          input {
            min-width: 100%;
            margin-left: .2rem;
            padding-left: .2rem;
            padding-right: .2rem;
          }
          ol {
            list-style-type: none;
              margin-left: -2.5rem;
          }
          li {
            margin: 1rem 0;
          }
          h2, h3 {
            margin: 0;
            color: #24292E;
            font-weight: inherit;
          }
          a {
            color: #0366d6;
            text-decoration: none;
          }
          small {
            color: #586069;
          }
          #RSSicon {
            margin-right: .5rem;
          }
          header {
            margin-bottom: 1rem;
            border-bottom: 1px solid #c7c7c7;
          }
          @-moz-document url-prefix() {
            form {
              margin-bottom: 1rem;
            }
          }
          footer {
            border-top: 1px solid #c7c7c7;
          }
          @media (min-width: 768px) {
            input {
              min-width: 20rem;
            }
          }
        </style>
      </head>
      <body>
        <header>
          <h1>
            <!-- https://commons.wikimedia.org/wiki/File:Feed-icon.svg -->
            <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" style=\"vertical-align: text-bottom; width: 1.2em; height: 1.2em;\" class=\"pr-1\" id=\"RSSicon\" viewBox=\"0 0 256 256\">
              <defs>
                <linearGradient x1=\"0.085\" y1=\"0.085\" x2=\"0.915\" y2=\"0.915\" id=\"RSSg\">
                  <stop offset=\"0.0\" stop-color=\"#E3702D\"/><stop offset=\"0.1071\" stop-color=\"#EA7D31\"/>
                  <stop offset=\"0.3503\" stop-color=\"#F69537\"/><stop offset=\"0.5\" stop-color=\"#FB9E3A\"/>
                  <stop offset=\"0.7016\" stop-color=\"#EA7C31\"/><stop offset=\"0.8866\" stop-color=\"#DE642B\"/>
                  <stop offset=\"1.0\" stop-color=\"#D95B29\"/>
                </linearGradient>
              </defs>
              <rect width=\"256\" height=\"256\" rx=\"55\" ry=\"55\" x=\"0\"  y=\"0\"  fill=\"#CC5D15\"/>
              <rect width=\"246\" height=\"246\" rx=\"50\" ry=\"50\" x=\"5\"  y=\"5\"  fill=\"#F49C52\"/>
              <rect width=\"236\" height=\"236\" rx=\"47\" ry=\"47\" x=\"10\" y=\"10\" fill=\"url(#RSSg)\"/>
              <circle cx=\"68\" cy=\"189\" r=\"24\" fill=\"#FFF\"/>
              <path d=\"M160 213h-34a82 82 0 0 0 -82 -82v-34a116 116 0 0 1 116 116z\" fill=\"#FFF\"/>
              <path d=\"M184 213A140 140 0 0 0 44 73 V 38a175 175 0 0 1 175 175z\" fill=\"#FFF\"/>
            </svg>
            {%- if page.path == 'xsl/atom' ~%}
            <a><xsl:attribute name=\"href\"><xsl:value-of select=\"atom:feed/atom:link[@rel='alternate']/@href\" /></xsl:attribute><xsl:value-of select=\"atom:feed/atom:title\" /></a>
            {%- else ~%}
            <a><xsl:attribute name=\"href\"><xsl:value-of select=\"rss/channel/link[@rel='alternate']/@href\" /></xsl:attribute><xsl:value-of select=\"rss/channel/title\" /></a>
            {%- endif ~%}
          </h1>
          <p>{% trans %}To subscribe to this web feed, copy its URL to your feed reader.{% endtrans %}</p>
          <form>
            <label for=\"feed-url\">{% trans %}Feed URL:{% endtrans %}</label>
            <input id=\"feed-url\" onClick=\"this.select();\">
              <xsl:attribute name=\"type\">url</xsl:attribute>
              <xsl:attribute name=\"url\">URL</xsl:attribute>
              <xsl:attribute name=\"spellcheck\">false</xsl:attribute>
              {%- if page.path == 'xsl/atom' ~%}
              <xsl:attribute name=\"value\"><xsl:value-of select=\"atom:feed/atom:link[@rel='self']/@href\" /></xsl:attribute>
              {%- else ~%}
              <xsl:attribute name=\"value\"><xsl:value-of select=\"rss/channel/link[@rel='self']/@href\" /></xsl:attribute>
              {%- endif ~%}
            </input>
          </form>
        </header>
        <article>
          <h2>{% trans %}Feed’s entries{% endtrans %}</h2>
          <ol>
            {%- if page.path == 'xsl/atom' ~%}
            <xsl:for-each select=\"atom:feed/atom:entry\">
            <li>
              <h3><a><xsl:attribute name=\"href\"><xsl:value-of select=\"atom:link/@href\" /></xsl:attribute><xsl:value-of select=\"atom:title\" /></a></h3>
              <small><xsl:value-of select=\"substring(atom:published, 1, 10)\" /></small>
            </li>
            </xsl:for-each>
            {%- else ~%}
            <xsl:for-each select=\"rss/channel/item\">
            <li>
              <h3><a><xsl:attribute name=\"href\"><xsl:value-of select=\"link/@href\" /></xsl:attribute><xsl:value-of select=\"title\" /></a></h3>
              <small><xsl:value-of select=\"substring(pubDate, 1, 10)\" /></small>
            </li>
            </xsl:for-each>
            {%- endif ~%}
          </ol>
        </article>
        <footer>
          {%- set generated_by -%}
          <a href=\"{{ cecil.url }}\">{{ cecil.poweredby }}</a>
          {%- endset ~%}
          <p>{% trans %}Feed generated by %generated_by%{% endtrans %}</p>
        </footer>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>", "feed.xsl.twig", "/var/www/html/IntranetDocumentation/layouts/feed.xsl.twig");
    }
}
