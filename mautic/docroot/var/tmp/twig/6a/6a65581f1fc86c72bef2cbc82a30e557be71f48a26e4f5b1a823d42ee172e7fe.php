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

/* @bundles/CampaignBundle/Membership/Exception/RunLimitReachedException.php */
class __TwigTemplate_74c478d1d1a48061cf7f155d1a7b42b1d983489e582e90a069c17b6b6dca90ee extends Template
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

namespace Mautic\\CampaignBundle\\Membership\\Exception;

class RunLimitReachedException extends \\Exception
{
    /**
     * @var int
     */
    private \$contactsProcessed;

    /**
     * MaxContactsReachedException constructor.
     *
     * @param \$contactsProcessed
     */
    public function __construct(\$contactsProcessed)
    {
        \$this->contactsProcessed = (int) \$contactsProcessed;

        parent::__construct();
    }

    /**
     * @return int
     */
    public function getContactsProcessed()
    {
        return \$this->contactsProcessed;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Membership/Exception/RunLimitReachedException.php";
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
        return new Source("", "@bundles/CampaignBundle/Membership/Exception/RunLimitReachedException.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Membership/Exception/RunLimitReachedException.php");
    }
}
