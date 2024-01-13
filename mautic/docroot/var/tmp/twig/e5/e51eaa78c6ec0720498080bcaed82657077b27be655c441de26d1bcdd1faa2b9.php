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

/* @bundles/CoreBundle/Helper/ExitCode.php */
class __TwigTemplate_8ae70adbfa9bbdd4f93b2a900317c8ff78d6a2c575f4090c489ac8d4433233c1 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

/**
 * Holds exit code constants for commands.
 */
final class ExitCode
{
    /**
     * The command completed successfully.
     */
    public const SUCCESS = 0;

    /**
     * The command exited with some kind of error.
     */
    public const FAILURE = 1;

    /**
     * Indicating something that is not really an error. This means that a mailer
     * (e.g.) could not create a connection, and the request should be reattempted later.
     */
    public const TEMPORARY_FAILURE = 75;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/ExitCode.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ExitCode.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/ExitCode.php");
    }
}
