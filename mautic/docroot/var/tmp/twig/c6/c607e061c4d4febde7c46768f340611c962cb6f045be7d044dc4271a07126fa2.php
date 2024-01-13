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

/* @bundles/LeadBundle/Tests/Entity/FrequencyRuleRepositoryTest.php */
class __TwigTemplate_6368969d94fcd278e4a785a738406af834a3c76a03e38ee729060753b6dabe31 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use DateTime;
use Doctrine\\ORM\\OptimisticLockException;
use Doctrine\\ORM\\ORMException;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\LeadBundle\\Entity\\FrequencyRule;
use Mautic\\LeadBundle\\Entity\\FrequencyRuleRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;

class FrequencyRuleRepositoryTest extends MauticMysqlTestCase
{
    /**
     * @var FrequencyRuleRepository
     */
    private \$frequencyRuleRepository;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->frequencyRuleRepository = self::\$container->get('mautic.lead.repository.frequency_rule');
    }

    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function testCustomFrequencyRuleViolationsMethodReturnsCorrectData()
    {
        \$lead = new Lead();
        \$lead->setFirstname('Firstname');
        \$lead->setLastname('Lastname');
        \$lead->setEmail('test@test.com');
        \$lead->setPhone('555-666-777');

        \$this->em->persist(\$lead);

        \$frequencyRule = new FrequencyRule();
        \$frequencyRule->setFrequencyNumber(1);
        \$frequencyRule->setFrequencyTime('DAY');
        \$frequencyRule->setChannel('email');
        \$frequencyRule->setDateAdded(new DateTime());
        \$frequencyRule->setLead(\$lead);

        \$this->em->persist(\$frequencyRule);

        \$emailStats1 = new Stat();
        \$emailStats1->setLead(\$lead);
        \$emailStats1->setEmailAddress('testemail@test.test');
        \$emailStats1->setDateSent(new DateTime());
        \$emailStats1->setIsRead(true);
        \$emailStats1->setIsFailed(false);
        \$emailStats1->setViewedInBrowser(false);

        \$emailStats2 = new Stat();
        \$emailStats2->setLead(\$lead);
        \$emailStats2->setEmailAddress('testemail@test.test');
        \$emailStats2->setDateSent(new DateTime());
        \$emailStats2->setIsRead(true);
        \$emailStats2->setIsFailed(false);
        \$emailStats2->setViewedInBrowser(false);

        \$this->em->persist(\$emailStats1);
        \$this->em->persist(\$emailStats2);
        \$this->em->flush();

        \$violations         = \$this->frequencyRuleRepository->getAppliedFrequencyRules('email', [\$lead->getId()], 1, 'DAY');
        \$expectedViolations = [
            [
                'lead_id'          => \$lead->getId(),
                'frequency_number' => '1',
                'frequency_time'   => 'DAY',
            ],
        ];
        Assert::assertSame(\$expectedViolations, \$violations);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Entity/FrequencyRuleRepositoryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/FrequencyRuleRepositoryTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Entity/FrequencyRuleRepositoryTest.php");
    }
}
