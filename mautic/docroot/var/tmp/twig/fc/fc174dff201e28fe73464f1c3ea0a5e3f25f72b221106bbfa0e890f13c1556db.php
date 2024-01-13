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

/* @bundles/PageBundle/Views/SubscribedEvents/Timeline/videohit.html.php */
class __TwigTemplate_25d33d05c9042bedd364f06c1077786eb2f502162f5a1db37a3b318556515407 extends Template
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

use Mautic\\CoreBundle\\Helper\\InputHelper;

\$viewTime = \$duration = \$percentage = \$unknown = \$view['translator']->trans('mautic.core.unknown');

if (\$event['extra']['hit']['time_watched']) {
    \$viewTimeActual = \$viewTime = \$event['extra']['hit']['time_watched'];

    // format the time
    if (\$viewTime > 60) {
        \$sec      = \$viewTime % 60;
        \$min      = floor(\$viewTime / 60);
        \$viewTime = \$min.'m '.\$sec.'s';
    } else {
        \$viewTime .= 's';
    }
}

if (\$event['extra']['hit']['duration']) {
    \$durationActual = \$duration = \$event['extra']['hit']['duration'];

    // format the time
    if (\$duration > 60) {
        \$sec      = \$duration % 60;
        \$min      = floor(\$duration / 60);
        \$duration = \$min.'m '.\$sec.'s';
    } else {
        \$duration .= 's';
    }
}

if (\$viewTime !== \$unknown && \$duration !== \$unknown) {
    \$percentage = round((\$viewTimeActual / \$durationActual) * 100);
}

\$icon = (isset(\$event['icon'])) ? \$event['icon'] : '';

?>
<dl class=\"dl-horizontal\">
    <dt><?php echo \$view['translator']->trans('mautic.page.time.on.video'); ?>:</dt>
    <dd class=\"ellipsis\"><?php echo \$view['translator']->trans('mautic.page.time.on.video.value', ['%time_watched%' => \$viewTime, '%duration%' => \$duration, '%percentage%' => \$percentage]); ?></dd>
    <dt><?php echo \$view['translator']->trans('mautic.page.referrer'); ?>:</dt>
    <dd class=\"ellipsis\"><?php echo \$event['extra']['hit']['referer'] ? \$view['assets']->makeLinks(\$event['extra']['hit']['referer']) : \$view['translator']->trans('mautic.core.unknown'); ?></dd>
    <dt><?php echo \$view['translator']->trans('mautic.video.url'); ?>:</dt>
    <dd class=\"ellipsis\"><?php echo \$event['extra']['hit']['url'] ? \$view['assets']->makeLinks(\$event['extra']['hit']['url']) : \$view['translator']->trans('mautic.core.unknown'); ?></dd>
</dl>
<div class=\"small\">
    <?php echo InputHelper::clean(\$event['extra']['hit']['user_agent']); ?>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Views/SubscribedEvents/Timeline/videohit.html.php";
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
        return new Source("", "@bundles/PageBundle/Views/SubscribedEvents/Timeline/videohit.html.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Views/SubscribedEvents/Timeline/videohit.html.php");
    }
}
