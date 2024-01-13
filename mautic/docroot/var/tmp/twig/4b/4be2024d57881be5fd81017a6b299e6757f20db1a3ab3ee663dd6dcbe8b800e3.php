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

/* @bundles/LeadBundle/Tests/Entity/TagRepositoryTest.php */
class __TwigTemplate_e2d4c578b647e2f2f0bf763945c014ee33c6bbd178cdf3e9bccdc7dcd9831ba5 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Mautic\\LeadBundle\\Entity\\Tag;
use Mautic\\LeadBundle\\Entity\\TagRepository;

class TagRepositoryTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetTagByNameOrCreateNewOneWithSomeExistingTag()
    {
        \$fetchedEntity = new Tag('sometag');

        \$mockRepository = \$this->getMockBuilder(TagRepository::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['findOneBy'])
            ->getMock();

        \$mockRepository->expects(\$this->once())
            ->method('findOneBy')
            ->with(['tag' => 'sometag'])
            ->willReturn(\$fetchedEntity);

        \$this->assertSame(\$fetchedEntity, \$mockRepository->getTagByNameOrCreateNewOne('sometag'));
    }

    public function testGetTagByNameOrCreateNewOneWithSomeNewTag()
    {
        \$mockRepository = \$this->getMockBuilder(TagRepository::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['findOneBy'])
            ->getMock();

        \$mockRepository->expects(\$this->once())
            ->method('findOneBy')
            ->with(['tag' => 'sometag'])
            ->willReturn(null);

        \$newEntity = \$mockRepository->getTagByNameOrCreateNewOne('sometag');

        \$this->assertSame('sometag', \$newEntity->getTag());
        \$this->assertNull(\$newEntity->getId());
    }

    public function testGetTagByNameOrCreateNewOneInputFilter()
    {
        \$fetchedEntity = new Tag('hello\" world');

        \$mockRepository = \$this->getMockBuilder(TagRepository::class)
            ->disableOriginalConstructor()
            ->setMethods(['findOneBy'])
            ->getMock();

        \$mockRepository->expects(\$this->once())
            ->method('findOneBy')
            ->with(['tag' => 'hello\" world'])
            ->willReturn(\$fetchedEntity);

        \$this->assertSame(\$fetchedEntity, \$mockRepository->getTagByNameOrCreateNewOne('hello\" world'));
    }

    public function testRemoveMinusFromTags()
    {
        \$mockEntityManager = \$this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$mockMetadata = \$this->getMockBuilder(ClassMetadata::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$repository = new TagRepository(\$mockEntityManager, \$mockMetadata);

        \$tags = [
            'sometag1',
            '-sometag2',
            'sometag3',
            '-sometag4',
        ];

        \$expected = [
            'sometag1',
            'sometag2',
            'sometag3',
            'sometag4',
        ];

        \$this->assertSame(\$expected, \$repository->removeMinusFromTags(\$tags));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Entity/TagRepositoryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/TagRepositoryTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Entity/TagRepositoryTest.php");
    }
}
