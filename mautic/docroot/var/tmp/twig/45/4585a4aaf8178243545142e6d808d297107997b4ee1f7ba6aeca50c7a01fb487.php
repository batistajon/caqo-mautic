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

/* @bundles/CoreBundle/Helper/TrailingSlashHelper.php */
class __TwigTemplate_d2a986dd4c7c051284381721d5c4af75e2e08bce3c02ed4a5df742dc849061bf extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Symfony\\Component\\HttpFoundation\\Request;

class TrailingSlashHelper
{
    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * TrailingSlashHelper constructor.
     */
    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    /**
     * @return string
     */
    public function getSafeRedirectUrl(Request \$request)
    {
        \$siteUrl  = \$this->coreParametersHelper->get('site_url');
        \$pathInfo = substr(\$request->getPathInfo(), 0, -1);

        return \$siteUrl.\$pathInfo;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/TrailingSlashHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/TrailingSlashHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/TrailingSlashHelper.php");
    }
}
