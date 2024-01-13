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

/* @bundles/LeadBundle/Field/CustomFieldColumn.php */
class __TwigTemplate_9a1200ebdcb60036f3b09434f66e8fa6095c9117a20203eb252d8a2875bac817 extends Template
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

namespace Mautic\\LeadBundle\\Field;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Exception\\DriverException;
use Mautic\\CoreBundle\\Doctrine\\Helper\\ColumnSchemaHelper;
use Mautic\\CoreBundle\\Exception\\SchemaException;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Field\\Dispatcher\\FieldColumnDispatcher;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Exception\\CustomFieldLimitException;
use Monolog\\Logger;
use Symfony\\Component\\Translation\\TranslatorInterface;

class CustomFieldColumn
{
    /**
     * @var ColumnSchemaHelper
     */
    private \$columnSchemaHelper;

    /**
     * @var SchemaDefinition
     */
    private \$schemaDefinition;

    /**
     * @var Logger
     */
    private \$logger;

    /**
     * @var LeadFieldSaver
     */
    private \$leadFieldSaver;

    /**
     * @var CustomFieldIndex
     */
    private \$customFieldIndex;

    /**
     * @var FieldColumnDispatcher
     */
    private \$fieldColumnDispatcher;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(
        ColumnSchemaHelper \$columnSchemaHelper,
        SchemaDefinition \$schemaDefinition,
        Logger \$logger,
        LeadFieldSaver \$leadFieldSaver,
        CustomFieldIndex \$customFieldIndex,
        FieldColumnDispatcher \$fieldColumnDispatcher,
        TranslatorInterface \$translator
    ) {
        \$this->columnSchemaHelper    = \$columnSchemaHelper;
        \$this->schemaDefinition      = \$schemaDefinition;
        \$this->logger                = \$logger;
        \$this->leadFieldSaver        = \$leadFieldSaver;
        \$this->customFieldIndex      = \$customFieldIndex;
        \$this->fieldColumnDispatcher = \$fieldColumnDispatcher;
        \$this->translator            = \$translator;
    }

    /**
     * @throws AbortColumnCreateException
     * @throws CustomFieldLimitException
     * @throws DBALException
     * @throws DriverException
     * @throws \\Doctrine\\DBAL\\Schema\\SchemaException
     * @throws \\Mautic\\CoreBundle\\Exception\\SchemaException
     */
    public function createLeadColumn(LeadField \$leadField): void
    {
        \$leadsSchema = \$this->columnSchemaHelper->setName(\$leadField->getCustomFieldObject());

        // We do not need to do anything if the column already exists
        // But we have to check if the LeadField entity is new.
        // In such case we must throw an exception to warn users that the column already exists.
        try {
            if (\$leadsSchema->checkColumnExists(\$leadField->getAlias(), \$leadField->isNew())) {
                return;
            }
        } catch (SchemaException \$e) {
            // We use slightly different error message if the column already exists in this case.
            throw new SchemaException(\$this->translator->trans('mautic.lead.field.column.already.exists', ['%field%' => \$leadField->getName()], 'validators'));
        }

        try {
            \$this->fieldColumnDispatcher->dispatchPreAddColumnEvent(\$leadField);
        } catch (AbortColumnCreateException \$e) {
            // Save the field metadata and throw the exception again to stop column creation.
            // As the column should be created by a background job.
            \$this->leadFieldSaver->saveLeadFieldEntityWithoutColumnCreated(\$leadField);

            throw \$e;
        }

        \$this->processCreateLeadColumn(\$leadField);
    }

    /**
     * Create the field as its own column in the leads table.
     *
     * @throws CustomFieldLimitException
     * @throws DriverException
     * @throws \\Doctrine\\DBAL\\Schema\\SchemaException
     * @throws \\Mautic\\CoreBundle\\Exception\\SchemaException
     */
    public function processCreateLeadColumn(LeadField \$leadField, bool \$saveLeadField = true): void
    {
        \$leadsSchema = \$this->columnSchemaHelper->setName(\$leadField->getCustomFieldObject());

        // Check if column do not exist. This method could be called from plugins too.
        if (\$leadsSchema->checkColumnExists(\$leadField->getAlias())) {
            return;
        }

        \$schemaDefinition = \$this->schemaDefinition->getSchemaDefinitionNonStatic(
            \$leadField->getAlias(),
            \$leadField->getType(),
            (bool) \$leadField->getIsUniqueIdentifier()
        );

        \$leadsSchema->addColumn(\$schemaDefinition);

        try {
            \$leadsSchema->executeChanges();
        } catch (DriverException \$e) {
            \$this->logger->addWarning(\$e->getMessage());

            if (1118 === \$e->getErrorCode() /* ER_TOO_BIG_ROWSIZE */) {
                throw new CustomFieldLimitException('mautic.lead.field.max_column_error');
            }

            throw \$e;
        }

        if (\$saveLeadField) {
            //\$leadField is a new entity (this is not executed for update), it was successfully added to the lead table > save it
            \$this->leadFieldSaver->saveLeadFieldEntity(\$leadField, true);
        }

        if ('string' === \$schemaDefinition['type']) {
            \$this->customFieldIndex->addIndexOnColumn(\$leadField);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/CustomFieldColumn.php";
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
        return new Source("", "@bundles/LeadBundle/Field/CustomFieldColumn.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Field/CustomFieldColumn.php");
    }
}
