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

/* @bundles/LeadBundle/Tests/Event/LeadListEventTest.php */
class __TwigTemplate_cda295050a4c1db30ccb639a949cbc8cbbafc5c29bcc92d74bc3d92ba588755a extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Event\\LeadListEvent;

class LeadListEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testConstructGettersSetters()
    {
        \$segment = new LeadList();
        \$event   = new LeadListEvent(\$segment);

        \$this->assertEquals(\$segment, \$event->getList());
        \$this->assertEquals(false, \$event->isNew());

        \$isNew = false;
        \$event = new LeadListEvent(\$segment, \$isNew);
        \$this->assertEquals(\$isNew, \$event->isNew());

        \$isNew = true;
        \$event = new LeadListEvent(\$segment, \$isNew);
        \$this->assertEquals(\$isNew, \$event->isNew());

        \$segment2 = new LeadList();
        \$segment2->setName('otherSegmentName');
        \$event->setList(\$segment2);
        \$this->assertEquals(\$segment2, \$event->getList());

        \$isNew = true;
        \$event = new LeadListEvent(\$segment, \$isNew);

        \$category = new Category();
        \$category->setTitle('Segment Category 1');
        \$category->setAlias('segment-category-1');
        \$category->setBundle('segment');

        \$segment3 = new LeadList();
        \$segment3->setName('Segment 1');
        \$segment3->setCategory(\$category);
        \$event->setList(\$segment3);
        \$this->assertEquals(\$segment3, \$event->getList());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/Event/LeadListEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/LeadListEventTest.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Tests/Event/LeadListEventTest.php");
    }
}
