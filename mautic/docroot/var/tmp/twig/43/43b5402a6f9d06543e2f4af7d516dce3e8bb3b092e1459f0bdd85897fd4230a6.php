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

/* @bundles/EmailBundle/Tests/Swiftmailer/Spool/DelegatingSpoolTest.php */
class __TwigTemplate_0f2d65880b6c32705bdf0619ba2bc83a89de83d482bde230c00d9816e2d56851 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Swiftmailer\\Spool;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\EmailBundle\\Swiftmailer\\Spool\\DelegatingSpool;
use Mautic\\EmailBundle\\Swiftmailer\\Transport\\MomentumTransport;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Finder\\Finder;

class DelegatingSpoolTest extends TestCase
{
    /**
     * @var CoreParametersHelper|MockObject
     */
    private \$coreParametersHelper;

    /**
     * @var \\Swift_Transport|MockObject
     */
    private \$realTransport;

    /**
     * @var \\Swift_Mime_SimpleMessage|MockObject
     */
    private \$message;

    protected function setUp(): void
    {
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->realTransport        = \$this->createMock(\\Swift_Transport::class);
        \$this->message              = \$this->createMock(\\Swift_Mime_SimpleMessage::class);
    }

    public function testEmailIsQueuedIfSpoolingIsEnabled()
    {
        \$spoolPath = __DIR__.'/tmp';

        \$this->coreParametersHelper->expects(\$this->exactly(2))
            ->method('get')
            ->withConsecutive(['mailer_spool_type'], ['mailer_spool_path'])
            ->willReturnOnConsecutiveCalls('file', \$spoolPath);

        \$spool = new DelegatingSpool(\$this->coreParametersHelper, \$this->realTransport);

        \$failed = [];
        \$spool->delegateMessage(\$this->message, \$failed);

        \$this->assertTrue(\$spool->wasMessageSpooled());

        \$finder = (new Finder())
            ->files()
            ->in(\$spoolPath)
            ->name('*.message');

        \$this->assertEquals(1, count(\$finder));

        // Cleanup test files
        /** @var \\SplFileInfo \$file */
        foreach (\$finder as \$file) {
            \$messageFile = \$file->getPathname();
            unlink(\$messageFile);
        }

        rmdir(\$spoolPath);
    }

    public function testEmailIsSentImmediatelyIfSpoolingIsDisabled()
    {
        \$spoolPath = __DIR__.'/tmp';

        \$this->coreParametersHelper->expects(\$this->exactly(2))
            ->method('get')
            ->withConsecutive(['mailer_spool_type'], ['mailer_spool_path'])
            ->willReturnOnConsecutiveCalls('memory', \$spoolPath);

        \$this->realTransport->expects(\$this->once())
            ->method('send')
            ->willReturn(1);

        \$spool = new DelegatingSpool(\$this->coreParametersHelper, \$this->realTransport);

        \$failed = [];
        \$sent   = \$spool->delegateMessage(\$this->message, \$failed);

        \$this->assertFalse(\$spool->wasMessageSpooled());
        \$this->assertEquals(1, \$sent);

        rmdir(\$spoolPath);
    }

    public function testThatTokenizationIsDisabledIfFileSpoolIsEnabled()
    {
        \$this->realTransport = \$this->createMock(MomentumTransport::class);
        \$this->coreParametersHelper->expects(\$this->exactly(2))
            ->method('get')
            ->withConsecutive(['mailer_spool_type'], ['mailer_spool_path'])
            ->willReturnOnConsecutiveCalls('file', null);

        \$spool = new DelegatingSpool(\$this->coreParametersHelper, \$this->realTransport);
        \$this->assertFalse(\$spool->isTokenizationEnabled());
    }

    public function testThatTokenizationIsEnabledIfFileSpoolIsDisabled()
    {
        \$this->realTransport = \$this->createMock(MomentumTransport::class);
        \$this->coreParametersHelper->expects(\$this->exactly(2))
            ->method('get')
            ->withConsecutive(['mailer_spool_type'], ['mailer_spool_path'])
            ->willReturnOnConsecutiveCalls('notFile', null);

        \$spool = new DelegatingSpool(\$this->coreParametersHelper, \$this->realTransport);
        \$this->assertTrue(\$spool->isTokenizationEnabled());
    }

    public function testThatTokenizationIsDisabledIfRealTransposrtDoesNotImplementTokenTransportInterface()
    {
        \$this->coreParametersHelper->expects(\$this->exactly(2))
            ->method('get')
            ->withConsecutive(['mailer_spool_type'], ['mailer_spool_path'])
            ->willReturnOnConsecutiveCalls('notFile', null);

        \$spool = new DelegatingSpool(\$this->coreParametersHelper, \$this->realTransport);
        \$this->assertFalse(\$spool->isTokenizationEnabled());
    }

    public function testDelegateMessageWillReturnIntEvenIfTransportWillNot()
    {
        \$spoolPath = __DIR__.'/tmp';

        \$this->coreParametersHelper->expects(\$this->exactly(2))
            ->method('get')
            ->withConsecutive(['mailer_spool_type'], ['mailer_spool_path'])
            ->willReturnOnConsecutiveCalls('memory', \$spoolPath);

        \$this->realTransport->expects(\$this->once())
            ->method('send')
            ->willReturn(null); // null. Not int. Must be typed to int.

        \$spool  = new DelegatingSpool(\$this->coreParametersHelper, \$this->realTransport);
        \$failed = [];
        \$sent   = \$spool->delegateMessage(\$this->message, \$failed);

        \$this->assertEquals(0, \$sent);

        rmdir(\$spoolPath);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Swiftmailer/Spool/DelegatingSpoolTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Swiftmailer/Spool/DelegatingSpoolTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Swiftmailer/Spool/DelegatingSpoolTest.php");
    }
}
