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

/* @bundles/LeadBundle/Templating/Helper/DefaultAvatarHelper.php */
class __TwigTemplate_caa031f75e5f90a69386bd4eacf58fd83988515cf1348c4545ece90b743146ad extends Template
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

namespace Mautic\\LeadBundle\\Templating\\Helper;

use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Templating\\Helper\\AssetsHelper;

class DefaultAvatarHelper
{
    /**
     * @var PathsHelper
     */
    private \$pathsHelper;

    /**
     * @var AssetsHelper
     */
    private \$assetsHelper;

    public function __construct(
        PathsHelper \$pathsHelper,
        AssetsHelper \$assetsHelper
    ) {
        \$this->pathsHelper  = \$pathsHelper;
        \$this->assetsHelper = \$assetsHelper;
    }

    public function getDefaultAvatar(bool \$absolute = false): string
    {
        \$img = \$this->pathsHelper->getSystemPath('assets').'/images/avatar.png';

        return \$this->assetsHelper->getUrl(\$img, null, null, \$absolute);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Templating/Helper/DefaultAvatarHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Templating/Helper/DefaultAvatarHelper.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Templating/Helper/DefaultAvatarHelper.php");
    }
}
