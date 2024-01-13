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

/* @bundles/CoreBundle/Entity/UpsertTrait.php */
class __TwigTemplate_9667c9a60b70a1145ea1161769cb9afc16937ecc5cc5d27f95a46ca811c0ca0c extends Template
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

trait UpsertTrait
{
    /*
     * This file has been added to the list of excluded files in phpstan.neon, since it is (currently) not being used in a entity.
     * When using this trait in an entity, make sure you
     * 1. Remove this comment
     * 2. Remove it from the list of excluded files in phpstan.neon
     */
    private bool \$hasBeenInserted = false;
    private bool \$hasBeenUpdated  = false;

    public function hasBeenInserted(): bool
    {
        return \$this->hasBeenInserted;
    }

    public function hasBeenUpdated(): bool
    {
        return \$this->hasBeenUpdated;
    }

    public function setHasBeenInserted(bool \$hasBeenInserted): void
    {
        \$this->hasBeenInserted = \$hasBeenInserted;
    }

    public function setHasBeenUpdated(bool \$hasBeenUpdated): void
    {
        \$this->hasBeenUpdated = \$hasBeenUpdated;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Entity/UpsertTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/UpsertTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Entity/UpsertTrait.php");
    }
}
