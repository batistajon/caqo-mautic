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

/* @bundles/LeadBundle/Tests/Command/UpdateLeadListCommandFunctionalTest.php */
class __TwigTemplate_de553e1739b0f1b577891cb419f709d0b5c57a334aaa98baa040e415327da894 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Command;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Command\\UpdateLeadListsCommand;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Entity\\LeadListRepository;
use PHPUnit\\Framework\\Assert;

final class UpdateLeadListCommandFunctionalTest extends MauticMysqlTestCase
{
    /**
     * @dataProvider provider
     */
    public function testCommandRebuildingAllSegments(callable \$getCommandParams, callable \$assert): void
    {
        \$contact = new Lead();
        \$contact->setEmail('halusky@bramborak.makovec');

        \$segment = new LeadList();
        \$segment->setName('Test segment');
        \$segment->setPublicName('Test segment');
        \$segment->setAlias('test-segment');
        \$segment->setFilters([
            [
                'glue'     => 'and',
                'field'    => 'email',
                'object'   => 'lead',
                'type'     => 'email',
                'filter'   => 'halusky@bramborak.makovec',
                'display'  => null,
                'operator' => 'eq',
            ],
        ]);

        \$longTimeAgo = new \\DateTime('2000-01-01 00:00:00');

        // The last built date is set on pre persist to 2000-01-01 00:00:00.
        // Setting it 1 year ago so we could assert that it is updated after the command runs.
        \$segment->setLastBuiltDate(\$longTimeAgo);

        \$this->em->persist(\$contact);
        \$this->em->persist(\$segment);
        \$this->em->flush();
        \$this->em->clear();

        Assert::assertEquals(\$longTimeAgo, \$segment->getLastBuiltDate());

        \$this->runCommand(UpdateLeadListsCommand::NAME, \$getCommandParams(\$segment));

        /** @var LeadList \$segment */
        \$segment = \$this->em->find(LeadList::class, \$segment->getId());
        \$assert(\$segment);

        /** @var LeadListRepository \$leadListRepository */
        \$leadListRepository = \$this->em->getRepository(LeadList::class);

        Assert::assertSame(
            '1',
            \$leadListRepository->getLeadCount([\$segment->getId()])
        );
    }

    /**
     * @return iterable<array<callable>>
     */
    public function provider(): iterable
    {
        // Test that all segments will be rebuilt with no params set.
        yield [
            function (): array {
                return [];
            },
            function (LeadList \$segment): void {
                Assert::assertGreaterThan(
                    new \\DateTime('2000-01-01 00:00:00'),
                    \$segment->getLastBuiltDate()
                );
            },
        ];

        // Test that it will work when we select a specific segment too.
        yield [
            function (LeadList \$segment): array {
                return ['--list-id' => \$segment->getId()];
            },
            function (LeadList \$segment): void {
                Assert::assertGreaterThan(
                    new \\DateTime('2000-01-01 00:00:00'),
                    \$segment->getLastBuiltDate()
                );
            },
        ];

        // But the last built date will not update if we limit how many contacts to process.
        yield [
            function (): array {
                return ['--max-contacts' => 1];
            },
            function (LeadList \$segment): void {
                Assert::assertEquals(
                    new \\DateTime('2000-01-01 00:00:00'),
                    \$segment->getLastBuiltDate()
                );
            },
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Command/UpdateLeadListCommandFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Command/UpdateLeadListCommandFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Command/UpdateLeadListCommandFunctionalTest.php");
    }
}
