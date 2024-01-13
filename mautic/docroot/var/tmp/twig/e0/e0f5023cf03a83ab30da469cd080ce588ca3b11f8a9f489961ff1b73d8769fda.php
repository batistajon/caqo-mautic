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

/* @bundles/CoreBundle/Session/Storage/Handler/RedisSentinelSessionHandler.php */
class __TwigTemplate_e06814cfbfd7cd23100e6a728eeca0c6f17648e5493ca8451f844db9c2e9b58e extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Session\\Storage\\Handler;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PRedisConnectionHelper;
use Predis\\Client;
use Predis\\Response\\ErrorInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler;

class RedisSentinelSessionHandler extends AbstractSessionHandler
{
    /**
     * @var Client Redis client
     */
    private \$redis;

    /**
     * @var array
     */
    private \$redisConfiguration;

    public function __construct(array \$redisConfiguration, CoreParametersHelper \$coreParametersHelper)
    {
        \$this->redisConfiguration = \$redisConfiguration;

        \$redisOptions = PRedisConnectionHelper::makeRedisOptions(\$redisConfiguration, 'session:'.\$coreParametersHelper->get('db_name').':');

        \$this->redis = new Client(PRedisConnectionHelper::getRedisEndpoints(\$redisConfiguration['url']), \$redisOptions);
    }

    protected function doRead(\$sessionId): string
    {
        return \$this->redis->get(\$sessionId) ?: '';
    }

    protected function doWrite(\$sessionId, \$data): bool
    {
        \$expireTime = isset(\$this->redisConfiguration['session_expire_time']) ? (int) \$this->redisConfiguration['session_expire_time'] : 1209600;
        \$result     = \$this->redis->setEx(\$sessionId, \$expireTime, \$data);

        return \$result && !\$result instanceof ErrorInterface;
    }

    protected function doDestroy(\$sessionId): bool
    {
        \$this->redis->del(\$sessionId);

        return true;
    }

    public function close(): bool
    {
        return true;
    }

    public function gc(\$maxlifetime): bool
    {
        return true;
    }

    public function updateTimestamp(\$sessionId, \$data): bool
    {
        \$expireTime = isset(\$this->redisConfiguration['session_expire_time']) ? (int) \$this->redisConfiguration['session_expire_time'] : 1209600;

        return (bool) \$this->redis->expire(\$sessionId, \$expireTime);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Session/Storage/Handler/RedisSentinelSessionHandler.php";
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
        return new Source("", "@bundles/CoreBundle/Session/Storage/Handler/RedisSentinelSessionHandler.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Session/Storage/Handler/RedisSentinelSessionHandler.php");
    }
}
