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

/* @bundles/ChannelBundle/Views/Message/list_item.html.php */
class __TwigTemplate_fa21bf1816158f0af8566e275f7c1c1f20bf8e1ad808efc63b9f4002a6894ea7 extends Template
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

/** @var \\Mautic\\ChannelBundle\\Entity\\Message \$item */
\$messageChannels = \$item->getChannels();
\$channels        = [];
if (\$messageChannels) {
    foreach (\$messageChannels as \$channelName => \$channel) {
        if (!\$channel->isEnabled()) {
            continue;
        }

        \$channels[] = \$view['translator']->hasId('mautic.channel.'.\$channelName)
            ? \$view['translator']->trans('mautic.channel.'.\$channelName)
            : ucfirst(
                \$channelName
            );
    }
}
?>

<td class=\"visible-md visible-lg\">
    <?php foreach (\$channels as \$channel): ?>
    <span class=\"label label-default\"><?php echo \$channel; ?></span>
    <?php endforeach; ?>
</td>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Views/Message/list_item.html.php";
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
        return new Source("", "@bundles/ChannelBundle/Views/Message/list_item.html.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Views/Message/list_item.html.php");
    }
}
