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

/* @bundles/CoreBundle/Helper/CommandResponse.php */
class __TwigTemplate_25441ce72c3db7153f7342c95e10bd3be0a36c55e7b9ab7600fc5402b4a07bb6 extends Template
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

final class CommandResponse
{
    private int \$statusCode;

    private string \$message;

    public function __construct(int \$statusCode, string \$message)
    {
        \$this->statusCode = \$statusCode;
        \$this->message    = \$message;
    }

    public function getMessage(): string
    {
        return \$this->message;
    }

    public function getStatusCode(): int
    {
        return \$this->statusCode;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/CommandResponse.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/CommandResponse.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/CommandResponse.php");
    }
}
