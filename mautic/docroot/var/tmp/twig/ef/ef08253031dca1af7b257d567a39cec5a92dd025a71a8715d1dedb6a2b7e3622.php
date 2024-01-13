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

/* @bundles/LeadBundle/Tests/Field/LeadFieldSaverTest.php */
class __TwigTemplate_326fe1f5f0ee0892dc77845d4cc718829d44f556dfaba8ebdda0c00036e05d52 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Field;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Mautic\\LeadBundle\\Field\\Dispatcher\\FieldSaveDispatcher;
use Mautic\\LeadBundle\\Field\\LeadFieldSaver;

class LeadFieldSaverTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testSave(): void
    {
        \$leadFieldRepository = \$this->createMock(LeadFieldRepository::class);
        \$fieldSaveDispatcher = \$this->createMock(FieldSaveDispatcher::class);

        \$leadFieldSaver = new LeadFieldSaver(\$leadFieldRepository, \$fieldSaveDispatcher);

        \$leadField = new LeadField();

        \$fieldSaveDispatcher->expects(\$this->once())
            ->method('dispatchPreSaveEvent')
            ->with(\$leadField, true);

        \$fieldSaveDispatcher->expects(\$this->once())
            ->method('dispatchPostSaveEvent')
            ->with(\$leadField, true);

        \$leadFieldSaver->saveLeadFieldEntity(\$leadField, true);
    }

    public function testSaveNoColumnCreated(): void
    {
        \$leadFieldRepository = \$this->createMock(LeadFieldRepository::class);
        \$fieldSaveDispatcher = \$this->createMock(FieldSaveDispatcher::class);

        \$leadFieldSaver = new LeadFieldSaver(\$leadFieldRepository, \$fieldSaveDispatcher);

        \$leadField = new LeadField();

        \$fieldSaveDispatcher->expects(\$this->once())
            ->method('dispatchPreSaveEvent')
            ->with(\$leadField, true);

        \$fieldSaveDispatcher->expects(\$this->once())
            ->method('dispatchPostSaveEvent')
            ->with(\$leadField, true);

        \$leadFieldSaver->saveLeadFieldEntityWithoutColumnCreated(\$leadField);

        \$this->assertTrue(\$leadField->getColumnIsNotCreated());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Field/LeadFieldSaverTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/LeadFieldSaverTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Field/LeadFieldSaverTest.php");
    }
}
