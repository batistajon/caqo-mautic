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

/* @bundles/LeadBundle/Tests/Event/FieldOperatorsEventTest.php */
class __TwigTemplate_930d8dd46e993ad346ee74f0efef2971acbc45ef202b3ba91693d8ff46153714 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Event\\FieldOperatorsEvent;

final class FieldOperatorsEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testConstructGettersSetters(): void
    {
        \$type         = 'select';
        \$field        = 'country';
        \$allOperators = [
            '=' => [
                'label'       => 'equals',
                'expr'        => 'eq',
                'negate_expr' => 'neq',
            ],
            '!=' => [
                'label'       => 'not equal',
                'expr'        => 'neq',
                'negate_expr' => 'eq',
            ],
        ];

        \$defaultOperators = [
            'equals' => '=',
        ];

        \$event = new FieldOperatorsEvent(\$type, \$field, \$allOperators, \$defaultOperators);

        \$this->assertSame(\$type, \$event->getType());
        \$this->assertSame(\$field, \$event->getField());
        \$this->assertSame(\$defaultOperators, \$event->getOperators());

        \$event->addOperator('!=');

        \$this->assertSame(['equals' => '=', 'not equal' => '!='], \$event->getOperators());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Event/FieldOperatorsEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/FieldOperatorsEventTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Event/FieldOperatorsEventTest.php");
    }
}
