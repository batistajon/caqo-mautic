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

/* @bundles/LeadBundle/Tests/Model/ListModelFunctionalTest.php */
class __TwigTemplate_00262d8765fd36780196825e8294055f0c945bf88cca1df643daadeb2f4572ef extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Entity\\LeadListRepository;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\UserBundle\\Entity\\User;
use PHPUnit\\Framework\\Assert;

class ListModelFunctionalTest extends MauticMysqlTestCase
{
    public function testPublicSegmentsInContactPreferences()
    {
        \$user           = \$this->em->getRepository(User::class)->findBy([], [], 1)[0];
        \$firstLeadList  = \$this->createLeadList(\$user, 'First', true);
        \$secondLeadList = \$this->createLeadList(\$user, 'Second', false);
        \$thirdLeadList  = \$this->createLeadList(\$user, 'Third', true);
        \$this->em->flush();

        /** @var LeadListRepository \$repo */
        \$repo  = \$this->em->getRepository(LeadList::class);
        \$lists = \$repo->getGlobalLists();

        Assert::assertCount(2, \$lists);
        Assert::assertArrayHasKey(\$firstLeadList->getId(), \$lists);
        Assert::assertArrayHasKey(\$thirdLeadList->getId(), \$lists);
        Assert::assertArrayNotHasKey(
            \$secondLeadList->getId(),
            \$lists,
            'Non-global lists should not be returned by the `getGlobalLists()` method.'
        );
    }

    private function createLeadList(User \$user, string \$name, bool \$isGlobal): LeadList
    {
        \$leadList = new LeadList();
        \$leadList->setName(\$name);
        \$leadList->setPublicName('Public'.\$name);
        \$leadList->setAlias(mb_strtolower(\$name));
        \$leadList->setCreatedBy(\$user);
        \$leadList->setIsGlobal(\$isGlobal);
        \$this->em->persist(\$leadList);

        return \$leadList;
    }

    public function testSegmentLineChartData(): void
    {
        /** @var ListModel \$segmentModel */
        \$segmentModel = self::\$container->get('mautic.lead.model.list');

        /** @var LeadRepository \$contactRepository */
        \$contactRepository = \$this->em->getRepository(Lead::class);

        \$segment = new LeadList();
        \$segment->setName('Segment A');

        \$segmentModel->saveEntity(\$segment);

        \$contacts = [new Lead(), new Lead(), new Lead(), new Lead()];

        \$contactRepository->saveEntities(\$contacts);

        \$segmentModel->addLead(\$contacts[0], \$segment); // Emulating adding by a filter.
        \$segmentModel->addLead(\$contacts[1], \$segment); // Emulating adding by a filter.
        \$segmentModel->addLead(\$contacts[2], \$segment, true); // Manually added.
        \$segmentModel->addLead(\$contacts[3], \$segment, true); // Manually added.

        \$data = \$segmentModel->getSegmentContactsLineChartData(
            'd',
            new \\DateTime('1 month ago', new \\DateTimeZone('UTC')),
            new \\DateTime('now', new \\DateTimeZone('UTC')),
            null,
            ['leadlist_id' => ['value' => \$segment->getId(), 'list_column_name' => 't.lead_id']]
        );

        Assert::assertSame(4, end(\$data['datasets'][0]['data'])); // Added for today.
        Assert::assertSame(0, end(\$data['datasets'][1]['data'])); // Removed for today.
        Assert::assertSame(4, end(\$data['datasets'][2]['data'])); // Total for today.

        // To make this interesting, lets' remove some contacts to see what happens.
        \$segmentModel->removeLead(\$contacts[1], \$segment); // Emulating removing by a filter.
        \$segmentModel->removeLead(\$contacts[2], \$segment, true); // Manually removed.

        \$data = \$segmentModel->getSegmentContactsLineChartData(
            'd',
            new \\DateTime('1 month ago', new \\DateTimeZone('UTC')),
            new \\DateTime('now', new \\DateTimeZone('UTC')),
            null,
            ['leadlist_id' => ['value' => \$segment->getId(), 'list_column_name' => 't.lead_id']]
        );

        Assert::assertSame(4, end(\$data['datasets'][0]['data'])); // Added for today.
        Assert::assertSame('2', end(\$data['datasets'][1]['data'])); // Removed for today.
        Assert::assertSame(2, end(\$data['datasets'][2]['data'])); // Total for today.
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Model/ListModelFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Model/ListModelFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Model/ListModelFunctionalTest.php");
    }
}
