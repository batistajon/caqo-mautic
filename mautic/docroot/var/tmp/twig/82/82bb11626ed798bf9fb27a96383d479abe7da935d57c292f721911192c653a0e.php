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

/* @bundles/UserBundle/Security/Authentication/Token/PluginToken.php */
class __TwigTemplate_392c61f7b8b2c9528b1fc31d2f172c818183eae291f85c81f2d72e8a3175dfd0 extends Template
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

namespace Mautic\\UserBundle\\Security\\Authentication\\Token;

use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AbstractToken;

class PluginToken extends AbstractToken
{
    /**
     * @var array|\\Symfony\\Component\\Security\\Core\\Role\\RoleInterface[]
     */
    protected \$providerKey;

    /**
     * @var string
     */
    protected \$credentials;

    protected \$authenticatingService;

    /**
     * @var Response
     */
    protected \$response;

    /**
     * @param array|\\Symfony\\Component\\Security\\Core\\Role\\RoleInterface[] \$providerKey
     * @param null                                                        \$authenticatingService
     * @param string                                                      \$user
     * @param string                                                      \$credentials
     * @param Response                                                    \$response
     */
    public function __construct(
        \$providerKey,
        \$authenticatingService = null,
        \$user = '',
        \$credentials = '',
        array \$roles = [],
        Response \$response = null
    ) {
        parent::__construct(\$roles);

        if (empty(\$providerKey)) {
            throw new \\InvalidArgumentException('\$providerKey must not be empty.');
        }

        \$this->setUser(\$user);
        \$this->authenticatingService = \$authenticatingService;
        \$this->credentials           = \$credentials;
        \$this->providerKey           = \$providerKey;
        \$this->response              = \$response;

        parent::setAuthenticated(count(\$roles) > 0);
    }

    /**
     * @return string
     */
    public function getCredentials()
    {
        return \$this->credentials;
    }

    /**
     * @return array|\\Symfony\\Component\\Security\\Core\\Role\\RoleInterface[]
     */
    public function getProviderKey()
    {
        return \$this->providerKey;
    }

    public function getAuthenticatingService()
    {
        return \$this->authenticatingService;
    }

    /**
     * @return mixed
     */
    public function getResponse()
    {
        return \$this->response;
    }

    /**
     * {@inheritdoc}
     */
    public function serialize()
    {
        return serialize([\$this->authenticatingService, \$this->credentials, \$this->providerKey, parent::serialize()]);
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize(\$serialized)
    {
        list(\$this->authenticatingService, \$this->credentials, \$this->providerKey, \$parentStr) = unserialize(\$serialized);
        parent::unserialize(\$parentStr);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Security/Authentication/Token/PluginToken.php";
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
        return new Source("", "@bundles/UserBundle/Security/Authentication/Token/PluginToken.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Security/Authentication/Token/PluginToken.php");
    }
}
