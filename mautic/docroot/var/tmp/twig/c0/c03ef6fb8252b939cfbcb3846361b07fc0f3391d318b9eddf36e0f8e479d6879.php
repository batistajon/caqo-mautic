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

/* @bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectHelper/CompanyObjectHelper.php */
class __TwigTemplate_d54752f9ea7d7a44668c744e10f9dacaa0685ddaf283743d3a9192c7c39027e5 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectHelper;

use Doctrine\\DBAL\\Connection;
use Mautic\\IntegrationsBundle\\Entity\\ObjectMapping;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\UpdatedObjectMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\Logger\\DebugLogger;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\CompanyRepository;
use Mautic\\LeadBundle\\Model\\CompanyModel;

class CompanyObjectHelper implements ObjectHelperInterface
{
    /**
     * @var CompanyModel
     */
    private \$model;

    /**
     * @var CompanyRepository
     */
    private \$repository;

    /**
     * @var Connection
     */
    private \$connection;

    public function __construct(CompanyModel \$model, CompanyRepository \$repository, Connection \$connection)
    {
        \$this->model      = \$model;
        \$this->repository = \$repository;
        \$this->connection = \$connection;
    }

    /**
     * @param ObjectChangeDAO[] \$objects
     *
     * @return ObjectMapping[]
     */
    public function create(array \$objects): array
    {
        \$objectMappings = [];
        foreach (\$objects as \$object) {
            \$company = new Company();
            \$fields  = \$object->getFields();

            foreach (\$fields as \$field) {
                \$company->addUpdatedField(\$field->getName(), \$field->getValue()->getNormalizedValue());
            }

            \$this->model->saveEntity(\$company);
            \$this->repository->detachEntity(\$company);

            DebugLogger::log(
                MauticSyncDataExchange::NAME,
                sprintf(
                    'Created company ID %d',
                    \$company->getId()
                ),
                __CLASS__.':'.__FUNCTION__
            );

            \$objectMapping = new ObjectMapping();
            \$objectMapping->setLastSyncDate(\$object->getChangeDateTime())
                ->setIntegration(\$object->getIntegration())
                ->setIntegrationObjectName(\$object->getMappedObject())
                ->setIntegrationObjectId(\$object->getMappedObjectId())
                ->setInternalObjectName(MauticSyncDataExchange::OBJECT_COMPANY)
                ->setInternalObjectId(\$company->getId());
            \$objectMappings[] = \$objectMapping;
        }

        return \$objectMappings;
    }

    /**
     * @param ObjectChangeDAO[] \$objects
     *
     * @return UpdatedObjectMappingDAO[]
     */
    public function update(array \$ids, array \$objects): array
    {
        \$updatedMappedObjects = [];

        if (!\$ids) {
            return \$updatedMappedObjects;
        }

        /** @var Company[] \$companies */
        \$companies = \$this->model->getEntities(['ids' => \$ids]);
        DebugLogger::log(
            MauticSyncDataExchange::NAME,
            sprintf(
                'Found %d companies to update with ids %s',
                count(\$companies),
                implode(', ', \$ids)
            ),
            __CLASS__.':'.__FUNCTION__
        );

        foreach (\$companies as \$company) {
            /** @var ObjectChangeDAO \$changedObject */
            \$changedObject = \$objects[\$company->getId()];
            \$fields        = \$changedObject->getFields();

            foreach (\$fields as \$field) {
                \$company->addUpdatedField(\$field->getName(), \$field->getValue()->getNormalizedValue());
            }

            \$this->model->saveEntity(\$company);
            \$this->repository->detachEntity(\$company);

            DebugLogger::log(
                MauticSyncDataExchange::NAME,
                sprintf(
                    'Updated company ID %d',
                    \$company->getId()
                ),
                __CLASS__.':'.__FUNCTION__
            );

            // Integration name and ID are stored in the change's mappedObject/mappedObjectId
            \$updatedMappedObjects[] = new UpdatedObjectMappingDAO(
                \$changedObject->getIntegration(),
                \$changedObject->getMappedObject(),
                \$changedObject->getMappedObjectId(),
                \$changedObject->getChangeDateTime()
            );
        }

        return \$updatedMappedObjects;
    }

    /**
     * Unfortunately the CompanyRepository doesn't give us what we need so we have to write our own queries.
     *
     * @param int \$start
     * @param int \$limit
     */
    public function findObjectsBetweenDates(\\DateTimeInterface \$from, \\DateTimeInterface \$to, \$start, \$limit): array
    {
        \$qb = \$this->connection->createQueryBuilder();
        \$qb->select('*')
            ->from(MAUTIC_TABLE_PREFIX.'companies', 'c')
            ->where(
                \$qb->expr()->orX(
                    \$qb->expr()->andX(
                        \$qb->expr()->isNotNull('c.date_modified'),
                        \$qb->expr()->comparison('c.date_modified', 'BETWEEN', ':dateFrom and :dateTo')
                    ),
                    \$qb->expr()->andX(
                        \$qb->expr()->isNull('c.date_modified'),
                        \$qb->expr()->comparison('c.date_added', 'BETWEEN', ':dateFrom and :dateTo')
                    )
                )
            )
            ->setParameter('dateFrom', \$from->format('Y-m-d H:i:s'))
            ->setParameter('dateTo', \$to->format('Y-m-d H:i:s'))
            ->setFirstResult(\$start)
            ->setMaxResults(\$limit);

        return \$qb->execute()->fetchAll();
    }

    public function findObjectsByIds(array \$ids): array
    {
        if (!count(\$ids)) {
            return [];
        }

        \$qb = \$this->connection->createQueryBuilder();
        \$qb->select('*')
            ->from(MAUTIC_TABLE_PREFIX.'companies', 'c')
            ->where(
                \$qb->expr()->in('id', \$ids)
            );

        return \$qb->execute()->fetchAll();
    }

    public function findObjectsByFieldValues(array \$fields): array
    {
        \$q = \$this->connection->createQueryBuilder()
            ->select('c.id')
            ->from(MAUTIC_TABLE_PREFIX.'companies', 'c');

        foreach (\$fields as \$col => \$val) {
            // Use andWhere because Mautic treats conflicting unique identifiers as different objects
            \$q->{\$this->repository->getUniqueIdentifiersWherePart()}(\"c.\$col = :\".\$col)
                ->setParameter(\$col, \$val);
        }

        return \$q->execute()->fetchAll();
    }

    public function findOwnerIds(array \$objectIds): array
    {
        if (empty(\$objectIds)) {
            return [];
        }

        \$qb = \$this->connection->createQueryBuilder();
        \$qb->select('c.owner_id, c.id');
        \$qb->from(MAUTIC_TABLE_PREFIX.'companies', 'c');
        \$qb->where('c.owner_id IS NOT NULL');
        \$qb->andWhere('c.id IN (:objectIds)');
        \$qb->setParameter('objectIds', \$objectIds, Connection::PARAM_INT_ARRAY);

        return \$qb->execute()->fetchAll();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectHelper/CompanyObjectHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectHelper/CompanyObjectHelper.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectHelper/CompanyObjectHelper.php");
    }
}
