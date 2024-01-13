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

/* @bundles/CoreBundle/Views/Helper/builder_buttons.html.php */
class __TwigTemplate_63ebf651ca2355ea5da5045916176bc7cf75ca097e11a5e063c8e18c57ed9377 extends Template
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

/*
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

?>

<div class=\"row\">
    <div class=\"col-xs-12\">
        <button type=\"button\" class=\"btn btn-primary btn-apply-builder\">
            <?php echo \$view['translator']->trans('mautic.core.form.apply'); ?>
        </button>
        <button type=\"button\" class=\"btn btn-primary btn-close-builder\" onclick=\"<?php echo \$onclick; ?>\">
            <?php echo \$view['translator']->trans('mautic.core.close.builder'); ?>
        </button>
    </div>
    <!--
    <div class=\"col-xs-6 text-right\">
        <button type=\"button\" class=\"btn btn-default btn-undo btn-nospin\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"<?php echo \$view['translator']->trans('mautic.core.undo'); ?>\">
            <span><i class=\"fa fa-undo\"></i></span>
        </button>
        <button type=\"button\" class=\"btn btn-default btn-redo btn-nospin\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"<?php echo \$view['translator']->trans('mautic.core.redo'); ?>\">
            <span><i class=\"fa fa-repeat\"></i></span>
        </button>
    </div>
    -->
</div>
<div class=\"row\">
    <div class=\"col-xs-12 mt-15\">
        <div id=\"builder-errors\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none;\"></div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/builder_buttons.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/builder_buttons.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/builder_buttons.html.php");
    }
}
