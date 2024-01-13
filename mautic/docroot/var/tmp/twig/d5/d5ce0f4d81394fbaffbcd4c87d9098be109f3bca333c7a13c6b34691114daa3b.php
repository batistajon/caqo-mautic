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

/* @bundles/PageBundle/Tests/Form/Type/PageListTypeTest.php */
class __TwigTemplate_6ea145a3c92b21a988f0a9269f41cc3c17f84569975284afdcf84d69c2e71f82 extends Template
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

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\PageBundle\\Entity\\PageRepository;
use Mautic\\PageBundle\\Form\\Type\\PageListType;
use Mautic\\PageBundle\\Model\\PageModel;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class PageListTypeTest extends TestCase
{
    private \$page;
    private \$pageModelMock;

    public function setUp(): void
    {
        \$corePermissionsHelper = \$this->createMock(CorePermissions::class);
        \$this->pageModelMock   = \$this->createMock(PageModel::class);
        \$this->page            = new PageListType(\$this->pageModelMock, \$corePermissionsHelper);
    }

    public function testPageListTypeOptionsChoices()
    {
        \$pageRepository = \$this->createMock(PageRepository::class);
        \$resolver       = new OptionsResolver();

        \$this->pageModelMock
            ->method('getRepository')
            ->willReturn(\$pageRepository);

        \$pageRepository->method('getPageList')
            ->willReturn([]);

        \$this->page->configureOptions(\$resolver);

        \$expectedOptions = [
            'placeholder' => false,
            'expanded'    => false,
            'multiple'    => true,
            'required'    => false,
            'top_level'   => 'variant',
            'ignore_ids'  => [],
            'choices'     => [],
        ];
        \$this->assertEquals(\$expectedOptions, \$resolver->resolve());
    }

    public function testGetParent()
    {
        \$this->assertSame(ChoiceType::class, \$this->page->getParent());
    }

    public function testGetBlockPrefix()
    {
        \$this->assertSame('page_list', \$this->page->getBlockPrefix());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Tests/Form/Type/PageListTypeTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Form/Type/PageListTypeTest.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Tests/Form/Type/PageListTypeTest.php");
    }
}
