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

/* @bundles/CoreBundle/Assets/css/libraries/libraries.css */
class __TwigTemplate_093747539d14fe1fa39c4e0df466d1881af0bda8c6c511295a09191b6a4e39c7 extends Template
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
        // line 1
        echo "/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background-color: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
mark {
  background: #ff0;
  color: #000;
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  box-sizing: content-box;
  height: 0;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type=\"button\"],
input[type=\"reset\"],
input[type=\"submit\"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
input {
  line-height: normal;
}
input[type=\"checkbox\"],
input[type=\"radio\"] {
  box-sizing: border-box;
  padding: 0;
}
input[type=\"number\"]::-webkit-inner-spin-button,
input[type=\"number\"]::-webkit-outer-spin-button {
  height: auto;
}
input[type=\"search\"] {
  -webkit-appearance: textfield;
  box-sizing: content-box;
}
input[type=\"search\"]::-webkit-search-cancel-button,
input[type=\"search\"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td,
th {
  padding: 0;
}
/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
@media print {
  *,
  *:before,
  *:after {
    background: transparent !important;
    color: #000 !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: \" (\" attr(href) \")\";
  }
  abbr[title]:after {
    content: \" (\" attr(title) \")\";
  }
  a[href^=\"#\"]:after,
  a[href^=\"javascript:\"]:after {
    content: \"\";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  .navbar {
    display: none;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('../fonts/icons/glyphicons-halflings-regular.eot');
  src: url('../fonts/icons/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/icons/glyphicons-halflings-regular.woff2') format('woff2'), url('../fonts/icons/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/icons/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/icons/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: \"\\002a\";
}
.glyphicon-plus:before {
  content: \"\\002b\";
}
.glyphicon-euro:before,
.glyphicon-eur:before {
  content: \"\\20ac\";
}
.glyphicon-minus:before {
  content: \"\\2212\";
}
.glyphicon-cloud:before {
  content: \"\\2601\";
}
.glyphicon-envelope:before {
  content: \"\\2709\";
}
.glyphicon-pencil:before {
  content: \"\\270f\";
}
.glyphicon-glass:before {
  content: \"\\e001\";
}
.glyphicon-music:before {
  content: \"\\e002\";
}
.glyphicon-search:before {
  content: \"\\e003\";
}
.glyphicon-heart:before {
  content: \"\\e005\";
}
.glyphicon-star:before {
  content: \"\\e006\";
}
.glyphicon-star-empty:before {
  content: \"\\e007\";
}
.glyphicon-user:before {
  content: \"\\e008\";
}
.glyphicon-film:before {
  content: \"\\e009\";
}
.glyphicon-th-large:before {
  content: \"\\e010\";
}
.glyphicon-th:before {
  content: \"\\e011\";
}
.glyphicon-th-list:before {
  content: \"\\e012\";
}
.glyphicon-ok:before {
  content: \"\\e013\";
}
.glyphicon-remove:before {
  content: \"\\e014\";
}
.glyphicon-zoom-in:before {
  content: \"\\e015\";
}
.glyphicon-zoom-out:before {
  content: \"\\e016\";
}
.glyphicon-off:before {
  content: \"\\e017\";
}
.glyphicon-signal:before {
  content: \"\\e018\";
}
.glyphicon-cog:before {
  content: \"\\e019\";
}
.glyphicon-trash:before {
  content: \"\\e020\";
}
.glyphicon-home:before {
  content: \"\\e021\";
}
.glyphicon-file:before {
  content: \"\\e022\";
}
.glyphicon-time:before {
  content: \"\\e023\";
}
.glyphicon-road:before {
  content: \"\\e024\";
}
.glyphicon-download-alt:before {
  content: \"\\e025\";
}
.glyphicon-download:before {
  content: \"\\e026\";
}
.glyphicon-upload:before {
  content: \"\\e027\";
}
.glyphicon-inbox:before {
  content: \"\\e028\";
}
.glyphicon-play-circle:before {
  content: \"\\e029\";
}
.glyphicon-repeat:before {
  content: \"\\e030\";
}
.glyphicon-refresh:before {
  content: \"\\e031\";
}
.glyphicon-list-alt:before {
  content: \"\\e032\";
}
.glyphicon-lock:before {
  content: \"\\e033\";
}
.glyphicon-flag:before {
  content: \"\\e034\";
}
.glyphicon-headphones:before {
  content: \"\\e035\";
}
.glyphicon-volume-off:before {
  content: \"\\e036\";
}
.glyphicon-volume-down:before {
  content: \"\\e037\";
}
.glyphicon-volume-up:before {
  content: \"\\e038\";
}
.glyphicon-qrcode:before {
  content: \"\\e039\";
}
.glyphicon-barcode:before {
  content: \"\\e040\";
}
.glyphicon-tag:before {
  content: \"\\e041\";
}
.glyphicon-tags:before {
  content: \"\\e042\";
}
.glyphicon-book:before {
  content: \"\\e043\";
}
.glyphicon-bookmark:before {
  content: \"\\e044\";
}
.glyphicon-print:before {
  content: \"\\e045\";
}
.glyphicon-camera:before {
  content: \"\\e046\";
}
.glyphicon-font:before {
  content: \"\\e047\";
}
.glyphicon-bold:before {
  content: \"\\e048\";
}
.glyphicon-italic:before {
  content: \"\\e049\";
}
.glyphicon-text-height:before {
  content: \"\\e050\";
}
.glyphicon-text-width:before {
  content: \"\\e051\";
}
.glyphicon-align-left:before {
  content: \"\\e052\";
}
.glyphicon-align-center:before {
  content: \"\\e053\";
}
.glyphicon-align-right:before {
  content: \"\\e054\";
}
.glyphicon-align-justify:before {
  content: \"\\e055\";
}
.glyphicon-list:before {
  content: \"\\e056\";
}
.glyphicon-indent-left:before {
  content: \"\\e057\";
}
.glyphicon-indent-right:before {
  content: \"\\e058\";
}
.glyphicon-facetime-video:before {
  content: \"\\e059\";
}
.glyphicon-picture:before {
  content: \"\\e060\";
}
.glyphicon-map-marker:before {
  content: \"\\e062\";
}
.glyphicon-adjust:before {
  content: \"\\e063\";
}
.glyphicon-tint:before {
  content: \"\\e064\";
}
.glyphicon-edit:before {
  content: \"\\e065\";
}
.glyphicon-share:before {
  content: \"\\e066\";
}
.glyphicon-check:before {
  content: \"\\e067\";
}
.glyphicon-move:before {
  content: \"\\e068\";
}
.glyphicon-step-backward:before {
  content: \"\\e069\";
}
.glyphicon-fast-backward:before {
  content: \"\\e070\";
}
.glyphicon-backward:before {
  content: \"\\e071\";
}
.glyphicon-play:before {
  content: \"\\e072\";
}
.glyphicon-pause:before {
  content: \"\\e073\";
}
.glyphicon-stop:before {
  content: \"\\e074\";
}
.glyphicon-forward:before {
  content: \"\\e075\";
}
.glyphicon-fast-forward:before {
  content: \"\\e076\";
}
.glyphicon-step-forward:before {
  content: \"\\e077\";
}
.glyphicon-eject:before {
  content: \"\\e078\";
}
.glyphicon-chevron-left:before {
  content: \"\\e079\";
}
.glyphicon-chevron-right:before {
  content: \"\\e080\";
}
.glyphicon-plus-sign:before {
  content: \"\\e081\";
}
.glyphicon-minus-sign:before {
  content: \"\\e082\";
}
.glyphicon-remove-sign:before {
  content: \"\\e083\";
}
.glyphicon-ok-sign:before {
  content: \"\\e084\";
}
.glyphicon-question-sign:before {
  content: \"\\e085\";
}
.glyphicon-info-sign:before {
  content: \"\\e086\";
}
.glyphicon-screenshot:before {
  content: \"\\e087\";
}
.glyphicon-remove-circle:before {
  content: \"\\e088\";
}
.glyphicon-ok-circle:before {
  content: \"\\e089\";
}
.glyphicon-ban-circle:before {
  content: \"\\e090\";
}
.glyphicon-arrow-left:before {
  content: \"\\e091\";
}
.glyphicon-arrow-right:before {
  content: \"\\e092\";
}
.glyphicon-arrow-up:before {
  content: \"\\e093\";
}
.glyphicon-arrow-down:before {
  content: \"\\e094\";
}
.glyphicon-share-alt:before {
  content: \"\\e095\";
}
.glyphicon-resize-full:before {
  content: \"\\e096\";
}
.glyphicon-resize-small:before {
  content: \"\\e097\";
}
.glyphicon-exclamation-sign:before {
  content: \"\\e101\";
}
.glyphicon-gift:before {
  content: \"\\e102\";
}
.glyphicon-leaf:before {
  content: \"\\e103\";
}
.glyphicon-fire:before {
  content: \"\\e104\";
}
.glyphicon-eye-open:before {
  content: \"\\e105\";
}
.glyphicon-eye-close:before {
  content: \"\\e106\";
}
.glyphicon-warning-sign:before {
  content: \"\\e107\";
}
.glyphicon-plane:before {
  content: \"\\e108\";
}
.glyphicon-calendar:before {
  content: \"\\e109\";
}
.glyphicon-random:before {
  content: \"\\e110\";
}
.glyphicon-comment:before {
  content: \"\\e111\";
}
.glyphicon-magnet:before {
  content: \"\\e112\";
}
.glyphicon-chevron-up:before {
  content: \"\\e113\";
}
.glyphicon-chevron-down:before {
  content: \"\\e114\";
}
.glyphicon-retweet:before {
  content: \"\\e115\";
}
.glyphicon-shopping-cart:before {
  content: \"\\e116\";
}
.glyphicon-folder-close:before {
  content: \"\\e117\";
}
.glyphicon-folder-open:before {
  content: \"\\e118\";
}
.glyphicon-resize-vertical:before {
  content: \"\\e119\";
}
.glyphicon-resize-horizontal:before {
  content: \"\\e120\";
}
.glyphicon-hdd:before {
  content: \"\\e121\";
}
.glyphicon-bullhorn:before {
  content: \"\\e122\";
}
.glyphicon-bell:before {
  content: \"\\e123\";
}
.glyphicon-certificate:before {
  content: \"\\e124\";
}
.glyphicon-thumbs-up:before {
  content: \"\\e125\";
}
.glyphicon-thumbs-down:before {
  content: \"\\e126\";
}
.glyphicon-hand-right:before {
  content: \"\\e127\";
}
.glyphicon-hand-left:before {
  content: \"\\e128\";
}
.glyphicon-hand-up:before {
  content: \"\\e129\";
}
.glyphicon-hand-down:before {
  content: \"\\e130\";
}
.glyphicon-circle-arrow-right:before {
  content: \"\\e131\";
}
.glyphicon-circle-arrow-left:before {
  content: \"\\e132\";
}
.glyphicon-circle-arrow-up:before {
  content: \"\\e133\";
}
.glyphicon-circle-arrow-down:before {
  content: \"\\e134\";
}
.glyphicon-globe:before {
  content: \"\\e135\";
}
.glyphicon-wrench:before {
  content: \"\\e136\";
}
.glyphicon-tasks:before {
  content: \"\\e137\";
}
.glyphicon-filter:before {
  content: \"\\e138\";
}
.glyphicon-briefcase:before {
  content: \"\\e139\";
}
.glyphicon-fullscreen:before {
  content: \"\\e140\";
}
.glyphicon-dashboard:before {
  content: \"\\e141\";
}
.glyphicon-paperclip:before {
  content: \"\\e142\";
}
.glyphicon-heart-empty:before {
  content: \"\\e143\";
}
.glyphicon-link:before {
  content: \"\\e144\";
}
.glyphicon-phone:before {
  content: \"\\e145\";
}
.glyphicon-pushpin:before {
  content: \"\\e146\";
}
.glyphicon-usd:before {
  content: \"\\e148\";
}
.glyphicon-gbp:before {
  content: \"\\e149\";
}
.glyphicon-sort:before {
  content: \"\\e150\";
}
.glyphicon-sort-by-alphabet:before {
  content: \"\\e151\";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: \"\\e152\";
}
.glyphicon-sort-by-order:before {
  content: \"\\e153\";
}
.glyphicon-sort-by-order-alt:before {
  content: \"\\e154\";
}
.glyphicon-sort-by-attributes:before {
  content: \"\\e155\";
}
.glyphicon-sort-by-attributes-alt:before {
  content: \"\\e156\";
}
.glyphicon-unchecked:before {
  content: \"\\e157\";
}
.glyphicon-expand:before {
  content: \"\\e158\";
}
.glyphicon-collapse-down:before {
  content: \"\\e159\";
}
.glyphicon-collapse-up:before {
  content: \"\\e160\";
}
.glyphicon-log-in:before {
  content: \"\\e161\";
}
.glyphicon-flash:before {
  content: \"\\e162\";
}
.glyphicon-log-out:before {
  content: \"\\e163\";
}
.glyphicon-new-window:before {
  content: \"\\e164\";
}
.glyphicon-record:before {
  content: \"\\e165\";
}
.glyphicon-save:before {
  content: \"\\e166\";
}
.glyphicon-open:before {
  content: \"\\e167\";
}
.glyphicon-saved:before {
  content: \"\\e168\";
}
.glyphicon-import:before {
  content: \"\\e169\";
}
.glyphicon-export:before {
  content: \"\\e170\";
}
.glyphicon-send:before {
  content: \"\\e171\";
}
.glyphicon-floppy-disk:before {
  content: \"\\e172\";
}
.glyphicon-floppy-saved:before {
  content: \"\\e173\";
}
.glyphicon-floppy-remove:before {
  content: \"\\e174\";
}
.glyphicon-floppy-save:before {
  content: \"\\e175\";
}
.glyphicon-floppy-open:before {
  content: \"\\e176\";
}
.glyphicon-credit-card:before {
  content: \"\\e177\";
}
.glyphicon-transfer:before {
  content: \"\\e178\";
}
.glyphicon-cutlery:before {
  content: \"\\e179\";
}
.glyphicon-header:before {
  content: \"\\e180\";
}
.glyphicon-compressed:before {
  content: \"\\e181\";
}
.glyphicon-earphone:before {
  content: \"\\e182\";
}
.glyphicon-phone-alt:before {
  content: \"\\e183\";
}
.glyphicon-tower:before {
  content: \"\\e184\";
}
.glyphicon-stats:before {
  content: \"\\e185\";
}
.glyphicon-sd-video:before {
  content: \"\\e186\";
}
.glyphicon-hd-video:before {
  content: \"\\e187\";
}
.glyphicon-subtitles:before {
  content: \"\\e188\";
}
.glyphicon-sound-stereo:before {
  content: \"\\e189\";
}
.glyphicon-sound-dolby:before {
  content: \"\\e190\";
}
.glyphicon-sound-5-1:before {
  content: \"\\e191\";
}
.glyphicon-sound-6-1:before {
  content: \"\\e192\";
}
.glyphicon-sound-7-1:before {
  content: \"\\e193\";
}
.glyphicon-copyright-mark:before {
  content: \"\\e194\";
}
.glyphicon-registration-mark:before {
  content: \"\\e195\";
}
.glyphicon-cloud-download:before {
  content: \"\\e197\";
}
.glyphicon-cloud-upload:before {
  content: \"\\e198\";
}
.glyphicon-tree-conifer:before {
  content: \"\\e199\";
}
.glyphicon-tree-deciduous:before {
  content: \"\\e200\";
}
.glyphicon-cd:before {
  content: \"\\e201\";
}
.glyphicon-save-file:before {
  content: \"\\e202\";
}
.glyphicon-open-file:before {
  content: \"\\e203\";
}
.glyphicon-level-up:before {
  content: \"\\e204\";
}
.glyphicon-copy:before {
  content: \"\\e205\";
}
.glyphicon-paste:before {
  content: \"\\e206\";
}
.glyphicon-alert:before {
  content: \"\\e209\";
}
.glyphicon-equalizer:before {
  content: \"\\e210\";
}
.glyphicon-king:before {
  content: \"\\e211\";
}
.glyphicon-queen:before {
  content: \"\\e212\";
}
.glyphicon-pawn:before {
  content: \"\\e213\";
}
.glyphicon-bishop:before {
  content: \"\\e214\";
}
.glyphicon-knight:before {
  content: \"\\e215\";
}
.glyphicon-baby-formula:before {
  content: \"\\e216\";
}
.glyphicon-tent:before {
  content: \"\\26fa\";
}
.glyphicon-blackboard:before {
  content: \"\\e218\";
}
.glyphicon-bed:before {
  content: \"\\e219\";
}
.glyphicon-apple:before {
  content: \"\\f8ff\";
}
.glyphicon-erase:before {
  content: \"\\e221\";
}
.glyphicon-hourglass:before {
  content: \"\\231b\";
}
.glyphicon-lamp:before {
  content: \"\\e223\";
}
.glyphicon-duplicate:before {
  content: \"\\e224\";
}
.glyphicon-piggy-bank:before {
  content: \"\\e225\";
}
.glyphicon-scissors:before {
  content: \"\\e226\";
}
.glyphicon-bitcoin:before {
  content: \"\\e227\";
}
.glyphicon-btc:before {
  content: \"\\e227\";
}
.glyphicon-xbt:before {
  content: \"\\e227\";
}
.glyphicon-yen:before {
  content: \"\\00a5\";
}
.glyphicon-jpy:before {
  content: \"\\00a5\";
}
.glyphicon-ruble:before {
  content: \"\\20bd\";
}
.glyphicon-rub:before {
  content: \"\\20bd\";
}
.glyphicon-scale:before {
  content: \"\\e230\";
}
.glyphicon-ice-lolly:before {
  content: \"\\e231\";
}
.glyphicon-ice-lolly-tasted:before {
  content: \"\\e232\";
}
.glyphicon-education:before {
  content: \"\\e233\";
}
.glyphicon-option-horizontal:before {
  content: \"\\e234\";
}
.glyphicon-option-vertical:before {
  content: \"\\e235\";
}
.glyphicon-menu-hamburger:before {
  content: \"\\e236\";
}
.glyphicon-modal-window:before {
  content: \"\\e237\";
}
.glyphicon-oil:before {
  content: \"\\e238\";
}
.glyphicon-grain:before {
  content: \"\\e239\";
}
.glyphicon-sunglasses:before {
  content: \"\\e240\";
}
.glyphicon-text-size:before {
  content: \"\\e241\";
}
.glyphicon-text-color:before {
  content: \"\\e242\";
}
.glyphicon-text-background:before {
  content: \"\\e243\";
}
.glyphicon-object-align-top:before {
  content: \"\\e244\";
}
.glyphicon-object-align-bottom:before {
  content: \"\\e245\";
}
.glyphicon-object-align-horizontal:before {
  content: \"\\e246\";
}
.glyphicon-object-align-left:before {
  content: \"\\e247\";
}
.glyphicon-object-align-vertical:before {
  content: \"\\e248\";
}
.glyphicon-object-align-right:before {
  content: \"\\e249\";
}
.glyphicon-triangle-right:before {
  content: \"\\e250\";
}
.glyphicon-triangle-left:before {
  content: \"\\e251\";
}
.glyphicon-triangle-bottom:before {
  content: \"\\e252\";
}
.glyphicon-triangle-top:before {
  content: \"\\e253\";
}
.glyphicon-console:before {
  content: \"\\e254\";
}
.glyphicon-superscript:before {
  content: \"\\e255\";
}
.glyphicon-subscript:before {
  content: \"\\e256\";
}
.glyphicon-menu-left:before {
  content: \"\\e257\";
}
.glyphicon-menu-right:before {
  content: \"\\e258\";
}
.glyphicon-menu-down:before {
  content: \"\\e259\";
}
.glyphicon-menu-up:before {
  content: \"\\e260\";
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
  font-size: 10px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: \"Open Sans\", Helvetica, Arial, sans-serif;
  font-size: 13px;
  line-height: 1.3856;
  color: #47535f;
  background-color: #f8f8f8;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #4E5D9D;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #3d497b;
  text-decoration: underline;
}
a:focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 4px;
}
.img-thumbnail {
  padding: 4px;
  line-height: 1.3856;
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  border-radius: 3px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 18px;
  margin-bottom: 18px;
  border: 0;
  border-top: 1px solid #ebedf0;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
[role=\"button\"] {
  cursor: pointer;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 400;
  line-height: 1.2;
  color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #a0acb8;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 18px;
  margin-bottom: 9px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 9px;
  margin-bottom: 9px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 33px;
}
h2,
.h2 {
  font-size: 27px;
}
h3,
.h3 {
  font-size: 20px;
}
h4,
.h4 {
  font-size: 16px;
}
h5,
.h5 {
  font-size: 14px;
}
h6,
.h6 {
  font-size: 13px;
}
p {
  margin: 0 0 9px;
}
.lead {
  margin-bottom: 18px;
  font-size: 14px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 19.5px;
  }
}
small,
.small {
  font-size: 84%;
}
mark,
.mark {
  background-color: #fcf8e3;
  padding: 0.2em;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-nowrap {
  white-space: nowrap;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-capitalize {
  text-transform: capitalize;
}
.text-muted {
  color: #a0acb8;
}
.text-primary {
  color: #4E5D9D;
}
a.text-primary:hover,
a.text-primary:focus {
  color: #3d497b;
}
.text-success {
  color: #3c763d;
}
a.text-success:hover,
a.text-success:focus {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
a.text-info:hover,
a.text-info:focus {
  color: #245269;
}
.text-warning {
  color: #8a6d3b;
}
a.text-warning:hover,
a.text-warning:focus {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
a.text-danger:hover,
a.text-danger:focus {
  color: #843534;
}
.bg-primary {
  color: #fff;
  background-color: #4E5D9D;
}
a.bg-primary:hover,
a.bg-primary:focus {
  background-color: #3d497b;
}
.bg-success {
  background-color: #dff0d8;
}
a.bg-success:hover,
a.bg-success:focus {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: #d9edf7;
}
a.bg-info:hover,
a.bg-info:focus {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:hover,
a.bg-warning:focus {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: #f2dede;
}
a.bg-danger:hover,
a.bg-danger:focus {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 8px;
  margin: 36px 0 18px;
  border-bottom: 1px solid #ebedf0;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 9px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
  margin-left: -5px;
}
.list-inline > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 18px;
}
dt,
dd {
  line-height: 1.3856;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
@media (min-width: 768px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #a0acb8;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 9px 18px;
  margin: 0 0 18px;
  font-size: 16.25px;
  border-left: 5px solid #ebedf0;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.3856;
  color: #a0acb8;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: '\\2014 \\00A0';
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #ebedf0;
  border-left: 0;
  text-align: right;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: '';
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: '\\00A0 \\2014';
}
address {
  margin-bottom: 18px;
  font-style: normal;
  line-height: 1.3856;
}
code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, \"Courier New\", monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 3px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #fff;
  background-color: #333;
  border-radius: 2px;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: bold;
  box-shadow: none;
}
pre {
  display: block;
  padding: 8.5px;
  margin: 0 0 9px;
  font-size: 12px;
  line-height: 1.3856;
  word-break: break-all;
  word-wrap: break-word;
  color: #3c4650;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 3px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
.container-fluid {
  margin-right: auto;
  margin-left: auto;
  padding-left: 15px;
  padding-right: 15px;
}
.row {
  margin-left: -15px;
  margin-right: -15px;
}
.col-xs-1,
.col-sm-1,
.col-md-1,
.col-lg-1,
.col-xs-2,
.col-sm-2,
.col-md-2,
.col-lg-2,
.col-xs-3,
.col-sm-3,
.col-md-3,
.col-lg-3,
.col-xs-4,
.col-sm-4,
.col-md-4,
.col-lg-4,
.col-xs-5,
.col-sm-5,
.col-md-5,
.col-lg-5,
.col-xs-6,
.col-sm-6,
.col-md-6,
.col-lg-6,
.col-xs-7,
.col-sm-7,
.col-md-7,
.col-lg-7,
.col-xs-8,
.col-sm-8,
.col-md-8,
.col-lg-8,
.col-xs-9,
.col-sm-9,
.col-md-9,
.col-lg-9,
.col-xs-10,
.col-sm-10,
.col-md-10,
.col-lg-10,
.col-xs-11,
.col-sm-11,
.col-md-11,
.col-lg-11,
.col-xs-12,
.col-sm-12,
.col-md-12,
.col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.col-xs-1,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9,
.col-xs-10,
.col-xs-11,
.col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0%;
}
@media (min-width: 768px) {
  .col-sm-1,
  .col-sm-2,
  .col-sm-3,
  .col-sm-4,
  .col-sm-5,
  .col-sm-6,
  .col-sm-7,
  .col-sm-8,
  .col-sm-9,
  .col-sm-10,
  .col-sm-11,
  .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 992px) {
  .col-md-1,
  .col-md-2,
  .col-md-3,
  .col-md-4,
  .col-md-5,
  .col-md-6,
  .col-md-7,
  .col-md-8,
  .col-md-9,
  .col-md-10,
  .col-md-11,
  .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0%;
  }
}
@media (min-width: 1200px) {
  .col-lg-1,
  .col-lg-2,
  .col-lg-3,
  .col-lg-4,
  .col-lg-5,
  .col-lg-6,
  .col-lg-7,
  .col-lg-8,
  .col-lg-9,
  .col-lg-10,
  .col-lg-11,
  .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0%;
  }
}
table {
  background-color: transparent;
}
caption {
  padding-top: 8px 15px;
  padding-bottom: 8px 15px;
  color: #a0acb8;
  text-align: left;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 18px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px 15px;
  line-height: 1.3856;
  vertical-align: top;
  border-top: 1px solid #ebedf0;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ebedf0;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ebedf0;
}
.table .table {
  background-color: #f8f8f8;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px 15px;
}
.table-bordered {
  border: 1px solid #ebedf0;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ebedf0;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #fafafa;
}
.table-hover > tbody > tr:hover {
  background-color: #fafafa;
}
table col[class*=\"col-\"] {
  position: static;
  float: none;
  display: table-column;
}
table td[class*=\"col-\"],
table th[class*=\"col-\"] {
  position: static;
  float: none;
  display: table-cell;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #fafafa;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #ededed;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.table-responsive {
  overflow-x: auto;
  min-height: 0.01%;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 13.5px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ebedf0;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  padding: 0;
  margin: 0;
  border: 0;
  min-width: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 18px;
  font-size: 19.5px;
  line-height: inherit;
  color: #3c4650;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type=\"search\"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
input[type=\"radio\"],
input[type=\"checkbox\"] {
  margin: 4px 0 0;
  margin-top: 1px \\9;
  line-height: normal;
}
input[type=\"file\"] {
  display: block;
}
input[type=\"range\"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type=\"file\"]:focus,
input[type=\"radio\"]:focus,
input[type=\"checkbox\"]:focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 13px;
  line-height: 1.3856;
  color: #596776;
}
.form-control {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.3856;
  color: #596776;
  background-color: #fff;
  background-image: none;
  border: 1px solid #d5d5d5;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #bcbcbc;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(188, 188, 188, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(188, 188, 188, 0.6);
}
.form-control::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999;
}
.form-control::-webkit-input-placeholder {
  color: #999;
}
.form-control::-ms-expand {
  border: 0;
  background-color: transparent;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #ebedf0;
  opacity: 1;
}
.form-control[disabled],
fieldset[disabled] .form-control {
  cursor: not-allowed;
}
textarea.form-control {
  height: auto;
}
input[type=\"search\"] {
  -webkit-appearance: none;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type=\"date\"].form-control,
  input[type=\"time\"].form-control,
  input[type=\"datetime-local\"].form-control,
  input[type=\"month\"].form-control {
    line-height: 32px;
  }
  input[type=\"date\"].input-sm,
  input[type=\"time\"].input-sm,
  input[type=\"datetime-local\"].input-sm,
  input[type=\"month\"].input-sm,
  .input-group-sm input[type=\"date\"],
  .input-group-sm input[type=\"time\"],
  .input-group-sm input[type=\"datetime-local\"],
  .input-group-sm input[type=\"month\"] {
    line-height: 28px;
  }
  input[type=\"date\"].input-lg,
  input[type=\"time\"].input-lg,
  input[type=\"datetime-local\"].input-lg,
  input[type=\"month\"].input-lg,
  .input-group-lg input[type=\"date\"],
  .input-group-lg input[type=\"time\"],
  .input-group-lg input[type=\"datetime-local\"],
  .input-group-lg input[type=\"month\"] {
    line-height: 42px;
  }
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.radio label,
.checkbox label {
  min-height: 18px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type=\"radio\"],
.radio-inline input[type=\"radio\"],
.checkbox input[type=\"checkbox\"],
.checkbox-inline input[type=\"checkbox\"] {
  position: absolute;
  margin-left: -20px;
  margin-top: 4px \\9;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
input[type=\"radio\"][disabled],
input[type=\"checkbox\"][disabled],
input[type=\"radio\"].disabled,
input[type=\"checkbox\"].disabled,
fieldset[disabled] input[type=\"radio\"],
fieldset[disabled] input[type=\"checkbox\"] {
  cursor: not-allowed;
}
.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.form-control-static {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
  min-height: 31px;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-left: 0;
  padding-right: 0;
}
.input-sm {
  height: 28px;
  padding: 5px 10px;
  font-size: 11px;
  line-height: 1.456;
  border-radius: 2px;
}
select.input-sm {
  height: 28px;
  line-height: 28px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.form-group-sm .form-control {
  height: 28px;
  padding: 5px 10px;
  font-size: 11px;
  line-height: 1.456;
  border-radius: 2px;
}
.form-group-sm select.form-control {
  height: 28px;
  line-height: 28px;
}
.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 28px;
  min-height: 29px;
  padding: 6px 10px;
  font-size: 11px;
  line-height: 1.456;
}
.input-lg {
  height: 42px;
  padding: 10px 16px;
  font-size: 16px;
  line-height: 1.25;
  border-radius: 4px;
}
select.input-lg {
  height: 42px;
  line-height: 42px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.form-group-lg .form-control {
  height: 42px;
  padding: 10px 16px;
  font-size: 16px;
  line-height: 1.25;
  border-radius: 4px;
}
.form-group-lg select.form-control {
  height: 42px;
  line-height: 42px;
}
.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 42px;
  min-height: 34px;
  padding: 11px 16px;
  font-size: 16px;
  line-height: 1.25;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 40px;
}
.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 32px;
  height: 32px;
  line-height: 32px;
  text-align: center;
  pointer-events: none;
}
.input-lg + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.form-group-lg .form-control + .form-control-feedback {
  width: 42px;
  height: 42px;
  line-height: 42px;
}
.input-sm + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.form-group-sm .form-control + .form-control-feedback {
  width: 28px;
  height: 28px;
  line-height: 28px;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success.radio label,
.has-success.checkbox label,
.has-success.radio-inline label,
.has-success.checkbox-inline label {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  border-color: #3c763d;
  background-color: #dff0d8;
}
.has-success .form-control-feedback {
  color: #3c763d;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning.radio label,
.has-warning.checkbox label,
.has-warning.radio-inline label,
.has-warning.checkbox-inline label {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  border-color: #8a6d3b;
  background-color: #fcf8e3;
}
.has-warning .form-control-feedback {
  color: #8a6d3b;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error.radio label,
.has-error.checkbox label,
.has-error.radio-inline label,
.has-error.checkbox-inline label {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  border-color: #a94442;
  background-color: #f2dede;
}
.has-error .form-control-feedback {
  color: #a94442;
}
.has-feedback label ~ .form-control-feedback {
  top: 23px;
}
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #8393a2;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-static {
    display: inline-block;
  }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .form-inline .input-group .input-group-addon,
  .form-inline .input-group .input-group-btn,
  .form-inline .input-group .form-control {
    width: auto;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio label,
  .form-inline .checkbox label {
    padding-left: 0;
  }
  .form-inline .radio input[type=\"radio\"],
  .form-inline .checkbox input[type=\"checkbox\"] {
    position: relative;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  margin-top: 0;
  margin-bottom: 0;
  padding-top: 7px;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 25px;
}
.form-horizontal .form-group {
  margin-left: -15px;
  margin-right: -15px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  right: 15px;
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 11px;
    font-size: 16px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
    font-size: 11px;
  }
}
.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: 600;
  text-align: center;
  vertical-align: middle;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.3856;
  border-radius: 3px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus,
.btn.focus {
  color: #5d6c7c;
  text-decoration: none;
}
.btn:active,
.btn.active {
  outline: 0;
  background-image: none;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  opacity: 0.65;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
}
a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}
.btn-default {
  color: #5d6c7c;
  background-color: #fff;
  border-color: #ddd;
}
.btn-default:focus,
.btn-default.focus {
  color: #5d6c7c;
  background-color: #e6e6e6;
  border-color: #9d9d9d;
}
.btn-default:hover {
  color: #5d6c7c;
  background-color: #e6e6e6;
  border-color: #bebebe;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #5d6c7c;
  background-color: #e6e6e6;
  border-color: #bebebe;
}
.btn-default:active:hover,
.btn-default.active:hover,
.open > .dropdown-toggle.btn-default:hover,
.btn-default:active:focus,
.btn-default.active:focus,
.open > .dropdown-toggle.btn-default:focus,
.btn-default:active.focus,
.btn-default.active.focus,
.open > .dropdown-toggle.btn-default.focus {
  color: #5d6c7c;
  background-color: #d4d4d4;
  border-color: #9d9d9d;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus {
  background-color: #fff;
  border-color: #ddd;
}
.btn-default .badge {
  color: #fff;
  background-color: #5d6c7c;
}
.btn-primary {
  color: #fff;
  background-color: #4E5D9D;
  border-color: #4E5D9D;
}
.btn-primary:focus,
.btn-primary.focus {
  color: #fff;
  background-color: #3d497b;
  border-color: #242b48;
}
.btn-primary:hover {
  color: #fff;
  background-color: #3d497b;
  border-color: #3a4574;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #3d497b;
  border-color: #3a4574;
}
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .dropdown-toggle.btn-primary.focus {
  color: #fff;
  background-color: #313b63;
  border-color: #242b48;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus {
  background-color: #4E5D9D;
  border-color: #4E5D9D;
}
.btn-primary .badge {
  color: #4E5D9D;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #00B49C;
  border-color: #00B49C;
}
.btn-success:focus,
.btn-success.focus {
  color: #fff;
  background-color: #008170;
  border-color: #00352e;
}
.btn-success:hover {
  color: #fff;
  background-color: #008170;
  border-color: #007767;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #008170;
  border-color: #007767;
}
.btn-success:active:hover,
.btn-success.active:hover,
.open > .dropdown-toggle.btn-success:hover,
.btn-success:active:focus,
.btn-success.active:focus,
.open > .dropdown-toggle.btn-success:focus,
.btn-success:active.focus,
.btn-success.active.focus,
.open > .dropdown-toggle.btn-success.focus {
  color: #fff;
  background-color: #005d51;
  border-color: #00352e;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus {
  background-color: #00B49C;
  border-color: #00B49C;
}
.btn-success .badge {
  color: #00B49C;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #35B4B9;
  border-color: #35B4B9;
}
.btn-info:focus,
.btn-info.focus {
  color: #fff;
  background-color: #2a8d91;
  border-color: #195456;
}
.btn-info:hover {
  color: #fff;
  background-color: #2a8d91;
  border-color: #278689;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #2a8d91;
  border-color: #278689;
}
.btn-info:active:hover,
.btn-info.active:hover,
.open > .dropdown-toggle.btn-info:hover,
.btn-info:active:focus,
.btn-info.active:focus,
.open > .dropdown-toggle.btn-info:focus,
.btn-info:active.focus,
.btn-info.active.focus,
.open > .dropdown-toggle.btn-info.focus {
  color: #fff;
  background-color: #227276;
  border-color: #195456;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus {
  background-color: #35B4B9;
  border-color: #35B4B9;
}
.btn-info .badge {
  color: #35B4B9;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #FDB933;
  border-color: #FDB933;
}
.btn-warning:focus,
.btn-warning.focus {
  color: #fff;
  background-color: #fba702;
  border-color: #af7502;
}
.btn-warning:hover {
  color: #fff;
  background-color: #fba702;
  border-color: #f0a002;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #fba702;
  border-color: #f0a002;
}
.btn-warning:active:hover,
.btn-warning.active:hover,
.open > .dropdown-toggle.btn-warning:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open > .dropdown-toggle.btn-warning:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open > .dropdown-toggle.btn-warning.focus {
  color: #fff;
  background-color: #d78f02;
  border-color: #af7502;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus {
  background-color: #FDB933;
  border-color: #FDB933;
}
.btn-warning .badge {
  color: #FDB933;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #F86B4F;
  border-color: #F86B4F;
}
.btn-danger:focus,
.btn-danger.focus {
  color: #fff;
  background-color: #f6421e;
  border-color: #c02608;
}
.btn-danger:hover {
  color: #fff;
  background-color: #f6421e;
  border-color: #f63a14;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #f6421e;
  border-color: #f63a14;
}
.btn-danger:active:hover,
.btn-danger.active:hover,
.open > .dropdown-toggle.btn-danger:hover,
.btn-danger:active:focus,
.btn-danger.active:focus,
.open > .dropdown-toggle.btn-danger:focus,
.btn-danger:active.focus,
.btn-danger.active.focus,
.open > .dropdown-toggle.btn-danger.focus {
  color: #fff;
  background-color: #e72e09;
  border-color: #c02608;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus {
  background-color: #F86B4F;
  border-color: #F86B4F;
}
.btn-danger .badge {
  color: #F86B4F;
  background-color: #fff;
}
.btn-link {
  color: #4E5D9D;
  font-weight: normal;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link.active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #3d497b;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #a0acb8;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 16px;
  line-height: 1.25;
  border-radius: 4px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 11px;
  line-height: 1.456;
  border-radius: 2px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 11px;
  line-height: 1.456;
  border-radius: 2px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type=\"submit\"].btn-block,
input[type=\"reset\"].btn-block,
input[type=\"button\"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-property: height, visibility;
  transition-property: height, visibility;
  -webkit-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-timing-function: ease;
  transition-timing-function: ease;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid \\9;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropup,
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 13px;
  text-align: left;
  background-color: #fff;
  border: 1px solid #eee;
  border: 1px solid rgba(0, 0, 0, 0.06);
  border-radius: 3px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 8px 0;
  overflow: hidden;
  background-color: #eaeaea;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.3856;
  color: #47535f;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  text-decoration: none;
  color: #3c4650;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  background-color: #4E5D9D;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #a0acb8;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  cursor: not-allowed;
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  left: auto;
  right: 0;
}
.dropdown-menu-left {
  left: 0;
  right: auto;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 11px;
  line-height: 1.3856;
  color: #a0acb8;
  white-space: nowrap;
}
.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  border-top: 0;
  border-bottom: 4px dashed;
  border-bottom: 4px solid \\9;
  content: \"\";
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    left: auto;
    right: 0;
  }
  .navbar-right .dropdown-menu-left {
    left: 0;
    right: auto;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn,
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  float: none;
  display: table-cell;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
[data-toggle=\"buttons\"] > .btn input[type=\"radio\"],
[data-toggle=\"buttons\"] > .btn-group > .btn input[type=\"radio\"],
[data-toggle=\"buttons\"] > .btn input[type=\"checkbox\"],
[data-toggle=\"buttons\"] > .btn-group > .btn input[type=\"checkbox\"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*=\"col-\"] {
  float: none;
  padding-left: 0;
  padding-right: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group .form-control:focus {
  z-index: 3;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 42px;
  padding: 10px 16px;
  font-size: 16px;
  line-height: 1.25;
  border-radius: 4px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 42px;
  line-height: 42px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 28px;
  padding: 5px 10px;
  font-size: 11px;
  line-height: 1.456;
  border-radius: 2px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 28px;
  line-height: 28px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 13px;
  font-weight: normal;
  line-height: 1;
  color: #596776;
  text-align: center;
  background-color: #ebedf0;
  border: 1px solid #d5d5d5;
  border-radius: 3px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 11px;
  border-radius: 2px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 16px;
  border-radius: 4px;
}
.input-group-addon input[type=\"radio\"],
.input-group-addon input[type=\"checkbox\"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  z-index: 2;
  margin-left: -1px;
}
.nav {
  margin-bottom: 0;
  padding-left: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 18px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #f0f0f0;
}
.nav > li.disabled > a {
  color: #a0acb8;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #a0acb8;
  text-decoration: none;
  background-color: transparent;
  cursor: not-allowed;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #f0f0f0;
  border-color: #4E5D9D;
}
.nav .nav-divider {
  height: 1px;
  margin: 8px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ebedf0;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.3856;
  border: 1px solid transparent;
  border-radius: 3px 3px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #ebedf0;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #596776;
  background-color: #f8f8f8;
  border: 1px solid #ebedf0;
  border-bottom-color: transparent;
  cursor: default;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 3px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 3px 3px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #f8f8f8;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 3px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #4E5D9D;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  text-align: center;
  margin-bottom: 5px;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 3px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 3px 3px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #f8f8f8;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 18px;
  border: 1px solid transparent;
}
@media (min-width: 768px) {
  .navbar {
    border-radius: 3px;
  }
}
@media (min-width: 768px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  overflow-x: visible;
  padding-right: 15px;
  padding-left: 15px;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch;
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 768px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-left: 0;
    padding-right: 0;
  }
}
.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
@media (max-device-width: 480px) and (orientation: landscape) {
  .navbar-fixed-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px;
  }
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 768px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
@media (min-width: 768px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  padding: 16px 15px;
  font-size: 16px;
  line-height: 18px;
  height: 50px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
.navbar-brand > img {
  display: block;
}
@media (min-width: 768px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  margin-right: 15px;
  padding: 9px 10px;
  margin-top: 8px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 3px;
}
.navbar-toggle:focus {
  outline: 0;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 768px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 8px -15px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 18px;
}
@media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 18px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 768px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 16px;
    padding-bottom: 16px;
  }
}
.navbar-form {
  margin-left: -15px;
  margin-right: -15px;
  padding: 10px 15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: 9px;
  margin-bottom: 9px;
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .form-control-static {
    display: inline-block;
  }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn,
  .navbar-form .input-group .form-control {
    width: auto;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio label,
  .navbar-form .checkbox label {
    padding-left: 0;
  }
  .navbar-form .radio input[type=\"radio\"],
  .navbar-form .checkbox input[type=\"checkbox\"] {
    position: relative;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
.navbar-form .chosen-container {
  display: inline-table;
  vertical-align: middle;
  min-width: 200px;
}
@media (max-width: 767px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
  .navbar-form .form-group:last-child {
    margin-bottom: 0;
  }
}
@media (min-width: 768px) {
  .navbar-form {
    width: auto;
    border: 0;
    margin-left: 0;
    margin-right: 0;
    padding-top: 0;
    padding-bottom: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: 9px;
  margin-bottom: 9px;
}
.navbar-btn.btn-sm {
  margin-top: 11px;
  margin-bottom: 11px;
}
.navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px;
}
.navbar-text {
  margin-top: 16px;
  margin-bottom: 16px;
}
@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-left: 15px;
    margin-right: 15px;
  }
}
@media (min-width: 768px) {
  .navbar-left {
    float: left !important;
    float: left;
  }
  .navbar-right {
    float: right !important;
    float: right;
    margin-right: -15px;
  }
  .navbar-right ~ .navbar-right {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  background-color: #e7e7e7;
  color: #555;
}
@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.navbar-default .btn-link {
  color: #777;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #333;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: #ccc;
}
.navbar-inverse {
  background-color: #222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #cbd2d8;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #cbd2d8;
}
.navbar-inverse .navbar-nav > li > a {
  color: #cbd2d8;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #fff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  background-color: #080808;
  color: #fff;
}
@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #cbd2d8;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #cbd2d8;
}
.navbar-inverse .navbar-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link {
  color: #cbd2d8;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #fff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 18px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 3px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  content: \"/\\00a0\";
  padding: 0 5px;
  color: #ccc;
}
.breadcrumb > .active {
  color: #a0acb8;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 18px 0;
  border-radius: 3px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.3856;
  text-decoration: none;
  color: #4E5D9D;
  background-color: #fff;
  border: 1px solid #ddd;
  margin-left: -1px;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  z-index: 2;
  color: #3d497b;
  background-color: #ebedf0;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 3;
  color: #3d497b;
  background-color: #ebedf0;
  border-color: #ddd;
  cursor: default;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #a0acb8;
  background-color: #fff;
  border-color: #ddd;
  cursor: not-allowed;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 16px;
  line-height: 1.25;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 11px;
  line-height: 1.456;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: 2px;
  border-top-left-radius: 2px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: 2px;
  border-top-right-radius: 2px;
}
.pager {
  padding-left: 0;
  margin: 18px 0;
  list-style: none;
  text-align: center;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #ebedf0;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #a0acb8;
  background-color: #fff;
  cursor: not-allowed;
}
.label {
  display: inline;
  padding: 0.2em 0.6em 0.3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25em;
}
a.label:hover,
a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #a0acb8;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #8392a2;
}
.label-primary {
  background-color: #4E5D9D;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #3d497b;
}
.label-success {
  background-color: #00B49C;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #008170;
}
.label-info {
  background-color: #35B4B9;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #2a8d91;
}
.label-warning {
  background-color: #FDB933;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #fba702;
}
.label-danger {
  background-color: #F86B4F;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #f6421e;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 11px;
  font-weight: 400;
  color: #fff;
  line-height: 18px;
  vertical-align: middle;
  white-space: nowrap;
  text-align: center;
  background-color: #a0acb8;
  border-radius: 9px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge,
.btn-group-xs > .btn .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #4E5D9D;
  background-color: #fff;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.label-as-badge {
  border-radius: 9px !important;
}
.jumbotron {
  padding-top: 30px;
  padding-bottom: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #ebedf0;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 20px;
  font-weight: 200;
}
.jumbotron > hr {
  border-top-color: #cdd4da;
}
.container .jumbotron,
.container-fluid .jumbotron {
  border-radius: 4px;
  padding-left: 15px;
  padding-right: 15px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px;
  }
  .container .jumbotron,
  .container-fluid .jumbotron {
    padding-left: 60px;
    padding-right: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 59px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 18px;
  line-height: 1.3856;
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  border-radius: 3px;
  -webkit-transition: border 0.2s ease-in-out;
  -o-transition: border 0.2s ease-in-out;
  transition: border 0.2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-left: auto;
  margin-right: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #4E5D9D;
}
.thumbnail .caption {
  padding: 9px;
  color: #47535f;
}
.alert {
  padding: 15px;
  margin-bottom: 18px;
  border: 1px solid transparent;
  border-radius: 3px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #3c763d;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #31708f;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  background-color: #fcf8e3;
  border-color: #faebcc;
  color: #8a6d3b;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  background-color: #f2dede;
  border-color: #ebccd1;
  color: #a94442;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  overflow: hidden;
  height: 18px;
  margin-bottom: 18px;
  background-color: #f5f5f5;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 11px;
  line-height: 18px;
  color: #fff;
  text-align: center;
  background-color: #4E5D9D;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #00B49C;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #35B4B9;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #FDB933;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #F86B4F;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media,
.media-body {
  zoom: 1;
  overflow: hidden;
}
.media-body {
  width: 10000px;
}
.media-object {
  display: block;
}
.media-object.img-thumbnail {
  max-width: none;
}
.media-right,
.media > .pull-right {
  padding-left: 10px;
}
.media-left,
.media > .pull-left {
  padding-right: 10px;
}
.media-left,
.media-right,
.media-body {
  display: table-cell;
  vertical-align: top;
}
.media-middle {
  vertical-align: middle;
}
.media-bottom {
  vertical-align: bottom;
}
.media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
form[name=\"lead\"] .media-body {
  width: 100%;
}
.media-list .media-body {
  width: auto;
}
.media-list .media-object {
  padding-right: 0;
  margin-right: 10px;
}
.list-group {
  margin-bottom: 20px;
  padding-left: 0;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: transparent;
  border: 1px solid #ebedf0;
}
.list-group-item:first-child {
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
a.list-group-item,
button.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading,
button.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:hover,
button.list-group-item:hover,
a.list-group-item:focus,
button.list-group-item:focus {
  text-decoration: none;
  color: #555;
  background-color: #f5f5f5;
}
button.list-group-item {
  width: 100%;
  text-align: left;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  background-color: #ebedf0;
  color: #a0acb8;
  cursor: not-allowed;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #a0acb8;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #47535f;
  background-color: #f5f5f5;
  border-color: #ebedf0;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #ffffff;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success,
button.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading,
button.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
button.list-group-item-success:hover,
a.list-group-item-success:focus,
button.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info,
button.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading,
button.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
button.list-group-item-info:hover,
a.list-group-item-info:focus,
button.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning,
button.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading,
button.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
button.list-group-item-warning:hover,
a.list-group-item-warning:focus,
button.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger,
button.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading,
button.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
button.list-group-item-danger:hover,
a.list-group-item-danger:focus,
button.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 18px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 3px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 15px;
  color: inherit;
}
.panel-title > a,
.panel-title > small,
.panel-title > .small,
.panel-title > small > a,
.panel-title > .small > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ebedf0;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.panel > .list-group,
.panel > .panel-collapse > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item,
.panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child,
.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
}
.panel > .list-group:last-child .list-group-item:last-child,
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
  border-top-right-radius: 0;
  border-top-left-radius: 0;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table caption,
.panel > .table-responsive > .table caption,
.panel > .panel-collapse > .table caption {
  padding-left: 15px;
  padding-right: 15px;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-right-radius: 2px;
  border-top-left-radius: 2px;
}
.panel > .table:first-child > thead:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 2px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 2px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-left-radius: 2px;
  border-bottom-right-radius: 2px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 2px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 2px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid #ebedf0;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  border: 0;
  margin-bottom: 0;
}
.panel-group {
  margin-bottom: 18px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 3px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body,
.panel-group .panel-heading + .panel-collapse > .list-group {
  border-top: 1px solid #ebedf0;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ebedf0;
}
.panel-default {
  border-color: #ebedf0;
}
.panel-default > .panel-heading {
  color: #3c4650;
  background-color: #f5f5f5;
  border-color: #ebedf0;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebedf0;
}
.panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #3c4650;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebedf0;
}
.panel-primary {
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #4E5D9D;
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: rgba(0, 0, 0, 0.03);
}
.panel-primary > .panel-heading .badge {
  color: #4E5D9D;
  background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: rgba(0, 0, 0, 0.03);
}
.panel-success {
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-success > .panel-heading {
  color: #fff;
  background-color: #00B49C;
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: rgba(0, 0, 0, 0.03);
}
.panel-success > .panel-heading .badge {
  color: #00B49C;
  background-color: #fff;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: rgba(0, 0, 0, 0.03);
}
.panel-info {
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-info > .panel-heading {
  color: #fff;
  background-color: #35B4B9;
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: rgba(0, 0, 0, 0.03);
}
.panel-info > .panel-heading .badge {
  color: #35B4B9;
  background-color: #fff;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: rgba(0, 0, 0, 0.03);
}
.panel-warning {
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-warning > .panel-heading {
  color: #fff;
  background-color: #FDB933;
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: rgba(0, 0, 0, 0.03);
}
.panel-warning > .panel-heading .badge {
  color: #FDB933;
  background-color: #fff;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: rgba(0, 0, 0, 0.03);
}
.panel-danger {
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-danger > .panel-heading {
  color: #fff;
  background-color: #F86B4F;
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: rgba(0, 0, 0, 0.03);
}
.panel-danger > .panel-heading .badge {
  color: #F86B4F;
  background-color: #fff;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: rgba(0, 0, 0, 0.03);
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  border: 0;
}
.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.well-lg {
  padding: 24px;
  border-radius: 4px;
}
.well-sm {
  padding: 9px;
  border-radius: 2px;
}
.close {
  float: right;
  font-size: 19.5px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.5;
  filter: alpha(opacity=50);
}
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
.modal-open {
  overflow: hidden;
}
.modal {
  display: none;
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  -o-transform: translate(0, -25%);
  transform: translate(0, -25%);
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -moz-transition: -moz-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 4px;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: 0;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  opacity: 0;
  filter: alpha(opacity=0);
}
.modal-backdrop.in {
  opacity: 0.5;
  filter: alpha(opacity=50);
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.3856;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-left: 5px;
  margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 10000;
  display: block;
  font-family: \"Open Sans\", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.3856;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  font-size: 11px;
  opacity: 0;
  filter: alpha(opacity=0);
}
.tooltip.in {
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.tooltip.top {
  margin-top: -3px;
  padding: 5px 0;
}
.tooltip.right {
  margin-left: 3px;
  padding: 0 5px;
}
.tooltip.bottom {
  margin-top: 3px;
  padding: 5px 0;
}
.tooltip.left {
  margin-left: -3px;
  padding: 0 5px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 3px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  bottom: 0;
  right: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: \"Open Sans\", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.3856;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  font-size: 13px;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  margin: 0;
  padding: 8px 14px;
  font-size: 13px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 3px 3px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  border-width: 10px;
  content: \"\";
}
.popover.top > .arrow {
  left: 50%;
  margin-left: -11px;
  border-bottom-width: 0;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.15);
  bottom: -11px;
}
.popover.top > .arrow:after {
  content: \" \";
  bottom: 1px;
  margin-left: -10px;
  border-bottom-width: 0;
  border-top-color: #fff;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-left-width: 0;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.15);
}
.popover.right > .arrow:after {
  content: \" \";
  left: 1px;
  bottom: -10px;
  border-left-width: 0;
  border-right-color: #fff;
}
.popover.bottom > .arrow {
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.15);
  top: -11px;
}
.popover.bottom > .arrow:after {
  content: \" \";
  top: 1px;
  margin-left: -10px;
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.15);
}
.popover.left > .arrow:after {
  content: \" \";
  right: 1px;
  border-right-width: 0;
  border-left-color: #fff;
  bottom: -10px;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  overflow: hidden;
  width: 100%;
}
.carousel-inner > .item {
  display: none;
  position: relative;
  -webkit-transition: 0.6s ease-in-out left;
  -o-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
@media all and (transform-3d), (-webkit-transform-3d) {
  .carousel-inner > .item {
    -webkit-transition: -webkit-transform 0.6s ease-in-out;
    -moz-transition: -moz-transform 0.6s ease-in-out;
    -o-transition: -o-transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    -moz-perspective: 1000px;
    -ms-perspective: 1000px;
    -o-perspective: 1000px;
    perspective: 1000px;
  }
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.next.left,
  .carousel-inner > .item.prev.right,
  .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 15%;
  opacity: 0.5;
  filter: alpha(opacity=50);
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
  background-color: rgba(0, 0, 0, 0);
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
}
.carousel-control.right {
  left: auto;
  right: 0;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
}
.carousel-control:hover,
.carousel-control:focus {
  outline: 0;
  color: #fff;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  margin-top: -10px;
  z-index: 5;
  display: inline-block;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  line-height: 1;
  font-family: serif;
}
.carousel-control .icon-prev:before {
  content: '\\2039';
}
.carousel-control .icon-next:before {
  content: '\\203a';
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  margin-left: -30%;
  padding-left: 0;
  list-style: none;
  text-align: center;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  border: 1px solid #fff;
  border-radius: 10px;
  cursor: pointer;
  background-color: #000 \\9;
  background-color: rgba(0, 0, 0, 0);
}
.carousel-indicators .active {
  margin: 0;
  width: 12px;
  height: 12px;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  left: 15%;
  right: 15%;
  bottom: 20px;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -10px;
    font-size: 30px;
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -10px;
  }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -10px;
  }
  .carousel-caption {
    left: 20%;
    right: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-header:before,
.modal-header:after,
.modal-footer:before,
.modal-footer:after {
  content: \" \";
  display: table;
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-header:after,
.modal-footer:after {
  clear: both;
}
.center-block {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table !important;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table !important;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table !important;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table !important;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table !important;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
}
.visible-print-block {
  display: none !important;
}
@media print {
  .visible-print-block {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;
}
@media print {
  .visible-print-inline {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;
}
@media print {
  .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}
/*!
 * bootstrap-vertical-tabs - v1.1.0
 * https://dbtek.github.io/bootstrap-vertical-tabs
 * 2014-06-06
 * Copyright (c) 2014 Ä°smail Demirbilek
 * License: MIT
 */
.tabs-left,
.tabs-right {
  border-bottom: none;
  padding-top: 2px;
  box-shadow: none;
  -webkit-box-shadow: none;
}
.tabs-left {
  border-right: 1px solid #ddd;
  padding-right: 0 !important;
}
.tabs-right {
  border-left: 1px solid #ddd;
  padding-left: 0 !important;
}
.tabs-left > li,
.tabs-right > li {
  float: none;
  margin-bottom: 2px;
}
.tabs-left > li {
  margin-right: -1px;
}
.tabs-right > li {
  margin-left: -1px;
}
.tabs-left > li.active > a,
.tabs-left > li.active > a:hover,
.tabs-left > li.active > a:focus {
  border-bottom-color: #ddd;
  border-right-color: transparent;
}
.tabs-right > li.active > a,
.tabs-right > li.active > a:hover,
.tabs-right > li.active > a:focus {
  border-bottom: 1px solid #ddd;
  border-left-color: transparent;
}
.tabs-left > li > a {
  border-radius: 4px 0 0 4px;
  margin-right: 0;
  display: block;
}
.tabs-right > li > a {
  border-radius: 0 4px 4px 0;
  margin-right: 0;
}
.vertical-text {
  margin-top: 50px;
  border: none;
  position: relative;
}
.vertical-text > li {
  height: 20px;
  width: 120px;
  margin-bottom: 100px;
}
.vertical-text > li > a {
  border-bottom: 1px solid #ddd;
  border-right-color: transparent;
  text-align: center;
  border-radius: 4px 4px 0px 0px;
}
.vertical-text > li.active > a,
.vertical-text > li.active > a:hover,
.vertical-text > li.active > a:focus {
  border-bottom-color: transparent;
  border-right-color: #ddd;
  border-left-color: #ddd;
}
.vertical-text.tabs-left {
  left: -50px;
}
.vertical-text.tabs-right {
  right: -50px;
}
.vertical-text.tabs-right > li {
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}
.vertical-text.tabs-left > li {
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  transform: rotate(-90deg);
}
/* distance between stacked modals*/
/* The first modal translateZ value*/
.container {
  margin: 5em auto;
}
.modal.in {
  -webkit-perspective: 2000px;
  -moz-perspective: 2000px;
  -ms-perspective: 2000px;
  -o-perspective: 2000px;
  perspective: 2000px;
}
.modal.in .modal-dialog.aside {
  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(-340px);
  -ms-transform: scale(0.8) rotateY(45deg) translateZ(-340px);
  -o-transform: scale(0.8) rotateY(45deg) translateZ(-340px);
  transform: scale(0.8) rotateY(45deg) translateZ(-340px);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  -o-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
.modal.in .modal-dialog.aside.aside-1 {
  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + 40px));
  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + 40px));
  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + 40px));
  transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + 40px));
}
.modal.in .modal-dialog.aside.aside-2 {
  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 2)));
  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 2)));
  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 2)));
  transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 2)));
}
.modal.in .modal-dialog.aside.aside-3 {
  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 3)));
  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 3)));
  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 3)));
  transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 3)));
}
.modal.in .modal-dialog.aside.aside-4 {
  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 4)));
  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 4)));
  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 4)));
  transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 4)));
}
.modal.in .modal-dialog.aside.aside-5 {
  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 5)));
  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 5)));
  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 5)));
  transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 5)));
}
/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('font-awesome/fonts/fontawesome-webfont.eot?v=4.7.0');
  src: url('font-awesome/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'), url('font-awesome/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'), url('font-awesome/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'), url('font-awesome/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: 0.2em 0.25em 0.15em;
  border: solid 0.08em #eee;
  border-radius: 0.1em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left {
  margin-right: 0.3em;
}
.fa.fa-pull-right {
  margin-left: 0.3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: 0.3em;
}
.fa.pull-right {
  margin-left: 0.3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=1)\";
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=2)\";
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=3)\";
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)\";
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)\";
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #fff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: \"\\f000\";
}
.fa-music:before {
  content: \"\\f001\";
}
.fa-search:before {
  content: \"\\f002\";
}
.fa-envelope-o:before {
  content: \"\\f003\";
}
.fa-heart:before {
  content: \"\\f004\";
}
.fa-star:before {
  content: \"\\f005\";
}
.fa-star-o:before {
  content: \"\\f006\";
}
.fa-user:before {
  content: \"\\f007\";
}
.fa-film:before {
  content: \"\\f008\";
}
.fa-th-large:before {
  content: \"\\f009\";
}
.fa-th:before {
  content: \"\\f00a\";
}
.fa-th-list:before {
  content: \"\\f00b\";
}
.fa-check:before {
  content: \"\\f00c\";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: \"\\f00d\";
}
.fa-search-plus:before {
  content: \"\\f00e\";
}
.fa-search-minus:before {
  content: \"\\f010\";
}
.fa-power-off:before {
  content: \"\\f011\";
}
.fa-signal:before {
  content: \"\\f012\";
}
.fa-gear:before,
.fa-cog:before {
  content: \"\\f013\";
}
.fa-trash-o:before {
  content: \"\\f014\";
}
.fa-home:before {
  content: \"\\f015\";
}
.fa-file-o:before {
  content: \"\\f016\";
}
.fa-clock-o:before {
  content: \"\\f017\";
}
.fa-road:before {
  content: \"\\f018\";
}
.fa-download:before {
  content: \"\\f019\";
}
.fa-arrow-circle-o-down:before {
  content: \"\\f01a\";
}
.fa-arrow-circle-o-up:before {
  content: \"\\f01b\";
}
.fa-inbox:before {
  content: \"\\f01c\";
}
.fa-play-circle-o:before {
  content: \"\\f01d\";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: \"\\f01e\";
}
.fa-refresh:before {
  content: \"\\f021\";
}
.fa-list-alt:before {
  content: \"\\f022\";
}
.fa-lock:before {
  content: \"\\f023\";
}
.fa-flag:before {
  content: \"\\f024\";
}
.fa-headphones:before {
  content: \"\\f025\";
}
.fa-volume-off:before {
  content: \"\\f026\";
}
.fa-volume-down:before {
  content: \"\\f027\";
}
.fa-volume-up:before {
  content: \"\\f028\";
}
.fa-qrcode:before {
  content: \"\\f029\";
}
.fa-barcode:before {
  content: \"\\f02a\";
}
.fa-tag:before {
  content: \"\\f02b\";
}
.fa-tags:before {
  content: \"\\f02c\";
}
.fa-book:before {
  content: \"\\f02d\";
}
.fa-bookmark:before {
  content: \"\\f02e\";
}
.fa-print:before {
  content: \"\\f02f\";
}
.fa-camera:before {
  content: \"\\f030\";
}
.fa-font:before {
  content: \"\\f031\";
}
.fa-bold:before {
  content: \"\\f032\";
}
.fa-italic:before {
  content: \"\\f033\";
}
.fa-text-height:before {
  content: \"\\f034\";
}
.fa-text-width:before {
  content: \"\\f035\";
}
.fa-align-left:before {
  content: \"\\f036\";
}
.fa-align-center:before {
  content: \"\\f037\";
}
.fa-align-right:before {
  content: \"\\f038\";
}
.fa-align-justify:before {
  content: \"\\f039\";
}
.fa-list:before {
  content: \"\\f03a\";
}
.fa-dedent:before,
.fa-outdent:before {
  content: \"\\f03b\";
}
.fa-indent:before {
  content: \"\\f03c\";
}
.fa-video-camera:before {
  content: \"\\f03d\";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: \"\\f03e\";
}
.fa-pencil:before {
  content: \"\\f040\";
}
.fa-map-marker:before {
  content: \"\\f041\";
}
.fa-adjust:before {
  content: \"\\f042\";
}
.fa-tint:before {
  content: \"\\f043\";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: \"\\f044\";
}
.fa-share-square-o:before {
  content: \"\\f045\";
}
.fa-check-square-o:before {
  content: \"\\f046\";
}
.fa-arrows:before {
  content: \"\\f047\";
}
.fa-step-backward:before {
  content: \"\\f048\";
}
.fa-fast-backward:before {
  content: \"\\f049\";
}
.fa-backward:before {
  content: \"\\f04a\";
}
.fa-play:before {
  content: \"\\f04b\";
}
.fa-pause:before {
  content: \"\\f04c\";
}
.fa-stop:before {
  content: \"\\f04d\";
}
.fa-forward:before {
  content: \"\\f04e\";
}
.fa-fast-forward:before {
  content: \"\\f050\";
}
.fa-step-forward:before {
  content: \"\\f051\";
}
.fa-eject:before {
  content: \"\\f052\";
}
.fa-chevron-left:before {
  content: \"\\f053\";
}
.fa-chevron-right:before {
  content: \"\\f054\";
}
.fa-plus-circle:before {
  content: \"\\f055\";
}
.fa-minus-circle:before {
  content: \"\\f056\";
}
.fa-times-circle:before {
  content: \"\\f057\";
}
.fa-check-circle:before {
  content: \"\\f058\";
}
.fa-question-circle:before {
  content: \"\\f059\";
}
.fa-info-circle:before {
  content: \"\\f05a\";
}
.fa-crosshairs:before {
  content: \"\\f05b\";
}
.fa-times-circle-o:before {
  content: \"\\f05c\";
}
.fa-check-circle-o:before {
  content: \"\\f05d\";
}
.fa-ban:before {
  content: \"\\f05e\";
}
.fa-arrow-left:before {
  content: \"\\f060\";
}
.fa-arrow-right:before {
  content: \"\\f061\";
}
.fa-arrow-up:before {
  content: \"\\f062\";
}
.fa-arrow-down:before {
  content: \"\\f063\";
}
.fa-mail-forward:before,
.fa-share:before {
  content: \"\\f064\";
}
.fa-expand:before {
  content: \"\\f065\";
}
.fa-compress:before {
  content: \"\\f066\";
}
.fa-plus:before {
  content: \"\\f067\";
}
.fa-minus:before {
  content: \"\\f068\";
}
.fa-asterisk:before {
  content: \"\\f069\";
}
.fa-exclamation-circle:before {
  content: \"\\f06a\";
}
.fa-gift:before {
  content: \"\\f06b\";
}
.fa-leaf:before {
  content: \"\\f06c\";
}
.fa-fire:before {
  content: \"\\f06d\";
}
.fa-eye:before {
  content: \"\\f06e\";
}
.fa-eye-slash:before {
  content: \"\\f070\";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: \"\\f071\";
}
.fa-plane:before {
  content: \"\\f072\";
}
.fa-calendar:before {
  content: \"\\f073\";
}
.fa-random:before {
  content: \"\\f074\";
}
.fa-comment:before {
  content: \"\\f075\";
}
.fa-magnet:before {
  content: \"\\f076\";
}
.fa-chevron-up:before {
  content: \"\\f077\";
}
.fa-chevron-down:before {
  content: \"\\f078\";
}
.fa-retweet:before {
  content: \"\\f079\";
}
.fa-shopping-cart:before {
  content: \"\\f07a\";
}
.fa-folder:before {
  content: \"\\f07b\";
}
.fa-folder-open:before {
  content: \"\\f07c\";
}
.fa-arrows-v:before {
  content: \"\\f07d\";
}
.fa-arrows-h:before {
  content: \"\\f07e\";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: \"\\f080\";
}
.fa-twitter-square:before {
  content: \"\\f081\";
}
.fa-facebook-square:before {
  content: \"\\f082\";
}
.fa-camera-retro:before {
  content: \"\\f083\";
}
.fa-key:before {
  content: \"\\f084\";
}
.fa-gears:before,
.fa-cogs:before {
  content: \"\\f085\";
}
.fa-comments:before {
  content: \"\\f086\";
}
.fa-thumbs-o-up:before {
  content: \"\\f087\";
}
.fa-thumbs-o-down:before {
  content: \"\\f088\";
}
.fa-star-half:before {
  content: \"\\f089\";
}
.fa-heart-o:before {
  content: \"\\f08a\";
}
.fa-sign-out:before {
  content: \"\\f08b\";
}
.fa-linkedin-square:before {
  content: \"\\f08c\";
}
.fa-thumb-tack:before {
  content: \"\\f08d\";
}
.fa-external-link:before {
  content: \"\\f08e\";
}
.fa-sign-in:before {
  content: \"\\f090\";
}
.fa-trophy:before {
  content: \"\\f091\";
}
.fa-github-square:before {
  content: \"\\f092\";
}
.fa-upload:before {
  content: \"\\f093\";
}
.fa-lemon-o:before {
  content: \"\\f094\";
}
.fa-phone:before {
  content: \"\\f095\";
}
.fa-square-o:before {
  content: \"\\f096\";
}
.fa-bookmark-o:before {
  content: \"\\f097\";
}
.fa-phone-square:before {
  content: \"\\f098\";
}
.fa-twitter:before {
  content: \"\\f099\";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: \"\\f09a\";
}
.fa-github:before {
  content: \"\\f09b\";
}
.fa-unlock:before {
  content: \"\\f09c\";
}
.fa-credit-card:before {
  content: \"\\f09d\";
}
.fa-feed:before,
.fa-rss:before {
  content: \"\\f09e\";
}
.fa-hdd-o:before {
  content: \"\\f0a0\";
}
.fa-bullhorn:before {
  content: \"\\f0a1\";
}
.fa-bell:before {
  content: \"\\f0f3\";
}
.fa-certificate:before {
  content: \"\\f0a3\";
}
.fa-hand-o-right:before {
  content: \"\\f0a4\";
}
.fa-hand-o-left:before {
  content: \"\\f0a5\";
}
.fa-hand-o-up:before {
  content: \"\\f0a6\";
}
.fa-hand-o-down:before {
  content: \"\\f0a7\";
}
.fa-arrow-circle-left:before {
  content: \"\\f0a8\";
}
.fa-arrow-circle-right:before {
  content: \"\\f0a9\";
}
.fa-arrow-circle-up:before {
  content: \"\\f0aa\";
}
.fa-arrow-circle-down:before {
  content: \"\\f0ab\";
}
.fa-globe:before {
  content: \"\\f0ac\";
}
.fa-wrench:before {
  content: \"\\f0ad\";
}
.fa-tasks:before {
  content: \"\\f0ae\";
}
.fa-filter:before {
  content: \"\\f0b0\";
}
.fa-briefcase:before {
  content: \"\\f0b1\";
}
.fa-arrows-alt:before {
  content: \"\\f0b2\";
}
.fa-group:before,
.fa-users:before {
  content: \"\\f0c0\";
}
.fa-chain:before,
.fa-link:before {
  content: \"\\f0c1\";
}
.fa-cloud:before {
  content: \"\\f0c2\";
}
.fa-flask:before {
  content: \"\\f0c3\";
}
.fa-cut:before,
.fa-scissors:before {
  content: \"\\f0c4\";
}
.fa-copy:before,
.fa-files-o:before {
  content: \"\\f0c5\";
}
.fa-paperclip:before {
  content: \"\\f0c6\";
}
.fa-save:before,
.fa-floppy-o:before {
  content: \"\\f0c7\";
}
.fa-square:before {
  content: \"\\f0c8\";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: \"\\f0c9\";
}
.fa-list-ul:before {
  content: \"\\f0ca\";
}
.fa-list-ol:before {
  content: \"\\f0cb\";
}
.fa-strikethrough:before {
  content: \"\\f0cc\";
}
.fa-underline:before {
  content: \"\\f0cd\";
}
.fa-table:before {
  content: \"\\f0ce\";
}
.fa-magic:before {
  content: \"\\f0d0\";
}
.fa-truck:before {
  content: \"\\f0d1\";
}
.fa-pinterest:before {
  content: \"\\f0d2\";
}
.fa-pinterest-square:before {
  content: \"\\f0d3\";
}
.fa-google-plus-square:before {
  content: \"\\f0d4\";
}
.fa-google-plus:before {
  content: \"\\f0d5\";
}
.fa-money:before {
  content: \"\\f0d6\";
}
.fa-caret-down:before {
  content: \"\\f0d7\";
}
.fa-caret-up:before {
  content: \"\\f0d8\";
}
.fa-caret-left:before {
  content: \"\\f0d9\";
}
.fa-caret-right:before {
  content: \"\\f0da\";
}
.fa-columns:before {
  content: \"\\f0db\";
}
.fa-unsorted:before,
.fa-sort:before {
  content: \"\\f0dc\";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: \"\\f0dd\";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: \"\\f0de\";
}
.fa-envelope:before {
  content: \"\\f0e0\";
}
.fa-linkedin:before {
  content: \"\\f0e1\";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: \"\\f0e2\";
}
.fa-legal:before,
.fa-gavel:before {
  content: \"\\f0e3\";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: \"\\f0e4\";
}
.fa-comment-o:before {
  content: \"\\f0e5\";
}
.fa-comments-o:before {
  content: \"\\f0e6\";
}
.fa-flash:before,
.fa-bolt:before {
  content: \"\\f0e7\";
}
.fa-sitemap:before {
  content: \"\\f0e8\";
}
.fa-umbrella:before {
  content: \"\\f0e9\";
}
.fa-paste:before,
.fa-clipboard:before {
  content: \"\\f0ea\";
}
.fa-lightbulb-o:before {
  content: \"\\f0eb\";
}
.fa-exchange:before {
  content: \"\\f0ec\";
}
.fa-cloud-download:before {
  content: \"\\f0ed\";
}
.fa-cloud-upload:before {
  content: \"\\f0ee\";
}
.fa-user-md:before {
  content: \"\\f0f0\";
}
.fa-stethoscope:before {
  content: \"\\f0f1\";
}
.fa-suitcase:before {
  content: \"\\f0f2\";
}
.fa-bell-o:before {
  content: \"\\f0a2\";
}
.fa-coffee:before {
  content: \"\\f0f4\";
}
.fa-cutlery:before {
  content: \"\\f0f5\";
}
.fa-file-text-o:before {
  content: \"\\f0f6\";
}
.fa-building-o:before {
  content: \"\\f0f7\";
}
.fa-hospital-o:before {
  content: \"\\f0f8\";
}
.fa-ambulance:before {
  content: \"\\f0f9\";
}
.fa-medkit:before {
  content: \"\\f0fa\";
}
.fa-fighter-jet:before {
  content: \"\\f0fb\";
}
.fa-beer:before {
  content: \"\\f0fc\";
}
.fa-h-square:before {
  content: \"\\f0fd\";
}
.fa-plus-square:before {
  content: \"\\f0fe\";
}
.fa-angle-double-left:before {
  content: \"\\f100\";
}
.fa-angle-double-right:before {
  content: \"\\f101\";
}
.fa-angle-double-up:before {
  content: \"\\f102\";
}
.fa-angle-double-down:before {
  content: \"\\f103\";
}
.fa-angle-left:before {
  content: \"\\f104\";
}
.fa-angle-right:before {
  content: \"\\f105\";
}
.fa-angle-up:before {
  content: \"\\f106\";
}
.fa-angle-down:before {
  content: \"\\f107\";
}
.fa-desktop:before {
  content: \"\\f108\";
}
.fa-laptop:before {
  content: \"\\f109\";
}
.fa-tablet:before {
  content: \"\\f10a\";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: \"\\f10b\";
}
.fa-circle-o:before {
  content: \"\\f10c\";
}
.fa-quote-left:before {
  content: \"\\f10d\";
}
.fa-quote-right:before {
  content: \"\\f10e\";
}
.fa-spinner:before {
  content: \"\\f110\";
}
.fa-circle:before {
  content: \"\\f111\";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: \"\\f112\";
}
.fa-github-alt:before {
  content: \"\\f113\";
}
.fa-folder-o:before {
  content: \"\\f114\";
}
.fa-folder-open-o:before {
  content: \"\\f115\";
}
.fa-smile-o:before {
  content: \"\\f118\";
}
.fa-frown-o:before {
  content: \"\\f119\";
}
.fa-meh-o:before {
  content: \"\\f11a\";
}
.fa-gamepad:before {
  content: \"\\f11b\";
}
.fa-keyboard-o:before {
  content: \"\\f11c\";
}
.fa-flag-o:before {
  content: \"\\f11d\";
}
.fa-flag-checkered:before {
  content: \"\\f11e\";
}
.fa-terminal:before {
  content: \"\\f120\";
}
.fa-code:before {
  content: \"\\f121\";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: \"\\f122\";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: \"\\f123\";
}
.fa-location-arrow:before {
  content: \"\\f124\";
}
.fa-crop:before {
  content: \"\\f125\";
}
.fa-code-fork:before {
  content: \"\\f126\";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: \"\\f127\";
}
.fa-question:before {
  content: \"\\f128\";
}
.fa-info:before {
  content: \"\\f129\";
}
.fa-exclamation:before {
  content: \"\\f12a\";
}
.fa-superscript:before {
  content: \"\\f12b\";
}
.fa-subscript:before {
  content: \"\\f12c\";
}
.fa-eraser:before {
  content: \"\\f12d\";
}
.fa-puzzle-piece:before {
  content: \"\\f12e\";
}
.fa-microphone:before {
  content: \"\\f130\";
}
.fa-microphone-slash:before {
  content: \"\\f131\";
}
.fa-shield:before {
  content: \"\\f132\";
}
.fa-calendar-o:before {
  content: \"\\f133\";
}
.fa-fire-extinguisher:before {
  content: \"\\f134\";
}
.fa-rocket:before {
  content: \"\\f135\";
}
.fa-maxcdn:before {
  content: \"\\f136\";
}
.fa-chevron-circle-left:before {
  content: \"\\f137\";
}
.fa-chevron-circle-right:before {
  content: \"\\f138\";
}
.fa-chevron-circle-up:before {
  content: \"\\f139\";
}
.fa-chevron-circle-down:before {
  content: \"\\f13a\";
}
.fa-html5:before {
  content: \"\\f13b\";
}
.fa-css3:before {
  content: \"\\f13c\";
}
.fa-anchor:before {
  content: \"\\f13d\";
}
.fa-unlock-alt:before {
  content: \"\\f13e\";
}
.fa-bullseye:before {
  content: \"\\f140\";
}
.fa-ellipsis-h:before {
  content: \"\\f141\";
}
.fa-ellipsis-v:before {
  content: \"\\f142\";
}
.fa-rss-square:before {
  content: \"\\f143\";
}
.fa-play-circle:before {
  content: \"\\f144\";
}
.fa-ticket:before {
  content: \"\\f145\";
}
.fa-minus-square:before {
  content: \"\\f146\";
}
.fa-minus-square-o:before {
  content: \"\\f147\";
}
.fa-level-up:before {
  content: \"\\f148\";
}
.fa-level-down:before {
  content: \"\\f149\";
}
.fa-check-square:before {
  content: \"\\f14a\";
}
.fa-pencil-square:before {
  content: \"\\f14b\";
}
.fa-external-link-square:before {
  content: \"\\f14c\";
}
.fa-share-square:before {
  content: \"\\f14d\";
}
.fa-compass:before {
  content: \"\\f14e\";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: \"\\f150\";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: \"\\f151\";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: \"\\f152\";
}
.fa-euro:before,
.fa-eur:before {
  content: \"\\f153\";
}
.fa-gbp:before {
  content: \"\\f154\";
}
.fa-dollar:before,
.fa-usd:before {
  content: \"\\f155\";
}
.fa-rupee:before,
.fa-inr:before {
  content: \"\\f156\";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: \"\\f157\";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: \"\\f158\";
}
.fa-won:before,
.fa-krw:before {
  content: \"\\f159\";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: \"\\f15a\";
}
.fa-file:before {
  content: \"\\f15b\";
}
.fa-file-text:before {
  content: \"\\f15c\";
}
.fa-sort-alpha-asc:before {
  content: \"\\f15d\";
}
.fa-sort-alpha-desc:before {
  content: \"\\f15e\";
}
.fa-sort-amount-asc:before {
  content: \"\\f160\";
}
.fa-sort-amount-desc:before {
  content: \"\\f161\";
}
.fa-sort-numeric-asc:before {
  content: \"\\f162\";
}
.fa-sort-numeric-desc:before {
  content: \"\\f163\";
}
.fa-thumbs-up:before {
  content: \"\\f164\";
}
.fa-thumbs-down:before {
  content: \"\\f165\";
}
.fa-youtube-square:before {
  content: \"\\f166\";
}
.fa-youtube:before {
  content: \"\\f167\";
}
.fa-xing:before {
  content: \"\\f168\";
}
.fa-xing-square:before {
  content: \"\\f169\";
}
.fa-youtube-play:before {
  content: \"\\f16a\";
}
.fa-dropbox:before {
  content: \"\\f16b\";
}
.fa-stack-overflow:before {
  content: \"\\f16c\";
}
.fa-instagram:before {
  content: \"\\f16d\";
}
.fa-flickr:before {
  content: \"\\f16e\";
}
.fa-adn:before {
  content: \"\\f170\";
}
.fa-bitbucket:before {
  content: \"\\f171\";
}
.fa-bitbucket-square:before {
  content: \"\\f172\";
}
.fa-tumblr:before {
  content: \"\\f173\";
}
.fa-tumblr-square:before {
  content: \"\\f174\";
}
.fa-long-arrow-down:before {
  content: \"\\f175\";
}
.fa-long-arrow-up:before {
  content: \"\\f176\";
}
.fa-long-arrow-left:before {
  content: \"\\f177\";
}
.fa-long-arrow-right:before {
  content: \"\\f178\";
}
.fa-apple:before {
  content: \"\\f179\";
}
.fa-windows:before {
  content: \"\\f17a\";
}
.fa-android:before {
  content: \"\\f17b\";
}
.fa-linux:before {
  content: \"\\f17c\";
}
.fa-dribbble:before {
  content: \"\\f17d\";
}
.fa-skype:before {
  content: \"\\f17e\";
}
.fa-foursquare:before {
  content: \"\\f180\";
}
.fa-trello:before {
  content: \"\\f181\";
}
.fa-female:before {
  content: \"\\f182\";
}
.fa-male:before {
  content: \"\\f183\";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: \"\\f184\";
}
.fa-sun-o:before {
  content: \"\\f185\";
}
.fa-moon-o:before {
  content: \"\\f186\";
}
.fa-archive:before {
  content: \"\\f187\";
}
.fa-bug:before {
  content: \"\\f188\";
}
.fa-vk:before {
  content: \"\\f189\";
}
.fa-weibo:before {
  content: \"\\f18a\";
}
.fa-renren:before {
  content: \"\\f18b\";
}
.fa-pagelines:before {
  content: \"\\f18c\";
}
.fa-stack-exchange:before {
  content: \"\\f18d\";
}
.fa-arrow-circle-o-right:before {
  content: \"\\f18e\";
}
.fa-arrow-circle-o-left:before {
  content: \"\\f190\";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: \"\\f191\";
}
.fa-dot-circle-o:before {
  content: \"\\f192\";
}
.fa-wheelchair:before {
  content: \"\\f193\";
}
.fa-vimeo-square:before {
  content: \"\\f194\";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: \"\\f195\";
}
.fa-plus-square-o:before {
  content: \"\\f196\";
}
.fa-space-shuttle:before {
  content: \"\\f197\";
}
.fa-slack:before {
  content: \"\\f198\";
}
.fa-envelope-square:before {
  content: \"\\f199\";
}
.fa-wordpress:before {
  content: \"\\f19a\";
}
.fa-openid:before {
  content: \"\\f19b\";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: \"\\f19c\";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: \"\\f19d\";
}
.fa-yahoo:before {
  content: \"\\f19e\";
}
.fa-google:before {
  content: \"\\f1a0\";
}
.fa-reddit:before {
  content: \"\\f1a1\";
}
.fa-reddit-square:before {
  content: \"\\f1a2\";
}
.fa-stumbleupon-circle:before {
  content: \"\\f1a3\";
}
.fa-stumbleupon:before {
  content: \"\\f1a4\";
}
.fa-delicious:before {
  content: \"\\f1a5\";
}
.fa-digg:before {
  content: \"\\f1a6\";
}
.fa-pied-piper-pp:before {
  content: \"\\f1a7\";
}
.fa-pied-piper-alt:before {
  content: \"\\f1a8\";
}
.fa-drupal:before {
  content: \"\\f1a9\";
}
.fa-joomla:before {
  content: \"\\f1aa\";
}
.fa-language:before {
  content: \"\\f1ab\";
}
.fa-fax:before {
  content: \"\\f1ac\";
}
.fa-building:before {
  content: \"\\f1ad\";
}
.fa-child:before {
  content: \"\\f1ae\";
}
.fa-paw:before {
  content: \"\\f1b0\";
}
.fa-spoon:before {
  content: \"\\f1b1\";
}
.fa-cube:before {
  content: \"\\f1b2\";
}
.fa-cubes:before {
  content: \"\\f1b3\";
}
.fa-behance:before {
  content: \"\\f1b4\";
}
.fa-behance-square:before {
  content: \"\\f1b5\";
}
.fa-steam:before {
  content: \"\\f1b6\";
}
.fa-steam-square:before {
  content: \"\\f1b7\";
}
.fa-recycle:before {
  content: \"\\f1b8\";
}
.fa-automobile:before,
.fa-car:before {
  content: \"\\f1b9\";
}
.fa-cab:before,
.fa-taxi:before {
  content: \"\\f1ba\";
}
.fa-tree:before {
  content: \"\\f1bb\";
}
.fa-spotify:before {
  content: \"\\f1bc\";
}
.fa-deviantart:before {
  content: \"\\f1bd\";
}
.fa-soundcloud:before {
  content: \"\\f1be\";
}
.fa-database:before {
  content: \"\\f1c0\";
}
.fa-file-pdf-o:before {
  content: \"\\f1c1\";
}
.fa-file-word-o:before {
  content: \"\\f1c2\";
}
.fa-file-excel-o:before {
  content: \"\\f1c3\";
}
.fa-file-powerpoint-o:before {
  content: \"\\f1c4\";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: \"\\f1c5\";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: \"\\f1c6\";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: \"\\f1c7\";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: \"\\f1c8\";
}
.fa-file-code-o:before {
  content: \"\\f1c9\";
}
.fa-vine:before {
  content: \"\\f1ca\";
}
.fa-codepen:before {
  content: \"\\f1cb\";
}
.fa-jsfiddle:before {
  content: \"\\f1cc\";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: \"\\f1cd\";
}
.fa-circle-o-notch:before {
  content: \"\\f1ce\";
}
.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
  content: \"\\f1d0\";
}
.fa-ge:before,
.fa-empire:before {
  content: \"\\f1d1\";
}
.fa-git-square:before {
  content: \"\\f1d2\";
}
.fa-git:before {
  content: \"\\f1d3\";
}
.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
  content: \"\\f1d4\";
}
.fa-tencent-weibo:before {
  content: \"\\f1d5\";
}
.fa-qq:before {
  content: \"\\f1d6\";
}
.fa-wechat:before,
.fa-weixin:before {
  content: \"\\f1d7\";
}
.fa-send:before,
.fa-paper-plane:before {
  content: \"\\f1d8\";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: \"\\f1d9\";
}
.fa-history:before {
  content: \"\\f1da\";
}
.fa-circle-thin:before {
  content: \"\\f1db\";
}
.fa-header:before {
  content: \"\\f1dc\";
}
.fa-paragraph:before {
  content: \"\\f1dd\";
}
.fa-sliders:before {
  content: \"\\f1de\";
}
.fa-share-alt:before {
  content: \"\\f1e0\";
}
.fa-share-alt-square:before {
  content: \"\\f1e1\";
}
.fa-bomb:before {
  content: \"\\f1e2\";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: \"\\f1e3\";
}
.fa-tty:before {
  content: \"\\f1e4\";
}
.fa-binoculars:before {
  content: \"\\f1e5\";
}
.fa-plug:before {
  content: \"\\f1e6\";
}
.fa-slideshare:before {
  content: \"\\f1e7\";
}
.fa-twitch:before {
  content: \"\\f1e8\";
}
.fa-yelp:before {
  content: \"\\f1e9\";
}
.fa-newspaper-o:before {
  content: \"\\f1ea\";
}
.fa-wifi:before {
  content: \"\\f1eb\";
}
.fa-calculator:before {
  content: \"\\f1ec\";
}
.fa-paypal:before {
  content: \"\\f1ed\";
}
.fa-google-wallet:before {
  content: \"\\f1ee\";
}
.fa-cc-visa:before {
  content: \"\\f1f0\";
}
.fa-cc-mastercard:before {
  content: \"\\f1f1\";
}
.fa-cc-discover:before {
  content: \"\\f1f2\";
}
.fa-cc-amex:before {
  content: \"\\f1f3\";
}
.fa-cc-paypal:before {
  content: \"\\f1f4\";
}
.fa-cc-stripe:before {
  content: \"\\f1f5\";
}
.fa-bell-slash:before {
  content: \"\\f1f6\";
}
.fa-bell-slash-o:before {
  content: \"\\f1f7\";
}
.fa-trash:before {
  content: \"\\f1f8\";
}
.fa-copyright:before {
  content: \"\\f1f9\";
}
.fa-at:before {
  content: \"\\f1fa\";
}
.fa-eyedropper:before {
  content: \"\\f1fb\";
}
.fa-paint-brush:before {
  content: \"\\f1fc\";
}
.fa-birthday-cake:before {
  content: \"\\f1fd\";
}
.fa-area-chart:before {
  content: \"\\f1fe\";
}
.fa-pie-chart:before {
  content: \"\\f200\";
}
.fa-line-chart:before {
  content: \"\\f201\";
}
.fa-lastfm:before {
  content: \"\\f202\";
}
.fa-lastfm-square:before {
  content: \"\\f203\";
}
.fa-toggle-off:before {
  content: \"\\f204\";
}
.fa-toggle-on:before {
  content: \"\\f205\";
}
.fa-bicycle:before {
  content: \"\\f206\";
}
.fa-bus:before {
  content: \"\\f207\";
}
.fa-ioxhost:before {
  content: \"\\f208\";
}
.fa-angellist:before {
  content: \"\\f209\";
}
.fa-cc:before {
  content: \"\\f20a\";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: \"\\f20b\";
}
.fa-meanpath:before {
  content: \"\\f20c\";
}
.fa-buysellads:before {
  content: \"\\f20d\";
}
.fa-connectdevelop:before {
  content: \"\\f20e\";
}
.fa-dashcube:before {
  content: \"\\f210\";
}
.fa-forumbee:before {
  content: \"\\f211\";
}
.fa-leanpub:before {
  content: \"\\f212\";
}
.fa-sellsy:before {
  content: \"\\f213\";
}
.fa-shirtsinbulk:before {
  content: \"\\f214\";
}
.fa-simplybuilt:before {
  content: \"\\f215\";
}
.fa-skyatlas:before {
  content: \"\\f216\";
}
.fa-cart-plus:before {
  content: \"\\f217\";
}
.fa-cart-arrow-down:before {
  content: \"\\f218\";
}
.fa-diamond:before {
  content: \"\\f219\";
}
.fa-ship:before {
  content: \"\\f21a\";
}
.fa-user-secret:before {
  content: \"\\f21b\";
}
.fa-motorcycle:before {
  content: \"\\f21c\";
}
.fa-street-view:before {
  content: \"\\f21d\";
}
.fa-heartbeat:before {
  content: \"\\f21e\";
}
.fa-venus:before {
  content: \"\\f221\";
}
.fa-mars:before {
  content: \"\\f222\";
}
.fa-mercury:before {
  content: \"\\f223\";
}
.fa-intersex:before,
.fa-transgender:before {
  content: \"\\f224\";
}
.fa-transgender-alt:before {
  content: \"\\f225\";
}
.fa-venus-double:before {
  content: \"\\f226\";
}
.fa-mars-double:before {
  content: \"\\f227\";
}
.fa-venus-mars:before {
  content: \"\\f228\";
}
.fa-mars-stroke:before {
  content: \"\\f229\";
}
.fa-mars-stroke-v:before {
  content: \"\\f22a\";
}
.fa-mars-stroke-h:before {
  content: \"\\f22b\";
}
.fa-neuter:before {
  content: \"\\f22c\";
}
.fa-genderless:before {
  content: \"\\f22d\";
}
.fa-facebook-official:before {
  content: \"\\f230\";
}
.fa-pinterest-p:before {
  content: \"\\f231\";
}
.fa-whatsapp:before {
  content: \"\\f232\";
}
.fa-server:before {
  content: \"\\f233\";
}
.fa-user-plus:before {
  content: \"\\f234\";
}
.fa-user-times:before {
  content: \"\\f235\";
}
.fa-hotel:before,
.fa-bed:before {
  content: \"\\f236\";
}
.fa-viacoin:before {
  content: \"\\f237\";
}
.fa-train:before {
  content: \"\\f238\";
}
.fa-subway:before {
  content: \"\\f239\";
}
.fa-medium:before {
  content: \"\\f23a\";
}
.fa-yc:before,
.fa-y-combinator:before {
  content: \"\\f23b\";
}
.fa-optin-monster:before {
  content: \"\\f23c\";
}
.fa-opencart:before {
  content: \"\\f23d\";
}
.fa-expeditedssl:before {
  content: \"\\f23e\";
}
.fa-battery-4:before,
.fa-battery:before,
.fa-battery-full:before {
  content: \"\\f240\";
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
  content: \"\\f241\";
}
.fa-battery-2:before,
.fa-battery-half:before {
  content: \"\\f242\";
}
.fa-battery-1:before,
.fa-battery-quarter:before {
  content: \"\\f243\";
}
.fa-battery-0:before,
.fa-battery-empty:before {
  content: \"\\f244\";
}
.fa-mouse-pointer:before {
  content: \"\\f245\";
}
.fa-i-cursor:before {
  content: \"\\f246\";
}
.fa-object-group:before {
  content: \"\\f247\";
}
.fa-object-ungroup:before {
  content: \"\\f248\";
}
.fa-sticky-note:before {
  content: \"\\f249\";
}
.fa-sticky-note-o:before {
  content: \"\\f24a\";
}
.fa-cc-jcb:before {
  content: \"\\f24b\";
}
.fa-cc-diners-club:before {
  content: \"\\f24c\";
}
.fa-clone:before {
  content: \"\\f24d\";
}
.fa-balance-scale:before {
  content: \"\\f24e\";
}
.fa-hourglass-o:before {
  content: \"\\f250\";
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
  content: \"\\f251\";
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
  content: \"\\f252\";
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
  content: \"\\f253\";
}
.fa-hourglass:before {
  content: \"\\f254\";
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
  content: \"\\f255\";
}
.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
  content: \"\\f256\";
}
.fa-hand-scissors-o:before {
  content: \"\\f257\";
}
.fa-hand-lizard-o:before {
  content: \"\\f258\";
}
.fa-hand-spock-o:before {
  content: \"\\f259\";
}
.fa-hand-pointer-o:before {
  content: \"\\f25a\";
}
.fa-hand-peace-o:before {
  content: \"\\f25b\";
}
.fa-trademark:before {
  content: \"\\f25c\";
}
.fa-registered:before {
  content: \"\\f25d\";
}
.fa-creative-commons:before {
  content: \"\\f25e\";
}
.fa-gg:before {
  content: \"\\f260\";
}
.fa-gg-circle:before {
  content: \"\\f261\";
}
.fa-tripadvisor:before {
  content: \"\\f262\";
}
.fa-odnoklassniki:before {
  content: \"\\f263\";
}
.fa-odnoklassniki-square:before {
  content: \"\\f264\";
}
.fa-get-pocket:before {
  content: \"\\f265\";
}
.fa-wikipedia-w:before {
  content: \"\\f266\";
}
.fa-safari:before {
  content: \"\\f267\";
}
.fa-chrome:before {
  content: \"\\f268\";
}
.fa-firefox:before {
  content: \"\\f269\";
}
.fa-opera:before {
  content: \"\\f26a\";
}
.fa-internet-explorer:before {
  content: \"\\f26b\";
}
.fa-tv:before,
.fa-television:before {
  content: \"\\f26c\";
}
.fa-contao:before {
  content: \"\\f26d\";
}
.fa-500px:before {
  content: \"\\f26e\";
}
.fa-amazon:before {
  content: \"\\f270\";
}
.fa-calendar-plus-o:before {
  content: \"\\f271\";
}
.fa-calendar-minus-o:before {
  content: \"\\f272\";
}
.fa-calendar-times-o:before {
  content: \"\\f273\";
}
.fa-calendar-check-o:before {
  content: \"\\f274\";
}
.fa-industry:before {
  content: \"\\f275\";
}
.fa-map-pin:before {
  content: \"\\f276\";
}
.fa-map-signs:before {
  content: \"\\f277\";
}
.fa-map-o:before {
  content: \"\\f278\";
}
.fa-map:before {
  content: \"\\f279\";
}
.fa-commenting:before {
  content: \"\\f27a\";
}
.fa-commenting-o:before {
  content: \"\\f27b\";
}
.fa-houzz:before {
  content: \"\\f27c\";
}
.fa-vimeo:before {
  content: \"\\f27d\";
}
.fa-black-tie:before {
  content: \"\\f27e\";
}
.fa-fonticons:before {
  content: \"\\f280\";
}
.fa-reddit-alien:before {
  content: \"\\f281\";
}
.fa-edge:before {
  content: \"\\f282\";
}
.fa-credit-card-alt:before {
  content: \"\\f283\";
}
.fa-codiepie:before {
  content: \"\\f284\";
}
.fa-modx:before {
  content: \"\\f285\";
}
.fa-fort-awesome:before {
  content: \"\\f286\";
}
.fa-usb:before {
  content: \"\\f287\";
}
.fa-product-hunt:before {
  content: \"\\f288\";
}
.fa-mixcloud:before {
  content: \"\\f289\";
}
.fa-scribd:before {
  content: \"\\f28a\";
}
.fa-pause-circle:before {
  content: \"\\f28b\";
}
.fa-pause-circle-o:before {
  content: \"\\f28c\";
}
.fa-stop-circle:before {
  content: \"\\f28d\";
}
.fa-stop-circle-o:before {
  content: \"\\f28e\";
}
.fa-shopping-bag:before {
  content: \"\\f290\";
}
.fa-shopping-basket:before {
  content: \"\\f291\";
}
.fa-hashtag:before {
  content: \"\\f292\";
}
.fa-bluetooth:before {
  content: \"\\f293\";
}
.fa-bluetooth-b:before {
  content: \"\\f294\";
}
.fa-percent:before {
  content: \"\\f295\";
}
.fa-gitlab:before {
  content: \"\\f296\";
}
.fa-wpbeginner:before {
  content: \"\\f297\";
}
.fa-wpforms:before {
  content: \"\\f298\";
}
.fa-envira:before {
  content: \"\\f299\";
}
.fa-universal-access:before {
  content: \"\\f29a\";
}
.fa-wheelchair-alt:before {
  content: \"\\f29b\";
}
.fa-question-circle-o:before {
  content: \"\\f29c\";
}
.fa-blind:before {
  content: \"\\f29d\";
}
.fa-audio-description:before {
  content: \"\\f29e\";
}
.fa-volume-control-phone:before {
  content: \"\\f2a0\";
}
.fa-braille:before {
  content: \"\\f2a1\";
}
.fa-assistive-listening-systems:before {
  content: \"\\f2a2\";
}
.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
  content: \"\\f2a3\";
}
.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
  content: \"\\f2a4\";
}
.fa-glide:before {
  content: \"\\f2a5\";
}
.fa-glide-g:before {
  content: \"\\f2a6\";
}
.fa-signing:before,
.fa-sign-language:before {
  content: \"\\f2a7\";
}
.fa-low-vision:before {
  content: \"\\f2a8\";
}
.fa-viadeo:before {
  content: \"\\f2a9\";
}
.fa-viadeo-square:before {
  content: \"\\f2aa\";
}
.fa-snapchat:before {
  content: \"\\f2ab\";
}
.fa-snapchat-ghost:before {
  content: \"\\f2ac\";
}
.fa-snapchat-square:before {
  content: \"\\f2ad\";
}
.fa-pied-piper:before {
  content: \"\\f2ae\";
}
.fa-first-order:before {
  content: \"\\f2b0\";
}
.fa-yoast:before {
  content: \"\\f2b1\";
}
.fa-themeisle:before {
  content: \"\\f2b2\";
}
.fa-google-plus-circle:before,
.fa-google-plus-official:before {
  content: \"\\f2b3\";
}
.fa-fa:before,
.fa-font-awesome:before {
  content: \"\\f2b4\";
}
.fa-handshake-o:before {
  content: \"\\f2b5\";
}
.fa-envelope-open:before {
  content: \"\\f2b6\";
}
.fa-envelope-open-o:before {
  content: \"\\f2b7\";
}
.fa-linode:before {
  content: \"\\f2b8\";
}
.fa-address-book:before {
  content: \"\\f2b9\";
}
.fa-address-book-o:before {
  content: \"\\f2ba\";
}
.fa-vcard:before,
.fa-address-card:before {
  content: \"\\f2bb\";
}
.fa-vcard-o:before,
.fa-address-card-o:before {
  content: \"\\f2bc\";
}
.fa-user-circle:before {
  content: \"\\f2bd\";
}
.fa-user-circle-o:before {
  content: \"\\f2be\";
}
.fa-user-o:before {
  content: \"\\f2c0\";
}
.fa-id-badge:before {
  content: \"\\f2c1\";
}
.fa-drivers-license:before,
.fa-id-card:before {
  content: \"\\f2c2\";
}
.fa-drivers-license-o:before,
.fa-id-card-o:before {
  content: \"\\f2c3\";
}
.fa-quora:before {
  content: \"\\f2c4\";
}
.fa-free-code-camp:before {
  content: \"\\f2c5\";
}
.fa-telegram:before {
  content: \"\\f2c6\";
}
.fa-thermometer-4:before,
.fa-thermometer:before,
.fa-thermometer-full:before {
  content: \"\\f2c7\";
}
.fa-thermometer-3:before,
.fa-thermometer-three-quarters:before {
  content: \"\\f2c8\";
}
.fa-thermometer-2:before,
.fa-thermometer-half:before {
  content: \"\\f2c9\";
}
.fa-thermometer-1:before,
.fa-thermometer-quarter:before {
  content: \"\\f2ca\";
}
.fa-thermometer-0:before,
.fa-thermometer-empty:before {
  content: \"\\f2cb\";
}
.fa-shower:before {
  content: \"\\f2cc\";
}
.fa-bathtub:before,
.fa-s15:before,
.fa-bath:before {
  content: \"\\f2cd\";
}
.fa-podcast:before {
  content: \"\\f2ce\";
}
.fa-window-maximize:before {
  content: \"\\f2d0\";
}
.fa-window-minimize:before {
  content: \"\\f2d1\";
}
.fa-window-restore:before {
  content: \"\\f2d2\";
}
.fa-times-rectangle:before,
.fa-window-close:before {
  content: \"\\f2d3\";
}
.fa-times-rectangle-o:before,
.fa-window-close-o:before {
  content: \"\\f2d4\";
}
.fa-bandcamp:before {
  content: \"\\f2d5\";
}
.fa-grav:before {
  content: \"\\f2d6\";
}
.fa-etsy:before {
  content: \"\\f2d7\";
}
.fa-imdb:before {
  content: \"\\f2d8\";
}
.fa-ravelry:before {
  content: \"\\f2d9\";
}
.fa-eercast:before {
  content: \"\\f2da\";
}
.fa-microchip:before {
  content: \"\\f2db\";
}
.fa-snowflake-o:before {
  content: \"\\f2dc\";
}
.fa-superpowers:before {
  content: \"\\f2dd\";
}
.fa-wpexplorer:before {
  content: \"\\f2de\";
}
.fa-meetup:before {
  content: \"\\f2e0\";
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
.chosen-select {
  width: 100%;
}
.chosen-select-deselect {
  width: 100%;
}
.chosen-container {
  display: inline-block;
  font-size: 13px;
  position: relative;
  vertical-align: middle;
}
.chosen-container .group-name {
  margin-right: 2px;
}
.chosen-container .chosen-drop {
  background: #fff;
  border: 1px solid #d5d5d5;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  -webkit-box-shadow: 0 8px 8px rgba(0, 0, 0, .25);
  box-shadow: 0 8px 8px rgba(0, 0, 0, .25);
  margin-top: -1px;
  position: absolute;
  top: 100%;
  left: -9000px;
  z-index: 1060;
}
.chosen-container.chosen-with-drop .chosen-drop {
  left: 0;
  right: 0;
}
.chosen-container .chosen-results {
  color: #596776;
  margin: 0 4px 4px 0;
  max-height: 240px;
  padding: 0 0 0 4px;
  position: relative;
  overflow-x: hidden;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
}
.chosen-container .chosen-results li {
  display: none;
  line-height: 1.3856;
  list-style: none;
  margin: 0;
  padding: 5px 6px;
}
.chosen-container .chosen-results li em {
  background: #feffde;
  font-style: normal;
}
.chosen-container .chosen-results li.group-result {
  display: list-item;
  cursor: default;
  color: #999;
  font-weight: bold;
}
.chosen-container .chosen-results li.group-option {
  padding-left: 15px;
}
.chosen-container .chosen-results li.active-result {
  cursor: pointer;
  display: list-item;
}
.chosen-container .chosen-results li.highlighted {
  background-color: #4E5D9D;
  background-image: none;
  color: white;
}
.chosen-container .chosen-results li.highlighted em {
  background: transparent;
}
.chosen-container .chosen-results li.disabled-result {
  display: list-item;
  color: #a0acb8;
}
.chosen-container .chosen-results .no-results {
  background: #ebedf0;
  display: list-item;
}
.chosen-container .chosen-results-scroll {
  background: white;
  margin: 0 4px;
  position: absolute;
  text-align: center;
  width: 321px;
  z-index: 1;
}
.chosen-container .chosen-results-scroll span {
  display: inline-block;
  height: 1.3856;
  text-indent: -5000px;
  width: 9px;
}
.chosen-container .chosen-results-scroll-down {
  bottom: 0;
}
.chosen-container .chosen-results-scroll-down span {
  background: url(\"chosen/chosen-sprite.png\") no-repeat -4px -3px;
}
.chosen-container .chosen-results-scroll-up span {
  background: url(\"chosen/chosen-sprite.png\") no-repeat -22px -3px;
}
.chosen-container-single .chosen-single {
  background-color: #fff;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  border: 1px solid #d5d5d5;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  color: #596776;
  display: block;
  height: 32px;
  overflow: hidden;
  line-height: 32px;
  padding: 0 0 0 8px;
  position: relative;
  text-decoration: none;
  white-space: nowrap;
}
.chosen-container-single .chosen-single span {
  display: block;
  margin-right: 26px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.chosen-container-single .chosen-single abbr {
  background: url(\"chosen/chosen-sprite.png\") right top no-repeat;
  display: block;
  font-size: 1px;
  height: 10px;
  position: absolute;
  right: 26px;
  top: 11px;
  width: 12px;
}
.chosen-container-single .chosen-single abbr:hover {
  background-position: right -11px;
}
.chosen-container-single .chosen-single.chosen-disabled .chosen-single abbr:hover {
  background-position: right 2px;
}
.chosen-container-single .chosen-single div {
  display: block;
  height: 100%;
  position: absolute;
  top: 0;
  right: 0;
  width: 18px;
}
.chosen-container-single .chosen-single div b {
  background: url(\"chosen/chosen-sprite.png\") no-repeat 0 7px;
  display: block;
  height: 100%;
  width: 100%;
}
.chosen-container-single .chosen-search {
  margin: 0;
  padding: 3px 4px;
  position: relative;
  white-space: nowrap;
  z-index: 1000;
}
.chosen-container-single .chosen-search input[type=\"text\"] {
  background: url(\"chosen/chosen-sprite.png\") no-repeat 100% -20px, #fff;
  border: 1px solid #d5d5d5;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  margin: 1px 0;
  padding: 4px 20px 4px 4px;
  width: 100%;
}
.chosen-container-single .chosen-drop {
  margin-top: -1px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
}
.chosen-container-single-nosearch .chosen-search input {
  position: absolute;
  left: -9000px;
}
.chosen-container-multi .chosen-choices {
  background-color: #fff;
  border: 1px solid #d5d5d5;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  cursor: text;
  height: auto !important;
  height: 1%;
  margin: 0;
  overflow: hidden;
  padding: 0;
  position: relative;
}
.chosen-container-multi .chosen-choices li {
  float: left;
  list-style: none;
}
.chosen-container-multi .chosen-choices .search-field {
  margin: 0;
  padding: 0;
  white-space: nowrap;
}
.chosen-container-multi .chosen-choices .search-field input[type=\"text\"] {
  background: transparent !important;
  border: 0 !important;
  -webkit-box-shadow: none;
  box-shadow: none;
  color: #596776;
  height: 30px;
  margin: 0;
  padding: 4px;
  outline: 0;
}
.chosen-container-multi .chosen-choices .search-choice {
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  background-color: #ebedf0;
  border: 1px solid #d5d5d5;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  color: #3c4650;
  cursor: default;
  line-height: 13px;
  margin: 6px 0 3px 5px;
  padding: 3px 20px 3px 5px;
  position: relative;
}
.chosen-container-multi .chosen-choices .search-choice .search-choice-close {
  background: url(\"chosen/chosen-sprite.png\") right top no-repeat;
  display: block;
  font-size: 1px;
  height: 10px;
  position: absolute;
  right: 4px;
  top: 5px;
  width: 12px;
  cursor: pointer;
}
.chosen-container-multi .chosen-choices .search-choice .search-choice-close:hover {
  background-position: right -11px;
}
.chosen-container-multi .chosen-choices .search-choice-focus {
  background: #d4d4d4;
}
.chosen-container-multi .chosen-choices .search-choice-focus .search-choice-close {
  background-position: right -11px;
}
.chosen-container-multi .chosen-results {
  margin: 0 0 0 0;
  padding: 0;
}
.chosen-container-multi .chosen-drop .result-selected {
  display: none;
}
.chosen-container-active .chosen-single {
  border: 1px solid #bcbcbc;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .075) inset, 0 0 8px rgba(82, 168, 236, .6);
  box-shadow: 0 1px 1px rgba(0, 0, 0, .075) inset, 0 0 8px rgba(82, 168, 236, .6);
  -webkit-transition: border linear .2s, box-shadow linear .2s;
  -o-transition: border linear .2s, box-shadow linear .2s;
  transition: border linear .2s, box-shadow linear .2s;
}
.chosen-container-active.chosen-with-drop .chosen-single {
  background-color: #fff;
  border: 1px solid #bcbcbc;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .075) inset, 0 0 8px rgba(82, 168, 236, .6);
  box-shadow: 0 1px 1px rgba(0, 0, 0, .075) inset, 0 0 8px rgba(82, 168, 236, .6);
  -webkit-transition: border linear .2s, box-shadow linear .2s;
  -o-transition: border linear .2s, box-shadow linear .2s;
  transition: border linear .2s, box-shadow linear .2s;
}
.chosen-container-active.chosen-with-drop .chosen-single div {
  background: transparent;
  border-left: none;
}
.chosen-container-active.chosen-with-drop .chosen-single div b {
  background-position: -18px 7px;
}
.chosen-container-active .chosen-choices {
  border: 1px solid #bcbcbc;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .075) inset, 0 0 8px rgba(82, 168, 236, .6);
  box-shadow: 0 1px 1px rgba(0, 0, 0, .075) inset, 0 0 8px rgba(82, 168, 236, .6);
  -webkit-transition: border linear .2s, box-shadow linear .2s;
  -o-transition: border linear .2s, box-shadow linear .2s;
  transition: border linear .2s, box-shadow linear .2s;
}
.chosen-container-active .chosen-choices .search-field input[type=\"text\"] {
  color: #111 !important;
}
.chosen-container-active.chosen-with-drop .chosen-choices {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.chosen-disabled {
  cursor: default;
  opacity: 0.5 !important;
}
.chosen-disabled .chosen-single {
  cursor: default;
}
.chosen-disabled .chosen-choices .search-choice .search-choice-close {
  cursor: default;
}
.chosen-rtl {
  text-align: right;
}
.chosen-rtl .chosen-single {
  padding: 0 8px 0 0;
  overflow: visible;
}
.chosen-rtl .chosen-single span {
  margin-left: 26px;
  margin-right: 0;
  direction: rtl;
}
.chosen-rtl .chosen-single div {
  left: 7px;
  right: auto;
}
.chosen-rtl .chosen-single abbr {
  left: 26px;
  right: auto;
}
.chosen-rtl .chosen-choices .search-field input[type=\"text\"] {
  direction: rtl;
}
.chosen-rtl .chosen-choices li {
  float: right;
}
.chosen-rtl .chosen-choices .search-choice {
  margin: 6px 5px 3px 0;
  padding: 3px 5px 3px 19px;
}
.chosen-rtl .chosen-choices .search-choice .search-choice-close {
  background-position: right top;
  left: 4px;
  right: auto;
}
.chosen-rtl.chosen-container-single .chosen-results {
  margin: 0 0 4px 4px;
  padding: 0 4px 0 0;
}
.chosen-rtl .chosen-results .group-option {
  padding-left: 0;
  padding-right: 15px;
}
.chosen-rtl.chosen-container-active.chosen-with-drop .chosen-single div {
  border-right: none;
}
.chosen-rtl .chosen-search input[type=\"text\"] {
  background: url(\"chosen/chosen-sprite.png\") no-repeat -28px -20px, #fff;
  direction: rtl;
  padding: 4px 5px 4px 20px;
}
.input-group .chosen-container:last-child .chosen-single,
.input-group .chosen-container:last-child .chosen-default,
.input-group .chosen-container:last-child .chosen-choices {
  border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
}
.input-group .chosen-container:not(:last-child) .chosen-single,
.input-group .chosen-container:not(:last-child) .chosen-default,
.input-group .chosen-container:not(:last-child) .chosen-choices {
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
}
.form-inline .chosen-container {
  display: inline-table;
  vertical-align: middle;
  min-width: 200px;
}
.chosen-container .default,
.chosen-container .chosen-default {
  color: #a0acb8 !important;
}
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-resolution: 2dppx) {
  .chosen-rtl .chosen-search input[type=\"text\"],
  .chosen-container-single .chosen-single abbr,
  .chosen-container-single .chosen-single div b,
  .chosen-container-single .chosen-search input[type=\"text\"],
  .chosen-container-multi .chosen-choices .search-choice .search-choice-close,
  .chosen-container .chosen-results-scroll-down span,
  .chosen-container .chosen-results-scroll-up span {
    background-image: url(\"chosen/chosen-sprite@2x.png\") !important;
    background-size: 52px 37px !important;
    background-repeat: no-repeat !important;
  }
}
.has-error select.form-control + .chosen-container.chosen-container-single .chosen-single,
.has-error select.form-control + .chosen-container-multi .chosen-choices {
  border-color: #a94442;
}
.has-error select.form-control + .chosen-container.chosen-container-single .chosen-single,
.has-error select.form-control + .chosen-container-multi .chosen-choices {
  border-color: #a94442;
}
.ms-container {
  background: transparent url('multiselect/switch.png') no-repeat 50% 50%;
  /*width: 370px;*/
}
.ms-container:after {
  content: \".\";
  display: block;
  height: 0;
  line-height: 0;
  font-size: 0;
  clear: both;
  min-height: 0;
  visibility: hidden;
}
.ms-container .ms-selectable,
.ms-container .ms-selection {
  background: #fff;
  color: #555555;
  float: left;
  width: 45%;
}
.ms-container .ms-selection {
  float: right;
}
.ms-container .ms-list {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
  -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
  -ms-transition: border linear 0.2s, box-shadow linear 0.2s;
  -o-transition: border linear 0.2s, box-shadow linear 0.2s;
  transition: border linear 0.2s, box-shadow linear 0.2s;
  border: 1px solid #ccc;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  position: relative;
  height: 200px;
  padding: 0;
  overflow-y: auto;
  overflow-x: hidden;
}
.ms-container .ms-list.ms-focus {
  border-color: #4e5e9e;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), rgba(78, 94, 158, 0.6);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(78, 94, 158, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(78, 94, 158, 0.6);
  outline: 0;
  outline: thin dotted \\9;
}
.ms-container ul {
  margin: 0;
  list-style-type: none;
  padding: 0;
}
.ms-container .ms-optgroup-container {
  width: 100%;
}
.ms-container .ms-optgroup-label {
  margin: 0;
  padding: 5px 0px 0px 5px;
  cursor: pointer;
  color: #999;
}
.ms-container .ms-selectable li.ms-elem-selectable,
.ms-container .ms-selection li.ms-elem-selection {
  border-bottom: 1px #eee solid;
  padding: 2px 10px;
  color: #555;
  font-size: 14px;
}
.ms-container .ms-selectable li.ms-hover,
.ms-container .ms-selection li.ms-hover {
  cursor: pointer;
  color: #fff;
  text-decoration: none;
  background-color: #4e5e9e;
}
.ms-container .ms-selectable li.disabled,
.ms-container .ms-selection li.disabled {
  background-color: #eee;
  color: #aaa;
  cursor: text;
}
.ms-search {
  width: 100%;
  margin-bottom: 5px;
  height: auto;
}
.minicolors {
  position: relative;
}
.minicolors-sprite {
  background-image: url(data:image/png;base64,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);
}
.minicolors-no-data-uris .minicolors-sprite {
  background-image: url(\"minicolors/img/jquery.minicolors.png\");
}
.minicolors-swatch {
  position: absolute;
  vertical-align: middle;
  background-position: -80px 0;
  border: solid 1px #ccc;
  cursor: text;
  padding: 0;
  margin: 0;
  display: inline-block;
}
.minicolors-swatch-color {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
.minicolors input[type=hidden] + .minicolors-swatch {
  width: 28px;
  position: static;
  cursor: pointer;
}
.minicolors input[type=hidden][disabled] + .minicolors-swatch {
  cursor: default;
}
/* Panel */
.minicolors-panel {
  position: absolute;
  width: 173px;
  height: 152px;
  background: white;
  border: solid 1px #CCC;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  z-index: 99999;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  display: none;
}
.minicolors-panel.minicolors-visible {
  display: block;
}
/* Panel positioning */
.minicolors-position-top .minicolors-panel {
  top: -154px;
}
.minicolors-position-right .minicolors-panel {
  right: 0;
}
.minicolors-position-bottom .minicolors-panel {
  top: auto;
}
.minicolors-position-left .minicolors-panel {
  left: 0;
}
.minicolors-with-opacity .minicolors-panel {
  width: 194px;
}
.minicolors .minicolors-grid {
  position: absolute;
  top: 1px;
  left: 1px;
  width: 150px;
  height: 150px;
  background-position: -120px 0;
  cursor: crosshair;
}
.minicolors .minicolors-grid-inner {
  position: absolute;
  top: 0;
  left: 0;
  width: 150px;
  height: 150px;
}
.minicolors-slider-saturation .minicolors-grid {
  background-position: -420px 0;
}
.minicolors-slider-saturation .minicolors-grid-inner {
  background-position: -270px 0;
  background-image: inherit;
}
.minicolors-slider-brightness .minicolors-grid {
  background-position: -570px 0;
}
.minicolors-slider-brightness .minicolors-grid-inner {
  background-color: black;
}
.minicolors-slider-wheel .minicolors-grid {
  background-position: -720px 0;
}
.minicolors-slider,
.minicolors-opacity-slider {
  position: absolute;
  top: 1px;
  left: 152px;
  width: 20px;
  height: 150px;
  background-color: white;
  background-position: 0 0;
  cursor: row-resize;
}
.minicolors-slider-saturation .minicolors-slider {
  background-position: -60px 0;
}
.minicolors-slider-brightness .minicolors-slider {
  background-position: -20px 0;
}
.minicolors-slider-wheel .minicolors-slider {
  background-position: -20px 0;
}
.minicolors-opacity-slider {
  left: 173px;
  background-position: -40px 0;
  display: none;
}
.minicolors-with-opacity .minicolors-opacity-slider {
  display: block;
}
/* Pickers */
.minicolors-grid .minicolors-picker {
  position: absolute;
  top: 70px;
  left: 70px;
  width: 12px;
  height: 12px;
  border: solid 1px black;
  border-radius: 10px;
  margin-top: -6px;
  margin-left: -6px;
  background: none;
}
.minicolors-grid .minicolors-picker > div {
  position: absolute;
  top: 0;
  left: 0;
  width: 8px;
  height: 8px;
  border-radius: 8px;
  border: solid 2px white;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
.minicolors-picker {
  position: absolute;
  top: 0;
  left: 0;
  width: 18px;
  height: 2px;
  background: white;
  border: solid 1px black;
  margin-top: -2px;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
}
/* Inline controls */
.minicolors-inline {
  display: inline-block;
}
.minicolors-inline .minicolors-input {
  display: none !important;
}
.minicolors-inline .minicolors-panel {
  position: relative;
  top: auto;
  left: auto;
  box-shadow: none;
  z-index: auto;
  display: inline-block;
}
/* Default theme */
.minicolors-theme-default .minicolors-swatch {
  top: 5px;
  left: 5px;
  width: 18px;
  height: 18px;
}
.minicolors-theme-default.minicolors-position-right .minicolors-swatch {
  left: auto;
  right: 5px;
}
.minicolors-theme-default.minicolors {
  width: auto;
  display: inline-block;
}
.minicolors-theme-default .minicolors-input {
  height: 20px;
  width: auto;
  display: inline-block;
  padding-left: 26px;
}
.minicolors-theme-default.minicolors-position-right .minicolors-input {
  padding-right: 26px;
  padding-left: inherit;
}
/* Bootstrap theme */
.minicolors-theme-bootstrap .minicolors-swatch {
  z-index: 2;
  top: 2px;
  left: 3px;
  width: 28px;
  height: 28px;
  border-radius: 3px;
}
.minicolors-theme-bootstrap .minicolors-swatch-color {
  border-radius: inherit;
}
.minicolors-theme-bootstrap.minicolors-position-right .minicolors-swatch {
  left: auto;
  right: 3px;
}
.minicolors-theme-bootstrap .minicolors-input {
  float: none;
  padding-left: 44px;
}
.minicolors-theme-bootstrap.minicolors-position-right .minicolors-input {
  padding-right: 44px;
  padding-left: 12px;
}
.minicolors-theme-bootstrap .minicolors-input.input-lg + .minicolors-swatch {
  top: 4px;
  left: 4px;
  width: 37px;
  height: 37px;
  border-radius: 5px;
}
.minicolors-theme-bootstrap .minicolors-input.input-sm + .minicolors-swatch {
  width: 24px;
  height: 24px;
}
.input-group .minicolors-theme-bootstrap:not(:first-child) .minicolors-input {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
span.emoji-sizer {
  line-height: 1.013em;
  font-size: 1.375em;
  margin: -0.05em 0;
}
span.emoji-outer {
  display: -moz-inline-box;
  display: inline-block;
  *display: inline;
  height: 1em;
  width: 1em;
}
span.emoji-inner {
  background: url(emoji/emoji.png);
  /*background-size: 3500% !important; */
  display: -moz-inline-box;
  display: inline-block;
  text-indent: -9999px;
  width: 100%;
  height: 100%;
  vertical-align: baseline;
  *vertical-align: auto;
  *zoom: 1;
}
span.emoji-inner {
  background-size: 4100%;
}
.emojia9 {
  background-position: 0% 0% !important;
}
.emojiae {
  background-position: 0% 2.5% !important;
}
.emoji203c {
  background-position: 0% 5% !important;
}
.emoji2049 {
  background-position: 0% 7.5% !important;
}
.emoji2122 {
  background-position: 0% 10% !important;
}
.emoji2139 {
  background-position: 0% 12.5% !important;
}
.emoji2194 {
  background-position: 0% 15% !important;
}
.emoji2195 {
  background-position: 0% 17.5% !important;
}
.emoji2196 {
  background-position: 0% 20% !important;
}
.emoji2197 {
  background-position: 0% 22.5% !important;
}
.emoji2198 {
  background-position: 0% 25% !important;
}
.emoji2199 {
  background-position: 0% 27.5% !important;
}
.emoji21a9 {
  background-position: 0% 30% !important;
}
.emoji21aa {
  background-position: 0% 32.5% !important;
}
.emoji231a {
  background-position: 0% 35% !important;
}
.emoji231b {
  background-position: 0% 37.5% !important;
}
.emoji2328 {
  background-position: 0% 40% !important;
}
.emoji23e9 {
  background-position: 0% 42.5% !important;
}
.emoji23ea {
  background-position: 0% 45% !important;
}
.emoji23eb {
  background-position: 0% 47.5% !important;
}
.emoji23ec {
  background-position: 0% 50% !important;
}
.emoji23ed {
  background-position: 0% 52.5% !important;
}
.emoji23ee {
  background-position: 0% 55% !important;
}
.emoji23ef {
  background-position: 0% 57.5% !important;
}
.emoji23f0 {
  background-position: 0% 60% !important;
}
.emoji23f1 {
  background-position: 0% 62.5% !important;
}
.emoji23f2 {
  background-position: 0% 65% !important;
}
.emoji23f3 {
  background-position: 0% 67.5% !important;
}
.emoji23f8 {
  background-position: 0% 70% !important;
}
.emoji23f9 {
  background-position: 0% 72.5% !important;
}
.emoji23fa {
  background-position: 0% 75% !important;
}
.emoji24c2 {
  background-position: 0% 77.5% !important;
}
.emoji25aa {
  background-position: 0% 80% !important;
}
.emoji25ab {
  background-position: 0% 82.5% !important;
}
.emoji25b6 {
  background-position: 0% 85% !important;
}
.emoji25c0 {
  background-position: 0% 87.5% !important;
}
.emoji25fb {
  background-position: 0% 90% !important;
}
.emoji25fc {
  background-position: 0% 92.5% !important;
}
.emoji25fd {
  background-position: 0% 95% !important;
}
.emoji25fe {
  background-position: 0% 97.5% !important;
}
.emoji2600 {
  background-position: 0% 100% !important;
}
.emoji2601 {
  background-position: 2.5% 0% !important;
}
.emoji2602 {
  background-position: 2.5% 2.5% !important;
}
.emoji2603 {
  background-position: 2.5% 5% !important;
}
.emoji2604 {
  background-position: 2.5% 7.5% !important;
}
.emoji260e {
  background-position: 2.5% 10% !important;
}
.emoji2611 {
  background-position: 2.5% 12.5% !important;
}
.emoji2614 {
  background-position: 2.5% 15% !important;
}
.emoji2615 {
  background-position: 2.5% 17.5% !important;
}
.emoji2618 {
  background-position: 2.5% 20% !important;
}
.emoji261d {
  background-position: 2.5% 22.5% !important;
}
.emoji2620 {
  background-position: 2.5% 37.5% !important;
}
.emoji2622 {
  background-position: 2.5% 40% !important;
}
.emoji2623 {
  background-position: 2.5% 42.5% !important;
}
.emoji2626 {
  background-position: 2.5% 45% !important;
}
.emoji262a {
  background-position: 2.5% 47.5% !important;
}
.emoji262e {
  background-position: 2.5% 50% !important;
}
.emoji262f {
  background-position: 2.5% 52.5% !important;
}
.emoji2638 {
  background-position: 2.5% 55% !important;
}
.emoji2639 {
  background-position: 2.5% 57.5% !important;
}
.emoji263a {
  background-position: 2.5% 60% !important;
}
.emoji2648 {
  background-position: 2.5% 62.5% !important;
}
.emoji2649 {
  background-position: 2.5% 65% !important;
}
.emoji264a {
  background-position: 2.5% 67.5% !important;
}
.emoji264b {
  background-position: 2.5% 70% !important;
}
.emoji264c {
  background-position: 2.5% 72.5% !important;
}
.emoji264d {
  background-position: 2.5% 75% !important;
}
.emoji264e {
  background-position: 2.5% 77.5% !important;
}
.emoji264f {
  background-position: 2.5% 80% !important;
}
.emoji2650 {
  background-position: 2.5% 82.5% !important;
}
.emoji2651 {
  background-position: 2.5% 85% !important;
}
.emoji2652 {
  background-position: 2.5% 87.5% !important;
}
.emoji2653 {
  background-position: 2.5% 90% !important;
}
.emoji2660 {
  background-position: 2.5% 92.5% !important;
}
.emoji2663 {
  background-position: 2.5% 95% !important;
}
.emoji2665 {
  background-position: 2.5% 97.5% !important;
}
.emoji2666 {
  background-position: 2.5% 100% !important;
}
.emoji2668 {
  background-position: 5% 0% !important;
}
.emoji267b {
  background-position: 5% 2.5% !important;
}
.emoji267f {
  background-position: 5% 5% !important;
}
.emoji2692 {
  background-position: 5% 7.5% !important;
}
.emoji2693 {
  background-position: 5% 10% !important;
}
.emoji2694 {
  background-position: 5% 12.5% !important;
}
.emoji2696 {
  background-position: 5% 15% !important;
}
.emoji2697 {
  background-position: 5% 17.5% !important;
}
.emoji2699 {
  background-position: 5% 20% !important;
}
.emoji269b {
  background-position: 5% 22.5% !important;
}
.emoji269c {
  background-position: 5% 25% !important;
}
.emoji26a0 {
  background-position: 5% 27.5% !important;
}
.emoji26a1 {
  background-position: 5% 30% !important;
}
.emoji26aa {
  background-position: 5% 32.5% !important;
}
.emoji26ab {
  background-position: 5% 35% !important;
}
.emoji26b0 {
  background-position: 5% 37.5% !important;
}
.emoji26b1 {
  background-position: 5% 40% !important;
}
.emoji26bd {
  background-position: 5% 42.5% !important;
}
.emoji26be {
  background-position: 5% 45% !important;
}
.emoji26c4 {
  background-position: 5% 47.5% !important;
}
.emoji26c5 {
  background-position: 5% 50% !important;
}
.emoji26c8 {
  background-position: 5% 52.5% !important;
}
.emoji26ce {
  background-position: 5% 55% !important;
}
.emoji26cf {
  background-position: 5% 57.5% !important;
}
.emoji26d1 {
  background-position: 5% 60% !important;
}
.emoji26d3 {
  background-position: 5% 62.5% !important;
}
.emoji26d4 {
  background-position: 5% 65% !important;
}
.emoji26e9 {
  background-position: 5% 67.5% !important;
}
.emoji26ea {
  background-position: 5% 70% !important;
}
.emoji26f0 {
  background-position: 5% 72.5% !important;
}
.emoji26f1 {
  background-position: 5% 75% !important;
}
.emoji26f2 {
  background-position: 5% 77.5% !important;
}
.emoji26f3 {
  background-position: 5% 80% !important;
}
.emoji26f4 {
  background-position: 5% 82.5% !important;
}
.emoji26f5 {
  background-position: 5% 85% !important;
}
.emoji26f7 {
  background-position: 5% 87.5% !important;
}
.emoji26f8 {
  background-position: 5% 90% !important;
}
.emoji26f9 {
  background-position: 5% 92.5% !important;
}
.emoji26fa {
  background-position: 7.5% 5% !important;
}
.emoji26fd {
  background-position: 7.5% 7.5% !important;
}
.emoji2702 {
  background-position: 7.5% 10% !important;
}
.emoji2705 {
  background-position: 7.5% 12.5% !important;
}
.emoji2708 {
  background-position: 7.5% 15% !important;
}
.emoji2709 {
  background-position: 7.5% 17.5% !important;
}
.emoji270a {
  background-position: 7.5% 20% !important;
}
.emoji270b {
  background-position: 7.5% 35% !important;
}
.emoji270c {
  background-position: 7.5% 50% !important;
}
.emoji270d {
  background-position: 7.5% 65% !important;
}
.emoji270f {
  background-position: 7.5% 80% !important;
}
.emoji2712 {
  background-position: 7.5% 82.5% !important;
}
.emoji2714 {
  background-position: 7.5% 85% !important;
}
.emoji2716 {
  background-position: 7.5% 87.5% !important;
}
.emoji271d {
  background-position: 7.5% 90% !important;
}
.emoji2721 {
  background-position: 7.5% 92.5% !important;
}
.emoji2728 {
  background-position: 7.5% 95% !important;
}
.emoji2733 {
  background-position: 7.5% 97.5% !important;
}
.emoji2734 {
  background-position: 7.5% 100% !important;
}
.emoji2744 {
  background-position: 10% 0% !important;
}
.emoji2747 {
  background-position: 10% 2.5% !important;
}
.emoji274c {
  background-position: 10% 5% !important;
}
.emoji274e {
  background-position: 10% 7.5% !important;
}
.emoji2753 {
  background-position: 10% 10% !important;
}
.emoji2754 {
  background-position: 10% 12.5% !important;
}
.emoji2755 {
  background-position: 10% 15% !important;
}
.emoji2757 {
  background-position: 10% 17.5% !important;
}
.emoji2763 {
  background-position: 10% 20% !important;
}
.emoji2764 {
  background-position: 10% 22.5% !important;
}
.emoji2795 {
  background-position: 10% 25% !important;
}
.emoji2796 {
  background-position: 10% 27.5% !important;
}
.emoji2797 {
  background-position: 10% 30% !important;
}
.emoji27a1 {
  background-position: 10% 32.5% !important;
}
.emoji27b0 {
  background-position: 10% 35% !important;
}
.emoji27bf {
  background-position: 10% 37.5% !important;
}
.emoji2934 {
  background-position: 10% 40% !important;
}
.emoji2935 {
  background-position: 10% 42.5% !important;
}
.emoji2b05 {
  background-position: 10% 45% !important;
}
.emoji2b06 {
  background-position: 10% 47.5% !important;
}
.emoji2b07 {
  background-position: 10% 50% !important;
}
.emoji2b1b {
  background-position: 10% 52.5% !important;
}
.emoji2b1c {
  background-position: 10% 55% !important;
}
.emoji2b50 {
  background-position: 10% 57.5% !important;
}
.emoji2b55 {
  background-position: 10% 60% !important;
}
.emoji3030 {
  background-position: 10% 62.5% !important;
}
.emoji303d {
  background-position: 10% 65% !important;
}
.emoji3297 {
  background-position: 10% 67.5% !important;
}
.emoji3299 {
  background-position: 10% 70% !important;
}
.emoji1f004 {
  background-position: 10% 72.5% !important;
}
.emoji1f0cf {
  background-position: 10% 75% !important;
}
.emoji1f170 {
  background-position: 10% 77.5% !important;
}
.emoji1f171 {
  background-position: 10% 80% !important;
}
.emoji1f17e {
  background-position: 10% 82.5% !important;
}
.emoji1f17f {
  background-position: 10% 85% !important;
}
.emoji1f18e {
  background-position: 10% 87.5% !important;
}
.emoji1f191 {
  background-position: 10% 90% !important;
}
.emoji1f192 {
  background-position: 10% 92.5% !important;
}
.emoji1f193 {
  background-position: 10% 95% !important;
}
.emoji1f194 {
  background-position: 10% 97.5% !important;
}
.emoji1f195 {
  background-position: 10% 100% !important;
}
.emoji1f196 {
  background-position: 12.5% 0% !important;
}
.emoji1f197 {
  background-position: 12.5% 2.5% !important;
}
.emoji1f198 {
  background-position: 12.5% 5% !important;
}
.emoji1f199 {
  background-position: 12.5% 7.5% !important;
}
.emoji1f19a {
  background-position: 12.5% 10% !important;
}
.emoji1f201 {
  background-position: 12.5% 12.5% !important;
}
.emoji1f202 {
  background-position: 12.5% 15% !important;
}
.emoji1f21a {
  background-position: 12.5% 17.5% !important;
}
.emoji1f22f {
  background-position: 12.5% 20% !important;
}
.emoji1f232 {
  background-position: 12.5% 22.5% !important;
}
.emoji1f233 {
  background-position: 12.5% 25% !important;
}
.emoji1f234 {
  background-position: 12.5% 27.5% !important;
}
.emoji1f235 {
  background-position: 12.5% 30% !important;
}
.emoji1f236 {
  background-position: 12.5% 32.5% !important;
}
.emoji1f237 {
  background-position: 12.5% 35% !important;
}
.emoji1f238 {
  background-position: 12.5% 37.5% !important;
}
.emoji1f239 {
  background-position: 12.5% 40% !important;
}
.emoji1f23a {
  background-position: 12.5% 42.5% !important;
}
.emoji1f250 {
  background-position: 12.5% 45% !important;
}
.emoji1f251 {
  background-position: 12.5% 47.5% !important;
}
.emoji1f300 {
  background-position: 12.5% 50% !important;
}
.emoji1f301 {
  background-position: 12.5% 52.5% !important;
}
.emoji1f302 {
  background-position: 12.5% 55% !important;
}
.emoji1f303 {
  background-position: 12.5% 57.5% !important;
}
.emoji1f304 {
  background-position: 12.5% 60% !important;
}
.emoji1f305 {
  background-position: 12.5% 62.5% !important;
}
.emoji1f306 {
  background-position: 12.5% 65% !important;
}
.emoji1f307 {
  background-position: 12.5% 67.5% !important;
}
.emoji1f308 {
  background-position: 12.5% 70% !important;
}
.emoji1f309 {
  background-position: 12.5% 72.5% !important;
}
.emoji1f30a {
  background-position: 12.5% 75% !important;
}
.emoji1f30b {
  background-position: 12.5% 77.5% !important;
}
.emoji1f30c {
  background-position: 12.5% 80% !important;
}
.emoji1f30d {
  background-position: 12.5% 82.5% !important;
}
.emoji1f30e {
  background-position: 12.5% 85% !important;
}
.emoji1f30f {
  background-position: 12.5% 87.5% !important;
}
.emoji1f310 {
  background-position: 12.5% 90% !important;
}
.emoji1f311 {
  background-position: 12.5% 92.5% !important;
}
.emoji1f312 {
  background-position: 12.5% 95% !important;
}
.emoji1f313 {
  background-position: 12.5% 97.5% !important;
}
.emoji1f314 {
  background-position: 12.5% 100% !important;
}
.emoji1f315 {
  background-position: 15% 0% !important;
}
.emoji1f316 {
  background-position: 15% 2.5% !important;
}
.emoji1f317 {
  background-position: 15% 5% !important;
}
.emoji1f318 {
  background-position: 15% 7.5% !important;
}
.emoji1f319 {
  background-position: 15% 10% !important;
}
.emoji1f31a {
  background-position: 15% 12.5% !important;
}
.emoji1f31b {
  background-position: 15% 15% !important;
}
.emoji1f31c {
  background-position: 15% 17.5% !important;
}
.emoji1f31d {
  background-position: 15% 20% !important;
}
.emoji1f31e {
  background-position: 15% 22.5% !important;
}
.emoji1f31f {
  background-position: 15% 25% !important;
}
.emoji1f320 {
  background-position: 15% 27.5% !important;
}
.emoji1f321 {
  background-position: 15% 30% !important;
}
.emoji1f324 {
  background-position: 15% 32.5% !important;
}
.emoji1f325 {
  background-position: 15% 35% !important;
}
.emoji1f326 {
  background-position: 15% 37.5% !important;
}
.emoji1f327 {
  background-position: 15% 40% !important;
}
.emoji1f328 {
  background-position: 15% 42.5% !important;
}
.emoji1f329 {
  background-position: 15% 45% !important;
}
.emoji1f32a {
  background-position: 15% 47.5% !important;
}
.emoji1f32b {
  background-position: 15% 50% !important;
}
.emoji1f32c {
  background-position: 15% 52.5% !important;
}
.emoji1f32d {
  background-position: 15% 55% !important;
}
.emoji1f32e {
  background-position: 15% 57.5% !important;
}
.emoji1f32f {
  background-position: 15% 60% !important;
}
.emoji1f330 {
  background-position: 15% 62.5% !important;
}
.emoji1f331 {
  background-position: 15% 65% !important;
}
.emoji1f332 {
  background-position: 15% 67.5% !important;
}
.emoji1f333 {
  background-position: 15% 70% !important;
}
.emoji1f334 {
  background-position: 15% 72.5% !important;
}
.emoji1f335 {
  background-position: 15% 75% !important;
}
.emoji1f336 {
  background-position: 15% 77.5% !important;
}
.emoji1f337 {
  background-position: 15% 80% !important;
}
.emoji1f338 {
  background-position: 15% 82.5% !important;
}
.emoji1f339 {
  background-position: 15% 85% !important;
}
.emoji1f33a {
  background-position: 15% 87.5% !important;
}
.emoji1f33b {
  background-position: 15% 90% !important;
}
.emoji1f33c {
  background-position: 15% 92.5% !important;
}
.emoji1f33d {
  background-position: 15% 95% !important;
}
.emoji1f33e {
  background-position: 15% 97.5% !important;
}
.emoji1f33f {
  background-position: 15% 100% !important;
}
.emoji1f340 {
  background-position: 17.5% 0% !important;
}
.emoji1f341 {
  background-position: 17.5% 2.5% !important;
}
.emoji1f342 {
  background-position: 17.5% 5% !important;
}
.emoji1f343 {
  background-position: 17.5% 7.5% !important;
}
.emoji1f344 {
  background-position: 17.5% 10% !important;
}
.emoji1f345 {
  background-position: 17.5% 12.5% !important;
}
.emoji1f346 {
  background-position: 17.5% 15% !important;
}
.emoji1f347 {
  background-position: 17.5% 17.5% !important;
}
.emoji1f348 {
  background-position: 17.5% 20% !important;
}
.emoji1f349 {
  background-position: 17.5% 22.5% !important;
}
.emoji1f34a {
  background-position: 17.5% 25% !important;
}
.emoji1f34b {
  background-position: 17.5% 27.5% !important;
}
.emoji1f34c {
  background-position: 17.5% 30% !important;
}
.emoji1f34d {
  background-position: 17.5% 32.5% !important;
}
.emoji1f34e {
  background-position: 17.5% 35% !important;
}
.emoji1f34f {
  background-position: 17.5% 37.5% !important;
}
.emoji1f350 {
  background-position: 17.5% 40% !important;
}
.emoji1f351 {
  background-position: 17.5% 42.5% !important;
}
.emoji1f352 {
  background-position: 17.5% 45% !important;
}
.emoji1f353 {
  background-position: 17.5% 47.5% !important;
}
.emoji1f354 {
  background-position: 17.5% 50% !important;
}
.emoji1f355 {
  background-position: 17.5% 52.5% !important;
}
.emoji1f356 {
  background-position: 17.5% 55% !important;
}
.emoji1f357 {
  background-position: 17.5% 57.5% !important;
}
.emoji1f358 {
  background-position: 17.5% 60% !important;
}
.emoji1f359 {
  background-position: 17.5% 62.5% !important;
}
.emoji1f35a {
  background-position: 17.5% 65% !important;
}
.emoji1f35b {
  background-position: 17.5% 67.5% !important;
}
.emoji1f35c {
  background-position: 17.5% 70% !important;
}
.emoji1f35d {
  background-position: 17.5% 72.5% !important;
}
.emoji1f35e {
  background-position: 17.5% 75% !important;
}
.emoji1f35f {
  background-position: 17.5% 77.5% !important;
}
.emoji1f360 {
  background-position: 17.5% 80% !important;
}
.emoji1f361 {
  background-position: 17.5% 82.5% !important;
}
.emoji1f362 {
  background-position: 17.5% 85% !important;
}
.emoji1f363 {
  background-position: 17.5% 87.5% !important;
}
.emoji1f364 {
  background-position: 17.5% 90% !important;
}
.emoji1f365 {
  background-position: 17.5% 92.5% !important;
}
.emoji1f366 {
  background-position: 17.5% 95% !important;
}
.emoji1f367 {
  background-position: 17.5% 97.5% !important;
}
.emoji1f368 {
  background-position: 17.5% 100% !important;
}
.emoji1f369 {
  background-position: 20% 0% !important;
}
.emoji1f36a {
  background-position: 20% 2.5% !important;
}
.emoji1f36b {
  background-position: 20% 5% !important;
}
.emoji1f36c {
  background-position: 20% 7.5% !important;
}
.emoji1f36d {
  background-position: 20% 10% !important;
}
.emoji1f36e {
  background-position: 20% 12.5% !important;
}
.emoji1f36f {
  background-position: 20% 15% !important;
}
.emoji1f370 {
  background-position: 20% 17.5% !important;
}
.emoji1f371 {
  background-position: 20% 20% !important;
}
.emoji1f372 {
  background-position: 20% 22.5% !important;
}
.emoji1f373 {
  background-position: 20% 25% !important;
}
.emoji1f374 {
  background-position: 20% 27.5% !important;
}
.emoji1f375 {
  background-position: 20% 30% !important;
}
.emoji1f376 {
  background-position: 20% 32.5% !important;
}
.emoji1f377 {
  background-position: 20% 35% !important;
}
.emoji1f378 {
  background-position: 20% 37.5% !important;
}
.emoji1f379 {
  background-position: 20% 40% !important;
}
.emoji1f37a {
  background-position: 20% 42.5% !important;
}
.emoji1f37b {
  background-position: 20% 45% !important;
}
.emoji1f37c {
  background-position: 20% 47.5% !important;
}
.emoji1f37d {
  background-position: 20% 50% !important;
}
.emoji1f37e {
  background-position: 20% 52.5% !important;
}
.emoji1f37f {
  background-position: 20% 55% !important;
}
.emoji1f380 {
  background-position: 20% 57.5% !important;
}
.emoji1f381 {
  background-position: 20% 60% !important;
}
.emoji1f382 {
  background-position: 20% 62.5% !important;
}
.emoji1f383 {
  background-position: 20% 65% !important;
}
.emoji1f384 {
  background-position: 20% 67.5% !important;
}
.emoji1f385 {
  background-position: 20% 70% !important;
}
.emoji1f386 {
  background-position: 20% 85% !important;
}
.emoji1f387 {
  background-position: 20% 87.5% !important;
}
.emoji1f388 {
  background-position: 20% 90% !important;
}
.emoji1f389 {
  background-position: 20% 92.5% !important;
}
.emoji1f38a {
  background-position: 20% 95% !important;
}
.emoji1f38b {
  background-position: 20% 97.5% !important;
}
.emoji1f38c {
  background-position: 20% 100% !important;
}
.emoji1f38d {
  background-position: 22.5% 0% !important;
}
.emoji1f38e {
  background-position: 22.5% 2.5% !important;
}
.emoji1f38f {
  background-position: 22.5% 5% !important;
}
.emoji1f390 {
  background-position: 22.5% 7.5% !important;
}
.emoji1f391 {
  background-position: 22.5% 10% !important;
}
.emoji1f392 {
  background-position: 22.5% 12.5% !important;
}
.emoji1f393 {
  background-position: 22.5% 15% !important;
}
.emoji1f396 {
  background-position: 22.5% 17.5% !important;
}
.emoji1f397 {
  background-position: 22.5% 20% !important;
}
.emoji1f399 {
  background-position: 22.5% 22.5% !important;
}
.emoji1f39a {
  background-position: 22.5% 25% !important;
}
.emoji1f39b {
  background-position: 22.5% 27.5% !important;
}
.emoji1f39e {
  background-position: 22.5% 30% !important;
}
.emoji1f39f {
  background-position: 22.5% 32.5% !important;
}
.emoji1f3a0 {
  background-position: 22.5% 35% !important;
}
.emoji1f3a1 {
  background-position: 22.5% 37.5% !important;
}
.emoji1f3a2 {
  background-position: 22.5% 40% !important;
}
.emoji1f3a3 {
  background-position: 22.5% 42.5% !important;
}
.emoji1f3a4 {
  background-position: 22.5% 45% !important;
}
.emoji1f3a5 {
  background-position: 22.5% 47.5% !important;
}
.emoji1f3a6 {
  background-position: 22.5% 50% !important;
}
.emoji1f3a7 {
  background-position: 22.5% 52.5% !important;
}
.emoji1f3a8 {
  background-position: 22.5% 55% !important;
}
.emoji1f3a9 {
  background-position: 22.5% 57.5% !important;
}
.emoji1f3aa {
  background-position: 22.5% 60% !important;
}
.emoji1f3ab {
  background-position: 22.5% 62.5% !important;
}
.emoji1f3ac {
  background-position: 22.5% 65% !important;
}
.emoji1f3ad {
  background-position: 22.5% 67.5% !important;
}
.emoji1f3ae {
  background-position: 22.5% 70% !important;
}
.emoji1f3af {
  background-position: 22.5% 72.5% !important;
}
.emoji1f3b0 {
  background-position: 22.5% 75% !important;
}
.emoji1f3b1 {
  background-position: 22.5% 77.5% !important;
}
.emoji1f3b2 {
  background-position: 22.5% 80% !important;
}
.emoji1f3b3 {
  background-position: 22.5% 82.5% !important;
}
.emoji1f3b4 {
  background-position: 22.5% 85% !important;
}
.emoji1f3b5 {
  background-position: 22.5% 87.5% !important;
}
.emoji1f3b6 {
  background-position: 22.5% 90% !important;
}
.emoji1f3b7 {
  background-position: 22.5% 92.5% !important;
}
.emoji1f3b8 {
  background-position: 22.5% 95% !important;
}
.emoji1f3b9 {
  background-position: 22.5% 97.5% !important;
}
.emoji1f3ba {
  background-position: 22.5% 100% !important;
}
.emoji1f3bb {
  background-position: 25% 0% !important;
}
.emoji1f3bc {
  background-position: 25% 2.5% !important;
}
.emoji1f3bd {
  background-position: 25% 5% !important;
}
.emoji1f3be {
  background-position: 25% 7.5% !important;
}
.emoji1f3bf {
  background-position: 25% 10% !important;
}
.emoji1f3c0 {
  background-position: 25% 12.5% !important;
}
.emoji1f3c1 {
  background-position: 25% 15% !important;
}
.emoji1f3c2 {
  background-position: 25% 17.5% !important;
}
.emoji1f3c3 {
  background-position: 25% 20% !important;
}
.emoji1f3c4 {
  background-position: 25% 35% !important;
}
.emoji1f3c5 {
  background-position: 25% 50% !important;
}
.emoji1f3c6 {
  background-position: 25% 52.5% !important;
}
.emoji1f3c7 {
  background-position: 25% 55% !important;
}
.emoji1f3c8 {
  background-position: 25% 70% !important;
}
.emoji1f3c9 {
  background-position: 25% 72.5% !important;
}
.emoji1f3ca {
  background-position: 25% 75% !important;
}
.emoji1f3cb {
  background-position: 25% 90% !important;
}
.emoji1f3cc {
  background-position: 27.5% 2.5% !important;
}
.emoji1f3cd {
  background-position: 27.5% 5% !important;
}
.emoji1f3ce {
  background-position: 27.5% 7.5% !important;
}
.emoji1f3cf {
  background-position: 27.5% 10% !important;
}
.emoji1f3d0 {
  background-position: 27.5% 12.5% !important;
}
.emoji1f3d1 {
  background-position: 27.5% 15% !important;
}
.emoji1f3d2 {
  background-position: 27.5% 17.5% !important;
}
.emoji1f3d3 {
  background-position: 27.5% 20% !important;
}
.emoji1f3d4 {
  background-position: 27.5% 22.5% !important;
}
.emoji1f3d5 {
  background-position: 27.5% 25% !important;
}
.emoji1f3d6 {
  background-position: 27.5% 27.5% !important;
}
.emoji1f3d7 {
  background-position: 27.5% 30% !important;
}
.emoji1f3d8 {
  background-position: 27.5% 32.5% !important;
}
.emoji1f3d9 {
  background-position: 27.5% 35% !important;
}
.emoji1f3da {
  background-position: 27.5% 37.5% !important;
}
.emoji1f3db {
  background-position: 27.5% 40% !important;
}
.emoji1f3dc {
  background-position: 27.5% 42.5% !important;
}
.emoji1f3dd {
  background-position: 27.5% 45% !important;
}
.emoji1f3de {
  background-position: 27.5% 47.5% !important;
}
.emoji1f3df {
  background-position: 27.5% 50% !important;
}
.emoji1f3e0 {
  background-position: 27.5% 52.5% !important;
}
.emoji1f3e1 {
  background-position: 27.5% 55% !important;
}
.emoji1f3e2 {
  background-position: 27.5% 57.5% !important;
}
.emoji1f3e3 {
  background-position: 27.5% 60% !important;
}
.emoji1f3e4 {
  background-position: 27.5% 62.5% !important;
}
.emoji1f3e5 {
  background-position: 27.5% 65% !important;
}
.emoji1f3e6 {
  background-position: 27.5% 67.5% !important;
}
.emoji1f3e7 {
  background-position: 27.5% 70% !important;
}
.emoji1f3e8 {
  background-position: 27.5% 72.5% !important;
}
.emoji1f3e9 {
  background-position: 27.5% 75% !important;
}
.emoji1f3ea {
  background-position: 27.5% 77.5% !important;
}
.emoji1f3eb {
  background-position: 27.5% 80% !important;
}
.emoji1f3ec {
  background-position: 27.5% 82.5% !important;
}
.emoji1f3ed {
  background-position: 27.5% 85% !important;
}
.emoji1f3ee {
  background-position: 27.5% 87.5% !important;
}
.emoji1f3ef {
  background-position: 27.5% 90% !important;
}
.emoji1f3f0 {
  background-position: 27.5% 92.5% !important;
}
.emoji1f3f3 {
  background-position: 27.5% 95% !important;
}
.emoji1f3f4 {
  background-position: 27.5% 97.5% !important;
}
.emoji1f3f5 {
  background-position: 27.5% 100% !important;
}
.emoji1f3f7 {
  background-position: 30% 0% !important;
}
.emoji1f3f8 {
  background-position: 30% 2.5% !important;
}
.emoji1f3f9 {
  background-position: 30% 5% !important;
}
.emoji1f3fa {
  background-position: 30% 7.5% !important;
}
.emoji1f3fb {
  background-position: 30% 10% !important;
}
.emoji1f3fc {
  background-position: 30% 12.5% !important;
}
.emoji1f3fd {
  background-position: 30% 15% !important;
}
.emoji1f3fe {
  background-position: 30% 17.5% !important;
}
.emoji1f3ff {
  background-position: 30% 20% !important;
}
.emoji1f400 {
  background-position: 30% 22.5% !important;
}
.emoji1f401 {
  background-position: 30% 25% !important;
}
.emoji1f402 {
  background-position: 30% 27.5% !important;
}
.emoji1f403 {
  background-position: 30% 30% !important;
}
.emoji1f404 {
  background-position: 30% 32.5% !important;
}
.emoji1f405 {
  background-position: 30% 35% !important;
}
.emoji1f406 {
  background-position: 30% 37.5% !important;
}
.emoji1f407 {
  background-position: 30% 40% !important;
}
.emoji1f408 {
  background-position: 30% 42.5% !important;
}
.emoji1f409 {
  background-position: 30% 45% !important;
}
.emoji1f40a {
  background-position: 30% 47.5% !important;
}
.emoji1f40b {
  background-position: 30% 50% !important;
}
.emoji1f40c {
  background-position: 30% 52.5% !important;
}
.emoji1f40d {
  background-position: 30% 55% !important;
}
.emoji1f40e {
  background-position: 30% 57.5% !important;
}
.emoji1f40f {
  background-position: 30% 60% !important;
}
.emoji1f410 {
  background-position: 30% 62.5% !important;
}
.emoji1f411 {
  background-position: 30% 65% !important;
}
.emoji1f412 {
  background-position: 30% 67.5% !important;
}
.emoji1f413 {
  background-position: 30% 70% !important;
}
.emoji1f414 {
  background-position: 30% 72.5% !important;
}
.emoji1f415 {
  background-position: 30% 75% !important;
}
.emoji1f416 {
  background-position: 30% 77.5% !important;
}
.emoji1f417 {
  background-position: 30% 80% !important;
}
.emoji1f418 {
  background-position: 30% 82.5% !important;
}
.emoji1f419 {
  background-position: 30% 85% !important;
}
.emoji1f41a {
  background-position: 30% 87.5% !important;
}
.emoji1f41b {
  background-position: 30% 90% !important;
}
.emoji1f41c {
  background-position: 30% 92.5% !important;
}
.emoji1f41d {
  background-position: 30% 95% !important;
}
.emoji1f41e {
  background-position: 30% 97.5% !important;
}
.emoji1f41f {
  background-position: 30% 100% !important;
}
.emoji1f420 {
  background-position: 32.5% 0% !important;
}
.emoji1f421 {
  background-position: 32.5% 2.5% !important;
}
.emoji1f422 {
  background-position: 32.5% 5% !important;
}
.emoji1f423 {
  background-position: 32.5% 7.5% !important;
}
.emoji1f424 {
  background-position: 32.5% 10% !important;
}
.emoji1f425 {
  background-position: 32.5% 12.5% !important;
}
.emoji1f426 {
  background-position: 32.5% 15% !important;
}
.emoji1f427 {
  background-position: 32.5% 17.5% !important;
}
.emoji1f428 {
  background-position: 32.5% 20% !important;
}
.emoji1f429 {
  background-position: 32.5% 22.5% !important;
}
.emoji1f42a {
  background-position: 32.5% 25% !important;
}
.emoji1f42b {
  background-position: 32.5% 27.5% !important;
}
.emoji1f42c {
  background-position: 32.5% 30% !important;
}
.emoji1f42d {
  background-position: 32.5% 32.5% !important;
}
.emoji1f42e {
  background-position: 32.5% 35% !important;
}
.emoji1f42f {
  background-position: 32.5% 37.5% !important;
}
.emoji1f430 {
  background-position: 32.5% 40% !important;
}
.emoji1f431 {
  background-position: 32.5% 42.5% !important;
}
.emoji1f432 {
  background-position: 32.5% 45% !important;
}
.emoji1f433 {
  background-position: 32.5% 47.5% !important;
}
.emoji1f434 {
  background-position: 32.5% 50% !important;
}
.emoji1f435 {
  background-position: 32.5% 52.5% !important;
}
.emoji1f436 {
  background-position: 32.5% 55% !important;
}
.emoji1f437 {
  background-position: 32.5% 57.5% !important;
}
.emoji1f438 {
  background-position: 32.5% 60% !important;
}
.emoji1f439 {
  background-position: 32.5% 62.5% !important;
}
.emoji1f43a {
  background-position: 32.5% 65% !important;
}
.emoji1f43b {
  background-position: 32.5% 67.5% !important;
}
.emoji1f43c {
  background-position: 32.5% 70% !important;
}
.emoji1f43d {
  background-position: 32.5% 72.5% !important;
}
.emoji1f43e {
  background-position: 32.5% 75% !important;
}
.emoji1f43f {
  background-position: 32.5% 77.5% !important;
}
.emoji1f440 {
  background-position: 32.5% 80% !important;
}
.emoji1f441 {
  background-position: 32.5% 82.5% !important;
}
.emoji1f442 {
  background-position: 32.5% 85% !important;
}
.emoji1f443 {
  background-position: 32.5% 100% !important;
}
.emoji1f444 {
  background-position: 35% 12.5% !important;
}
.emoji1f445 {
  background-position: 35% 15% !important;
}
.emoji1f446 {
  background-position: 35% 17.5% !important;
}
.emoji1f447 {
  background-position: 35% 32.5% !important;
}
.emoji1f448 {
  background-position: 35% 47.5% !important;
}
.emoji1f449 {
  background-position: 35% 62.5% !important;
}
.emoji1f44a {
  background-position: 35% 77.5% !important;
}
.emoji1f44b {
  background-position: 35% 92.5% !important;
}
.emoji1f44c {
  background-position: 37.5% 5% !important;
}
.emoji1f44d {
  background-position: 37.5% 20% !important;
}
.emoji1f44e {
  background-position: 37.5% 35% !important;
}
.emoji1f44f {
  background-position: 37.5% 50% !important;
}
.emoji1f450 {
  background-position: 37.5% 65% !important;
}
.emoji1f451 {
  background-position: 37.5% 80% !important;
}
.emoji1f452 {
  background-position: 37.5% 82.5% !important;
}
.emoji1f453 {
  background-position: 37.5% 85% !important;
}
.emoji1f454 {
  background-position: 37.5% 87.5% !important;
}
.emoji1f455 {
  background-position: 37.5% 90% !important;
}
.emoji1f456 {
  background-position: 37.5% 92.5% !important;
}
.emoji1f457 {
  background-position: 37.5% 95% !important;
}
.emoji1f458 {
  background-position: 37.5% 97.5% !important;
}
.emoji1f459 {
  background-position: 37.5% 100% !important;
}
.emoji1f45a {
  background-position: 40% 0% !important;
}
.emoji1f45b {
  background-position: 40% 2.5% !important;
}
.emoji1f45c {
  background-position: 40% 5% !important;
}
.emoji1f45d {
  background-position: 40% 7.5% !important;
}
.emoji1f45e {
  background-position: 40% 10% !important;
}
.emoji1f45f {
  background-position: 40% 12.5% !important;
}
.emoji1f460 {
  background-position: 40% 15% !important;
}
.emoji1f461 {
  background-position: 40% 17.5% !important;
}
.emoji1f462 {
  background-position: 40% 20% !important;
}
.emoji1f463 {
  background-position: 40% 22.5% !important;
}
.emoji1f464 {
  background-position: 40% 25% !important;
}
.emoji1f465 {
  background-position: 40% 27.5% !important;
}
.emoji1f466 {
  background-position: 40% 30% !important;
}
.emoji1f467 {
  background-position: 40% 45% !important;
}
.emoji1f468 {
  background-position: 40% 60% !important;
}
.emoji1f469 {
  background-position: 40% 75% !important;
}
.emoji1f46a {
  background-position: 40% 90% !important;
}
.emoji1f46b {
  background-position: 40% 92.5% !important;
}
.emoji1f46c {
  background-position: 40% 95% !important;
}
.emoji1f46d {
  background-position: 40% 97.5% !important;
}
.emoji1f46e {
  background-position: 40% 100% !important;
}
.emoji1f46f {
  background-position: 42.5% 12.5% !important;
}
.emoji1f470 {
  background-position: 42.5% 15% !important;
}
.emoji1f471 {
  background-position: 42.5% 30% !important;
}
.emoji1f472 {
  background-position: 42.5% 45% !important;
}
.emoji1f473 {
  background-position: 42.5% 60% !important;
}
.emoji1f474 {
  background-position: 42.5% 75% !important;
}
.emoji1f475 {
  background-position: 42.5% 90% !important;
}
.emoji1f476 {
  background-position: 45% 2.5% !important;
}
.emoji1f477 {
  background-position: 45% 17.5% !important;
}
.emoji1f478 {
  background-position: 45% 32.5% !important;
}
.emoji1f479 {
  background-position: 45% 47.5% !important;
}
.emoji1f47a {
  background-position: 45% 50% !important;
}
.emoji1f47b {
  background-position: 45% 52.5% !important;
}
.emoji1f47c {
  background-position: 45% 55% !important;
}
.emoji1f47d {
  background-position: 45% 70% !important;
}
.emoji1f47e {
  background-position: 45% 72.5% !important;
}
.emoji1f47f {
  background-position: 45% 75% !important;
}
.emoji1f480 {
  background-position: 45% 77.5% !important;
}
.emoji1f481 {
  background-position: 45% 80% !important;
}
.emoji1f482 {
  background-position: 45% 95% !important;
}
.emoji1f483 {
  background-position: 47.5% 7.5% !important;
}
.emoji1f484 {
  background-position: 47.5% 22.5% !important;
}
.emoji1f485 {
  background-position: 47.5% 25% !important;
}
.emoji1f486 {
  background-position: 47.5% 40% !important;
}
.emoji1f487 {
  background-position: 47.5% 55% !important;
}
.emoji1f488 {
  background-position: 47.5% 70% !important;
}
.emoji1f489 {
  background-position: 47.5% 72.5% !important;
}
.emoji1f48a {
  background-position: 47.5% 75% !important;
}
.emoji1f48b {
  background-position: 47.5% 77.5% !important;
}
.emoji1f48c {
  background-position: 47.5% 80% !important;
}
.emoji1f48d {
  background-position: 47.5% 82.5% !important;
}
.emoji1f48e {
  background-position: 47.5% 85% !important;
}
.emoji1f48f {
  background-position: 47.5% 87.5% !important;
}
.emoji1f490 {
  background-position: 47.5% 90% !important;
}
.emoji1f491 {
  background-position: 47.5% 92.5% !important;
}
.emoji1f492 {
  background-position: 47.5% 95% !important;
}
.emoji1f493 {
  background-position: 47.5% 97.5% !important;
}
.emoji1f494 {
  background-position: 47.5% 100% !important;
}
.emoji1f495 {
  background-position: 50% 0% !important;
}
.emoji1f496 {
  background-position: 50% 2.5% !important;
}
.emoji1f497 {
  background-position: 50% 5% !important;
}
.emoji1f498 {
  background-position: 50% 7.5% !important;
}
.emoji1f499 {
  background-position: 50% 10% !important;
}
.emoji1f49a {
  background-position: 50% 12.5% !important;
}
.emoji1f49b {
  background-position: 50% 15% !important;
}
.emoji1f49c {
  background-position: 50% 17.5% !important;
}
.emoji1f49d {
  background-position: 50% 20% !important;
}
.emoji1f49e {
  background-position: 50% 22.5% !important;
}
.emoji1f49f {
  background-position: 50% 25% !important;
}
.emoji1f4a0 {
  background-position: 50% 27.5% !important;
}
.emoji1f4a1 {
  background-position: 50% 30% !important;
}
.emoji1f4a2 {
  background-position: 50% 32.5% !important;
}
.emoji1f4a3 {
  background-position: 50% 35% !important;
}
.emoji1f4a4 {
  background-position: 50% 37.5% !important;
}
.emoji1f4a5 {
  background-position: 50% 40% !important;
}
.emoji1f4a6 {
  background-position: 50% 42.5% !important;
}
.emoji1f4a7 {
  background-position: 50% 45% !important;
}
.emoji1f4a8 {
  background-position: 50% 47.5% !important;
}
.emoji1f4a9 {
  background-position: 50% 50% !important;
}
.emoji1f4aa {
  background-position: 50% 52.5% !important;
}
.emoji1f4ab {
  background-position: 50% 67.5% !important;
}
.emoji1f4ac {
  background-position: 50% 70% !important;
}
.emoji1f4ad {
  background-position: 50% 72.5% !important;
}
.emoji1f4ae {
  background-position: 50% 75% !important;
}
.emoji1f4af {
  background-position: 50% 77.5% !important;
}
.emoji1f4b0 {
  background-position: 50% 80% !important;
}
.emoji1f4b1 {
  background-position: 50% 82.5% !important;
}
.emoji1f4b2 {
  background-position: 50% 85% !important;
}
.emoji1f4b3 {
  background-position: 50% 87.5% !important;
}
.emoji1f4b4 {
  background-position: 50% 90% !important;
}
.emoji1f4b5 {
  background-position: 50% 92.5% !important;
}
.emoji1f4b6 {
  background-position: 50% 95% !important;
}
.emoji1f4b7 {
  background-position: 50% 97.5% !important;
}
.emoji1f4b8 {
  background-position: 50% 100% !important;
}
.emoji1f4b9 {
  background-position: 52.5% 0% !important;
}
.emoji1f4ba {
  background-position: 52.5% 2.5% !important;
}
.emoji1f4bb {
  background-position: 52.5% 5% !important;
}
.emoji1f4bc {
  background-position: 52.5% 7.5% !important;
}
.emoji1f4bd {
  background-position: 52.5% 10% !important;
}
.emoji1f4be {
  background-position: 52.5% 12.5% !important;
}
.emoji1f4bf {
  background-position: 52.5% 15% !important;
}
.emoji1f4c0 {
  background-position: 52.5% 17.5% !important;
}
.emoji1f4c1 {
  background-position: 52.5% 20% !important;
}
.emoji1f4c2 {
  background-position: 52.5% 22.5% !important;
}
.emoji1f4c3 {
  background-position: 52.5% 25% !important;
}
.emoji1f4c4 {
  background-position: 52.5% 27.5% !important;
}
.emoji1f4c5 {
  background-position: 52.5% 30% !important;
}
.emoji1f4c6 {
  background-position: 52.5% 32.5% !important;
}
.emoji1f4c7 {
  background-position: 52.5% 35% !important;
}
.emoji1f4c8 {
  background-position: 52.5% 37.5% !important;
}
.emoji1f4c9 {
  background-position: 52.5% 40% !important;
}
.emoji1f4ca {
  background-position: 52.5% 42.5% !important;
}
.emoji1f4cb {
  background-position: 52.5% 45% !important;
}
.emoji1f4cc {
  background-position: 52.5% 47.5% !important;
}
.emoji1f4cd {
  background-position: 52.5% 50% !important;
}
.emoji1f4ce {
  background-position: 52.5% 52.5% !important;
}
.emoji1f4cf {
  background-position: 52.5% 55% !important;
}
.emoji1f4d0 {
  background-position: 52.5% 57.5% !important;
}
.emoji1f4d1 {
  background-position: 52.5% 60% !important;
}
.emoji1f4d2 {
  background-position: 52.5% 62.5% !important;
}
.emoji1f4d3 {
  background-position: 52.5% 65% !important;
}
.emoji1f4d4 {
  background-position: 52.5% 67.5% !important;
}
.emoji1f4d5 {
  background-position: 52.5% 70% !important;
}
.emoji1f4d6 {
  background-position: 52.5% 72.5% !important;
}
.emoji1f4d7 {
  background-position: 52.5% 75% !important;
}
.emoji1f4d8 {
  background-position: 52.5% 77.5% !important;
}
.emoji1f4d9 {
  background-position: 52.5% 80% !important;
}
.emoji1f4da {
  background-position: 52.5% 82.5% !important;
}
.emoji1f4db {
  background-position: 52.5% 85% !important;
}
.emoji1f4dc {
  background-position: 52.5% 87.5% !important;
}
.emoji1f4dd {
  background-position: 52.5% 90% !important;
}
.emoji1f4de {
  background-position: 52.5% 92.5% !important;
}
.emoji1f4df {
  background-position: 52.5% 95% !important;
}
.emoji1f4e0 {
  background-position: 52.5% 97.5% !important;
}
.emoji1f4e1 {
  background-position: 52.5% 100% !important;
}
.emoji1f4e2 {
  background-position: 55% 0% !important;
}
.emoji1f4e3 {
  background-position: 55% 2.5% !important;
}
.emoji1f4e4 {
  background-position: 55% 5% !important;
}
.emoji1f4e5 {
  background-position: 55% 7.5% !important;
}
.emoji1f4e6 {
  background-position: 55% 10% !important;
}
.emoji1f4e7 {
  background-position: 55% 12.5% !important;
}
.emoji1f4e8 {
  background-position: 55% 15% !important;
}
.emoji1f4e9 {
  background-position: 55% 17.5% !important;
}
.emoji1f4ea {
  background-position: 55% 20% !important;
}
.emoji1f4eb {
  background-position: 55% 22.5% !important;
}
.emoji1f4ec {
  background-position: 55% 25% !important;
}
.emoji1f4ed {
  background-position: 55% 27.5% !important;
}
.emoji1f4ee {
  background-position: 55% 30% !important;
}
.emoji1f4ef {
  background-position: 55% 32.5% !important;
}
.emoji1f4f0 {
  background-position: 55% 35% !important;
}
.emoji1f4f1 {
  background-position: 55% 37.5% !important;
}
.emoji1f4f2 {
  background-position: 55% 40% !important;
}
.emoji1f4f3 {
  background-position: 55% 42.5% !important;
}
.emoji1f4f4 {
  background-position: 55% 45% !important;
}
.emoji1f4f5 {
  background-position: 55% 47.5% !important;
}
.emoji1f4f6 {
  background-position: 55% 50% !important;
}
.emoji1f4f7 {
  background-position: 55% 52.5% !important;
}
.emoji1f4f8 {
  background-position: 55% 55% !important;
}
.emoji1f4f9 {
  background-position: 55% 57.5% !important;
}
.emoji1f4fa {
  background-position: 55% 60% !important;
}
.emoji1f4fb {
  background-position: 55% 62.5% !important;
}
.emoji1f4fc {
  background-position: 55% 65% !important;
}
.emoji1f4fd {
  background-position: 55% 67.5% !important;
}
.emoji1f4ff {
  background-position: 55% 70% !important;
}
.emoji1f500 {
  background-position: 55% 72.5% !important;
}
.emoji1f501 {
  background-position: 55% 75% !important;
}
.emoji1f502 {
  background-position: 55% 77.5% !important;
}
.emoji1f503 {
  background-position: 55% 80% !important;
}
.emoji1f504 {
  background-position: 55% 82.5% !important;
}
.emoji1f505 {
  background-position: 55% 85% !important;
}
.emoji1f506 {
  background-position: 55% 87.5% !important;
}
.emoji1f507 {
  background-position: 55% 90% !important;
}
.emoji1f508 {
  background-position: 55% 92.5% !important;
}
.emoji1f509 {
  background-position: 55% 95% !important;
}
.emoji1f50a {
  background-position: 55% 97.5% !important;
}
.emoji1f50b {
  background-position: 55% 100% !important;
}
.emoji1f50c {
  background-position: 57.5% 0% !important;
}
.emoji1f50d {
  background-position: 57.5% 2.5% !important;
}
.emoji1f50e {
  background-position: 57.5% 5% !important;
}
.emoji1f50f {
  background-position: 57.5% 7.5% !important;
}
.emoji1f510 {
  background-position: 57.5% 10% !important;
}
.emoji1f511 {
  background-position: 57.5% 12.5% !important;
}
.emoji1f512 {
  background-position: 57.5% 15% !important;
}
.emoji1f513 {
  background-position: 57.5% 17.5% !important;
}
.emoji1f514 {
  background-position: 57.5% 20% !important;
}
.emoji1f515 {
  background-position: 57.5% 22.5% !important;
}
.emoji1f516 {
  background-position: 57.5% 25% !important;
}
.emoji1f517 {
  background-position: 57.5% 27.5% !important;
}
.emoji1f518 {
  background-position: 57.5% 30% !important;
}
.emoji1f519 {
  background-position: 57.5% 32.5% !important;
}
.emoji1f51a {
  background-position: 57.5% 35% !important;
}
.emoji1f51b {
  background-position: 57.5% 37.5% !important;
}
.emoji1f51c {
  background-position: 57.5% 40% !important;
}
.emoji1f51d {
  background-position: 57.5% 42.5% !important;
}
.emoji1f51e {
  background-position: 57.5% 45% !important;
}
.emoji1f51f {
  background-position: 57.5% 47.5% !important;
}
.emoji1f520 {
  background-position: 57.5% 50% !important;
}
.emoji1f521 {
  background-position: 57.5% 52.5% !important;
}
.emoji1f522 {
  background-position: 57.5% 55% !important;
}
.emoji1f523 {
  background-position: 57.5% 57.5% !important;
}
.emoji1f524 {
  background-position: 57.5% 60% !important;
}
.emoji1f525 {
  background-position: 57.5% 62.5% !important;
}
.emoji1f526 {
  background-position: 57.5% 65% !important;
}
.emoji1f527 {
  background-position: 57.5% 67.5% !important;
}
.emoji1f528 {
  background-position: 57.5% 70% !important;
}
.emoji1f529 {
  background-position: 57.5% 72.5% !important;
}
.emoji1f52a {
  background-position: 57.5% 75% !important;
}
.emoji1f52b {
  background-position: 57.5% 77.5% !important;
}
.emoji1f52c {
  background-position: 57.5% 80% !important;
}
.emoji1f52d {
  background-position: 57.5% 82.5% !important;
}
.emoji1f52e {
  background-position: 57.5% 85% !important;
}
.emoji1f52f {
  background-position: 57.5% 87.5% !important;
}
.emoji1f530 {
  background-position: 57.5% 90% !important;
}
.emoji1f531 {
  background-position: 57.5% 92.5% !important;
}
.emoji1f532 {
  background-position: 57.5% 95% !important;
}
.emoji1f533 {
  background-position: 57.5% 97.5% !important;
}
.emoji1f534 {
  background-position: 57.5% 100% !important;
}
.emoji1f535 {
  background-position: 60% 0% !important;
}
.emoji1f536 {
  background-position: 60% 2.5% !important;
}
.emoji1f537 {
  background-position: 60% 5% !important;
}
.emoji1f538 {
  background-position: 60% 7.5% !important;
}
.emoji1f539 {
  background-position: 60% 10% !important;
}
.emoji1f53a {
  background-position: 60% 12.5% !important;
}
.emoji1f53b {
  background-position: 60% 15% !important;
}
.emoji1f53c {
  background-position: 60% 17.5% !important;
}
.emoji1f53d {
  background-position: 60% 20% !important;
}
.emoji1f549 {
  background-position: 60% 22.5% !important;
}
.emoji1f54a {
  background-position: 60% 25% !important;
}
.emoji1f54b {
  background-position: 60% 27.5% !important;
}
.emoji1f54c {
  background-position: 60% 30% !important;
}
.emoji1f54d {
  background-position: 60% 32.5% !important;
}
.emoji1f54e {
  background-position: 60% 35% !important;
}
.emoji1f550 {
  background-position: 60% 37.5% !important;
}
.emoji1f551 {
  background-position: 60% 40% !important;
}
.emoji1f552 {
  background-position: 60% 42.5% !important;
}
.emoji1f553 {
  background-position: 60% 45% !important;
}
.emoji1f554 {
  background-position: 60% 47.5% !important;
}
.emoji1f555 {
  background-position: 60% 50% !important;
}
.emoji1f556 {
  background-position: 60% 52.5% !important;
}
.emoji1f557 {
  background-position: 60% 55% !important;
}
.emoji1f558 {
  background-position: 60% 57.5% !important;
}
.emoji1f559 {
  background-position: 60% 60% !important;
}
.emoji1f55a {
  background-position: 60% 62.5% !important;
}
.emoji1f55b {
  background-position: 60% 65% !important;
}
.emoji1f55c {
  background-position: 60% 67.5% !important;
}
.emoji1f55d {
  background-position: 60% 70% !important;
}
.emoji1f55e {
  background-position: 60% 72.5% !important;
}
.emoji1f55f {
  background-position: 60% 75% !important;
}
.emoji1f560 {
  background-position: 60% 77.5% !important;
}
.emoji1f561 {
  background-position: 60% 80% !important;
}
.emoji1f562 {
  background-position: 60% 82.5% !important;
}
.emoji1f563 {
  background-position: 60% 85% !important;
}
.emoji1f564 {
  background-position: 60% 87.5% !important;
}
.emoji1f565 {
  background-position: 60% 90% !important;
}
.emoji1f566 {
  background-position: 60% 92.5% !important;
}
.emoji1f567 {
  background-position: 60% 95% !important;
}
.emoji1f56f {
  background-position: 60% 97.5% !important;
}
.emoji1f570 {
  background-position: 60% 100% !important;
}
.emoji1f573 {
  background-position: 62.5% 0% !important;
}
.emoji1f574 {
  background-position: 62.5% 2.5% !important;
}
.emoji1f575 {
  background-position: 62.5% 5% !important;
}
.emoji1f576 {
  background-position: 62.5% 7.5% !important;
}
.emoji1f577 {
  background-position: 62.5% 10% !important;
}
.emoji1f578 {
  background-position: 62.5% 12.5% !important;
}
.emoji1f579 {
  background-position: 62.5% 15% !important;
}
.emoji1f587 {
  background-position: 62.5% 17.5% !important;
}
.emoji1f58a {
  background-position: 62.5% 20% !important;
}
.emoji1f58b {
  background-position: 62.5% 22.5% !important;
}
.emoji1f58c {
  background-position: 62.5% 25% !important;
}
.emoji1f58d {
  background-position: 62.5% 27.5% !important;
}
.emoji1f590 {
  background-position: 62.5% 30% !important;
}
.emoji1f595 {
  background-position: 62.5% 45% !important;
}
.emoji1f596 {
  background-position: 62.5% 60% !important;
}
.emoji1f5a5 {
  background-position: 62.5% 75% !important;
}
.emoji1f5a8 {
  background-position: 62.5% 77.5% !important;
}
.emoji1f5b1 {
  background-position: 62.5% 80% !important;
}
.emoji1f5b2 {
  background-position: 62.5% 82.5% !important;
}
.emoji1f5bc {
  background-position: 62.5% 85% !important;
}
.emoji1f5c2 {
  background-position: 62.5% 87.5% !important;
}
.emoji1f5c3 {
  background-position: 62.5% 90% !important;
}
.emoji1f5c4 {
  background-position: 62.5% 92.5% !important;
}
.emoji1f5d1 {
  background-position: 62.5% 95% !important;
}
.emoji1f5d2 {
  background-position: 62.5% 97.5% !important;
}
.emoji1f5d3 {
  background-position: 62.5% 100% !important;
}
.emoji1f5dc {
  background-position: 65% 0% !important;
}
.emoji1f5dd {
  background-position: 65% 2.5% !important;
}
.emoji1f5de {
  background-position: 65% 5% !important;
}
.emoji1f5e1 {
  background-position: 65% 7.5% !important;
}
.emoji1f5e3 {
  background-position: 65% 10% !important;
}
.emoji1f5e8 {
  background-position: 65% 12.5% !important;
}
.emoji1f5ef {
  background-position: 65% 15% !important;
}
.emoji1f5f3 {
  background-position: 65% 17.5% !important;
}
.emoji1f5fa {
  background-position: 65% 20% !important;
}
.emoji1f5fb {
  background-position: 65% 22.5% !important;
}
.emoji1f5fc {
  background-position: 65% 25% !important;
}
.emoji1f5fd {
  background-position: 65% 27.5% !important;
}
.emoji1f5fe {
  background-position: 65% 30% !important;
}
.emoji1f5ff {
  background-position: 65% 32.5% !important;
}
.emoji1f600 {
  background-position: 65% 35% !important;
}
.emoji1f601 {
  background-position: 65% 37.5% !important;
}
.emoji1f602 {
  background-position: 65% 40% !important;
}
.emoji1f603 {
  background-position: 65% 42.5% !important;
}
.emoji1f604 {
  background-position: 65% 45% !important;
}
.emoji1f605 {
  background-position: 65% 47.5% !important;
}
.emoji1f606 {
  background-position: 65% 50% !important;
}
.emoji1f607 {
  background-position: 65% 52.5% !important;
}
.emoji1f608 {
  background-position: 65% 55% !important;
}
.emoji1f609 {
  background-position: 65% 57.5% !important;
}
.emoji1f60a {
  background-position: 65% 60% !important;
}
.emoji1f60b {
  background-position: 65% 62.5% !important;
}
.emoji1f60c {
  background-position: 65% 65% !important;
}
.emoji1f60d {
  background-position: 65% 67.5% !important;
}
.emoji1f60e {
  background-position: 65% 70% !important;
}
.emoji1f60f {
  background-position: 65% 72.5% !important;
}
.emoji1f610 {
  background-position: 65% 75% !important;
}
.emoji1f611 {
  background-position: 65% 77.5% !important;
}
.emoji1f612 {
  background-position: 65% 80% !important;
}
.emoji1f613 {
  background-position: 65% 82.5% !important;
}
.emoji1f614 {
  background-position: 65% 85% !important;
}
.emoji1f615 {
  background-position: 65% 87.5% !important;
}
.emoji1f616 {
  background-position: 65% 90% !important;
}
.emoji1f617 {
  background-position: 65% 92.5% !important;
}
.emoji1f618 {
  background-position: 65% 95% !important;
}
.emoji1f619 {
  background-position: 65% 97.5% !important;
}
.emoji1f61a {
  background-position: 65% 100% !important;
}
.emoji1f61b {
  background-position: 67.5% 0% !important;
}
.emoji1f61c {
  background-position: 67.5% 2.5% !important;
}
.emoji1f61d {
  background-position: 67.5% 5% !important;
}
.emoji1f61e {
  background-position: 67.5% 7.5% !important;
}
.emoji1f61f {
  background-position: 67.5% 10% !important;
}
.emoji1f620 {
  background-position: 67.5% 12.5% !important;
}
.emoji1f621 {
  background-position: 67.5% 15% !important;
}
.emoji1f622 {
  background-position: 67.5% 17.5% !important;
}
.emoji1f623 {
  background-position: 67.5% 20% !important;
}
.emoji1f624 {
  background-position: 67.5% 22.5% !important;
}
.emoji1f625 {
  background-position: 67.5% 25% !important;
}
.emoji1f626 {
  background-position: 67.5% 27.5% !important;
}
.emoji1f627 {
  background-position: 67.5% 30% !important;
}
.emoji1f628 {
  background-position: 67.5% 32.5% !important;
}
.emoji1f629 {
  background-position: 67.5% 35% !important;
}
.emoji1f62a {
  background-position: 67.5% 37.5% !important;
}
.emoji1f62b {
  background-position: 67.5% 40% !important;
}
.emoji1f62c {
  background-position: 67.5% 42.5% !important;
}
.emoji1f62d {
  background-position: 67.5% 45% !important;
}
.emoji1f62e {
  background-position: 67.5% 47.5% !important;
}
.emoji1f62f {
  background-position: 67.5% 50% !important;
}
.emoji1f630 {
  background-position: 67.5% 52.5% !important;
}
.emoji1f631 {
  background-position: 67.5% 55% !important;
}
.emoji1f632 {
  background-position: 67.5% 57.5% !important;
}
.emoji1f633 {
  background-position: 67.5% 60% !important;
}
.emoji1f634 {
  background-position: 67.5% 62.5% !important;
}
.emoji1f635 {
  background-position: 67.5% 65% !important;
}
.emoji1f636 {
  background-position: 67.5% 67.5% !important;
}
.emoji1f637 {
  background-position: 67.5% 70% !important;
}
.emoji1f638 {
  background-position: 67.5% 72.5% !important;
}
.emoji1f639 {
  background-position: 67.5% 75% !important;
}
.emoji1f63a {
  background-position: 67.5% 77.5% !important;
}
.emoji1f63b {
  background-position: 67.5% 80% !important;
}
.emoji1f63c {
  background-position: 67.5% 82.5% !important;
}
.emoji1f63d {
  background-position: 67.5% 85% !important;
}
.emoji1f63e {
  background-position: 67.5% 87.5% !important;
}
.emoji1f63f {
  background-position: 67.5% 90% !important;
}
.emoji1f640 {
  background-position: 67.5% 92.5% !important;
}
.emoji1f641 {
  background-position: 67.5% 95% !important;
}
.emoji1f642 {
  background-position: 67.5% 97.5% !important;
}
.emoji1f643 {
  background-position: 67.5% 100% !important;
}
.emoji1f644 {
  background-position: 70% 0% !important;
}
.emoji1f645 {
  background-position: 70% 2.5% !important;
}
.emoji1f646 {
  background-position: 70% 17.5% !important;
}
.emoji1f647 {
  background-position: 70% 32.5% !important;
}
.emoji1f648 {
  background-position: 70% 47.5% !important;
}
.emoji1f649 {
  background-position: 70% 50% !important;
}
.emoji1f64a {
  background-position: 70% 52.5% !important;
}
.emoji1f64b {
  background-position: 70% 55% !important;
}
.emoji1f64c {
  background-position: 70% 70% !important;
}
.emoji1f64d {
  background-position: 70% 85% !important;
}
.emoji1f64e {
  background-position: 70% 100% !important;
}
.emoji1f64f {
  background-position: 72.5% 12.5% !important;
}
.emoji1f680 {
  background-position: 72.5% 27.5% !important;
}
.emoji1f681 {
  background-position: 72.5% 30% !important;
}
.emoji1f682 {
  background-position: 72.5% 32.5% !important;
}
.emoji1f683 {
  background-position: 72.5% 35% !important;
}
.emoji1f684 {
  background-position: 72.5% 37.5% !important;
}
.emoji1f685 {
  background-position: 72.5% 40% !important;
}
.emoji1f686 {
  background-position: 72.5% 42.5% !important;
}
.emoji1f687 {
  background-position: 72.5% 45% !important;
}
.emoji1f688 {
  background-position: 72.5% 47.5% !important;
}
.emoji1f689 {
  background-position: 72.5% 50% !important;
}
.emoji1f68a {
  background-position: 72.5% 52.5% !important;
}
.emoji1f68b {
  background-position: 72.5% 55% !important;
}
.emoji1f68c {
  background-position: 72.5% 57.5% !important;
}
.emoji1f68d {
  background-position: 72.5% 60% !important;
}
.emoji1f68e {
  background-position: 72.5% 62.5% !important;
}
.emoji1f68f {
  background-position: 72.5% 65% !important;
}
.emoji1f690 {
  background-position: 72.5% 67.5% !important;
}
.emoji1f691 {
  background-position: 72.5% 70% !important;
}
.emoji1f692 {
  background-position: 72.5% 72.5% !important;
}
.emoji1f693 {
  background-position: 72.5% 75% !important;
}
.emoji1f694 {
  background-position: 72.5% 77.5% !important;
}
.emoji1f695 {
  background-position: 72.5% 80% !important;
}
.emoji1f696 {
  background-position: 72.5% 82.5% !important;
}
.emoji1f697 {
  background-position: 72.5% 85% !important;
}
.emoji1f698 {
  background-position: 72.5% 87.5% !important;
}
.emoji1f699 {
  background-position: 72.5% 90% !important;
}
.emoji1f69a {
  background-position: 72.5% 92.5% !important;
}
.emoji1f69b {
  background-position: 72.5% 95% !important;
}
.emoji1f69c {
  background-position: 72.5% 97.5% !important;
}
.emoji1f69d {
  background-position: 72.5% 100% !important;
}
.emoji1f69e {
  background-position: 75% 0% !important;
}
.emoji1f69f {
  background-position: 75% 2.5% !important;
}
.emoji1f6a0 {
  background-position: 75% 5% !important;
}
.emoji1f6a1 {
  background-position: 75% 7.5% !important;
}
.emoji1f6a2 {
  background-position: 75% 10% !important;
}
.emoji1f6a3 {
  background-position: 75% 12.5% !important;
}
.emoji1f6a4 {
  background-position: 75% 27.5% !important;
}
.emoji1f6a5 {
  background-position: 75% 30% !important;
}
.emoji1f6a6 {
  background-position: 75% 32.5% !important;
}
.emoji1f6a7 {
  background-position: 75% 35% !important;
}
.emoji1f6a8 {
  background-position: 75% 37.5% !important;
}
.emoji1f6a9 {
  background-position: 75% 40% !important;
}
.emoji1f6aa {
  background-position: 75% 42.5% !important;
}
.emoji1f6ab {
  background-position: 75% 45% !important;
}
.emoji1f6ac {
  background-position: 75% 47.5% !important;
}
.emoji1f6ad {
  background-position: 75% 50% !important;
}
.emoji1f6ae {
  background-position: 75% 52.5% !important;
}
.emoji1f6af {
  background-position: 75% 55% !important;
}
.emoji1f6b0 {
  background-position: 75% 57.5% !important;
}
.emoji1f6b1 {
  background-position: 75% 60% !important;
}
.emoji1f6b2 {
  background-position: 75% 62.5% !important;
}
.emoji1f6b3 {
  background-position: 75% 65% !important;
}
.emoji1f6b4 {
  background-position: 75% 67.5% !important;
}
.emoji1f6b5 {
  background-position: 75% 82.5% !important;
}
.emoji1f6b6 {
  background-position: 75% 97.5% !important;
}
.emoji1f6b7 {
  background-position: 77.5% 10% !important;
}
.emoji1f6b8 {
  background-position: 77.5% 12.5% !important;
}
.emoji1f6b9 {
  background-position: 77.5% 15% !important;
}
.emoji1f6ba {
  background-position: 77.5% 17.5% !important;
}
.emoji1f6bb {
  background-position: 77.5% 20% !important;
}
.emoji1f6bc {
  background-position: 77.5% 22.5% !important;
}
.emoji1f6bd {
  background-position: 77.5% 25% !important;
}
.emoji1f6be {
  background-position: 77.5% 27.5% !important;
}
.emoji1f6bf {
  background-position: 77.5% 30% !important;
}
.emoji1f6c0 {
  background-position: 77.5% 32.5% !important;
}
.emoji1f6c1 {
  background-position: 77.5% 47.5% !important;
}
.emoji1f6c2 {
  background-position: 77.5% 50% !important;
}
.emoji1f6c3 {
  background-position: 77.5% 52.5% !important;
}
.emoji1f6c4 {
  background-position: 77.5% 55% !important;
}
.emoji1f6c5 {
  background-position: 77.5% 57.5% !important;
}
.emoji1f6cb {
  background-position: 77.5% 60% !important;
}
.emoji1f6cc {
  background-position: 77.5% 62.5% !important;
}
.emoji1f6cd {
  background-position: 77.5% 65% !important;
}
.emoji1f6ce {
  background-position: 77.5% 67.5% !important;
}
.emoji1f6cf {
  background-position: 77.5% 70% !important;
}
.emoji1f6d0 {
  background-position: 77.5% 72.5% !important;
}
.emoji1f6e0 {
  background-position: 77.5% 75% !important;
}
.emoji1f6e1 {
  background-position: 77.5% 77.5% !important;
}
.emoji1f6e2 {
  background-position: 77.5% 80% !important;
}
.emoji1f6e3 {
  background-position: 77.5% 82.5% !important;
}
.emoji1f6e4 {
  background-position: 77.5% 85% !important;
}
.emoji1f6e5 {
  background-position: 77.5% 87.5% !important;
}
.emoji1f6e9 {
  background-position: 77.5% 90% !important;
}
.emoji1f6eb {
  background-position: 77.5% 92.5% !important;
}
.emoji1f6ec {
  background-position: 77.5% 95% !important;
}
.emoji1f6f0 {
  background-position: 77.5% 97.5% !important;
}
.emoji1f6f3 {
  background-position: 77.5% 100% !important;
}
.emoji1f910 {
  background-position: 80% 0% !important;
}
.emoji1f911 {
  background-position: 80% 2.5% !important;
}
.emoji1f912 {
  background-position: 80% 5% !important;
}
.emoji1f913 {
  background-position: 80% 7.5% !important;
}
.emoji1f914 {
  background-position: 80% 10% !important;
}
.emoji1f915 {
  background-position: 80% 12.5% !important;
}
.emoji1f916 {
  background-position: 80% 15% !important;
}
.emoji1f917 {
  background-position: 80% 17.5% !important;
}
.emoji1f918 {
  background-position: 80% 20% !important;
}
.emoji1f980 {
  background-position: 80% 35% !important;
}
.emoji1f981 {
  background-position: 80% 37.5% !important;
}
.emoji1f982 {
  background-position: 80% 40% !important;
}
.emoji1f983 {
  background-position: 80% 42.5% !important;
}
.emoji1f984 {
  background-position: 80% 45% !important;
}
.emoji1f9c0 {
  background-position: 80% 47.5% !important;
}
.emoji2320e3 {
  background-position: 80% 50% !important;
}
.emoji2a20e3 {
  background-position: 80% 52.5% !important;
}
.emoji3020e3 {
  background-position: 80% 55% !important;
}
.emoji3120e3 {
  background-position: 80% 57.5% !important;
}
.emoji3220e3 {
  background-position: 80% 60% !important;
}
.emoji3320e3 {
  background-position: 80% 62.5% !important;
}
.emoji3420e3 {
  background-position: 80% 65% !important;
}
.emoji3520e3 {
  background-position: 80% 67.5% !important;
}
.emoji3620e3 {
  background-position: 80% 70% !important;
}
.emoji3720e3 {
  background-position: 80% 72.5% !important;
}
.emoji3820e3 {
  background-position: 80% 75% !important;
}
.emoji3920e3 {
  background-position: 80% 77.5% !important;
}
.emoji1f1e61f1e8 {
  background-position: 80% 80% !important;
}
.emoji1f1e61f1e9 {
  background-position: 80% 82.5% !important;
}
.emoji1f1e61f1ea {
  background-position: 80% 85% !important;
}
.emoji1f1e61f1eb {
  background-position: 80% 87.5% !important;
}
.emoji1f1e61f1ec {
  background-position: 80% 90% !important;
}
.emoji1f1e61f1ee {
  background-position: 80% 92.5% !important;
}
.emoji1f1e61f1f1 {
  background-position: 80% 95% !important;
}
.emoji1f1e61f1f2 {
  background-position: 80% 97.5% !important;
}
.emoji1f1e61f1f4 {
  background-position: 80% 100% !important;
}
.emoji1f1e61f1f6 {
  background-position: 82.5% 0% !important;
}
.emoji1f1e61f1f7 {
  background-position: 82.5% 2.5% !important;
}
.emoji1f1e61f1f8 {
  background-position: 82.5% 5% !important;
}
.emoji1f1e61f1f9 {
  background-position: 82.5% 7.5% !important;
}
.emoji1f1e61f1fa {
  background-position: 82.5% 10% !important;
}
.emoji1f1e61f1fc {
  background-position: 82.5% 12.5% !important;
}
.emoji1f1e61f1fd {
  background-position: 82.5% 15% !important;
}
.emoji1f1e61f1ff {
  background-position: 82.5% 17.5% !important;
}
.emoji1f1e71f1e6 {
  background-position: 82.5% 20% !important;
}
.emoji1f1e71f1e7 {
  background-position: 82.5% 22.5% !important;
}
.emoji1f1e71f1e9 {
  background-position: 82.5% 25% !important;
}
.emoji1f1e71f1ea {
  background-position: 82.5% 27.5% !important;
}
.emoji1f1e71f1eb {
  background-position: 82.5% 30% !important;
}
.emoji1f1e71f1ec {
  background-position: 82.5% 32.5% !important;
}
.emoji1f1e71f1ed {
  background-position: 82.5% 35% !important;
}
.emoji1f1e71f1ee {
  background-position: 82.5% 37.5% !important;
}
.emoji1f1e71f1ef {
  background-position: 82.5% 40% !important;
}
.emoji1f1e71f1f1 {
  background-position: 82.5% 42.5% !important;
}
.emoji1f1e71f1f2 {
  background-position: 82.5% 45% !important;
}
.emoji1f1e71f1f3 {
  background-position: 82.5% 47.5% !important;
}
.emoji1f1e71f1f4 {
  background-position: 82.5% 50% !important;
}
.emoji1f1e71f1f6 {
  background-position: 82.5% 52.5% !important;
}
.emoji1f1e71f1f7 {
  background-position: 82.5% 55% !important;
}
.emoji1f1e71f1f8 {
  background-position: 82.5% 57.5% !important;
}
.emoji1f1e71f1f9 {
  background-position: 82.5% 60% !important;
}
.emoji1f1e71f1fb {
  background-position: 82.5% 62.5% !important;
}
.emoji1f1e71f1fc {
  background-position: 82.5% 65% !important;
}
.emoji1f1e71f1fe {
  background-position: 82.5% 67.5% !important;
}
.emoji1f1e71f1ff {
  background-position: 82.5% 70% !important;
}
.emoji1f1e81f1e6 {
  background-position: 82.5% 72.5% !important;
}
.emoji1f1e81f1e8 {
  background-position: 82.5% 75% !important;
}
.emoji1f1e81f1e9 {
  background-position: 82.5% 77.5% !important;
}
.emoji1f1e81f1eb {
  background-position: 82.5% 80% !important;
}
.emoji1f1e81f1ec {
  background-position: 82.5% 82.5% !important;
}
.emoji1f1e81f1ed {
  background-position: 82.5% 85% !important;
}
.emoji1f1e81f1ee {
  background-position: 82.5% 87.5% !important;
}
.emoji1f1e81f1f0 {
  background-position: 82.5% 90% !important;
}
.emoji1f1e81f1f1 {
  background-position: 82.5% 92.5% !important;
}
.emoji1f1e81f1f2 {
  background-position: 82.5% 95% !important;
}
.emoji1f1e81f1f3 {
  background-position: 82.5% 97.5% !important;
}
.emoji1f1e81f1f4 {
  background-position: 82.5% 100% !important;
}
.emoji1f1e81f1f5 {
  background-position: 85% 0% !important;
}
.emoji1f1e81f1f7 {
  background-position: 85% 2.5% !important;
}
.emoji1f1e81f1fa {
  background-position: 85% 5% !important;
}
.emoji1f1e81f1fb {
  background-position: 85% 7.5% !important;
}
.emoji1f1e81f1fc {
  background-position: 85% 10% !important;
}
.emoji1f1e81f1fd {
  background-position: 85% 12.5% !important;
}
.emoji1f1e81f1fe {
  background-position: 85% 15% !important;
}
.emoji1f1e81f1ff {
  background-position: 85% 17.5% !important;
}
.emoji1f1e91f1ea {
  background-position: 85% 20% !important;
}
.emoji1f1e91f1ec {
  background-position: 85% 22.5% !important;
}
.emoji1f1e91f1ef {
  background-position: 85% 25% !important;
}
.emoji1f1e91f1f0 {
  background-position: 85% 27.5% !important;
}
.emoji1f1e91f1f2 {
  background-position: 85% 30% !important;
}
.emoji1f1e91f1f4 {
  background-position: 85% 32.5% !important;
}
.emoji1f1e91f1ff {
  background-position: 85% 35% !important;
}
.emoji1f1ea1f1e6 {
  background-position: 85% 37.5% !important;
}
.emoji1f1ea1f1e8 {
  background-position: 85% 40% !important;
}
.emoji1f1ea1f1ea {
  background-position: 85% 42.5% !important;
}
.emoji1f1ea1f1ec {
  background-position: 85% 45% !important;
}
.emoji1f1ea1f1ed {
  background-position: 85% 47.5% !important;
}
.emoji1f1ea1f1f7 {
  background-position: 85% 50% !important;
}
.emoji1f1ea1f1f8 {
  background-position: 85% 52.5% !important;
}
.emoji1f1ea1f1f9 {
  background-position: 85% 55% !important;
}
.emoji1f1ea1f1fa {
  background-position: 85% 57.5% !important;
}
.emoji1f1eb1f1ee {
  background-position: 85% 60% !important;
}
.emoji1f1eb1f1ef {
  background-position: 85% 62.5% !important;
}
.emoji1f1eb1f1f0 {
  background-position: 85% 65% !important;
}
.emoji1f1eb1f1f2 {
  background-position: 85% 67.5% !important;
}
.emoji1f1eb1f1f4 {
  background-position: 85% 70% !important;
}
.emoji1f1eb1f1f7 {
  background-position: 85% 72.5% !important;
}
.emoji1f1ec1f1e6 {
  background-position: 85% 75% !important;
}
.emoji1f1ec1f1e7 {
  background-position: 85% 77.5% !important;
}
.emoji1f1ec1f1e9 {
  background-position: 85% 80% !important;
}
.emoji1f1ec1f1ea {
  background-position: 85% 82.5% !important;
}
.emoji1f1ec1f1eb {
  background-position: 85% 85% !important;
}
.emoji1f1ec1f1ec {
  background-position: 85% 87.5% !important;
}
.emoji1f1ec1f1ed {
  background-position: 85% 90% !important;
}
.emoji1f1ec1f1ee {
  background-position: 85% 92.5% !important;
}
.emoji1f1ec1f1f1 {
  background-position: 85% 95% !important;
}
.emoji1f1ec1f1f2 {
  background-position: 85% 97.5% !important;
}
.emoji1f1ec1f1f3 {
  background-position: 85% 100% !important;
}
.emoji1f1ec1f1f5 {
  background-position: 87.5% 0% !important;
}
.emoji1f1ec1f1f6 {
  background-position: 87.5% 2.5% !important;
}
.emoji1f1ec1f1f7 {
  background-position: 87.5% 5% !important;
}
.emoji1f1ec1f1f8 {
  background-position: 87.5% 7.5% !important;
}
.emoji1f1ec1f1f9 {
  background-position: 87.5% 10% !important;
}
.emoji1f1ec1f1fa {
  background-position: 87.5% 12.5% !important;
}
.emoji1f1ec1f1fc {
  background-position: 87.5% 15% !important;
}
.emoji1f1ec1f1fe {
  background-position: 87.5% 17.5% !important;
}
.emoji1f1ed1f1f0 {
  background-position: 87.5% 20% !important;
}
.emoji1f1ed1f1f2 {
  background-position: 87.5% 22.5% !important;
}
.emoji1f1ed1f1f3 {
  background-position: 87.5% 25% !important;
}
.emoji1f1ed1f1f7 {
  background-position: 87.5% 27.5% !important;
}
.emoji1f1ed1f1f9 {
  background-position: 87.5% 30% !important;
}
.emoji1f1ed1f1fa {
  background-position: 87.5% 32.5% !important;
}
.emoji1f1ee1f1e8 {
  background-position: 87.5% 35% !important;
}
.emoji1f1ee1f1e9 {
  background-position: 87.5% 37.5% !important;
}
.emoji1f1ee1f1ea {
  background-position: 87.5% 40% !important;
}
.emoji1f1ee1f1f1 {
  background-position: 87.5% 42.5% !important;
}
.emoji1f1ee1f1f2 {
  background-position: 87.5% 45% !important;
}
.emoji1f1ee1f1f3 {
  background-position: 87.5% 47.5% !important;
}
.emoji1f1ee1f1f4 {
  background-position: 87.5% 50% !important;
}
.emoji1f1ee1f1f6 {
  background-position: 87.5% 52.5% !important;
}
.emoji1f1ee1f1f7 {
  background-position: 87.5% 55% !important;
}
.emoji1f1ee1f1f8 {
  background-position: 87.5% 57.5% !important;
}
.emoji1f1ee1f1f9 {
  background-position: 87.5% 60% !important;
}
.emoji1f1ef1f1ea {
  background-position: 87.5% 62.5% !important;
}
.emoji1f1ef1f1f2 {
  background-position: 87.5% 65% !important;
}
.emoji1f1ef1f1f4 {
  background-position: 87.5% 67.5% !important;
}
.emoji1f1ef1f1f5 {
  background-position: 87.5% 70% !important;
}
.emoji1f1f01f1ea {
  background-position: 87.5% 72.5% !important;
}
.emoji1f1f01f1ec {
  background-position: 87.5% 75% !important;
}
.emoji1f1f01f1ed {
  background-position: 87.5% 77.5% !important;
}
.emoji1f1f01f1ee {
  background-position: 87.5% 80% !important;
}
.emoji1f1f01f1f2 {
  background-position: 87.5% 82.5% !important;
}
.emoji1f1f01f1f3 {
  background-position: 87.5% 85% !important;
}
.emoji1f1f01f1f5 {
  background-position: 87.5% 87.5% !important;
}
.emoji1f1f01f1f7 {
  background-position: 87.5% 90% !important;
}
.emoji1f1f01f1fc {
  background-position: 87.5% 92.5% !important;
}
.emoji1f1f01f1fe {
  background-position: 87.5% 95% !important;
}
.emoji1f1f01f1ff {
  background-position: 87.5% 97.5% !important;
}
.emoji1f1f11f1e6 {
  background-position: 87.5% 100% !important;
}
.emoji1f1f11f1e7 {
  background-position: 90% 0% !important;
}
.emoji1f1f11f1e8 {
  background-position: 90% 2.5% !important;
}
.emoji1f1f11f1ee {
  background-position: 90% 5% !important;
}
.emoji1f1f11f1f0 {
  background-position: 90% 7.5% !important;
}
.emoji1f1f11f1f7 {
  background-position: 90% 10% !important;
}
.emoji1f1f11f1f8 {
  background-position: 90% 12.5% !important;
}
.emoji1f1f11f1f9 {
  background-position: 90% 15% !important;
}
.emoji1f1f11f1fa {
  background-position: 90% 17.5% !important;
}
.emoji1f1f11f1fb {
  background-position: 90% 20% !important;
}
.emoji1f1f11f1fe {
  background-position: 90% 22.5% !important;
}
.emoji1f1f21f1e6 {
  background-position: 90% 25% !important;
}
.emoji1f1f21f1e8 {
  background-position: 90% 27.5% !important;
}
.emoji1f1f21f1e9 {
  background-position: 90% 30% !important;
}
.emoji1f1f21f1ea {
  background-position: 90% 32.5% !important;
}
.emoji1f1f21f1eb {
  background-position: 90% 35% !important;
}
.emoji1f1f21f1ec {
  background-position: 90% 37.5% !important;
}
.emoji1f1f21f1ed {
  background-position: 90% 40% !important;
}
.emoji1f1f21f1f0 {
  background-position: 90% 42.5% !important;
}
.emoji1f1f21f1f1 {
  background-position: 90% 45% !important;
}
.emoji1f1f21f1f2 {
  background-position: 90% 47.5% !important;
}
.emoji1f1f21f1f3 {
  background-position: 90% 50% !important;
}
.emoji1f1f21f1f4 {
  background-position: 90% 52.5% !important;
}
.emoji1f1f21f1f5 {
  background-position: 90% 55% !important;
}
.emoji1f1f21f1f6 {
  background-position: 90% 57.5% !important;
}
.emoji1f1f21f1f7 {
  background-position: 90% 60% !important;
}
.emoji1f1f21f1f8 {
  background-position: 90% 62.5% !important;
}
.emoji1f1f21f1f9 {
  background-position: 90% 65% !important;
}
.emoji1f1f21f1fa {
  background-position: 90% 67.5% !important;
}
.emoji1f1f21f1fb {
  background-position: 90% 70% !important;
}
.emoji1f1f21f1fc {
  background-position: 90% 72.5% !important;
}
.emoji1f1f21f1fd {
  background-position: 90% 75% !important;
}
.emoji1f1f21f1fe {
  background-position: 90% 77.5% !important;
}
.emoji1f1f21f1ff {
  background-position: 90% 80% !important;
}
.emoji1f1f31f1e6 {
  background-position: 90% 82.5% !important;
}
.emoji1f1f31f1e8 {
  background-position: 90% 85% !important;
}
.emoji1f1f31f1ea {
  background-position: 90% 87.5% !important;
}
.emoji1f1f31f1eb {
  background-position: 90% 90% !important;
}
.emoji1f1f31f1ec {
  background-position: 90% 92.5% !important;
}
.emoji1f1f31f1ee {
  background-position: 90% 95% !important;
}
.emoji1f1f31f1f1 {
  background-position: 90% 97.5% !important;
}
.emoji1f1f31f1f4 {
  background-position: 90% 100% !important;
}
.emoji1f1f31f1f5 {
  background-position: 92.5% 0% !important;
}
.emoji1f1f31f1f7 {
  background-position: 92.5% 2.5% !important;
}
.emoji1f1f31f1fa {
  background-position: 92.5% 5% !important;
}
.emoji1f1f31f1ff {
  background-position: 92.5% 7.5% !important;
}
.emoji1f1f41f1f2 {
  background-position: 92.5% 10% !important;
}
.emoji1f1f51f1e6 {
  background-position: 92.5% 12.5% !important;
}
.emoji1f1f51f1ea {
  background-position: 92.5% 15% !important;
}
.emoji1f1f51f1eb {
  background-position: 92.5% 17.5% !important;
}
.emoji1f1f51f1ec {
  background-position: 92.5% 20% !important;
}
.emoji1f1f51f1ed {
  background-position: 92.5% 22.5% !important;
}
.emoji1f1f51f1f0 {
  background-position: 92.5% 25% !important;
}
.emoji1f1f51f1f1 {
  background-position: 92.5% 27.5% !important;
}
.emoji1f1f51f1f2 {
  background-position: 92.5% 30% !important;
}
.emoji1f1f51f1f3 {
  background-position: 92.5% 32.5% !important;
}
.emoji1f1f51f1f7 {
  background-position: 92.5% 35% !important;
}
.emoji1f1f51f1f8 {
  background-position: 92.5% 37.5% !important;
}
.emoji1f1f51f1f9 {
  background-position: 92.5% 40% !important;
}
.emoji1f1f51f1fc {
  background-position: 92.5% 42.5% !important;
}
.emoji1f1f51f1fe {
  background-position: 92.5% 45% !important;
}
.emoji1f1f61f1e6 {
  background-position: 92.5% 47.5% !important;
}
.emoji1f1f71f1ea {
  background-position: 92.5% 50% !important;
}
.emoji1f1f71f1f4 {
  background-position: 92.5% 52.5% !important;
}
.emoji1f1f71f1f8 {
  background-position: 92.5% 55% !important;
}
.emoji1f1f71f1fa {
  background-position: 92.5% 57.5% !important;
}
.emoji1f1f71f1fc {
  background-position: 92.5% 60% !important;
}
.emoji1f1f81f1e6 {
  background-position: 92.5% 62.5% !important;
}
.emoji1f1f81f1e7 {
  background-position: 92.5% 65% !important;
}
.emoji1f1f81f1e8 {
  background-position: 92.5% 67.5% !important;
}
.emoji1f1f81f1e9 {
  background-position: 92.5% 70% !important;
}
.emoji1f1f81f1ea {
  background-position: 92.5% 72.5% !important;
}
.emoji1f1f81f1ec {
  background-position: 92.5% 75% !important;
}
.emoji1f1f81f1ed {
  background-position: 92.5% 77.5% !important;
}
.emoji1f1f81f1ee {
  background-position: 92.5% 80% !important;
}
.emoji1f1f81f1ef {
  background-position: 92.5% 82.5% !important;
}
.emoji1f1f81f1f0 {
  background-position: 92.5% 85% !important;
}
.emoji1f1f81f1f1 {
  background-position: 92.5% 87.5% !important;
}
.emoji1f1f81f1f2 {
  background-position: 92.5% 90% !important;
}
.emoji1f1f81f1f3 {
  background-position: 92.5% 92.5% !important;
}
.emoji1f1f81f1f4 {
  background-position: 92.5% 95% !important;
}
.emoji1f1f81f1f7 {
  background-position: 92.5% 97.5% !important;
}
.emoji1f1f81f1f8 {
  background-position: 92.5% 100% !important;
}
.emoji1f1f81f1f9 {
  background-position: 95% 0% !important;
}
.emoji1f1f81f1fb {
  background-position: 95% 2.5% !important;
}
.emoji1f1f81f1fd {
  background-position: 95% 5% !important;
}
.emoji1f1f81f1fe {
  background-position: 95% 7.5% !important;
}
.emoji1f1f81f1ff {
  background-position: 95% 10% !important;
}
.emoji1f1f91f1e6 {
  background-position: 95% 12.5% !important;
}
.emoji1f1f91f1e8 {
  background-position: 95% 15% !important;
}
.emoji1f1f91f1e9 {
  background-position: 95% 17.5% !important;
}
.emoji1f1f91f1eb {
  background-position: 95% 20% !important;
}
.emoji1f1f91f1ec {
  background-position: 95% 22.5% !important;
}
.emoji1f1f91f1ed {
  background-position: 95% 25% !important;
}
.emoji1f1f91f1ef {
  background-position: 95% 27.5% !important;
}
.emoji1f1f91f1f0 {
  background-position: 95% 30% !important;
}
.emoji1f1f91f1f1 {
  background-position: 95% 32.5% !important;
}
.emoji1f1f91f1f2 {
  background-position: 95% 35% !important;
}
.emoji1f1f91f1f3 {
  background-position: 95% 37.5% !important;
}
.emoji1f1f91f1f4 {
  background-position: 95% 40% !important;
}
.emoji1f1f91f1f7 {
  background-position: 95% 42.5% !important;
}
.emoji1f1f91f1f9 {
  background-position: 95% 45% !important;
}
.emoji1f1f91f1fb {
  background-position: 95% 47.5% !important;
}
.emoji1f1f91f1fc {
  background-position: 95% 50% !important;
}
.emoji1f1f91f1ff {
  background-position: 95% 52.5% !important;
}
.emoji1f1fa1f1e6 {
  background-position: 95% 55% !important;
}
.emoji1f1fa1f1ec {
  background-position: 95% 57.5% !important;
}
.emoji1f1fa1f1f2 {
  background-position: 95% 60% !important;
}
.emoji1f1fa1f1f8 {
  background-position: 95% 62.5% !important;
}
.emoji1f1fa1f1fe {
  background-position: 95% 65% !important;
}
.emoji1f1fa1f1ff {
  background-position: 95% 67.5% !important;
}
.emoji1f1fb1f1e6 {
  background-position: 95% 70% !important;
}
.emoji1f1fb1f1e8 {
  background-position: 95% 72.5% !important;
}
.emoji1f1fb1f1ea {
  background-position: 95% 75% !important;
}
.emoji1f1fb1f1ec {
  background-position: 95% 77.5% !important;
}
.emoji1f1fb1f1ee {
  background-position: 95% 80% !important;
}
.emoji1f1fb1f1f3 {
  background-position: 95% 82.5% !important;
}
.emoji1f1fb1f1fa {
  background-position: 95% 85% !important;
}
.emoji1f1fc1f1eb {
  background-position: 95% 87.5% !important;
}
.emoji1f1fc1f1f8 {
  background-position: 95% 90% !important;
}
.emoji1f1fd1f1f0 {
  background-position: 95% 92.5% !important;
}
.emoji1f1fe1f1ea {
  background-position: 95% 95% !important;
}
.emoji1f1fe1f1f9 {
  background-position: 95% 97.5% !important;
}
.emoji1f1ff1f1e6 {
  background-position: 95% 100% !important;
}
.emoji1f1ff1f1f2 {
  background-position: 97.5% 0% !important;
}
.emoji1f1ff1f1fc {
  background-position: 97.5% 2.5% !important;
}
.emoji1f468200d1f468200d1f466 {
  background-position: 97.5% 5% !important;
}
.emoji1f468200d1f468200d1f466200d1f466 {
  background-position: 97.5% 7.5% !important;
}
.emoji1f468200d1f468200d1f467 {
  background-position: 97.5% 10% !important;
}
.emoji1f468200d1f468200d1f467200d1f466 {
  background-position: 97.5% 12.5% !important;
}
.emoji1f468200d1f468200d1f467200d1f467 {
  background-position: 97.5% 15% !important;
}
.emoji1f468200d1f469200d1f466200d1f466 {
  background-position: 97.5% 17.5% !important;
}
.emoji1f468200d1f469200d1f467 {
  background-position: 97.5% 20% !important;
}
.emoji1f468200d1f469200d1f467200d1f466 {
  background-position: 97.5% 22.5% !important;
}
.emoji1f468200d1f469200d1f467200d1f467 {
  background-position: 97.5% 25% !important;
}
.emoji1f468200d2764fe0f200d1f468 {
  background-position: 97.5% 27.5% !important;
}
.emoji1f468200d2764fe0f200d1f48b200d1f468 {
  background-position: 97.5% 30% !important;
}
.emoji1f469200d1f469200d1f466 {
  background-position: 97.5% 32.5% !important;
}
.emoji1f469200d1f469200d1f466200d1f466 {
  background-position: 97.5% 35% !important;
}
.emoji1f469200d1f469200d1f467 {
  background-position: 97.5% 37.5% !important;
}
.emoji1f469200d1f469200d1f467200d1f466 {
  background-position: 97.5% 40% !important;
}
.emoji1f469200d1f469200d1f467200d1f467 {
  background-position: 97.5% 42.5% !important;
}
.emoji1f469200d2764fe0f200d1f469 {
  background-position: 97.5% 45% !important;
}
.emoji1f469200d2764fe0f200d1f48b200d1f469 {
  background-position: 97.5% 47.5% !important;
}
/*
 * typehead.js-bootstrap3.less
 * @version 0.2.3
 * https://github.com/hyspace/typeahead.js-bootstrap3.less
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
.has-warning .twitter-typeahead .tt-input,
.has-warning .twitter-typeahead .tt-hint {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .twitter-typeahead .tt-input:focus,
.has-warning .twitter-typeahead .tt-hint:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.has-error .twitter-typeahead .tt-input,
.has-error .twitter-typeahead .tt-hint {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .twitter-typeahead .tt-input:focus,
.has-error .twitter-typeahead .tt-hint:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.has-success .twitter-typeahead .tt-input,
.has-success .twitter-typeahead .tt-hint {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .twitter-typeahead .tt-input:focus,
.has-success .twitter-typeahead .tt-hint:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.input-group .twitter-typeahead:first-child .tt-input,
.input-group .twitter-typeahead:first-child .tt-hint {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}
.input-group .twitter-typeahead:last-child .tt-input,
.input-group .twitter-typeahead:last-child .tt-hint {
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}
.input-group.input-group-sm .twitter-typeahead .tt-input,
.input-group.input-group-sm .twitter-typeahead .tt-hint {
  height: 28px;
  padding: 5px 10px;
  font-size: 11px;
  line-height: 1.456;
  border-radius: 2px;
}
select.input-group.input-group-sm .twitter-typeahead .tt-input,
select.input-group.input-group-sm .twitter-typeahead .tt-hint {
  height: 28px;
  line-height: 28px;
}
textarea.input-group.input-group-sm .twitter-typeahead .tt-input,
textarea.input-group.input-group-sm .twitter-typeahead .tt-hint,
select[multiple].input-group.input-group-sm .twitter-typeahead .tt-input,
select[multiple].input-group.input-group-sm .twitter-typeahead .tt-hint {
  height: auto;
}
.input-group.input-group-sm .twitter-typeahead:not(:first-child):not(:last-child) .tt-input,
.input-group.input-group-sm .twitter-typeahead:not(:first-child):not(:last-child) .tt-hint {
  border-radius: 0;
}
.input-group.input-group-sm .twitter-typeahead:first-child .tt-input,
.input-group.input-group-sm .twitter-typeahead:first-child .tt-hint {
  border-bottom-left-radius: 2px;
  border-top-left-radius: 2px;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.input-group.input-group-sm .twitter-typeahead:last-child .tt-input,
.input-group.input-group-sm .twitter-typeahead:last-child .tt-hint {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 2px;
  border-top-right-radius: 2px;
}
.input-group.input-group-lg .twitter-typeahead .tt-input,
.input-group.input-group-lg .twitter-typeahead .tt-hint {
  height: 42px;
  padding: 10px 16px;
  font-size: 16px;
  line-height: 1.25;
  border-radius: 4px;
}
select.input-group.input-group-lg .twitter-typeahead .tt-input,
select.input-group.input-group-lg .twitter-typeahead .tt-hint {
  height: 42px;
  line-height: 42px;
}
textarea.input-group.input-group-lg .twitter-typeahead .tt-input,
textarea.input-group.input-group-lg .twitter-typeahead .tt-hint,
select[multiple].input-group.input-group-lg .twitter-typeahead .tt-input,
select[multiple].input-group.input-group-lg .twitter-typeahead .tt-hint {
  height: auto;
}
.input-group.input-group-lg .twitter-typeahead:not(:first-child):not(:last-child) .tt-input,
.input-group.input-group-lg .twitter-typeahead:not(:first-child):not(:last-child) .tt-hint {
  border-radius: 0;
}
.input-group.input-group-lg .twitter-typeahead:first-child .tt-input,
.input-group.input-group-lg .twitter-typeahead:first-child .tt-hint {
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}
.input-group.input-group-lg .twitter-typeahead:last-child .tt-input,
.input-group.input-group-lg .twitter-typeahead:last-child .tt-hint {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
}
.twitter-typeahead {
  width: 100%;
  display: table-cell !important;
  float: left;
}
.twitter-typeahead .tt-hint {
  color: #a0acb8;
}
.twitter-typeahead .tt-input {
  z-index: 2;
}
.twitter-typeahead .tt-input[disabled],
.twitter-typeahead .tt-input[readonly],
fieldset[disabled] .twitter-typeahead .tt-input {
  cursor: not-allowed;
  background-color: #ebedf0 !important;
}
.tt-dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  min-width: 160px;
  width: 100%;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 13px;
  background-color: #fff;
  border: 1px solid #eee;
  border: 1px solid rgba(0, 0, 0, 0.06);
  border-radius: 3px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
  *border-right-width: 2px;
  *border-bottom-width: 2px;
}
.tt-dropdown-menu .tt-suggestion {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.3856;
  color: #47535f;
  white-space: nowrap;
}
.tt-dropdown-menu .tt-suggestion.tt-cursor {
  text-decoration: none;
  outline: 0;
  background-color: #f5f5f5;
  color: #3c4650;
}
.tt-dropdown-menu .tt-suggestion.tt-cursor a {
  color: #3c4650;
}
.tt-dropdown-menu .tt-suggestion p {
  margin: 0;
}
.xdsoft_datetimepicker {
  box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.506);
  background: #fff;
  border-bottom: 1px solid #bbb;
  border-left: 1px solid #ccc;
  border-right: 1px solid #ccc;
  border-top: 1px solid #ccc;
  color: #333;
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  padding: 8px;
  padding-left: 0;
  padding-top: 2px;
  position: absolute;
  z-index: 9999;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  display: none;
}
.xdsoft_datetimepicker.xdsoft_rtl {
  padding: 8px 0 8px 8px;
}
.xdsoft_datetimepicker iframe {
  position: absolute;
  left: 0;
  top: 0;
  width: 75px;
  height: 210px;
  background: transparent;
  border: none;
}
/*For IE8 or lower*/
.xdsoft_datetimepicker button {
  border: none !important;
}
.xdsoft_noselect {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.xdsoft_noselect::selection {
  background: transparent;
}
.xdsoft_noselect::-moz-selection {
  background: transparent;
}
.xdsoft_datetimepicker.xdsoft_inline {
  display: inline-block;
  position: static;
  box-shadow: none;
}
.xdsoft_datetimepicker * {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}
.xdsoft_datetimepicker .xdsoft_datepicker,
.xdsoft_datetimepicker .xdsoft_timepicker {
  display: none;
}
.xdsoft_datetimepicker .xdsoft_datepicker.active,
.xdsoft_datetimepicker .xdsoft_timepicker.active {
  display: block;
}
.xdsoft_datetimepicker .xdsoft_datepicker {
  width: 224px;
  float: left;
  margin-left: 8px;
}
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_datepicker {
  float: right;
  margin-right: 8px;
  margin-left: 0;
}
.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_datepicker {
  width: 256px;
}
.xdsoft_datetimepicker .xdsoft_timepicker {
  width: 58px;
  float: left;
  text-align: center;
  margin-left: 8px;
  margin-top: 0;
}
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker {
  float: right;
  margin-right: 8px;
  margin-left: 0;
}
.xdsoft_datetimepicker .xdsoft_datepicker.active + .xdsoft_timepicker {
  margin-top: 8px;
  margin-bottom: 3px;
}
.xdsoft_datetimepicker .xdsoft_monthpicker {
  position: relative;
  text-align: center;
}
.xdsoft_datetimepicker .xdsoft_label i,
.xdsoft_datetimepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_next,
.xdsoft_datetimepicker .xdsoft_today_button {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0NBRjI1NjM0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0NBRjI1NjQ0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDQ0FGMjU2MTQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDQ0FGMjU2MjQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PoNEP54AAAIOSURBVHja7Jq9TsMwEMcxrZD4WpBYeKUCe+kTMCACHZh4BFfHO/AAIHZGFhYkBBsSEqxsLCAgXKhbXYOTxh9pfJVP+qutnZ5s/5Lz2Y5I03QhWji2GIcgAokWgfCxNvcOCCGKqiSqhUp0laHOne05vdEyGMfkdxJDVjgwDlEQgYQBgx+ULJaWSXXS6r/ER5FBVR8VfGftTKcITNs+a1XpcFoExREIDF14AVIFxgQUS+h520cdud6wNkC0UBw6BCO/HoCYwBhD8QCkQ/x1mwDyD4plh4D6DDV0TAGyo4HcawLIBBSLDkHeH0Mg2yVP3l4TQMZQDDsEOl/MgHQqhMNuE0D+oBh0CIr8MAKyazBH9WyBuKxDWgbXfjNf32TZ1KWm/Ap1oSk/R53UtQ5xTh3LUlMmT8gt6g51Q9p+SobxgJQ/qmsfZhWywGFSl0yBjCLJCMgXail3b7+rumdVJ2YRss4cN+r6qAHDkPWjPjdJCF4n9RmAD/V9A/Wp4NQassDjwlB6XBiCxcJQWmZZb8THFilfy/lfrTvLghq2TqTHrRMTKNJ0sIhdo15RT+RpyWwFdY96UZ/LdQKBGjcXpcc1AlSFEfLmouD+1knuxBDUVrvOBmoOC/rEcN7OQxKVeJTCiAdUzUJhA2Oez9QTkp72OTVcxDcXY8iKNkxGAJXmJCOQwOa6dhyXsOa6XwEGAKdeb5ET3rQdAAAAAElFTkSuQmCC);
}
.xdsoft_datetimepicker .xdsoft_label i {
  opacity: 0.5;
  background-position: -92px -19px;
  display: inline-block;
  width: 9px;
  height: 20px;
  vertical-align: middle;
}
.xdsoft_datetimepicker .xdsoft_prev {
  float: left;
  background-position: -20px 0;
}
.xdsoft_datetimepicker .xdsoft_today_button {
  float: left;
  background-position: -70px 0;
  margin-left: 5px;
}
.xdsoft_datetimepicker .xdsoft_next {
  float: right;
  background-position: 0 0;
}
.xdsoft_datetimepicker .xdsoft_next,
.xdsoft_datetimepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_today_button {
  background-color: transparent;
  background-repeat: no-repeat;
  border: 0 none;
  cursor: pointer;
  display: block;
  height: 30px;
  opacity: 0.5;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)\";
  outline: medium none;
  overflow: hidden;
  padding: 0;
  position: relative;
  text-indent: 100%;
  white-space: nowrap;
  width: 20px;
  min-width: 0;
}
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_next {
  float: none;
  background-position: -40px -15px;
  height: 15px;
  width: 30px;
  display: block;
  margin-left: 14px;
  margin-top: 7px;
}
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker .xdsoft_prev,
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker .xdsoft_next {
  float: none;
  margin-left: 0;
  margin-right: 14px;
}
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev {
  background-position: -40px 0;
  margin-bottom: 7px;
  margin-top: 0;
}
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box {
  height: 151px;
  overflow: hidden;
  border-bottom: 1px solid #ddd;
}
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div {
  background: #f5f5f5;
  border-top: 1px solid #ddd;
  color: #666;
  font-size: 12px;
  text-align: center;
  border-collapse: collapse;
  cursor: pointer;
  border-bottom-width: 0;
  height: 25px;
  line-height: 25px;
}
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div:first-child {
  border-top-width: 0;
}
.xdsoft_datetimepicker .xdsoft_today_button:hover,
.xdsoft_datetimepicker .xdsoft_next:hover,
.xdsoft_datetimepicker .xdsoft_prev:hover {
  opacity: 1;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)\";
}
.xdsoft_datetimepicker .xdsoft_label {
  display: inline;
  position: relative;
  z-index: 9999;
  margin: 0;
  padding: 5px 3px;
  font-size: 14px;
  line-height: 20px;
  font-weight: bold;
  background-color: #fff;
  float: left;
  width: 182px;
  text-align: center;
  cursor: pointer;
}
.xdsoft_datetimepicker .xdsoft_label:hover > span {
  text-decoration: underline;
}
.xdsoft_datetimepicker .xdsoft_label:hover i {
  opacity: 1;
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select {
  border: 1px solid #ccc;
  position: absolute;
  right: 0;
  top: 30px;
  z-index: 101;
  display: none;
  background: #fff;
  max-height: 160px;
  overflow-y: hidden;
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_monthselect {
  right: -7px;
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_yearselect {
  right: 2px;
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
  color: #fff;
  background: #ff8000;
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option {
  padding: 2px 10px 2px 5px;
  text-decoration: none !important;
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
  background: #33aaff;
  box-shadow: #178fe5 0 1px 3px 0 inset;
  color: #fff;
  font-weight: 700;
}
.xdsoft_datetimepicker .xdsoft_month {
  width: 100px;
  text-align: right;
}
.xdsoft_datetimepicker .xdsoft_calendar {
  clear: both;
}
.xdsoft_datetimepicker .xdsoft_year {
  width: 48px;
  margin-left: 5px;
}
.xdsoft_datetimepicker .xdsoft_calendar table {
  border-collapse: collapse;
  width: 100%;
}
.xdsoft_datetimepicker .xdsoft_calendar td > div {
  padding-right: 5px;
}
.xdsoft_datetimepicker .xdsoft_calendar th {
  height: 25px;
}
.xdsoft_datetimepicker .xdsoft_calendar td,
.xdsoft_datetimepicker .xdsoft_calendar th {
  width: 14.2857142%;
  background: #f5f5f5;
  border: 1px solid #ddd;
  color: #666;
  font-size: 12px;
  text-align: right;
  vertical-align: middle;
  padding: 0;
  border-collapse: collapse;
  cursor: pointer;
  height: 25px;
}
.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar td,
.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar th {
  width: 12.5%;
}
.xdsoft_datetimepicker .xdsoft_calendar th {
  background: #f1f1f1;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_today {
  color: #33aaff;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_default {
  background: #ffe9d2;
  box-shadow: #ffb871 0 1px 4px 0 inset;
  color: #000;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_mint {
  background: #c1ffc9;
  box-shadow: #00dd1c 0 1px 4px 0 inset;
  color: #000;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current {
  background: #33aaff;
  box-shadow: #178fe5 0 1px 3px 0 inset;
  color: #fff;
  font-weight: 700;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled,
.xdsoft_datetimepicker .xdsoft_time_box > div > div.xdsoft_disabled {
  opacity: 0.5;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)\";
  cursor: default;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month.xdsoft_disabled {
  opacity: 0.2;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=20)\";
}
.xdsoft_datetimepicker .xdsoft_calendar td:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div:hover {
  color: #fff !important;
  background: #ff8000 !important;
  box-shadow: none !important;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current.xdsoft_disabled:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current.xdsoft_disabled:hover {
  background: #33aaff !important;
  box-shadow: #178fe5 0 1px 3px 0 inset !important;
  color: #fff !important;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_disabled:hover {
  color: inherit\t!important;
  background: inherit !important;
  box-shadow: inherit !important;
}
.xdsoft_datetimepicker .xdsoft_calendar th {
  font-weight: 700;
  text-align: center;
  color: #999;
  cursor: default;
}
.xdsoft_datetimepicker .xdsoft_copyright {
  color: #ccc !important;
  font-size: 10px;
  clear: both;
  float: none;
  margin-left: 8px;
}
.xdsoft_datetimepicker .xdsoft_copyright a {
  color: #eee !important;
}
.xdsoft_datetimepicker .xdsoft_copyright a:hover {
  color: #aaa !important;
}
.xdsoft_time_box {
  position: relative;
  border: 1px solid #ccc;
}
.xdsoft_scrollbar > .xdsoft_scroller {
  background: #ccc !important;
  height: 20px;
  border-radius: 3px;
}
.xdsoft_scrollbar {
  position: absolute;
  width: 7px;
  right: 0;
  top: 0;
  bottom: 0;
  cursor: pointer;
}
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_scrollbar {
  left: 0;
  right: auto;
}
.xdsoft_scroller_box {
  position: relative;
}
.xdsoft_datetimepicker.xdsoft_dark {
  box-shadow: 0 5px 15px -5px rgba(255, 255, 255, 0.506);
  background: #000;
  border-bottom: 1px solid #444;
  border-left: 1px solid #333;
  border-right: 1px solid #333;
  border-top: 1px solid #333;
  color: #ccc;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box {
  border-bottom: 1px solid #222;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box > div > div {
  background: #0a0a0a;
  border-top: 1px solid #222;
  color: #999;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label {
  background-color: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select {
  border: 1px solid #333;
  background: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
  color: #000;
  background: #007fff;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
  background: #cc5500;
  box-shadow: #b03e00 0 1px 3px 0 inset;
  color: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label i,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_prev,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_next,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_today_button {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QUExQUUzOTA0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QUExQUUzOTE0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBQTFBRTM4RTQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBQTFBRTM4RjQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pp0VxGEAAAIASURBVHja7JrNSgMxEMebtgh+3MSLr1T1Xn2CHoSKB08+QmR8Bx9A8e7RixdB9CKCoNdexIugxFlJa7rNZneTbLIpM/CnNLsdMvNjM8l0mRCiQ9Ye61IKCAgZAUnH+mU3MMZaHYChBnJUDzWOFZdVfc5+ZFLbrWDeXPwbxIqrLLfaeS0hEBVGIRQCEiZoHQwtlGSByCCdYBl8g8egTTAWoKQMRBRBcZxYlhzhKegqMOageErsCHVkk3hXIFooDgHB1KkHIHVgzKB4ADJQ/A1jAFmAYhkQqA5TOBtocrKrgXwQA8gcFIuAIO8sQSA7hidvPwaQGZSaAYHOUWJABhWWw2EMIH9QagQERU4SArJXo0ZZL18uvaxejXt/Em8xjVBXmvFr1KVm/AJ10tRe2XnraNqaJvKE3KHuUbfK1E+VHB0q40/y3sdQSxY4FHWeKJCunP8UyDdqJZenT3ntVV5jIYCAh20vT7ioP8tpf6E2lfEMwERe+whV1MHjwZB7PBiCxcGQWwKZKD62lfGNnP/1poFAA60T7rF1UgcKd2id3KDeUS+oLWV8DfWAepOfq00CgQabi9zjcgJVYVD7PVzQUAUGAQkbNJTBICDhgwYTjDYD6XeW08ZKh+A4pYkzenOxXUbvZcWz7E8ykRMnIHGX1XPl+1m2vPYpL+2qdb8CDAARlKFEz/ZVkAAAAABJRU5ErkJggg==);
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
  background: #0a0a0a;
  border: 1px solid #222;
  color: #999;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
  background: #0e0e0e;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_today {
  color: #cc5500;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_default {
  background: #ffe9d2;
  box-shadow: #ffb871 0 1px 4px 0 inset;
  color: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_mint {
  background: #c1ffc9;
  box-shadow: #00dd1c 0 1px 4px 0 inset;
  color: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_default,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current {
  background: #cc5500;
  box-shadow: #b03e00 0 1px 3px 0 inset;
  color: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td:hover,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box > div > div:hover {
  color: #000 !important;
  background: #007fff !important;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
  color: #666;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright {
  color: #333 !important;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a {
  color: #111 !important;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a:hover {
  color: #555 !important;
}
.xdsoft_dark .xdsoft_time_box {
  border: 1px solid #333;
}
.xdsoft_dark .xdsoft_scrollbar > .xdsoft_scroller {
  background: #333 !important;
}
.xdsoft_datetimepicker .xdsoft_save_selected {
  display: block;
  border: 1px solid #dddddd !important;
  margin-top: 5px;
  width: 100%;
  color: #454551;
  font-size: 13px;
}
.xdsoft_datetimepicker .blue-gradient-button {
  font-family: \"museo-sans\", \"Book Antiqua\", sans-serif;
  font-size: 12px;
  font-weight: 300;
  color: #82878c;
  height: 28px;
  position: relative;
  padding: 4px 17px 4px 33px;
  border: 1px solid #d7d8da;
  background: -moz-linear-gradient(top, #fff 0%, #f4f8fa 73%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(73%, #f4f8fa));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #fff 0%, #f4f8fa 73%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #fff 0%, #f4f8fa 73%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #fff 0%, #f4f8fa 73%);
  /* IE10+ */
  background: linear-gradient(to bottom, #fff 0%, #f4f8fa 73%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff', endColorstr='#f4f8fa', GradientType=0);
  /* IE6-9 */
}
.xdsoft_datetimepicker .blue-gradient-button:hover,
.xdsoft_datetimepicker .blue-gradient-button:focus,
.xdsoft_datetimepicker .blue-gradient-button:hover span,
.xdsoft_datetimepicker .blue-gradient-button:focus span {
  color: #454551;
  background: -moz-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f4f8fa), color-stop(73%, #FFF));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* IE10+ */
  background: linear-gradient(to bottom, #f4f8fa 0%, #FFF 73%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4f8fa', endColorstr='#FFF', GradientType=0);
  /* IE6-9 */
}
/*!
 * FullCalendar v2.2.0 Stylesheet
 * Docs & License: http://arshaw.com/fullcalendar/
 * (c) 2013 Adam Shaw
 */
.fc {
  direction: ltr;
  text-align: left;
}
.fc-rtl {
  text-align: right;
}
body .fc {
  /* extra precedence to overcome jqui */
  font-size: 1em;
}
/* Colors
--------------------------------------------------------------------------------------------------*/
.fc-unthemed th,
.fc-unthemed td,
.fc-unthemed hr,
.fc-unthemed thead,
.fc-unthemed tbody,
.fc-unthemed .fc-row,
.fc-unthemed .fc-popover {
  border-color: #ddd;
}
.fc-unthemed .fc-popover {
  background-color: #fff;
}
.fc-unthemed hr,
.fc-unthemed .fc-popover .fc-header {
  background: #eee;
}
.fc-unthemed .fc-popover .fc-header .fc-close {
  color: #666;
}
.fc-unthemed .fc-today {
  background: #fcf8e3;
}
.fc-highlight {
  /* when user is selecting cells */
  background: #bce8f1;
  opacity: 0.3;
  filter: alpha(opacity=30);
  /* for IE */
}
.fc-bgevent {
  /* default look for background events */
  background: #8fdf82;
  opacity: 0.3;
  filter: alpha(opacity=30);
  /* for IE */
}
.fc-nonbusiness {
  /* default look for non-business-hours areas */
  /* will inherit .fc-bgevent's styles */
  background: #ccc;
}
/* Icons (inline elements with styled text that mock arrow icons)
--------------------------------------------------------------------------------------------------*/
.fc-icon {
  display: inline-block;
  font-size: 2em;
  line-height: 0.5em;
  height: 0.5em;
  /* will make the total height 1em */
  font-family: \"Courier New\", Courier, monospace;
}
.fc-icon-left-single-arrow:after {
  content: \"\\02039\";
  font-weight: bold;
}
.fc-icon-right-single-arrow:after {
  content: \"\\0203A\";
  font-weight: bold;
}
.fc-icon-left-double-arrow:after {
  content: \"\\000AB\";
}
.fc-icon-right-double-arrow:after {
  content: \"\\000BB\";
}
.fc-icon-x:after {
  content: \"\\000D7\";
}
/* Buttons (styled <button> tags, normalized to work cross-browser)
--------------------------------------------------------------------------------------------------*/
.fc button {
  /* force height to include the border and padding */
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  /* dimensions */
  margin: 0;
  height: 2.1em;
  padding: 0 0.6em;
  /* text & cursor */
  font-size: 1em;
  /* normalize */
  white-space: nowrap;
  cursor: pointer;
}
/* Firefox has an annoying inner border */
.fc button::-moz-focus-inner {
  margin: 0;
  padding: 0;
}
.fc-state-default {
  /* non-theme */
  border: 1px solid;
}
.fc-state-default.fc-corner-left {
  /* non-theme */
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.fc-state-default.fc-corner-right {
  /* non-theme */
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
/* icons in buttons */
.fc button .fc-icon {
  /* non-theme */
  position: relative;
  top: 0.05em;
  /* seems to be a good adjustment across browsers */
  margin: 0 0.1em;
}
/*
  button states
  borrowed from twitter bootstrap (http://twitter.github.com/bootstrap/)
*/
.fc-state-default {
  background-color: #f5f5f5;
  background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
  background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
  background-repeat: repeat-x;
  border-color: #e6e6e6 #e6e6e6 #bfbfbf;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  color: #333;
  text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}
.fc-state-hover,
.fc-state-down,
.fc-state-active,
.fc-state-disabled {
  color: #333333;
  background-color: #e6e6e6;
}
.fc-state-hover {
  color: #333333;
  text-decoration: none;
  background-position: 0 -15px;
  -webkit-transition: background-position 0.1s linear;
  -moz-transition: background-position 0.1s linear;
  -o-transition: background-position 0.1s linear;
  transition: background-position 0.1s linear;
}
.fc-state-down,
.fc-state-active {
  background-color: #cccccc;
  background-image: none;
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}
.fc-state-disabled {
  cursor: default;
  background-image: none;
  opacity: 0.65;
  filter: alpha(opacity=65);
  box-shadow: none;
}
/* Buttons Groups
--------------------------------------------------------------------------------------------------*/
.fc-button-group {
  display: inline-block;
}
/*
every button that is not first in a button group should scootch over one pixel and cover the
previous button's border...
*/
.fc .fc-button-group > * {
  /* extra precedence b/c buttons have margin set to zero */
  float: left;
  margin: 0 0 0 -1px;
}
.fc .fc-button-group > :first-child {
  /* same */
  margin-left: 0;
}
/* Popover
--------------------------------------------------------------------------------------------------*/
.fc-popover {
  position: absolute;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
}
.fc-popover .fc-header {
  padding: 2px 4px;
}
.fc-popover .fc-header .fc-title {
  margin: 0 2px;
}
.fc-popover .fc-header .fc-close {
  cursor: pointer;
}
.fc-ltr .fc-popover .fc-header .fc-title,
.fc-rtl .fc-popover .fc-header .fc-close {
  float: left;
}
.fc-rtl .fc-popover .fc-header .fc-title,
.fc-ltr .fc-popover .fc-header .fc-close {
  float: right;
}
/* unthemed */
.fc-unthemed .fc-popover {
  border-width: 1px;
  border-style: solid;
}
.fc-unthemed .fc-popover .fc-header .fc-close {
  font-size: 25px;
  margin-top: 4px;
}
/* jqui themed */
.fc-popover > .ui-widget-header + .ui-widget-content {
  border-top: 0;
  /* where they meet, let the header have the border */
}
/* Misc Reusable Components
--------------------------------------------------------------------------------------------------*/
.fc hr {
  height: 0;
  margin: 0;
  padding: 0 0 2px;
  /* height is unreliable across browsers, so use padding */
  border-style: solid;
  border-width: 1px 0;
}
.fc-clear {
  clear: both;
}
.fc-bg,
.fc-bgevent-skeleton,
.fc-highlight-skeleton,
.fc-helper-skeleton {
  /* these element should always cling to top-left/right corners */
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}
.fc-bg {
  bottom: 0;
  /* strech bg to bottom edge */
}
.fc-bg table {
  height: 100%;
  /* strech bg to bottom edge */
}
/* Tables
--------------------------------------------------------------------------------------------------*/
.fc table {
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
  border-spacing: 0;
  font-size: 1em;
  /* normalize cross-browser */
}
.fc th {
  text-align: center;
}
.fc th,
.fc td {
  border-style: solid;
  border-width: 1px;
  padding: 0;
  vertical-align: top;
}
.fc td.fc-today {
  border-style: double;
  /* overcome neighboring borders */
}
/* Fake Table Rows
--------------------------------------------------------------------------------------------------*/
.fc .fc-row {
  /* extra precedence to overcome themes w/ .ui-widget-content forcing a 1px border */
  /* no visible border by default. but make available if need be (scrollbar width compensation) */
  border-style: solid;
  border-width: 0;
}
.fc-row table {
  /* don't put left/right border on anything within a fake row.
     the outer tbody will worry about this */
  border-left: 0 hidden transparent;
  border-right: 0 hidden transparent;
  /* no bottom borders on rows */
  border-bottom: 0 hidden transparent;
}
.fc-row:first-child table {
  border-top: 0 hidden transparent;
  /* no top border on first row */
}
/* Day Row (used within the header and the DayGrid)
--------------------------------------------------------------------------------------------------*/
.fc-row {
  position: relative;
}
.fc-row .fc-bg {
  z-index: 1;
}
/* highlighting cells & background event skeleton */
.fc-row .fc-bgevent-skeleton,
.fc-row .fc-highlight-skeleton {
  bottom: 0;
  /* stretch skeleton to bottom of row */
}
.fc-row .fc-bgevent-skeleton table,
.fc-row .fc-highlight-skeleton table {
  height: 100%;
  /* stretch skeleton to bottom of row */
}
.fc-row .fc-highlight-skeleton td,
.fc-row .fc-bgevent-skeleton td {
  border-color: transparent;
}
.fc-row .fc-bgevent-skeleton {
  z-index: 2;
}
.fc-row .fc-highlight-skeleton {
  z-index: 3;
}
/*
row content (which contains day/week numbers and events) as well as \"helper\" (which contains
temporary rendered events).
*/
.fc-row .fc-content-skeleton {
  position: relative;
  z-index: 4;
  padding-bottom: 2px;
  /* matches the space above the events */
}
.fc-row .fc-helper-skeleton {
  z-index: 5;
}
.fc-row .fc-content-skeleton td,
.fc-row .fc-helper-skeleton td {
  /* see-through to the background below */
  background: none;
  /* in case <td>s are globally styled */
  border-color: transparent;
  /* don't put a border between events and/or the day number */
  border-bottom: 0;
}
.fc-row .fc-content-skeleton tbody td,
.fc-row .fc-helper-skeleton tbody td {
  /* don't put a border between event cells */
  border-top: 0;
}
/* Scrolling Container
--------------------------------------------------------------------------------------------------*/
.fc-scroller {
  /* this class goes on elements for guaranteed vertical scrollbars */
  overflow-y: scroll;
  overflow-x: hidden;
}
.fc-scroller > * {
  /* we expect an immediate inner element */
  position: relative;
  /* re-scope all positions */
  width: 100%;
  /* hack to force re-sizing this inner element when scrollbars appear/disappear */
  overflow: hidden;
  /* don't let negative margins or absolute positioning create further scroll */
}
/* Global Event Styles
--------------------------------------------------------------------------------------------------*/
.fc-event {
  position: relative;
  /* for resize handle and other inner positioning */
  display: block;
  /* make the <a> tag block */
  font-size: 0.85em;
  line-height: 1.3;
  border-radius: 3px;
  border: 1px solid #3a87ad;
  /* default BORDER color */
  background-color: #3a87ad;
  /* default BACKGROUND color */
  font-weight: normal;
  /* undo jqui's ui-widget-header bold */
}
/* overpower some of bootstrap's and jqui's styles on <a> tags */
.fc-event,
.fc-event:hover,
.ui-widget .fc-event {
  color: #fff;
  /* default TEXT color */
  text-decoration: none;
  /* if <a> has an href */
}
.fc-event[href],
.fc-event.fc-draggable {
  cursor: pointer;
  /* give events with links and draggable events a hand mouse pointer */
}
.fc-not-allowed,
.fc-not-allowed .fc-event {
  /* to override an event's custom cursor */
  cursor: not-allowed;
}
/* DayGrid events
----------------------------------------------------------------------------------------------------
We use the full \"fc-day-grid-event\" class instead of using descendants because the event won't
be a descendant of the grid when it is being dragged.
*/
.fc-day-grid-event {
  margin: 1px 2px 0;
  /* spacing between events and edges */
  padding: 0 1px;
}
/* events that are continuing to/from another week. kill rounded corners and butt up against edge */
.fc-ltr .fc-day-grid-event.fc-not-start,
.fc-rtl .fc-day-grid-event.fc-not-end {
  margin-left: 0;
  border-left-width: 0;
  padding-left: 1px;
  /* replace the border with padding */
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.fc-ltr .fc-day-grid-event.fc-not-end,
.fc-rtl .fc-day-grid-event.fc-not-start {
  margin-right: 0;
  border-right-width: 0;
  padding-right: 1px;
  /* replace the border with padding */
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.fc-day-grid-event > .fc-content {
  /* force events to be one-line tall */
  white-space: nowrap;
  overflow: hidden;
}
.fc-day-grid-event .fc-time {
  font-weight: bold;
}
/* resize handle (outside of fc-content, so can go outside of bounds) */
.fc-day-grid-event .fc-resizer {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 7px;
}
.fc-ltr .fc-day-grid-event .fc-resizer {
  right: -3px;
  cursor: e-resize;
}
.fc-rtl .fc-day-grid-event .fc-resizer {
  left: -3px;
  cursor: w-resize;
}
/* Event Limiting
--------------------------------------------------------------------------------------------------*/
/* \"more\" link that represents hidden events */
a.fc-more {
  margin: 1px 3px;
  font-size: 0.85em;
  cursor: pointer;
  text-decoration: none;
}
a.fc-more:hover {
  text-decoration: underline;
}
.fc-limited {
  /* rows and cells that are hidden because of a \"more\" link */
  display: none;
}
/* popover that appears when \"more\" link is clicked */
.fc-day-grid .fc-row {
  z-index: 1;
  /* make the \"more\" popover one higher than this */
}
.fc-more-popover {
  z-index: 2;
  width: 220px;
}
.fc-more-popover .fc-event-container {
  padding: 10px;
}
/* Toolbar
--------------------------------------------------------------------------------------------------*/
.fc-toolbar {
  text-align: center;
  margin-bottom: 1em;
}
.fc-toolbar .fc-left {
  float: left;
}
.fc-toolbar .fc-right {
  float: right;
}
.fc-toolbar .fc-center {
  display: inline-block;
}
/* the things within each left/right/center section */
.fc .fc-toolbar > * > * {
  /* extra precedence to override button border margins */
  float: left;
  margin-left: 0.75em;
}
/* the first thing within each left/center/right section */
.fc .fc-toolbar > * > :first-child {
  /* extra precedence to override button border margins */
  margin-left: 0;
}
/* title text */
.fc-toolbar h2 {
  margin: 0;
}
/* button layering (for border precedence) */
.fc-toolbar button {
  position: relative;
}
.fc-toolbar .fc-state-hover,
.fc-toolbar .ui-state-hover {
  z-index: 2;
}
.fc-toolbar .fc-state-down {
  z-index: 3;
}
.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active {
  z-index: 4;
}
.fc-toolbar button:focus {
  z-index: 5;
}
/* View Structure
--------------------------------------------------------------------------------------------------*/
/* undo twitter bootstrap's box-sizing rules. normalizes positioning techniques */
/* don't do this for the toolbar because we'll want bootstrap to style those buttons as some pt */
.fc-view-container *,
.fc-view-container *:before,
.fc-view-container *:after {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.fc-view,
.fc-view > table {
  /* so dragged elements can be above the view's main element */
  position: relative;
  z-index: 1;
}
/* BasicView
--------------------------------------------------------------------------------------------------*/
/* day row structure */
.fc-basicWeek-view .fc-content-skeleton,
.fc-basicDay-view .fc-content-skeleton {
  /* we are sure there are no day numbers in these views, so... */
  padding-top: 1px;
  /* add a pixel to make sure there are 2px padding above events */
  padding-bottom: 1em;
  /* ensure a space at bottom of cell for user selecting/clicking */
}
.fc-basic-view tbody .fc-row {
  min-height: 4em;
  /* ensure that all rows are at least this tall */
}
/* a \"rigid\" row will take up a constant amount of height because content-skeleton is absolute */
.fc-row.fc-rigid {
  overflow: hidden;
}
.fc-row.fc-rigid .fc-content-skeleton {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}
/* week and day number styling */
.fc-basic-view .fc-week-number,
.fc-basic-view .fc-day-number {
  padding: 0 2px;
}
.fc-basic-view td.fc-week-number span,
.fc-basic-view td.fc-day-number {
  padding-top: 2px;
  padding-bottom: 2px;
}
.fc-basic-view .fc-week-number {
  text-align: center;
}
.fc-basic-view .fc-week-number span {
  /* work around the way we do column resizing and ensure a minimum width */
  display: inline-block;
  min-width: 1.25em;
}
.fc-ltr .fc-basic-view .fc-day-number {
  text-align: right;
}
.fc-rtl .fc-basic-view .fc-day-number {
  text-align: left;
}
.fc-day-number.fc-other-month {
  opacity: 0.3;
  filter: alpha(opacity=30);
  /* for IE */
  /* opacity with small font can sometimes look too faded
     might want to set the 'color' property instead
     making day-numbers bold also fixes the problem */
}
/* AgendaView all-day area
--------------------------------------------------------------------------------------------------*/
.fc-agenda-view .fc-day-grid {
  position: relative;
  z-index: 2;
  /* so the \"more..\" popover will be over the time grid */
}
.fc-agenda-view .fc-day-grid .fc-row {
  min-height: 3em;
  /* all-day section will never get shorter than this */
}
.fc-agenda-view .fc-day-grid .fc-row .fc-content-skeleton {
  padding-top: 1px;
  /* add a pixel to make sure there are 2px padding above events */
  padding-bottom: 1em;
  /* give space underneath events for clicking/selecting days */
}
/* TimeGrid axis running down the side (for both the all-day area and the slot area)
--------------------------------------------------------------------------------------------------*/
.fc .fc-axis {
  /* .fc to overcome default cell styles */
  vertical-align: middle;
  padding: 0 4px;
  white-space: nowrap;
}
.fc-ltr .fc-axis {
  text-align: right;
}
.fc-rtl .fc-axis {
  text-align: left;
}
.ui-widget td.fc-axis {
  font-weight: normal;
  /* overcome jqui theme making it bold */
}
/* TimeGrid Structure
--------------------------------------------------------------------------------------------------*/
.fc-time-grid-container,
.fc-time-grid {
  /* so slats/bg/content/etc positions get scoped within here */
  position: relative;
  z-index: 1;
}
.fc-time-grid {
  min-height: 100%;
  /* so if height setting is 'auto', .fc-bg stretches to fill height */
}
.fc-time-grid table {
  /* don't put outer borders on slats/bg/content/etc */
  border: 0 hidden transparent;
}
.fc-time-grid > .fc-bg {
  z-index: 1;
}
.fc-time-grid .fc-slats,
.fc-time-grid > hr {
  /* the <hr> AgendaView injects when grid is shorter than scroller */
  position: relative;
  z-index: 2;
}
.fc-time-grid .fc-bgevent-skeleton,
.fc-time-grid .fc-content-skeleton {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}
.fc-time-grid .fc-bgevent-skeleton {
  z-index: 3;
}
.fc-time-grid .fc-highlight-skeleton {
  z-index: 4;
}
.fc-time-grid .fc-content-skeleton {
  z-index: 5;
}
.fc-time-grid .fc-helper-skeleton {
  z-index: 6;
}
/* TimeGrid Slats (lines that run horizontally)
--------------------------------------------------------------------------------------------------*/
.fc-slats td {
  height: 1.5em;
  border-bottom: 0;
  /* each cell is responsible for its top border */
}
.fc-slats .fc-minor td {
  border-top-style: dotted;
}
.fc-slats .ui-widget-content {
  /* for jqui theme */
  background: none;
  /* see through to fc-bg */
}
/* TimeGrid Highlighting Slots
--------------------------------------------------------------------------------------------------*/
.fc-time-grid .fc-highlight-container {
  /* a div within a cell within the fc-highlight-skeleton */
  position: relative;
  /* scopes the left/right of the fc-highlight to be in the column */
}
.fc-time-grid .fc-highlight {
  position: absolute;
  left: 0;
  right: 0;
  /* top and bottom will be in by JS */
}
/* TimeGrid Event Containment
--------------------------------------------------------------------------------------------------*/
.fc-time-grid .fc-event-container,
.fc-time-grid .fc-bgevent-container {
  /* a div within a cell within the fc-bgevent-skeleton */
  position: relative;
}
.fc-ltr .fc-time-grid .fc-event-container {
  /* space on the sides of events for LTR (default) */
  margin: 0 2.5% 0 2px;
}
.fc-rtl .fc-time-grid .fc-event-container {
  /* space on the sides of events for RTL */
  margin: 0 2px 0 2.5%;
}
.fc-time-grid .fc-event,
.fc-time-grid .fc-bgevent {
  position: absolute;
  z-index: 1;
  /* scope inner z-index's */
}
.fc-time-grid .fc-bgevent {
  /* background events always span full width */
  left: 0;
  right: 0;
}
/* TimeGrid Event Styling
----------------------------------------------------------------------------------------------------
We use the full \"fc-time-grid-event\" class instead of using descendants because the event won't
be a descendant of the grid when it is being dragged.
*/
.fc-time-grid-event.fc-not-start {
  /* events that are continuing from another day */
  /* replace space made by the top border with padding */
  border-top-width: 0;
  padding-top: 1px;
  /* remove top rounded corners */
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.fc-time-grid-event.fc-not-end {
  /* replace space made by the top border with padding */
  border-bottom-width: 0;
  padding-bottom: 1px;
  /* remove bottom rounded corners */
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.fc-time-grid-event {
  overflow: hidden;
  /* don't let the bg flow over rounded corners */
}
.fc-time-grid-event > .fc-content {
  /* contains the time and title, but no bg and resizer */
  position: relative;
  z-index: 2;
  /* above the bg */
}
.fc-time-grid-event .fc-time,
.fc-time-grid-event .fc-title {
  padding: 0 1px;
}
.fc-time-grid-event .fc-time {
  font-size: 0.85em;
  white-space: nowrap;
}
.fc-time-grid-event .fc-bg {
  z-index: 1;
  background: #fff;
  opacity: 0.25;
  filter: alpha(opacity=25);
  /* for IE */
}
/* short mode, where time and title are on the same line */
.fc-time-grid-event.fc-short .fc-content {
  /* don't wrap to second line (now that contents will be inline) */
  white-space: nowrap;
}
.fc-time-grid-event.fc-short .fc-time,
.fc-time-grid-event.fc-short .fc-title {
  /* put the time and title on the same line */
  display: inline-block;
  vertical-align: top;
}
.fc-time-grid-event.fc-short .fc-time span {
  display: none;
  /* don't display the full time text... */
}
.fc-time-grid-event.fc-short .fc-time:before {
  content: attr(data-start);
  /* ...instead, display only the start time */
}
.fc-time-grid-event.fc-short .fc-time:after {
  content: \"\\000A0-\\000A0\";
  /* seperate with a dash, wrapped in nbsp's */
}
.fc-time-grid-event.fc-short .fc-title {
  font-size: 0.85em;
  /* make the title text the same size as the time */
  padding: 0;
  /* undo padding from above */
}
/* resizer */
.fc-time-grid-event .fc-resizer {
  position: absolute;
  z-index: 3;
  /* above content */
  left: 0;
  right: 0;
  bottom: 0;
  height: 8px;
  overflow: hidden;
  line-height: 8px;
  font-size: 11px;
  font-family: monospace;
  text-align: center;
  cursor: s-resize;
}
.fc-time-grid-event .fc-resizer:after {
  content: \"=\";
}
.jvectormap-container {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
}
.jvectormap-tip {
  z-index: 9999;
  position: absolute;
  display: none;
  border: solid 1px #CDCDCD;
  border-radius: 3px;
  background: #292929;
  color: white;
  font-family: sans-serif, Verdana;
  font-size: smaller;
  padding: 3px;
}
.jvectormap-zoomin,
.jvectormap-zoomout,
.jvectormap-goback {
  position: absolute;
  left: 10px;
  border-radius: 3px;
  background: #A0ACB8;
  padding: 3px;
  color: white;
  cursor: pointer;
  line-height: 10px;
  text-align: center;
}
.jvectormap-zoomin,
.jvectormap-zoomout {
  width: 15px;
  height: 16px;
}
.jvectormap-zoomin {
  top: 10px;
}
.jvectormap-zoomout {
  top: 30px;
}
.jvectormap-goback {
  bottom: 10px;
  z-index: 1000;
  padding: 6px;
}
.jvectormap-spinner {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background: center no-repeat url(data:image/gif;base64,R0lGODlhIAAgAPMAAP///wAAAMbGxoSEhLa2tpqamjY2NlZWVtjY2OTk5Ly8vB4eHgQEBAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAIAAgAAAE5xDISWlhperN52JLhSSdRgwVo1ICQZRUsiwHpTJT4iowNS8vyW2icCF6k8HMMBkCEDskxTBDAZwuAkkqIfxIQyhBQBFvAQSDITM5VDW6XNE4KagNh6Bgwe60smQUB3d4Rz1ZBApnFASDd0hihh12BkE9kjAJVlycXIg7CQIFA6SlnJ87paqbSKiKoqusnbMdmDC2tXQlkUhziYtyWTxIfy6BE8WJt5YJvpJivxNaGmLHT0VnOgSYf0dZXS7APdpB309RnHOG5gDqXGLDaC457D1zZ/V/nmOM82XiHRLYKhKP1oZmADdEAAAh+QQJCgAAACwAAAAAIAAgAAAE6hDISWlZpOrNp1lGNRSdRpDUolIGw5RUYhhHukqFu8DsrEyqnWThGvAmhVlteBvojpTDDBUEIFwMFBRAmBkSgOrBFZogCASwBDEY/CZSg7GSE0gSCjQBMVG023xWBhklAnoEdhQEfyNqMIcKjhRsjEdnezB+A4k8gTwJhFuiW4dokXiloUepBAp5qaKpp6+Ho7aWW54wl7obvEe0kRuoplCGepwSx2jJvqHEmGt6whJpGpfJCHmOoNHKaHx61WiSR92E4lbFoq+B6QDtuetcaBPnW6+O7wDHpIiK9SaVK5GgV543tzjgGcghAgAh+QQJCgAAACwAAAAAIAAgAAAE7hDISSkxpOrN5zFHNWRdhSiVoVLHspRUMoyUakyEe8PTPCATW9A14E0UvuAKMNAZKYUZCiBMuBakSQKG8G2FzUWox2AUtAQFcBKlVQoLgQReZhQlCIJesQXI5B0CBnUMOxMCenoCfTCEWBsJColTMANldx15BGs8B5wlCZ9Po6OJkwmRpnqkqnuSrayqfKmqpLajoiW5HJq7FL1Gr2mMMcKUMIiJgIemy7xZtJsTmsM4xHiKv5KMCXqfyUCJEonXPN2rAOIAmsfB3uPoAK++G+w48edZPK+M6hLJpQg484enXIdQFSS1u6UhksENEQAAIfkECQoAAAAsAAAAACAAIAAABOcQyEmpGKLqzWcZRVUQnZYg1aBSh2GUVEIQ2aQOE+G+cD4ntpWkZQj1JIiZIogDFFyHI0UxQwFugMSOFIPJftfVAEoZLBbcLEFhlQiqGp1Vd140AUklUN3eCA51C1EWMzMCezCBBmkxVIVHBWd3HHl9JQOIJSdSnJ0TDKChCwUJjoWMPaGqDKannasMo6WnM562R5YluZRwur0wpgqZE7NKUm+FNRPIhjBJxKZteWuIBMN4zRMIVIhffcgojwCF117i4nlLnY5ztRLsnOk+aV+oJY7V7m76PdkS4trKcdg0Zc0tTcKkRAAAIfkECQoAAAAsAAAAACAAIAAABO4QyEkpKqjqzScpRaVkXZWQEximw1BSCUEIlDohrft6cpKCk5xid5MNJTaAIkekKGQkWyKHkvhKsR7ARmitkAYDYRIbUQRQjWBwJRzChi9CRlBcY1UN4g0/VNB0AlcvcAYHRyZPdEQFYV8ccwR5HWxEJ02YmRMLnJ1xCYp0Y5idpQuhopmmC2KgojKasUQDk5BNAwwMOh2RtRq5uQuPZKGIJQIGwAwGf6I0JXMpC8C7kXWDBINFMxS4DKMAWVWAGYsAdNqW5uaRxkSKJOZKaU3tPOBZ4DuK2LATgJhkPJMgTwKCdFjyPHEnKxFCDhEAACH5BAkKAAAALAAAAAAgACAAAATzEMhJaVKp6s2nIkolIJ2WkBShpkVRWqqQrhLSEu9MZJKK9y1ZrqYK9WiClmvoUaF8gIQSNeF1Er4MNFn4SRSDARWroAIETg1iVwuHjYB1kYc1mwruwXKC9gmsJXliGxc+XiUCby9ydh1sOSdMkpMTBpaXBzsfhoc5l58Gm5yToAaZhaOUqjkDgCWNHAULCwOLaTmzswadEqggQwgHuQsHIoZCHQMMQgQGubVEcxOPFAcMDAYUA85eWARmfSRQCdcMe0zeP1AAygwLlJtPNAAL19DARdPzBOWSm1brJBi45soRAWQAAkrQIykShQ9wVhHCwCQCACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiRMDjI0Fd30/iI2UA5GSS5UDj2l6NoqgOgN4gksEBgYFf0FDqKgHnyZ9OX8HrgYHdHpcHQULXAS2qKpENRg7eAMLC7kTBaixUYFkKAzWAAnLC7FLVxLWDBLKCwaKTULgEwbLA4hJtOkSBNqITT3xEgfLpBtzE/jiuL04RGEBgwWhShRgQExHBAAh+QQJCgAAACwAAAAAIAAgAAAE7xDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfZiCqGk5dTESJeaOAlClzsJsqwiJwiqnFrb2nS9kmIcgEsjQydLiIlHehhpejaIjzh9eomSjZR+ipslWIRLAgMDOR2DOqKogTB9pCUJBagDBXR6XB0EBkIIsaRsGGMMAxoDBgYHTKJiUYEGDAzHC9EACcUGkIgFzgwZ0QsSBcXHiQvOwgDdEwfFs0sDzt4S6BK4xYjkDOzn0unFeBzOBijIm1Dgmg5YFQwsCMjp1oJ8LyIAACH5BAkKAAAALAAAAAAgACAAAATwEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GGl6NoiPOH16iZKNlH6KmyWFOggHhEEvAwwMA0N9GBsEC6amhnVcEwavDAazGwIDaH1ipaYLBUTCGgQDA8NdHz0FpqgTBwsLqAbWAAnIA4FWKdMLGdYGEgraigbT0OITBcg5QwPT4xLrROZL6AuQAPUS7bxLpoWidY0JtxLHKhwwMJBTHgPKdEQAACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GAULDJCRiXo1CpGXDJOUjY+Yip9DhToJA4RBLwMLCwVDfRgbBAaqqoZ1XBMHswsHtxtFaH1iqaoGNgAIxRpbFAgfPQSqpbgGBqUD1wBXeCYp1AYZ19JJOYgH1KwA4UBvQwXUBxPqVD9L3sbp2BNk2xvvFPJd+MFCN6HAAIKgNggY0KtEBAAh+QQJCgAAACwAAAAAIAAgAAAE6BDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfYIDMaAFdTESJeaEDAIMxYFqrOUaNW4E4ObYcCXaiBVEgULe0NJaxxtYksjh2NLkZISgDgJhHthkpU4mW6blRiYmZOlh4JWkDqILwUGBnE6TYEbCgevr0N1gH4At7gHiRpFaLNrrq8HNgAJA70AWxQIH1+vsYMDAzZQPC9VCNkDWUhGkuE5PxJNwiUK4UfLzOlD4WvzAHaoG9nxPi5d+jYUqfAhhykOFwJWiAAAIfkECQoAAAAsAAAAACAAIAAABPAQyElpUqnqzaciSoVkXVUMFaFSwlpOCcMYlErAavhOMnNLNo8KsZsMZItJEIDIFSkLGQoQTNhIsFehRww2CQLKF0tYGKYSg+ygsZIuNqJksKgbfgIGepNo2cIUB3V1B3IvNiBYNQaDSTtfhhx0CwVPI0UJe0+bm4g5VgcGoqOcnjmjqDSdnhgEoamcsZuXO1aWQy8KAwOAuTYYGwi7w5h+Kr0SJ8MFihpNbx+4Erq7BYBuzsdiH1jCAzoSfl0rVirNbRXlBBlLX+BP0XJLAPGzTkAuAOqb0WT5AH7OcdCm5B8TgRwSRKIHQtaLCwg1RAAAOwAAAAAAAAAAAA==);
}
.jvectormap-legend-title {
  font-weight: bold;
  font-size: 14px;
  text-align: center;
}
.jvectormap-legend-cnt {
  position: absolute;
}
.jvectormap-legend-cnt-h {
  bottom: 0;
  right: 0;
}
.jvectormap-legend-cnt-v {
  top: 0;
  right: 0;
}
.jvectormap-legend {
  background: black;
  color: white;
  border-radius: 3px;
}
.jvectormap-legend-cnt-h .jvectormap-legend {
  float: left;
  margin: 0 10px 10px 0;
  padding: 3px 3px 1px 3px;
}
.jvectormap-legend-cnt-h .jvectormap-legend .jvectormap-legend-tick {
  float: left;
}
.jvectormap-legend-cnt-v .jvectormap-legend {
  margin: 10px 10px 0 0;
  padding: 3px;
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick {
  width: 40px;
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick-sample {
  height: 15px;
}
.jvectormap-legend-cnt-v .jvectormap-legend-tick-sample {
  height: 20px;
  width: 20px;
  display: inline-block;
  vertical-align: middle;
}
.jvectormap-legend-tick-text {
  font-size: 12px;
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick-text {
  text-align: center;
}
.jvectormap-legend-cnt-v .jvectormap-legend-tick-text {
  display: inline-block;
  vertical-align: middle;
  line-height: 20px;
  padding-left: 3px;
}
.atwho-view {
  position: absolute;
  top: 0;
  left: 0;
  display: none;
  margin-top: 18px;
  background: white;
  color: black;
  border: 1px solid #DDD;
  border-radius: 3px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  min-width: 120px;
  z-index: 11110 !important;
}
.atwho-view .atwho-header {
  padding: 5px;
  margin: 5px;
  cursor: pointer;
  border-bottom: solid 1px #eaeff1;
  color: #6f8092;
  font-size: 11px;
  font-weight: bold;
}
.atwho-view .atwho-header .small {
  color: #6f8092;
  float: right;
  padding-top: 2px;
  margin-right: -5px;
  font-size: 12px;
  font-weight: normal;
}
.atwho-view .atwho-header:hover {
  cursor: default;
}
.atwho-view .cur {
  background: #3366FF;
  color: white;
}
.atwho-view .cur small {
  color: white;
}
.atwho-view strong {
  color: #3366FF;
}
.atwho-view .cur strong {
  color: white;
  font: bold;
}
.atwho-view ul {
  /* width: 100px; */
  list-style: none;
  padding: 0;
  margin: auto;
  max-height: 200px;
  overflow-y: auto;
}
.atwho-view ul li {
  display: block;
  padding: 5px 10px;
  border-bottom: 1px solid #DDD;
  cursor: pointer;
}
.atwho-view small {
  font-size: smaller;
  color: #777;
  font-weight: normal;
}
/* BASICS */
.CodeMirror {
  /* Set height, width, borders, and global font properties here */
  font-family: monospace;
  height: 300px;
  color: black;
}
/* PADDING */
.CodeMirror-lines {
  padding: 4px 0;
  /* Vertical padding around content */
}
.CodeMirror pre {
  padding: 0 4px;
  /* Horizontal padding of content */
}
.CodeMirror-scrollbar-filler,
.CodeMirror-gutter-filler {
  background-color: white;
  /* The little square between H and V scrollbars */
}
/* GUTTER */
.CodeMirror-gutters {
  border-right: 1px solid #ddd;
  background-color: #f7f7f7;
  white-space: nowrap;
}
.CodeMirror-linenumber {
  padding: 0 3px 0 5px;
  min-width: 20px;
  text-align: right;
  color: #999;
  white-space: nowrap;
}
.CodeMirror-guttermarker {
  color: black;
}
.CodeMirror-guttermarker-subtle {
  color: #999;
}
/* CURSOR */
.CodeMirror-cursor {
  border-left: 1px solid black;
  border-right: none;
  width: 0;
}
/* Shown when moving in bi-directional text */
.CodeMirror div.CodeMirror-secondarycursor {
  border-left: 1px solid silver;
}
.cm-fat-cursor .CodeMirror-cursor {
  width: auto;
  border: 0 !important;
  background: #7e7;
}
.cm-fat-cursor div.CodeMirror-cursors {
  z-index: 1;
}
.cm-animate-fat-cursor {
  width: auto;
  border: 0;
  -webkit-animation: blink 1.06s steps(1) infinite;
  -moz-animation: blink 1.06s steps(1) infinite;
  animation: blink 1.06s steps(1) infinite;
  background-color: #7e7;
}
@-moz-keyframes blink {
  50% {
    background-color: transparent;
  }
}
@-webkit-keyframes blink {
  50% {
    background-color: transparent;
  }
}
@keyframes blink {
  50% {
    background-color: transparent;
  }
}
/* Can style cursor different in overwrite (non-insert) mode */
.cm-tab {
  display: inline-block;
  text-decoration: inherit;
}
.CodeMirror-ruler {
  border-left: 1px solid #ccc;
  position: absolute;
}
/* DEFAULT THEME */
.cm-s-default .cm-header {
  color: blue;
}
.cm-s-default .cm-quote {
  color: #090;
}
.cm-negative {
  color: #d44;
}
.cm-positive {
  color: #292;
}
.cm-header,
.cm-strong {
  font-weight: bold;
}
.cm-em {
  font-style: italic;
}
.cm-link {
  text-decoration: underline;
}
.cm-strikethrough {
  text-decoration: line-through;
}
.cm-s-default .cm-keyword {
  color: #708;
}
.cm-s-default .cm-atom {
  color: #219;
}
.cm-s-default .cm-number {
  color: #164;
}
.cm-s-default .cm-def {
  color: #00f;
}
.cm-s-default .cm-variable-2 {
  color: #05a;
}
.cm-s-default .cm-variable-3 {
  color: #085;
}
.cm-s-default .cm-comment {
  color: #a50;
}
.cm-s-default .cm-string {
  color: #a11;
}
.cm-s-default .cm-string-2 {
  color: #f50;
}
.cm-s-default .cm-meta {
  color: #555;
}
.cm-s-default .cm-qualifier {
  color: #555;
}
.cm-s-default .cm-builtin {
  color: #30a;
}
.cm-s-default .cm-bracket {
  color: #997;
}
.cm-s-default .cm-tag {
  color: #170;
}
.cm-s-default .cm-attribute {
  color: #00c;
}
.cm-s-default .cm-hr {
  color: #999;
}
.cm-s-default .cm-link {
  color: #00c;
}
.cm-s-default .cm-error {
  color: #f00;
}
.cm-invalidchar {
  color: #f00;
}
.CodeMirror-composing {
  border-bottom: 2px solid;
}
/* Default styles for common addons */
div.CodeMirror span.CodeMirror-matchingbracket {
  color: #0f0;
}
div.CodeMirror span.CodeMirror-nonmatchingbracket {
  color: #f22;
}
.CodeMirror-matchingtag {
  background: rgba(255, 150, 0, 0.3);
}
.CodeMirror-activeline-background {
  background: #e8f2ff;
}
/* STOP */
/* The rest of this file contains styles related to the mechanics of
   the editor. You probably shouldn't touch them. */
.CodeMirror {
  position: relative;
  overflow: hidden;
  background: white;
}
.CodeMirror-scroll {
  overflow: scroll !important;
  /* Things will break if this is overridden */
  /* 30px is the magic margin used to hide the element's real scrollbars */
  /* See overflow: hidden in .CodeMirror */
  margin-bottom: -30px;
  margin-right: -30px;
  padding-bottom: 30px;
  height: 100%;
  outline: none;
  /* Prevent dragging from highlighting the element */
  position: relative;
}
.CodeMirror-sizer {
  position: relative;
  border-right: 30px solid transparent;
}
/* The fake, visible scrollbars. Used to force redraw during scrolling
   before actual scrolling happens, thus preventing shaking and
   flickering artifacts. */
.CodeMirror-vscrollbar,
.CodeMirror-hscrollbar,
.CodeMirror-scrollbar-filler,
.CodeMirror-gutter-filler {
  position: absolute;
  z-index: 6;
  display: none;
}
.CodeMirror-vscrollbar {
  right: 0;
  top: 0;
  overflow-x: hidden;
  overflow-y: scroll;
}
.CodeMirror-hscrollbar {
  bottom: 0;
  left: 0;
  overflow-y: hidden;
  overflow-x: scroll;
}
.CodeMirror-scrollbar-filler {
  right: 0;
  bottom: 0;
}
.CodeMirror-gutter-filler {
  left: 0;
  bottom: 0;
}
.CodeMirror-gutters {
  position: absolute;
  left: 0;
  top: 0;
  min-height: 100%;
  z-index: 3;
}
.CodeMirror-gutter {
  white-space: normal;
  height: 100%;
  display: inline-block;
  vertical-align: top;
  margin-bottom: -30px;
  /* Hack to make IE7 behave */
  *zoom: 1;
  *display: inline;
}
.CodeMirror-gutter-wrapper {
  position: absolute;
  z-index: 4;
  background: none !important;
  border: none !important;
}
.CodeMirror-gutter-background {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 4;
}
.CodeMirror-gutter-elt {
  position: absolute;
  cursor: default;
  z-index: 4;
}
.CodeMirror-gutter-wrapper {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}
.CodeMirror-lines {
  cursor: text;
  min-height: 1px;
  /* prevents collapsing before first draw */
}
.CodeMirror pre {
  /* Reset some styles that the rest of the page might have set */
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
  border-width: 0;
  background: transparent;
  font-family: inherit;
  font-size: inherit;
  margin: 0;
  white-space: pre;
  word-wrap: normal;
  line-height: inherit;
  color: inherit;
  z-index: 2;
  position: relative;
  overflow: visible;
  -webkit-tap-highlight-color: transparent;
  -webkit-font-variant-ligatures: none;
  font-variant-ligatures: none;
}
.CodeMirror-wrap pre {
  word-wrap: break-word;
  white-space: pre-wrap;
  word-break: normal;
}
.CodeMirror-linebackground {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 0;
}
.CodeMirror-linewidget {
  position: relative;
  z-index: 2;
  overflow: auto;
}
.CodeMirror-code {
  outline: none;
}
/* Force content-box sizing for the elements where we expect it */
.CodeMirror-scroll,
.CodeMirror-sizer,
.CodeMirror-gutter,
.CodeMirror-gutters,
.CodeMirror-linenumber {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.CodeMirror-measure {
  position: absolute;
  width: 100%;
  height: 0;
  overflow: hidden;
  visibility: hidden;
}
.CodeMirror-cursor {
  position: absolute;
}
.CodeMirror-measure pre {
  position: static;
}
div.CodeMirror-cursors {
  visibility: hidden;
  position: relative;
  z-index: 3;
}
div.CodeMirror-dragcursors {
  visibility: visible;
}
.CodeMirror-focused div.CodeMirror-cursors {
  visibility: visible;
}
.CodeMirror-selected {
  background: #d9d9d9;
}
.CodeMirror-focused .CodeMirror-selected {
  background: #d7d4f0;
}
.CodeMirror-crosshair {
  cursor: crosshair;
}
.CodeMirror-line::selection,
.CodeMirror-line > span::selection,
.CodeMirror-line > span > span::selection {
  background: #d7d4f0;
}
.CodeMirror-line::-moz-selection,
.CodeMirror-line > span::-moz-selection,
.CodeMirror-line > span > span::-moz-selection {
  background: #d7d4f0;
}
.cm-searching {
  background: #ffa;
  background: rgba(255, 255, 0, 0.4);
}
/* IE7 hack to prevent it from returning funny offsetTops on the spans */
.CodeMirror span {
  *vertical-align: text-bottom;
}
/* Used to force a border model for a node */
.cm-force-border {
  padding-right: 0.1px;
}
@media print {
  /* Hide the cursor when printing */
  .CodeMirror div.CodeMirror-cursors {
    visibility: hidden;
  }
}
/* See issue #2901 */
.cm-tab-wrap-hack:after {
  content: '';
}
/* Help users use markselection to safely style text background */
span.CodeMirror-selectedtext {
  background: none;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.container::after,
.container-fluid::after,
.row::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
:focus {
  outline: 0;
}
.fr-element,
.fr-element:focus {
  outline: 0px solid transparent;
}
.fr-box.fr-basic .fr-element {
  color: #000000;
  padding: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  overflow-x: auto;
  min-height: 40px;
}
.fr-element {
  background: transparent;
  position: relative;
  z-index: 2;
  -webkit-user-select: auto;
}
.fr-element a {
  user-select: auto;
  -o-user-select: auto;
  -moz-user-select: auto;
  -khtml-user-select: auto;
  -webkit-user-select: auto;
  -ms-user-select: auto;
}
.fr-element.fr-disabled {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-element [contenteditable=\"false\"] {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-element [contenteditable=\"true\"] {
  outline: 0px solid transparent;
}
.fr-box a.fr-floating-btn {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  border-radius: 100%;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  height: 32px;
  width: 32px;
  background: #ffffff;
  color: #1e88e5;
  -webkit-transition: background 0.2s ease 0s, color 0.2s ease 0s, transform 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s, color 0.2s ease 0s, transform 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s, color 0.2s ease 0s, transform 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s, color 0.2s ease 0s, transform 0.2s ease 0s;
  outline: none;
  left: 0;
  top: 0;
  line-height: 32px;
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  text-align: center;
  display: block;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border: none;
}
.fr-box a.fr-floating-btn svg {
  -webkit-transition: transform 0.2s ease 0s;
  -moz-transition: transform 0.2s ease 0s;
  -ms-transition: transform 0.2s ease 0s;
  -o-transition: transform 0.2s ease 0s;
  fill: #1e88e5;
}
.fr-box a.fr-floating-btn i {
  font-size: 14px;
  line-height: 32px;
}
.fr-box a.fr-floating-btn.fr-btn + .fr-btn {
  margin-left: 10px;
}
.fr-box a.fr-floating-btn:hover {
  background: #ebebeb;
  cursor: pointer;
}
.fr-box a.fr-floating-btn:hover svg {
  fill: #1e88e5;
}
.fr-box .fr-visible a.fr-floating-btn {
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
}
iframe.fr-iframe {
  width: 100%;
  border: none;
  position: relative;
  display: block;
  z-index: 2;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-wrapper {
  position: relative;
  z-index: 1;
}
.fr-wrapper::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-wrapper .fr-placeholder {
  position: absolute;
  font-size: 12px;
  color: #aaaaaa;
  z-index: 1;
  display: none;
  top: 0;
  left: 0;
  right: 0;
  overflow: hidden;
}
.fr-wrapper.show-placeholder .fr-placeholder {
  display: block;
}
.fr-wrapper ::selection {
  background: #b5d6fd;
  color: #000000;
}
.fr-wrapper ::-moz-selection {
  background: #b5d6fd;
  color: #000000;
}
.fr-box.fr-basic .fr-wrapper {
  background: #ffffff;
  border: 0px;
  border-top: 0;
  top: 0;
  left: 0;
}
.fr-box.fr-basic.fr-top .fr-wrapper {
  border-top: 0;
  border-radius: 0 0 2px 2px;
  -moz-border-radius: 0 0 2px 2px;
  -webkit-border-radius: 0 0 2px 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-box.fr-basic.fr-bottom .fr-wrapper {
  border-bottom: 0;
  border-radius: 2px 2px 0 0;
  -moz-border-radius: 2px 2px 0 0;
  -webkit-border-radius: 2px 2px 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-tooltip {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0 8px;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  background: #222222;
  color: #ffffff;
  font-size: 11px;
  line-height: 22px;
  font-family: Arial, Helvetica, sans-serif;
  -webkit-transition: opacity 0.2s ease 0s;
  -moz-transition: opacity 0.2s ease 0s;
  -ms-transition: opacity 0.2s ease 0s;
  -o-transition: opacity 0.2s ease 0s;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  left: -3000px;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  z-index: 9997;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fr-tooltip.fr-visible {
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
.fr-toolbar .fr-command.fr-btn,
.fr-popup .fr-command.fr-btn {
  background: transparent;
  color: #222222;
  -moz-outline: 0;
  outline: 0;
  border: 0;
  line-height: 1;
  cursor: pointer;
  text-align: left;
  margin: 0px 2px;
  -webkit-transition: background 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s;
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  z-index: 2;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-decoration: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  float: left;
  padding: 0;
  width: 38px;
  height: 38px;
}
.fr-toolbar .fr-command.fr-btn::-moz-focus-inner,
.fr-popup .fr-command.fr-btn::-moz-focus-inner {
  border: 0;
  padding: 0;
}
.fr-toolbar .fr-command.fr-btn.fr-btn-text,
.fr-popup .fr-command.fr-btn.fr-btn-text {
  width: auto;
}
.fr-toolbar .fr-command.fr-btn i,
.fr-popup .fr-command.fr-btn i {
  display: block;
  font-size: 14px;
  width: 14px;
  margin: 12px 12px;
  text-align: center;
  float: none;
}
.fr-toolbar .fr-command.fr-btn span.fr-sr-only,
.fr-popup .fr-command.fr-btn span.fr-sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-toolbar .fr-command.fr-btn span,
.fr-popup .fr-command.fr-btn span {
  font-size: 14px;
  display: block;
  line-height: 17px;
  min-width: 38px;
  float: left;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
  height: 17px;
  font-weight: bold;
  padding: 0 2px;
}
.fr-toolbar .fr-command.fr-btn img,
.fr-popup .fr-command.fr-btn img {
  margin: 12px 12px;
  width: 14px;
}
.fr-toolbar .fr-command.fr-btn.fr-active,
.fr-popup .fr-command.fr-btn.fr-active {
  color: #1e88e5;
  background: transparent;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-selection,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-selection {
  width: auto;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-selection span,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-selection span {
  font-weight: normal;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown i,
.fr-popup .fr-command.fr-btn.fr-dropdown i,
.fr-toolbar .fr-command.fr-btn.fr-dropdown span,
.fr-popup .fr-command.fr-btn.fr-dropdown span,
.fr-toolbar .fr-command.fr-btn.fr-dropdown img,
.fr-popup .fr-command.fr-btn.fr-dropdown img {
  margin-left: 8px;
  margin-right: 16px;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active {
  color: #222222;
  background: #d6d6d6;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active:hover,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active:hover,
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active:focus,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active:focus {
  background: #d6d6d6 !important;
  color: #222222 !important;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active:hover::after,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active:hover::after,
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active:focus::after,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active:focus::after {
  border-top-color: #222222 !important;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown::after,
.fr-popup .fr-command.fr-btn.fr-dropdown::after {
  position: absolute;
  width: 0;
  height: 0;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid #222222;
  right: 4px;
  top: 17px;
  content: \"\";
}
.fr-toolbar .fr-command.fr-btn.fr-disabled,
.fr-popup .fr-command.fr-btn.fr-disabled {
  color: #bdbdbd;
  cursor: default;
}
.fr-toolbar .fr-command.fr-btn.fr-disabled::after,
.fr-popup .fr-command.fr-btn.fr-disabled::after {
  border-top-color: #bdbdbd !important;
}
.fr-toolbar .fr-command.fr-btn.fr-hidden,
.fr-popup .fr-command.fr-btn.fr-hidden {
  display: none;
}
.fr-toolbar.fr-disabled .fr-btn,
.fr-popup.fr-disabled .fr-btn,
.fr-toolbar.fr-disabled .fr-btn.fr-active,
.fr-popup.fr-disabled .fr-btn.fr-active {
  color: #bdbdbd;
}
.fr-toolbar.fr-disabled .fr-btn.fr-dropdown::after,
.fr-popup.fr-disabled .fr-btn.fr-dropdown::after,
.fr-toolbar.fr-disabled .fr-btn.fr-active.fr-dropdown::after,
.fr-popup.fr-disabled .fr-btn.fr-active.fr-dropdown::after {
  border-top-color: #bdbdbd;
}
.fr-toolbar.fr-rtl .fr-command.fr-btn,
.fr-popup.fr-rtl .fr-command.fr-btn {
  float: right;
}
.fr-toolbar.fr-inline .fr-command.fr-btn {
  float: none;
}
.fr-desktop .fr-command:hover,
.fr-desktop .fr-command:focus {
  color: #222222;
  background: #ebebeb;
}
.fr-desktop .fr-command:hover::after,
.fr-desktop .fr-command:focus::after {
  border-top-color: #222222 !important;
}
.fr-desktop .fr-command.fr-selected {
  color: #222222;
  background: #d6d6d6;
}
.fr-desktop .fr-command.fr-active:hover,
.fr-desktop .fr-command.fr-active:focus {
  color: #1e88e5;
  background: #ebebeb;
}
.fr-desktop .fr-command.fr-active.fr-selected {
  color: #1e88e5;
  background: #d6d6d6;
}
.fr-desktop .fr-command.fr-disabled:hover,
.fr-desktop .fr-command.fr-disabled:focus,
.fr-desktop .fr-command.fr-disabled.fr-selected {
  background: transparent;
}
.fr-desktop.fr-disabled .fr-command:hover,
.fr-desktop.fr-disabled .fr-command:focus,
.fr-desktop.fr-disabled .fr-command.fr-selected {
  background: transparent;
}
.fr-toolbar.fr-mobile .fr-command.fr-blink,
.fr-popup.fr-mobile .fr-command.fr-blink {
  background: transparent;
}
.fr-command.fr-btn + .fr-dropdown-menu {
  display: inline-block;
  position: absolute;
  right: auto;
  bottom: auto;
  height: auto;
  z-index: 3;
  -webkit-overflow-scrolling: touch;
  overflow: hidden;
  border-radius: 0 0 2px 2px;
  -moz-border-radius: 0 0 2px 2px;
  -webkit-border-radius: 0 0 2px 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper {
  background: #ffffff;
  padding: 0;
  margin: auto;
  display: inline-block;
  text-align: left;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: max-height 0.2s ease 0s;
  -moz-transition: max-height 0.2s ease 0s;
  -ms-transition: max-height 0.2s ease 0s;
  -o-transition: max-height 0.2s ease 0s;
  margin-top: 0;
  float: left;
  max-height: 0;
  height: 0;
  margin-top: 0 !important;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content {
  overflow: auto;
  position: relative;
  max-height: 275px;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list li {
  padding: 0;
  margin: 0;
  font-size: 15px;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list li a {
  padding: 0 24px;
  line-height: 200%;
  display: block;
  cursor: pointer;
  white-space: nowrap;
  color: inherit;
  text-decoration: none;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list li a.fr-active {
  background: #d6d6d6;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list li a.fr-disabled {
  color: #bdbdbd;
  cursor: default;
}
.fr-command.fr-btn.fr-active + .fr-dropdown-menu {
  display: inline-block;
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
}
.fr-command.fr-btn.fr-active + .fr-dropdown-menu .fr-dropdown-wrapper {
  height: auto;
  max-height: 275px;
}
.fr-bottom > .fr-command.fr-btn + .fr-dropdown-menu {
  border-radius: 2px 2px 0 0;
  -moz-border-radius: 2px 2px 0 0;
  -webkit-border-radius: 2px 2px 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
.fr-toolbar.fr-rtl .fr-dropdown-wrapper,
.fr-popup.fr-rtl .fr-dropdown-wrapper {
  text-align: right !important;
}
body.prevent-scroll {
  overflow: hidden;
  text-align: center;
}
body.prevent-scroll.fr-mobile {
  position: fixed;
  -webkit-overflow-scrolling: touch;
}
.fr-modal {
  color: #222222;
  font-family: Arial, Helvetica, sans-serif;
  position: fixed;
  overflow-x: auto;
  overflow-y: scroll;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  z-index: 9999;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fr-modal .fr-modal-wrapper {
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  margin: 20px auto;
  display: inline-block;
  background: #ffffff;
  min-width: 300px;
  -webkit-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.19), 0 4px 3px 1px rgba(0, 0, 0, 0.14);
  -moz-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.19), 0 4px 3px 1px rgba(0, 0, 0, 0.14);
  box-shadow: 0 5px 8px rgba(0, 0, 0, 0.19), 0 4px 3px 1px rgba(0, 0, 0, 0.14);
  border: 0px;
  border-top: 5px solid #222222;
  overflow: hidden;
  width: 90%;
  padding-bottom: 10px;
  position: relative;
}
@media (min-width: 768px) and (max-width: 991px) {
  .fr-modal .fr-modal-wrapper {
    margin: 30px auto;
    width: 70%;
  }
}
@media (min-width: 992px) {
  .fr-modal .fr-modal-wrapper {
    margin: 50px auto;
    width: 600px;
  }
}
.fr-modal .fr-modal-wrapper .fr-modal-head {
  background: #ffffff;
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  border-bottom: 0px;
  overflow: hidden;
  position: absolute;
  width: 100%;
  min-height: 42px;
  z-index: 3;
  -webkit-transition: height 0.2s ease 0s;
  -moz-transition: height 0.2s ease 0s;
  -ms-transition: height 0.2s ease 0s;
  -o-transition: height 0.2s ease 0s;
}
.fr-modal .fr-modal-wrapper .fr-modal-head i {
  padding: 12px;
  width: 20px;
  font-size: 16px;
  cursor: pointer;
  line-height: 18px;
  color: #222222;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.fr-modal .fr-modal-wrapper .fr-modal-head i.fr-modal-close {
  position: absolute;
  top: 0;
  right: 0;
  -webkit-transition: color 0.2s ease 0s;
  -moz-transition: color 0.2s ease 0s;
  -ms-transition: color 0.2s ease 0s;
  -o-transition: color 0.2s ease 0s;
}
.fr-modal .fr-modal-wrapper .fr-modal-head h4 {
  font-size: 18px;
  padding: 12px 10px;
  margin: 0;
  font-weight: 400;
  line-height: 18px;
  display: inline-block;
  float: left;
}
.fr-modal .fr-modal-wrapper div.fr-modal-body {
  height: 100%;
  min-height: 150px;
  overflow-y: scroll;
}
.fr-desktop .fr-modal-wrapper .fr-modal-head i:hover {
  background: #ebebeb;
}
.fr-overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: #000000;
  -webkit-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  z-index: 9998;
}
.fr-popup {
  position: absolute;
  display: none;
  color: #222222;
  background: #ffffff;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  font-family: Arial, Helvetica, sans-serif;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  margin-top: 10px;
  z-index: 9995;
  text-align: left;
  border: 0px;
  border-top: 5px solid #222222;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fr-popup .fr-input-focus {
  background: #f5f5f5;
}
.fr-popup.fr-above {
  margin-top: -10px;
  border-top: 0;
  border-bottom: 5px solid #222222;
  -webkit-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-popup.fr-active {
  display: block;
}
.fr-popup.fr-hidden {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
.fr-popup .fr-hs {
  display: block !important;
}
.fr-popup .fr-hs.fr-hidden {
  display: none !important;
}
.fr-popup .fr-input-line {
  position: relative;
  padding: 8px 0;
}
.fr-popup .fr-input-line input[type=\"text\"],
.fr-popup .fr-input-line textarea {
  width: 100%;
  margin: 0px 0 1px 0;
  border: none;
  border-bottom: solid 1px #bdbdbd;
  color: #222222;
  font-size: 14px;
  padding: 6px 0 2px;
  background: rgba(0, 0, 0, 0);
  position: relative;
  z-index: 2;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-popup .fr-input-line input[type=\"text\"]:focus,
.fr-popup .fr-input-line textarea:focus {
  border-bottom: solid 2px #1e88e5;
  margin-bottom: 0px;
}
.fr-popup .fr-input-line input + label,
.fr-popup .fr-input-line textarea + label {
  position: absolute;
  top: 0;
  left: 0;
  font-size: 12px;
  color: rgba(0, 0, 0, 0);
  -webkit-transition: color 0.2s ease 0s;
  -moz-transition: color 0.2s ease 0s;
  -ms-transition: color 0.2s ease 0s;
  -o-transition: color 0.2s ease 0s;
  z-index: 3;
  width: 100%;
  display: block;
  background: #ffffff;
}
.fr-popup .fr-input-line input.fr-not-empty:focus + label,
.fr-popup .fr-input-line textarea.fr-not-empty:focus + label {
  color: #1e88e5;
}
.fr-popup .fr-input-line input.fr-not-empty + label,
.fr-popup .fr-input-line textarea.fr-not-empty + label {
  color: #808080;
}
.fr-popup input,
.fr-popup textarea {
  user-select: text;
  -o-user-select: text;
  -moz-user-select: text;
  -khtml-user-select: text;
  -webkit-user-select: text;
  -ms-user-select: text;
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  outline: none;
}
.fr-popup textarea {
  resize: none;
}
.fr-popup .fr-buttons {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  padding: 0 2px;
  white-space: nowrap;
  line-height: 0;
  border-bottom: 0px;
}
.fr-popup .fr-buttons::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-popup .fr-buttons .fr-btn {
  display: inline-block;
  float: none;
}
.fr-popup .fr-buttons .fr-btn i {
  float: left;
}
.fr-popup .fr-buttons .fr-separator {
  display: inline-block;
  float: none;
}
.fr-popup .fr-layer {
  width: 225px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 10px;
  display: none;
}
@media (min-width: 768px) {
  .fr-popup .fr-layer {
    width: 300px;
  }
}
.fr-popup .fr-layer.fr-active {
  display: inline-block;
}
.fr-popup .fr-action-buttons {
  z-index: 7;
  height: 36px;
  text-align: right;
}
.fr-popup .fr-action-buttons button.fr-command {
  height: 36px;
  line-height: 1;
  color: #1e88e5;
  padding: 10px;
  cursor: pointer;
  text-decoration: none;
  border: none;
  background: none;
  font-size: 16px;
  outline: none;
  -webkit-transition: background 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s;
}
.fr-popup .fr-action-buttons button.fr-command + button {
  margin-left: 24px;
}
.fr-popup .fr-action-buttons button.fr-command:hover,
.fr-popup .fr-action-buttons button.fr-command:focus {
  background: #ebebeb;
  color: #1e88e5;
}
.fr-popup .fr-action-buttons button.fr-command:active {
  background: #d6d6d6;
  color: #1e88e5;
}
.fr-popup .fr-action-buttons button::-moz-focus-inner {
  border: 0;
}
.fr-popup .fr-checkbox {
  position: relative;
  display: inline-block;
  width: 16px;
  height: 16px;
  line-height: 1;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  vertical-align: middle;
}
.fr-popup .fr-checkbox svg {
  margin-left: 2px;
  margin-top: 2px;
  display: none;
  width: 10px;
  height: 10px;
}
.fr-popup .fr-checkbox span {
  border: solid 1px #222222;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  width: 16px;
  height: 16px;
  display: inline-block;
  position: relative;
  z-index: 1;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: background 0.2s ease 0s, border-color 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s, border-color 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s, border-color 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s, border-color 0.2s ease 0s;
}
.fr-popup .fr-checkbox input {
  position: absolute;
  z-index: 2;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  border: 0 none;
  cursor: pointer;
  height: 16px;
  margin: 0;
  padding: 0;
  width: 16px;
  top: 1px;
  left: 1px;
}
.fr-popup .fr-checkbox input:checked + span {
  background: #1e88e5;
  border-color: #1e88e5;
}
.fr-popup .fr-checkbox input:checked + span svg {
  display: block;
}
.fr-popup .fr-checkbox input:focus + span {
  border-color: #1e88e5;
}
.fr-popup .fr-checkbox-line {
  font-size: 14px;
  line-height: 1.4px;
  margin-top: 10px;
}
.fr-popup .fr-checkbox-line label {
  cursor: pointer;
  margin: 0 5px;
  vertical-align: middle;
}
.fr-popup.fr-rtl {
  direction: rtl;
  text-align: right;
}
.fr-popup.fr-rtl .fr-action-buttons {
  text-align: left;
}
.fr-popup.fr-rtl .fr-input-line input + label,
.fr-popup.fr-rtl .fr-input-line textarea + label {
  left: auto;
  right: 0;
}
.fr-popup.fr-rtl .fr-buttons .fr-separator.fr-vs {
  float: right;
}
.fr-popup .fr-arrow {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid #222222;
  position: absolute;
  top: -9px;
  left: 50%;
  margin-left: -5px;
  display: inline-block;
}
.fr-popup.fr-above .fr-arrow {
  top: auto;
  bottom: -9px;
  border-bottom: 0;
  border-top: 5px solid #222222;
}
.fr-text-edit-layer {
  width: 250px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  display: block !important;
}
.fr-toolbar {
  color: #222222;
  background: #ffffff;
  position: relative;
  z-index: 4;
  font-family: Arial, Helvetica, sans-serif;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  padding: 0 2px;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  text-align: left;
  border: 0px;
  border-top: 5px solid #222222;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fr-toolbar::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-toolbar.fr-rtl {
  text-align: right;
}
.fr-toolbar.fr-inline {
  display: none;
  white-space: nowrap;
  position: absolute;
  margin-top: 10px;
}
.fr-toolbar.fr-inline .fr-arrow {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid #222222;
  position: absolute;
  top: -9px;
  left: 50%;
  margin-left: -5px;
  display: inline-block;
}
.fr-toolbar.fr-inline.fr-above {
  margin-top: -10px;
  -webkit-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  border-bottom: 5px solid #222222;
  border-top: 0;
}
.fr-toolbar.fr-inline.fr-above .fr-arrow {
  top: auto;
  bottom: -9px;
  border-bottom: 0;
  border-top-color: inherit;
  border-top-style: solid;
  border-top-width: 5px;
}
.fr-toolbar.fr-top {
  top: 0;
  border-radius: 2px 2px 0 0;
  -moz-border-radius: 2px 2px 0 0;
  -webkit-border-radius: 2px 2px 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-toolbar.fr-bottom {
  bottom: 0;
  border-radius: 0 0 2px 2px;
  -moz-border-radius: 0 0 2px 2px;
  -webkit-border-radius: 0 0 2px 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-separator {
  background: #ebebeb;
  display: block;
  vertical-align: top;
  float: left;
}
.fr-separator + .fr-separator {
  display: none;
}
.fr-separator.fr-vs {
  height: 34px;
  width: 1px;
  margin: 2px;
}
.fr-separator.fr-hs {
  clear: both;
  height: 1px;
  width: calc(100% - (2 * 2px));
  margin: 0 2px;
}
.fr-separator.fr-hidden {
  display: none !important;
}
.fr-rtl .fr-separator {
  float: right;
}
.fr-toolbar.fr-inline .fr-separator.fr-hs {
  float: none;
}
.fr-toolbar.fr-inline .fr-separator.fr-vs {
  float: none;
  display: inline-block;
}
.fr-visibility-helper {
  display: none;
  margin-left: 0px !important;
}
@media (min-width: 768px) {
  .fr-visibility-helper {
    margin-left: 1px !important;
  }
}
@media (min-width: 992px) {
  .fr-visibility-helper {
    margin-left: 2px !important;
  }
}
@media (min-width: 1200px) {
  .fr-visibility-helper {
    margin-left: 3px !important;
  }
}
.fr-opacity-0 {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
.fr-box {
  position: relative;
}
/**
 * Postion sticky hacks.
 */
.fr-sticky {
  position: -webkit-sticky;
  position: -moz-sticky;
  position: -ms-sticky;
  position: -o-sticky;
  position: sticky;
}
.fr-sticky-off {
  position: relative;
}
.fr-sticky-on {
  position: fixed;
}
.fr-sticky-on.fr-sticky-ios {
  position: absolute;
  left: 0;
  right: 0;
  width: auto !important;
}
.fr-sticky-dummy {
  display: none;
}
.fr-sticky-on + .fr-sticky-dummy,
.fr-sticky-box > .fr-sticky-dummy {
  display: block;
}
span.fr-sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.container::after,
.container-fluid::after,
.row::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-box .fr-counter {
  position: absolute;
  bottom: 0px;
  padding: 5px;
  right: 0px;
  color: #cccccc;
  content: attr(data-chars);
  font-size: 15px;
  font-family: \"Times New Roman\", Georgia, Serif;
  z-index: 1;
  background: #ffffff;
  border-top: solid 1px #ebebeb;
  border-left: solid 1px #ebebeb;
  border-radius: 2px 0 0 0;
  -moz-border-radius: 2px 0 0 0;
  -webkit-border-radius: 2px 0 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
.fr-box.fr-rtl .fr-counter {
  left: 0px;
  right: auto;
  border-left: none;
  border-right: solid 1px #ebebeb;
  border-radius: 0 2px 0 0;
  -moz-border-radius: 0 2px 0 0;
  -webkit-border-radius: 0 2px 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
.fr-box.fr-code-view .fr-counter {
  display: none;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.container::after,
.container-fluid::after,
.row::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-drag-helper {
  background: #1e88e5;
  height: 2px;
  margin-top: -1px;
  -webkit-opacity: 0.2;
  -moz-opacity: 0.2;
  opacity: 0.2;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  position: absolute;
  z-index: 9999;
  display: none;
}
.fr-drag-helper.fr-visible {
  display: block;
}
.fr-dragging {
  -webkit-opacity: 0.4;
  -moz-opacity: 0.4;
  opacity: 0.4;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
body.fr-fullscreen {
  overflow: hidden;
  height: 100%;
  width: 100%;
  position: fixed;
}
.fr-box.fr-fullscreen {
  margin: 0 !important;
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 9990 !important;
  width: auto !important;
}
.fr-box.fr-fullscreen .fr-toolbar.fr-top {
  top: 0 !important;
}
.fr-box.fr-fullscreen .fr-toolbar.fr-bottom {
  bottom: 0 !important;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.container::after,
.container-fluid::after,
.row::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-line-breaker {
  cursor: text;
  border-top: 1px solid #1e88e5;
  position: fixed;
  z-index: 2;
  display: none;
}
.fr-line-breaker.fr-visible {
  display: block;
}
.fr-line-breaker a.fr-floating-btn {
  position: absolute;
  left: calc(50% - (32px / 2));
  top: -16px;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.container::after,
.container-fluid::after,
.row::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-element .fr-video {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-element .fr-video::after {
  position: absolute;
  content: '';
  z-index: 1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  cursor: pointer;
  display: block;
  background: rgba(0, 0, 0, 0);
}
.fr-element .fr-video.fr-active > * {
  z-index: 2;
  position: relative;
}
.fr-element .fr-video > * {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  max-width: 100%;
  border: none;
}
.fr-box .fr-video-resizer {
  position: absolute;
  border: solid 1px #1e88e5;
  display: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-box .fr-video-resizer.fr-active {
  display: block;
}
.fr-box .fr-video-resizer .fr-handler {
  display: block;
  position: absolute;
  background: #1e88e5;
  border: solid 1px #ffffff;
  z-index: 4;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-box .fr-video-resizer .fr-handler.fr-hnw {
  cursor: nw-resize;
}
.fr-box .fr-video-resizer .fr-handler.fr-hne {
  cursor: ne-resize;
}
.fr-box .fr-video-resizer .fr-handler.fr-hsw {
  cursor: sw-resize;
}
.fr-box .fr-video-resizer .fr-handler.fr-hse {
  cursor: se-resize;
}
.fr-box .fr-video-resizer .fr-handler {
  width: 12px;
  height: 12px;
}
.fr-box .fr-video-resizer .fr-handler.fr-hnw {
  left: -6px;
  top: -6px;
}
.fr-box .fr-video-resizer .fr-handler.fr-hne {
  right: -6px;
  top: -6px;
}
.fr-box .fr-video-resizer .fr-handler.fr-hsw {
  left: -6px;
  bottom: -6px;
}
.fr-box .fr-video-resizer .fr-handler.fr-hse {
  right: -6px;
  bottom: -6px;
}
@media (min-width: 1200px) {
  .fr-box .fr-video-resizer .fr-handler {
    width: 10px;
    height: 10px;
  }
  .fr-box .fr-video-resizer .fr-handler.fr-hnw {
    left: -5px;
    top: -5px;
  }
  .fr-box .fr-video-resizer .fr-handler.fr-hne {
    right: -5px;
    top: -5px;
  }
  .fr-box .fr-video-resizer .fr-handler.fr-hsw {
    left: -5px;
    bottom: -5px;
  }
  .fr-box .fr-video-resizer .fr-handler.fr-hse {
    right: -5px;
    bottom: -5px;
  }
}
.fr-video-size-layer .fr-video-group .fr-input-line {
  width: calc(50% - 5px);
  display: inline-block;
}
.fr-video-size-layer .fr-video-group .fr-input-line + .fr-input-line {
  margin-left: 10px;
}
.fr-video-upload-layer {
  border: dashed 2px #bdbdbd;
  padding: 25px 0;
  position: relative;
  font-size: 14px;
  letter-spacing: 1px;
  line-height: 140%;
  text-align: center;
}
.fr-video-upload-layer:hover {
  background: #ebebeb;
}
.fr-video-upload-layer.fr-drop {
  background: #ebebeb;
  border-color: #1e88e5;
}
.fr-video-upload-layer .fr-form {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  overflow: hidden;
  margin: 0 !important;
  padding: 0 !important;
  width: 100% !important;
}
.fr-video-upload-layer .fr-form input {
  cursor: pointer;
  position: absolute;
  right: 0px;
  top: 0px;
  bottom: 0px;
  width: 500%;
  height: 100%;
  margin: 0px;
  font-size: 400px;
}
.fr-video-progress-bar-layer > h3 {
  font-size: 16px;
  margin: 10px 0;
  font-weight: normal;
}
.fr-video-progress-bar-layer > div.fr-action-buttons {
  display: none;
}
.fr-video-progress-bar-layer > div.fr-loader {
  background: #bcdbf7;
  height: 10px;
  width: 100%;
  margin-top: 20px;
  overflow: hidden;
  position: relative;
}
.fr-video-progress-bar-layer > div.fr-loader span {
  display: block;
  height: 100%;
  width: 0%;
  background: #1e88e5;
  -webkit-transition: width 0.2s ease 0s;
  -moz-transition: width 0.2s ease 0s;
  -ms-transition: width 0.2s ease 0s;
  -o-transition: width 0.2s ease 0s;
}
.fr-video-progress-bar-layer > div.fr-loader.fr-indeterminate span {
  width: 30% !important;
  position: absolute;
  top: 0;
  -webkit-animation: loading 2s linear infinite;
  -moz-animation: loading 2s linear infinite;
  -o-animation: loading 2s linear infinite;
  animation: loading 2s linear infinite;
}
.fr-video-progress-bar-layer.fr-error > div.fr-loader {
  display: none;
}
.fr-video-progress-bar-layer.fr-error > div.fr-action-buttons {
  display: block;
}
.fr-video-overlay {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 9999;
  display: none;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.container::after,
.container-fluid::after,
.row::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
textarea.fr-code {
  display: none;
  width: 100%;
  resize: none;
  -moz-resize: none;
  -webkit-resize: none;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border: none;
  padding: 10px;
  margin: 0px;
  font-family: \"Courier New\", monospace;
  font-size: 14px;
  background: #ffffff;
  color: #000000;
  outline: none;
}
.fr-box.fr-rtl textarea.fr-code {
  direction: rtl;
}
.fr-box .CodeMirror {
  display: none;
}
.fr-box.fr-code-view textarea.fr-code {
  display: block;
}
.fr-box.fr-code-view.fr-inline {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-box.fr-code-view .fr-element,
.fr-box.fr-code-view .fr-placeholder,
.fr-box.fr-code-view .fr-iframe {
  display: none;
}
.fr-box.fr-code-view .CodeMirror {
  display: block;
}
.fr-box.fr-inline.fr-code-view .fr-command.fr-btn.html-switch {
  display: block;
}
.fr-box.fr-inline .fr-command.fr-btn.html-switch {
  position: absolute;
  top: 0;
  right: 0;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  display: none;
  background: #ffffff;
  color: #222222;
  -moz-outline: 0;
  outline: 0;
  border: 0;
  line-height: 1;
  cursor: pointer;
  text-align: left;
  padding: 12px 12px;
  -webkit-transition: background 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s;
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  z-index: 2;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-decoration: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-box.fr-inline .fr-command.fr-btn.html-switch i {
  font-size: 14px;
  width: 14px;
  text-align: center;
}
.fr-box.fr-inline .fr-command.fr-btn.html-switch.fr-desktop:hover {
  background: #ebebeb;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.container::after,
.container-fluid::after,
.row::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-popup .fr-emoticon {
  display: inline-block;
  font-size: 20px;
  width: 20px;
  padding: 5px;
  line-height: 1;
  cursor: default;
  font-weight: normal;
  font-family: \"Apple Color Emoji\", \"Segoe UI Emoji\", \"NotoColorEmoji\", \"Segoe UI Symbol\", \"Android Emoji\", \"EmojiSymbols\";
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.fr-popup .fr-emoticon img {
  height: 20px;
}
.fr-popup .fr-link:focus {
  background: #ebebeb;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.container::after,
.container-fluid::after,
.row::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-element img {
  cursor: pointer;
}
.fr-image-resizer {
  position: absolute;
  border: solid 1px #1e88e5;
  display: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.fr-image-resizer.fr-active {
  display: block;
}
.fr-image-resizer .fr-handler {
  display: block;
  position: absolute;
  background: #1e88e5;
  border: solid 1px #ffffff;
  z-index: 4;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-image-resizer .fr-handler.fr-hnw {
  cursor: nw-resize;
}
.fr-image-resizer .fr-handler.fr-hne {
  cursor: ne-resize;
}
.fr-image-resizer .fr-handler.fr-hsw {
  cursor: sw-resize;
}
.fr-image-resizer .fr-handler.fr-hse {
  cursor: se-resize;
}
.fr-image-resizer .fr-handler {
  width: 12px;
  height: 12px;
}
.fr-image-resizer .fr-handler.fr-hnw {
  left: -6px;
  top: -6px;
}
.fr-image-resizer .fr-handler.fr-hne {
  right: -6px;
  top: -6px;
}
.fr-image-resizer .fr-handler.fr-hsw {
  left: -6px;
  bottom: -6px;
}
.fr-image-resizer .fr-handler.fr-hse {
  right: -6px;
  bottom: -6px;
}
@media (min-width: 1200px) {
  .fr-image-resizer .fr-handler {
    width: 10px;
    height: 10px;
  }
  .fr-image-resizer .fr-handler.fr-hnw {
    left: -5px;
    top: -5px;
  }
  .fr-image-resizer .fr-handler.fr-hne {
    right: -5px;
    top: -5px;
  }
  .fr-image-resizer .fr-handler.fr-hsw {
    left: -5px;
    bottom: -5px;
  }
  .fr-image-resizer .fr-handler.fr-hse {
    right: -5px;
    bottom: -5px;
  }
}
.fr-image-overlay {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 9999;
  display: none;
}
.fr-image-upload-layer {
  border: dashed 2px #bdbdbd;
  padding: 25px 0;
  position: relative;
  font-size: 14px;
  letter-spacing: 1px;
  line-height: 140%;
  text-align: center;
}
.fr-image-upload-layer:hover {
  background: #ebebeb;
}
.fr-image-upload-layer.fr-drop {
  background: #ebebeb;
  border-color: #1e88e5;
}
.fr-image-upload-layer .fr-form {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  overflow: hidden;
  margin: 0 !important;
  padding: 0 !important;
  width: 100% !important;
}
.fr-image-upload-layer .fr-form input {
  cursor: pointer;
  position: absolute;
  right: 0px;
  top: 0px;
  bottom: 0px;
  width: 500%;
  height: 100%;
  margin: 0px;
  font-size: 400px;
}
.fr-image-progress-bar-layer > h3 {
  font-size: 16px;
  margin: 10px 0;
  font-weight: normal;
}
.fr-image-progress-bar-layer > div.fr-action-buttons {
  display: none;
}
.fr-image-progress-bar-layer > div.fr-loader {
  background: #bcdbf7;
  height: 10px;
  width: 100%;
  margin-top: 20px;
  overflow: hidden;
  position: relative;
}
.fr-image-progress-bar-layer > div.fr-loader span {
  display: block;
  height: 100%;
  width: 0%;
  background: #1e88e5;
  -webkit-transition: width 0.2s ease 0s;
  -moz-transition: width 0.2s ease 0s;
  -ms-transition: width 0.2s ease 0s;
  -o-transition: width 0.2s ease 0s;
}
.fr-image-progress-bar-layer > div.fr-loader.fr-indeterminate span {
  width: 30% !important;
  position: absolute;
  top: 0;
  -webkit-animation: loading 2s linear infinite;
  -moz-animation: loading 2s linear infinite;
  -o-animation: loading 2s linear infinite;
  animation: loading 2s linear infinite;
}
.fr-image-progress-bar-layer.fr-error > div.fr-loader {
  display: none;
}
.fr-image-progress-bar-layer.fr-error > div.fr-action-buttons {
  display: block;
}
.fr-image-size-layer .fr-image-group .fr-input-line {
  width: calc(50% - 5px);
  display: inline-block;
}
.fr-image-size-layer .fr-image-group .fr-input-line + .fr-input-line {
  margin-left: 10px;
}
.fr-uploading {
  -webkit-opacity: 0.4;
  -moz-opacity: 0.4;
  opacity: 0.4;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
@keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-webkit-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-moz-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-o-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.container::after,
.container-fluid::after,
.row::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-quick-insert {
  position: absolute;
  z-index: 9998;
  white-space: nowrap;
  padding-right: 5px;
  margin-left: -5px;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.fr-quick-insert.fr-on a.fr-floating-btn svg {
  -webkit-transform: rotate(135deg);
  -moz-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  -o-transform: rotate(135deg);
}
.fr-quick-insert.fr-hidden {
  display: none;
}
.fr-qi-helper {
  position: absolute;
  z-index: 3;
  padding-left: 10px;
  white-space: nowrap;
}
.fr-qi-helper a.fr-btn.fr-floating-btn {
  text-align: center;
  display: inline-block;
  color: #222222;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
}
.fr-qi-helper a.fr-btn.fr-floating-btn.fr-size-1 {
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.container::after,
.container-fluid::after,
.row::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-modal-head .fr-modal-head-line::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-modal-head .fr-modal-head-line i.fr-modal-more {
  float: left;
  opacity: 1;
  -webkit-transition: padding 0.2s ease 0s, width 0.2s ease 0s, opacity 0.2s ease 0s;
  -moz-transition: padding 0.2s ease 0s, width 0.2s ease 0s, opacity 0.2s ease 0s;
  -ms-transition: padding 0.2s ease 0s, width 0.2s ease 0s, opacity 0.2s ease 0s;
  -o-transition: padding 0.2s ease 0s, width 0.2s ease 0s, opacity 0.2s ease 0s;
}
.fr-modal-head .fr-modal-head-line i.fr-modal-more.fr-not-available {
  opacity: 0;
  width: 0;
  padding: 12px 0;
}
.fr-modal-head .fr-modal-tags {
  display: none;
}
.fr-modal-head .fr-modal-tags a {
  display: inline-block;
  opacity: 0;
  padding: 6px 8px;
  margin: 8px 0 8px 8px;
  text-decoration: none;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  color: #1e88e5;
  -webkit-transition: opacity 0.2s ease 0s, background 0.2s ease 0s;
  -moz-transition: opacity 0.2s ease 0s, background 0.2s ease 0s;
  -ms-transition: opacity 0.2s ease 0s, background 0.2s ease 0s;
  -o-transition: opacity 0.2s ease 0s, background 0.2s ease 0s;
  cursor: pointer;
}
.fr-modal-head .fr-modal-tags a:focus {
  outline: none;
}
.fr-modal-head .fr-modal-tags a.fr-selected-tag {
  background: #d6d6d6;
}
div.fr-modal-body .fr-preloader {
  display: block;
  margin: 50px auto;
}
div.fr-modal-body div.fr-image-list {
  text-align: center;
  margin: 0 10px;
  padding: 0;
}
div.fr-modal-body div.fr-image-list::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
div.fr-modal-body div.fr-image-list .fr-list-column {
  float: left;
  width: calc((100% - 10px) / 2);
}
@media (min-width: 768px) and (max-width: 1199px) {
  div.fr-modal-body div.fr-image-list .fr-list-column {
    width: calc((100% - 20px) / 3);
  }
}
@media (min-width: 1200px) {
  div.fr-modal-body div.fr-image-list .fr-list-column {
    width: calc((100% - 30px) / 4);
  }
}
div.fr-modal-body div.fr-image-list .fr-list-column + .fr-list-column {
  margin-left: 10px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container {
  position: relative;
  width: 100%;
  display: block;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  overflow: hidden;
}
div.fr-modal-body div.fr-image-list div.fr-image-container:first-child {
  margin-top: 10px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container + div {
  margin-top: 10px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-image-deleting::after {
  position: absolute;
  -webkit-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  -webkit-transition: opacity 0.2s ease 0s;
  -moz-transition: opacity 0.2s ease 0s;
  -ms-transition: opacity 0.2s ease 0s;
  -o-transition: opacity 0.2s ease 0s;
  background: #000000;
  content: \"\";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 2;
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-image-deleting::before {
  content: attr(data-deleting);
  color: #ffffff;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  position: absolute;
  z-index: 3;
  font-size: 15px;
  height: 20px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-empty {
  height: 95px;
  background: #cccccc;
  z-index: 1;
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-empty::after {
  position: absolute;
  margin: auto;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: attr(data-loading);
  display: inline-block;
  height: 20px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container img {
  width: 100%;
  vertical-align: middle;
  position: relative;
  z-index: 2;
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  -webkit-transition: opacity 0.2s ease 0s, filter 0.2s ease 0s;
  -moz-transition: opacity 0.2s ease 0s, filter 0.2s ease 0s;
  -ms-transition: opacity 0.2s ease 0s, filter 0.2s ease 0s;
  -o-transition: opacity 0.2s ease 0s, filter 0.2s ease 0s;
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-mobile-selected img {
  -webkit-opacity: 0.75;
  -moz-opacity: 0.75;
  opacity: 0.75;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-mobile-selected .fr-delete-img,
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-mobile-selected .fr-insert-img {
  display: inline-block;
}
div.fr-modal-body div.fr-image-list div.fr-image-container .fr-delete-img,
div.fr-modal-body div.fr-image-list div.fr-image-container .fr-insert-img {
  display: none;
  top: 50%;
  border-radius: 100%;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-transition: background 0.2s ease 0s, color 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s, color 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s, color 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s, color 0.2s ease 0s;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  position: absolute;
  cursor: pointer;
  margin: 0;
  width: 36px;
  height: 36px;
  line-height: 36px;
  text-decoration: none;
  z-index: 3;
}
div.fr-modal-body div.fr-image-list div.fr-image-container .fr-delete-img {
  background: #b8312f;
  color: #ffffff;
  left: 50%;
  -webkit-transform: translateY(-50%) translateX(25%);
  -moz-transform: translateY(-50%) translateX(25%);
  -ms-transform: translateY(-50%) translateX(25%);
  -o-transform: translateY(-50%) translateX(25%);
}
div.fr-modal-body div.fr-image-list div.fr-image-container .fr-insert-img {
  background: #ffffff;
  color: #1e88e5;
  left: 50%;
  -webkit-transform: translateY(-50%) translateX(-125%);
  -moz-transform: translateY(-50%) translateX(-125%);
  -ms-transform: translateY(-50%) translateX(-125%);
  -o-transform: translateY(-50%) translateX(-125%);
}
.fr-desktop .fr-modal-wrapper .fr-modal-head .fr-modal-tags a:hover {
  background: #ebebeb;
}
.fr-desktop .fr-modal-wrapper .fr-modal-head .fr-modal-tags a.fr-selected-tag {
  background: #d6d6d6;
}
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container:hover img {
  -webkit-opacity: 0.75;
  -moz-opacity: 0.75;
  opacity: 0.75;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container:hover .fr-delete-img,
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container:hover .fr-insert-img {
  display: inline-block;
}
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container .fr-delete-img:hover {
  background: #bf4644;
  color: #ffffff;
}
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container .fr-insert-img:hover {
  background: #ebebeb;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.container::after,
.container-fluid::after,
.row::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-popup .fr-colors-tabs {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  margin-bottom: 5px;
  line-height: 16px;
  margin-left: -2px;
  margin-right: -2px;
}
.fr-popup .fr-colors-tabs .fr-colors-tab {
  display: inline-block;
  width: 50%;
  cursor: pointer;
  text-align: center;
  color: #222222;
  font-size: 13px;
  padding: 8px 0;
  position: relative;
}
.fr-popup .fr-colors-tabs .fr-colors-tab:hover,
.fr-popup .fr-colors-tabs .fr-colors-tab:focus {
  color: #1e88e5;
}
.fr-popup .fr-colors-tabs .fr-colors-tab[data-param1=\"background\"]::after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #1e88e5;
  content: '';
  -webkit-transition: transform 0.2s ease 0s;
  -moz-transition: transform 0.2s ease 0s;
  -ms-transition: transform 0.2s ease 0s;
  -o-transition: transform 0.2s ease 0s;
}
.fr-popup .fr-colors-tabs .fr-colors-tab.fr-selected-tab {
  color: #1e88e5;
}
.fr-popup .fr-colors-tabs .fr-colors-tab.fr-selected-tab[data-param1=\"text\"] ~ [data-param1=\"background\"]::after {
  -webkit-transform: translate3d(-100%, 0, 0);
  -moz-transform: translate3d(-100%, 0, 0);
  -ms-transform: translate3d(-100%, 0, 0);
  -o-transform: translate3d(-100%, 0, 0);
}
.fr-popup .fr-separator + .fr-colors-tabs {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  margin-left: 2px;
  margin-right: 2px;
}
.fr-popup .fr-color-set {
  line-height: 0;
  display: none;
}
.fr-popup .fr-color-set.fr-selected-set {
  display: block;
}
.fr-popup .fr-color-set > span {
  display: inline-block;
  width: 32px;
  height: 32px;
  position: relative;
  z-index: 1;
}
.fr-popup .fr-color-set > span > i {
  text-align: center;
  line-height: 32px;
  height: 32px;
  width: 32px;
  font-size: 13px;
  position: absolute;
  bottom: 0;
  cursor: default;
  left: 0;
}
.fr-popup .fr-color-set > span .fr-selected-color {
  color: #ffffff;
  font-family: FontAwesome;
  font-size: 13px;
  font-weight: 400;
  line-height: 32px;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  text-align: center;
  cursor: default;
}
.fr-popup .fr-color-set > span:hover,
.fr-popup .fr-color-set > span:focus {
  outline: 1px solid #222222;
  z-index: 2;
}
.fr-rtl .fr-popup .fr-colors-tabs .fr-colors-tab.fr-selected-tab[data-param1=\"text\"] ~ [data-param1=\"background\"]::after {
  -webkit-transform: translate3d(100%, 0, 0);
  -moz-transform: translate3d(100%, 0, 0);
  -ms-transform: translate3d(100%, 0, 0);
  -o-transform: translate3d(100%, 0, 0);
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.container::after,
.container-fluid::after,
.row::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-file-upload-layer {
  border: dashed 2px #bdbdbd;
  padding: 25px 0;
  position: relative;
  font-size: 14px;
  letter-spacing: 1px;
  line-height: 140%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: center;
}
.fr-file-upload-layer:hover {
  background: #ebebeb;
}
.fr-file-upload-layer.fr-drop {
  background: #ebebeb;
  border-color: #1e88e5;
}
.fr-file-upload-layer .fr-form {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  overflow: hidden;
  margin: 0 !important;
  padding: 0 !important;
  width: 100% !important;
}
.fr-file-upload-layer .fr-form input {
  cursor: pointer;
  position: absolute;
  right: 0px;
  top: 0px;
  bottom: 0px;
  width: 500%;
  height: 100%;
  margin: 0px;
  font-size: 400px;
}
.fr-file-progress-bar-layer {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-file-progress-bar-layer > h3 {
  font-size: 16px;
  margin: 10px 0;
  font-weight: normal;
}
.fr-file-progress-bar-layer > div.fr-action-buttons {
  display: none;
}
.fr-file-progress-bar-layer > div.fr-loader {
  background: #bcdbf7;
  height: 10px;
  width: 100%;
  margin-top: 20px;
  overflow: hidden;
  position: relative;
}
.fr-file-progress-bar-layer > div.fr-loader span {
  display: block;
  height: 100%;
  width: 0%;
  background: #1e88e5;
  -webkit-transition: width 0.2s ease 0s;
  -moz-transition: width 0.2s ease 0s;
  -ms-transition: width 0.2s ease 0s;
  -o-transition: width 0.2s ease 0s;
}
.fr-file-progress-bar-layer > div.fr-loader.fr-indeterminate span {
  width: 30% !important;
  position: absolute;
  top: 0;
  -webkit-animation: loading 2s linear infinite;
  -moz-animation: loading 2s linear infinite;
  -o-animation: loading 2s linear infinite;
  animation: loading 2s linear infinite;
}
.fr-file-progress-bar-layer.fr-error > div.fr-loader {
  display: none;
}
.fr-file-progress-bar-layer.fr-error > div.fr-action-buttons {
  display: block;
}
@keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-webkit-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-moz-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-o-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.container::after,
.container-fluid::after,
.row::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-element table td.fr-selected-cell,
.fr-element table th.fr-selected-cell {
  border: 1px double #1e88e5;
}
.fr-element table tr {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-element table td,
.fr-element table th {
  user-select: text;
  -o-user-select: text;
  -moz-user-select: text;
  -khtml-user-select: text;
  -webkit-user-select: text;
  -ms-user-select: text;
}
.fr-element .fr-no-selection table td,
.fr-element .fr-no-selection table th {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-table-resizer {
  cursor: col-resize;
  position: fixed;
  z-index: 3;
  display: none;
}
.fr-table-resizer.fr-moving {
  z-index: 2;
}
.fr-table-resizer div {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  border-right: 1px solid #1e88e5;
}
.fr-no-selection {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-popup .fr-table-size .fr-table-size-info {
  text-align: center;
  font-size: 14px;
  padding: 8px;
}
.fr-popup .fr-table-size .fr-select-table-size {
  line-height: 0;
  padding: 0 5px 5px;
  white-space: nowrap;
}
.fr-popup .fr-table-size .fr-select-table-size > span {
  display: inline-block;
  padding: 0px 4px 4px 0;
  background: transparent;
}
.fr-popup .fr-table-size .fr-select-table-size > span > span {
  display: inline-block;
  width: 18px;
  height: 18px;
  border: 1px solid #dddddd;
}
.fr-popup .fr-table-size .fr-select-table-size > span.hover {
  background: transparent;
}
.fr-popup .fr-table-size .fr-select-table-size > span.hover > span {
  background: rgba(30, 136, 229, 0.3);
  border: solid 1px #1e88e5;
}
.fr-popup .fr-table-size .fr-select-table-size .new-line::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-popup.fr-above .fr-table-size .fr-select-table-size > span {
  display: inline-block !important;
}
.fr-popup .fr-table-colors-buttons {
  margin-bottom: 5px;
}
.fr-popup .fr-table-colors {
  line-height: 0;
  display: block;
}
.fr-popup .fr-table-colors > span {
  display: inline-block;
  width: 32px;
  height: 32px;
  position: relative;
  z-index: 1;
}
.fr-popup .fr-table-colors > span > i {
  text-align: center;
  line-height: 32px;
  height: 32px;
  width: 32px;
  font-size: 13px;
  position: absolute;
  bottom: 0;
  cursor: default;
  left: 0;
}
.fr-popup .fr-table-colors > span:focus {
  outline: 1px solid #222222;
  z-index: 2;
}
.fr-popup.fr-desktop .fr-table-size .fr-select-table-size > span > span {
  width: 12px;
  height: 12px;
}
.fr-insert-helper {
  position: fixed;
  z-index: 9999;
  white-space: nowrap;
}
html body .fr-gatedvideo {
  position: relative;
  display: table;
  min-height: 140px;
}
html body .fr-gatedvideo video {
  background-color: rgba(67, 83, 147, 0.5);
}
html body .fr-gatedvideo:after {
  content: \"\";
  position: absolute;
  background-repeat: no-repeat;
  background-position: 50% 40%;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  display: block;
  clear: both;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAByCAMAAAC4A3VPAAAA/1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD64ociAAAAVHRSTlMAAQIDBAUGCAkKCw0PEBEUFxsfICUmKistLjE1Njo8QExNVl9iY2RmZ2hpa2xtb3Bxc3R8gIWGkZedoquwt8XP0dXX2drc4OLm6Ont7/Hz9ff5+/3esbxfAAACIklEQVRo3u3aW1fTQBSG4a9BKIUKVCi0IqCIp3pAjYpQaEGQYlWk5fv/v8WLrkKbJjNNsmeu9nuXrFnruclhJXsATdM0TdNSVihVqrV6itZXl2ZyeLM7Rz1mqN1YyQaWwltmrrUxDfHgUSUYOdztM1fNBav4rE/+fjI8mjtm3q5rFnFvsK46OFo4p0BPpxHZBADMd0jX5ovhor8AEJxSqLpdJAHgQErkddI19JJjZI1yNePFVxwjC5eCJDesIoEtSZGtGPE1I2RLlOTks+9NZAUWZUU2bCKxLUy2I2JjYgVCYZIzFpE4kSaXLCLRkSZXR8S3cQtwI02uW0RCWhx5zr6jb/I9fZNJojvyA32T+/RNGkRHpEl0QxpFJ+RHeiYff6Jv8oLeSSqppJJKKqmkkkoqqWTe9rveyfrDrncSFtPJl5fZdPN9aTQdfUWbTFf/Cgymsz8i5a53Mtl0+HcryZQn7+dQCSb+SJNVWEycSZMVWEwcSpMlWMy7gZtUvQIsJtaEyaPIBGHSRNCTJXdgM4GvouLtLGwmsCxKhjEzr4gJ4Lug2C/FTfbKvyJk8Z8cuRs/vxwzAWBTTDxOmguPmqaBRurO5zCFOTjxRUTsmHYz3JkX5sFNqk7njfsKhubn4YnN3NfQQWDZPVG+Iskf9zduMd+9cmnbrgGgGP5sPx8bby5/y/zsa20VMm74Cdb2Ds/SvbNvOifh9iI0TdM0TZPtP32lY4xP2bT1AAAAAElFTkSuQmCC);
}
/*!
 * froala_editor v2.2.4 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2016 Froala Labs
 */
html body .clearfix::after,
html body .dl-horizontal dd::after,
html body .container::after,
html body .container-fluid::after,
html body .row::after,
html body .form-horizontal .form-group::after,
html body .btn-toolbar::after,
html body .btn-group-vertical > .btn-group::after,
html body .nav::after,
html body .navbar::after,
html body .navbar-header::after,
html body .navbar-collapse::after,
html body .pager::after,
html body .panel-body::after,
html body .modal-header::after,
html body .modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
}
html body .fr-element .fr-gatedvideo {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
html body .fr-element .fr-gatedvideo::after {
  content: \"\";
  position: absolute;
  background-repeat: no-repeat;
  background-position: 50% 40%;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  display: block;
  clear: both;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAByCAMAAAC4A3VPAAAA/1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD64ociAAAAVHRSTlMAAQIDBAUGCAkKCw0PEBEUFxsfICUmKistLjE1Njo8QExNVl9iY2RmZ2hpa2xtb3Bxc3R8gIWGkZedoquwt8XP0dXX2drc4OLm6Ont7/Hz9ff5+/3esbxfAAACIklEQVRo3u3aW1fTQBSG4a9BKIUKVCi0IqCIp3pAjYpQaEGQYlWk5fv/v8WLrkKbJjNNsmeu9nuXrFnruclhJXsATdM0TdNSVihVqrV6itZXl2ZyeLM7Rz1mqN1YyQaWwltmrrUxDfHgUSUYOdztM1fNBav4rE/+fjI8mjtm3q5rFnFvsK46OFo4p0BPpxHZBADMd0jX5ovhor8AEJxSqLpdJAHgQErkddI19JJjZI1yNePFVxwjC5eCJDesIoEtSZGtGPE1I2RLlOTks+9NZAUWZUU2bCKxLUy2I2JjYgVCYZIzFpE4kSaXLCLRkSZXR8S3cQtwI02uW0RCWhx5zr6jb/I9fZNJojvyA32T+/RNGkRHpEl0QxpFJ+RHeiYff6Jv8oLeSSqppJJKKqmkkkoqqWTe9rveyfrDrncSFtPJl5fZdPN9aTQdfUWbTFf/Cgymsz8i5a53Mtl0+HcryZQn7+dQCSb+SJNVWEycSZMVWEwcSpMlWMy7gZtUvQIsJtaEyaPIBGHSRNCTJXdgM4GvouLtLGwmsCxKhjEzr4gJ4Lug2C/FTfbKvyJk8Z8cuRs/vxwzAWBTTDxOmguPmqaBRurO5zCFOTjxRUTsmHYz3JkX5sFNqk7njfsKhubn4YnN3NfQQWDZPVG+Iskf9zduMd+9cmnbrgGgGP5sPx8bby5/y/zsa20VMm74Cdb2Ds/SvbNvOifh9iI0TdM0TZPtP32lY4xP2bT1AAAAAElFTkSuQmCC);
}
html body .fr-element .fr-gatedvideo.fr-active > * {
  z-index: 2;
  position: relative;
}
html body .fr-element .fr-gatedvideo > * {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  max-width: 100%;
  border: none;
}
html body .fr-box .fr-gatedvideo-resizer {
  position: absolute;
  border: solid 1px #1e88e5;
  display: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
html body .fr-box .fr-gatedvideo-resizer.fr-active {
  display: block;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler {
  display: block;
  position: absolute;
  background: #1e88e5;
  border: solid 1px #ffffff;
  z-index: 4;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hnw {
  cursor: nw-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hne {
  cursor: ne-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hsw {
  cursor: sw-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hse {
  cursor: se-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler {
  width: 12px;
  height: 12px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hnw {
  left: -6px;
  top: -6px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hne {
  right: -6px;
  top: -6px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hsw {
  left: -6px;
  bottom: -6px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hse {
  right: -6px;
  bottom: -6px;
}
@media (min-width: 1200px) {
  html body .fr-box .fr-gatedvideo-resizer .fr-handler {
    width: 10px;
    height: 10px;
  }
  html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hnw {
    left: -5px;
    top: -5px;
  }
  html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hne {
    right: -5px;
    top: -5px;
  }
  html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hsw {
    left: -5px;
    bottom: -5px;
  }
  html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hse {
    right: -5px;
    bottom: -5px;
  }
}
html body .fr-gatedvideo-size-layer .fr-gatedvideo-group .fr-input-line {
  display: inline-block;
}
html body .fr-gatedvideo-size-layer .fr-gatedvideo-group .fr-input-line + .fr-input-line {
  margin-left: 10px;
}
html body .fr-gatedvideo-overlay {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 9999;
  display: none;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/libraries.css";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/libraries.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/libraries.css");
    }
}