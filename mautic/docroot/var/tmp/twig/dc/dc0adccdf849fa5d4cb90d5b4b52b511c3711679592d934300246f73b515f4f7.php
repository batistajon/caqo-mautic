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

/* @bundles/CoreBundle/Tests/_support/FunctionalTester.php */
class __TwigTemplate_50b09650de6c87226dda0213e4957d771b5b67fba0d91dfb7714dc12e4905cdc extends Template
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

namespace Mautic\\CoreBundle;

/**
 * Inherited Methods.
 *
 * @method void                    wantToTest(\$text)
 * @method void                    wantTo(\$text)
 * @method void                    execute(\$callable)
 * @method void                    expectTo(\$prediction)
 * @method void                    expect(\$prediction)
 * @method void                    amGoingTo(\$argumentation)
 * @method void                    am(\$role)
 * @method void                    lookForwardTo(\$achieveValue)
 * @method void                    comment(\$description)
 * @method \\Codeception\\Lib\\Friend haveFriend(\$name, \$actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
 */
class FunctionalTester extends \\Codeception\\Actor
{
    use _generated\\FunctionalTesterActions;

    /*
     * Define custom actions here
     */
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/_support/FunctionalTester.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/_support/FunctionalTester.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/_support/FunctionalTester.php");
    }
}
