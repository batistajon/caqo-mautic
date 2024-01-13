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

/* @bundles/DynamicContentBundle/Views/SubscribedEvents/Timeline/index.html.php */
class __TwigTemplate_5cd2d611a12a5781c2819e3875dc894820989a7ca4aacae2703c871289838942 extends Template
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
\$data = \$event['extra']['log']['metadata'];

if (isset(\$data['failed']) || !isset(\$data['timeline'])) {
    return;
}
?>

<dl class=\"dl-horizontal\">
    <dt><?php echo \$view['translator']->trans('mautic.dynamicContent.timeline.content'); ?></dt>
    <dd><?php echo \$view['translator']->trans(\$data['timeline']); ?></dd>
</dl>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Views/SubscribedEvents/Timeline/index.html.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Views/SubscribedEvents/Timeline/index.html.php", "/var/www/html/mautic/docroot/app/bundles/DynamicContentBundle/Views/SubscribedEvents/Timeline/index.html.php");
    }
}
