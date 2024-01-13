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

/* @bundles/CoreBundle/Assets/css/app/less/components/media.less */
class __TwigTemplate_22950d58a851e7e486c57fb0cca6a3eb6d35460f5464cfe7e0c4a3af7a0da550 extends Template
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
// Media objects
// --------------------------------------------------

// Common styles
a.media {
  display: block;
}
.media {
  > a {
    display: block;
  }
  &.read {
    opacity: .8;
    a {
      color: lighten(@text-color, 5%);
    }
  }
  &.new {
    background-color: lighten(@gray-lighter, 4%);
  }
}
.notification .media-body {
  display: table-cell;
}
.media-body {
  display: block;
}

.media-heading {
  display: block;
  > .bullet {
    margin-top: -1px;
  }
}

// Media list variation
// -------------------------

// Media list feed
.media-list {
  &.media-list-feed {
    position: relative;
    .media {
      overflow: visible;
      > .media-object {
        position: relative;
        width: 28px;
        text-align: center;
        &:before {
          content: '';
          position: absolute;
          top: -200%;
          bottom: -200%;
          width: 1px;
          left: 50%;
          .lh-background-image(linear-gradient(top,  rgba(255,255,255,0) 0%, rgba(229,229,229,1) 10%, rgba(229,229,229,1) 90%, rgba(229,229,229,0) 100%));
        }

        > .figure {
          position: relative;
          z-index: 5;
          display: inline-block;
          width: 14px;
          height: 14px;
          text-align: center;
          font-size: 12px;
          border-radius: 50%;
          background-color: darken(@hr-border, 5%);

          &.featured {
            width: 20px;
            height: 20px;
            line-height: 19px;
          }
        }
      }
      &:first-child {
        > .media-object {
          &:before { top: 0; }
        }
      }
    }
  }
}

// Media list contact
.media-list {
  &.media-list-contact {
    > .media-heading {
      padding: 15px 15px 5px;
      font-weight: 600;
      font-size: 12px;
      margin-bottom: 0;
    }
    > .media {
      margin: 0;
      border-bottom: 1px solid rgba(0,0,0,0.05);
      a {
        padding: 10px 15px;
        &:hover,
        &:focus {
          background-color: transparent;
        }
      }
    }
  }
}

// Media list chat bubbles
.media-list {
  &.media-list-bubble {
    > .media {
      padding: 15px;

      &:after {
        display: none;
      }

      .media-object {
        position: relative;
        float: left;
        margin-right: 15px;

        &:after {
          content: \"\";
          position: absolute;
          top: 7px;
          right: -18px;

          width: 0px;
          height: 0px;
          border-style: solid;
          border-width: 10px 10px 10px 0;
          border-color: transparent lighten(#eee, 2%) transparent transparent;
        }
      }

      .media-body {
        .media-text {
          display: inline-block;
          padding: 8px;
          color: lighten(@text-color, 5%);
          background-color: lighten(#eee, 2%);
          border-radius: @border-radius-base;
        }
      }

      &.media-right {
        .media-object {
          float: right;
          margin-left: 15px;
          margin-right: 0px;

          &:after {
            left: -18px;
            right: auto;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent @brand-primary;
          }
        }
        .media-body {
          text-align: right;
          .media-text {
            color: darken(#fff, 5%);
            background-color: @brand-primary;
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
        return "@bundles/CoreBundle/Assets/css/app/less/components/media.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/media.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/media.less");
    }
}
