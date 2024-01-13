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

/* @bundles/WebhookBundle/Entity/WebhookQueueRepository.php */
class __TwigTemplate_5279c015967832d83dc0aa6d18edf44afa7be798eb3f20732e31063ede179a6a extends Template
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

namespace Mautic\\WebhookBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

class WebhookQueueRepository extends CommonRepository
{
    /**
     * Deletes all the webhook queues by ID.
     *
     * @param \$idList array of webhookqueue IDs
     */
    public function deleteQueuesById(array \$idList)
    {
        // don't process the list if there are no items in it
        if (!count(\$idList)) {
            return;
        }

        \$qb = \$this->_em->getConnection()->createQueryBuilder();
        \$qb->delete(MAUTIC_TABLE_PREFIX.'webhook_queue')
            ->where(
                \$qb->expr()->in('id', \$idList)
            )
            ->execute();
    }

    /**
     * Gets a count of the webhook queues filtered by the webhook id.
     *
     * @param \$id int (for Webhooks)
     *
     * @return int
     */
    public function getQueueCountByWebhookId(\$id)
    {
        // if no id was sent (the hook was deleted) then return a count of 0
        if (!\$id) {
            return 0;
        }

        \$qb = \$this->_em->getConnection()->createQueryBuilder();

        return (int) \$qb->select('count(*) as webhook_count')
            ->from(MAUTIC_TABLE_PREFIX.'webhook_queue', \$this->getTableAlias())
            ->where(\$this->getTableAlias().'.webhook_id = :id')
            ->setParameter('id', \$id)
            ->execute()
            ->fetchColumn();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Entity/WebhookQueueRepository.php";
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
        return new Source("", "@bundles/WebhookBundle/Entity/WebhookQueueRepository.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Entity/WebhookQueueRepository.php");
    }
}
