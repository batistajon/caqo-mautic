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

/* @bundles/QueueBundle/Config/beanstalkd.php */
class __TwigTemplate_5c36f30ab2ce6c17541610c3fc522e60e80b95f6f6d4b605f10dd7ae43f34746 extends Template
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

\$container->loadFromExtension(
    'leezy_pheanstalk',
    [
        'pheanstalks' => [
            'primary' => [
                'server'  => '%mautic.beanstalkd_host%',
                'port'    => '%mautic.beanstalkd_port%',
                'timeout' => '%mautic.beanstalkd_timeout%',
                'default' => true,
            ],
        ],
    ]
);
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/Config/beanstalkd.php";
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
        return new Source("", "@bundles/QueueBundle/Config/beanstalkd.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/Config/beanstalkd.php");
    }
}
