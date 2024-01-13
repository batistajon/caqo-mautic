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

/* @bundles/CoreBundle/Views/Error/base.html.php */
class __TwigTemplate_0fdf3ba55a3f7b1351c533a96b252a4f9a8223b40e11bf692033eae483009b78 extends Template
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
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

\$isInline = !empty(\$inline);
if (!\$app->getRequest()->isXmlHttpRequest()) {
    \$view->extend(\$baseTemplate);

    if (!\$isInline) {
        \$view['slots']->set('pageTitle', \$status_text);
    }
}

\$img = \$view['slots']->get('mautibot', 'wave');
\$src = \$view['mautibot']->getImage(\$img);

\$message = \$view['slots']->get('message', 'mautic.core.error.generic');
?>
<div class=\"pa-20 mautibot-error<?php if (!empty(\$inline)): echo ' inline well'; endif; ?>\">
    <div class=\"row mt-lg pa-md\">
        <?php if (\$isInline): ?>
            <div class=\"mautibot-content col-xs-12\">
                <h1><i class=\"fa fa-warning fa-fw text-danger\"></i><?php echo \$view['translator']->trans(\$message, ['%code%' => \$status_code]); ?></h1>
                <h4 class=\"mt-5\"><strong><?php echo \$status_code; ?></strong> <?php echo \$status_text; ?></h4>
            </div>
        <?php else: ?>

        <div class=\"mautibot-image col-xs-4 col-md-3\">
            <img class=\"img-responsive\" src=\"<?php echo \$src; ?>\" />
        </div>
        <div class=\"mautibot-content col-xs-8 col-md-9\">
            <blockquote class=\"np break-word\">
                <h1><i class=\"fa fa-quote-left\"></i> <?php echo \$view['translator']->trans(\$message, ['%code%' => \$status_code]); ?> <i class=\"fa fa-quote-right\"></i></h1>
                <h4 class=\"mt-5\"><strong><?php echo \$status_code; ?></strong> <?php echo \$status_text; ?></h4>

                <footer class=\"text-right\">Mautibot</footer>
            </blockquote>
            <div class=\"pull-right\">
                <a class=\"text-muted\" href=\"http://mau.tc/report-issue\" target=\"_new\"><?php echo \$view['translator']->trans('mautic.core.report_issue'); ?></a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class=\"clearfix\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Error/base.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Error/base.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Error/base.html.php");
    }
}
