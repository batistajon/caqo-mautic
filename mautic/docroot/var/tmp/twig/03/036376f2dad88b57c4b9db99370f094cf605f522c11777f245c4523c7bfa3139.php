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

/* @bundles/CoreBundle/Test/Templating/Helper/TranslatorHelperTest.php */
class __TwigTemplate_99a02f2c300011db53bf558f705bd1e81d304f61accea5623baedbf09e2b10be extends Template
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

namespace Mautic\\CoreBundle\\Test\\Templating\\Helper;

use Mautic\\CoreBundle\\Templating\\Helper\\TranslatorHelper;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\Translator;

class TranslatorHelperTest extends TestCase
{
    public function testGetJsLangBasedOnLocale(): void
    {
        \$translator = \$this->createMock(Translator::class);
        \$translator->method('setLocale')->willReturnCallback(
            fn (\$locale) => \$translator->method('getLocale')->willReturn(\$locale)
        );
        \$translator->method('getCatalogue')->willReturnCallback(
            fn () => new TranslatorCatalogue(\$translator)
        );

        \$translatorHelper = new TranslatorHelper(\$translator);
        \$jsLang           = json_decode(\$translatorHelper->getJsLang(), true);
        \$this->assertArrayHasKey('mautic.custom.string', \$jsLang);
        \$this->assertEquals('en_US string', \$jsLang['mautic.custom.string']);

        \$translator->setLocale('fr_FR');
        \$translatorHelper = new TranslatorHelper(\$translator);
        \$jsLang           = json_decode(\$translatorHelper->getJsLang(), true);
        \$this->assertArrayHasKey('mautic.custom.string', \$jsLang);
        \$this->assertEquals('fr_FR string', \$jsLang['mautic.custom.string']);
    }
}

class TranslatorCatalogue
{
    /**
     * @var Translator
     */
    private \$translator;

    public function __construct(Translator \$translator)
    {
        \$this->translator = \$translator;
    }

    /**
     * @return string[]
     */
    public function all()
    {
        switch (\$this->translator->getLocale()) {
            case 'fr_FR':
                return ['mautic.custom.string' => 'fr_FR string'];
            case 'en_US':
            default:
                return ['mautic.custom.string' => 'en_US string'];
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Test/Templating/Helper/TranslatorHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Test/Templating/Helper/TranslatorHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Test/Templating/Helper/TranslatorHelperTest.php");
    }
}
