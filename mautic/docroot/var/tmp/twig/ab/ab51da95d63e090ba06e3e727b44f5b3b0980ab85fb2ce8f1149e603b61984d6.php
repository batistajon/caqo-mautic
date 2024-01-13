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

/* @bundles/FormBundle/Tests/Entity/FormTest.php */
class __TwigTemplate_d0263afd84fff48094b91cbb98cb0ec0c00172dbbcae55f3738351c267a2d6cd extends Template
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

namespace Mautic\\FormBundle\\Tests\\Entity;

use Mautic\\FormBundle\\Entity\\Form;
use PHPUnit\\Framework\\Assert;

class FormTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider setNoIndexDataProvider
     */
    public function testSetNoIndex(\$value, \$expected, array \$changes): void
    {
        \$form = new Form();
        \$form->setNoIndex(\$value);

        Assert::assertSame(\$expected, \$form->getNoIndex());
        Assert::assertSame(\$changes, \$form->getChanges());
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
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Tests/Entity/FormTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Entity/FormTest.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Tests/Entity/FormTest.php");
    }
}
