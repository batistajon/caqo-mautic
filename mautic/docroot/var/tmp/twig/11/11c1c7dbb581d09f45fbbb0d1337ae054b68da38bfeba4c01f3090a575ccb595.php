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

/* @bundles/IntegrationsBundle/Sync/DAO/Value/EncodedValueDAO.php */
class __TwigTemplate_90128dd095a71d2a5c052e4ef6a248282b8b4511f6ebbafd0c35bc14df5bf9d4 extends Template
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

class EncodedValueDAO
{
    const STRING_TYPE   = 'string';
    const INT_TYPE      = 'int';
    const FLOAT_TYPE    = 'float';
    const DOUBLE_TYPE   = 'double';
    const DATETIME_TYPE = 'datetime';
    const BOOLEAN_TYPE  = 'boolean';

    /**
     * @var string
     */
    private \$type;

    /**
     * @var string
     */
    private \$value;

    /**
     * @param string \$type
     * @param string \$value
     */
    public function __construct(\$type, \$value)
    {
        \$this->type  = \$type;
        \$this->value = \$value;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return \$this->value;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Value/EncodedValueDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Value/EncodedValueDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Value/EncodedValueDAO.php");
    }
}
