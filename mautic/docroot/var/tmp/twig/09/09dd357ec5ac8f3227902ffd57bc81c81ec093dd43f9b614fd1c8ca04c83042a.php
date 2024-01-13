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

/* @bundles/LeadBundle/Views/SubscribedEvents/Timeline/import.html.php */
class __TwigTemplate_3f8e63a58de72ba1aef34e50ff99296965bc410e30b0779af008b0e3ba4dc5d3 extends Template
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

\$import = \$event['extra'];

?>
<dl class=\"dl-horizontal\">
<?php if (!empty(\$import['user_id'])) : ?>
    <dt>
        <?php echo \$view['translator']->trans('mautic.core.createdby'); ?>
    </dt>
    <dd>
        <a href=\"<?php echo \$view['router']->path('mautic_user_action', ['objectAction' => 'view', 'objectId' => \$import['user_id']]); ?>\" data-toggle=\"ajax\">
            <?php echo \$import['user_name']; ?>
        </a>
    </dd>
<?php endif; ?>
<?php if (!empty(\$import['properties']['file'])) : ?>
    <dt>
        <?php echo \$view['translator']->trans('mautic.lead.import.source.file'); ?>
    </dt>
    <dd>
        <?php echo \$import['properties']['file']; ?>
    </dd>
<?php endif; ?>
<?php if (!empty(\$import['properties']['line'])) : ?>
    <dt>
        <?php echo \$view['translator']->trans('mautic.lead.import.csv.line.number'); ?>
    </dt>
    <dd>
        <?php echo \$import['properties']['line']; ?>
    </dd>
<?php endif; ?>
</dl>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/SubscribedEvents/Timeline/import.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/SubscribedEvents/Timeline/import.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/SubscribedEvents/Timeline/import.html.php");
    }
}
