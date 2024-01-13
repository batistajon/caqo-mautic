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

/* @bundles/FormBundle/Tests/Event/FormFieldEventTest.php */
class __TwigTemplate_d74210fef293f57010977ac60d5892efa1527ffcfc5719925fcdbae4821386d5 extends Template
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

namespace Mautic\\FormBundle\\Tests\\Event;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Event\\FormFieldEvent;

final class FormFieldEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testWorkflow(): void
    {
        \$field  = new Field();
        \$field2 = new Field();
        \$event  = new FormFieldEvent(\$field, true);
        \$this->assertTrue(\$event->isNew());
        \$this->assertSame(\$field, \$event->getField());

        \$event->setField(\$field2);

        \$this->assertSame(\$field2, \$event->getField());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Tests/Event/FormFieldEventTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Event/FormFieldEventTest.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Tests/Event/FormFieldEventTest.php");
    }
}
