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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/en.html.js */
class __TwigTemplate_0da3f9897f0d6d5364737b5f4e217a556381df19cb55fef056fa656d5b48659b extends Template
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
        echo "<h2>Operation Tips</h2>
<p>Operation on the UI is similar to operating system&#39;s standard file manager. However, Drag and Drop is not possible with mobile browsers. </p>
<ul>
\t<li>Right click or long tap to show the context menu.</li>
\t<li>Drag and drop into the folder tree or the current workspace to move/copy items.</li>
\t<li>Item selection in the workspace can be extended selection with Shift or Alt (Option) key.</li>
\t<li>Drag and Drop to the destination folder or workspace to upload files and folders.</li>
\t<li>The upload dialog can accept paste/drop clipboard data or URL lists and Drag and Drop from other browser or file managers etc.</li>
\t<li>Drag start with pressing Alt(Option) key to drag out to outside browser. It will became download operation with Google Chrome.</li>
</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/en.html.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/en.html.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/help/en.html.js");
    }
}
