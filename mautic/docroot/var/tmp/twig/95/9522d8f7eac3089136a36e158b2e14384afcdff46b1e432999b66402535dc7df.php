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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapperTest.php */
class __TwigTemplate_f2a8f4f1a571eca229d00ec3edd4cd028b1de3e6ca59cc10ebe4722c759dfe66 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Processor\\Bounce\\Mapper;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\CategoryNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Category as Definition;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Mapper\\Category;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Mapper\\CategoryMapper;

class CategoryMapperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that the Category object is returned
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Mapper\\CategoryMapper::map()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Category
     */
    public function testCategoryIsMapped()
    {
        \$category = CategoryMapper::map(Definition::ANTISPAM);

        \$this->assertInstanceOf(Category::class, \$category);
    }

    /**
     * @testdox Test that exception is thrown if a category is not found
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Mapper\\CategoryMapper::map()
     */
    public function testExceptionIsThrownWithUnrecognizedCategory()
    {
        \$this->expectException(CategoryNotFound::class);

        CategoryMapper::map('bippitybop');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapperTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapperTest.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/Bounce/Mapper/CategoryMapperTest.php");
    }
}
