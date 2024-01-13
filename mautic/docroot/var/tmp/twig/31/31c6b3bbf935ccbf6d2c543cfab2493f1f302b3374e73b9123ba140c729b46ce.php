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

/* @bundles/CoreBundle/Event/CustomAssetsEvent.php */
class __TwigTemplate_81e207d3d1173ff19dcfd99f9b62494b05c7c8d7b81221d3d34a2d0f03226d7a extends Template
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

use Mautic\\CoreBundle\\Templating\\Helper\\AssetsHelper;
use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class CustomAssetsEvent.
 */
class CustomAssetsEvent extends Event
{
    /**
     * @var AssetsHelper
     */
    protected \$assetsHelper;

    /**
     * CustomAssetsEvent constructor.
     */
    public function __construct(AssetsHelper \$assetsHelper)
    {
        \$this->assetsHelper = \$assetsHelper;
    }

    /**
     * @param        \$declaration
     * @param string \$location
     * @param string \$context
     */
    public function addCustomDeclaration(\$declaration, \$location = 'head', \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addCustomDeclaration(\$declaration, \$location)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
    }

    /**
     * @param        \$script
     * @param string \$location
     * @param bool   \$async
     * @param null   \$name
     * @param string \$context
     */
    public function addScript(\$script, \$location = 'head', \$async = false, \$name = null, \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addScript(\$script, \$location, \$async, \$name)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
    }

    /**
     * @param        \$script
     * @param string \$location
     * @param string \$context
     */
    public function addScriptDeclaration(\$script, \$location = 'head', \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addScriptDeclaration(\$script, \$location, \$context)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
    }

    /**
     * @param        \$stylesheet
     * @param string \$context
     */
    public function addStylesheet(\$stylesheet, \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addStylesheet(\$stylesheet)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
    }

    /**
     * @param        \$styles
     * @param string \$context
     */
    public function addStyleDeclaration(\$styles, \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addStyleDeclaration(\$styles)
            ->setContext(AssetsHelper::CONTEXT_APP);

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
        return "@bundles/CoreBundle/Event/CustomAssetsEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/CustomAssetsEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/CustomAssetsEvent.php");
    }
}
