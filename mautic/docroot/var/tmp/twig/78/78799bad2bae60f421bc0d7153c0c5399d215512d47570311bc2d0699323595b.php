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

/* @bundles/EmailBundle/Tests/EventListener/EmailSubscriberTest.php */
class __TwigTemplate_f66bf0a20388f63977b70ad7c4d398a3205f54376df640f2d828afb5376342ce extends Template
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

namespace Mautic\\EmailBundle\\Tests\\EventListener;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Event\\QueueEmailEvent;
use Mautic\\EmailBundle\\EventListener\\EmailSubscriber;
use Mautic\\EmailBundle\\Model\\EmailModel;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Translation\\TranslatorInterface;

final class EmailSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|IpLookupHelper
     */
    private \$ipLookupHelper;

    /**
     * @var MockObject|AuditLogModel
     */
    private \$auditLogModel;

    /**
     * @var MockObject|EmailModel
     */
    private \$emailModel;

    /**
     * @var MockObject|TranslatorInterface
     */
    private \$translator;

    /**
     * @var MockObject|EntityManager
     */
    private \$em;

    /**
     * @var MockObject|\\Swift_Message
     */
    private \$mockSwiftMessage;

    /**
     * @var EmailSubscriber
     */
    private \$subscriber;

    protected function setup(): void
    {
        parent::setUp();

        \$this->ipLookupHelper   = \$this->createMock(IpLookupHelper::class);
        \$this->auditLogModel    = \$this->createMock(AuditLogModel::class);
        \$this->emailModel       = \$this->createMock(EmailModel::class);
        \$this->translator       = \$this->createMock(TranslatorInterface::class);
        \$this->em               = \$this->createMock(EntityManager::class);
        \$this->mockSwiftMessage = \$this->createMock(\\Swift_Message::class);
        \$this->subscriber       = new EmailSubscriber(\$this->ipLookupHelper, \$this->auditLogModel, \$this->emailModel, \$this->translator, \$this->em);
    }

    public function testOnEmailResendWhenShouldTryAgain(): void
    {
        \$this->mockSwiftMessage->leadIdHash = 'idhash';

        \$queueEmailEvent = new QueueEmailEvent(\$this->mockSwiftMessage);

        \$stat = new Stat();
        \$stat->setRetryCount(2);

        \$this->emailModel->expects(\$this->once())
            ->method('getEmailStatus')
            ->willReturn(\$stat);

        \$this->subscriber->onEmailResend(\$queueEmailEvent);
        \$this->assertTrue(\$queueEmailEvent->shouldTryAgain());
    }

    public function testOnEmailResendWhenShouldNotTryAgain(): void
    {
        \$this->mockSwiftMessage->leadIdHash = 'idhash';

        \$this->mockSwiftMessage->expects(\$this->once())
            ->method('getSubject')
            ->willReturn('Subject');

        \$queueEmailEvent = new QueueEmailEvent(\$this->mockSwiftMessage);

        \$stat = new Stat();
        \$stat->setRetryCount(3);

        \$this->emailModel->expects(\$this->once())
            ->method('getEmailStatus')
            ->willReturn(\$stat);

        \$this->subscriber->onEmailResend(\$queueEmailEvent);
        \$this->assertFalse(\$queueEmailEvent->shouldTryAgain());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/EventListener/EmailSubscriberTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/EventListener/EmailSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/EventListener/EmailSubscriberTest.php");
    }
}
