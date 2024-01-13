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

/* @bundles/LeadBundle/Event/FieldOperatorsEvent.php */
class __TwigTemplate_449fde48baac1c57170c5172d8100d39cabb85f2d7f6b701b8b53e7db896b317 extends Template
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
 * Event that collects operators for a specific field.
 */
final class FieldOperatorsEvent extends Event
{
    private string \$type;

    private string \$field;

    /**
     * @var array<string,string>
     */
    private array \$operators;

    /**
     * @var array<string,array<string,string>>
     */
    private array \$allOperators;

    /**
     * \$allOperators example:
     * [
     *      '=' => [
     *          'label' => 'equals',
     *          'expr' => 'eq',
     *          'negate_expr' => 'neq',
     *      ],
     *      '!=' => [
     *          'label' => 'not equal',
     *          'expr' => 'neq',
     *          'negate_expr' => 'eq',
     *      ],
     *  ];.
     *
     * \$defaultOperators example:
     * [
     *      'equals' => '=',
     *      'not equal' => '!='
     * ]
     *
     * @param array<string,string>               \$defaultOperators
     * @param array<string,array<string,string>> \$allOperators
     */
    public function __construct(string \$type, string \$field, array \$allOperators, array \$defaultOperators)
    {
        \$this->type         = \$type;
        \$this->field        = \$field;
        \$this->allOperators = \$allOperators;
        \$this->operators    = \$defaultOperators;
    }

    /**
     * @return array<string,string>
     */
    public function getOperators(): array
    {
        return \$this->operators;
    }

    public function getField(): string
    {
        return \$this->field;
    }

    public function getType(): string
    {
        return \$this->type;
    }

    public function addOperator(string \$operator): void
    {
        if (isset(\$this->allOperators[\$operator])) {
            \$this->operators[\$this->allOperators[\$operator]['label']] = \$operator;
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
        return "@bundles/LeadBundle/Event/FieldOperatorsEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/FieldOperatorsEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/FieldOperatorsEvent.php");
    }
}
