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

/* @bundles/IntegrationsBundle/Sync/DAO/Value/NormalizedValueDAO.php */
class __TwigTemplate_9dbd6db1c5a3d796fcdf062e502c85325d4b49a919a1b0dd069d88dd2e4a9c2e extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Value;

class NormalizedValueDAO
{
    const BOOLEAN_TYPE     = 'boolean';
    const DATE_TYPE        = 'date';
    const DATETIME_TYPE    = 'datetime';
    const DOUBLE_TYPE      = 'double';
    const EMAIL_TYPE       = 'email';
    const FLOAT_TYPE       = 'float';
    const INT_TYPE         = 'int';
    const LOOKUP_TYPE      = 'lookup';
    const MULTISELECT_TYPE = 'multiselect';
    const PHONE_TYPE       = 'phone';
    const SELECT_TYPE      = 'select';
    const STRING_TYPE      = 'string';
    const REGION_TYPE      = 'region';
    const TEXT_TYPE        = 'text';
    const TEXTAREA_TYPE    = 'textarea';
    const TIME_TYPE        = 'time';
    const URL_TYPE         = 'url';
    const REFERENCE_TYPE   = 'reference';

    /**
     * @var string
     */
    private \$type;

    /**
     * @var mixed
     */
    private \$value;

    /**
     * @var mixed
     */
    private \$normalizedValue;

    /**
     * @param string \$type
     * @param mixed  \$value
     * @param mixed  \$normalizedValue
     */
    public function __construct(\$type, \$value, \$normalizedValue = null)
    {
        \$this->type            = \$type;
        \$this->value           = \$value;
        \$this->normalizedValue = \$normalizedValue ?: \$value;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @return mixed
     */
    public function getOriginalValue()
    {
        return \$this->value;
    }

    /**
     * @return mixed
     */
    public function getNormalizedValue()
    {
        return \$this->normalizedValue;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Value/NormalizedValueDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Value/NormalizedValueDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Value/NormalizedValueDAO.php");
    }
}
