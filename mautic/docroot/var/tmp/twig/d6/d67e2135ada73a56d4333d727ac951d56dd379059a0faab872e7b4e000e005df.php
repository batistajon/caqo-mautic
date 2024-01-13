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

/* @bundles/UserBundle/Views/Role/form.html.php */
class __TwigTemplate_4ccab4e7657453df365aeaebd7790d21980878b1dcff8c4eec0e6c5c3aaeb09e extends Template
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
\$view->extend('MauticCoreBundle:Default:content.html.php');
\$view['slots']->set('mauticContent', 'role');

\$view['assets']->addScriptDeclaration('MauticVars.permissionList = '.json_encode(\$permissionsConfig['list']), 'bodyClose');

\$objectId = \$form->vars['data']->getId();
if (!empty(\$objectId)) {
    \$name   = \$form->vars['data']->getName();
    \$header = \$view['translator']->trans('mautic.user.role.header.edit', ['%name%' => \$name]);
} else {
    \$header = \$view['translator']->trans('mautic.user.role.header.new');
}
\$view['slots']->set('headerTitle', \$header);
?>

<?php echo \$view['form']->start(\$form); ?>
<div class=\"box-layout\">
\t<div class=\"col-xs-12 bg-white height-auto\">
\t\t<!-- tabs controls -->
\t\t<ul class=\"bg-auto nav nav-tabs pr-md pl-md\">
\t\t\t<li class=\"active\"><a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\"><?php echo \$view['translator']->trans('mautic.core.details'); ?></a></li>
\t\t\t<li class=\"\"><a href=\"#permissions-container\" role=\"tab\" data-toggle=\"tab\"><?php echo \$view['translator']->trans('mautic.user.role.permissions'); ?></a></li>
\t\t</ul>
\t\t<!--/ tabs controls -->

\t\t<div class=\"tab-content pa-md\">
\t\t\t<div class=\"tab-pane fade in active bdr-w-0 height-auto\" id=\"details-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"pa-md\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<?php echo \$view['form']->row(\$form['name']); ?>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<?php echo \$view['form']->row(\$form['isAdmin']); ?>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"pa-md\">
\t\t\t\t\t\t\t<?php echo \$view['form']->row(\$form['description']); ?>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<?php \$hidePerms = \$form['isAdmin']->vars['data']; ?>
\t\t\t<div class=\"tab-pane fade bdr-w-0\" id=\"permissions-container\">
\t\t\t\t<div id=\"rolePermissions\"<?php if (\$hidePerms) {
    echo ' class=\"hide\"';
} ?>>
\t\t\t\t\t<!-- start: box layout -->
\t\t\t\t\t<div class=\"box-layout\">
\t\t\t\t\t\t<!-- step container -->
\t\t\t\t\t\t<div class=\"col-md-5 bg-white height-auto\">
\t\t\t\t\t\t\t<div class=\"pr-lg pl-lg pt-md pb-md\">

\t\t\t\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-tabs\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t<?php \$i = 0; ?>
\t\t\t\t\t\t\t\t\t<?php foreach (\$permissionsConfig['config'] as \$bundle => \$config) : ?>
\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item <?php echo 0 === \$i ? 'in active' : ''; ?>\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#<?php echo \$bundle; ?>PermissionTab\" aria-controls=\"<?php echo \$bundle; ?>PermissionTab\" role=\"tab\" data-toggle=\"tab\" class=\"steps\">
\t\t\t\t\t\t\t\t\t\t\t\t<span><?php echo \$config['label']; ?></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"permission-ratio\"> (<span class=\"<?php echo \$bundle; ?>_granted\"><?php echo \$config['ratio'][0]; ?></span> / <span class=\"<?php echo \$bundle; ?>_total\"><?php echo \$config['ratio'][1]; ?></span>)</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<?php ++\$i; ?>
\t\t\t\t\t\t\t\t\t<?php endforeach; ?>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- container -->
\t\t\t\t\t\t<div class=\"col-md-7 bg-auto height-auto bdr-l\">
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t<?php
                                \$permissions = \$form['permissions']->children;
                                \$i           = 0;
                                foreach (\$permissions as \$child):
                                    if ('newbundle' == \$child->vars['value']):
                                        if (\$i > 0): // Close tab panel
                                            echo \"</div>\\n</div>\\n\";
                                        endif;
                                        echo '<div role=\"tabpanel\" class=\"tab-pane fade'.(0 === \$i ? ' in active' : '').' bdr-w-0\" id=\"'.\$child->vars['name'].'PermissionTab\">'.\"\\n\";
                                        echo '<div class=\"pt-md pr-md pl-md pb-md\">'.\"\\n\";
                                        \$child->setRendered();
                                    else:
                                        echo \$view['form']->row(\$child);
                                    endif;
                                    ++\$i;
                                endforeach;
                                //close last tab
                                echo \"</div>\\n</div>\\n\";
                                \$form['permissions']->setRendered();
                                ?>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"isAdminMessage\"<?php if (!\$hidePerms) {
                                    echo ' class=\"hide\"';
                                } ?>>
\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t<h4><?php echo \$view['translator']->trans('mautic.user.role.permission.isadmin.header'); ?></h4>
\t\t\t\t\t\t<p><?php echo \$view['translator']->trans('mautic.user.role.permission.isadmin.message'); ?></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<?php echo \$view['form']->end(\$form); ?>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Views/Role/form.html.php";
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
        return new Source("", "@bundles/UserBundle/Views/Role/form.html.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Views/Role/form.html.php");
    }
}
