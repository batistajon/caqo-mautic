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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/InformationChangeRequestDAO.php */
class __TwigTemplate_2db12bc63b09194377b918e1108400f8fa45bd74f2896a7a0bfc7f4e4da91884 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;

class InformationChangeRequestDAO
{
    /**
     * @var string
     */
    private \$integration;

    /**
     * @var string
     */
    private \$objectName;

    /**
     * @var mixed
     */
    private \$objectId;

    /**
     * @var string
     */
    private \$field;

    /**
     * @var NormalizedValueDAO
     */
    private \$newValue;

    /**
     * @var \\DateTimeInterface|null
     */
    private \$possibleChangeDateTime;

    /**
     * @var \\DateTimeInterface|null
     */
    private \$certainChangeDateTime;

    /**
     * @param string \$integration
     * @param string \$objectName
     * @param mixed  \$objectId
     * @param string \$field
     */
    public function __construct(\$integration, \$objectName, \$objectId, \$field, NormalizedValueDAO \$normalizedValueDAO)
    {
        \$this->integration = \$integration;
        \$this->objectName  = \$objectName;
        \$this->objectId    = \$objectId;
        \$this->field       = \$field;
        \$this->newValue    = \$normalizedValueDAO;
    }

    public function getIntegration(): string
    {
        return \$this->integration;
    }

    /**
     * @return mixed
     */
    public function getObjectId()
    {
        return \$this->objectId;
    }

    public function getObject(): string
    {
        return \$this->objectName;
    }

    public function getField(): string
    {
        return \$this->field;
    }

    public function getNewValue(): NormalizedValueDAO
    {
        return \$this->newValue;
    }

    public function getPossibleChangeDateTime(): ?\\DateTimeInterface
    {
        return \$this->possibleChangeDateTime;
    }

    /**
     * @return InformationChangeRequestDAO
     */
    public function setPossibleChangeDateTime(?\\DateTimeInterface \$possibleChangeDateTime = null): self
    {
        \$this->possibleChangeDateTime = \$possibleChangeDateTime;

        return \$this;
    }

    public function getCertainChangeDateTime(): ?\\DateTimeInterface
    {
        return \$this->certainChangeDateTime;
    }

    /**
     * @return InformationChangeRequestDAO
     */
    public function setCertainChangeDateTime(?\\DateTimeInterface \$certainChangeDateTime = null): self
    {
        \$this->certainChangeDateTime = \$certainChangeDateTime;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/InformationChangeRequestDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/InformationChangeRequestDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/InformationChangeRequestDAO.php");
    }
}
