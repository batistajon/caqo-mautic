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

/* @bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/scayt/dialogs/dialog.css */
class __TwigTemplate_d31a1a71da71b09193ab3809d6f2e817ebab002818bc93e17d361389e57837ee extends Template
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
        echo "div.cke_dialog_ui_scaytItemList {
\tborder: 1px solid #c9cccf;
}

.cke_scaytItemList-child {
\tposition: relative;
\tpadding: 6px 30px 6px 5px;
\toverflow: hidden;
\ttext-overflow: ellipsis;
\twhite-space: nowrap;
}

.cke_scaytItemList-child:hover {
\tbackground: #ebebeb;
}

.cke_scaytItemList-child .cke_scaytItemList_remove {
\tposition: absolute;
\ttop: 0;
\tright: 5px;
\twidth: 26px;
\theight: 26px;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/scayt/dialogs/dialog.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/scayt/dialogs/dialog.css", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/ckeditor/plugins/scayt/dialogs/dialog.css");
    }
}
