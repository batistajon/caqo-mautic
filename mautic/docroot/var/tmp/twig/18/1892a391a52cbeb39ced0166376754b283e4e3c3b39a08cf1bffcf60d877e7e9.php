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

/* @bundles/SmsBundle/Callback/HandlerContainer.php */
class __TwigTemplate_7d47210fce05ff333192f7ed3ab570a9b4a5882de8661a51aa130febad4b3afc extends Template
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

namespace Mautic\\SmsBundle\\Callback;

use Mautic\\SmsBundle\\Exception\\CallbackHandlerNotFound;

class HandlerContainer
{
    /**
     * @var CallbackInterface[]
     */
    private \$handlers;

    public function registerHandler(CallbackInterface \$handler)
    {
        \$this->handlers[\$handler->getTransportName()] = \$handler;
    }

    /**
     * @param \$transportName
     *
     * @return CallbackInterface
     *
     * @throws CallbackHandlerNotFound
     */
    public function getHandler(\$transportName)
    {
        if (!isset(\$this->handlers[\$transportName])) {
            throw new CallbackHandlerNotFound(\"\$transportName has not been registered\");
        }

        return \$this->handlers[\$transportName];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Callback/HandlerContainer.php";
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
        return new Source("", "@bundles/SmsBundle/Callback/HandlerContainer.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Callback/HandlerContainer.php");
    }
}
