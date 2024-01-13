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

/* @bundles/LeadBundle/Tests/Entity/LeadRepositoryFunctionalTest.php */
class __TwigTemplate_128819fa1bbaed6ee6730781d99dc45a33807a666d68ef3224e4943ee9b5a11e extends Template
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

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;

class LeadRepositoryFunctionalTest extends MauticMysqlTestCase
{
    /**
     * @var Lead
     */
    private \$lead;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->lead = \$this->createLead();
    }

    public function testPointsAreAdded()
    {
        \$model = self::\$container->get('mautic.lead.model.lead');

        \$this->lead->adjustPoints(100);

        \$model->saveEntity(\$this->lead);

        \$this->assertEquals(200, \$this->lead->getPoints());

        \$changes = \$this->lead->getChanges(true);
        \$this->assertEquals(200, \$changes['points'][1]);
    }

    public function testPointsAreSubtracted()
    {
        \$model = self::\$container->get('mautic.lead.model.lead');

        \$this->lead->adjustPoints(100, Lead::POINTS_SUBTRACT);

        \$model->saveEntity(\$this->lead);

        \$this->assertEquals(0, \$this->lead->getPoints());

        \$changes = \$this->lead->getChanges(true);
        \$this->assertEquals(0, \$changes['points'][1]);
    }

    public function testPointsAreMultiplied()
    {
        \$model = self::\$container->get('mautic.lead.model.lead');

        \$this->lead->adjustPoints(2, Lead::POINTS_MULTIPLY);

        \$model->saveEntity(\$this->lead);

        \$this->assertEquals(200, \$this->lead->getPoints());

        \$changes = \$this->lead->getChanges(true);
        \$this->assertEquals(200, \$changes['points'][1]);
    }

    public function testPointsAreDivided()
    {
        \$model = self::\$container->get('mautic.lead.model.lead');

        \$this->lead->adjustPoints(2, Lead::POINTS_DIVIDE);

        \$model->saveEntity(\$this->lead);

        \$this->assertEquals(50, \$this->lead->getPoints());

        \$changes = \$this->lead->getChanges(true);
        \$this->assertEquals(50, \$changes['points'][1]);
    }

    public function testMixedOperatorPointsAreCalculated()
    {
        \$model = self::\$container->get('mautic.lead.model.lead');

        \$this->lead->adjustPoints(100, Lead::POINTS_SUBTRACT);
        \$this->lead->adjustPoints(120, Lead::POINTS_ADD);
        \$this->lead->adjustPoints(2, Lead::POINTS_MULTIPLY);
        \$this->lead->adjustPoints(4, Lead::POINTS_DIVIDE);

        \$model->saveEntity(\$this->lead);

        \$this->assertEquals(60, \$this->lead->getPoints());

        \$changes = \$this->lead->getChanges(true);
        \$this->assertEquals(60, \$changes['points'][1]);
    }

    public function testMixedModelAndRepositorySavesDoNotDoublePoints()
    {
        \$model = self::\$container->get('mautic.lead.model.lead');
        \$this->lead->adjustPoints(120, Lead::POINTS_ADD);
        \$model->saveEntity(\$this->lead);
        // Changes should be stored with points
        \$changes = \$this->lead->getChanges(true);
        \$this->assertEquals(220, \$changes['points'][1]);
        // Points should now not be in changes
        \$model->saveEntity(\$this->lead);
        \$changes = \$this->lead->getChanges(true);
        \$this->assertFalse(isset(\$changes['points']));
        // Points should remain the same
        \$model->saveEntity(\$this->lead);
        \$this->em->getRepository('MauticLeadBundle:Lead')->saveEntity(\$this->lead);
        \$this->assertEquals(220, \$this->lead->getPoints());
    }

    private function createLead(): Lead
    {
        \$lead = new Lead();
        \$lead->setPoints(100);

        \$this->em->persist(\$lead);
        \$this->em->flush();

        return \$lead;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Entity/LeadRepositoryFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/LeadRepositoryFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Entity/LeadRepositoryFunctionalTest.php");
    }
}
