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

/* @bundles/LeadBundle/Deduplicate/Exception/ValueNotMergeableException.php */
class __TwigTemplate_677366bf4ba89af4369947ff7fd5d3acc2eff878c51a6d45c84e82792d2e7a7b extends Template
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

namespace Mautic\\LeadBundle\\Deduplicate\\Exception;

class ValueNotMergeableException extends \\Exception
{
    /**
     * @var mixed
     */
    private \$newerValue;

    /**
     * @var mixed
     */
    private \$olderValue;

    /**
     * ValueNotMergeableException constructor.
     *
     * @param mixed \$newerValue
     * @param mixed \$olderValue
     */
    public function __construct(\$newerValue, \$olderValue)
    {
        \$this->newerValue = \$newerValue;
        \$this->olderValue = \$olderValue;

        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getNewerValue()
    {
        return \$this->newerValue;
    }

    /**
     * @return mixed
     */
    public function getOlderValue()
    {
        return \$this->olderValue;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Deduplicate/Exception/ValueNotMergeableException.php";
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
        return new Source("", "@bundles/LeadBundle/Deduplicate/Exception/ValueNotMergeableException.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Deduplicate/Exception/ValueNotMergeableException.php");
    }
}
