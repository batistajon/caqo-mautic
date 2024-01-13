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

/* @bundles/CoreBundle/Tests/Functional/EventListener/EditorFontsSubscriberTest.php */
class __TwigTemplate_f4d15e8e22f4774a4e2f9dd5dda0992a748741e1f7a921a0697bd22560b41985 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\EventListener;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

class EditorFontsSubscriberTest extends MauticMysqlTestCase
{
    protected function setUp(): void
    {
        \$this->configParams['editor_fonts'] = [
            [
                'name' => 'Arial',
                'font' => 'Arial, Helvetica, sans-serif',
                'url'  => 'https://custom-font.test/arial.css',
            ],
            [
                'name' => 'Courier New',
                'font' => 'Courier New, Courier, monospace',
                'url'  => 'https://custom-font.test/courier.css',
            ],
        ];

        parent::setUp();
    }

    public function testEditorFontsAreLoadedWithDefinedConfigValues(): void
    {
        \$crawler  = \$this->client->request(Request::METHOD_GET, '/');
        \$response = \$crawler->html();

        Assert::assertTrue(\$this->client->getResponse()->isOk());

        Assert::assertStringContainsString(
            'https://custom-font.test/arial.css',
            \$response
        );

        Assert::assertStringContainsString(
            'https://custom-font.test/courier.css',
            \$response
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
        return "@bundles/CoreBundle/Tests/Functional/EventListener/EditorFontsSubscriberTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/EventListener/EditorFontsSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Functional/EventListener/EditorFontsSubscriberTest.php");
    }
}
