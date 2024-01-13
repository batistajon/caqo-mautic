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

/* @bundles/CoreBundle/Templating/Twig/Extension/AssetExtension.php */
class __TwigTemplate_874bf7d3e74606da93f8507f97678635ce37aaa1dca41565de9f2adf3a68e06a extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Templating\\Twig\\Extension;

use Mautic\\CoreBundle\\Templating\\Helper\\AssetsHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class AssetExtension extends AbstractExtension
{
    /**
     * @var AssetsHelper
     */
    protected \$assetsHelper;

    /**
     * AssetExtension constructor.
     */
    public function __construct(AssetsHelper \$assetsHelper)
    {
        \$this->assetsHelper = \$assetsHelper;
    }

    /**
     * @see Twig_Extension::getFunctions()
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('outputScripts', [\$this, 'outputScripts'], ['is_safe' => ['all']]),
            new TwigFunction('outputHeadDeclarations', [\$this, 'outputHeadDeclarations'], ['is_safe' => ['all']]),
            new TwigFunction('getAssetUrl', [\$this, 'getAssetUrl'], ['is_safe' => ['html']]),
            new TwigFunction('outputStyles', [\$this, 'outputStyles'], ['is_safe' => ['html']]),
            new TwigFunction('outputSystemScripts', [\$this, 'outputSystemScripts'], ['is_safe' => ['html']]),
            new TwigFunction('outputSystemStylesheets', [\$this, 'outputSystemStylesheets'], ['is_safe' => ['html']]),
            new TwigFunction('assetsGetImagesPath', [\$this, 'getImagesPath']),
            new TwigFunction('assetsGetPrefix', [\$this, 'getAssetPrefix']),
        ];
    }

    public function getName()
    {
        return 'coreasset';
    }

    public function outputSystemStylesheets(): string
    {
        ob_start();

        \$this->assetsHelper->outputSystemStylesheets();

        return ob_get_clean();
    }

    /**
     * @param bool \$includeEditor
     */
    public function outputSystemScripts(\$includeEditor = false): string
    {
        ob_start();

        \$this->assetsHelper->outputSystemScripts(\$includeEditor);

        return ob_get_clean();
    }

    public function outputScripts(\$name): string
    {
        ob_start();

        \$this->assetsHelper->outputScripts(\$name);

        return ob_get_clean();
    }

    public function outputStyles(): string
    {
        ob_start();

        \$this->assetsHelper->outputStyles();

        return ob_get_clean();
    }

    public function outputHeadDeclarations(): string
    {
        ob_start();

        \$this->assetsHelper->outputHeadDeclarations();

        return ob_get_clean();
    }

    public function getAssetUrl(\$path, \$packageName = null, \$version = null, \$absolute = false, \$ignorePrefix = false): string
    {
        return \$this->assetsHelper->getUrl(\$path, \$packageName, \$version, \$absolute, \$ignorePrefix);
    }

    public function getImagesPath(): string
    {
        return \$this->assetsHelper->getImagesPath();
    }

    public function getAssetPrefix(bool \$includeEndingslash = false): string
    {
        return \$this->assetsHelper->getAssetPrefix(\$includeEndingslash);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Twig/Extension/AssetExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Twig/Extension/AssetExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Twig/Extension/AssetExtension.php");
    }
}
