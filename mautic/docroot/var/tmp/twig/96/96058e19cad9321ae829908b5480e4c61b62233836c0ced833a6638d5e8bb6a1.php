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

/* @bundles/PointBundle/Views/Event/actions.html.php */
class __TwigTemplate_744bc5271d507cc0c8d0ce377054a59db5132c32ce2ef063511f9e96f38a5853 extends Template
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
if (!empty(\$deleted)):
    \$action    = 'undelete';
    \$iconClass = 'fa-undo';
    \$btnClass  = 'btn-warning';
else:
    \$action    = 'delete';
    \$iconClass = 'fa-times';
    \$btnClass  = 'btn-danger';
endif;

if (empty(\$route)) {
    \$route = 'mautic_pointtriggerevent_action';
}
?>

<div class=\"form-buttons hide\">
    <a data-toggle=\"ajaxmodal\" data-target=\"#triggerEventModal\" href=\"<?php echo \$view['router']->path(\$route, ['objectAction' => 'edit', 'objectId' => \$id, 'triggerId' => \$sessionId]); ?>\" class=\"btn btn-primary btn-xs btn-edit\">
        <i class=\"fa fa-pencil-square-o\"></i>
    </a>
    <a data-menu-link=\"mautic_point_index\" data-toggle=\"ajax\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"<?php echo \$view['router']->path(\$route, ['objectAction' => \$action, 'objectId' => \$id, 'triggerId' => \$sessionId]); ?>\"  class=\"btn <?php echo \$btnClass; ?> btn-xs\">
        <i class=\"fa <?php echo \$iconClass; ?>\"></i>
    </a>
    <i class=\"fa fa-fw fa-ellipsis-v reorder-handle\"></i>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Views/Event/actions.html.php";
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
        return new Source("", "@bundles/PointBundle/Views/Event/actions.html.php", "/var/www/html/mautic/docroot/app/bundles/PointBundle/Views/Event/actions.html.php");
    }
}
