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

/* @bundles/PageBundle/DataFixtures/ORM/LoadPageCategoryData.php */
class __TwigTemplate_0a5bc20e2a3974bceceb4b82a4ed820e3efb7e6d4e95ba877409ad985a6582ef extends Template
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

namespace Mautic\\PageBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CategoryBundle\\Model\\CategoryModel;

class LoadPageCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @var CategoryModel
     */
    private \$categoryModel;

    /**
     * {@inheritdoc}
     */
    public function __construct(CategoryModel \$categoryModel)
    {
        \$this->categoryModel = \$categoryModel;
    }

    public function load(ObjectManager \$manager)
    {
        \$today  = new \\DateTime();
        \$cat    = new Category();
        \$events = 'Events';

        \$cat->setBundle('page');
        \$cat->setDateAdded(\$today);
        \$cat->setTitle(\$events);
        \$cat->setAlias(strtolower(\$events));

        \$this->categoryModel->getRepository()->saveEntity(\$cat);
        \$this->setReference('page-cat-1', \$cat);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 6;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/DataFixtures/ORM/LoadPageCategoryData.php";
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
        return new Source("", "@bundles/PageBundle/DataFixtures/ORM/LoadPageCategoryData.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/DataFixtures/ORM/LoadPageCategoryData.php");
    }
}
