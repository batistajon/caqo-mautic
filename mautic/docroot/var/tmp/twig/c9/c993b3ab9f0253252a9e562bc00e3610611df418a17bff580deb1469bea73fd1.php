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

/* @bundles/FormBundle/Helper/PointActionHelper.php */
class __TwigTemplate_6981bf7e1ffe6c1ac1fc20908b2124e1ea03116670ac8e59ab080028b74cb848 extends Template
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

namespace Mautic\\FormBundle\\Helper;

/**
 * Class PointActionHelper.
 */
class PointActionHelper
{
    /**
     * @param \$eventDetails
     * @param \$action
     *
     * @return int
     */
    public static function validateFormSubmit(\$eventDetails, \$action)
    {
        \$form         = \$eventDetails->getForm();
        \$formId       = \$form->getId();
        \$limitToForms = \$action['properties']['forms'];

        if (!empty(\$limitToForms) && !in_array(\$formId, \$limitToForms)) {
            //no points change
            return false;
        }

        return true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Helper/PointActionHelper.php";
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
        return new Source("", "@bundles/FormBundle/Helper/PointActionHelper.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Helper/PointActionHelper.php");
    }
}
