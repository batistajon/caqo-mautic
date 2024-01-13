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

/* @bundles/EmailBundle/Entity/EmailReplyRepository.php */
class __TwigTemplate_ea3a4c3c4c1d1097c7130debb9da683a9dcc0bd10aa134b27e0151f76b3d4bde extends Template
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

namespace Mautic\\EmailBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\TimelineTrait;

/**
 * Class EmailReplyRepository.
 */
final class EmailReplyRepository extends CommonRepository implements EmailReplyRepositoryInterface
{
    use TimelineTrait;

    /**
     * @param int|Lead \$leadId
     *
     * @return array
     */
    public function getByLeadIdForTimeline(\$leadId, \$options)
    {
        if (\$leadId instanceof Lead) {
            \$leadId = \$leadId->getId();
        }
        \$qb = \$this->_em->getConnection()->createQueryBuilder();
        \$qb->from(MAUTIC_TABLE_PREFIX.'email_stat_replies', 'reply')
            ->innerJoin('reply', MAUTIC_TABLE_PREFIX.'email_stats', 'stat', 'reply.stat_id = stat.id')
            ->leftJoin('stat', MAUTIC_TABLE_PREFIX.'emails', 'email', 'stat.email_id = email.id')
            ->leftJoin('stat', MAUTIC_TABLE_PREFIX.'email_copies', 'email_copy', 'stat.copy_id = email_copy.id')
            ->andWhere('stat.lead_id = :leadId')
            ->setParameter('leadId', \$leadId);

        if (!empty(\$options['fromDate'])) {
            /** @var \\DateTime \$fromDate */
            \$fromDate = \$options['fromDate'];
            \$qb->andWhere('reply.date_replied >= :fromDate')
                ->setParameter('fromDate', \$fromDate->format('Y-m-d H:i:s'));
        }
        if (!empty(\$options['toDate'])) {
            /** @var \\DateTime \$toDate */
            \$toDate = \$options['toDate'];
            \$qb->andWhere('reply.date_replied <= :toDate')
                ->setParameter('toDate', \$toDate->format('Y-m-d H:i:s'));
        }

        \$qb->addSelect('reply.id')
            ->addSelect('reply.date_replied')
            ->addSelect('stat.lead_id')
            ->addSelect('email.name AS email_name')
            ->addSelect('email.subject')
            ->addSelect('email_copy.subject AS storedSubject');

        return \$this->getTimelineResults(
            \$qb,
            \$options,
            'storedSubject, email.subject',
            'reply.date_replied',
            [],
            ['date_replied']
        );
    }

    public function getTableAlias(): string
    {
        return 'reply';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Entity/EmailReplyRepository.php";
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
        return new Source("", "@bundles/EmailBundle/Entity/EmailReplyRepository.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Entity/EmailReplyRepository.php");
    }
}
