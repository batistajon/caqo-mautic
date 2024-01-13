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

/* @bundles/AssetBundle/Helper/PointActionHelper.php */
class __TwigTemplate_3578ecde0ad552a74bd6500cd8400255aeb27ca9c4b5fa618132deb30cfaecf1 extends Template
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

namespace Mautic\\AssetBundle\\Helper;

/**
 * Class PointActionHelper.
 */
class PointActionHelper
{
    /**
     * @param \$eventDetails
     * @param \$action
     *
     * @return bool
     */
    public static function validateAssetDownload(\$eventDetails, \$action)
    {
        \$assetId       = \$eventDetails->getId();
        \$limitToAssets = \$action['properties']['assets'];

        if (!empty(\$limitToAssets) && !in_array(\$assetId, \$limitToAssets)) {
            //no points change
            return false;
        }

        return true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Helper/PointActionHelper.php";
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
        return new Source("", "@bundles/AssetBundle/Helper/PointActionHelper.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Helper/PointActionHelper.php");
    }
}
