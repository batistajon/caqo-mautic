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

/* @bundles/LeadBundle/DataFixtures/ORM/LoadCategoryData.php */
class __TwigTemplate_091bf6b198218292cc5fadf6636fdd2b8f4041b203ac5868f481fb6106a74c18 extends Template
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

namespace Mautic\\LeadBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CategoryBundle\\Entity\\CategoryRepository;
use Mautic\\CoreBundle\\Helper\\CsvHelper;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @var EntityManagerInterface
     */
    private \$entityManager;

    /**
     * {@inheritdoc}
     */
    public function __construct(EntityManagerInterface \$entityManager)
    {
        \$this->entityManager = \$entityManager;
    }

    public function load(ObjectManager \$manager)
    {
        /** @var CategoryRepository \$categoryRepo */
        \$categoryRepo = \$this->entityManager->getRepository(Category::class);
        \$categories   = CsvHelper::csv_to_array(__DIR__.'/fakecategorydata.csv');
        foreach (\$categories as \$category) {
            \$categoryEntity = new Category();
            \$categoryEntity->setTitle(\$category['categoryname']);
            \$categoryEntity->setBundle(\$category['categorybundle']);
            \$categoryEntity->setAlias(\$category['categoryalias']);
            \$categoryEntity->setIsPublished(\$category['published']);
            \$categoryRepo->saveEntity(\$categoryEntity);
        }
    }

    public function getOrder()
    {
        // TODO: Implement getOrder() method.
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/DataFixtures/ORM/LoadCategoryData.php";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/LoadCategoryData.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/DataFixtures/ORM/LoadCategoryData.php");
    }
}
