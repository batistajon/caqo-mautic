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

/* @bundles/EmailBundle/Tests/Model/EmailModelBuildUrlTest.php */
class __TwigTemplate_48dc9b5071e21b28e94e75f531a33044169dd7eb19ad3d90b116a7d18dd0ea41 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\EmailBundle\\Model\\EmailModel;

class EmailModelBuildUrlTest extends MauticMysqlTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['site_url'] = 'https://foo.bar.com';
        parent::setUp();
    }

    public function testSiteUrlAlwaysTakesPrecedenceWhenBuildingUrls(): void
    {
        /** @var EmailModel \$emailModel */
        \$emailModel = self::\$container->get('mautic.email.model.email');
        \$idHash     = uniqid();
        \$url        = \$emailModel->buildUrl('mautic_email_unsubscribe', ['idHash' => \$idHash]);

        self::assertSame('https://foo.bar.com/email/unsubscribe/'.\$idHash, \$url);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Model/EmailModelBuildUrlTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Model/EmailModelBuildUrlTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Model/EmailModelBuildUrlTest.php");
    }
}
