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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/type.less */
class __TwigTemplate_009e2e429d1141a19e545e2ffea3ec368f07b203a42112617316128047afdab4 extends Template
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
        echo "//
// Typography
// --------------------------------------------------


// Headings
// -------------------------

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: @headings-font-family;
  font-weight: @headings-font-weight;
  line-height: @headings-line-height;
  color: @headings-color;

  small,
  .small {
    font-weight: normal;
    line-height: 1;
    color: @headings-small-color;
  }
}

h1, .h1,
h2, .h2,
h3, .h3 {
  margin-top: @line-height-computed;
  margin-bottom: (@line-height-computed / 2);

  small,
  .small {
    font-size: 65%;
  }
}
h4, .h4,
h5, .h5,
h6, .h6 {
  margin-top: (@line-height-computed / 2);
  margin-bottom: (@line-height-computed / 2);

  small,
  .small {
    font-size: 75%;
  }
}

h1, .h1 { font-size: @font-size-h1; }
h2, .h2 { font-size: @font-size-h2; }
h3, .h3 { font-size: @font-size-h3; }
h4, .h4 { font-size: @font-size-h4; }
h5, .h5 { font-size: @font-size-h5; }
h6, .h6 { font-size: @font-size-h6; }


// Body text
// -------------------------

p {
  margin: 0 0 (@line-height-computed / 2);
}

.lead {
  margin-bottom: @line-height-computed;
  font-size: floor((@font-size-base * 1.15));
  font-weight: 300;
  line-height: 1.4;

  @media (min-width: @screen-sm-min) {
    font-size: (@font-size-base * 1.5);
  }
}


// Emphasis & misc
// -------------------------

// Ex: (12px small font / 14px base font) * 100% = about 85%
small,
.small {
  font-size: floor((100% * @font-size-small / @font-size-base));
}

mark,
.mark {
  background-color: @state-warning-bg;
  padding: .2em;
}

// Alignment
.text-left           { text-align: left; }
.text-right          { text-align: right; }
.text-center         { text-align: center; }
.text-justify        { text-align: justify; }
.text-nowrap         { white-space: nowrap; }

// Transformation
.text-lowercase      { text-transform: lowercase; }
.text-uppercase      { text-transform: uppercase; }
.text-capitalize     { text-transform: capitalize; }

// Contextual colors
.text-muted {
  color: @text-muted;
}
.text-primary {
  .text-emphasis-variant(@brand-primary);
}
.text-success {
  .text-emphasis-variant(@state-success-text);
}
.text-info {
  .text-emphasis-variant(@state-info-text);
}
.text-warning {
  .text-emphasis-variant(@state-warning-text);
}
.text-danger {
  .text-emphasis-variant(@state-danger-text);
}

// Contextual backgrounds
// For now we'll leave these alongside the text classes until v4 when we can
// safely shift things around (per SemVer rules).
.bg-primary {
  // Given the contrast here, this is the only class to have its color inverted
  // automatically.
  color: #fff;
  .bg-variant(@brand-primary);
}
.bg-success {
  .bg-variant(@state-success-bg);
}
.bg-info {
  .bg-variant(@state-info-bg);
}
.bg-warning {
  .bg-variant(@state-warning-bg);
}
.bg-danger {
  .bg-variant(@state-danger-bg);
}


// Page header
// -------------------------

.page-header {
  padding-bottom: ((@line-height-computed / 2) - 1);
  margin: (@line-height-computed * 2) 0 @line-height-computed;
  border-bottom: 1px solid @page-header-border-color;
}


// Lists
// -------------------------

// Unordered and Ordered lists
ul,
ol {
  margin-top: 0;
  margin-bottom: (@line-height-computed / 2);
  ul,
  ol {
    margin-bottom: 0;
  }
}

// List options

// Unstyled keeps list items block level, just removes default browser padding and list-style
.list-unstyled {
  padding-left: 0;
  list-style: none;
}

// Inline turns list items into inline-block
.list-inline {
  .list-unstyled();
  margin-left: -5px;

  > li {
    display: inline-block;
    padding-left: 5px;
    padding-right: 5px;
  }
}

// Description Lists
dl {
  margin-top: 0; // Remove browser default
  margin-bottom: @line-height-computed;
}
dt,
dd {
  line-height: @line-height-base;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0; // Undo browser default
}

// Horizontal description lists
//
// Defaults to being stacked without any of the below styles applied, until the
// grid breakpoint is reached (default of ~768px).

.dl-horizontal {
  dd {
    &:extend(.clearfix all); // Clear the floated `dt` if an empty `dd` is present
  }

  @media (min-width: @dl-horizontal-breakpoint) {
    dt {
      float: left;
      width: (@dl-horizontal-offset - 20);
      clear: left;
      text-align: right;
      .text-overflow();
    }
    dd {
      margin-left: @dl-horizontal-offset;
    }
  }
}


// Misc
// -------------------------

// Abbreviations and acronyms
abbr[title],
// Add data-* attribute to help out our tooltip plugin, per https://github.com/twbs/bootstrap/issues/5257
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted @abbr-border-color;
}
.initialism {
  font-size: 90%;
  .text-uppercase();
}

// Blockquotes
blockquote {
  padding: (@line-height-computed / 2) @line-height-computed;
  margin: 0 0 @line-height-computed;
  font-size: @blockquote-font-size;
  border-left: 5px solid @blockquote-border-color;

  p,
  ul,
  ol {
    &:last-child {
      margin-bottom: 0;
    }
  }

  // Note: Deprecated small and .small as of v3.1.0
  // Context: https://github.com/twbs/bootstrap/issues/11660
  footer,
  small,
  .small {
    display: block;
    font-size: 80%; // back to default font-size
    line-height: @line-height-base;
    color: @blockquote-small-color;

    &:before {
      content: '\\2014 \\00A0'; // em dash, nbsp
    }
  }
}

// Opposite alignment of blockquote
//
// Heads up: `blockquote.pull-right` has been deprecated as of v3.1.0.
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid @blockquote-border-color;
  border-left: 0;
  text-align: right;

  // Account for citation
  footer,
  small,
  .small {
    &:before { content: ''; }
    &:after {
      content: '\\00A0 \\2014'; // nbsp, em dash
    }
  }
}

// Addresses
address {
  margin-bottom: @line-height-computed;
  font-style: normal;
  line-height: @line-height-base;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/type.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/type.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/type.less");
    }
}
