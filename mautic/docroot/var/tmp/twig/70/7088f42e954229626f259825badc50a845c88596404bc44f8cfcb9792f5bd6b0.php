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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/AddressTest.php */
class __TwigTemplate_73e241a90b54826f1a1659c731ea6d4636ead648ec6c8ded27e2f09a3cd82438 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Processor;

use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Address;

class AddressTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that an email header with email addresses are parsed into array
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Address::parseList()
     */
    public function testArrayOfAddressesAreReturnedFromEmailHeader()
    {
        \$results = Address::parseList('<user@test.com>,<user2@test.com>');

        \$this->assertEquals(
            [
                'user@test.com'  => null,
                'user2@test.com' => null,
            ],
            \$results
        );
    }

    /**
     * @testdox Obtain hash ID from a special formatted email address
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Address::parseList()
     */
    public function testStatHashIsParsedFromEmail()
    {
        \$hash = Address::parseAddressForStatHash('hello+bounce_123abc@test.com');

        \$this->assertEquals('123abc', \$hash);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/AddressTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/AddressTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/AddressTest.php");
    }
}
