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

/* @bundles/LeadBundle/Field/CustomFieldIndex.php */
class __TwigTemplate_2719cec6ec73ca045419ff168e2bfba3ce9bd4b6e2a310696465796af016de8c extends Template
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

use Doctrine\\DBAL\\Exception\\DriverException;
use Mautic\\CoreBundle\\Doctrine\\Helper\\IndexSchemaHelper;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Monolog\\Logger;

class CustomFieldIndex
{
    /**
     * @var IndexSchemaHelper
     */
    private \$indexSchemaHelper;

    /**
     * @var Logger
     */
    private \$logger;

    /**
     * @var FieldsWithUniqueIdentifier
     */
    private \$fieldsWithUniqueIdentifier;

    public function __construct(
        IndexSchemaHelper \$indexSchemaHelper,
        Logger \$logger,
        FieldsWithUniqueIdentifier \$fieldsWithUniqueIdentifier
    ) {
        \$this->indexSchemaHelper          = \$indexSchemaHelper;
        \$this->logger                     = \$logger;
        \$this->fieldsWithUniqueIdentifier = \$fieldsWithUniqueIdentifier;
    }

    /**
     * Update the unique_identifier_search index and add an index for this field.
     *
     * @throws DriverException
     * @throws \\Doctrine\\DBAL\\Schema\\SchemaException
     * @throws \\Mautic\\CoreBundle\\Exception\\SchemaException
     */
    public function addIndexOnColumn(LeadField \$leadField): void
    {
        try {
            /** @var \\Mautic\\CoreBundle\\Doctrine\\Helper\\IndexSchemaHelper \$modifySchema */
            \$modifySchema = \$this->indexSchemaHelper->setName(\$leadField->getCustomFieldObject());

            \$alias = \$leadField->getAlias();

            \$modifySchema->addIndex([\$alias], \$alias.'_search');
            \$modifySchema->allowColumn(\$alias);

            if (\$leadField->getIsUniqueIdentifier()) {
                // Get list of current uniques
                \$uniqueIdentifierFields = \$this->fieldsWithUniqueIdentifier->getFieldsWithUniqueIdentifier();

                // Always use email
                \$indexColumns   = ['email'];
                \$indexColumns   = array_merge(\$indexColumns, array_keys(\$uniqueIdentifierFields));
                \$indexColumns[] = \$alias;

                // Only use three to prevent max key length errors
                \$indexColumns = array_slice(\$indexColumns, 0, 3);
                \$modifySchema->addIndex(\$indexColumns, 'unique_identifier_search');
            }

            \$modifySchema->executeChanges();
        } catch (DriverException \$e) {
            if (1069 === \$e->getErrorCode() /* ER_TOO_MANY_KEYS */) {
                \$this->logger->addWarning(\$e->getMessage());
            } else {
                throw \$e;
            }
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
        return "@bundles/LeadBundle/Field/CustomFieldIndex.php";
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
        return new Source("", "@bundles/LeadBundle/Field/CustomFieldIndex.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Field/CustomFieldIndex.php");
    }
}
