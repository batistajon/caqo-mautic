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

/* @bundles/PageBundle/Tests/Entity/PageTest.php */
class __TwigTemplate_ff71cf7753378a2509c4d0ab5d28bd82448e073c092ce86ec2dd039c83d2bb95 extends Template
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

namespace Mautic\\PageBundle\\Tests\\Entity;

use Mautic\\PageBundle\\Entity\\Page;
use PHPUnit\\Framework\\Assert;

class PageTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider setIsPreferenceCenterDataProvider
     */
    public function testSetIsPreferenceCenter(\$value, \$expected, array \$changes): void
    {
        \$page = new Page();
        \$page->setIsPreferenceCenter(\$value);

        Assert::assertSame(\$expected, \$page->getIsPreferenceCenter());
        Assert::assertSame(\$changes, \$page->getChanges());
    }

    public function setIsPreferenceCenterDataProvider(): iterable
    {
        yield [null, null, []];
        yield [true, true, ['isPreferenceCenter' => [null, true]]];
        yield [false, false, ['isPreferenceCenter' => [null, false]]];
        yield ['', false, ['isPreferenceCenter' => [null, false]]];
        yield [0, false, ['isPreferenceCenter' => [null, false]]];
        yield ['string', true, ['isPreferenceCenter' => [null, true]]];
    }

    /**
     * @dataProvider setNoIndexDataProvider
     */
    public function testSetNoIndex(\$value, \$expected, array \$changes): void
    {
        \$page = new Page();
        \$page->setNoIndex(\$value);

        Assert::assertSame(\$expected, \$page->getNoIndex());
        Assert::assertSame(\$changes, \$page->getChanges());
    }

    public function setNoIndexDataProvider(): iterable
    {
        yield [null, null, []];
        yield [true, true, ['noIndex' => [null, true]]];
        yield [false, false, ['noIndex' => [null, false]]];
        yield ['', false, ['noIndex' => [null, false]]];
        yield [0, false, ['noIndex' => [null, false]]];
        yield ['string', true, ['noIndex' => [null, true]]];
    }

    /**
     * Test setHeadScript and getHeadScript.
     *
     * @return void
     */
    public function testSetHeadScript()
    {
        \$script = '<script>console.log(\"test\")';
        \$page   = new Page();
        \$page->setHeadScript(\$script);

        \$this->assertEquals(\$script, \$page->getHeadScript());
    }

    /**
     * Test setFooterScript and getFooterScript.
     *
     * @return void
     */
    public function testSetFooterScript()
    {
        \$script = '<script>console.log(\"test\")';
        \$page   = new Page();
        \$page->setFooterScript(\$script);

        \$this->assertEquals(\$script, \$page->getFooterScript());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Tests/Entity/PageTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Entity/PageTest.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Tests/Entity/PageTest.php");
    }
}
