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

/* @bundles/IntegrationsBundle/Sync/DAO/Mapping/RemappedObjectDAO.php */
class __TwigTemplate_ebb7a47c3358784926856190e940c4675e6b57a96c444dfa4317937d51eefa69 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping;

class RemappedObjectDAO
{
    /**
     * @var string
     */
    private \$integration;

    /**
     * @var mixed
     */
    private \$oldObjectId;

    /**
     * @var string
     */
    private \$oldObjectName;

    /**
     * @var string
     */
    private \$newObjectName;

    /**
     * @var mixed
     */
    private \$newObjectId;

    /**
     * @param mixed \$oldObjectId
     * @param mixed \$newObjectId
     */
    public function __construct(string \$integration, string \$oldObjectName, \$oldObjectId, string \$newObjectName, \$newObjectId)
    {
        \$this->integration   = \$integration;
        \$this->oldObjectName = \$oldObjectName;
        \$this->oldObjectId   = \$oldObjectId;
        \$this->newObjectName = \$newObjectName;
        \$this->newObjectId   = \$newObjectId;
    }

    public function getIntegration(): string
    {
        return \$this->integration;
    }

    public function getOldObjectName(): string
    {
        return \$this->oldObjectName;
    }

    /**
     * @return mixed
     */
    public function getOldObjectId()
    {
        return \$this->oldObjectId;
    }

    public function getNewObjectName(): string
    {
        return \$this->newObjectName;
    }

    /**
     * @return mixed
     */
    public function getNewObjectId()
    {
        return \$this->newObjectId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Mapping/RemappedObjectDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Mapping/RemappedObjectDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Mapping/RemappedObjectDAO.php");
    }
}
