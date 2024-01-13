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

/* @bundles/CoreBundle/Tests/Functional/Entity/CommonRepositoryTest.php */
class __TwigTemplate_f141793a0b31533bd913b23998f62ad70cd3872ecf882d49b38fa93ccae1d467 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Entity;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class CommonRepositoryTest extends MauticMysqlTestCase
{
    /**
     * @testdox Test that is:mine does not throw an exception due to bad DQL
     */
    public function testIsMineSearchCommandDoesntCauseExceptionDueToBadDQL()
    {
        \$this->client->request('GET', 's/contacts?search=is:mine');

        \$this->assertEquals(200, \$this->client->getResponse()->getStatusCode());
        \$this->assertStringContainsString('is:mine', \$this->client->getResponse()->getContent());
    }

    public function testIsMineSearchCommandDoesntCauseExceptionDueToBadDQLForCompanies()
    {
        \$this->client->request('GET', 's/companies?search=is:mine');

        \$this->assertEquals(200, \$this->client->getResponse()->getStatusCode());
        \$this->assertStringContainsString('is:mine', \$this->client->getResponse()->getContent());
    }

    public function testIsPublishedSearchCommandDoesntCauseExceptionDueToBadDQLForEmails()
    {
        \$this->client->request('GET', 's/emails?search=is:published');

        \$this->assertEquals(200, \$this->client->getResponse()->getStatusCode());
        \$this->assertStringContainsString('is:published', \$this->client->getResponse()->getContent());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Functional/Entity/CommonRepositoryTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Entity/CommonRepositoryTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Functional/Entity/CommonRepositoryTest.php");
    }
}
