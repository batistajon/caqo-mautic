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

/* @bundles/LeadBundle/Provider/FieldChoicesProvider.php */
class __TwigTemplate_f92c10e449ad19cac65e449550bb724256b289a165331e3d151f337c04e9d82d extends Template
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

namespace Mautic\\LeadBundle\\Provider;

use Mautic\\LeadBundle\\Event\\ListFieldChoicesEvent;
use Mautic\\LeadBundle\\Exception\\ChoicesNotFoundException;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class FieldChoicesProvider implements FieldChoicesProviderInterface
{
    private EventDispatcherInterface \$dispatcher;

    /**
     * @var mixed[]
     */
    private array \$cachedTypeChoices = [];

    /**
     * @var mixed[]
     */
    private array \$cachedAliasChoices = [];

    public function __construct(EventDispatcherInterface \$dispatcher)
    {
        \$this->dispatcher = \$dispatcher;
    }

    /**
     * @return mixed[]
     */
    public function getChoicesForField(string \$fieldType, string \$fieldAlias, string \$search = ''): array
    {
        \$aliasChoices = \$this->getAllChoicesForListFieldAliases(\$search);
        \$typeChoices  = \$this->getAllChoicesForListFieldTypes();

        if (isset(\$aliasChoices[\$fieldAlias])) {
            return \$aliasChoices[\$fieldAlias];
        }

        if (isset(\$typeChoices[\$fieldType])) {
            return \$typeChoices[\$fieldType];
        }

        throw new ChoicesNotFoundException(\"No choices for field type {\$fieldType} nor alias {\$fieldAlias} were found\");
    }

    /**
     * @return mixed[]
     */
    private function getAllChoicesForListFieldTypes(): array
    {
        \$this->lookForFieldChoices();

        return \$this->cachedTypeChoices;
    }

    /**
     * @return mixed[]
     */
    private function getAllChoicesForListFieldAliases(string \$search = ''): array
    {
        \$this->lookForFieldChoices(\$search);

        return \$this->cachedAliasChoices;
    }

    private function lookForFieldChoices(string \$search = ''): void
    {
        if (empty(\$this->cachedTypeChoices)) {
            \$event = new ListFieldChoicesEvent();
            \$event->setSearchTerm(\$search);
            \$this->dispatcher->dispatch(LeadEvents::COLLECT_FILTER_CHOICES_FOR_LIST_FIELD_TYPE, \$event);

            \$this->cachedTypeChoices  = \$event->getChoicesForAllListFieldTypes();
            \$this->cachedAliasChoices = \$event->getChoicesForAllListFieldAliases();
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Provider/FieldChoicesProvider.php";
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
        return new Source("", "@bundles/LeadBundle/Provider/FieldChoicesProvider.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Provider/FieldChoicesProvider.php");
    }
}
