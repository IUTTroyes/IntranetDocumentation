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

/* partials/new.css.twig */
class __TwigTemplate_9b3d207580cb032aef7d62aa9c47aa61 extends Template
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
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->enter($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/new.css.twig"));

        // line 1
        echo "/* source: https://github.com/xz/new.css/blob/80e7107b491b1062193331ae93ff3670c6a2398d/new.css */
:root {
    --nc-font-sans: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";
    --nc-font-mono: Consolas, monaco, 'Ubuntu Mono', 'Liberation Mono', 'Courier New', Courier, monospace;

    /* Light theme */
    --nc-tx-1: #000000;
    --nc-tx-2: #1A1A1A;
    --nc-bg-1: #f5f6fa;
    --nc-bg-2: #f3f4f6;
    --nc-bg-3: #d9d2e2;
    --nc-hr: #4f387d;
    --nc-lk-1: #282828;
    --nc-lk-2: #ffc44b;
    --nc-lk-bg: rgba(255, 255, 255, 0.2);
    --nc-lk-tx: #FFFFFF;
    --nc-ac-1: #4e377a;
    --nc-ac-2: #1b493f;
    --nc-ac-tx: #4f387d;
    --nc-toast: rgb(215 215 215 / 38%);
    --nc-miniLink: rgba(12, 12, 12, 0.67);
    --nc-hr-transp: rgba(84, 84, 84, 0.27);
    --nc-transp-bg: rgba(100, 89, 124, 0.4);

    /* Dark theme */
    --nc-d-tx-1: #f3f3f3;
    --nc-d-tx-2: #eeeeee;
    --nc-d-bg-1: #1a1523;
    --nc-d-bg-2: #130f1a;
    --nc-d-bg-3: rgba(100, 89, 124, 0.71);
    --nc-d-hr: #FFFFFF;
    --nc-d-lk-1: #f3f3f3;
    --nc-d-lk-2: #ffc44b;
    --nc-d-lk-bg: rgba(255, 255, 255, 0.2);
    --nc-d-lk-tx: #FFFFFF;
    --nc-d-ac-1: #ffce43;
    --nc-d-ac-2: #e8bb30;
    --nc-d-ac-tx: #FFFFFF;
    --nc-d-toast: rgb(215 215 215 / 38%);
    --nc-d-miniLink: #FFFFFFAA;
    --nc-d-hr-transp: rgba(248,249,250,.1215686275);
    --nc-d-transp-bg: rgba(248,249,250,.1215686275);
}

@media (prefers-color-scheme: dark) {
    :root {
        --nc-tx-1: var(--nc-d-tx-1);
        --nc-tx-2: var(--nc-d-tx-2);
        --nc-bg-1: var(--nc-d-bg-1);
        --nc-bg-2: var(--nc-d-bg-2);
        --nc-bg-3: var(--nc-d-bg-3);
        --nc-hr: var(--nc-d-hr);
        --nc-lk-1: var(--nc-d-lk-1);
        --nc-lk-2: var(--nc-d-lk-2);
        --nc-lk-bg: var(--nc-d-lk-bg);
        --nc-lk-tx: var(--nc-d-lk-tx);
        --nc-ac-1: var(--nc-d-ac-1);
        --nc-ac-2: var(--nc-d-ac-2);
        --nc-ac-tx: var(--nc-d-ac-tx);
        --nc-toast: var(--nc-d-toast);
        --nc-miniLink: var(--nc-d-miniLink);
        --nc-transp-bg: var(--nc-d-transp-bg);
        --nc-hr-transp: var(--nc-d-hr-transp);
    }
}

* {
    /* Reset margins and padding */
    margin: 0;
    padding: 0;
}

address,
area,
article,
aside,
audio,
blockquote,
datalist,
details,
dl,
fieldset,
figure,
form,
input,
iframe,
img,
meter,
nav,
ol,
optgroup,
option,
output,
p,
pre,
progress,
ruby,
section,
table,
textarea,
ul,
video {
    /* Margins for most elements */
    margin-bottom: 1rem;
}

html, input, select, button {
    /* Set body font family and some finicky elements */
    font-family: var(--nc-font-sans);
}

body {
    /* Center body in page */
    margin: 0 auto;
    overflow-x: hidden;
    word-break: break-word;
    overflow-wrap: break-word;
    background: var(--nc-bg-1);

    /* Main body text */
    color: var(--nc-tx-2);
    font-size: 1.03rem;
    line-height: 1.5;
}

::selection {
    /* Set background color for selected text */
    background: var(--nc-ac-1);
    color: var(--nc-ac-tx);
}

h1, h2, h3, h4, h5, h6 {
    line-height: 1;
    color: var(--nc-tx-1);
    padding-top: .875rem;
}

h1,
h2 {
    color: var(--nc-tx-1);
    padding-bottom: 2px;
    margin-bottom: 8px;
    border-bottom: 1px solid var(--nc-ac-1);
}

h4,
h5,
h6 {
    margin-bottom: .3rem;
}

h1 {
    font-size: 1.85rem;
}

h2 {
    font-size: 1.5rem;
}

h3 {
    font-size: 1.25rem;
}

h4 {
    font-size: 1.15rem;
}

h5 {
    font-size: 1rem;
}

h6 {
    font-size: .875rem;
}

a {
    color: var(--nc-lk-1);
}

a:hover {
    color: var(--nc-lk-2);
}

abbr:hover {
    /* Set the '?' cursor while hovering an abbreviation */
    cursor: help;
}

blockquote {
    padding: 1.5rem;
    background: var(--nc-bg-2);
    border-left: 5px solid var(--nc-bg-3);
}

abbr {
    cursor: help;
}

blockquote *:last-child {
    padding-bottom: 0;
    margin-bottom: 0;
}

header {
    height: 25vh;
    position: relative;
    background: var(--nc-bg-1);
    border-bottom: .5px solid var(--nc-hr);
    display: flex;
    flex-direction: column;
    padding: 0 50px;
}

header h1,
header h2,
header h3 {
    padding-bottom: 0;
    border-bottom: 0;
}

header > *:first-child {
    margin-top: 15px;
    padding-top: 0;
}

header > *:last-child {
    margin: 15px 0 0 0;
}

a button,
button,
input[type=\"submit\"],
input[type=\"reset\"],
input[type=\"button\"] {
    font-size: 1rem;
    display: inline-block;
    padding: 6px 12px;
    text-align: center;
    text-decoration: none;
    white-space: nowrap;
    background: var(--nc-lk-1);
    color: var(--nc-lk-tx);
    border: 0;
    border-radius: 4px;
    box-sizing: border-box;
    cursor: pointer;
    color: var(--nc-lk-tx);
}

a button[disabled],
button[disabled],
input[type=\"submit\"][disabled],
input[type=\"reset\"][disabled],
input[type=\"button\"][disabled] {
    cursor: default;
    opacity: .5;

    /* Set the [X] cursor while hovering a disabled link */
    cursor: not-allowed;
}

.button:focus,
.button:enabled:hover,
button:focus,
button:enabled:hover,
input[type=\"submit\"]:focus,
input[type=\"submit\"]:enabled:hover,
input[type=\"reset\"]:focus,
input[type=\"reset\"]:enabled:hover,
input[type=\"button\"]:focus,
a img {
    margin-bottom: 0px;
}

code,
pre,
kbd,
samp {
    /* Set the font family for monospaced elements */
    font-family: var(--nc-font-mono);
}

code,
samp,
kbd,
pre {
    /* The main preformatted style. This is changed slightly across different cases. */
    background: var(--nc-bg-2);
    border: 1px solid var(--nc-bg-3);
    border-radius: 4px;
    padding: 3px 6px;
    /* ↓ font-size is relative to containing element, so it scales for titles*/
    font-size: 0.9em;
}

kbd {
    /* Makes the kbd element look like a keyboard key */
    border-bottom: 3px solid var(--nc-bg-3);
}

pre {
    padding: 1rem 1.4rem;
    max-width: 100%;
    overflow: auto;
}

pre code {
    /* When <code> is in a <pre>, reset it's formatting to blend in */
    background: inherit;
    font-size: inherit;
    color: inherit;
    border: 0;
    padding: 0;
    margin: 0;
}

code pre {
    /* When <pre> is in a <code>, reset it's formatting to blend in */
    display: inline;
    background: inherit;
    font-size: inherit;
    color: inherit;
    border: 0;
    padding: 0;
    margin: 0;
}

details {
    /* Make the <details> look more \"clickable\" */
    padding: .6rem 1rem;
    background: var(--nc-bg-2);
    border: 1px solid var(--nc-bg-3);
    border-radius: 4px;
}

summary {
    /* Makes the <summary> look more like a \"clickable\" link with the pointer cursor */
    cursor: pointer;
    font-weight: bold;
}

details[open] {
    /* Adjust the <details> padding while open */
    padding-bottom: .75rem;
}

details[open] summary {
    /* Adjust the <details> padding while open */
    margin-bottom: 6px;
}

details[open] > *:last-child {
    /* Resets the bottom margin of the last element in the <details> while <details> is opened. This prevents double margins/paddings. */
    margin-bottom: 0;
}

dt {
    font-weight: bold;
}

dd::before {
    /* Add an arrow to data table definitions */
    content: '→ ';
}

";
        // line 372
        echo "
fieldset {
    margin-top: 1rem;
    padding: 2rem;
    border: 1px solid var(--nc-bg-3);
    border-radius: 4px;
}

legend {
    padding: auto .5rem;
}

table {
    /* border-collapse sets the table's elements to share borders, rather than floating as separate \"boxes\". */
    border-collapse: collapse;
    width: 100%
}

td,
th {
    border: 1px solid var(--nc-bg-3);
    text-align: left;
    padding: .5rem;
}

th {
    background: var(--nc-bg-2);
}

tr:nth-child(even) {
    /* Set every other cell slightly darker. Improves readability. */
    background: var(--nc-bg-2);
}

table caption {
    font-weight: bold;
    margin-bottom: .5rem;
}

textarea {
    /* Don't let the <textarea> extend off the screen naturally or when dragged by the user */
    max-width: 100%;
}

ol,
ul {
    /* Replace the browser default padding */
    padding-left: 2rem;
}

li {
    margin-top: .4rem;
}

ul ul,
ol ul,
ul ol,
ol ol {
    margin-bottom: 0;
}

mark {
    padding: 3px 6px;
    background: var(--nc-ac-1);
    color: var(--nc-ac-tx);
}

textarea,
select,
input {
    padding: 6px 12px;
    margin-bottom: .5rem;
    background: var(--nc-bg-2);
    color: var(--nc-tx-2);
    border: 1px solid var(--nc-bg-3);
    border-radius: 4px;
    box-shadow: none;
    box-sizing: border-box;
}

img {
    max-width: 100%;
}";
        
        $__internal_2b03fcd95a85c4310cf548a70fb8bc2a->leave($__internal_2b03fcd95a85c4310cf548a70fb8bc2a_prof);

    }

    public function getTemplateName()
    {
        return "partials/new.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  407 => 372,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/* source: https://github.com/xz/new.css/blob/80e7107b491b1062193331ae93ff3670c6a2398d/new.css */
:root {
    --nc-font-sans: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\";
    --nc-font-mono: Consolas, monaco, 'Ubuntu Mono', 'Liberation Mono', 'Courier New', Courier, monospace;

    /* Light theme */
    --nc-tx-1: #000000;
    --nc-tx-2: #1A1A1A;
    --nc-bg-1: #f5f6fa;
    --nc-bg-2: #f3f4f6;
    --nc-bg-3: #d9d2e2;
    --nc-hr: #4f387d;
    --nc-lk-1: #282828;
    --nc-lk-2: #ffc44b;
    --nc-lk-bg: rgba(255, 255, 255, 0.2);
    --nc-lk-tx: #FFFFFF;
    --nc-ac-1: #4e377a;
    --nc-ac-2: #1b493f;
    --nc-ac-tx: #4f387d;
    --nc-toast: rgb(215 215 215 / 38%);
    --nc-miniLink: rgba(12, 12, 12, 0.67);
    --nc-hr-transp: rgba(84, 84, 84, 0.27);
    --nc-transp-bg: rgba(100, 89, 124, 0.4);

    /* Dark theme */
    --nc-d-tx-1: #f3f3f3;
    --nc-d-tx-2: #eeeeee;
    --nc-d-bg-1: #1a1523;
    --nc-d-bg-2: #130f1a;
    --nc-d-bg-3: rgba(100, 89, 124, 0.71);
    --nc-d-hr: #FFFFFF;
    --nc-d-lk-1: #f3f3f3;
    --nc-d-lk-2: #ffc44b;
    --nc-d-lk-bg: rgba(255, 255, 255, 0.2);
    --nc-d-lk-tx: #FFFFFF;
    --nc-d-ac-1: #ffce43;
    --nc-d-ac-2: #e8bb30;
    --nc-d-ac-tx: #FFFFFF;
    --nc-d-toast: rgb(215 215 215 / 38%);
    --nc-d-miniLink: #FFFFFFAA;
    --nc-d-hr-transp: rgba(248,249,250,.1215686275);
    --nc-d-transp-bg: rgba(248,249,250,.1215686275);
}

@media (prefers-color-scheme: dark) {
    :root {
        --nc-tx-1: var(--nc-d-tx-1);
        --nc-tx-2: var(--nc-d-tx-2);
        --nc-bg-1: var(--nc-d-bg-1);
        --nc-bg-2: var(--nc-d-bg-2);
        --nc-bg-3: var(--nc-d-bg-3);
        --nc-hr: var(--nc-d-hr);
        --nc-lk-1: var(--nc-d-lk-1);
        --nc-lk-2: var(--nc-d-lk-2);
        --nc-lk-bg: var(--nc-d-lk-bg);
        --nc-lk-tx: var(--nc-d-lk-tx);
        --nc-ac-1: var(--nc-d-ac-1);
        --nc-ac-2: var(--nc-d-ac-2);
        --nc-ac-tx: var(--nc-d-ac-tx);
        --nc-toast: var(--nc-d-toast);
        --nc-miniLink: var(--nc-d-miniLink);
        --nc-transp-bg: var(--nc-d-transp-bg);
        --nc-hr-transp: var(--nc-d-hr-transp);
    }
}

* {
    /* Reset margins and padding */
    margin: 0;
    padding: 0;
}

address,
area,
article,
aside,
audio,
blockquote,
datalist,
details,
dl,
fieldset,
figure,
form,
input,
iframe,
img,
meter,
nav,
ol,
optgroup,
option,
output,
p,
pre,
progress,
ruby,
section,
table,
textarea,
ul,
video {
    /* Margins for most elements */
    margin-bottom: 1rem;
}

html, input, select, button {
    /* Set body font family and some finicky elements */
    font-family: var(--nc-font-sans);
}

body {
    /* Center body in page */
    margin: 0 auto;
    overflow-x: hidden;
    word-break: break-word;
    overflow-wrap: break-word;
    background: var(--nc-bg-1);

    /* Main body text */
    color: var(--nc-tx-2);
    font-size: 1.03rem;
    line-height: 1.5;
}

::selection {
    /* Set background color for selected text */
    background: var(--nc-ac-1);
    color: var(--nc-ac-tx);
}

h1, h2, h3, h4, h5, h6 {
    line-height: 1;
    color: var(--nc-tx-1);
    padding-top: .875rem;
}

h1,
h2 {
    color: var(--nc-tx-1);
    padding-bottom: 2px;
    margin-bottom: 8px;
    border-bottom: 1px solid var(--nc-ac-1);
}

h4,
h5,
h6 {
    margin-bottom: .3rem;
}

h1 {
    font-size: 1.85rem;
}

h2 {
    font-size: 1.5rem;
}

h3 {
    font-size: 1.25rem;
}

h4 {
    font-size: 1.15rem;
}

h5 {
    font-size: 1rem;
}

h6 {
    font-size: .875rem;
}

a {
    color: var(--nc-lk-1);
}

a:hover {
    color: var(--nc-lk-2);
}

abbr:hover {
    /* Set the '?' cursor while hovering an abbreviation */
    cursor: help;
}

blockquote {
    padding: 1.5rem;
    background: var(--nc-bg-2);
    border-left: 5px solid var(--nc-bg-3);
}

abbr {
    cursor: help;
}

blockquote *:last-child {
    padding-bottom: 0;
    margin-bottom: 0;
}

header {
    height: 25vh;
    position: relative;
    background: var(--nc-bg-1);
    border-bottom: .5px solid var(--nc-hr);
    display: flex;
    flex-direction: column;
    padding: 0 50px;
}

header h1,
header h2,
header h3 {
    padding-bottom: 0;
    border-bottom: 0;
}

header > *:first-child {
    margin-top: 15px;
    padding-top: 0;
}

header > *:last-child {
    margin: 15px 0 0 0;
}

a button,
button,
input[type=\"submit\"],
input[type=\"reset\"],
input[type=\"button\"] {
    font-size: 1rem;
    display: inline-block;
    padding: 6px 12px;
    text-align: center;
    text-decoration: none;
    white-space: nowrap;
    background: var(--nc-lk-1);
    color: var(--nc-lk-tx);
    border: 0;
    border-radius: 4px;
    box-sizing: border-box;
    cursor: pointer;
    color: var(--nc-lk-tx);
}

a button[disabled],
button[disabled],
input[type=\"submit\"][disabled],
input[type=\"reset\"][disabled],
input[type=\"button\"][disabled] {
    cursor: default;
    opacity: .5;

    /* Set the [X] cursor while hovering a disabled link */
    cursor: not-allowed;
}

.button:focus,
.button:enabled:hover,
button:focus,
button:enabled:hover,
input[type=\"submit\"]:focus,
input[type=\"submit\"]:enabled:hover,
input[type=\"reset\"]:focus,
input[type=\"reset\"]:enabled:hover,
input[type=\"button\"]:focus,
a img {
    margin-bottom: 0px;
}

code,
pre,
kbd,
samp {
    /* Set the font family for monospaced elements */
    font-family: var(--nc-font-mono);
}

code,
samp,
kbd,
pre {
    /* The main preformatted style. This is changed slightly across different cases. */
    background: var(--nc-bg-2);
    border: 1px solid var(--nc-bg-3);
    border-radius: 4px;
    padding: 3px 6px;
    /* ↓ font-size is relative to containing element, so it scales for titles*/
    font-size: 0.9em;
}

kbd {
    /* Makes the kbd element look like a keyboard key */
    border-bottom: 3px solid var(--nc-bg-3);
}

pre {
    padding: 1rem 1.4rem;
    max-width: 100%;
    overflow: auto;
}

pre code {
    /* When <code> is in a <pre>, reset it's formatting to blend in */
    background: inherit;
    font-size: inherit;
    color: inherit;
    border: 0;
    padding: 0;
    margin: 0;
}

code pre {
    /* When <pre> is in a <code>, reset it's formatting to blend in */
    display: inline;
    background: inherit;
    font-size: inherit;
    color: inherit;
    border: 0;
    padding: 0;
    margin: 0;
}

details {
    /* Make the <details> look more \"clickable\" */
    padding: .6rem 1rem;
    background: var(--nc-bg-2);
    border: 1px solid var(--nc-bg-3);
    border-radius: 4px;
}

summary {
    /* Makes the <summary> look more like a \"clickable\" link with the pointer cursor */
    cursor: pointer;
    font-weight: bold;
}

details[open] {
    /* Adjust the <details> padding while open */
    padding-bottom: .75rem;
}

details[open] summary {
    /* Adjust the <details> padding while open */
    margin-bottom: 6px;
}

details[open] > *:last-child {
    /* Resets the bottom margin of the last element in the <details> while <details> is opened. This prevents double margins/paddings. */
    margin-bottom: 0;
}

dt {
    font-weight: bold;
}

dd::before {
    /* Add an arrow to data table definitions */
    content: '→ ';
}

{#hr {#}
{#    /* Reset the border of the <hr> separator, then set a better line */#}
{#    border: 0;#}
{#    border-bottom: 1px solid var(--nc-bg-3);#}
{#    margin: 1rem auto;#}
{#}#}

fieldset {
    margin-top: 1rem;
    padding: 2rem;
    border: 1px solid var(--nc-bg-3);
    border-radius: 4px;
}

legend {
    padding: auto .5rem;
}

table {
    /* border-collapse sets the table's elements to share borders, rather than floating as separate \"boxes\". */
    border-collapse: collapse;
    width: 100%
}

td,
th {
    border: 1px solid var(--nc-bg-3);
    text-align: left;
    padding: .5rem;
}

th {
    background: var(--nc-bg-2);
}

tr:nth-child(even) {
    /* Set every other cell slightly darker. Improves readability. */
    background: var(--nc-bg-2);
}

table caption {
    font-weight: bold;
    margin-bottom: .5rem;
}

textarea {
    /* Don't let the <textarea> extend off the screen naturally or when dragged by the user */
    max-width: 100%;
}

ol,
ul {
    /* Replace the browser default padding */
    padding-left: 2rem;
}

li {
    margin-top: .4rem;
}

ul ul,
ol ul,
ul ol,
ol ol {
    margin-bottom: 0;
}

mark {
    padding: 3px 6px;
    background: var(--nc-ac-1);
    color: var(--nc-ac-tx);
}

textarea,
select,
input {
    padding: 6px 12px;
    margin-bottom: .5rem;
    background: var(--nc-bg-2);
    color: var(--nc-tx-2);
    border: 1px solid var(--nc-bg-3);
    border-radius: 4px;
    box-shadow: none;
    box-sizing: border-box;
}

img {
    max-width: 100%;
}", "partials/new.css.twig", "/var/www/html/IntranetDocumentation/layouts/partials/new.css.twig");
    }
}
