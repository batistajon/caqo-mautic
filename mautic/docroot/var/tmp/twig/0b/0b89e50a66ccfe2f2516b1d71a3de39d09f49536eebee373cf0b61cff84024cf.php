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

/* @bundles/QueueBundle/Helper/RabbitMqProducer.php */
class __TwigTemplate_369c3b4511b283028b9668ca593e5dfef1be00e2a59520614ddb9d69906346c5 extends Template
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

namespace Mautic\\QueueBundle\\Helper;

use OldSound\\RabbitMqBundle\\RabbitMq\\Producer;

/**
 * Class RabbitMqProducer.
 */
class RabbitMqProducer extends Producer
{
    /**
     * @param string \$queue
     */
    public function setQueue(\$queue)
    {
        if (\$queue === \$this->queueOptions['name']) {
            return;
        }

        \$this->queueOptions['name']        = \$queue;
        \$this->queueOptions['auto_delete'] = false;
        \$this->queueOptions['durable']     = true;
        \$this->queueDeclared               = false;
        \$this->setupFabric();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/Helper/RabbitMqProducer.php";
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
        return new Source("", "@bundles/QueueBundle/Helper/RabbitMqProducer.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/Helper/RabbitMqProducer.php");
    }
}
