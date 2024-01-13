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

/* @bundles/FormBundle/Views/Builder/actions.html.php */
class __TwigTemplate_57e41e677e5519f5164fe2b2ea51d7bb39bc45abaed2dd616065f45442f4b828 extends Template
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
if (empty(\$route)) {
    \$route = 'mautic_formfield_action';
}
?>

<div class=\"form-buttons btn-group\" role=\"group\" aria-label=\"Field options\">
    <button type=\"button\" data-toggle=\"ajaxmodal\" data-target=\"#formComponentModal\" href=\"<?php echo \$view['router']->path(\$route, ['objectAction' => 'edit', 'objectId' => \$id, 'formId' => \$formId]); ?>\" class=\"btn btn-default btn-edit\">
        <i class=\"fa fa-pencil-square-o text-primary\"></i>
    </button>
    <?php if (empty(\$disallowDelete)): ?>
    <a type=\"button\" data-hide-panel=\"true\" data-toggle=\"ajax\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"<?php echo \$view['router']->path(\$route, ['objectAction' => 'delete', 'objectId' => \$id, 'formId' => \$formId]); ?>\" class=\"btn btn-default\">
        <i class=\"fa fa-trash-o text-danger\"></i>
    </a>
    <?php endif; ?>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Builder/actions.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Builder/actions.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Builder/actions.html.php");
    }
}
