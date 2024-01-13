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

/* @bundles/LeadBundle/Provider/TypeOperatorProvider.php */
class __TwigTemplate_c9b0d8bd4b1ecdb8e7cde1d846b9115e4db3c2fdcbbb012ba29df2887c723b2b extends Template
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

use Mautic\\LeadBundle\\Entity\\OperatorListTrait;
use Mautic\\LeadBundle\\Event\\FieldOperatorsEvent;
use Mautic\\LeadBundle\\Event\\TypeOperatorsEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class TypeOperatorProvider implements TypeOperatorProviderInterface
{
    use OperatorListTrait;

    private EventDispatcherInterface \$dispatcher;

    private FilterOperatorProviderInterface \$filterOperatorProvider;

    /**
     * @var array<string,mixed[]>
     */
    private array \$cachedTypeOperators = [];

    /**
     * @var array<string,mixed[]>
     */
    private array \$cachedTypeOperatorsChoices = [];

    public function __construct(
        EventDispatcherInterface \$dispatcher,
        FilterOperatorProviderInterface \$filterOperatorProvider
    ) {
        \$this->dispatcher             = \$dispatcher;
        \$this->filterOperatorProvider = \$filterOperatorProvider;
    }

    public function getOperatorsIncluding(array \$operators): array
    {
        return \$this->getOperatorChoiceList(['include' => \$operators]);
    }

    public function getOperatorsExcluding(array \$operators): array
    {
        return \$this->getOperatorChoiceList(['exclude' => \$operators]);
    }

    public function getOperatorsForFieldType(string \$fieldType): array
    {
        // If we already processed this
        if (isset(\$this->cachedTypeOperatorsChoices[\$fieldType])) {
            return \$this->cachedTypeOperatorsChoices[\$fieldType];
        }

        \$typeOperators = \$this->getAllTypeOperators();

        if (array_key_exists(\$fieldType, \$typeOperators)) {
            \$this->cachedTypeOperatorsChoices[\$fieldType] = \$this->getOperatorChoiceList(\$typeOperators[\$fieldType]);
        } else {
            \$this->cachedTypeOperatorsChoices[\$fieldType] = \$this->getOperatorChoiceList(\$typeOperators['default']);
        }

        return \$this->cachedTypeOperatorsChoices[\$fieldType];
    }

    public function getAllTypeOperators(): array
    {
        if (empty(\$this->cachedTypeOperators)) {
            \$event = new TypeOperatorsEvent();

            \$this->dispatcher->dispatch(LeadEvents::COLLECT_OPERATORS_FOR_FIELD_TYPE, \$event);

            \$this->cachedTypeOperators = \$event->getOperatorsForAllFieldTypes();
        }

        return \$this->cachedTypeOperators;
    }

    /**
     * This method will add the default operators for the \$type like the getOperatorsForFieldType() method
     * but also allows plugins to add more operators.
     *
     * @return array<string,string>
     */
    public function getOperatorsForField(string \$type, string \$field): array
    {
        \$event = new FieldOperatorsEvent(
            \$type,
            \$field,
            \$this->filterOperatorProvider->getAllOperators(),
            \$this->getOperatorsForFieldType(\$type)
        );

        \$this->dispatcher->dispatch(LeadEvents::COLLECT_OPERATORS_FOR_FIELD, \$event);

        return \$event->getOperators();
    }

    /**
     * Overwriting deprecated method from OperatorListTrait.
     *
     * @param string \$operator
     *
     * @return array<string,mixed[]>
     */
    public function getFilterExpressionFunctions(\$operator = null)
    {
        \$operatorOptions = \$this->filterOperatorProvider->getAllOperators();

        return (null === \$operator) ? \$operatorOptions : \$operatorOptions[\$operator];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Provider/TypeOperatorProvider.php";
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
        return new Source("", "@bundles/LeadBundle/Provider/TypeOperatorProvider.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Provider/TypeOperatorProvider.php");
    }
}
