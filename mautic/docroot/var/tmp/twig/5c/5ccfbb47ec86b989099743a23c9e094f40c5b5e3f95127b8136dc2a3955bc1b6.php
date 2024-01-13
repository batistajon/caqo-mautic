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

/* @bundles/LeadBundle/Tests/DataFixtures/ORM/LoadTagData.php */
class __TwigTemplate_cbcecdfc435887b05e91a15e9f9db03ca73b5a2f313d57f442c9029dce8a5084 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\Tag;

class LoadTagData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager): void
    {
        \$tag = new Tag('Tag A');
        \$manager->persist(\$tag);
        \$manager->flush();

        \$contact1 = \$this->getReference('lead-1');
        \\assert(\$contact1 instanceof Lead);
        \$contact1->addTag(\$tag);

        \$contact3 = \$this->getReference('lead-3');
        \\assert(\$contact1 instanceof Lead);
        \$contact3->addTag(\$tag);

        \$manager->persist(\$contact1);
        \$manager->persist(\$contact3);
        \$manager->flush();
    }

    /**
     * @return int
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
        return "@bundles/LeadBundle/Tests/DataFixtures/ORM/LoadTagData.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/DataFixtures/ORM/LoadTagData.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/DataFixtures/ORM/LoadTagData.php");
    }
}
