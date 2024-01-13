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

/* @bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationHelper.php */
class __TwigTemplate_43208c579f9761f656d8f1f9f6d895e1f3e946a20a313bc88330686d62b1f34f extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper;

use Mautic\\IntegrationsBundle\\Sync\\Notification\\Writer;
use Symfony\\Component\\Translation\\TranslatorInterface;

class UserNotificationHelper
{
    /**
     * @var Writer
     */
    private \$writer;

    /**
     * @var UserHelper
     */
    private \$userHelper;

    /**
     * @var OwnerProvider
     */
    private \$ownerProvider;

    /**
     * @var RouteHelper
     */
    private \$routeHelper;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var string
     */
    private \$integrationDisplayName;

    /**
     * @var string
     */
    private \$objectDisplayName;

    public function __construct(
        Writer \$writer,
        UserHelper \$userHelper,
        OwnerProvider \$ownerProvider,
        RouteHelper \$routeHelper,
        TranslatorInterface \$translator
    ) {
        \$this->writer        = \$writer;
        \$this->userHelper    = \$userHelper;
        \$this->ownerProvider = \$ownerProvider;
        \$this->routeHelper   = \$routeHelper;
        \$this->translator    = \$translator;
    }

    /**
     * @throws \\Doctrine\\ORM\\ORMException
     * @throws \\Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotSupportedException
     */
    public function writeNotification(
        string \$message,
        string \$integrationDisplayName,
        string \$objectDisplayName,
        string \$mauticObject,
        int \$id,
        string \$linkText
    ): void {
        \$this->integrationDisplayName = \$integrationDisplayName;
        \$this->objectDisplayName      = \$objectDisplayName;
        \$link                         = \$this->routeHelper->getLink(\$mauticObject, \$id, \$linkText);
        \$owners                       = \$this->ownerProvider->getOwnersForObjectIds(\$mauticObject, [\$id]);

        if (!empty(\$owners[0]['owner_id'])) {
            \$this->writeMessage(\$message, \$link, (int) \$owners[0]['owner_id']);

            return;
        }

        \$adminUsers = \$this->userHelper->getAdminUsers();
        foreach (\$adminUsers as \$userId) {
            \$this->writeMessage(\$message, \$link, \$userId);
        }
    }

    /**
     * @throws \\Doctrine\\ORM\\ORMException
     */
    private function writeMessage(string \$message, string \$link, int \$userId): void
    {
        \$this->writer->writeUserNotification(
            \$this->translator->trans(
                'mautic.integration.sync.user_notification.header',
                [
                    '%integration%' => \$this->integrationDisplayName,
                    '%object%'      => \$this->objectDisplayName,
                ]
            ),
            \$this->translator->trans(
                'mautic.integration.sync.user_notification.sync_error',
                [
                    '%name%'    => \$link,
                    '%message%' => \$message,
                ]
            ),
            \$userId
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationHelper.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationHelper.php");
    }
}
