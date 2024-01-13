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

/* @bundles/LeadBundle/Views/Lead/company.html.php */
class __TwigTemplate_41a2b62d435e2831bbc1111ad6d6d8b1d070839682e7d8adb52a2f928be6d0b6 extends Template
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
    <?php foreach (\$companies as \$company): ?>
        <?php
        \$switch  = isset(\$companyLead[\$company['id']]) ? 'fa-toggle-on' : 'fa-toggle-off';
        \$bgClass = isset(\$companyLead[\$company['id']]) ? 'text-success' : 'text-danger';
        ?>
        <li class=\"list-group-item\">
            <i class=\"fa fa-lg fa-fw <?php echo \$switch.' '.\$bgClass; ?>\" id=\"companyLeadsToggle<?php echo \$company['id']; ?>\" onclick=\"Mautic.toggleCompanyLead('companyLeadsToggle<?php echo \$company['id']; ?>', <?php echo \$leadId; ?>, <?php echo \$company['id']; ?>);\"></i>
            <span><?php echo \$view->escape(\$company['companyname']); ?></span>
        </li>
    <?php endforeach; ?>
</ul>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Lead/company.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Lead/company.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Lead/company.html.php");
    }
}
