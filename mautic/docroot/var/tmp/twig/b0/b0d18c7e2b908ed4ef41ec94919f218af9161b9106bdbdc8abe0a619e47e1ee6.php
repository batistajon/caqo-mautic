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

/* @bundles/LeadBundle/Model/ChannelTimelineInterface.php */
class __TwigTemplate_3385ef8374402c1a9e2147e23356e5e7a70af01e0965068b95716c878f336bb7 extends Template
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

namespace Mautic\\LeadBundle\\Model;

/**
 * Interface ChannelTimelineInterface.
 */
interface ChannelTimelineInterface
{
    /**
     * Return the name of a template to use to customize the channel's timeline entry.
     *
     * Return an empty value to ignore
     *
     * @param string \$eventType
     * @param array  \$details
     *
     * @return mixed
     */
    public function getChannelTimelineTemplate(\$eventType, \$details);

    /**
     * Override the timeline name for this channel's timeline entry.
     *
     * Return an empty value to ignore
     *
     * @param string \$eventType
     * @param array  \$details
     *
     * @return mixed
     */
    public function getChannelTimelineLabel(\$eventType, \$details);

    /**
     * Override the icon for this channel's timeline entry.
     *
     * Return an empty value to ignore
     *
     * @param string \$eventType
     * @param array  \$details
     *
     * @return mixed
     */
    public function getChannelTimelineIcon(\$eventType, \$details);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Model/ChannelTimelineInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Model/ChannelTimelineInterface.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Model/ChannelTimelineInterface.php");
    }
}
