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

/* @bundles/CoreBundle/Exception/ErrorHandlerException.php */
class __TwigTemplate_be15e8d558b18bde72bf5100f3311e5c172d6136a8ecb6788086b689abe3609e extends Template
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

use Exception;

class ErrorHandlerException extends \\Exception
{
    /**
     * @var bool
     */
    protected \$showMessage = false;

    /**
     * ErrorHandlerException constructor.
     *
     * @param string \$message
     * @param bool   \$showMessage
     * @param int    \$code
     */
    public function __construct(\$message = '', \$showMessage = false, \$code = 0, Exception \$previous = null)
    {
        parent::__construct(\$message, \$code, \$previous);

        \$this->showMessage = \$showMessage;
    }

    /**
     * @return bool
     */
    public function showMessage()
    {
        return \$this->showMessage;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Exception/ErrorHandlerException.php";
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
        return new Source("", "@bundles/CoreBundle/Exception/ErrorHandlerException.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Exception/ErrorHandlerException.php");
    }
}
