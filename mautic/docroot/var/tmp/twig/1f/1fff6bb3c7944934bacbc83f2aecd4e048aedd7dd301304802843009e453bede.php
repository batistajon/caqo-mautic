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

/* @bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Callback/ResponseItemTest.php */
class __TwigTemplate_39ba0bfe8ed52577cb11aaa20db450676cfb5b710d7ae0fde51ee8000a6d6099 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Swiftmailer\\SendGrid\\Callback;

use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Callback\\ResponseItem;
use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Exception\\ResponseItemException;
use Mautic\\LeadBundle\\Entity\\DoNotContact;

class ResponseItemTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testFullResponseItem()
    {
        \$item = [
            'email'  => 'info@example.com',
            'reason' => 'My reason',
            'event'  => 'bounce',
        ];

        \$responseItem = new ResponseItem(\$item);

        \$this->assertSame('info@example.com', \$responseItem->getEmail());
        \$this->assertSame('My reason', \$responseItem->getReason());
        \$this->assertSame(DoNotContact::BOUNCED, \$responseItem->getDncReason());
    }

    public function testResponseItemWithoutReason()
    {
        \$item = [
            'email'  => 'info@example.com',
            'event'  => 'spamreport',
        ];

        \$responseItem = new ResponseItem(\$item);

        \$this->assertSame('info@example.com', \$responseItem->getEmail());
        \$this->assertNull(\$responseItem->getReason());
        \$this->assertSame(DoNotContact::BOUNCED, \$responseItem->getDncReason());
    }

    public function testResponseItemWithoutEmail()
    {
        \$item = [
            'event'  => 'spamreport',
        ];

        \$this->expectException(ResponseItemException::class);
        new ResponseItem(\$item);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Callback/ResponseItemTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Callback/ResponseItemTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Swiftmailer/SendGrid/Callback/ResponseItemTest.php");
    }
}
