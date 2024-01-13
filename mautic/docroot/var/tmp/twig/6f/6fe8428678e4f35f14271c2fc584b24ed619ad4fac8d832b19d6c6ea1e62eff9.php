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

/* @bundles/CoreBundle/Tests/Unit/Command/MaxMindDoNotSellPurgeCommandTest.php */
class __TwigTemplate_6557d1679b17f8c221172bae6bed6c63d1037f326656b8eba4b749520f882f08 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Command;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Statement;
use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Command\\MaxMindDoNotSellPurgeCommand;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\IpLookup\\DoNotSellList\\MaxMindDoNotSellList;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Symfony\\Component\\Console\\Tester\\CommandTester;

class MaxMindDoNotSellPurgeCommandTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testCommandDryRun(): void
    {
        \$mockEntityManager = \$this->buildMockEntityManager(['test1', 'test2']);
        \$mockDoNotSellList = \$this->createMock(MaxMindDoNotSellList::class);

        \$command       = new MaxMindDoNotSellPurgeCommand(\$mockEntityManager, \$mockDoNotSellList);
        \$commandTester = new CommandTester(\$command);

        \$result = \$commandTester->execute(['--dry-run' => true]);
        \$output = \$commandTester->getDisplay();

        \$this->assertStringContainsString('Dry run; skipping purge', \$output);
        \$this->assertStringNotContainsString('No matches found', \$output);
        \$this->assertStringNotContainsString('Step 2: Purging data...', \$output);
        \$this->assertEquals(0, \$result);
    }

    public function testNoContactsFound(): void
    {
        \$mockEntityManager = \$this->buildMockEntityManager([]);
        \$mockDoNotSellList = \$this->createMock(MaxMindDoNotSellList::class);

        \$command       = new MaxMindDoNotSellPurgeCommand(\$mockEntityManager, \$mockDoNotSellList);
        \$commandTester = new CommandTester(\$command);

        \$result = \$commandTester->execute([]);
        \$output = \$commandTester->getDisplay();

        \$this->assertStringContainsString('No matches found', \$output);
        \$this->assertStringNotContainsString('contacts with IPs from Do Not Sell list', \$output);
        \$this->assertEquals(0, \$result);
    }

    public function testPurge(): void
    {
        \$mockEntityManager = \$this->buildMockEntityManager([['id' => 1, 'ip_address' => '123.123.123.123']]);
        \$mockDoNotSellList = \$this->createMock(MaxMindDoNotSellList::class);

        \$command       = new MaxMindDoNotSellPurgeCommand(\$mockEntityManager, \$mockDoNotSellList);
        \$commandTester = new CommandTester(\$command);

        \$result = \$commandTester->execute([]);
        \$output = \$commandTester->getDisplay();

        \$this->assertStringContainsString('Found 1 contacts with an IP from the Do Not Sell list', \$output);
        \$this->assertStringContainsString('Step 2: Purging data...', \$output);
        \$this->assertStringNotContainsString('No matches found', \$output);
        \$this->assertEquals(0, \$result);
    }

    private function buildMockEntityManager(array \$dataToReturn): EntityManager
    {
        \$mockStatement = \$this->createMock(Statement::class);
        \$mockStatement->method('fetchAll')->withAnyParameters()->willReturn(\$dataToReturn);

        \$mockConnection = \$this->createMock(Connection::class);
        \$mockConnection->method('prepare')->withAnyParameters()->willReturn(\$mockStatement);

        \$ip = new IpAddress('123.123.123.123');
        \$ip->setIpDetails(['city' => 'Boston', 'region' => 'MA', 'country' => 'United States', 'zipcode' => '02113']);

        \$lead = new Lead();
        \$lead->addIpAddress(\$ip);
        \$lead->setCity('Boston');
        \$lead->setState('MA');
        \$lead->setCountry('United States');
        \$lead->setZipcode('02113');

        \$mockLeadRepository = \$this->createMock(LeadRepository::class);
        \$mockLeadRepository->method('findOneBy')->with(['id' => 1])->willReturn(\$lead);

        \$mockEntityManager = \$this->createMock(EntityManager::class);
        \$mockEntityManager->method('getConnection')->willReturn(\$mockConnection);
        \$mockEntityManager->method('getRepository')->withAnyParameters()->willReturn(\$mockLeadRepository);

        return \$mockEntityManager;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Command/MaxMindDoNotSellPurgeCommandTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Command/MaxMindDoNotSellPurgeCommandTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Command/MaxMindDoNotSellPurgeCommandTest.php");
    }
}
