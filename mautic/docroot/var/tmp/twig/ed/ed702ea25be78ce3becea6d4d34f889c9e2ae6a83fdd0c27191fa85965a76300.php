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

/* @bundles/EmailBundle/Stats/Helper/BouncedHelper.php */
class __TwigTemplate_38d6aa5a5f56cfcb74bea2cd14761f6ff66e5f360a546d030ba80eae6f10f931 extends Template
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
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\StatsBundle\\Aggregate\\Collection\\StatCollection;

class BouncedHelper extends AbstractHelper
{
    const NAME = 'email-bounced';

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
        \$q     = \$query->prepareTimeDataQuery('lead_donotcontact', 'date_added');

        \$q->andWhere('t.channel = :channel')
            ->setParameter('channel', 'email')
            ->andWhere(\$q->expr()->eq('t.reason', ':reason'))
            ->setParameter('reason', DoNotContact::BOUNCED);

        \$this->limitQueryToEmailIds(\$q, \$options->getEmailIds(), 'channel_id', 't');

        \$q->join('t', MAUTIC_TABLE_PREFIX.'email_stats', 'es', 't.channel_id = es.email_id AND t.channel = \"email\" AND t.lead_id = es.lead_id');

        if (true === \$options->canViewOthers()) {
            \$this->limitQueryToCreator(\$q, 'es.email_id');
        }
        \$this->addCompanyFilter(\$q, \$options->getCompanyId());
        \$this->addCampaignFilter(\$q, \$options->getCampaignId(), 'es');
        \$this->addSegmentFilter(\$q, \$options->getSegmentId(), 'es');

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
        return "@bundles/EmailBundle/Stats/Helper/BouncedHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Stats/Helper/BouncedHelper.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Stats/Helper/BouncedHelper.php");
    }
}
