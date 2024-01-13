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

/* @bundles/LeadBundle/Tests/Segment/Decorator/CustomMappedDecoratorTest.php */
class __TwigTemplate_0854d45cbe39d710e2ce707b6cef5b20bb2e7681e23dfa2e19bcb44c86b4c23d extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Decorator;

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterOperator;
use Mautic\\LeadBundle\\Segment\\Decorator\\CustomMappedDecorator;
use Mautic\\LeadBundle\\Services\\ContactSegmentFilterDictionary;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class CustomMappedDecoratorTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\CustomMappedDecorator::getField
     */
    public function testGetField(): void
    {
        \$customMappedDecorator = \$this->getDecorator();

        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate([
            'field'    => 'lead_email_read_count',
        ]);

        \$this->assertSame('open_count', \$customMappedDecorator->getField(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\CustomMappedDecorator::getTable
     */
    public function testGetTable(): void
    {
        \$customMappedDecorator = \$this->getDecorator();

        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate([
            'field'    => 'lead_email_read_count',
        ]);

        \$this->assertSame(MAUTIC_TABLE_PREFIX.'email_stats', \$customMappedDecorator->getTable(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\CustomMappedDecorator::getQueryType
     */
    public function testGetQueryType(): void
    {
        \$customMappedDecorator = \$this->getDecorator();

        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate([
            'field'    => 'dnc_bounced',
        ]);

        \$this->assertSame('mautic.lead.query.builder.special.dnc', \$customMappedDecorator->getQueryType(\$contactSegmentFilterCrate));
    }

    /**
     * @return CustomMappedDecorator
     */
    private function getDecorator()
    {
        \$contactSegmentFilterOperator   = \$this->createMock(ContactSegmentFilterOperator::class);
        \$dispatcherMock                 = \$this->createMock(EventDispatcherInterface::class);
        \$contactSegmentFilterDictionary = new ContactSegmentFilterDictionary(\$dispatcherMock);

        return new CustomMappedDecorator(\$contactSegmentFilterOperator, \$contactSegmentFilterDictionary);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Segment/Decorator/CustomMappedDecoratorTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Decorator/CustomMappedDecoratorTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Segment/Decorator/CustomMappedDecoratorTest.php");
    }
}
