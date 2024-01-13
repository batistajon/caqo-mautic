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

/* @bundles/CampaignBundle/Entity/Result/CountResult.php */
class __TwigTemplate_4975753d89174a52b612ea6e58778ebe5640fe1d3a7c2fb8a511a19926af04e4 extends Template
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

namespace Mautic\\CampaignBundle\\Entity\\Result;

class CountResult
{
    /**
     * @var int
     */
    private \$count;

    /**
     * @var int
     */
    private \$minId;

    /**
     * @var int
     */
    private \$maxId;

    /**
     * CountResult constructor.
     *
     * @param \$count
     * @param \$minId
     * @param \$maxId
     */
    public function __construct(\$count, \$minId, \$maxId)
    {
        \$this->count = (int) \$count;
        \$this->minId = (int) \$minId;
        \$this->maxId = (int) \$maxId;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return \$this->count;
    }

    /**
     * @return int
     */
    public function getMinId()
    {
        return \$this->minId;
    }

    /**
     * @return int
     */
    public function getMaxId()
    {
        return \$this->maxId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Entity/Result/CountResult.php";
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
        return new Source("", "@bundles/CampaignBundle/Entity/Result/CountResult.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Entity/Result/CountResult.php");
    }
}
