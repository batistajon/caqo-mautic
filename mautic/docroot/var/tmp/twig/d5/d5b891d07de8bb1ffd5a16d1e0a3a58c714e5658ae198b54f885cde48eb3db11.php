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

/* @bundles/LeadBundle/Tests/Segment/DoNotContact/DoNotContactPartsTest.php */
class __TwigTemplate_142a9af9c7a352fcdff7d0315b34a908041701e344233e27fb096f78b1eb911c extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\DoNotContact;

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Segment\\DoNotContact\\DoNotContactParts;

class DoNotContactPartsTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testParts(string \$field, string \$channel, int \$type): void
    {
        \$doNotContactParts = new DoNotContactParts(\$field);
        \$this->assertSame(\$channel, \$doNotContactParts->getChannel());
        \$this->assertSame(\$type, \$doNotContactParts->getParameterType());
    }

    /**
     * @return iterable<array<string,string|int>>
     */
    public function dataProvider(): iterable
    {
        yield [
            'field'   => 'dnc_bounced',
            'channel' => 'email',
            'type'    => DoNotContact::BOUNCED,
        ];

        yield [
            'field'   => 'dnc_unsubscribed',
            'channel' => 'email',
            'type'    => DoNotContact::UNSUBSCRIBED,
        ];

        yield [
            'field'   => 'dnc_manual_email',
            'channel' => 'email',
            'type'    => DoNotContact::MANUAL,
        ];

        yield [
            'field'   => 'dnc_bounced_sms',
            'channel' => 'sms',
            'type'    => DoNotContact::BOUNCED,
        ];

        yield [
            'field'   => 'dnc_unsubscribed_sms',
            'channel' => 'sms',
            'type'    => DoNotContact::UNSUBSCRIBED,
        ];

        yield [
            'field'   => 'dnc_manual_sms',
            'channel' => 'sms',
            'type'    => DoNotContact::MANUAL,
        ];

        yield [
            'field'   => 'dnc_unsubscribed_sms_manually',
            'channel' => 'sms',
            'type'    => DoNotContact::MANUAL,
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
        return "@bundles/LeadBundle/Tests/Segment/DoNotContact/DoNotContactPartsTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/DoNotContact/DoNotContactPartsTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Segment/DoNotContact/DoNotContactPartsTest.php");
    }
}
