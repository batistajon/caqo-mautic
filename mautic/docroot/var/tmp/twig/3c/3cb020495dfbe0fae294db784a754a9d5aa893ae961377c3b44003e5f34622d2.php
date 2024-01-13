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

/* @bundles/ChannelBundle/Views/Message/form.html.php */
class __TwigTemplate_67b391b15a66041fedb002ecbbf9ea2c4c0ca63a1bd10831ad8ffc55695d7df1 extends Template
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

\$view->extend('MauticCoreBundle:FormTheme:form_tabbed.html.php');

// active, id, name, content
\$tabs   = [];
\$active = true;

foreach (\$channels as \$channel => \$config) {
    if (!isset(\$form['channels'][\$channel])) {
        continue;
    }

    \$tab = [
        'active'        => \$active,
        'id'            => 'channel_'.\$channel,
        'name'          => \$config['label'],
        'content'       => \$view['form']->row(\$form['channels'][\$channel]),
        'containerAttr' => [
            'style' => 'min-height: 200px;',
        ],
    ];

    if (\$view['form']->containsErrors(\$form['channels'][\$channel])) {
        \$tab['class'] = 'text-danger';
        \$tab['icon']  = 'fa-warning';
    } elseif (\$form['channels'][\$channel]['isEnabled']->vars['data']) {
        \$tab['published'] = true;
    }

    \$tabs[] = \$tab;

    \$active = false;
}

\$view['slots']->set('formTabs', \$tabs);
?>

<?php \$view['slots']->start('aboveTabsContent'); ?>
<div class=\"pa-md row\">
    <div class=\"col-md-12\">
        <?php echo \$view['form']->row(\$form['name']); ?>
        <?php echo \$view['form']->row(\$form['description']); ?>
    </div>
</div>
<?php \$view['slots']->stop(); ?>

<?php
\$view['slots']->start('rightFormContent');
echo \$view['form']->row(\$form['category']);
echo \$view['form']->row(\$form['isPublished']);
echo \$view['form']->row(\$form['publishUp']);
echo \$view['form']->row(\$form['publishDown']);
\$view['slots']->stop();
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Views/Message/form.html.php";
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
        return new Source("", "@bundles/ChannelBundle/Views/Message/form.html.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Views/Message/form.html.php");
    }
}
