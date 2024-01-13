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

/* @bundles/WebhookBundle/Entity/EventRepository.php */
class __TwigTemplate_25086eeb62b6bc8af34bbe7fa3a1197f5aace39b7c6616cf9b146d0c799bfc7c extends Template
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

class EventRepository extends CommonRepository
{
    /**
     * @param \$type
     *
     * @return array
     */
    public function getEntitiesByEventType(\$type)
    {
        \$alias = \$this->getTableAlias();
        \$q     = \$this->createQueryBuilder(\$alias)
            ->leftJoin(\$alias.'.webhook', 'u');

        \$q->where(
            \$q->expr()->eq(\$alias.'.eventType', ':type')
        )->setParameter('type', \$type);

        // only find published webhooks
        \$q->andWhere(\$q->expr()->eq('u.isPublished', ':published'))
            ->setParameter('published', 1);

        return \$q->getQuery()->getResult();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Entity/EventRepository.php";
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
        return new Source("", "@bundles/WebhookBundle/Entity/EventRepository.php", "/var/www/html/mautic/docroot/app/bundles/WebhookBundle/Entity/EventRepository.php");
    }
}
