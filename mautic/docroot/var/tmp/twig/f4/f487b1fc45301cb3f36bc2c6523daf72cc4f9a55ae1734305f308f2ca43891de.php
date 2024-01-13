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

/* @bundles/ChannelBundle/Views/FormTheme/channel_row.html.php */
class __TwigTemplate_ce90eaad3848e3e59f34839b45ddab1fd1ddf2c01da48c994c14d2b4d86e13b9 extends Template
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

if (!isset(\$form->children['channel'])) {
    return;
}

\$channel        = \$form->children['channel']->vars['data'];
\$hide           = empty(\$form->children['isEnabled']->vars['data']);
\$channelContent = \$view['content']->getCustomContent('channel.right', \$mauticTemplateVars);
\$leftCol        = (\$channelContent) ? 6 : 12;
\$enableCol      = (\$channelContent) ? '' : 'col-md-2';
\$propsCol       = (\$channelContent) ? '' : 'col-md-10';
?>

<?php echo \$view['form']->row(\$form->children['channel']); ?>
<?php echo \$view['form']->errors(\$form); ?>
<div class=\"row\">
    <div class=\"col-md-<?php echo \$leftCol; ?>\">
        <div class=\"<?php echo \$enableCol; ?>\">
            <?php echo \$view['form']->row(\$form->children['isEnabled']); ?>
        </div>
        <div class=\"<?php echo \$propsCol; ?>\">
            <div class=\"message_channel_properties_<?php echo \$channel; ?><?php if (\$hide): echo ' hide'; endif; ?>\">
                <?php if (isset(\$form->children['channelId'])): ?>
                    <?php echo \$view['form']->row(\$form->children['channelId']); ?>
                <?php endif; ?>

                <?php if (!empty(\$form->children['properties'])): ?>
                    <?php echo \$view['form']->row(\$form->children['properties']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if (\$channelContent): ?>
    <div class=\"col-md-6\">
        <?php echo \$channelContent; ?>
    </div>
    <?php endif; ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Views/FormTheme/channel_row.html.php";
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
        return new Source("", "@bundles/ChannelBundle/Views/FormTheme/channel_row.html.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Views/FormTheme/channel_row.html.php");
    }
}
