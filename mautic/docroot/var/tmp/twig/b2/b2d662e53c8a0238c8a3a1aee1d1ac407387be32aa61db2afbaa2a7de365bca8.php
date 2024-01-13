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

/* @bundles/CoreBundle/Templating/Helper/VersionHelper.php */
class __TwigTemplate_1aa8dfa31739e629620e212c304c9df3cb86d5726a4a9c1728d594d0ad1bcd71 extends Template
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

namespace Mautic\\CoreBundle\\Templating\\Helper;

use Mautic\\CoreBundle\\Helper\\AppVersion;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * Class VersionHelper.
 */
class VersionHelper extends Helper
{
    /**
     * @var AppVersion
     */
    private \$appVersion;

    public function __construct(AppVersion \$appVersion)
    {
        \$this->appVersion = \$appVersion;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'version';
    }

    /**
     * @return string
     */
    public function getVersion()
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
        return "@bundles/CoreBundle/Templating/Helper/VersionHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Helper/VersionHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Helper/VersionHelper.php");
    }
}
