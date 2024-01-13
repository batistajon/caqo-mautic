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

/* @bundles/CoreBundle/Views/Helper/publishstatus_badge.html.php */
class __TwigTemplate_e516830d29f37c4413d02fc0b572e5c406c9b3be94109746b17dbcae25945c8b extends Template
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
?>
<?php switch (\$entity->getPublishStatus()) {
    case 'published':
        \$labelColor = 'success';
        break;
    case 'unpublished':
    case 'expired':
        \$labelColor = 'danger';
        break;
    case 'pending':
        \$labelColor = 'warning';
        break;
} ?>
<?php \$labelText = \$view['translator']->trans('mautic.core.form.'.\$entity->getPublishStatus()); ?>
<h4 class=\"fw-sb\"><span class=\"tt-u label label-<?php echo \$labelColor; ?>\"><?php echo \$labelText; ?></span></h4>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Helper/publishstatus_badge.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Helper/publishstatus_badge.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Helper/publishstatus_badge.html.php");
    }
}
