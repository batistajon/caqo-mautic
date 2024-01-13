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

/* @bundles/LeadBundle/Tests/EventListener/GeneratedColumnSubscriberTest.php */
class __TwigTemplate_075d402c29a253e741cf423b91f53c3a136b5c95839b1aa8e4624f4843d18dac extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Doctrine\\GeneratedColumn\\GeneratedColumn;
use Mautic\\CoreBundle\\Event\\GeneratedColumnsEvent;
use Mautic\\LeadBundle\\Event\\LeadListFiltersChoicesEvent;
use Mautic\\LeadBundle\\EventListener\\GeneratedColumnSubscriber;
use Mautic\\LeadBundle\\Model\\ListModel;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Translation\\TranslatorInterface;

class GeneratedColumnSubscriberTest extends TestCase
{
    /**
     * @var MockObject&TranslatorInterface
     */
    private \$translator;

    private GeneratedColumnSubscriber \$generatedColumnSubscriber;

    protected function setUp(): void
    {
        parent::setUp();

        \$segmentModel = new class() extends ListModel {
            public function __construct()
            {
            }
        };

        \$this->translator                = \$this->createMock(TranslatorInterface::class);
        \$this->generatedColumnSubscriber = new GeneratedColumnSubscriber(\$segmentModel, \$this->translator);
    }

    public function testInGeneratedColumnsBuild(): void
    {
        \$event = new GeneratedColumnsEvent();

        \$this->generatedColumnSubscriber->onGeneratedColumnsBuild(\$event);

        /** @var GeneratedColumn \$generatedColumn */
        \$generatedColumn = \$event->getGeneratedColumns()->current();

        Assert::assertSame(MAUTIC_TABLE_PREFIX.'leads', \$generatedColumn->getTableName());
        Assert::assertSame('generated_email_domain', \$generatedColumn->getColumnName());
        Assert::assertSame('VARCHAR(255) AS (SUBSTRING(email, LOCATE(\"@\", email) + 1)) COMMENT \\'(DC2Type:generated)\\'', \$generatedColumn->getColumnDefinition());
    }

    public function testOnGenerateSegmentFilters(): void
    {
        \$event = new LeadListFiltersChoicesEvent(
            [],
            [],
            \$this->translator,
            new Request()
        );

        \$this->translator->method('trans')
            ->with('mautic.email.segment.choice.generated_email_domain')
            ->willReturn('translated string');

        \$this->generatedColumnSubscriber->onGenerateSegmentFilters(\$event);

        Assert::assertSame(
            [
                'label'      => 'translated string',
                'properties' => ['type' => 'text'],
                'operators'  => [
                    'mautic.lead.list.form.operator.equals'     => '=',
                    'mautic.lead.list.form.operator.notequals'  => '!=',
                    'mautic.lead.list.form.operator.isempty'    => 'empty',
                    'mautic.lead.list.form.operator.isnotempty' => '!empty',
                    'mautic.lead.list.form.operator.islike'     => 'like',
                    'mautic.lead.list.form.operator.isnotlike'  => '!like',
                    'mautic.lead.list.form.operator.regexp'     => 'regexp',
                    'mautic.lead.list.form.operator.notregexp'  => '!regexp',
                    'mautic.core.operator.starts.with'          => 'startsWith',
                    'mautic.core.operator.ends.with'            => 'endsWith',
                    'mautic.core.operator.contains'             => 'contains',
                ],
                'object' => 'lead',
            ],
            \$event->getChoices()['lead']['generated_email_domain']
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
        return "@bundles/LeadBundle/Tests/EventListener/GeneratedColumnSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/GeneratedColumnSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/EventListener/GeneratedColumnSubscriberTest.php");
    }
}
