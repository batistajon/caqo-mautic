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

/* @bundles/CampaignBundle/Entity/ChannelInterface.php */
class __TwigTemplate_1b312f790f41b540da92149fa76a914c91db520d461337882971b60f6e7c6b5a extends Template
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

namespace Mautic\\CampaignBundle\\Entity;

interface ChannelInterface
{
    /**
     * @return string
     */
    public function getChannel();

    /**
     * @param \$channel
     *
     * @return ChannelInterface
     */
    public function setChannel(\$channel);

    /**
     * @return int
     */
    public function getChannelId();

    /**
     * @param \$id
     *
     * @return ChannelInterface
     */
    public function setChannelId(\$id);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Entity/ChannelInterface.php";
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
        return new Source("", "@bundles/CampaignBundle/Entity/ChannelInterface.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Entity/ChannelInterface.php");
    }
}
