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

/* @bundles/MarketplaceBundle/Model/ConsoleOutputModel.php */
class __TwigTemplate_7561fbd2fa7e47346566badc5c8b6f01b0fb70bb525fcbbf415624867a185945 extends Template
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

namespace Mautic\\MarketplaceBundle\\Model;

class ConsoleOutputModel
{
    /**
     * Console exit code. 0 when everything went fine, or an error code.
     */
    public int \$exitCode;
    public string \$output;

    public function __construct(int \$exitCode, string \$output)
    {
        \$this->exitCode = \$exitCode;
        \$this->output   = \$output;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Model/ConsoleOutputModel.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Model/ConsoleOutputModel.php", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Model/ConsoleOutputModel.php");
    }
}
