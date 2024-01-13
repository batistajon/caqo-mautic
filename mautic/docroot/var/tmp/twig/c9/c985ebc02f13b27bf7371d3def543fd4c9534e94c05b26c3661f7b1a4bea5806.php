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

/* @bundles/InstallBundle/Exception/DatabaseVersionTooOldException.php */
class __TwigTemplate_d6741817b9869161a9ff6fc5c7c48a9fdf69ffeae11e2eec61dfd24d477efa12 extends Template
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

namespace Mautic\\InstallBundle\\Exception;

class DatabaseVersionTooOldException extends \\Exception
{
    private string \$currentVersion;

    public function __construct(string \$currentVersion)
    {
        parent::__construct();
        \$this->currentVersion = \$currentVersion;
    }

    /**
     * Returns the current database version as reported by the database itself.
     */
    public function getCurrentVersion(): string
    {
        return \$this->currentVersion;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Exception/DatabaseVersionTooOldException.php";
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
        return new Source("", "@bundles/InstallBundle/Exception/DatabaseVersionTooOldException.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Exception/DatabaseVersionTooOldException.php");
    }
}
