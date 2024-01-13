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

/* @bundles/LeadBundle/Event/FormAdjustmentEvent.php */
class __TwigTemplate_52436125cac19d68b9851453aa9b276e0bb69e09337b51aeca4db78a2e688de1 extends Template
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

use Mautic\\LeadBundle\\Segment\\OperatorOptions;
use Symfony\\Component\\EventDispatcher\\Event;
use Symfony\\Component\\Form\\FormInterface;

final class FormAdjustmentEvent extends Event
{
    /**
     * @var FormInterface<FormInterface>
     */
    private FormInterface \$form;

    private string \$fieldAlias;

    private string \$fieldObject;

    private string \$operator;

    /**
     * @var mixed[]
     */
    private array \$fieldDetails;

    /**
     * @param FormInterface<FormInterface> \$form
     * @param mixed[]                      \$fieldDetails
     */
    public function __construct(FormInterface \$form, string \$fieldAlias, string \$fieldObject, string \$operator, array \$fieldDetails)
    {
        \$this->form         = \$form;
        \$this->fieldAlias   = \$fieldAlias;
        \$this->fieldObject  = \$fieldObject;
        \$this->operator     = \$operator;
        \$this->fieldDetails = \$fieldDetails;
    }

    /**
     * @return FormInterface<FormInterface>
     */
    public function getForm(): FormInterface
    {
        return \$this->form;
    }

    public function getFieldAlias(): string
    {
        return \$this->fieldAlias;
    }

    public function getFieldObject(): string
    {
        return \$this->fieldObject;
    }

    public function getOperator(): string
    {
        return \$this->operator;
    }

    /**
     * @param string ...\$operators
     */
    public function operatorIsOneOf(string ...\$operators): bool
    {
        return in_array(\$this->getOperator(), \$operators);
    }

    /**
     * @param string ...\$fieldTypes
     */
    public function fieldTypeIsOneOf(string ...\$fieldTypes): bool
    {
        return in_array(\$this->getFieldType(), \$fieldTypes);
    }

    public function getFieldType(): string
    {
        return \$this->fieldDetails['properties']['type'];
    }

    /**
     * @return mixed[]
     */
    public function getFieldDetails(): array
    {
        return \$this->fieldDetails;
    }

    /**
     * @return mixed[]
     */
    public function getFieldChoices(): array
    {
        return \$this->fieldDetails['properties']['list'] ?? [];
    }

    public function filterShouldBeDisabled(): bool
    {
        return \$this->operatorIsOneOf(OperatorOptions::EMPTY, OperatorOptions::NOT_EMPTY);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/FormAdjustmentEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/FormAdjustmentEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/FormAdjustmentEvent.php");
    }
}
