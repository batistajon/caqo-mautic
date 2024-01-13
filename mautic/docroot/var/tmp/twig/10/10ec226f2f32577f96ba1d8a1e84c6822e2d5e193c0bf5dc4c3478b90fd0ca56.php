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

/* @bundles/PageBundle/Tests/Form/Type/RedirectListTypeTest.php */
class __TwigTemplate_683fb7d5424099343342a16b4f1748fed046d1442ff4d756a6b48390507f1c87 extends Template
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

namespace Mautic\\PageBundle\\Tests\\Form\\Type;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\PageBundle\\Form\\Type\\RedirectListType;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class RedirectListTypeTest extends TestCase
{
    /**
     * @var CoreParametersHelper|MockObject
     */
    private \$coreParametersHelper;

    /**
     * @var RedirectListType
     */
    private \$form;

    public function setUp(): void
    {
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->form                 = new RedirectListType(\$this->coreParametersHelper);
    }

    public function testGetParent()
    {
        \$this->assertSame(ChoiceType::class, \$this->form->getParent());
    }

    public function testConfigureOptionsChoicesUndefined()
    {
        \$resolver = new OptionsResolver();
        \$this->form->configureOptions(\$resolver);

        \$expectedOptions = [
            'choices'    => [],
            'expanded'   => false,
            'multiple'   => false,
            'label'      => 'mautic.page.form.redirecttype',
            'label_attr' => [
                'class' => 'control-label',
            ],
            'placeholder' => false,
            'required'    => false,
            'attr'        => [
                'class' => 'form-control',
            ],
            'feature' => 'all',
        ];

        \$this->assertSame(\$expectedOptions, \$resolver->resolve());
    }

    public function testConfigureOptionsChoicesDefined()
    {
        \$choices = [
            '1' => 'Jarda',
            '2' => 'Pepa',
        ];

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->willReturn(\$choices);

        \$resolver = new OptionsResolver();
        \$this->form->configureOptions(\$resolver);

        \$expectedOptions = [
            'choices'    => array_flip(\$choices),
            'expanded'   => false,
            'multiple'   => false,
            'label'      => 'mautic.page.form.redirecttype',
            'label_attr' => [
                'class' => 'control-label',
            ],
            'placeholder' => false,
            'required'    => false,
            'attr'        => [
                'class' => 'form-control',
            ],
            'feature' => 'all',
        ];

        \$this->assertSame(\$expectedOptions, \$resolver->resolve());
    }

    public function testGetBlockPrefix()
    {
        \$this->assertSame('redirect_list', \$this->form->getBlockPrefix());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Tests/Form/Type/RedirectListTypeTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Form/Type/RedirectListTypeTest.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Tests/Form/Type/RedirectListTypeTest.php");
    }
}
