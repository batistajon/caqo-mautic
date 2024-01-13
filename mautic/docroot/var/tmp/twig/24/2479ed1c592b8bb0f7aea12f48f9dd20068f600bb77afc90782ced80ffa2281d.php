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

/* @bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateAnniversaryTest.php */
class __TwigTemplate_7ddea8f6cf175dbdc3b0ad31c61c4cedc3a50bd3473b893b1413585de4274580 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Decorator\\Date\\Other;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionParameters;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateAnniversary;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\TimezoneResolver;
use Mautic\\LeadBundle\\Segment\\Decorator\\DateDecorator;

class DateAnniversaryTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateAnniversary::getOperator
     */
    public function testGetOperator()
    {
        \$dateDecorator             = \$this->createMock(DateDecorator::class);
        \$timezoneResolver          = \$this->createMock(TimezoneResolver::class);

        \$filter        = [
            'operator' => '=',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate([]);

        \$filterDecorator = new DateAnniversary(\$dateDecorator, \$dateOptionParameters);

        \$this->assertEquals('like', \$filterDecorator->getOperator(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateAnniversary::getParameterValue
     */
    public function testGetParameterValue()
    {
        /**
         * Today in '%-m-d' format.
         *
         * @var string
         */
        \$expectedResult = '%'.(new \\DateTime(null, new \\DateTimeZone('UTC')))->format('-m-d');

        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$timezoneResolver->method('getDefaultDate')
            ->with(false)
            ->willReturn(
                new DateTimeHelper(
                    new \\DateTime('midnight today', new \\DateTimeZone('UTC')), null, 'UTC')
            );

        \$filter        = [
            'operator' => '=',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate([]);

        \$filterDecorator = new DateAnniversary(\$dateDecorator, \$dateOptionParameters);

        \$this->assertEquals(\$expectedResult, \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateAnniversary::getParameterValue
     */
    public function testGetParameterValueWithRelativeDate()
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$date = new DateTimeHelper('2018-03-02', null, 'local');

        \$timezoneResolver->method('getDefaultDate')
            ->with()
            ->willReturn(\$date);

        \$filter        = [
            'operator' => '=',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filter        = [
            'filter'   => 'birthday +2days',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);

        \$filterDecorator = new DateAnniversary(\$dateDecorator, \$dateOptionParameters);

        \$this->assertEquals('%-03-04', \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateAnniversaryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateAnniversaryTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateAnniversaryTest.php");
    }
}
