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

/* @bundles/IntegrationsBundle/Sync/Notification/Handler/HandlerContainer.php */
class __TwigTemplate_3a5dda178958c4cdda277401a4a8ad2d6ffaaa60e5b5d0a82f23fc097d50c60b extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Notification\\Handler;

use Mautic\\IntegrationsBundle\\Sync\\Exception\\HandlerNotSupportedException;

class HandlerContainer
{
    /**
     * @var array
     */
    private \$handlers = [];

    public function registerHandler(HandlerInterface \$handler): void
    {
        if (!isset(\$this->handlers[\$handler->getIntegration()])) {
            \$this->handlers[\$handler->getIntegration()] = [];
        }

        \$this->handlers[\$handler->getIntegration()][\$handler->getSupportedObject()] = \$handler;
    }

    /**
     * @return HandlerInterface
     *
     * @throws HandlerNotSupportedException
     */
    public function getHandler(string \$integration, string \$object)
    {
        if (!isset(\$this->handlers[\$integration])) {
            throw new HandlerNotSupportedException(\"\$integration does not have any registered handlers\");
        }

        if (!isset(\$this->handlers[\$integration][\$object])) {
            throw new HandlerNotSupportedException(\"\$integration does not have any registered handlers for the object \$object\");
        }

        return \$this->handlers[\$integration][\$object];
    }

    /**
     * @return HandlerInterface[]
     */
    public function getHandlers()
    {
        return array_reduce(\$this->handlers, function (\$accumulator, \$integrationHandlers) {
            return array_merge(\$accumulator, \$integrationHandlers);
        }, []);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/Notification/Handler/HandlerContainer.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Handler/HandlerContainer.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Handler/HandlerContainer.php");
    }
}
