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

/* @bundles/PointBundle/Views/Event/generic.html.php */
class __TwigTemplate_0a24142d86ff748d3e0e8af2d04690ef91a9096e9c8c101fd9b46d4c999ad5ee extends Template
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
\$containerClass = (!empty(\$deleted)) ? ' bg-danger' : '';
?>

<div class=\"trigger-event-row <?php echo \$containerClass; ?>\" id=\"triggerEvent_<?php echo \$id; ?>\">
    <?php echo \$view->render('MauticPointBundle:Event:actions.html.php', [
        'deleted'   => (!empty(\$deleted)) ? \$deleted : false,
        'id'        => \$id,
        'route'     => 'mautic_pointtriggerevent_action',
        'sessionId' => \$sessionId,
    ]); ?>
    <span class=\"trigger-event-label\"><?php echo \$event['name']; ?></span>
    <?php if (!empty(\$event['description'])): ?>
    <span class=\"trigger-event-descr\"><?php echo \$event['description']; ?></span>
    <?php endif; ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Views/Event/generic.html.php";
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
        return new Source("", "@bundles/PointBundle/Views/Event/generic.html.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Views/Event/generic.html.php");
    }
}
