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

/* @bundles/CoreBundle/Exception/InvalidDecodedStringException.php */
class __TwigTemplate_b6d905d5c6d890c6eae3201cc4432cb2479b6dba9530a5a6e102265459cccb76 extends Template
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

namespace Mautic\\CoreBundle\\Exception;

class InvalidDecodedStringException extends \\InvalidArgumentException
{
    public function __construct(string \$string = '', int \$code = 0, \\Throwable \$previous = null)
    {
        parent::__construct(sprintf('The string %s is not a serialized array', \$string), \$code, \$previous);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Exception/InvalidDecodedStringException.php";
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
        return new Source("", "@bundles/CoreBundle/Exception/InvalidDecodedStringException.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Exception/InvalidDecodedStringException.php");
    }
}
