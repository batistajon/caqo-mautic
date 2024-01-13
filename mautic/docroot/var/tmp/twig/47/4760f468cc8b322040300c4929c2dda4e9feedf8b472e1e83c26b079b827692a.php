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

/* @bundles/CoreBundle/Tests/Functional/Helper/LanguageHelperTest.php */
class __TwigTemplate_70076fc785fa7a6836046c19c6eb9f308bc3c4e28bd0df0be51ab4ecfe728175 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Helper;

use Mautic\\CoreBundle\\Helper\\LanguageHelper;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;

final class LanguageHelperTest extends MauticMysqlTestCase
{
    public function testGettingLanguageFiles(): void
    {
        \$languageHelper = self::\$container->get(LanguageHelper::class);
        \\assert(\$languageHelper instanceof LanguageHelper);

        \$languageFiles = \$languageHelper->getLanguageFiles();

        // As the list depends on linstalled plugins, let's assert only for random files that should exist.
        Assert::assertMatchesRegularExpression('/app\\/bundles\\/EmailBundle\\/Translations\\/en_US\\/(messages|validators|flashes)\\.ini/', \$languageFiles['EmailBundle'][0]);
        Assert::assertMatchesRegularExpression('/app\\/bundles\\/LeadBundle\\/Translations\\/en_US\\/(messages|validators|flashes)\\.ini/', \$languageFiles['LeadBundle'][1]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Functional/Helper/LanguageHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Helper/LanguageHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Functional/Helper/LanguageHelperTest.php");
    }
}
