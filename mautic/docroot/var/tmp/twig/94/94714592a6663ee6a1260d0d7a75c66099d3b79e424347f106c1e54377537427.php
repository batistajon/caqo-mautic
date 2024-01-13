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

/* @bundles/CoreBundle/Views/FormTheme/Config/iplookup_download_data_store_button_row.html.php */
class __TwigTemplate_f6c08ecb9724f5e96a307051e2ed8c0ecccda0473ace1eea55599cb8ec19d094 extends Template
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
 * @copyright   2015 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<div class=\"row\">
    <div class=\"col-sm-6\">
        <div id=\"iplookup_fetch_button_container\">
            <?php echo \$view['form']->widget(\$form['fetch_button']); ?>
            <span class=\"fa fa-spinner fa-spin hide\"></span>
            <?php if (isset(\$ipDataStoreLastDownloaded)): ?>
            <div class=\"small text-muted\"><?php echo \$ipDataStoreLastDownloaded; ?></div>
            <?php endif; ?>
        </div>
        <div class=\"col-md-9 help-block\"></div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Views/FormTheme/Config/iplookup_download_data_store_button_row.html.php";
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
        return new Source("", "@bundles/CoreBundle/Views/FormTheme/Config/iplookup_download_data_store_button_row.html.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Views/FormTheme/Config/iplookup_download_data_store_button_row.html.php");
    }
}
