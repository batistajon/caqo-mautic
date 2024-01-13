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

/* @bundles/ConfigBundle/Tests/Event/ConfigBuilderEventTest.php */
class __TwigTemplate_6c9ba833b58cfea3a203683b11c602187a593feb7ae1ad69692401698ff5a5a4 extends Template
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

namespace Mautic\\ConfigBundle\\Tests\\Event;

use Mautic\\ConfigBundle\\Event\\ConfigBuilderEvent;
use Mautic\\CoreBundle\\Tests\\CommonMocks;

class ConfigBuilderEventTest extends CommonMocks
{
    public function testAddForm()
    {
        \$event  = \$this->initEvent();
        \$form   = ['formAlias' => 'testform'];
        \$result = \$event->addForm(\$form);

        \$this->assertTrue(\$result instanceof ConfigBuilderEvent);

        \$forms = \$event->getForms();

        \$this->assertEquals(\$form, \$forms[\$form['formAlias']]);
    }

    public function testRemoveForm()
    {
        \$event = \$this->initEvent();
        \$form  = ['formAlias' => 'testform'];

        \$event->addForm(\$form);

        \$result = \$event->removeForm(\$form['formAlias']);
        \$forms  = \$event->getForms();

        \$this->assertEquals([], \$forms);
        \$this->assertTrue(\$result);
    }

    protected function initEvent()
    {
        return new ConfigBuilderEvent(\$this->getBundleHelperMock());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Tests/Event/ConfigBuilderEventTest.php";
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
        return new Source("", "@bundles/ConfigBundle/Tests/Event/ConfigBuilderEventTest.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/Tests/Event/ConfigBuilderEventTest.php");
    }
}
