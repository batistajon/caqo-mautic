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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Order/NotificationDAO.php */
class __TwigTemplate_4e47c85775c1d254fdfbf767fc1ca93568789d4ecb6012371014891e2b7598f1 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order;

class NotificationDAO
{
    /**
     * @var ObjectChangeDAO
     */
    private \$objectChangeDAO;

    /**
     * @var string
     */
    private \$message;

    public function __construct(ObjectChangeDAO \$objectChangeDAO, string \$message)
    {
        \$this->objectChangeDAO = \$objectChangeDAO;
        \$this->message         = \$message;
    }

    /**
     * @return ObjectChangeDAO
     */
    public function getMauticObject(): string
    {
        return \$this->objectChangeDAO->getMappedObject();
    }

    public function getMauticObjectId(): int
    {
        return (int) \$this->objectChangeDAO->getMappedObjectId();
    }

    public function getIntegration(): string
    {
        return \$this->objectChangeDAO->getIntegration();
    }

    public function getIntegrationObject(): string
    {
        return \$this->objectChangeDAO->getObject();
    }

    /**
     * @return mixed
     */
    public function getIntegrationObjectId()
    {
        return \$this->objectChangeDAO->getObjectId();
    }

    public function getMessage(): string
    {
        return \$this->message;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Order/NotificationDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Order/NotificationDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/Order/NotificationDAO.php");
    }
}
