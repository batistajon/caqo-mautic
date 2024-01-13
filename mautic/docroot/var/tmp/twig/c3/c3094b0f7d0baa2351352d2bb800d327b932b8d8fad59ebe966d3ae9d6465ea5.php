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

/* @bundles/IntegrationsBundle/Entity/ObjectMappingRepository.php */
class __TwigTemplate_763f10f8d82e2f8d4f95e822cb895f61dd6185568a0eed36ca132aa77c1e362b extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Entity;

use Doctrine\\DBAL\\Connection;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

class ObjectMappingRepository extends CommonRepository
{
    /**
     * @param \$integration
     * @param \$integrationObjectName
     * @param \$integrationObjectId
     * @param \$internalObjectName
     *
     * @return array|null
     */
    public function getInternalObject(\$integration, \$integrationObjectName, \$integrationObjectId, \$internalObjectName)
    {
        \$qb = \$this->getEntityManager()->getConnection()->createQueryBuilder();
        \$qb->select('*')
            ->from(MAUTIC_TABLE_PREFIX.'sync_object_mapping', 'i')
            ->where(
                \$qb->expr()->andX(
                    \$qb->expr()->eq('i.integration', ':integration'),
                    \$qb->expr()->eq('i.integration_object_name', ':integrationObjectName'),
                    \$qb->expr()->eq('i.integration_object_id', ':integrationObjectId'),
                    \$qb->expr()->eq('i.internal_object_name', ':internalObjectName')
                )
            )
            ->setParameter('integration', \$integration)
            ->setParameter('integrationObjectName', \$integrationObjectName)
            ->setParameter('integrationObjectId', \$integrationObjectId)
            ->setParameter('internalObjectName', \$internalObjectName);

        \$result = \$qb->execute()->fetch();

        return \$result ?: null;
    }

    /**
     * @param \$integration
     * @param \$internalObjectName
     * @param \$internalObjectId
     * @param \$integrationObjectName
     *
     * @return array|null
     */
    public function getIntegrationObject(\$integration, \$internalObjectName, \$internalObjectId, \$integrationObjectName)
    {
        \$qb = \$this->getEntityManager()->getConnection()->createQueryBuilder();
        \$qb->select('*')
            ->from(MAUTIC_TABLE_PREFIX.'sync_object_mapping', 'i')
            ->where(
                \$qb->expr()->andX(
                    \$qb->expr()->eq('i.integration', ':integration'),
                    \$qb->expr()->eq('i.internal_object_name', ':internalObjectName'),
                    \$qb->expr()->eq('i.internal_object_id', ':internalObjectId'),
                    \$qb->expr()->eq('i.integration_object_name', ':integrationObjectName')
                )
            )
            ->setParameter('integration', \$integration)
            ->setParameter('internalObjectName', \$internalObjectName)
            ->setParameter('internalObjectId', \$internalObjectId)
            ->setParameter('integrationObjectName', \$integrationObjectName);

        \$result = \$qb->execute()->fetch();

        return \$result ?: null;
    }

    /**
     * @param string \$integration
     * @param string \$oldObjectName
     * @param mixed  \$oldObjectId
     * @param string \$newObjectName
     * @param mixed  \$newObjectId
     *
     * @return int
     */
    public function updateIntegrationObject(\$integration, \$oldObjectName, \$oldObjectId, \$newObjectName, \$newObjectId)
    {
        \$qb = \$this->getEntityManager()->getConnection()->createQueryBuilder();

        \$qb->update(MAUTIC_TABLE_PREFIX.'sync_object_mapping', 'i')
            ->set('integration_object_name', ':newObjectName')
            ->set('integration_object_id', ':newObjectId')
            ->where(
                \$qb->expr()->andX(
                    \$qb->expr()->eq('i.integration', ':integration'),
                    \$qb->expr()->eq('i.integration_object_name', ':oldObjectName'),
                    \$qb->expr()->eq('i.integration_object_id', ':oldObjectId')
                )
            )
            ->setParameter('newObjectName', \$newObjectName)
            ->setParameter('newObjectId', \$newObjectId)
            ->setParameter('integration', \$integration)
            ->setParameter('oldObjectName', \$oldObjectName)
            ->setParameter('oldObjectId', \$oldObjectId);

        return \$qb->execute();
    }

    /**
     * @param \$integration
     * @param \$objectName
     * @param string[]|string \$objectIds
     *
     * @return \\Doctrine\\DBAL\\Driver\\Statement|int
     */
    public function markAsDeleted(string \$integration, string \$objectName, \$objectIds): int
    {
        \$qb = \$this->getEntityManager()->getConnection()->createQueryBuilder();

        \$qb->update(MAUTIC_TABLE_PREFIX.'sync_object_mapping', 'm')
            ->set('is_deleted', 1)
            ->where(
                \$qb->expr()->andX(
                    \$qb->expr()->eq('m.integration', ':integration'),
                    \$qb->expr()->eq('m.integration_object_name', ':objectName')
                )
            )
            ->setParameter('integration', \$integration)
            ->setParameter('objectName', \$objectName);

        if (is_array(\$objectIds)) {
            \$qb->setParameter('objectId', \$objectIds, Connection::PARAM_STR_ARRAY);
            \$qb->andWhere(\$qb->expr()->in('m.integration_object_id', ':objectId'));
        } else {
            \$qb->setParameter('objectId', \$objectIds);
            \$qb->andWhere(\$qb->expr()->eq('m.integration_object_id', ':objectId'));
        }

        return \$qb->execute();
    }

    public function deleteEntitiesForObject(int \$internalObjectId, string \$internalObject): void
    {
        \$qb = \$this->_em->createQueryBuilder();
        \$qb->delete(ObjectMapping::class, 'm');
        \$qb->where('m.internalObjectName = :internalObject');
        \$qb->andWhere('m.internalObjectId = :internalObjectId');
        \$qb->setParameter('internalObject', \$internalObject);
        \$qb->setParameter('internalObjectId', \$internalObjectId);
        \$qb->getQuery()->execute();
    }

    /**
     * @return ObjectMapping[]
     */
    public function getIntegrationMappingsForInternalObject(string \$internalObject, int \$internalObjectId): array
    {
        \$qb = \$this->createQueryBuilder('m');
        \$qb->select('m')
            ->where(
                \$qb->expr()->andX(
                    \$qb->expr()->eq('m.internalObjectName', ':internalObject'),
                    \$qb->expr()->eq('m.internalObjectId', ':internalObjectId')
                )
            )
            ->setParameter('internalObject', \$internalObject)
            ->setParameter('internalObjectId', \$internalObjectId);

        return \$qb->getQuery()->getResult();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Entity/ObjectMappingRepository.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Entity/ObjectMappingRepository.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Entity/ObjectMappingRepository.php");
    }
}
