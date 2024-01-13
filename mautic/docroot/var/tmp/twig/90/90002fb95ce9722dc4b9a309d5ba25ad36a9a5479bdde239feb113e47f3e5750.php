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

/* @bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Helper/ValueHelper.php */
class __TwigTemplate_85b3e2a577e745be5f6206272b96bc55abd0cca4d5f6801f2b74c0398b6611cf extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Helper;

use Mautic\\IntegrationsBundle\\Exception\\InvalidValueException;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\ObjectMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\FieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;

class ValueHelper
{
    /**
     * @var NormalizedValueDAO
     */
    private \$normalizedValueDAO;

    /**
     * @var string
     */
    private \$fieldState;

    /**
     * @var string
     */
    private \$syncDirection;

    /**
     * @throws InvalidValueException
     */
    public function getValueForIntegration(NormalizedValueDAO \$normalizedValueDAO, string \$fieldState, string \$syncDirection): NormalizedValueDAO
    {
        \$this->normalizedValueDAO = \$normalizedValueDAO;
        \$this->fieldState         = \$fieldState;
        \$this->syncDirection      = \$syncDirection;

        \$newValue = \$this->getValue(ObjectMappingDAO::SYNC_TO_MAUTIC);

        return new NormalizedValueDAO(\$normalizedValueDAO->getType(), \$normalizedValueDAO->getNormalizedValue(), \$newValue);
    }

    /**
     * @throws InvalidValueException
     */
    public function getValueForMautic(NormalizedValueDAO \$normalizedValueDAO, string \$fieldState, string \$syncDirection): NormalizedValueDAO
    {
        \$this->normalizedValueDAO = \$normalizedValueDAO;
        \$this->fieldState         = \$fieldState;
        \$this->syncDirection      = \$syncDirection;

        \$newValue = \$this->getValue(ObjectMappingDAO::SYNC_TO_INTEGRATION);

        return new NormalizedValueDAO(\$normalizedValueDAO->getType(), \$normalizedValueDAO->getNormalizedValue(), \$newValue);
    }

    /**
     * @return float|int|mixed|string
     *
     * @throws InvalidValueException
     */
    private function getValue(string \$directionToIgnore)
    {
        \$value = \$this->normalizedValueDAO->getNormalizedValue();

        // If the field is not required, do not force a value
        if (FieldDAO::FIELD_REQUIRED !== \$this->fieldState) {
            return \$value;
        }

        // If the field is not configured to update the Integration, do not force a value
        if (\$directionToIgnore === \$this->syncDirection) {
            return \$value;
        }

        // If the value is not empty (including 0 or false), do not force a value
        if (null !== \$value && '' !== \$value) {
            return \$value;
        }

        switch (\$this->normalizedValueDAO->getType()) {
            case NormalizedValueDAO::EMAIL_TYPE:
            case NormalizedValueDAO::DATE_TYPE:
            case NormalizedValueDAO::DATETIME_TYPE:
            case NormalizedValueDAO::BOOLEAN_TYPE:
                // we can't assume anything with these so just return null and let the integration handle the error
                return \$this->normalizedValueDAO->getOriginalValue();
            case NormalizedValueDAO::INT_TYPE:
                return 0;
            case NormalizedValueDAO::DOUBLE_TYPE:
            case NormalizedValueDAO::FLOAT_TYPE:
                return 1.0;
            default:
                throw new InvalidValueException(\"Required field can't be empty\");
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Helper/ValueHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Helper/ValueHelper.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Helper/ValueHelper.php");
    }
}
