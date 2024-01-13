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

/* @bundles/CoreBundle/Views/SortablePanels/actions.html.php */
class __TwigTemplate_e8deab194910a173b397aedb42358a100b75bf28e502cfde12187619c53ba713 extends Template
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

if (!isset(\$editButtonIcon)) {
    \$editButtonIcon = 'fa-pencil-square-o text-primary';
}

if (!isset(\$deleteButtonIcon)) {
    \$deleteButtonIcon = 'fa-trash-o text-danger';
}

?>

<div class=\"sortable-panel-buttons btn-group\" role=\"group\" aria-label=\"Actions\">
    <button type=\"button\" class=\"btn btn-default btn-edit btn-nospin\">
        <i class=\"fa <?php echo \$editButtonIcon; ?>\"></i>
    </button>
    <?php if (empty(\$disallowDelete)): ?>
    <button type=\"button\" class=\"btn btn-default btn-delete btn-nospin\">
        <i class=\"fa <?php echo \$deleteButtonIcon; ?>\"></i>
    </button>
    <?php endif; ?>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/SortablePanels/actions.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/SortablePanels/actions.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/SortablePanels/actions.html.php");
    }
}
