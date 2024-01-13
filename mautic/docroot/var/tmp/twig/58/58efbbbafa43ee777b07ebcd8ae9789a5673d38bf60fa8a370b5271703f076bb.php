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

/* @bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckResult.php */
class __TwigTemplate_3e9cbdf0b27c67f3c414decaae41a8aa60cbe2a46a66a92bd03ca0d995b38ad5 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks;

use InvalidArgumentException;

class PreUpdateCheckResult
{
    public bool \$success;
    public ?AbstractPreUpdateCheck \$check;

    /**
     * @var PreUpdateCheckError[]
     */
    public array \$errors;

    /**
     * @param PreUpdateCheckError[] \$errors
     */
    public function __construct(bool \$success, ?AbstractPreUpdateCheck \$check, array \$errors = [])
    {
        \$this->success = \$success;
        \$this->check   = \$check;

        foreach (\$errors as \$error) {
            if (!(\$error instanceof PreUpdateCheckError)) {
                throw new InvalidArgumentException('Error must be of type PreUpdateCheckError');
            }
        }

        \$this->errors = \$errors;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckResult.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckResult.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckResult.php");
    }
}
