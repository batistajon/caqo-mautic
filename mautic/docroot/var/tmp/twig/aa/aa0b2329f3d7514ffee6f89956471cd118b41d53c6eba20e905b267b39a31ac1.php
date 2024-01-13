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

/* @bundles/LeadBundle/Segment/Stat/SegmentChartQueryFactory.php */
class __TwigTemplate_1850ee5cb58b64a37a490e184237d3a6332a7c201618c46939813df7c8d7c852 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Stat;

use Mautic\\CoreBundle\\Helper\\ArrayHelper;
use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\LeadBundle\\Segment\\Stat\\ChartQuery\\SegmentContactsLineChartQuery;

class SegmentChartQueryFactory
{
    /**
     * @return array
     */
    public function getContactsTotal(SegmentContactsLineChartQuery \$query, ListModel \$listModel)
    {
        \$total = \$listModel->getRepository()->getLeadCount(\$query->getSegmentId());

        return \$query->getTotalStats(\$total);
    }

    /**
     * @return array
     */
    public function getContactsAdded(SegmentContactsLineChartQuery \$query)
    {
        return ArrayHelper::sum(\$query->getAddedEventLogStats(), \$query->getDataFromLeadListLeads());
    }

    /**
     * @return array
     */
    public function getContactsRemoved(SegmentContactsLineChartQuery \$query)
    {
        return \$query->getRemovedEventLogStats();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Stat/SegmentChartQueryFactory.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Stat/SegmentChartQueryFactory.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/Stat/SegmentChartQueryFactory.php");
    }
}
