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

/* @bundles/CoreBundle/Helper/UserHelper.php */
class __TwigTemplate_8f768ad70d68f420bdbeb0025d43f2230baa2e49aade04b03178b140ce641f20 extends Template
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

use Mautic\\UserBundle\\Entity\\User;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;

/**
 * Class IpLookupHelper.
 */
class UserHelper
{
    /**
     * @var TokenStorageInterface
     */
    protected \$tokenStorage;

    /**
     * UserHelper constructor.
     */
    public function __construct(TokenStorageInterface \$tokenStorage)
    {
        \$this->tokenStorage = \$tokenStorage;
    }

    /**
     * @param bool \$nullIfGuest
     *
     * @return User|null
     */
    public function getUser(\$nullIfGuest = false)
    {
        \$user  = null;
        \$token = \$this->tokenStorage->getToken();

        if (null !== \$token) {
            \$user = \$token->getUser();
        }

        if (!\$user instanceof User) {
            if (\$nullIfGuest) {
                return null;
            }

            \$user = new User(true);
        }

        return \$user;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/UserHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/UserHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/UserHelper.php");
    }
}
