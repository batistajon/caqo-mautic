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

/* @bundles/LeadBundle/Tests/Event/TypeOperatorsEventTest.php */
class __TwigTemplate_719f0e1f168eaeaa985cd8653bd3f0db1c9ba4f7f293fac13bd7a705987ee208 extends Template
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

use Mautic\\LeadBundle\\Event\\TypeOperatorsEvent;

final class TypeOperatorsEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testConstructGettersSetters(): void
    {
        \$event = new TypeOperatorsEvent();

        \$this->assertSame([], \$event->getOperatorsForAllFieldTypes());

        \$event->setOperatorsForFieldType('email', ['include' => ['=', 'like']]);
        \$event->setOperatorsForFieldType('firsname', ['exclude' => ['!=', '!like']]);

        \$this->assertSame([
            'email'    => ['include' => ['=', 'like']],
            'firsname' => ['exclude' => ['!=', '!like']],
        ], \$event->getOperatorsForAllFieldTypes());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Event/TypeOperatorsEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/TypeOperatorsEventTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Event/TypeOperatorsEventTest.php");
    }
}
