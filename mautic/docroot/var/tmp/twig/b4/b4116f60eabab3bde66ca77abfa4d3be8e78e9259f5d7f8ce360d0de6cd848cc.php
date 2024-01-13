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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/less/media.less */
class __TwigTemplate_1d039e7a48db80f0e0974c7dad1b17658ba2f9fdef032cc4aca644b436708ecd extends Template
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
        echo ".media {
  // Proper spacing between instances of .media
  margin-top: 15px;

  &:first-child {
    margin-top: 0;
  }
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

  // Fix collapse in webkit from max-width: 100% and display: table-cell.
  &.img-thumbnail {
    max-width: none;
  }
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

// Reset margins on headings for tighter default spacing
.media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}

// Media list variation
//
// Undo default ul/ol styles
.media-list {
  padding-left: 0;
  list-style: none;
  .media-body {
    width: auto;
  }
  .media-object{
    padding-right: 0;
    margin-right: 10px;
  }
}

// Contact image
form[name=\"lead\"] {
  .media-body {
    width: 100%;
  }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/media.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/less/media.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/libraries/bootstrap/less/media.less");
    }
}
