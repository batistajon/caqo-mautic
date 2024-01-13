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

/* @bundles/QueueBundle/MauticQueueBundle.php */
class __TwigTemplate_1be28ace33295d4396f2b1b90f55d0661cf99a8f2c9fc8a9201d6d848870d5ba extends Template
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

namespace Mautic\\QueueBundle;

use Leezy\\PheanstalkBundle\\DependencyInjection\\LeezyPheanstalkExtension;
use Mautic\\QueueBundle\\Queue\\QueueProtocol;
use OldSound\\RabbitMqBundle\\DependencyInjection\\Compiler\\RegisterPartsPass;
use OldSound\\RabbitMqBundle\\DependencyInjection\\OldSoundRabbitMqExtension;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

class MauticQueueBundle extends Bundle
{
    /**
     * @var string
     */
    private \$queueProtocol;

    public function __construct(string \$queueProtocol)
    {
        \$this->queueProtocol = \$queueProtocol;
    }

    public function build(ContainerBuilder \$container): void
    {
        parent::build(\$container);

        if (!\$this->queueProtocol) {
            return;
        }

        if (QueueProtocol::RABBITMQ === \$this->queueProtocol) {
            \$container->addCompilerPass(new RegisterPartsPass());
        }

        if (file_exists(__DIR__.'/Config/'.\$this->queueProtocol.'.php')) {
            include __DIR__.'/Config/'.\$this->queueProtocol.'.php';
        }
    }

    public function getContainerExtension(): ?Extension
    {
        if (null === \$this->extension) {
            \$this->extension = \$this->createContainerExtension();
        }

        return \$this->extension;
    }

    protected function createContainerExtension(): ?Extension
    {
        if (QueueProtocol::RABBITMQ === \$this->queueProtocol) {
            return new OldSoundRabbitMqExtension();
        }

        if (QueueProtocol::BEANSTALKD === \$this->queueProtocol) {
            return new LeezyPheanstalkExtension();
        }

        return null;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/MauticQueueBundle.php";
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
        return new Source("", "@bundles/QueueBundle/MauticQueueBundle.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/MauticQueueBundle.php");
    }
}
