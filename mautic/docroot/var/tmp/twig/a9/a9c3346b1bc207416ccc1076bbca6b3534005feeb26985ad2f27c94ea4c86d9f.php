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

/* @bundles/AssetBundle/Helper/TokenHelper.php */
class __TwigTemplate_4a876936822d3ca4874530eb53aeac42b7869ae832d62a35f79543162b4f1094 extends Template
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

use Mautic\\AssetBundle\\Model\\AssetModel;

class TokenHelper
{
    /**
     * @var AssetModel
     */
    protected \$model;

    public function __construct(AssetModel \$model)
    {
        \$this->model = \$model;
    }

    /**
     * @param \$content
     * @param \$clickthrough
     *
     * @return array
     */
    public function findAssetTokens(\$content, \$clickthrough = [])
    {
        \$tokens = [];

        preg_match_all('/{assetlink=(.*?)}/', \$content, \$matches);
        if (!empty(\$matches[1])) {
            foreach (\$matches[1] as \$key => \$assetId) {
                \$token = \$matches[0][\$key];

                if (isset(\$tokens[\$token])) {
                    continue;
                }

                \$asset          = \$this->model->getEntity(\$assetId);
                \$tokens[\$token] = (null !== \$asset) ? \$this->model->generateUrl(\$asset, true, \$clickthrough) : '';
            }
        }

        return \$tokens;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Helper/TokenHelper.php";
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
        return new Source("", "@bundles/AssetBundle/Helper/TokenHelper.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Helper/TokenHelper.php");
    }
}
