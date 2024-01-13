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

/* @bundles/LeadBundle/Segment/ContactSegmentFilterOperator.php */
class __TwigTemplate_168b8a8663c13538097f7b696661b5eb1bb3991dd2a46e53b471aba6fa123ab1 extends Template
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

namespace Mautic\\LeadBundle\\Segment;

use Mautic\\LeadBundle\\Provider\\FilterOperatorProviderInterface;

class ContactSegmentFilterOperator
{
    /**
     * @var FilterOperatorProviderInterface
     */
    private \$filterOperatorProvider;

    public function __construct(
        FilterOperatorProviderInterface \$filterOperatorProvider
    ) {
        \$this->filterOperatorProvider = \$filterOperatorProvider;
    }

    /**
     * @param string \$operator
     *
     * @return string
     */
    public function fixOperator(\$operator)
    {
        \$options = \$this->filterOperatorProvider->getAllOperators();

        if (empty(\$options[\$operator])) {
            return \$operator;
        }

        \$operatorDetails = \$options[\$operator];

        return \$operatorDetails['expr'];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/ContactSegmentFilterOperator.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/ContactSegmentFilterOperator.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/ContactSegmentFilterOperator.php");
    }
}
