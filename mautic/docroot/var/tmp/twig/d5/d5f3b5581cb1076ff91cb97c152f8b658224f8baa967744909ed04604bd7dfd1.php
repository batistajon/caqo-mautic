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

/* @bundles/PageBundle/DataFixtures/ORM/LoadPageData.php */
class __TwigTemplate_06bc72d3d8ab6de1b697194569471ed3d3130a58145351c311e92142be2f19d5 extends Template
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
use Mautic\\CoreBundle\\Helper\\CsvHelper;
use Mautic\\CoreBundle\\Helper\\Serializer;
use Mautic\\PageBundle\\Entity\\Page;
use Mautic\\PageBundle\\Model\\PageModel;

class LoadPageData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @var PageModel
     */
    private \$pageModel;

    public function __construct(PageModel \$pageModel)
    {
        \$this->pageModel = \$pageModel;
    }

    public function load(ObjectManager \$manager)
    {
        \$pages = CsvHelper::csv_to_array(__DIR__.'/fakepagedata.csv');
        foreach (\$pages as \$count => \$rows) {
            \$page = new Page();
            \$key  = \$count + 1;
            foreach (\$rows as \$col => \$val) {
                if ('NULL' != \$val) {
                    \$setter = 'set'.ucfirst(\$col);
                    if (in_array(\$col, ['translationParent', 'variantParent'])) {
                        \$page->\$setter(\$this->getReference('page-'.\$val));
                    } elseif (in_array(\$col, ['dateAdded', 'variantStartDate'])) {
                        \$page->\$setter(new \\DateTime(\$val));
                    } elseif (in_array(\$col, ['content', 'variantSettings'])) {
                        \$val = Serializer::decode(stripslashes(\$val));
                        \$page->\$setter(\$val);
                    } else {
                        \$page->\$setter(\$val);
                    }
                }
            }
            \$page->setCategory(\$this->getReference('page-cat-1'));
            \$this->pageModel->getRepository()->saveEntity(\$page);

            \$this->setReference('page-'.\$key, \$page);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 7;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/DataFixtures/ORM/LoadPageData.php";
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
        return new Source("", "@bundles/PageBundle/DataFixtures/ORM/LoadPageData.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/DataFixtures/ORM/LoadPageData.php");
    }
}
