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

/* @bundles/CampaignBundle/Tests/Model/CampaignModelTest.php */
class __TwigTemplate_47c58114df223d17716e670cd2757f709b1b945633d78a2a33308b307a88e14e extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Model;

use Mautic\\CampaignBundle\\Tests\\CampaignTestAbstract;

class CampaignModelTest extends CampaignTestAbstract
{
    public function testGetSourceListsWithNull()
    {
        \$model = \$this->initCampaignModel();
        \$lists = \$model->getSourceLists();
        \$this->assertTrue(isset(\$lists['lists']));
        \$this->assertSame([parent::\$mockId => parent::\$mockName], \$lists['lists']);
        \$this->assertTrue(isset(\$lists['forms']));
        \$this->assertSame([parent::\$mockId => parent::\$mockName], \$lists['forms']);
    }

    public function testGetSourceListsWithLists()
    {
        \$model = \$this->initCampaignModel();
        \$lists = \$model->getSourceLists('lists');
        \$this->assertSame([parent::\$mockId => parent::\$mockName], \$lists);
    }

    public function testGetSourceListsWithForms()
    {
        \$model = \$this->initCampaignModel();
        \$lists = \$model->getSourceLists('forms');
        \$this->assertSame([parent::\$mockId => parent::\$mockName], \$lists);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Tests/Model/CampaignModelTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Model/CampaignModelTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Model/CampaignModelTest.php");
    }
}
