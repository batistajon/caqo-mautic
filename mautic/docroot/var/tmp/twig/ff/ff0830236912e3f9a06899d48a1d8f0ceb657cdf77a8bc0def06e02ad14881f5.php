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

/* @bundles/IntegrationsBundle/Tests/Unit/Event/MauticSyncFieldsLoadEventTest.php */
class __TwigTemplate_caee67b0d8a2297d534f12be54f41e6c4403e7989e0ba86ab64276b9baa08d75 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Event;

use Mautic\\IntegrationsBundle\\Event\\MauticSyncFieldsLoadEvent;
use PHPUnit\\Framework\\TestCase;

class MauticSyncFieldsLoadEventTest extends TestCase
{
    public function testWorkflow(): void
    {
        \$objectName = 'object';
        \$fields     = [
            'fieldKey' => 'fieldName',
        ];

        \$newFieldKey   = 'newFieldKey';
        \$newFieldValue = 'newFieldValue';

        \$event = new MauticSyncFieldsLoadEvent(\$objectName, \$fields);
        \$this->assertSame(\$objectName, \$event->getObjectName());
        \$this->assertSame(\$fields, \$event->getFields());
        \$event->addField(\$newFieldKey, \$newFieldValue);
        \$this->assertSame(
            array_merge(\$fields, [\$newFieldKey => \$newFieldValue]),
            \$event->getFields()
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Tests/Unit/Event/MauticSyncFieldsLoadEventTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Event/MauticSyncFieldsLoadEventTest.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Event/MauticSyncFieldsLoadEventTest.php");
    }
}
