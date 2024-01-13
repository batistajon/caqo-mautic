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

/* @bundles/LeadBundle/Tests/Segment/Decorator/Date/RelativeDateFunctionalTest.php */
class __TwigTemplate_5347255598e148354ac7e46453e8d0cefecf073132e70e8a5d80fc54f54f1041 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Decorator\\Date;

use DateTime;
use DateTimeZone;
use Doctrine\\Common\\DataFixtures\\ReferenceRepository;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\DataFixtures\\ORM\\LoadLeadData;
use Mautic\\LeadBundle\\DataFixtures\\ORM\\LoadLeadListData;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\LeadBundle\\Segment\\ContactSegmentService;
use Mautic\\LeadBundle\\Tests\\DataFixtures\\ORM\\LoadSegmentsData;
use Mautic\\UserBundle\\DataFixtures\\ORM\\LoadRoleData;
use Mautic\\UserBundle\\DataFixtures\\ORM\\LoadUserData;

class RelativeDateFunctionalTest extends MauticMysqlTestCase
{
    /**
     * @var ReferenceRepository
     */
    private \$fixtures;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->fixtures = \$this->loadFixtures([
            LoadLeadListData::class,
            LoadLeadData::class,
            LoadSegmentsData::class,
            LoadRoleData::class,
            LoadUserData::class,
        ], false)->getReferenceRepository();
    }

    protected function beforeBeginTransaction(): void
    {
        \$this->resetAutoincrement([
            'leads',
            'lead_lists',
        ]);
    }

    public function testSegmentCountIsCorrectForToday()
    {
        \$name = 'Today';
        \$lead = \$this->createLead(\$name, 'midnight today', '+10 seconds');

        \$this->checkSegmentResult(\$name, \$lead);
    }

    public function testSegmentCountIsCorrectForTomorrow()
    {
        \$name = 'Tomorrow';
        \$lead = \$this->createLead(\$name, 'midnight tomorrow', '+10 seconds');

        \$this->checkSegmentResult(\$name, \$lead);
    }

    public function testSegmentCountIsCorrectForYesterday()
    {
        \$name = 'Yesterday';
        \$lead = \$this->createLead(\$name, 'midnight today', '-10 seconds');

        \$this->checkSegmentResult(\$name, \$lead);
    }

    public function testSegmentCountIsCorrectForWeekLast()
    {
        \$name = 'Last week';
        \$lead = \$this->createLead(\$name, 'midnight monday last week', '+2 days');

        \$this->checkSegmentResult(\$name, \$lead);
    }

    public function testSegmentCountIsCorrectForWeekNext()
    {
        \$name = 'Next week';
        \$lead = \$this->createLead(\$name, 'midnight monday next week', '+2 days');

        \$this->checkSegmentResult(\$name, \$lead);
    }

    public function testSegmentCountIsCorrectForWeekThis()
    {
        \$name = 'This week';
        \$lead = \$this->createLead(\$name, 'midnight monday this week', '+2 days');

        \$this->checkSegmentResult(\$name, \$lead);
    }

    public function testSegmentCountIsCorrectForMonthLast()
    {
        \$name = 'Last month';
        \$lead = \$this->createLead(\$name, 'midnight first day of last month', '+2 days');

        \$this->checkSegmentResult(\$name, \$lead);
    }

    public function testSegmentCountIsCorrectForMonthNext()
    {
        \$name = 'Next month';
        \$lead = \$this->createLead(\$name, 'midnight first day of next month', '+2 days');

        \$this->checkSegmentResult(\$name, \$lead);
    }

    public function testSegmentCountIsCorrectForMonthThis()
    {
        \$name = 'This month';
        \$lead = \$this->createLead(\$name, 'midnight first day of this month', '+2 days');

        \$this->checkSegmentResult(\$name, \$lead);
    }

    public function testSegmentCountIsCorrectForYearLast()
    {
        \$name = 'Last year';
        \$lead = \$this->createLead(\$name, 'midnight first day of last year', '+2 days');

        \$this->checkSegmentResult(\$name, \$lead);
    }

    public function testSegmentCountIsCorrectForYearNext()
    {
        \$name = 'Next year';
        \$lead = \$this->createLead(\$name, 'midnight first day of next year', '+2 days');

        \$this->checkSegmentResult(\$name, \$lead);
    }

    public function testSegmentCountIsCorrectForRelativePlus()
    {
        \$name = 'Relative plus';
        \$lead = \$this->createLead(\$name, 'now', '+5 days');

        \$this->checkSegmentResult(\$name, \$lead);
    }

    public function testSegmentCountIsCorrectForRelativeMinus()
    {
        \$name = 'Relative minus';
        \$lead = \$this->createLead(\$name, 'now', '-4 days');

        \$this->checkSegmentResult(\$name, \$lead);
    }

    private function checkSegmentResult(string \$name, Lead \$lead): void
    {
        /** @var ContactSegmentService \$contactSegmentService */
        \$contactSegmentService = self::\$container->get('mautic.lead.model.lead_segment_service');

        \$alias = strtolower(InputHelper::alphanum(\$name, false, '-'));

        \$segmentName = 'segment-with-relative-date-'.\$alias;
        /** @var LeadList \$segmentRef */
        \$segmentRef      = \$this->fixtures->getReference(\$segmentName);
        \$segmentContacts = \$contactSegmentService->getTotalLeadListLeadsCount(\$segmentRef);

        \$this->assertEquals(
            1,
            \$segmentContacts[\$segmentRef->getId()]['count'],
            'There should be 1 contacts in the '.\$segmentName.' segment.'
        );
        \$this->assertEquals(
            \$lead->getId(),
            \$segmentContacts[\$segmentRef->getId()]['maxId'],
            'MaxId in the '.\$segmentName.' segment should be ID of Lead.'
        );
    }

    private function createLead(string \$name, string \$initialTime, string \$dateModifier): Lead
    {
        /** @var LeadRepository \$leadRepository */
        \$leadRepository = self::\$container->get('doctrine.orm.default_entity_manager')->getRepository(Lead::class);

        \$date = new DateTime(\$initialTime, new DateTimeZone('UTC'));
        \$date->modify(\$dateModifier);

        \$lead = new Lead();
        \$lead->setLastname('Date');
        \$lead->setFirstname(\$name);
        \$lead->setDateIdentified(\$date);

        \$leadRepository->saveEntity(\$lead);

        return \$lead;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Segment/Decorator/Date/RelativeDateFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Decorator/Date/RelativeDateFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Segment/Decorator/Date/RelativeDateFunctionalTest.php");
    }
}
