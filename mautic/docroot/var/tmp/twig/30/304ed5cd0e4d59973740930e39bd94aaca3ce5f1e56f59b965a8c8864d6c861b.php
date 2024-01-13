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

/* @bundles/ChannelBundle/Event/ChannelEvent.php */
class __TwigTemplate_30faa8a9eafac72d797c22cc5b32605cb4752b94f8aa61f782a51e959fe19cc4 extends Template
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

namespace Mautic\\ChannelBundle\\Event;

use Mautic\\ChannelBundle\\Model\\MessageModel;
use Mautic\\CoreBundle\\Event\\CommonEvent;

class ChannelEvent extends CommonEvent
{
    /**
     * @var array
     */
    protected \$channels = [];

    /**
     * @var array
     */
    protected \$featureChannels = [];

    /**
     * Adds a submit action to the list of available actions.
     *
     * @param string \$channel a unique identifier; it is recommended that it be namespaced if there are multiple entities in a channel  i.e. something.something
     * @param array  \$config  Should be keyed by the feature it supports that contains an array of feature configuration options. i.e.
     *                        \$config = [
     *                        MessageModel::CHANNEL_FEATURE => [
     *                        'lookupFormType'       => (optional) Form type class/alias for the channel lookup list,
     *                        'propertiesFormType'   => (optional) Form type class/alias for the channel properties if a lookup list is not used,
     *
     *                        'channelTemplate'      => (optional) template to inject UI/DOM into the bottom of the channel's tab
     *                        'formTheme'           => (optional) theme directory for custom form types
     *
     *                          ]
     *                       ]
     *
     * @return \$this
     */
    public function addChannel(\$channel, array \$config = [])
    {
        \$this->channels[\$channel] = \$config;

        foreach (\$config as \$feature => \$featureConfig) {
            \$this->featureChannels[\$feature][\$channel] = \$featureConfig;
        }

        return \$this;
    }

    /**
     * Returns registered channels with their configs.
     *
     * @return array
     */
    public function getChannelConfigs()
    {
        return \$this->channels;
    }

    /**
     * Returns repository name for the provided channel. Defaults to classic naming convention.
     *
     * @param string \$channel
     *
     * @return string
     */
    public function getRepositoryName(\$channel)
    {
        if (isset(\$this->channels[\$channel][MessageModel::CHANNEL_FEATURE]['repository'])) {
            return \$this->channels[\$channel][MessageModel::CHANNEL_FEATURE]['repository'];
        }

        // if not defined, try the classic naming convention
        \$channel = ucfirst(\$channel);

        return \"Mautic{\$channel}Bundle:{\$channel}\";
    }

    /**
     * Returns the name of the column holding the channel name for the provided channel. Defaults to 'name'.
     *
     * @param string \$channel
     *
     * @return string
     */
    public function getNameColumn(\$channel)
    {
        if (isset(\$this->channels[\$channel][MessageModel::CHANNEL_FEATURE]['nameColumn'])) {
            return \$this->channels[\$channel][MessageModel::CHANNEL_FEATURE]['nameColumn'];
        }

        return 'name';
    }

    /**
     * @param \$feature
     *
     * @return array
     */
    public function getFeatureChannels()
    {
        return \$this->featureChannels;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Event/ChannelEvent.php";
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
        return new Source("", "@bundles/ChannelBundle/Event/ChannelEvent.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Event/ChannelEvent.php");
    }
}
