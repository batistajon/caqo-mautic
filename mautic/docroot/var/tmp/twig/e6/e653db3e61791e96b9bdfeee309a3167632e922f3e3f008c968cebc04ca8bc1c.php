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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/UpdateTranslationsStepTest.php */
class __TwigTemplate_03099bd96118828e8ae92ee271a2b09eb93a8bf4581c75310de527d9651c80bb extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Update\\Step;

use Mautic\\CoreBundle\\Helper\\LanguageHelper;
use Mautic\\CoreBundle\\Update\\Step\\UpdateTranslationsStep;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class UpdateTranslationsStepTest extends AbstractStepTest
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private \$translator;

    /**
     * @var MockObject|LanguageHelper
     */
    private \$languageHelper;

    /**
     * @var MockObject|LoggerInterface
     */
    private \$logger;

    /**
     * @var UpdateTranslationsStep
     */
    private \$step;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator     = \$this->createMock(TranslatorInterface::class);
        \$this->languageHelper = \$this->createMock(LanguageHelper::class);
        \$this->logger         = \$this->createMock(LoggerInterface::class);

        \$this->step = new UpdateTranslationsStep(\$this->translator, \$this->languageHelper, \$this->logger);
    }

    public function testLanguageUnpackingSkippedIfJustOneLanguageIsEnabled()
    {
        \$this->languageHelper->expects(\$this->once())
            ->method('getSupportedLanguages')
            ->willReturn(['en_US' => []]);

        \$this->languageHelper->expects(\$this->never())
            ->method('fetchLanguages');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
    }

    public function testFetchingLanguagesLogError()
    {
        \$this->languageHelper->expects(\$this->once())
            ->method('getSupportedLanguages')
            ->willReturn(
                [
                    'en_US' => 'English - US',
                    'es_MX' => 'Spanish - Mexico',
                ]
            );

        \$this->languageHelper->expects(\$this->once())
            ->method('fetchLanguages')
            ->willReturn(['error' => 'there was an error']);

        \$this->logger->expects(\$this->once())
            ->method('error')
            ->with('UPDATE ERROR: there was an error');

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
    }

    public function testUsPackageSkipped()
    {
        \$this->languageHelper->expects(\$this->once())
            ->method('getSupportedLanguages')
            ->willReturn(
                [
                    'en_US' => 'English - US',
                    'es_MX' => 'Spanish - Mexico',
                ]
            );

        \$this->languageHelper->expects(\$this->once())
            ->method('fetchLanguages')
            ->willReturn([]);

        \$this->languageHelper->expects(\$this->once())
            ->method('extractLanguagePackage')
            ->with('es_MX')
            ->willReturn(['error' => false]);

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
    }

    public function testExtractionErrorIsLogged()
    {
        \$this->languageHelper->expects(\$this->once())
            ->method('getSupportedLanguages')
            ->willReturn(
                [
                    'en_US' => 'English - US',
                    'es_MX' => 'Spanish - Mexico',
                ]
            );

        \$this->languageHelper->expects(\$this->once())
            ->method('fetchLanguages')
            ->willReturn([]);

        \$this->languageHelper->expects(\$this->once())
            ->method('extractLanguagePackage')
            ->with('es_MX')
            ->willReturn(['error' => true]);

        \$this->translator->method('trans')
            ->willReturnCallback(
                function (string \$key) {
                    return \$key;
                }
            );

        \$this->logger->expects(\$this->once())
            ->method('error')
            ->with('UPDATE ERROR: mautic.core.update.error_updating_language');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/UpdateTranslationsStepTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/UpdateTranslationsStepTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/UpdateTranslationsStepTest.php");
    }
}
