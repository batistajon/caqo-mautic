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

/* @bundles/EmailBundle/Tests/Entity/EmailRepositoryFunctionalTest.php */
class __TwigTemplate_6528a9913ff09dbdedd058593acf123a8fd44e7b4a3d75280af08f6f789c90d5 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Entity;

use DateTime;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\EmailRepository;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;

class EmailRepositoryFunctionalTest extends MauticMysqlTestCase
{
    private EmailRepository \$emailRepository;

    protected function setUp(): void
    {
        parent::setUp();

        /** @var EmailRepository \$repository */
        \$repository = \$this->em->getRepository(Email::class);

        \$this->emailRepository = \$repository;
    }

    public function testGetDoNotEmailListEmpty(): void
    {
        \$result = \$this->emailRepository->getDoNotEmailList();

        Assert::assertSame([], \$result);
    }

    public function testGetDoNotEmailListNotEmpty(): void
    {
        \$lead = new Lead();
        \$lead->setEmail('name@domain.tld');
        \$this->em->persist(\$lead);

        \$doNotContact = new DoNotContact();
        \$doNotContact->setLead(\$lead);
        \$doNotContact->setDateAdded(new DateTime());
        \$doNotContact->setChannel('email');
        \$this->em->persist(\$doNotContact);

        \$this->em->flush();

        // no \$leadIds
        \$result = \$this->emailRepository->getDoNotEmailList();
        Assert::assertSame([\$lead->getId() => \$lead->getEmail()], \$result);

        // matching \$leadIds
        \$result = \$this->emailRepository->getDoNotEmailList([\$lead->getId()]);
        Assert::assertSame([\$lead->getId() => \$lead->getEmail()], \$result);

        // mismatching \$leadIds
        \$result = \$this->emailRepository->getDoNotEmailList([-1]);
        Assert::assertSame([], \$result);
    }

    public function testCheckDoNotEmailNonExistent(): void
    {
        \$result = \$this->emailRepository->checkDoNotEmail('name@domain.tld');

        Assert::assertFalse(\$result);
    }

    public function testCheckDoNotEmailExistent(): void
    {
        \$lead = new Lead();
        \$lead->setEmail('name@domain.tld');
        \$this->em->persist(\$lead);

        \$doNotContact = new DoNotContact();
        \$doNotContact->setLead(\$lead);
        \$doNotContact->setDateAdded(new DateTime());
        \$doNotContact->setChannel('email');
        \$doNotContact->setReason(1);
        \$doNotContact->setComments('Some comment');
        \$this->em->persist(\$doNotContact);

        \$this->em->flush();

        \$result = \$this->emailRepository->checkDoNotEmail('name@domain.tld');

        Assert::assertSame([
            'id'           => (string) \$doNotContact->getId(),
            'unsubscribed' => true,
            'bounced'      => false,
            'manual'       => false,
            'comments'     => \$doNotContact->getComments(),
        ], \$result);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Entity/EmailRepositoryFunctionalTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Entity/EmailRepositoryFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Entity/EmailRepositoryFunctionalTest.php");
    }
}
