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

/* @bundles/EmailBundle/Views/SubscribedEvents/Dashboard/Sent.email.to.contacts.html.php */
class __TwigTemplate_8d25e30688462844f02b3ee2efa38d027548bd1063fded0caeb0bad01ebee5e5 extends Template
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
if (!isset(\$class)) {
    \$class = 'table';
}
if (!isset(\$shortenLinkText)) {
    \$shortenLinkText = 30;
}
\$showHeaders = [
    'mautic.dashboard.label.contact.email.address',
    'mautic.dashboard.label.contact.open',
    'mautic.dashboard.label.contact.click',
    'mautic.dashboard.label.email.name',
    'mautic.dashboard.label.segment.name',
    'mautic.dashboard.label.company.name',
    'mautic.dashboard.label.campaign.name',
];
\$showValues = [
    'contact_email',
    'open',
    'click',
    'email_name',
    'segment_name',
    'company_name',
    'campaign_name',
];
?>

<table class=\"<?php echo \$class; ?>\">
    <?php if (!empty(\$headItems)) : ?>
        <thead>
            <tr>
            <?php foreach (\$headItems as \$headItem) : ?>
                <?php if (in_array(\$headItem, \$showHeaders)) : ?>
                <th><?php echo \$view['translator']->trans(\$headItem); ?></th>
                <?php endif; ?>
            <?php endforeach; ?>
            </tr>
        </thead>
    <?php endif; ?>
    <?php if (!empty(\$bodyItems)) : ?>
        <tbody>
            <?php foreach (\$bodyItems as \$id => \$row) : ?>
                <tr>
                    <?php if (is_array(\$row)) : ?>
                        <?php foreach (\$row as \$key => \$item) : ?>
                            <?php if (in_array(\$key, \$showValues)) : ?>
                            <td>
                                <?php if ('contact_email' === \$key && !empty(\$row['contact_id'])) : ?>
                                    <a href=\"<?php echo \$view['router']->path('mautic_contact_action', ['objectAction' => 'view', 'objectId' => \$row['contact_id']]); ?>\"
                                        title=\"<?php echo \$item; ?>\"
                                        data-toggle=\"ajax\">
                                        <?php echo \$view['assets']->shortenText(\$item, \$shortenLinkText); ?>
                                    </a>
                                <?php elseif ('email_name' === \$key && !empty(\$row['email_id'])) : ?>
                                    <a href=\"<?php echo \$view['router']->path('mautic_email_action', ['objectAction' => 'view', 'objectId' => \$row['email_id']]); ?>\"
                                        title=\"<?php echo \$item; ?>\"
                                        data-toggle=\"ajax\">
                                        <?php echo \$view['assets']->shortenText(\$item, \$shortenLinkText); ?>
                                    </a>
                                <?php elseif ('segment_name' === \$key && !empty(\$row['segment_id'])) : ?>
                                    <a href=\"<?php echo \$view['router']->path('mautic_segment_action', ['objectAction' => 'view', 'objectId' => \$row['segment_id']]); ?>\"
                                        title=\"<?php echo \$item; ?>\"
                                        data-toggle=\"ajax\">
                                        <?php echo \$view['assets']->shortenText(\$item, \$shortenLinkText); ?>
                                    </a>
                                <?php elseif ('company_name' === \$key && !empty(\$row['company_id'])) : ?>
                                    <a href=\"<?php echo \$view['router']->path('mautic_company_action', ['objectAction' => 'edit', 'objectId' => \$row['company_id']]); ?>\"
                                        title=\"<?php echo \$item; ?>\"
                                        data-toggle=\"ajax\">
                                        <?php echo \$view['assets']->shortenText(\$item, \$shortenLinkText); ?>
                                    </a>
                                <?php elseif ('campaign_name' === \$key && !empty(\$row['campaign_id'])) : ?>
                                    <a href=\"<?php echo \$view['router']->path('mautic_campaign_action', ['objectAction' => 'view', 'objectId' => \$row['campaign_id']]); ?>\"
                                        title=\"<?php echo \$item; ?>\"
                                        data-toggle=\"ajax\">
                                        <?php echo \$view['assets']->shortenText(\$item, \$shortenLinkText); ?>
                                    </a>
                                <?php else: ?>
                                    <?php echo \$item; ?>
                                <?php endif; ?>
                            </td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    <?php endif; ?>
</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Views/SubscribedEvents/Dashboard/Sent.email.to.contacts.html.php";
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
        return new Source("", "@bundles/EmailBundle/Views/SubscribedEvents/Dashboard/Sent.email.to.contacts.html.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Views/SubscribedEvents/Dashboard/Sent.email.to.contacts.html.php");
    }
}
