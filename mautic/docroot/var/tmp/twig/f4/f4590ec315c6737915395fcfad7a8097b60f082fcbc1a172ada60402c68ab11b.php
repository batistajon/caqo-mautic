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

/* @bundles/LeadBundle/Views/LeadLists/index.html.php */
class __TwigTemplate_0940e1fd9db795fca878359a39d2059807f4497e5656cc24e6f5177c6c86089e extends Template
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
\$leadId   = \$lead->getId();
\$leadName = \$lead->getPrimaryIdentifier();
?>
<ul class=\"list-group\">
    <?php foreach (\$lists as \$l): ?>
    <?php
        \$inList  = isset(\$leadsLists[\$l['id']]);
        \$switch  = \$inList ? 'fa-toggle-on' : 'fa-toggle-off';
        \$bgClass = \$inList ? 'text-success' : 'text-danger';
    ?>
    <li class=\"list-group-item\">
        <i class=\"fa fa-lg fa-fw <?php echo \$switch.' '.\$bgClass; ?>\" id=\"leadListToggle<?php echo \$l['id']; ?>\" onclick=\"Mautic.toggleLeadList('leadListToggle<?php echo \$l['id']; ?>', <?php echo \$leadId; ?>, <?php echo \$l['id']; ?>);\"></i>
        <span><?php echo \$l['name'].' ('.\$l['alias'].')'; ?></span>
    </li>
    <?php endforeach; ?>
</ul>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/LeadLists/index.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/LeadLists/index.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/LeadLists/index.html.php");
    }
}
