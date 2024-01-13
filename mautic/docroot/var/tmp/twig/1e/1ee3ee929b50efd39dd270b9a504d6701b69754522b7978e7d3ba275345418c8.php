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

/* @bundles/FormBundle/Exception/ValidationException.php */
class __TwigTemplate_d2ffd93070283a0a2f24065000c7d26720d87ce9757ff306239ec1092f72cca4 extends Template
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

namespace Mautic\\FormBundle\\Exception;

/**
 * Class ValidationException.
 */
class ValidationException extends \\Exception
{
    private \$violations = [];

    public function __construct(\$message = 'Validation failed', \$code = 0, \\Exception \$previous = null)
    {
        parent::__construct(\$message, \$code, \$previous);
    }

    /**
     * @return array
     */
    public function getViolations()
    {
        return \$this->violations;
    }

    /**
     * @param array \$violations
     *
     * @return ValidationException
     */
    public function setViolations(\$violations)
    {
        \$this->violations = \$violations;

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
        return "@bundles/FormBundle/Exception/ValidationException.php";
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
        return new Source("", "@bundles/FormBundle/Exception/ValidationException.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Exception/ValidationException.php");
    }
}
