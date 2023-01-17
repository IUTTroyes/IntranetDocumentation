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

/* partials/algolia.html.twig */
class __TwigTemplate_8dbea5395726d2677b54271bb75f51be extends Template
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
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/algolia.html.twig"));

        // line 1
        echo "<link
        rel=\"stylesheet\"
        href=\"https://cdn.jsdelivr.net/npm/@algolia/autocomplete-theme-classic\"
/>

<div id=\"autocomplete\"></div>

<script src=\"https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js\"></script>
<script>
    const { autocomplete } = window['@algolia/autocomplete-js'];

    // import '@algolia/autocomplete-theme-classic';
    //nouvelle version avec la nouvelle version. N'affiche pas encore les réponses. A gérer dans le tableau.
    autocomplete({
        container: '#autocomplete',
        placeholder: 'Search for products',
        getSources() {
            return [];
        },
    });
</script>



";
        // line 31
        echo "
";
        // line 45
        echo "
";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "partials/algolia.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 45,  66 => 31,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link
        rel=\"stylesheet\"
        href=\"https://cdn.jsdelivr.net/npm/@algolia/autocomplete-theme-classic\"
/>

<div id=\"autocomplete\"></div>

<script src=\"https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js\"></script>
<script>
    const { autocomplete } = window['@algolia/autocomplete-js'];

    // import '@algolia/autocomplete-theme-classic';
    //nouvelle version avec la nouvelle version. N'affiche pas encore les réponses. A gérer dans le tableau.
    autocomplete({
        container: '#autocomplete',
        placeholder: 'Search for products',
        getSources() {
            return [];
        },
    });
</script>



{#
Version originale qui fonctionne, mais avec ancien version de autocomplete.

<script>{% apply minify_js %}#}
{#  var client = algoliasearch('{{ site.algolia.application_id }}', '{{ site.algolia.search_api_key }}')#}
{#  var index = client.initIndex('{{ site.algolia.index }}')#}

{#  function newHitsSource(index, params) {#}
{#    return function doSearch(query, cb) {#}
{#      index#}
{#        .search(query, params)#}
{#        .then(function (res) {#}
{#          cb(res.hits, res)#}
{#        })#}
{#        .catch(function (err) {#}
{#          console.error(err)#}
{#          cb([])#}
{#        })#}
{#    }#}
{#  }#}

{#  autocomplete('#search-input', { hint: false }, [#}
{#    {#}
{#      source: newHitsSource(index, {#}
{#        hitsPerPage: 4,#}
{#        attributesToHighlight: ['page', 'title'],#}
{#        highlightPreTag: '<strong>',#}
{#        highlightPostTag: '</strong>',#}
{#        attributesToSnippet: ['description:25'],#}
{#        snippetEllipsisText: '…',#}
{#      }),#}
{#      displayKey: 'title',#}
{#      templates: {#}
{#        suggestion: function (suggestion) {#}
{#          return '<div class=\"aa-tpl-suggestion\">'#}
{#            + '  <div class=\"aa-tpl-title\">' + suggestion._highlightResult.title.value + '</div>'#}
{#            + '  <div class=\"aa-tpl-page\">' + suggestion._highlightResult.page.value + '</div>'#}
{#           // + '  <div class=\"aa-tpl-snippet\">' + suggestion._snippetResult.description.value + '</div>';#}
{#          +'</div>'#}
{#        },#}
{#        footer: '<span class=\"aa-tpl-footer\"><a href=\"https://algolia.com\" target=\"_blank\" title=\"Algolia - Hosted cloud search as a service\"><img src=\"\" width=\"120\" height=\"16\" alt=\"Algolia logo\"></a></span>',#}
{#      },#}
{#    },#}
{#  ]).on('autocomplete:selected', function (event, suggestion, dataset, context) {#}
{#    window.location.href = '{{ url() }}' + suggestion.href#}
{#  })#}
{#    {% endapply %}</script>#}
", "partials/algolia.html.twig", "/var/www/html/IntranetDocumentation/layouts/partials/algolia.html.twig");
    }
}
