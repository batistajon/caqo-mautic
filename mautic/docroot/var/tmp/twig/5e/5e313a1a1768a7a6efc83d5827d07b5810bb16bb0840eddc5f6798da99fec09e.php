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

/* @bundles/EmailBundle/Stats/Helper/ClickedHelper.php */
class __TwigTemplate_8b25f5d52def0238f22911799fb658173a12b315451d60b3289e3ae317597957 extends Template
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

namespace Mautic\\EmailBundle\\Stats\\Helper;

use Mautic\\EmailBundle\\Stats\\FetchOptions\\EmailStatOptions;
use Mautic\\StatsBundle\\Aggregate\\Collection\\StatCollection;

class ClickedHelper extends AbstractHelper
{
    const NAME = 'email-clicked';

    /**
     * @return string
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * @throws \\Exception
     */
    public function generateStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options, StatCollection \$statCollection)
    {
        \$query = \$this->getQuery(\$fromDateTime, \$toDateTime);
        \$q     = \$query->prepareTimeDataQuery('page_hits', 'date_hit', []);

        if (\$segmentId = \$options->getSegmentId()) {
            \$q->innerJoin(
                't',
                '(SELECT DISTINCT email_id, lead_id FROM '.MAUTIC_TABLE_PREFIX.'email_stats WHERE list_id = :segmentId)',
                'es',
                't.source_id = es.email_id'
            );
            \$q->setParameter('segmentId', \$segmentId);
        }

        \$q->andWhere('t.source = :source');
        \$q->setParameter('source', 'email');

        \$this->limitQueryToEmailIds(\$q, \$options->getEmailIds(), 'source_id', 't');

        if (!\$options->canViewOthers()) {
            \$this->limitQueryToCreator(\$q);
        }

        \$this->addCompanyFilter(\$q, \$options->getCompanyId());
        \$this->addCampaignFilterForEmailSource(\$q, \$options->getCampaignId());
        \$this->addSegmentFilter(\$q, \$segmentId, 'es');

        \$this->fetchAndBindToCollection(\$q, \$statCollection);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Stats/Helper/ClickedHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Stats/Helper/ClickedHelper.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Stats/Helper/ClickedHelper.php");
    }
}
