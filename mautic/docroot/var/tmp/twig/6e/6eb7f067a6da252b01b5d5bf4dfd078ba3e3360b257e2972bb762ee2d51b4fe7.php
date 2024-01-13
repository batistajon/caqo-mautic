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

/* @bundles/EmailBundle/Tests/Controller/AjaxControllerTest.php */
class __TwigTemplate_4edc331ef23be9fd205dc53171295989bda74916f2a7d4ca760525025fc11e84 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\EmailBundle\\Controller\\AjaxController;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Model\\EmailModel;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Session\\Session;

class AjaxControllerTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|Session
     */
    private \$sessionMock;

    /**
     * @var MockObject|ModelFactory
     */
    private \$modelFactoryMock;

    /**
     * @var MockObject|Container
     */
    private \$containerMock;

    /**
     * @var MockObject|EmailModel
     */
    private \$modelMock;

    /**
     * @var MockObject|Email
     */
    private \$emailMock;

    /**
     * @var AjaxController
     */
    private \$controller;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->sessionMock      = \$this->createMock(Session::class);
        \$this->modelFactoryMock = \$this->createMock(ModelFactory::class);
        \$this->containerMock    = \$this->createMock(Container::class);
        \$this->modelMock        = \$this->createMock(EmailModel::class);
        \$this->emailMock        = \$this->createMock(Email::class);
        \$this->controller       = new AjaxController();
        \$this->controller->setContainer(\$this->containerMock);
    }

    public function testSendBatchActionWhenNoIdProvided(): void
    {
        \$this->containerMock->expects(\$this->once())
            ->method('get')
            ->with('mautic.model.factory')
            ->willReturn(\$this->modelFactoryMock);

        \$this->modelFactoryMock->expects(\$this->once())
            ->method('getModel')
            ->with('email')
            ->willReturn(\$this->modelMock);

        \$response = \$this->controller->sendBatchAction(new Request([], []));

        \$this->assertEquals('{\"success\":0}', \$response->getContent());
    }

    public function testSendBatchActionWhenIdProvidedButEmailNotPublished(): void
    {
        \$this->containerMock->expects(\$this->exactly(2))
            ->method('get')
            ->withConsecutive(['mautic.model.factory'], ['session'])
            ->willReturnOnConsecutiveCalls(\$this->modelFactoryMock, \$this->sessionMock);

        \$this->modelFactoryMock->expects(\$this->once())
            ->method('getModel')
            ->with('email')
            ->willReturn(\$this->modelMock);

        \$this->modelMock->expects(\$this->once())
            ->method('getEntity')
            ->with(5)
            ->willReturn(\$this->emailMock);

        \$this->modelMock->expects(\$this->never())
            ->method('sendEmailToLists');

        \$this->sessionMock->expects(\$this->exactly(3))
            ->method('get')
            ->withConsecutive(
                ['mautic.email.send.progress'],
                ['mautic.email.send.stats'],
                ['mautic.email.send.active']
            )
            ->willReturnOnConsecutiveCalls(
                [0, 100],
                ['sent' => 0, 'failed' => 0, 'failedRecipients' => []],
                false
            );

        \$this->emailMock->expects(\$this->once())
            ->method('isPublished')
            ->willReturn(false);

        \$response = \$this->controller->sendBatchAction(new Request([], ['id' => 5, 'pending' => 100]));
        \$expected = '{\"success\":1,\"percent\":0,\"progress\":[0,100],\"stats\":{\"sent\":0,\"failed\":0,\"failedRecipients\":[]}}';
        \$this->assertEquals(\$expected, \$response->getContent());
    }

    public function testSendBatchActionWhenIdProvidedAndEmailIsPublished(): void
    {
        \$this->containerMock->expects(\$this->exactly(2))
            ->method('get')
            ->withConsecutive(['mautic.model.factory'], ['session'])
            ->willReturnOnConsecutiveCalls(\$this->modelFactoryMock, \$this->sessionMock);

        \$this->modelFactoryMock->expects(\$this->once())
            ->method('getModel')
            ->with('email')
            ->willReturn(\$this->modelMock);

        \$this->modelMock->expects(\$this->once())
            ->method('getEntity')
            ->with(5)
            ->willReturn(\$this->emailMock);

        \$this->modelMock->expects(\$this->once())
            ->method('sendEmailToLists')
            ->with(\$this->emailMock, null, 50)
            ->willReturn([50, 0, []]);

        \$this->sessionMock->expects(\$this->exactly(3))
            ->method('get')
            ->withConsecutive(
                ['mautic.email.send.progress'],
                ['mautic.email.send.stats'],
                ['mautic.email.send.active']
            )
            ->willReturn(
                [0, 100],
                ['sent' => 0, 'failed' => 0, 'failedRecipients' => []],
                false
            );

        \$this->emailMock->expects(\$this->once())
            ->method('isPublished')
            ->willReturn(true);

        \$response = \$this->controller->sendBatchAction(new Request([], ['id' => 5, 'pending' => 100, 'batchlimit' => 50]));
        \$expected = '{\"success\":1,\"percent\":50,\"progress\":[50,100],\"stats\":{\"sent\":50,\"failed\":0,\"failedRecipients\":[]}}';
        \$this->assertEquals(\$expected, \$response->getContent());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Controller/AjaxControllerTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Controller/AjaxControllerTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Controller/AjaxControllerTest.php");
    }
}
