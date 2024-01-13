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

/* @bundles/ConfigBundle/Views/Config/form.html.php */
class __TwigTemplate_3d3c5ea02af78d0c9717eda52fa29472fa0b9cf6c293d35dbe28778e9de5bb8e extends Template
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
if ('index' == \$tmpl) {
    \$view->extend('MauticCoreBundle:Default:content.html.php');
}
\$view['slots']->set('mauticContent', 'config');
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.config.header.index'));

\$configKeys = array_keys(\$form->children);
?>

<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- step container -->
    <div class=\"col-md-3 bg-white height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            <?php if (!\$isWritable): ?>
            <div class=\"alert alert-danger\"><?php echo \$view['translator']->trans('mautic.config.notwritable'); ?></div>
            <?php endif; ?>
            <!-- Nav tabs -->
            <ul class=\"list-group list-group-tabs\" role=\"tablist\">
            <?php foreach (\$configKeys as \$i => \$key) : ?>
                <?php if (!isset(\$formConfigs[\$key]) || !count(\$form[\$key]->children)) : ?>
                <?php continue; ?>
                <?php endif; ?>
                <li role=\"presentation\" class=\"list-group-item <?php echo 0 === \$i ? 'in active' : ''; ?>\">
                    <?php \$containsErrors = (\$view['form']->containsErrors(\$form[\$key])) ? ' text-danger' : ''; ?>
                    <a href=\"#<?php echo \$key; ?>\" aria-controls=\"<?php echo \$key; ?>\" role=\"tab\" data-toggle=\"tab\" class=\"steps<?php echo \$containsErrors; ?>\">
                        <?php echo \$view['translator']->trans('mautic.config.tab.'.\$key); ?>
                        <?php if (\$containsErrors): ?>
                            <i class=\"fa fa-warning\"></i>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- container -->
    <div class=\"col-md-9 bg-auto height-auto bdr-l\">
        <?php echo \$view['form']->start(\$form); ?>
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <?php foreach (\$configKeys as \$i => \$key) : ?>
            <?php
                if (!isset(\$formConfigs[\$key])) {
                    continue;
                }
                if (!count(\$form[\$key]->children)):
                    \$form[\$key]->setRendered();
                    continue;
                endif;
            ?>
            <div role=\"tabpanel\" class=\"tab-pane fade <?php echo 0 === \$i ? 'in active' : ''; ?> bdr-w-0\" id=\"<?php echo \$key; ?>\">
                <div class=\"pt-md pr-md pl-md pb-md\">
                    <?php echo \$view['form']->widget(\$form[\$key], ['formConfig' => \$formConfigs[\$key]]); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php echo \$view['form']->end(\$form); ?>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Views/Config/form.html.php";
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
        return new Source("", "@bundles/ConfigBundle/Views/Config/form.html.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/Views/Config/form.html.php");
    }
}
