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

/* @bundles/PageBundle/DataFixtures/ORM/LoadPageHitData.php */
class __TwigTemplate_61e27b77b2207b14abed4c151129e52acb4ef57d32f42031ceffbd81d803c5f6 extends Template
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
use Mautic\\PageBundle\\Entity\\Hit;
use Mautic\\PageBundle\\Model\\PageModel;

class LoadPageHitData extends AbstractFixture implements OrderedFixtureInterface
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
        \$hits = CsvHelper::csv_to_array(__DIR__.'/fakepagehitdata.csv');

        foreach (\$hits as \$rows) {
            \$hit = new Hit();
            foreach (\$rows as \$col => \$val) {
                if ('NULL' != \$val) {
                    \$setter = 'set'.ucfirst(\$col);
                    if (in_array(\$col, ['page', 'ipAddress'])) {
                        \$hit->\$setter(\$this->getReference(\$col.'-'.\$val));
                    } elseif (in_array(\$col, ['dateHit', 'dateLeft'])) {
                        \$hit->\$setter(new \\DateTime(\$val));
                    } elseif ('browserLanguages' == \$col) {
                        \$val = Serializer::decode(stripslashes(\$val));
                        \$hit->\$setter(\$val);
                    } else {
                        \$hit->\$setter(\$val);
                    }
                }
            }
            \$this->pageModel->getRepository()->saveEntity(\$hit);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        return 8;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/DataFixtures/ORM/LoadPageHitData.php";
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
        return new Source("", "@bundles/PageBundle/DataFixtures/ORM/LoadPageHitData.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/DataFixtures/ORM/LoadPageHitData.php");
    }
}
