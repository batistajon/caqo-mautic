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

/* @bundles/EmailBundle/Tests/Stat/StatHelperTest.php */
class __TwigTemplate_66f18997b9c31f0b9f6727a90a34fc22397394db31798b6566f8e8a8177f1cd2 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Stat;

use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Entity\\StatRepository;
use Mautic\\EmailBundle\\Stat\\Exception\\StatNotFoundException;
use Mautic\\EmailBundle\\Stat\\StatHelper;
use Mautic\\LeadBundle\\Entity\\Lead;

class StatHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testStatsAreCreatedAndDeleted()
    {
        \$mockStatRepository = \$this->getMockBuilder(StatRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mockStatRepository->expects(\$this->once())
            ->method('deleteStats')
            ->withConsecutive([[1, 2, 3, 4, 5]]);

        \$statHelper = new StatHelper(\$mockStatRepository);

        \$mockEmail = \$this->getMockBuilder(Email::class)
            ->getMock();
        \$mockEmail->method('getId')
            ->willReturn(15);

        \$counter = 1;
        while (\$counter <= 5) {
            \$stat = \$this->getMockBuilder(Stat::class)
                ->getMock();

            \$stat->method('getId')
                ->willReturn(\$counter);

            \$stat->method('getEmail')
                ->willReturn(\$mockEmail);

            \$lead = \$this->getMockBuilder(Lead::class)
                ->getMock();

            \$lead->method('getId')
                ->willReturn(\$counter * 10);

            \$stat->method('getLead')
                ->willReturn(\$lead);

            \$emailAddress = \"contact{\$counter}@test.com\";
            \$statHelper->storeStat(\$stat, \$emailAddress);

            // Delete it
            try {
                \$reference = \$statHelper->getStat(\$emailAddress);
                \$this->assertEquals(\$reference->getLeadId(), \$counter * 10);
                \$statHelper->markForDeletion(\$reference);
            } catch (StatNotFoundException \$exception) {
                \$this->fail(\"Stat not found for \$emailAddress\");
            }

            ++\$counter;
        }

        \$statHelper->deletePending();
    }

    public function testExceptionIsThrownIfEmailAddressIsNotFound()
    {
        \$this->expectException(StatNotFoundException::class);
        \$mockStatRepository = \$this->getMockBuilder(StatRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$statHelper = new StatHelper(\$mockStatRepository);

        \$reference = \$statHelper->getStat('nada@nada.com');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Stat/StatHelperTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Stat/StatHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Stat/StatHelperTest.php");
    }
}
