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

/* @bundles/CoreBundle/Templating/Twig/Extension/VersionExtension.php */
class __TwigTemplate_6088021cf7b44a81869d690cb2adc505b5c2a6d64cfc264275f96294caee66f0 extends Template
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

use Mautic\\CoreBundle\\Helper\\AppVersion;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class VersionExtension extends AbstractExtension
{
    private AppVersion \$appVersion;

    public function __construct(AppVersion \$appVersion)
    {
        \$this->appVersion = \$appVersion;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('mauticAppVersion', [\$this, 'getVersion']),
        ];
    }

    public function getVersion(): string
    {
        return \$this->appVersion->getVersion();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Twig/Extension/VersionExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Twig/Extension/VersionExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Twig/Extension/VersionExtension.php");
    }
}
