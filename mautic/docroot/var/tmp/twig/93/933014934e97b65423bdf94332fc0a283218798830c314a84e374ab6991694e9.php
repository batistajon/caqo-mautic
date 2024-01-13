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

/* @bundles/PageBundle/Tests/Entity/HitTest.php */
class __TwigTemplate_3734e0bbc03098cea1862f89f81cb3b2602a53d375a767af465c787f531d8500 extends Template
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

use Mautic\\PageBundle\\Entity\\Hit;
use PHPUnit\\Framework\\Assert;

class HitTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider setUrlTitle
     */
    public function testSetUrlTitle(string \$urlTitle, int \$expected): void
    {
        \$hit = new Hit();
        \$hit->setUrlTitle(\$urlTitle);

        Assert::assertEquals(\$expected, mb_strlen(\$hit->getUrlTitle()));
    }

    /**
     * @return iterable<array<int,int|string>>
     */
    public function setUrlTitle(): iterable
    {
        yield ['custom', 6];
        yield ['Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars Title longer than 191 chars ', 191];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Tests/Entity/HitTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Entity/HitTest.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Tests/Entity/HitTest.php");
    }
}
