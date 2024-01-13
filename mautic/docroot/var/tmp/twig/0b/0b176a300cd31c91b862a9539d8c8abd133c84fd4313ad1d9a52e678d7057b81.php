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

/* @bundles/CoreBundle/Tests/_support/UnitTester.php */
class __TwigTemplate_771fc1153500387588fdd5e1dc3385fc52bd514cc063f81bf47a3aa39ad7362d extends Template
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
class UnitTester extends \\Codeception\\Actor
{
    use _generated\\UnitTesterActions;

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
        return "@bundles/CoreBundle/Tests/_support/UnitTester.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/_support/UnitTester.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/_support/UnitTester.php");
    }
}
