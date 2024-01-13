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

/* @bundles/CoreBundle/Assets/css/app/less/components/builder.less */
class __TwigTemplate_40cda1206effb6aee11c4f250e35daeccd5badbfe0323529d9df8e70ea9dfaa9 extends Template
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
        echo "
.builder, .builder-slot {
  position: relative;

  [data-token] {
    cursor: pointer;
  }

  .btn-block.ui-draggable-dragging {
    width: 104px;
    height: 68px;
    margin: 6px 12px;
    white-space: normal;
  }

  .builder-panel-top {
    margin-bottom: 10px;
  }

  .template-dnd-help, .custom-dnd-help {
    display: table-cell;
    vertical-align: middle;
    width: 100%;
  }
}

.builder-active {
  background-color: #fff;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1030;
}

.builder-panel {
  position: fixed;
  top: 0;
  bottom: 0;
  right: 0;
  width: 30%;
  height: 100%;
  padding: 15px;
  background-color: #d5d4d4;
  overflow-y: auto;
}

.builder-content {
  position: fixed;
  left: 0;
  top: 0;
  width: 70%;
  height: 100%;
}

.code-mode {
  .builder-panel {
    width: 50%;
    position: fixed;
  }
  .builder-content {
    width: 50%;
  }
}

.builder-panel .panel a.btn {
  white-space: normal;
}

/********** SLOT ************/

.builder-active-slot {
  background-color: #fff;
  z-index: 1030;
}

.builder-panel-slot {
  width: 50%;
  padding: 15px;
  background-color: #d5d4d4;
  overflow-y: auto;
}

.builder-content-slot {
  left: 50%;
  width: 50%;
}

.code-mode {
  .builder-panel-slot {
    width: 50%;
  }
  .builder-content-slot {
    width: 50%;
  }
}

.builder-panel-slot .panel a.btn {
  white-space: normal;
}

/************* END SLOT ******************/

.ui-draggable-iframeFix {
  z-index: 9999 !important;
}

.CodeMirror {
  border: 1px solid #eee;
  height: auto;
}

.CodeMirror-hints {
  position: absolute;
  z-index: 9999 !important;
  overflow: hidden;
  list-style: none;

  margin: 0;
  padding: 2px;

  -webkit-box-shadow: 2px 3px 5px rgba(0,0,0,.2);
  -moz-box-shadow: 2px 3px 5px rgba(0,0,0,.2);
  box-shadow: 2px 3px 5px rgba(0,0,0,.2);
  border-radius: 3px;
  border: 1px solid silver;

  background: white;
  font-size: 90%;
  font-family: monospace;

  max-height: 20em;
  overflow-y: auto;
}

.CodeMirror-hint {
  margin: 0;
  padding: 0 4px;
  border-radius: 2px;
  white-space: pre;
  color: black;
  cursor: pointer;
}

li.CodeMirror-hint-active {
  background: #08f;
  color: white;
}

@media (max-width: 767px) {
  .builder {
    .builder-panel {
      width: 100%;
      bottom: 0;
      top: auto;
      height: 35%;
      padding-left: 30px !important;
      padding-right: 30px !important;
      border-top: 1px solid #757575;
      position: fixed;
    }
    .builder-content {
      right: 0;
      width: 100%;
    }
    .builder-panel-top {
      position: relative;
      width: 100%;
    }
    .builder-tokens {
      margin-top: 10px;
    }
  }
}

@import \"../../../../builder/builder.less\";";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/builder.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/builder.less", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/css/app/less/components/builder.less");
    }
}
