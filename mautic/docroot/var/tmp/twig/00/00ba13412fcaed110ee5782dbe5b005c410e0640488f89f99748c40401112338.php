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

/* @bundles/ChannelBundle/Helper/ChannelListHelper.php */
class __TwigTemplate_e0ef979d4378aaa940ab89d4b602459c389bf16eba681a866b55c4729db5cdc8 extends Template
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

namespace Mautic\\ChannelBundle\\Helper;

use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Event\\ChannelEvent;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Templating\\Helper\\Helper;
use Symfony\\Component\\Translation\\TranslatorInterface;

class ChannelListHelper extends Helper
{
    /**
     * @var TranslatorInterface
     */
    protected \$translator;

    /**
     * @var array
     */
    protected \$channels = [];

    /**
     * @var array
     */
    protected \$featureChannels = [];

    /**
     * @var EventDispatcherInterface
     */
    protected \$dispatcher;

    public function __construct(EventDispatcherInterface \$dispatcher, TranslatorInterface \$translator)
    {
        \$this->translator = \$translator;
        \$this->dispatcher = \$dispatcher;
    }

    /**
     * Get contact channels.
     *
     * @return array
     */
    public function getChannelList()
    {
        \$channels = [];
        foreach (\$this->getChannels() as \$channel => \$details) {
            \$channelName            = isset(\$details['label']) ? \$this->translator->trans(\$details['label']) : \$this->getChannelLabel(\$channel);
            \$channels[\$channelName] = \$channel;
        }

        return \$channels;
    }

    /**
     * @param      \$features
     * @param bool \$listOnly
     *
     * @return array
     */
    public function getFeatureChannels(\$features, \$listOnly = false)
    {
        \$this->setupChannels();

        if (!is_array(\$features)) {
            \$features = [\$features];
        }

        \$channels = [];
        foreach (\$features as \$feature) {
            \$featureChannels = (isset(\$this->featureChannels[\$feature])) ? \$this->featureChannels[\$feature] : [];
            \$returnChannels  = [];
            foreach (\$featureChannels as \$channel => \$details) {
                if (!isset(\$details['label'])) {
                    \$featureChannels[\$channel]['label'] = \$this->getChannelLabel(\$channel);
                }

                if (\$listOnly) {
                    \$returnChannels[\$featureChannels[\$channel]['label']] = \$channel;
                } else {
                    \$returnChannels[\$channel] = \$featureChannels[\$channel];
                }
            }
            unset(\$featureChannels);
            \$channels[\$feature] = \$returnChannels;
        }

        if (1 === count(\$features)) {
            \$channels = \$channels[\$features[0]];
        }

        return \$channels;
    }

    /**
     * @return array
     */
    public function getChannels()
    {
        \$this->setupChannels();

        return \$this->channels;
    }

    /**
     * @param \$channel
     *
     * @return string
     */
    public function getChannelLabel(\$channel)
    {
        switch (true) {
            case \$this->translator->hasId('mautic.channel.'.\$channel):
                return \$this->translator->trans('mautic.channel.'.\$channel);
            case \$this->translator->hasId('mautic.'.\$channel.'.'.\$channel):
                return \$this->translator->trans('mautic.'.\$channel.'.'.\$channel);
            default:
                return ucfirst(\$channel);
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'chanel';
    }

    /**
     * Setup channels.
     *
     * Done this way to avoid a circular dependency error with LeadModel
     */
    protected function setupChannels()
    {
        if (!empty(\$this->channels)) {
            return;
        }

        \$event                 = \$this->dispatcher->dispatch(ChannelEvents::ADD_CHANNEL, new ChannelEvent());
        \$this->channels        = \$event->getChannelConfigs();
        \$this->featureChannels = \$event->getFeatureChannels();
        unset(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Helper/ChannelListHelper.php";
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
        return new Source("", "@bundles/ChannelBundle/Helper/ChannelListHelper.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Helper/ChannelListHelper.php");
    }
}
