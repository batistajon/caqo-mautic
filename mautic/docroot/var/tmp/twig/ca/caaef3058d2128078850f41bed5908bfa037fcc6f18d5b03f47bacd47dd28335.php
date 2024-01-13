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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Request/ObjectDAO.php */
class __TwigTemplate_3460337577197af920a33585e766981dc794e10cc8bd75c6b053306624f1ab07 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request;

class ObjectDAO
{
    /**
     * @var string
     */
    private \$object;

    /**
     * Date/time based on last synced date for the object or the start date/time fed through the command's arguments.
     * This value does not change between iterations.
     *
     * @var \\DateTimeInterface|null
     */
    private \$fromDateTime;

    /**
     * Date/Time the sync started.
     *
     * @var \\DateTimeInterface|null
     */
    private \$toDateTime;

    /**
     * @var \\DateTimeInterface|null
     */
    private \$objectLastSyncDateTime;

    /**
     * @var string[]
     */
    private \$fields = [];

    /**
     * @var string[]
     */
    private \$requiredFields = [];

    public function __construct(
        string \$object,
        ?\\DateTimeInterface \$fromDateTime = null,
        ?\\DateTimeInterface \$toDateTime = null,
        ?\\DateTimeInterface \$objectLastSyncDateTime = null
    ) {
        \$this->object                 = \$object;
        \$this->fromDateTime           = \$fromDateTime;
        \$this->toDateTime             = \$toDateTime;
        \$this->objectLastSyncDateTime = \$objectLastSyncDateTime;
    }

    public function getObject(): string
    {
        return \$this->object;
    }

    /**
     * @return self
     */
    public function addField(string \$field)
    {
        \$this->fields[] = \$field;

        return \$this;
    }

    /**
     * @return string[]
     */
    public function getFields(): array
    {
        return \$this->fields;
    }

    public function setRequiredFields(array \$fields): void
    {
        \$this->requiredFields = \$fields;
    }

    /**
     * @return string[]
     */
    public function getRequiredFields(): array
    {
        return \$this->requiredFields;
    }

    public function getFromDateTime(): ?\\DateTimeInterface
    {
        return \$this->fromDateTime;
    }

    public function getToDateTime(): ?\\DateTimeInterface
    {
        return \$this->toDateTime;
    }

    public function getObjectLastSyncDateTime(): ?\\DateTimeInterface
    {
        return \$this->objectLastSyncDateTime;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Request/ObjectDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Request/ObjectDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/Request/ObjectDAO.php");
    }
}
