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

/* @bundles/CoreBundle/Helper/CookieHelper.php */
class __TwigTemplate_50ec930a6060071f110dc98003375621782801cc20f7628dd693fae48f4efe01 extends Template
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

use Symfony\\Component\\HttpFoundation\\RequestStack;

class CookieHelper
{
    const SAME_SITE       = '; SameSite=';
    const SAME_SITE_VALUE = 'None';
    private \$path;
    private \$domain;
    private \$secure       = true;
    private \$httponly     = false;
    private \$request;

    /**
     * @param \$cookiePath
     * @param \$cookieDomain
     * @param \$cookieSecure
     * @param \$cookieHttp
     */
    public function __construct(\$cookiePath, \$cookieDomain, \$cookieSecure, \$cookieHttp, RequestStack \$requestStack)
    {
        \$this->path     = \$cookiePath;
        \$this->domain   = \$cookieDomain;
        \$this->secure   = \$cookieSecure;
        \$this->httponly = \$cookieHttp;

        \$this->request = \$requestStack->getCurrentRequest();
        if (('' === \$this->secure || null === \$this->secure) && \$this->request) {
            \$this->secure = \$requestStack->getCurrentRequest()->isSecure();
        }
    }

    /**
     * @param string \$key
     * @param mixed  \$default
     *
     * @return mixed
     */
    public function getCookie(\$key, \$default = null)
    {
        if (null === \$this->request) {
            return \$default;
        }

        return \$this->request->cookies->get(\$key, \$default);
    }

    /**
     * @param      \$name
     * @param      \$value
     * @param int  \$expire
     * @param null \$path
     * @param null \$domain
     * @param null \$secure
     * @param bool \$httponly
     */
    public function setCookie(\$name, \$value, \$expire = 1800, \$path = null, \$domain = null, \$secure = null, \$httponly = null)
    {
        if (null == \$this->request || (defined('MAUTIC_TEST_ENV') && MAUTIC_TEST_ENV)) {
            return true;
        }

        // If https, SameSite equals None
        \$sameSiteNoneText             = '';
        \$sameSiteNoneTextGreaterPhp73 = null;
        if (true === \$secure or (null === \$secure and true === \$this->secure)) {
            \$sameSiteNoneText             = self::SAME_SITE.self::SAME_SITE_VALUE;
            \$sameSiteNoneTextGreaterPhp73 = self::SAME_SITE_VALUE;
        }

        if (version_compare(phpversion(), '7.3', '>=')) {
            setcookie(
                \$name,
                \$value,
                [
                    'expires'  => (\$expire) ? (int) (time() + \$expire) : null,
                    'path'     => ((null == \$path) ? \$this->path : \$path),
                    'domain'   => (null == \$domain) ? \$this->domain : \$domain,
                    'secure'   => (null == \$secure) ? \$this->secure : \$secure,
                    'httponly' => (null == \$httponly) ? \$this->httponly : \$httponly,
                    'samesite' => \$sameSiteNoneTextGreaterPhp73,
                ]
            );
        } else {
            setcookie(
                \$name,
                \$value,
                (\$expire) ? (int) (time() + \$expire) : null,
                ((null == \$path) ? \$this->path : \$path).\$sameSiteNoneText,
                (null == \$domain) ? \$this->domain : \$domain,
                (null == \$secure) ? \$this->secure : \$secure,
                (null == \$httponly) ? \$this->httponly : \$httponly
            );
        }
    }

    /**
     * Deletes a cookie by expiring it.
     *
     * @param           \$name
     * @param null      \$path
     * @param null      \$domain
     * @param null      \$secure
     * @param bool|true \$httponly
     */
    public function deleteCookie(\$name, \$path = null, \$domain = null, \$secure = null, \$httponly = null)
    {
        \$this->setCookie(\$name, '', -86400, \$path, \$domain, \$secure, \$httponly);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/CookieHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/CookieHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/CookieHelper.php");
    }
}
