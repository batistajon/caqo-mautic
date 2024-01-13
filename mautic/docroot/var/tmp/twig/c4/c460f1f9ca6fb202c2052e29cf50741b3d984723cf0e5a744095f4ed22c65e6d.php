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

/* @bundles/CoreBundle/Tests/Traits/ControllerTrait.php */
class __TwigTemplate_bc2ccd5e031c902bf555b671104d53d83166c5b22b799f140fa2e7ab81442a1d extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Traits;

use Mautic\\PageBundle\\Tests\\Controller\\PageControllerTest;

trait ControllerTrait
{
    protected function getControllerColumnTests(
        string \$urlAlias,
        string \$routeAlias,
        string \$column,
        string \$tableAlias,
        string \$column2
    ): void {
        \$crawler         = \$this->client->request('GET', '/s/'.\$urlAlias);
        \$clientResponse  = \$this->client->getResponse();
        \$responseContent = \$clientResponse->getContent();
        PageControllerTest::assertTrue(\$clientResponse->isOk());

        PageControllerTest::assertStringContainsString(
            'col-'.\$routeAlias.'-dateAdded',
            \$responseContent,
            'The return must contain the created at date column'
        );
        PageControllerTest::assertStringContainsString(
            'col-'.\$routeAlias.'-'.\$column,
            \$responseContent,
            'The return must contain the modified date column'
        );

        PageControllerTest::assertEquals(
            1,
            \$crawler->filterXPath(
                \"//th[contains(@class,'col-\".\$routeAlias.'-'.\$column.\"')]//i[contains(@class, 'fa-sort-amount-desc')]\"
            )->count(),
            'The order must be desc'
        );

        \$crawler = \$this->client->request(
            'GET',
            '/s/'.\$urlAlias.'?tmpl=list&name='.\$routeAlias.'&orderby='.\$tableAlias.\$column
        );
        PageControllerTest::assertEquals(
            1,
            \$crawler->filterXPath(
                \"//th[contains(@class,'col-\".\$routeAlias.'-'.\$column.\"')]//i[contains(@class, 'fa-sort-amount-asc')]\"
            )->count(),
            'The order must be asc'
        );

        \$crawler = \$this->client->request(
            'GET',
            '/s/'.\$urlAlias.'?tmpl=list&name='.\$routeAlias.'&orderby='.\$tableAlias.\$column2
        );
        PageControllerTest::assertEquals(
            1,
            \$crawler->filterXPath(
                \"//th[contains(@class,'col-\".\$routeAlias.'-'.\$column2.\"')]//i[contains(@class, 'fa-sort-amount-asc')]\"
            )->count(),
            'The order must be asc'
        );

        \$crawler = \$this->client->request(
            'GET',
            '/s/'.\$urlAlias.'?tmpl=list&name='.\$routeAlias.'&orderby='.\$tableAlias.\$column2
        );
        PageControllerTest::assertEquals(
            1,
            \$crawler->filterXPath(
                \"//th[contains(@class,'col-\".\$routeAlias.'-'.\$column2.\"')]//i[contains(@class, 'fa-sort-amount-desc')]\"
            )->count(),
            'The order must be desc'
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Traits/ControllerTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Traits/ControllerTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Traits/ControllerTrait.php");
    }
}
