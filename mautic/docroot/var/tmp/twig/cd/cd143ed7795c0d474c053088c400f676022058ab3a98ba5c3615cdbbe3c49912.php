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

/* @bundles/FormBundle/Tests/ProgressiveProfiling/DisplayManagerTest.php */
class __TwigTemplate_a4082b1cad51a4409152c2b65470fce4f336c5e66dd2a12ed616ff92a5f92241 extends Template
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

namespace Mautic\\FormBundle\\Tests\\ProgressiveProfiling;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Entity\\Form;
use Mautic\\FormBundle\\ProgressiveProfiling\\DisplayCounter;
use Mautic\\FormBundle\\ProgressiveProfiling\\DisplayManager;

class DisplayManagerTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var Form
     */
    private \$form;

    /**
     * @var array
     */
    private \$viewOnlyFields;

    /**
     * @var DisplayCounter
     */
    private \$displayCounter;

    public function setUp(): void
    {
        \$this->viewOnlyFields = [];
        \$this->form           = new Form();
        \$this->displayCounter = new DisplayCounter(\$this->form);
    }

    public function testShowForField()
    {
        \$form           = new Form();
        \$viewOnlyFields = ['button'];
        \$displayManager = new DisplayManager(\$form, \$viewOnlyFields);
        \$displayCounter = \$displayManager->getDisplayCounter();

        \$field = new Field();
        \$this->assertTrue(\$displayManager->showForField(\$field));

        \$field->setType('button');
        \$this->assertTrue(\$displayManager->showForField(\$field));

        \$field->setType('text');

        // display If first field is always display and progressive limit 1
        \$field->setAlwaysDisplay(true);
        \$form->setProgressiveProfilingLimit(1);
        \$this->assertTrue(\$displayManager->showForField(\$field));

        // not display If second field is always display and progressive limit 1
        \$displayCounter->increaseDisplayedFields();
        \$this->assertFalse(\$displayManager->showForField(\$field));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Tests/ProgressiveProfiling/DisplayManagerTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/ProgressiveProfiling/DisplayManagerTest.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Tests/ProgressiveProfiling/DisplayManagerTest.php");
    }
}
