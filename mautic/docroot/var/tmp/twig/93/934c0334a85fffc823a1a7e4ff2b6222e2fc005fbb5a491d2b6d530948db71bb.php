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

/* @bundles/CoreBundle/Entity/UpsertInterface.php */
class __TwigTemplate_53cf24e41d78bf8909cf72eea54de5be5704e792382afb92f84d2c73fbe8ddcf extends Template
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

namespace Mautic\\CoreBundle\\Entity;

interface UpsertInterface
{
    public const ROWS_AFFECTED_ON_INSERT = 1;
    public const ROWS_AFFECTED_ON_UPDATE = 2;

    public function hasBeenInserted(): bool;

    public function hasBeenUpdated(): bool;

    public function setHasBeenUpdated(bool \$hasBeenUpdated): void;

    public function setHasBeenInserted(bool \$hasBeenInserted): void;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Entity/UpsertInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/UpsertInterface.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Entity/UpsertInterface.php");
    }
}
