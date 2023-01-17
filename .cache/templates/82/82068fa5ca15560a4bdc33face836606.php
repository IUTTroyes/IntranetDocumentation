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
<script type=\"module\">
    import algoliasearch
        from 'https://cdn.jsdelivr.net/npm/algoliasearch@4.14.2/dist/algoliasearch-lite.esm.browser.js';

    const {autocomplete, getAlgoliaResults} = window['@algolia/autocomplete-js'];

    const searchClient = algoliasearch(
        'N15M8DWZID', // Application ID
        '1fef5e20747e117945db156d00df3b9a' // Search-Only API Key
    );

    //nouvelle version avec la nouvelle version. N'affiche pas encore les réponses. A gérer dans le tableau.
    //https://www.algolia.com/doc/ui-libraries/autocomplete/introduction/getting-started/
    autocomplete({
        container: '#autocomplete',
        placeholder: 'Rechercher dans la documentation',
        getSources({query}) {
            return [
                {
                    sourceId: 'intradoc',
                    getItems() {
                        return getAlgoliaResults({
                            searchClient,
                            queries: [
                                {
                                    indexName: 'intradoc',
                                    query, //saisie de l'utilisateur
                                    params: {
                                        hitsPerPage: 5,
                                    },
                                },
                            ],
                        });
                    },
                    getItemUrl({item}) {
                        return item.url;
                    },
                    templates: {
                        item({item, components, html}) {
                            return html`
                                <div class=\"aa-ItemWrapper\">
                                    <div class=\"aa-ItemContent\">
                                        <div class=\"aa-ItemContentBody\">
                                            <div class=\"aa-ItemContentTitle\">
                                                \${components.Snippet({
                                                    hit: item,
                                                    attribute: 'dossier',
                                                })}
                                            </div>
                                            <div class=\"aa-ItemContentDescription\">
                                                \${components.Snippet({
                                                    hit: item,
                                                    attribute: 'page',
                                                })}
                                            </div>
                                            <div class=\"aa-ItemContentDescription\">
                                                \${components.Highlight({
                                                    hit: item,
                                                    attribute: 'title',
                                                })}
                                            </div>
                                        </div>
                                        <div class=\"aa-ItemActions\">
                                            <button
                                                    class=\"aa-ItemActionButton aa-DesktopOnly aa-ActiveOnly\"
                                                    type=\"button\"
                                                    title=\"Select\"
                                            >
                                                <svg
                                                        viewBox=\"0 0 24 24\"
                                                        width=\"20\"
                                                        height=\"20\"
                                                        fill=\"currentColor\"
                                                >
                                                    <path
                                                            d=\"M18.984 6.984h2.016v6h-15.188l3.609 3.609-1.406 1.406-6-6 6-6 1.406 1.406-3.609 3.609h13.172v-4.031z\"
                                                    />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>`;
                        },
                    },
                },
            ];
        },
    });
</script>
";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "partials/algolia.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link
        rel=\"stylesheet\"
        href=\"https://cdn.jsdelivr.net/npm/@algolia/autocomplete-theme-classic\"
/>

<div id=\"autocomplete\"></div>

<script src=\"https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js\"></script>
<script type=\"module\">
    import algoliasearch
        from 'https://cdn.jsdelivr.net/npm/algoliasearch@4.14.2/dist/algoliasearch-lite.esm.browser.js';

    const {autocomplete, getAlgoliaResults} = window['@algolia/autocomplete-js'];

    const searchClient = algoliasearch(
        'N15M8DWZID', // Application ID
        '1fef5e20747e117945db156d00df3b9a' // Search-Only API Key
    );

    //nouvelle version avec la nouvelle version. N'affiche pas encore les réponses. A gérer dans le tableau.
    //https://www.algolia.com/doc/ui-libraries/autocomplete/introduction/getting-started/
    autocomplete({
        container: '#autocomplete',
        placeholder: 'Rechercher dans la documentation',
        getSources({query}) {
            return [
                {
                    sourceId: 'intradoc',
                    getItems() {
                        return getAlgoliaResults({
                            searchClient,
                            queries: [
                                {
                                    indexName: 'intradoc',
                                    query, //saisie de l'utilisateur
                                    params: {
                                        hitsPerPage: 5,
                                    },
                                },
                            ],
                        });
                    },
                    getItemUrl({item}) {
                        return item.url;
                    },
                    templates: {
                        item({item, components, html}) {
                            return html`
                                <div class=\"aa-ItemWrapper\">
                                    <div class=\"aa-ItemContent\">
                                        <div class=\"aa-ItemContentBody\">
                                            <div class=\"aa-ItemContentTitle\">
                                                \${components.Snippet({
                                                    hit: item,
                                                    attribute: 'dossier',
                                                })}
                                            </div>
                                            <div class=\"aa-ItemContentDescription\">
                                                \${components.Snippet({
                                                    hit: item,
                                                    attribute: 'page',
                                                })}
                                            </div>
                                            <div class=\"aa-ItemContentDescription\">
                                                \${components.Highlight({
                                                    hit: item,
                                                    attribute: 'title',
                                                })}
                                            </div>
                                        </div>
                                        <div class=\"aa-ItemActions\">
                                            <button
                                                    class=\"aa-ItemActionButton aa-DesktopOnly aa-ActiveOnly\"
                                                    type=\"button\"
                                                    title=\"Select\"
                                            >
                                                <svg
                                                        viewBox=\"0 0 24 24\"
                                                        width=\"20\"
                                                        height=\"20\"
                                                        fill=\"currentColor\"
                                                >
                                                    <path
                                                            d=\"M18.984 6.984h2.016v6h-15.188l3.609 3.609-1.406 1.406-6-6 6-6 1.406 1.406-3.609 3.609h13.172v-4.031z\"
                                                    />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>`;
                        },
                    },
                },
            ];
        },
    });
</script>
", "partials/algolia.html.twig", "/var/www/html/IntranetDocumentation/layouts/partials/algolia.html.twig");
    }
}
