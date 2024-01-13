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

/* @bundles/IntegrationsBundle/Sync/Notification/Notifier.php */
class __TwigTemplate_e764a9033b6b305b469ac4f2132211ff07c370cab305b5b004a151c68d42db4d extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Notification;

use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Helper\\ConfigIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Helper\\SyncIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormSyncInterface;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\NotificationDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\HandlerNotSupportedException;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Handler\\HandlerContainer;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;

class Notifier
{
    /**
     * @var HandlerContainer
     */
    private \$handlerContainer;

    /**
     * @var SyncIntegrationsHelper
     */
    private \$syncIntegrationsHelper;

    /**
     * @var ConfigIntegrationsHelper
     */
    private \$configIntegrationsHelper;

    public function __construct(
        HandlerContainer \$handlerContainer,
        SyncIntegrationsHelper \$syncIntegrationsHelper,
        ConfigIntegrationsHelper \$configIntegrationsHelper
    ) {
        \$this->handlerContainer         = \$handlerContainer;
        \$this->syncIntegrationsHelper   = \$syncIntegrationsHelper;
        \$this->configIntegrationsHelper = \$configIntegrationsHelper;
    }

    /**
     * @param NotificationDAO[] \$notifications
     * @param string            \$integrationHandler
     *
     * @throws HandlerNotSupportedException
     * @throws IntegrationNotFoundException
     */
    public function noteMauticSyncIssue(array \$notifications, \$integrationHandler = MauticSyncDataExchange::NAME): void
    {
        foreach (\$notifications as \$notification) {
            \$handler = \$this->handlerContainer->getHandler(\$integrationHandler, \$notification->getMauticObject());

            \$integrationDisplayName = \$this->syncIntegrationsHelper->getIntegration(\$notification->getIntegration())->getDisplayName();
            \$objectDisplayName      = \$this->getObjectDisplayName(\$notification->getIntegration(), \$notification->getIntegrationObject());

            \$handler->writeEntry(\$notification, \$integrationDisplayName, \$objectDisplayName);
        }
    }

    /**
     * Finalizes notifications such as pushing summary entries to the user notifications.
     */
    public function finalizeNotifications(): void
    {
        foreach (\$this->handlerContainer->getHandlers() as \$handler) {
            \$handler->finalize();
        }
    }

    /**
     * @return string
     */
    private function getObjectDisplayName(string \$integration, string \$object)
    {
        try {
            \$configIntegration = \$this->configIntegrationsHelper->getIntegration(\$integration);
        } catch (IntegrationNotFoundException \$exception) {
            return ucfirst(\$object);
        }

        if (!\$configIntegration instanceof ConfigFormSyncInterface) {
            return ucfirst(\$object);
        }

        \$objects = \$configIntegration->getSyncConfigObjects();

        if (!isset(\$objects[\$object])) {
            return ucfirst(\$object);
        }

        return \$objects[\$object];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/Notification/Notifier.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Notifier.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Notifier.php");
    }
}
