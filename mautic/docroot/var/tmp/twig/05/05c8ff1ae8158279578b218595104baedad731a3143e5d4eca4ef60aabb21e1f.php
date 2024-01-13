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

/* @bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelper.php */
class __TwigTemplate_1f73c5534927dec8f2da2f106ebf1b4c98fda0d4053dd7c61465051babf3cc6e extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\VariableExpresser;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\EncodedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\ValueNormalizer\\ValueNormalizer;

final class VariableExpresserHelper implements VariableExpresserHelperInterface
{
    const TRUE_BOOLEAN_VALUE  = 'true';
    const FALSE_BOOLEAN_VALUE = 'false';

    /**
     * @var ValueNormalizer
     */
    private \$valueNormalizer;

    public function __construct()
    {
        \$this->valueNormalizer = new ValueNormalizer();
    }

    public function decodeVariable(EncodedValueDAO \$encodedValueDAO): NormalizedValueDAO
    {
        \$value = \$encodedValueDAO->getValue();

        return \$this->valueNormalizer->normalizeForMautic(\$encodedValueDAO->getType(), \$value);
    }

    /**
     * @param mixed \$var
     */
    public function encodeVariable(\$var): EncodedValueDAO
    {
        if (is_null(\$var)) {
            return new EncodedValueDAO(EncodedValueDAO::STRING_TYPE, '');
        }

        if (is_int(\$var)) {
            return new EncodedValueDAO(EncodedValueDAO::INT_TYPE, (string) \$var);
        }

        if (is_string(\$var)) {
            return new EncodedValueDAO(EncodedValueDAO::STRING_TYPE, (string) \$var);
        }

        if (is_float(\$var)) {
            return new EncodedValueDAO(EncodedValueDAO::FLOAT_TYPE, (string) \$var);
        }

        if (is_double(\$var)) {
            return new EncodedValueDAO(EncodedValueDAO::DOUBLE_TYPE, (string) \$var);
        }

        if (\$var instanceof \\DateTime) {
            return new EncodedValueDAO(EncodedValueDAO::DATETIME_TYPE, \$var->format('c'));
        }

        if (is_bool(\$var)) {
            return new EncodedValueDAO(
                EncodedValueDAO::BOOLEAN_TYPE,
                true === \$var ? self::TRUE_BOOLEAN_VALUE : self::FALSE_BOOLEAN_VALUE
            );
        }

        throw new \\InvalidArgumentException('Variable type for '.var_export(\$var, true).' not supported');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelper.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/VariableExpresser/VariableExpresserHelper.php");
    }
}
