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

/* @bundles/NotificationBundle/Views/SubscribedEvents/Timeline/index.html.php */
class __TwigTemplate_ce8c41d332386bafca80932a370c07024de138ef7efaf8805493653833f01abd extends Template
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
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
\$data = \$event['extra']['log']['metadata'];
if (isset(\$data['failed'])) {
    return;
}
?>

<dl class=\"dl-horizontal\">
    <dt><?php echo \$view['translator']->trans('mautic.notification.timeline.status'); ?></dt>
    <dd><?php echo \$view['translator']->trans(\$data['status']); ?></dd>
    <dt><?php echo \$view['translator']->trans('mautic.notification.timeline.type'); ?></dt>
    <dd><?php echo \$view['translator']->trans(\$data['type']); ?></dd>
</dl>
<div class=\"small\">
    <hr />
    <strong><?php echo \$data['heading']; ?></strong>
    <br />
    <?php echo \$data['content']; ?>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Views/SubscribedEvents/Timeline/index.html.php";
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
        return new Source("", "@bundles/NotificationBundle/Views/SubscribedEvents/Timeline/index.html.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Views/SubscribedEvents/Timeline/index.html.php");
    }
}
