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

/* @bundles/CoreBundle/Event/BuildJsEvent.php */
class __TwigTemplate_cb6b76bd3b7f137a5c24d895c131ea12390f91630cbc91bab46d71bb88990741 extends Template
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

use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class BuildJsEvent.
 */
class BuildJsEvent extends Event
{
    /**
     * @var string
     */
    protected \$js = '';

    /**
     * @var bool
     */
    protected \$debugMode;

    /**
     * @param bool \$debugMode
     */
    public function __construct(\$js, \$debugMode = false)
    {
        \$this->js        = \$js;
        \$this->debugMode = \$debugMode;
    }

    /**
     * @return string
     */
    public function getJs()
    {
        return \$this->debugMode ? \$this->js : \\JSMin::minify(\$this->js);
    }

    /**
     * Append JS.
     *
     * @param string \$js
     * @param string \$section The section name. Shows when in debug mode
     *
     * @return \$this
     */
    public function appendJs(\$js, \$section = '')
    {
        if (\$section && \$this->debugMode) {
            \$slashes = str_repeat('/', strlen(\$section) + 10);
            \$this->js .= <<<JS
\\n
{\$slashes}
// {\$section} Start
{\$slashes}
\\n
JS;
        }

        \$this->js .= \$js;

        if (\$section && \$this->debugMode) {
            \$this->js .= <<<JS
\\n
{\$slashes}
// {\$section} End
{\$slashes}
JS;
        }

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/BuildJsEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/BuildJsEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/BuildJsEvent.php");
    }
}
