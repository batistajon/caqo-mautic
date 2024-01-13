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

/* @bundles/CoreBundle/Factory/IpLookupFactory.php */
class __TwigTemplate_4bd780e8f7fcd5dd0aa148a1d8b1dc6588db288fd5fca37460503d9e196e63be extends Template
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

namespace Mautic\\CoreBundle\\Factory;

use GuzzleHttp\\Client;
use Mautic\\CoreBundle\\IpLookup\\AbstractLookup;
use Psr\\Log\\LoggerInterface;

class IpLookupFactory
{
    protected ?LoggerInterface \$logger;
    protected ?string \$cacheDir;
    protected array \$lookupServices;
    protected ?Client \$client;

    public function __construct(array \$lookupServices, ?LoggerInterface \$logger = null, ?Client \$client = null, ?string \$cacheDir = null)
    {
        \$this->lookupServices = \$lookupServices;
        \$this->logger         = \$logger;
        \$this->cacheDir       = \$cacheDir;
        \$this->client         = \$client;
    }

    /**
     * @param      \$service
     * @param null \$auth
     *
     * @return AbstractLookup|null
     */
    public function getService(\$service, \$auth = null, array \$ipLookupConfig = [])
    {
        static \$services = [];

        if (empty(\$service)) {
            return null;
        }

        if (!isset(\$services[\$service]) || (null !== \$auth || null !== \$ipLookupConfig)) {
            if (!isset(\$this->lookupServices[\$service])) {
                throw new \\InvalidArgumentException(\$service.' not registered.');
            }

            \$className = \$this->lookupServices[\$service]['class'];
            if ('\\\\' !== substr(\$className, 0, 1)) {
                \$className = '\\\\'.\$className;
            }

            \$services[\$service] = new \$className(
                \$auth,
                \$ipLookupConfig,
                \$this->cacheDir,
                \$this->logger,
                \$this->client
            );
        }

        return \$services[\$service];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Factory/IpLookupFactory.php";
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
        return new Source("", "@bundles/CoreBundle/Factory/IpLookupFactory.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Factory/IpLookupFactory.php");
    }
}
