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

/* @bundles/FormBundle/Views/Result/export.html.php */
class __TwigTemplate_a693c3df330dc0ef633d811da7044937f384bb276484283f1a05892041e4a398 extends Template
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
\$view->extend('MauticCoreBundle:Default:slim.html.php');
\$view['slots']->set('pageTitle', \$pageTitle);
\$view['slots']->set('headerTitle', \$view['translator']->trans('mautic.form.result.header.index', [
    '%name%' => \$form->getName(),
]));
?>

<div class=\"formresults\">
    <table class=\"table table-hover table-striped table-bordered formresult-list\">
        <thead>
        <tr>
            <th class=\"col-formresult-id\"></th>
            <th class=\"col-formresult-date\"><?php echo \$view['translator']->trans('mautic.form.result.thead.date'); ?></th>
            <th class=\"col-formresult-ip\"><?php echo \$view['translator']->trans('mautic.core.ipaddress'); ?></th>
            <?php
            \$fields = \$form->getFields();
            foreach (\$fields as \$f):
            if (in_array(\$f->getType(), \$viewOnlyFields) || false === \$f->getSaveResult()) {
                continue;
            }
            ?>
            <th class=\"col-formresult-field col-formresult-<?php echo \$f->getType(); ?> col-formresult-field<?php echo \$f->getId(); ?>\"><?php echo \$f->getLabel(); ?></th>
            <?php endforeach; ?>
        </tr>
        </thead>
        <tbody>
        <?php foreach (\$results as \$item):?>
            <tr>
                <td><?php echo \$item['id']; ?></td>
                <td><?php echo \$view['date']->toFull(\$item['dateSubmitted'], 'UTC'); ?></td>
                <td><?php echo \$item['ipAddress']; ?></td>
                <?php foreach (\$item['results'] as \$r):?>
                    <td><?php echo \$r['value']; ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Result/export.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Result/export.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Result/export.html.php");
    }
}
