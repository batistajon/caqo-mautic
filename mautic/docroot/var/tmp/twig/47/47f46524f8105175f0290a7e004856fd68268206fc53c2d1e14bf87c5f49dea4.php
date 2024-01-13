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

/* @bundles/CoreBundle/Event/SidebarCanvasEvent.php */
class __TwigTemplate_501e98d732f0657e463c126c18a837396cc911b2e4d17ee3c2181982d51a1c46 extends Template
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
        echo "<?php

namespace Mautic\\CoreBundle\\Event;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine;
use Symfony\\Component\\EventDispatcher\\Event;

/**
 * @deprecated Deprecated in Mautic 4.3. Will be removed in Mautic 5.0
 */
class SidebarCanvasEvent extends Event
{
    /**
     * @var array
     */
    private \$sections = ['header', 'footer', 'content'];

    /**
     * @var array
     */
    private \$left = [];

    /**
     * @var array
     */
    private \$right = [];

    /**
     * @var PhpEngine
     */
    private \$templating;

    /**
     * @var array
     */
    private \$main = [];

    public function __construct(PhpEngine \$templating)
    {
        \$this->templating = \$templating;
    }

    /**
     * Insert content into left canvas.
     */
    public function pushToLeftCanvas(array \$sections)
    {
        \$this->setCanvasSection('left', \$sections);
    }

    /**
     * Insert content into right canvas.
     */
    public function pushToRightCanvas(array \$sections)
    {
        \$this->setCanvasSection('right', \$sections);
    }

    /**
     * Insert content into main canvas.
     *
     * Note that header is not allowed for main
     */
    public function pushToMainCanvas(array \$sections)
    {
        \$this->setCanvasSection('main', \$sections);
    }

    /**
     * @param \$canvas
     * @param \$sections
     */
    private function setCanvasSection(\$canvas, \$sections)
    {
        \$canvasSections = [];
        foreach (\$this->sections as \$section) {
            \$canvasSections[\$section] = (isset(\$sections[\$section])) ? \$sections[\$section] : '';
        }

        \$this->{\$canvas} = \$canvasSections;
    }

    /**
     * Get the canvas sections.
     *
     * @param null \$canvas
     *
     * @return array
     */
    public function getCanvasContent(\$canvas = null)
    {
        if (\$canvas) {
            return \$this->\$canvas;
        } else {
            return [
                'left'  => \$this->left,
                'right' => \$this->right,
                'main'  => \$this->main,
            ];
        }
    }

    /**
     * @return mixed
     */
    public function getTemplating()
    {
        return \$this->templating;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/SidebarCanvasEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/SidebarCanvasEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/SidebarCanvasEvent.php");
    }
}
