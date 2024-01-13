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

/* @bundles/LeadBundle/Event/TypeOperatorsEvent.php */
class __TwigTemplate_5a42bd7550f0dba1ee02ccd12b123963ad71cf24012b0a38feac90da93aa670a extends Template
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
 * Event that collects operators for different field types.
 */
final class TypeOperatorsEvent extends Event
{
    /**
     * @var array<string,mixed[]>
     */
    private array \$operators = [];

    /**
     * \$operators example:
     * [
     *      'include' => ['=' => 'like'],
     *      'exclude' => ['!=' => '!like'],
     * ].
     *
     * @param array<string,mixed[]> \$operators
     */
    public function setOperatorsForFieldType(string \$fieldType, array \$operators): void
    {
        \$this->operators[\$fieldType] = \$operators;
    }

    /**
     * @return array<string,mixed[]>
     */
    public function getOperatorsForAllFieldTypes(): array
    {
        return \$this->operators;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/TypeOperatorsEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/TypeOperatorsEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/TypeOperatorsEvent.php");
    }
}
