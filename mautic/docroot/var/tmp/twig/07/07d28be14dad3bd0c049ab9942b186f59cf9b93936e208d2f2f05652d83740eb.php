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

/* @bundles/CoreBundle/Assets/css/app/less/components/steps.less */
class __TwigTemplate_37f4ed665aab253b6cfa1e71fc92a4a0ae3b93be621739a60aff1c34d65d7f49 extends Template
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
// Steps
// --------------------------------------------------

.step {
  padding: 0;
  margin: 0;

  // step list
  > li {
    list-style: none;
    + li {
      margin-top: 15px;

      // steps line
      .steps:after {
        content: \"\";
        position: absolute;
        left: @input-height-base / 2;
        top: -15px;
        height: 15px;
        width: 1px;
        background-color: @gray-light;
      }
    }

    // steps active state
    &.active {
      .steps {
        color: @text-color;
        > .steps-figure {
          border-color: @text-color;
        }
      }
      a.steps {
        &:hover,
        &:focus {
          color: @text-color;
          > .steps-figure {
            border-color: @text-color;
          }
        }
      }
    }

    // anchored steps
    a.steps {
      &:hover,
      &:focus {
        color: darken(@gray-light, 10%);
        > .steps-figure {
          border-color: darken(@gray-light, 10%);
        }
      }
    }
  }

  // the steps
  // -------------------------
  .steps {
    position: relative;
    display: inline-block;
    color: @gray-light;

    // steps figure
    > .steps-figure {
      display: inline-block;
      .square(@input-height-base);
      text-align: center;
      font-size: 14px;
      line-height: @input-height-base - 4;
      border-radius: 50%;
      border: 2px solid @gray-light;
      + .steps-text {
        margin-left: 5px;
      }
    }

    // steps text
    > .steps-text {
      + .steps-figure {
        margin-left: 5px;
      }
    }
  }
}

.horizontal-step {
  padding: 0;
  margin: 0;
  // step list
  > li {
    list-style: none;
    display: inline;
    + li {
      margin-left: 15px;
      // steps line
      .steps:after {
        content: \"\";
        position: absolute;
        left: -18px;
        top: @input-height-base / 2;
        height: 1px;
        width: 18px;
        background-color: @gray-light;
      }
    }

    // steps active state
    &.active {
      .steps {
        color: @text-color;
        > .steps-figure {
          border-color: @text-color;
        }
      }
      a.steps {
        &:hover,
        &:focus {
          color: @text-color;
          > .steps-figure {
            border-color: @text-color;
          }
        }
      }
    }

    // anchored steps
    a.steps {
      &:hover,
      &:focus {
        color: darken(@gray-light, 10%);
        > .steps-figure {
          border-color: darken(@gray-light, 10%);
        }
      }
      &.disabled {
        color: lighten(@gray-light, 10%);
        > .steps-figure {
          border-color: lighten(@gray-light, 10%);
        }
        &:hover {
          color: lighten(@gray-light, 10%);
          cursor: not-allowed;
          > .steps-figure {
            border-color: lighten(@gray-light, 10%);
          }
        }
      }
    }
  }

  // the steps
  // -------------------------
  .steps {
    position: relative;
    display: inline-block;
    color: @gray-light;

    // steps figure
    > .steps-figure {
      display: inline-block;
      .square(@input-height-base);
      text-align: center;
      font-size: 14px;
      line-height: @input-height-base - 4;
      border-radius: 50%;
      border: 2px solid @gray-light;
      + .steps-text {
        margin-left: 5px;
      }
    }

    // steps text
    > .steps-text {
      + .steps-figure {
        margin-left: 5px;
      }
    }
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/steps.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/steps.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/steps.less");
    }
}
