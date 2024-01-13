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

/* @bundles/QueueBundle/Queue/QueueProtocol.php */
class __TwigTemplate_f28605c6cc313cdccdd6b808a029402b597455ed252c83a9687fdf44ec4d817d extends Template
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

namespace Mautic\\QueueBundle\\Queue;

/**
 * Class QueueProtocol.
 */
class QueueProtocol
{
    const BEANSTALKD = 'beanstalkd';
    const RABBITMQ   = 'rabbitmq';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/Queue/QueueProtocol.php";
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
        return new Source("", "@bundles/QueueBundle/Queue/QueueProtocol.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/Queue/QueueProtocol.php");
    }
}
