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

/* @bundles/LeadBundle/Event/ListFieldChoicesEvent.php */
class __TwigTemplate_7a016d3417c9867a35256670aa0421d724b55d1cbf48b70e8b87f057e5b2a450 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Event that collects choices for different list field types.
 */
final class ListFieldChoicesEvent extends Event
{
    /**
     * @var array<string,mixed[]>
     */
    private array \$choicesForTypes = [];

    /**
     * @var array<string,mixed[]>
     */
    private array \$choicesForAliases = [];

    private string \$searchTerm = '';

    /**
     * @param mixed[] \$choices
     */
    public function setChoicesForFieldType(string \$fieldType, array \$choices): void
    {
        \$this->choicesForTypes[\$fieldType] = \$choices;
    }

    /**
     * @param mixed[] \$choices
     */
    public function setChoicesForFieldAlias(string \$fieldAlias, array \$choices): void
    {
        \$this->choicesForAliases[\$fieldAlias] = \$choices;
    }

    /**
     * @return array<string,mixed[]>
     */
    public function getChoicesForAllListFieldTypes(): array
    {
        return \$this->choicesForTypes;
    }

    /**
     * @return array<string,mixed[]>
     */
    public function getChoicesForAllListFieldAliases(): array
    {
        return \$this->choicesForAliases;
    }

    public function setSearchTerm(string \$searchTerm): void
    {
        \$this->searchTerm = \$searchTerm;
    }

    public function getSearchTerm(): string
    {
        return \$this->searchTerm;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/ListFieldChoicesEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ListFieldChoicesEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/ListFieldChoicesEvent.php");
    }
}
