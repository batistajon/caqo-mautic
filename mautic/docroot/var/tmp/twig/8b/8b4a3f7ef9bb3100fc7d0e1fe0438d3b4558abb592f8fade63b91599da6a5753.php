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

/* @bundles/CoreBundle/Views/FormTheme/form_simple.html.php */
class __TwigTemplate_e6df82879acb8b2a473a4a3652566865016d8292dbbae0bee2ec20cf5826ecc7 extends Template
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

\$view->extend('MauticCoreBundle:FormTheme:form.html.php');
\$hasRightColumn = \$view['slots']->has('rightFormContent');
\$modalView      = \$app->getRequest()->get('modal', false) || \$view['slots']->get('inModal', false);
?>

<?php \$view['slots']->start('mainFormContent'); ?>
<div class=\"box-layout\">
    <div class=\"col-md-<?php echo \$hasRightColumn && !\$modalView ? 9 : 12; ?> bg-auto height-auto bdr-r\">
        <div class=\"pa-md\">
            <?php \$view['slots']->output('primaryFormContent'); ?>
        </div>
    </div>
    <?php if (\$hasRightColumn): ?>
    <div class=\"col-md-<?php echo \$modalView ? 12 : 3; ?> bg-white height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            <?php \$view['slots']->output('rightFormContent'); ?>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php \$view['slots']->stop();
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/form_simple.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/form_simple.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/form_simple.html.php");
    }
}
