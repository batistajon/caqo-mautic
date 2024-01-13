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

/* @bundles/CoreBundle/EventListener/ChannelTrait.php */
class __TwigTemplate_0069f80fd2ce76ac080cac9334597c8de729db249d0325292df664f3c733cd26 extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Mautic\\CoreBundle\\Factory\\ModelFactory;

trait ChannelTrait
{
    /**
     * @var ModelFactory
     */
    protected \$modelFactory;

    public function setModelFactory(ModelFactory \$modelFactory)
    {
        \$this->modelFactory = \$modelFactory;
    }

    /**
     * Get the model for a channel.
     *
     * @param \$channel
     *
     * @return mixed
     */
    protected function getChannelModel(\$channel)
    {
        if (\$this->modelFactory->hasModel(\$channel)) {
            return \$this->modelFactory->getModel(\$channel);
        }

        return false;
    }

    /**
     * Get the entity for a channel item.
     *
     * @param \$channel
     * @param \$channelId
     *
     * @return mixed
     */
    protected function getChannelEntity(\$channel, \$channelId)
    {
        \$channelEntity = null;
        if (\$channelModel = \$this->getChannelModel(\$channel)) {
            try {
                \$channelEntity = \$channelModel->getEntity(\$channelId);
            } catch (\\Exception \$exception) {
                // Not found
            }
        }

        return \$channelEntity;
    }

    /**
     * Get the name and/or view URL for a channel entity.
     *
     * @param      \$channel
     * @param      \$channelId
     * @param bool \$returnWithViewUrl
     *
     * @return array|bool|string
     */
    protected function getChannelEntityName(\$channel, \$channelId, \$returnWithViewUrl = false)
    {
        if (\$channelEntity = \$this->getChannelEntity(\$channel, \$channelId)) {
            \$channelModel = \$this->getChannelModel(\$channel);
            \$name         = false;
            if (method_exists(\$channelEntity, \$channelModel->getNameGetter())) {
                \$name = \$channelEntity->{\$channelModel->getNameGetter()}();
            }

            if (\$name && \$returnWithViewUrl) {
                \$url           = null;
                \$baseRouteName = str_replace('.', '_', \$channel);
                if (method_exists(\$channelModel, 'getActionRouteBase')) {
                    \$baseRouteName = \$channelModel->getActionRouteBase();
                }
                \$routeSourceName = 'mautic_'.\$baseRouteName.'_action';

                if (null !== \$this->router->getRouteCollection()->get(\$routeSourceName)) {
                    \$url = \$this->router->generate(
                        \$routeSourceName,
                        [
                            'objectAction' => 'view',
                            'objectId'     => \$channelId,
                        ]
                    );
                }

                return [
                    'name' => \$name,
                    'url'  => \$url,
                ];
            }

            return \$name;
        }

        return false;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/ChannelTrait.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/ChannelTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/EventListener/ChannelTrait.php");
    }
}
