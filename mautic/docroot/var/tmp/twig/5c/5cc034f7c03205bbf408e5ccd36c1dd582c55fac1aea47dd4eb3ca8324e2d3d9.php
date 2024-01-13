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

/* @bundles/PageBundle/Views/SubscribedEvents/PageToken/token.html.php */
class __TwigTemplate_1dd3c697564ec2ce0c1f954d7e7d455de3e679bf3c265bce185c987418eee2c9 extends Template
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
<div id=\"pageTokens\">
    <div class=\"row ml-2 mr-2 mb-2\">
        <div class=\"col-sm-6\">
            <a href=\"#\" data-toggle=\"tooltip\" data-token=\"{langbar}\" class=\"btn btn-default btn-block\" title=\"<?php echo \$view['translator']->trans('mautic.page.token.lang.descr'); ?>\">
                <i class=\"fa fa-language\"></i><br />
                <?php echo \$view['translator']->trans('mautic.page.token.lang'); ?>
            </a>
        </div>
        <div class=\"col-sm-6\">
            <a href=\"#\" data-toggle=\"tooltip\" data-token=\"{sharebuttons}\" class=\"btn btn-default btn-block\" title=\"<?php echo \$view['translator']->trans('mautic.page.token.share.descr'); ?>\">
                <i class=\"fa fa-share-alt-square\"></i><br />
                <?php echo \$view['translator']->trans('mautic.page.token.share'); ?>
            </a>
        </div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Views/SubscribedEvents/PageToken/token.html.php";
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
        return new Source("", "@bundles/PageBundle/Views/SubscribedEvents/PageToken/token.html.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Views/SubscribedEvents/PageToken/token.html.php");
    }
}
