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

/* @bundles/CoreBundle/Event/UpgradeEvent.php */
class __TwigTemplate_63d4c40ca0ebc9329af1d305d71397d71c2d311a3cfbbc2fc37d3aa31edf6d2d extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class BuilderEvent.
 */
class UpgradeEvent extends Event
{
    /**
     * @var array
     */
    protected \$status = [];

    public function __construct(array \$status)
    {
        \$this->status = \$status;
    }

    /**
     * @return array
     */
    public function getStatus()
    {
        return \$this->status;
    }

    public function isSuccessful()
    {
        if (array_key_exists('success', \$this->status)) {
            return (bool) \$this->status['success'];
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
        return "@bundles/CoreBundle/Event/UpgradeEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/UpgradeEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/UpgradeEvent.php");
    }
}
