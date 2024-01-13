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

/* @bundles/CoreBundle/Templating/Helper/GravatarHelper.php */
class __TwigTemplate_30657efdc878e653b8e1374805a42dde54e08ffa1ba84969bfbd101fd602eeec extends Template
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

namespace Mautic\\CoreBundle\\Templating\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UrlHelper;
use Mautic\\LeadBundle\\Templating\\Helper\\DefaultAvatarHelper;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Templating\\Helper\\Helper;

class GravatarHelper extends Helper
{
    /**
     * @var bool
     */
    private \$devMode;

    /**
     * @var array
     */
    private \$devHosts = [];

    /**
     * @var DefaultAvatarHelper
     */
    private \$defaultAvatarHelper;

    /**
     * @var RequestStack
     */
    private \$requestStack;

    public function __construct(
        DefaultAvatarHelper \$defaultAvatarHelper,
        CoreParametersHelper \$coreParametersHelper,
        RequestStack \$requestStack
    ) {
        \$this->devMode             = MAUTIC_ENV === 'dev';
        \$this->defaultAvatarHelper = \$defaultAvatarHelper;
        \$this->requestStack        = \$requestStack;
        \$this->devHosts            = (array) \$coreParametersHelper->get('dev_hosts');
    }

    /**
     * @param string \$email
     * @param string \$size
     * @param string \$default
     *
     * @return string
     */
    public function getImage(\$email, \$size = '250', \$default = null)
    {
        \$request      = \$this->requestStack->getCurrentRequest();
        \$localDefault = (\$this->devMode
            || (\$request
                && in_array(
                    \$request->getClientIp(),
                    array_merge(\$this->devHosts, ['127.0.0.1', 'fe80::1', '::1'])
                )))
            ?
            'mp'
            :
            \$this->defaultAvatarHelper->getDefaultAvatar(true);

        \$url = 'https://www.gravatar.com/avatar/'.md5(strtolower(trim(\$email))).'?s='.\$size;

        if (null === \$default) {
            \$default = \$localDefault;
        }

        \$default = (false !== strpos(\$default, '.') && 0 !== strpos(\$default, 'http')) ? UrlHelper::rel2abs(\$default) : \$default;

        return \$url.('&d='.urlencode(\$default));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'gravatar';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Helper/GravatarHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Helper/GravatarHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Helper/GravatarHelper.php");
    }
}
