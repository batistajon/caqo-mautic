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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/tables.less */
class __TwigTemplate_3d39a682c891c0fbf957ccbd5442560c8360a3b048faa60bfae3d980d9173e04 extends Template
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
// Tables
// --------------------------------------------------


table {
  background-color: @table-bg;
}
caption {
  padding-top: @table-cell-padding;
  padding-bottom: @table-cell-padding;
  color: @text-muted;
  text-align: left;
}
th {
  text-align: left;
}


// Baseline styles

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: @line-height-computed;
  // Cells
  > thead,
  > tbody,
  > tfoot {
    > tr {
      > th,
      > td {
        padding: @table-cell-padding;
        line-height: @line-height-base;
        vertical-align: top;
        border-top: 1px solid @table-border-color;
      }
    }
  }
  // Bottom align for column headings
  > thead > tr > th {
    vertical-align: bottom;
    border-bottom: 2px solid @table-border-color;
  }
  // Remove top border from thead by default
  > caption + thead,
  > colgroup + thead,
  > thead:first-child {
    > tr:first-child {
      > th,
      > td {
        border-top: 0;
      }
    }
  }
  // Account for multiple tbody instances
  > tbody + tbody {
    border-top: 2px solid @table-border-color;
  }

  // Nesting
  .table {
    background-color: @body-bg;
  }
}


// Condensed table w/ half padding

.table-condensed {
  > thead,
  > tbody,
  > tfoot {
    > tr {
      > th,
      > td {
        padding: @table-condensed-cell-padding;
      }
    }
  }
}


// Bordered version
//
// Add borders all around the table and between all the columns.

.table-bordered {
  border: 1px solid @table-border-color;
  > thead,
  > tbody,
  > tfoot {
    > tr {
      > th,
      > td {
        border: 1px solid @table-border-color;
      }
    }
  }
  > thead > tr {
    > th,
    > td {
      border-bottom-width: 2px;
    }
  }
}


// Zebra-striping
//
// Default zebra-stripe styles (alternating gray and transparent backgrounds)

.table-striped {
  > tbody > tr:nth-of-type(odd) {
    background-color: @table-bg-accent;
  }
}


// Hover effect
//
// Placed here since it has to come after the potential zebra striping

.table-hover {
  > tbody > tr:hover {
    background-color: @table-bg-hover;
  }
}


// Table cell sizing
//
// Reset default table behavior

table col[class*=\"col-\"] {
  position: static; // Prevent border hiding in Firefox and IE9-11 (see https://github.com/twbs/bootstrap/issues/11623)
  float: none;
  display: table-column;
}
table {
  td,
  th {
    &[class*=\"col-\"] {
      position: static; // Prevent border hiding in Firefox and IE9-11 (see https://github.com/twbs/bootstrap/issues/11623)
      float: none;
      display: table-cell;
    }
  }
}


// Table backgrounds
//
// Exact selectors below required to override `.table-striped` and prevent
// inheritance to nested tables.

// Generate the contextual variants
.table-row-variant(active; @table-bg-active);
.table-row-variant(success; @state-success-bg);
.table-row-variant(info; @state-info-bg);
.table-row-variant(warning; @state-warning-bg);
.table-row-variant(danger; @state-danger-bg);


// Responsive tables
//
// Wrap your tables in `.table-responsive` and we'll make them mobile friendly
// by enabling horizontal scrolling. Only applies <768px. Everything above that
// will display normally.

.table-responsive {
  overflow-x: auto;
  min-height: 0.01%; // Workaround for IE9 bug (see https://github.com/twbs/bootstrap/issues/14837)

  @media screen and (max-width: @screen-xs-max) {
    width: 100%;
    margin-bottom: (@line-height-computed * 0.75);
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid @table-border-color;

    // Tighten up spacing
    > .table {
      margin-bottom: 0;

      // Ensure the content doesn't wrap
      > thead,
      > tbody,
      > tfoot {
        > tr {
          > th,
          > td {
            white-space: nowrap;
          }
        }
      }
    }

    // Special overrides for the bordered tables
    > .table-bordered {
      border: 0;

      // Nuke the appropriate borders so that the parent can handle them
      > thead,
      > tbody,
      > tfoot {
        > tr {
          > th:first-child,
          > td:first-child {
            border-left: 0;
          }
          > th:last-child,
          > td:last-child {
            border-right: 0;
          }
        }
      }

      // Only nuke the last row's bottom-border in `tbody` and `tfoot` since
      // chances are there will be only one `tr` in a `thead` and that would
      // remove the border altogether.
      > tbody,
      > tfoot {
        > tr:last-child {
          > th,
          > td {
            border-bottom: 0;
          }
        }
      }

    }
  }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/tables.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/tables.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/tables.less");
    }
}
