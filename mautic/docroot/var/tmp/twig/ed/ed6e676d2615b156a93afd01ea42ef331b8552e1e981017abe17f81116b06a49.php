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

/* @bundles/ChannelBundle/Entity/MessageRepository.php */
class __TwigTemplate_3482a4c1eb5eb9d1ecb9d83e4e3eb970079ef2f4c671bf992b35e942bdbcec33 extends Template
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

namespace Mautic\\ChannelBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

class MessageRepository extends CommonRepository
{
    /**
     * @return \\Doctrine\\ORM\\Tools\\Pagination\\Paginator
     */
    public function getEntities(array \$args = [])
    {
        \$args['qb'] = \$this->createQueryBuilder(\$this->getTableAlias());
        \$args['qb']->join('MauticChannelBundle:Channel', 'channel', 'WITH', 'channel.message = '.\$this->getTableAlias().'.id');
        \$args['qb']->leftJoin('MauticCategoryBundle:Category', 'cat', 'WITH', 'cat.id = '.\$this->getTableAlias().'.category');

        return parent::getEntities(\$args);
    }

    /**
     * @return string
     */
    public function getTableAlias()
    {
        return 'm';
    }

    /**
     * @param string \$search
     * @param int    \$limit
     * @param int    \$start
     *
     * @return array
     */
    public function getMessageList(\$search = '', \$limit = 10, \$start = 0)
    {
        \$alias = \$this->getTableAlias();
        \$q     = \$this->createQueryBuilder(\$this->getTableAlias());
        \$q->select('partial '.\$alias.'.{id, name, description}');

        if (!empty(\$search)) {
            if (is_array(\$search)) {
                \$search = array_map('intval', \$search);
                \$q->andWhere(\$q->expr()->in(\$alias.'.id', ':search'))
                    ->setParameter('search', \$search);
            } else {
                \$q->andWhere(\$q->expr()->like(\$alias.'.name', ':search'))
                    ->setParameter('search', \"%{\$search}%\");
            }
        }
        \$q->andWhere(\$q->expr()->eq(\$alias.'.isPublished', true));

        if (!empty(\$limit)) {
            \$q->setFirstResult(\$start)
                ->setMaxResults(\$limit);
        }

        return \$q->getQuery()->getArrayResult();
    }

    /**
     * @param \$messageId
     *
     * @return array
     */
    public function getMessageChannels(\$messageId)
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->from(MAUTIC_TABLE_PREFIX.'message_channels', 'mc')
            ->select('id, channel, channel_id, properties')
            ->where(\$q->expr()->eq('message_id', ':messageId'))
            ->setParameter('messageId', \$messageId)
            ->andWhere(\$q->expr()->eq('is_enabled', true, 'boolean'));

        \$results = \$q->execute()->fetchAll();

        \$channels = [];
        foreach (\$results as \$result) {
            \$result['properties']         = json_decode(\$result['properties'], true);
            \$channels[\$result['channel']] = \$result;
        }

        return \$channels;
    }

    /**
     * @param \$channelId
     *
     * @return array
     */
    public function getChannelMessageByChannelId(\$channelId)
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->from(MAUTIC_TABLE_PREFIX.'message_channels', 'mc')
            ->select('id, channel, channel_id, properties, message_id')
            ->where(\$q->expr()->eq('id', ':channelId'))
            ->setParameter('channelId', \$channelId)
            ->andWhere(\$q->expr()->eq('is_enabled', true, 'boolean'));

        return \$q->execute()->fetch();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Entity/MessageRepository.php";
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
        return new Source("", "@bundles/ChannelBundle/Entity/MessageRepository.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Entity/MessageRepository.php");
    }
}
