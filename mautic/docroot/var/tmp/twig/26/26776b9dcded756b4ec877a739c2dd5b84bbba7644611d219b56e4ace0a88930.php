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

/* @bundles/CoreBundle/Tests/Unit/Form/DataTransformer/BarStringTransformerTest.php */
class __TwigTemplate_db0f041d15d6953193f2d40a37bc7c70a1a72f595a359d21b03b272fa8678e49 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Form\\DataTransformer;

use Mautic\\CoreBundle\\Form\\DataTransformer\\BarStringTransformer;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

final class BarStringTransformerTest extends TestCase
{
    /**
     * @dataProvider transformProvider
     *
     * @param mixed \$value
     */
    public function testTransform(\$value, string \$expected): void
    {
        \$transformer = new BarStringTransformer();
        Assert::assertSame(\$expected, \$transformer->transform(\$value));
    }

    /**
     * @return \\Generator<array<mixed>>
     */
    public function transformProvider(): \\Generator
    {
        yield [null, ''];
        yield [[], ''];
        yield [123, ''];
        yield [new \\StdClass(), ''];
        yield ['', ''];
        yield ['value A', ''];
        yield [['value A'], 'value A'];
        yield [['value A', 'value B'], 'value A|value B'];
    }

    /**
     * @dataProvider reverseTransformProvider
     *
     * @param mixed    \$value
     * @param string[] \$expected
     */
    public function testReverseTransform(\$value, array \$expected): void
    {
        \$transformer = new BarStringTransformer();
        Assert::assertSame(\$expected, \$transformer->reverseTransform(\$value));
    }

    /**
     * @return \\Generator<array<mixed>>
     */
    public function reverseTransformProvider(): \\Generator
    {
        yield [null, []];
        yield [[], []];
        yield [123, []];
        yield [new \\StdClass(), []];
        yield ['', ['']];
        yield ['value A', ['value A']];
        yield ['value A|value B', ['value A', 'value B']];
        yield ['value A| value B  |  | value C', ['value A', 'value B', '', 'value C']];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Form/DataTransformer/BarStringTransformerTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Form/DataTransformer/BarStringTransformerTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Form/DataTransformer/BarStringTransformerTest.php");
    }
}
