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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/RemoveDeletedFilesStepTest.php */
class __TwigTemplate_9969d39edff8fc2fc9d41e6cfec510acdc31ccceaa38815b2bccf154cc732e98 extends Template
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

use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Update\\Step\\RemoveDeletedFilesStep;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class RemoveDeletedFilesStepTest extends AbstractStepTest
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private \$translator;

    /**
     * @var MockObject|LoggerInterface
     */
    private \$logger;

    /**
     * @var MockObject|PathsHelper
     */
    private \$pathsHelper;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator  = \$this->createMock(TranslatorInterface::class);
        \$this->logger      = \$this->createMock(LoggerInterface::class);
        \$this->pathsHelper = \$this->createMock(PathsHelper::class);
    }

    public function testNothingDoneIfDeletedFileListDoesNotExist()
    {
        \$this->pathsHelper->method('getRootPath')
            ->willReturn(__DIR__);

        \$step = \$this->getStep();

        \$step->execute(\$this->progressBar, \$this->input, \$this->output);
        \$this->assertEquals(0, \$this->progressBar->getProgress());
    }

    public function testFileIsDeleted()
    {
        \$resourcePath = __DIR__.'/resources';

        file_put_contents(\$resourcePath.'/deleted_files.txt', '[\"delete_me.txt\"]');
        file_put_contents(\$resourcePath.'/delete_me.txt', '');

        \$this->assertFileExists(\$resourcePath.'/delete_me.txt');

        \$this->pathsHelper->method('getRootPath')
            ->willReturn(\$resourcePath);

        \$step = \$this->getStep();

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('');

        \$step->execute(\$this->progressBar, \$this->input, \$this->output);

        \$this->assertFileDoesNotExist(\$resourcePath.'/delete_me.txt');
        \$this->assertFileDoesNotExist(\$resourcePath.'/deleted_files.txt');
    }

    public function testNonExistentFileIsIgnored()
    {
        \$resourcePath = __DIR__.'/resources';
        file_put_contents(\$resourcePath.'/deleted_files.txt', '[\"delete_me.txt\"]');

        \$this->assertFileDoesNotExist(\$resourcePath.'/delete_me.txt');

        \$this->pathsHelper->method('getRootPath')
            ->willReturn(\$resourcePath);

        \$step = \$this->getStep();

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('');

        \$step->execute(\$this->progressBar, \$this->input, \$this->output);
        \$this->logger->expects(\$this->never())
            ->method('error');

        \$this->assertFileDoesNotExist(\$resourcePath.'/deleted_files.txt');
    }

    private function getStep(): RemoveDeletedFilesStep
    {
        return new RemoveDeletedFilesStep(\$this->translator, \$this->pathsHelper, \$this->logger);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/RemoveDeletedFilesStepTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/RemoveDeletedFilesStepTest.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/RemoveDeletedFilesStepTest.php");
    }
}
