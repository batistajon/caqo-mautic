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

/* @bundles/ApiBundle/Tests/EventListener/ConfigSubscriberTest.php */
class __TwigTemplate_becc63722cffdbc641b8e73308291df26df3a5d920bf6187fc8eb66436e695f0 extends Template
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

namespace Mautic\\ApiBundle\\Tests\\EventListener;

use Mautic\\ApiBundle\\EventListener\\ConfigSubscriber;
use Mautic\\ConfigBundle\\Event\\ConfigEvent;
use Mautic\\CoreBundle\\Tests\\CommonMocks;
use Symfony\\Component\\HttpFoundation\\ParameterBag;

class ConfigSubscriberTest extends CommonMocks
{
    public function testWithUnsetApiBasicAuthSetting()
    {
        /**
         * We need a config array where api_enable_basic_auth is not set
         * (for example, in a hosted environment where customers are not allowed
         * to enable basic auth on the API). Saving the config shouldn't throw
         * any undefined notices/warnings in that case.
         */
        \$config = ['apiconfig' => []];

        \$subscriber  = new ConfigSubscriber();
        \$configEvent = new ConfigEvent(\$config, new ParameterBag());

        \$subscriber->onConfigSave(\$configEvent);

        \$this->assertEquals(\$config, \$configEvent->getConfig());
    }

    public function testWithIntegerApiBasicAuthSetting()
    {
        // Make sure the subscriber converts an integer value to boolean.
        \$config = [
            'apiconfig' => [
                'api_enable_basic_auth' => 1,
            ],
        ];

        \$fixedConfig = [
            'api_enable_basic_auth' => true,
        ];

        \$subscriber  = new ConfigSubscriber();
        \$configEvent = new ConfigEvent(\$config, new ParameterBag());

        \$subscriber->onConfigSave(\$configEvent);

        \$this->assertEquals(\$fixedConfig, \$configEvent->getConfig('apiconfig'));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Tests/EventListener/ConfigSubscriberTest.php";
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
        return new Source("", "@bundles/ApiBundle/Tests/EventListener/ConfigSubscriberTest.php", "/var/www/html/mautic/docroot/app/bundles/ApiBundle/Tests/EventListener/ConfigSubscriberTest.php");
    }
}
