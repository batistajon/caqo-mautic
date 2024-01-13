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

/* @bundles/FormBundle/Views/Action/option.html.php */
class __TwigTemplate_4a74d9583cb900bd6aa399f9389e06a1131bbcdcbd8ae649254bfe7b4b86fff3 extends Template
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
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
\$class = (empty(\$action['allowCampaignForm'])) ? 'action-standalone-only' : '';
if (empty(\$action['allowCampaignForm']) && !\$isStandalone):
    \$class .= ' hide';
endif;
?>

<option id=\"action_<?php echo \$type; ?>\"
        class=\"<?php echo \$class; ?>\"
        data-toggle=\"ajaxmodal\"
        data-target=\"#formComponentModal\"
        data-href=\"<?php echo \$view['router']->path('mautic_formaction_action', [
            'objectAction' => 'new',
            'type'         => \$type,
            'tmpl'         => 'action',
            'formId'       => \$formId,
        ]); ?>\">
    <?php echo \$view['translator']->trans(\$action['label']); ?>
</option>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Views/Action/option.html.php";
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
        return new Source("", "@bundles/FormBundle/Views/Action/option.html.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Views/Action/option.html.php");
    }
}
