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

/* @bundles/LeadBundle/Views/Note/list.html.php */
class __TwigTemplate_f2f32130fe071e91feb5bc385f9dcb599a0312611dc36ee1c6bf979ca7d0b1b0 extends Template
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
if ('index' == \$tmpl) {
    \$view->extend('MauticLeadBundle:Note:index.html.php');
}
?>

<ul class=\"notes\" id=\"LeadNotes\">
    <?php foreach (\$notes as \$note): ?>
        <?php
        //Use a separate layout for AJAX generated content
        echo \$view->render('MauticLeadBundle:Note:note.html.php', [
            'note'        => \$note,
            'lead'        => \$lead,
            'permissions' => \$permissions,
        ]); ?>
    <?php endforeach; ?>
</ul>
<?php if (\$totalNotes = count(\$notes)): ?>
<div class=\"notes-pagination\">
    <?php echo \$view->render('MauticCoreBundle:Helper:pagination.html.php', [
        'totalItems' => \$totalNotes,
        'target'     => '#notes-container',
        'page'       => \$page,
        'limit'      => \$limit,
        'sessionVar' => 'lead.'.\$lead->getId().'.note',
        'baseUrl'    => \$view['router']->path('mautic_contactnote_index', ['leadId' => \$lead->getId()]),
    ]); ?>
</div>
<?php endif; ?>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Note/list.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Note/list.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Note/list.html.php");
    }
}
