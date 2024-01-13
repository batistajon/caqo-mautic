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

/* @bundles/UserBundle/Tests/Functional/Controller/PublicControllerTest.php */
class __TwigTemplate_498cfc8f35b2c2bda1dd3155be00ece105c0e56ee2b0ff2826dcfa9810261600 extends Template
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

namespace Mautic\\UserBundle\\Tests\\Functional\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class PublicControllerTest extends MauticMysqlTestCase
{
    /**
     * Tests to ensure that xss is prevented on password reset page.
     */
    public function testXssFilterOnPasswordReset(): void
    {
        \$this->client->request('GET', '/passwordreset?bundle=%27-alert(\"XSS%20TEST%20Mautic\")-%27');
        \$clientResponse = \$this->client->getResponse();
        \$this->assertSame(200, \$clientResponse->getStatusCode(), 'Return code must be 200.');
        \$responseData = \$clientResponse->getContent();
        // Tests that actual string is not present.
        \$this->assertStringNotContainsString('-alert(\"xss test mautic\")-', \$responseData, 'XSS injection attempt is filtered.');
        // Tests that sanitized string is passed.
        \$this->assertStringContainsString('alertxsstestmautic', \$responseData, 'XSS sanitized string is present.');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Tests/Functional/Controller/PublicControllerTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Functional/Controller/PublicControllerTest.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Tests/Functional/Controller/PublicControllerTest.php");
    }
}
