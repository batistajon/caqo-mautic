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

/* @bundles/CoreBundle/Views/Slots/socialfollow.html.php */
class __TwigTemplate_c1f9bacf9ce1773786588cadbd7f9cdc0d7c32af05c6818cda282c6c58ad79bf extends Template
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

<div class=\"socialfollow\">
    <a id=\"flink\" href=\"http://www.facebook.com\" target=\"_blank\"><img
            src=\"<?php echo \$view['assets']->getUrl('themes/neopolitan/img/facebook.gif', null, null, true); ?>\"
            alt=\"facebook\"
            class=\"fr-view fr-dii fr-draggable\"></a>
    <a id=\"tlink\" href=\"http://www.twitter.com\" target=\"_blank\"><img
            src=\"<?php echo \$view['assets']->getUrl('themes/neopolitan/img/twitter.gif', null, null, true); ?>\"
            alt=\"twitter\"
            class=\"fr-view fr-dii fr-draggable\"></a>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/Slots/socialfollow.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/Slots/socialfollow.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/Slots/socialfollow.html.php");
    }
}
