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

/* @bundles/EmailBundle/Tests/Functional/PendingCountTest.php */
class __TwigTemplate_f90c4cb0a0385d88849663ded0982cf66c5a4d9c4959074406dde373c3253c55 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Functional;

use DateTime;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Entity\\ListLead;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

final class PendingCountTest extends MauticMysqlTestCase
{
    /**
     * There was an issue that if there is a lead_id = null in the email_stats associated with an email
     * then the pending count was always 0 even if there are contacts waiting for sent.
     */
    public function testPendingCountWithDeletedContactsInEmailStats(): void
    {
        \$contact = new Lead();
        \$contact->setEmail('john@doe.email');

        \$segment = new LeadList();
        \$segment->setName('Segment A');
        \$segment->setPublicName('Segment A');
        \$segment->setAlias('segment-a');

        \$segmentRef = new ListLead();
        \$segmentRef->setLead(\$contact);
        \$segmentRef->setList(\$segment);
        \$segmentRef->setDateAdded(new DateTime());

        \$email = new Email();
        \$email->setName('Email A');
        \$email->setSubject('Email A Subject');
        \$email->setEmailType('list');
        \$email->addList(\$segment);

        \$emailStat = new Stat();
        \$emailStat->setEmail(\$email);
        \$emailStat->setLead(null);
        \$emailStat->setEmailAddress('deleted@contact.email');
        \$emailStat->setDateSent(new DateTime());

        \$this->em->persist(\$segment);
        \$this->em->persist(\$contact);
        \$this->em->persist(\$segmentRef);
        \$this->em->persist(\$email);
        \$this->em->persist(\$emailStat);
        \$this->em->flush();

        // The counts are loaded via ajax call after the email list page loads, so checking the ajax request instead of the HTML.
        \$this->client->request(Request::METHOD_GET, '/s/ajax?action=email:getEmailCountStats', ['id' => \$email->getId()]);

        Assert::assertSame(
            '{\"id\":'.\$email->getId().',\"pending\":\"1 Pending\",\"queued\":0,\"sentCount\":\"0 Sent\",\"readCount\":\"0 Read\",\"readPercent\":\"0% Read\"}',
            \$this->client->getResponse()->getContent()
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
        return "@bundles/EmailBundle/Tests/Functional/PendingCountTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Functional/PendingCountTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Functional/PendingCountTest.php");
    }
}
