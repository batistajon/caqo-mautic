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

/* @bundles/IntegrationsBundle/Views/Auth/authenticated.html.php */
class __TwigTemplate_b725cbd1aef6b4ee26c77e600c1f2a7c7b3154d34e580966be9f5eaf4ed49db9 extends Template
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

declare(strict_types=1);

/*
 * @copyright   2019 Mautic Inc. All rights reserved
 * @author      Mautic, Inc.
 *
 * @link        https://www.mautic.com
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

\$view->extend('MauticCoreBundle:Default:slim.html.php');

\$alertClass = \$authenticationError ? 'danger' : 'success';

?>
<style>
    #app-content {
        margin: 0;
    }
</style>
<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"alert alert-<?php echo \$alertClass; ?> margin\" style=\"margin:20px\" role=\"alert\">
            <?php echo \$message; ?>
        </div>
    </div>
</div>
<div class=\"row text-center\">
    <button type=\"button\" id=\"integration_details_authButton\" name=\"integration_details[authButton]\" class=\"btn btn-success btn-lg\" onclick=\"window.close();\">
        <i class=\"fa fa-check\"></i>
        <?php echo \$view['translator']->trans('mautic.integration.closewindow'); ?>
    </button>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Views/Auth/authenticated.html.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Views/Auth/authenticated.html.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Views/Auth/authenticated.html.php");
    }
}
