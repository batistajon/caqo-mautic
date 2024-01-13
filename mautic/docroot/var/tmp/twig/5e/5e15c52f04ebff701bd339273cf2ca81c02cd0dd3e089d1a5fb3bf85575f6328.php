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

/* @bundles/EmailBundle/Tests/Form/Type/EmailTypeTest.php */
class __TwigTemplate_2d99e49e1d36833a79d74781997599525332bae2c93c9f3d7c672b8f923aecab extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Form\\Type;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\ThemeHelperInterface;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Form\\Type\\EmailType;
use Mautic\\StageBundle\\Model\\StageModel;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class EmailTypeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private \$translator;

    /**
     * @var MockObject|EntityManager
     */
    private \$entityManager;

    /**
     * @var MockObject|StageModel
     */
    private \$stageModel;

    /**
     * @var MockObject|FormBuilderInterface
     */
    private \$formBuilder;

    /**
     * @var EmailType
     */
    private \$form;

    /**
     * @var CoreParametersHelper|MockObject
     */
    private \$coreParametersHelper;

    /**
     * @var ThemeHelperInterface|MockObject
     */
    private \$themeHelper;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator           = \$this->createMock(TranslatorInterface::class);
        \$this->entityManager        = \$this->createMock(EntityManager::class);
        \$this->stageModel           = \$this->createMock(StageModel::class);
        \$this->formBuilder          = \$this->createMock(FormBuilderInterface::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->themeHelper          = \$this->createMock(ThemeHelperInterface::class);
        \$this->form                 = new EmailType(
            \$this->translator,
            \$this->entityManager,
            \$this->stageModel,
            \$this->coreParametersHelper,
            \$this->themeHelper
        );

        \$this->formBuilder->method('create')->willReturnSelf();
    }

    public function testBuildForm(): void
    {
        \$options = ['data' => new Email()];
        \$names   = [];
        \$this->themeHelper
            ->expects(\$this->once())
            ->method('getCurrentTheme')
            ->with('blank', 'email')
            ->willReturn('blank');

        \$this->formBuilder->method('add')
            ->with(
                \$this->callback(
                    function (\$name) use (&\$names) {
                        \$names[] = \$name;

                        return true;
                    }
                )
            );

        \$this->form->buildForm(\$this->formBuilder, \$options);

        Assert::assertContains('buttons', \$names);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/Form/Type/EmailTypeTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Form/Type/EmailTypeTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/Form/Type/EmailTypeTest.php");
    }
}
