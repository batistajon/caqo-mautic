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

/* @bundles/EmailBundle/Tests/Event/EmailSendEventTest.php */
class __TwigTemplate_5d46df983d17429bd59deab60331762cd80c051287d8966abb0bafd647ed31e0 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Event;

use Mautic\\EmailBundle\\Event\\EmailSendEvent;

class EmailSendEventTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var EmailSendEvent
     */
    private \$emailSendEvent;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->emailSendEvent = new EmailSendEvent();
    }

    /**
     * Firstly set HTML content, then set empty plain content. Plain text should be generated.
     */
    public function testSetPlainTextWhenNeedGeneratedPlainText()
    {
        \$this->emailSendEvent->setContent('<h1>HTML content</h1>');
        \$this->emailSendEvent->setPlainText('');
        \$this->assertSame('HTML CONTENT', \$this->emailSendEvent->getPlainText());
    }

    /**
     * Firstly set HTML content, then set plain content. Plain text should not be generated.
     */
    public function testSetPlainTextWhenNotNeedGeneratedPlainText()
    {
        \$this->emailSendEvent->setContent('<h1>HTML content</h1>');
        \$this->emailSendEvent->setPlainText('plain content');
        \$this->assertSame('plain content', \$this->emailSendEvent->getPlainText());
    }

    /**
     * Firstly set empty plain content, then set HTML content. Plain text should be generated.
     */
    public function testSetContentWhenNeedGeneratedPlainText()
    {
        \$this->emailSendEvent->setPlainText('');
        \$this->emailSendEvent->setContent('<h1>HTML content</h1>');
        \$this->assertSame('HTML CONTENT', \$this->emailSendEvent->getPlainText());
    }

    /**
     * Firstly set plain content, then set HTML content. Plain text should not be generated.
     */
    public function testSetContentWhenNotNeedGeneratedPlainText()
    {
        \$this->emailSendEvent->setPlainText('plain content');
        \$this->emailSendEvent->setContent('<h1>HTML content</h1>');
        \$this->assertSame('plain content', \$this->emailSendEvent->getPlainText());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Event/EmailSendEventTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Event/EmailSendEventTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Event/EmailSendEventTest.php");
    }
}
